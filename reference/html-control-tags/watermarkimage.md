---
layout: page
title: watermarkimage
parent_title: HTML control tags
permalink: /reference/html-control-tags/watermarkimage.html
modification_time: 2015-08-05T12:01:31+00:00
---

(mPDF &ge; 3.0)

watermarkimage – Set an image to use as a Watermark

# Description

&lt;**watermarkimage**  <span class="parameter">$src</span>
[ <span class="parameter">$alpha</span> ]
[ <span class="parameter">$size</span> ]
[ <span class="parameter">$position</span> ] /&gt;

Set an image to use as a Watermark. The watermark is a semi-transparent background printed on each page, used for text
such as "DRAFT" or a background image. The watermark will be added to each page when the Footer is printed if the
variable <a href="{{ "/reference/mpdf-variables/showwatermarktext.html" | prepend: site.baseurl }}">showWatermarkImage</a>
is set to `1` or `true`.

# Parameters

<span class="parameter">$src</span>

: This parameter specifies the image file to use for the watermark. This can be a full URI or use a relative path

<span class="parameter">$alpha</span>

: This parameter defines the transparency value (alpha) to use for the watermark. The Value should be between `'0'` and `'1'`.

  Default: `'0.2'`

<span class="parameter">$size</span>

: This parameter takes either a pre-defined string, an integer, or an array of width and height. Defines the size of
  the watermark.

  **Values**

  * `'D'`: default i.e. original size of image - may depend on <a href="{{ "/reference/mpdf-variables/img-dpi.html" | prepend: site.baseurl }}">img_dpi</a>
  * `'P'`: Resize to fit the full page size, keeping aspect ratio
  * `'F'`: Resize to fit the print-area (frame) respecting current page margins, keeping aspect ratio
  * <span class="smallblock">INT</span>: Resize to full page size minus a margin set by this integer in millimeters,
    keeping aspect ratio
  * 2 comma-separated numbers (<span class="parameter">$width</span>, <span class="parameter">$height</span>)
    e.g `'200,250'`: Specify a size; units in millimeters

  Default: `"D"`

<span class="parameter">$position</span>

: This parameter takes either a pre-defined string or an array of <span class="parameter">$x</span> and
  <span class="parameter">$y</span>. Defines the position of the watermark on the page.

  **Values**

  * `'P'`: Centred on the whole page area
  * `'F'`: Centred on the page print-area (frame) respecting page margins
  * 2 comma-separated numbers (<span class="parameter">$x</span>, <span class="parameter">$y</span>) e.g `'200,250'`: Specify a position; units in millimeters

  Default: `"P"`

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
  <td>3.0</td>
  <td>The tag was added.</td>
</tr>
</tbody>
</table>

# Examples

Example #1

```php
<?php
$mpdf = new \Mpdf\Mpdf();

$mpdf->showWatermarkText = true;

$mpdf->WriteHTML(
  '<watermarkimage src="images/background.png" alpha="0.4" size="200,250" />'
);

$mpdf->WriteHTML('
Hello World
');

```

# See Also

* <a href="{{ "/reference/mpdf-functions/setwatermarkimage.html" | prepend: site.baseurl }}">SetWatermarkImage()</a> - PHP equivalent to `<watermarkimage>`
* <a href="{{ "/reference/mpdf-variables/watermarkimagealpha.html" | prepend: site.baseurl }}">watermarkImageAlpha</a> - Specifies the transparency (alpha value) for the watermark image
* <a href="{{ "/reference/mpdf-variables/watermarktextalpha.html" | prepend: site.baseurl }}">watermarkTextAlpha</a> - Specifies the transparency (alpha value) for the watermark text
* <a href="{{ "/reference/mpdf-variables/showwatermarktext.html" | prepend: site.baseurl }}">showWatermarkText</a> - Specifies whether or not to show/print the watermark text
* <a href="{{ "/reference/mpdf-variables/showwatermarktext.html" | prepend: site.baseurl }}">showWatermarkImage</a> - Specifies whether or not to show/print the watermark image
* <a href="{{ "/reference/mpdf-variables/watermark-font.html" | prepend: site.baseurl }}">watermark_font</a> - Specifies the font to use for Watermark text

