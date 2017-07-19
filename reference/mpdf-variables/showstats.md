---
layout: page
title: showStats
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/showstats.html
modification_time: 2015-08-05T12:02:26+00:00
---

(mPDF >= 4.0)

showStats – Display performance data for the generated PDF file

# Value

void **showStats**

Specify whether to show performance data. Useful if you are developing with mPDF, and want to test different configurations.

# Values

<span class="parameter">$showStats</span> =  `true`\|`false`

**Values**

* `true`: enable display of data
* `false`: disabled

Default: `false`

# Changelog

<table class="table">
<thead>
<tr>
  <th>Version</th>
  <th>Description</th>
</tr>
</thead>
<tbody>
<tr>
  <td>4.0</td>
  <td>Variable was added.</td>
</tr>
</tbody>
</table>

# Examples

Example #1

```php
<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();

$mpdf->showStats = true;

$mpdf->WriteHTML("Hello World");
$mpdf->Output();

```


This will suppress output of the PDF file, and display data on the browser such as:


```php
Generated in 0.45 seconds

Compiled in 0.46 seconds (total)

Peak Memory usage 10.25MB

PDF file size 37kB

Number of fonts 6

```

# See Also

* <a href="{{ "/reference/mpdf-variables/debug.html" | prepend: site.baseurl }}">debug</a> - specify whether to show errors
* <a href="{{ "/reference/mpdf-variables/showimageerrors.html" | prepend: site.baseurl }}">showImageErrors</a> - show/hide error reporting for problems with Images
* <a href="{{ "/reference/mpdf-variables/allow-output-buffering.html" | prepend: site.baseurl }}">allow_output_buffering</a> - prevent error mesages when using output buffering
