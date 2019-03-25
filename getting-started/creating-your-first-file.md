---
layout: page
title: Creating your first file
parent_title: Getting Started
permalink: /getting-started/creating-your-first-file.html
modification_time: 2017-03-13T14:34:39+01:00
---
The following PHP will produce the most basic example with mPDF &ge; 7.0.

```php
<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';
// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();

// Write some HTML code:
$mpdf->WriteHTML('Hello World');

// Output a PDF file directly to the browser
$mpdf->Output();

```

Note: For mPDF < 7.0 use `$mpdf = new \mPDF();`

# Notes

For details and options for the `Output()` method, see 
<a href="{{ "/reference/mpdf-functions/output.html" | prepend: site.baseurl }}">Output()</a>.


<div class="alert alert-info" role="alert" markdown="1">
  **Note:** `_MPDF_PATH` was required to be defined explicitly prior to mPDF 4.0 e.g. `define('_MPDF_PATH','../')`.
  Since mPDF 4.0 the value should be automatically defined by the script itself when including the mpdf.php file.

  Since mPDF 7.0 this constant is deprecated and removed.
</div>

