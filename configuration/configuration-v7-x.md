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
  can be passed to the parameter.

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

All variables can be changed at runtime using Mpdf public properties as defined in `ConfigVariables` ([source](https://github.com/mpdf/mpdf/blob/development/src/Config/ConfigVariables.php)) and
`FontVariables` ([source](https://github.com/mpdf/mpdf/blob/development/src/Config/FontVariables.php)) classes:

## Example

```php
<?php

$mpdf->pdf_version = '1.5';

```
