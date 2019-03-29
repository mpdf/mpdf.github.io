---
layout: page
title: SetDisplayMode()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setdisplaymode.html
modification_time: 2019-03-29T12:33:00+00:00
---

(mPDF &ge; 1.0)

SetDisplayMode – Specify the initial Display Mode when the PDF file is opened in Adobe Reader

# Description

void **SetDisplayMode** ( mixed <span class="parameter">$zoom</span> [, string <span class="parameter">$layout</span> ])

Specify the initial Display Mode when the PDF file is opened in Adobe Reader. When the user opens the finished file in
Adobe Reader, these values will determine the initial appearance and layout.

# Parameters

<span class="parameter">$zoom</span>

: This parameter specifies the magnification (zoom) of the display when the document is opened.

  **Values** (case-sensitive)

  * `'fullpage'`
    : Fit a whole page in the screen
  * `'fullwidth'`
    : Fit the width of the page in the screen
  * `'real'`
    : Display at real size
  * `'default'`
    : User's default setting in Adobe Reader
  * `'none'`
    : Default setting in PDF reader; No OpenAction is written in the document, so the file should be safer for e-mailing
  * or an <span class="smallblock">INTEGER</span>
    : Display at a percentage zoom (e.g. `90` will display at 90% zoom)

<span class="parameter">$layout</span>

: Specify the page layout to be used when the document is opened.

  **Values** (case-sensitive)

  * `'single'`
    : Display one page at a time
  * `'continuous'`
    : Display the pages in one column
  * `'two'`
    : Display the pages in two columns (first page determined by document direction (e.g. RTL))
  * `'twoleft'`
    : Display the pages in two columns, with the first page displayed on the left side (mPDF &ge; 5.2)
  * `'tworight'`
    : Display the pages in two columns, with the first page displayed on the right side (mPDF &ge; 5.2)
  * `'default'`
    : User's default setting in Adobe Reader

  Default: `'continuous'`


# Examples

Example #1

```php
<?php
$mpdf = new \Mpdf\Mpdf();

$mpdf->SetDisplayMode('fullwidth');

$mpdf->WriteHTML('
Hello World
');
$mpdf->Output('filename.pdf');
```

Example #2

```php
<?php

// Display at 90% zoom - note the 90 is a number not a string
$mpdf->SetDisplayMode(90);

// Display two pages side by side (book style)
$mpdf->SetDisplayMode('fullpage','two');
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
  <td>1.0</td>
  <td>Function was added.</td>
</tr>
<tr>
  <td>5.2</td>
  <td markdown="1">
2 options for `$layout` parameter added (`twoleft` and `tworight`)
  </td>
</tr>
<tr>
  <td>8.0.1</td>
  <td markdown="1">
`none` option for `$zoom` parameter added
  </td>
</tr>
</tbody>
</table>

# See Also

 * <a href="{{ "/reference/mpdf-functions/setdisplaypreferences.html" | prepend: site.baseurl }}">SetDisplayPreferences()</a> - Defines the way the document shall be presented on the screen
