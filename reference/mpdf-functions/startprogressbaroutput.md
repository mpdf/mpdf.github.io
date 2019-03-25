---
layout: page
title: StartProgressBarOutput()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/startprogressbaroutput.html
modification_time: 2015-08-05T12:01:11+00:00
---

(mPDF &ge; 4.2 & < 7.0)

<div class="alert alert-danger" role="alert" markdown="1">
  **Note:** This feature was removed in mPDF 7.0
</div>

StartProgressBarOutput – Enable progress bars to be shown during file generation

# Description

void StartProgressBarOutput ( [ string <span class="parameter">$mode</span> ] )

Enable progress bars to be shown during file generation. Not recommended for general use, but may be helpful for
development purposes, or for slow document generation. To set this value globally you can edit the value for
`$progressBar` in the configuration file <span class="filename">config.php</span>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** You may need to define the constant `_MPDF_URI`
  if you use progress bars. The constant `_MPDF_URI` is needed to redirect the user to the PDF file (and prior to
  mPDF 5.0 to locate a javascript file within the progress bar script). It must be either a relative path
  (e.g. `'../'`) or a full URI (e.g. `'http://www.mydomain.com/mpdf/'`).

  If you do not define it before calling `mPDF()` mPDF will assign it the same value as `_MPDF_PATH`. This is
  fine if you have used a relative path. `_MPDF_PATH` requires either a relative path or a filesystem real path
  (e.g. `'/homepages/27/d84233457/htdocs/'`)
</div>

# Parameters

<span class="parameter">$mode</span>

: **Values** (case-insensitive)

  * `1` or <span class="smallblock">BLANK</span> or omitted: Shows 1 progress bar (simple form)

  * `2`: Shows multiple progress bars for detailed examination of progress

  Default: `1`

# Examples

```php
<?php
define('_MPDF_URI','../');  // must be  a relative or absolute URI - not a file system path
$mpdf = new \Mpdf\Mpdf();

$mpdf->StartProgressBarOutput(2);

$mpdf->WriteHTML('You will hardly have time to see the progress bars!');
$mpdf->Output();

```

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
  <td>4.2</td>
  <td>Variable was added.</td>
</tr>
<tr>
  <td>7.0</td>
  <td>Variable was removed along with progressbar capabilities.</td>
</tr>
</tbody>
</table>

# See Also

- <a href="{{ "/reference/mpdf-variables/progressbar.html" | prepend: site.baseurl }}">$progressBar</a> – Specify whether to show progress bars during file generation
- <a href="{{ "/reference/mpdf-variables/progbar-heading.html" | prepend: site.baseurl }}">$progbar_heading</a> - define customised heading for progress bars
- <a href="{{ "/reference/mpdf-variables/progbar-althtml.html" | prepend: site.baseurl }}">$progbar_altHTML</a> - define customised HTML for progress bars

