---
layout: page
title: SetAlpha()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setalpha.html
modification_time: 2015-08-05T12:00:53+00:00
---

(mPDF &ge; 1.0)

SetAlpha – Set the opacity for Images

# Description

void **SetAlpha** ( float <span class="parameter">$alpha</span> [, string <span class="parameter">$blend</span> ])

Set the opacity and blend mode for Images

# Parameters

<span class="parameter">$alpha</span>

: This parameter specifies the opacity for any subsequent images written to the current document.

  **Values**

  Float: `0` (transparent) to `1` (opaque)

<span class="parameter">$blend</span>

: This parameter specifies the blend mode.

  **Values**

  One of the following strings:

  * `'Normal'`
  * `'Multiply'`
  * `'Screen'`
  * `'Overlay'`
  * `'Darken'`
  * `'Lighten'`
  * `'ColorDodge'`
  * `'ColorBurn'`
  * `'HardLight'`
  * `'SoftLight'`
  * `'Difference'`
  * `'Exclusion'`
  * `'Hue'`
  * `'Saturation'`
  * `'Color'`
  * `'Luminosity'`

  Default: `'Normal'`

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
</tbody>
</table>

# Examples

Example #1

```php
<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();

$mpdf->SetAlpha(0.5);
$mpdf->WriteHTML('<img src="clematis.jpg" />');
$mpdf->SetAlpha(1);

// This produces the identical result as the last 3 lines
// $mpdf->WriteHTML('<img src="clematis.jpg" opacity="0.5" />');

$mpdf->Output();
exit;

```

# See Also

* <a href="{{ "/reference/mpdf-functions/image.html" | prepend: site.baseurl }}">Image()</a> - Write an image to the current document

