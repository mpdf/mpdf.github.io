---
layout: page
title: \Mpdf\WatermarkImage
parent_title: mPDF classes
permalink: /reference/mpdf-classes/watermarkimage.html
modification_time: 2023-05-29T22:35:00+00:00
---

(mPDF &ge; 8.2.0)

\Mpdf\WatermarkImage()

# Description

**\Mpdf\Watermark** (
string <span class="parameter">$path</span> [,
int|array <span class="parameter">$size</span> [,
string|array <span class="parameter">$position</span> [,
float <span class="parameter">$alpha</span> [,
bool <span class="parameter">$behindContent</span> [,
string <span class="parameter">$alphaBlend</span> ]]]]])

# Parameters

<span class="parameter">$path</span>

: Path to the image of the watermark

<span class="parameter">$size</span>

: Defines the size of the watermark.
  This parameter takes either a pre-defined string, an integer, or an array of width and height.

  **Values**

  * `\Mpdf\Watermark::SIZE_DEFAULT`
    : default i.e. original size of image - may depend on <a href="{{ "/reference/mpdf-variables/img-dpi.html" | prepend: site.baseurl }}">img_dpi</a>
  * `\Mpdf\Watermark::SIZE_FIT_PAGE`
    : Resize to fit the full page size, keeping aspect ratio
  * `\Mpdf\Watermark::SIZE_FIT_FRAME`
    : Resize to fit the print-area (frame) respecting current page margins, keeping aspect ratio
  * <span class="smallblock">integer</span>
    : Resize to full page size minus a margin set by this integer in millimeters, keeping aspect ratio
  * <span class="smallblock">array</span> `[$width, $height]`
    : Specify a size; units in millimeters

  Default: `\Mpdf\Watermark::SIZE_DEFAULT`

<span class="parameter">$position</span>

: Defines the position of the watermark on the page.
  This parameter takes either a pre-defined string or an array of <span class="parameter">$x</span>
  and <span class="parameter">$y</span>.

  **Values**


  * `\Mpdf\Watermark::POSITION_CENTER_PAGE`: Centred on the whole page area
  * `\Mpdf\Watermark::POSITION_CENTER_FRAME`: Centred on the page print-area (frame) respecting page margins
  * <span class="smallblock">array</span> `[$width, $height]`: Specify a position; units in millimeters

  Default: `\Mpdf\Watermark::POSITION_CENTER_PAGE`

<span class="parameter">$alpha</span>

: Alpha of the watermark, values 0-1. 0 = fully visible, 1 = transparent.

<span class="parameter">$behindContent</span>

: Specify whether to place watermark images behind page contents

  **Values**

  * `true`: place watermark images behind page contents
  * `false`: place watermark images in front of all page contents

Default: `false`

<span class="parameter">$alphaBlend</span>

: Specifies the blend mode for overlying watermark images. Different blend modes work with different types of images.
  The blend modes are those specified in the
  <a href="{{ "/reference/pdf-files-adobe/pdf-reference.html" | prepend: site.baseurl }}">PDF reference</a>. The value of
  `'Normal'` gives acceptable results for most cases. `'Multiply'` may produce better results with overlying WMF or SVG images.

  **Values**

- `'Normal'`
- `'Multiply'`
- `'Screen'`
- `'Overlay'`
- `'Darken'`
- `'Lighten'`
- `'ColorDodge'`
- `'ColorBurn'`
- `'HardLight'`
- `'SoftLight'`
- `'Difference'`
- `'Exclusion'`

Default: `'Normal'`

# Examples

Example #1

```php
<?php
$mpdf->SetWatermarkImage(new \Mpdf\WatermarkImage(
    'assets/tiger.wmf',
    \Mpdf\WatermarkImage::SIZE_DEFAULT,
    \Mpdf\WatermarkImage::POSITION_CENTER_PAGE,
    0.2,
    true
));

```