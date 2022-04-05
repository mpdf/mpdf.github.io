---
layout: page
title: Configuration v7+
parent_title: Configuration
permalink: /configuration/configuration-v7-x.html
modification_time: 2017-03-14T08:51:39+00:00
---

(mPDF &ge; 7.0)

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** This describes configuration of mPDF **&ge; 7.0**. Please refer to
  <a href="{{ "/configuration/configuration-files-v6-x.html" | prepend: site.baseurl }}">6.x</a> or
  <a href="{{ "/configuration/configuration-files-v5-x.html" | prepend: site.baseurl }}">5.x</a> for
  configuration methods if you are using lesser version.
</div>

# Constructor configuration

Configuration of mPDF is handled via `$config` array parameter of `\Mpdf\Mpdf::__construct()` method.

* All <a href="{{ "/reference/mpdf-variables/overview.html" | prepend: site.baseurl }}">configuration variables</a>
  can be passed to the parameter as keys.

  Default values and other configurable keys are specified in
  `ConfigVariables` ([source](https://github.com/mpdf/mpdf/blob/development/src/Config/ConfigVariables.php))
  and `FontVariables` ([source](https://github.com/mpdf/mpdf/blob/development/src/Config/FontVariables.php)) classes.

*  Also see variables ported from mPDF < 7.0 constructor
  (see for details: <a href="{{ "/reference/mpdf-functions/construct.html" | prepend: site.baseurl }}">__construct()</a> method)

```php
<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf([
    'mode' => 'utf-8',
    'format' => [190, 236],
    'orientation' => 'L'
]);

```

# Runtime configuration

Mpdf configuration can be changed at runtime using Mpdf public properties as defined in `ConfigVariables` ([source](https://github.com/mpdf/mpdf/blob/ development/src/Config/ConfigVariables.php)) and `FontVariables` ([source](https://github.com/mpdf/mpdf/blob/development/src/Config/FontVariables.php)) classes:

<div class="alert alert-danger" role="alert" markdown="1">
  **Warning:** Changing configuration during generating of the PDF file can lead to errors and unexpected results. 
  It is always safer to define all configuration in the constructor of the `Mpdf\Mpdf` class.
</div>

## Example

```php
<?php

$mpdf->pdf_version = '1.5';

```

# Internal service container

(mPDF &ge; 8.1)

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** As this is an experimental feature, key names for container services can change in future versions.
</div>

A new optional parameter has been added to the Mpdf class constructor. It expects an instance of `\Mpdf\Container\ContainerInterface` (which is compatible and in mPDF 10.0 will be replaced by proper PSR-11 `ContainerInterface`), which can now override two internal services: HTTP client, and local filesystem resource loader.

## HTTP Client

The `Mpdf\Http\ClientInterface`, also compatible with and planned to be upgraded to PSR-7 HTTP Client, can be used by the `httpClient` key of the passed Container and used to restrict remote HTTP calls, implementing HTTP requests cache, altering incoming responses etc. With a simple bridge, it can be used to leverage already used HTTP client in an existing application, such as Guzzle or Symfony HTTP Client.

By default, a simple implementation based on curl (if available) or sockets (as a fallback) is used.

## Local filesystem content loader

The simple `Mpdf\File\LocalContentLoaderInterface` is used to load local content. Custom implementation by the container key `localContentLoader` can implement restrictions for certain directories of the filesystem to prevent outside HTML code loading unwanted files. Default implementation uses a simple file_get_contents call.

Unwanted stream wrappers are handled for all local and remote content fetches in an encapsulating internal service.

## Example

```php
<?php

use Mpdf\Http\Response;
use Mpdf\Http\Stream;
use Psr\Http\Message\RequestInterface;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

class CustomHttpClient implements \Mpdf\Http\ClientInterface {

	public function sendRequest(RequestInterface $request)
	{
		$response = new Response();

    // Will return an image of a tiger for all remote requests
		$stream = Stream::create(file_get_contents(__DIR__ . '/assets/tiger.jpg'));
		$stream->rewind();

		return $response
			->withStatus(200)
			->withBody($stream);
	}

};

class CustomContentLoader implements \Mpdf\File\LocalContentLoaderInterface, \Psr\Log\LoggerAwareInterface
{
	private $logger;

	public function __construct(LoggerInterface $logger = null)
	{
		$this->logger = $logger ?: new NullLogger();
	}

	public function load($path)
	{
    // Will return an empty GIF image for all images not matching the pattern
		if (!preg_match('/alpha[0-9]{2}/', $path)) {
			$this->logger->info(sprintf('Custom local content loader ignoring path "%s"', $path));

			return base64_decode('R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7');
		}

		return file_get_contents($path);
	}

	public function setLogger(LoggerInterface $logger)
	{
		$this->logger = $logger;
	}
}

class StdErrLogger extends \Psr\Log\AbstractLogger {
    public function log($level, $message, array $context = [])
    {
        // fwrite(STDERR, $level . ': ' . $message . "\n");
    }
}

$client = new CustomHttpClient();
$loader = new CustomContentLoader();

$mpdf = new \Mpdf\Mpdf([], new \Mpdf\Container\SimpleContainer([
	'httpClient' => $client,
	'localContentLoader' => $loader,
]));

$mpdf->setLogger(new StdErrLogger());

```
