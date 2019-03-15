---
layout: page
title: Installation v7+
parent_title: Installation & Setup
permalink: /installation-setup/installation-v7-x.html
modification_time: 2017-03-08T10:02:23+02:00
---

# Installation

Official installation method is via composer and its packagist package [mpdf/mpdf](https://packagist.org/packages/mpdf/mpdf).

```bash

$ composer require mpdf/mpdf

```

# Usage

The simplest usage of the library would be as follows:

```php
<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>Hello world!</h1>');
$mpdf->Output();
```

All <a href="{{ "/reference/mpdf-variables/overview.html" | prepend: site.baseurl }}">configuration directives</a> can
be set by the `$config` parameter of the <a href="{{ "/reference/mpdf-functions/construct.html" | prepend: site.baseurl }}">constructor</a>.

```php
<?php
...
// Define a page using all default values except "L" for Landscape orientation
$mpdf = new \Mpdf\Mpdf(['orientation' => 'L']);
...
```

It is recommended to <a href="{{ "/installation-setup/folders-for-temporary-files.html" | prepend: site.baseurl }}">set custom temporary directory</a>
via `tempDir` configuration key. The directory must have write permissions (mode `775` is recommended).

```php
<?php
// Define a page using all default values except "L" for Landscape orientation
$mpdf = new \Mpdf\Mpdf(['tempDir' => __DIR__ . '/custom/temp/dir/path']);
```

If you have problems, please read the section on
<a href="{{ "/troubleshooting/known-issues.html" | prepend: site.baseurl }}">troubleshooting</a> in the manual.

# Upgrading from older mPDF versions

mPDF 7.x has introduced namespaces, so in order to use mPDF, you have to reference the class either by fully
qualified name:

```php
<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

```

or import the class beforehand:

```php
<?php

use Mpdf\Mpdf;

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new Mpdf();

```

The class now accepts only one parameter, an array of configuration directives. See
<a href="{{ "/reference/mpdf-variables/overview.html" | prepend: site.baseurl }}">configuration directives</a> for reference.

If you wish to install additional fonts please see the notes in
<a href="{{ "/fonts-languages/fonts-in-mpdf-7-x.html" | prepend: site.baseurl }}">Fonts & Languages</a>
for further instructions.
