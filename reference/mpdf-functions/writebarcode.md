---
layout: page
title: WriteBarcode()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/writebarcode.html
modification_time: 2015-08-05T12:01:15+00:00
---

(mPDF &ge; 2.0)

mPDF – Write an EAN-13 (ISBN-13) barcode

# Description

void **writeBarcode** (
string <span class="parameter">$code</span>
[, int <span class="parameter">$showisbn</span>
[, float <span class="parameter">$x</span>
[, float <span class="parameter">$y</span>
[, float <span class="parameter">$size</span>
[, float <span class="parameter">$border</span>
[, float <span class="parameter">$padding_left</span> ,
float <span class="parameter">$padding_right</span> ,
float <span class="parameter">$padding_top</span> ,
float <span class="parameter">$padding_bottom</span> ]]]]]])

Write an EAN-13 barcode. Useful information about the EAN-13 (ISBN-13) specification can be found at
<a href="http://www.gs1uk.org/downloads/bar_code/Bar coding getting it right.pdf">
  http://www.gs1uk.org/downloads/bar_code/Bar coding getting it right.pdf
</a>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** This function/method was altered in mPDF 2.2 by
  capitalising the first letter of the name. As function/method names in PHP have hitherto been case-insensitive,
  this should not cause any problems, but it is recommended where possible to use the preferred spelling.
</div>

# Parameters

<span class="parameter">$code</span>

: This parameter specifies the EAN-13 (ISBN-13) code. Accepts 12 or 13 digits (i.e. with or without the check digit)
  and may optionally contain hyphens e.g. `978-09542-2461-5`  or  `978095422461`

<span class="parameter">$showisbn</span>

: Specify whether to show the EAN-13 (ISBN-13) code **above** the barcode. NB The numbers will always appear below the
  bars, but the code above the bars is optional.

  **Values**

  * `1` (or any positive value): show the EAN-13 code
  * `0` (zero): Hide the EAN-13 code

  <span class="smallblock">BLANK</span> or omitted: `1`

<span class="parameter">$x</span>

: Sets the <span class="parameter">$x</span> (horizontal) position for the barcode.

  <span class="smallblock">BLANK</span> or omitted uses the current writing position in the document.

<span class="parameter">$y</span>

: Sets the <span class="parameter">$y</span> (vertical) position for the barcode.

  <span class="smallblock">BLANK</span> or omitted uses the current writing position in the document.

<span class="parameter">$size</span>

: This parameter specifies the size of the barcode relative to the standard. Values between `0.8` and `2.0` (80% to 200%) are accepted.

  Default: `1`

<span class="parameter">$border</span>

: This parameter specifies whether or not to show a border around the barcode.

  **Values**

  * `1` or `true` (or any positive value) will set a border
  * `0` or `false` or <span class="smallblock">BLANK</span> will omit the border

  Default: `0` i.e. No border

<span class="parameter">$padding_left</span>
<span class="parameter">$padding_right</span>
<span class="parameter">$padding_top</span>
<span class="parameter">$padding_bottom</span>

: Sets the padding around the barcode.

  All values should be specified as <span class="smallblock">LENGTH</span> in millimetres

  <span class="smallblock">BLANK</span> or omitted uses the default values.

  Default **Values**
  * <span class="parameter">$padding_left</span>: `1`
  * <span class="parameter">$padding_right</span>: `1`
  * <span class="parameter">$padding_top</span>: `2`
  * <span class="parameter">$padding_bottom</span>: `2`

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
  <td>2.0</td>
  <td>The function was added.</td>
</tr>
</tbody>
</table>

# Examples

```php
<?php
$mpdf = new \Mpdf\Mpdf();

$mpdf->writeBarcode('978-1234-567-890');

$mpdf->Output();

```

