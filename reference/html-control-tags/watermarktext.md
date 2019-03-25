---
layout: page
title: watermarktext
parent_title: HTML control tags
permalink: /reference/html-control-tags/watermarktext.html
modification_time: 2015-08-05T12:01:31+00:00
---

(mPDF &ge; 3.0)

watermarktext – Set the text to use as a Watermark

# Description

&lt;**watermarktext**  <span class="parameter">$content</span> [ <span class="parameter">$alpha</span> ] /&gt;

Set the text to use as a Watermark. The watermark is a semi-transparent background printed on each page, used for text
such as "DRAFT". The watermark will be added to each page when the Footer is printed if the variable
<a href="{{ "/reference/mpdf-variables/showwatermarktext.html" | prepend: site.baseurl }}">showWatermark</a> is set
to `1` or `true`. 

# Parameters

<span class="parameter">$content</span>

: This parameter defines the text to use for the watermark.

  <span class="parameter">$content</span> cannot contain any of the characters: `<`, `>`, `&`, `'` or `"` and must use the
  appropriate HTML entities e.g. `<watermarktext content="Brian&amp;#039;s document" />`  It is recommended that you
  use `htmlspecialchars('Content', ENT_QUOTES)` for this.

  If the text is blank, it will clear the watermark text, so nothing appears.

  Default: <span class="smallblock">BLANK</span>

<span class="parameter">$alpha</span>

: This parameter defines the transparency value (alpha) to use for the watermark: either text or image. The Value should
be between `'0'` and `'1'`.

  Default: `'0.2'`

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

$mpdf->WriteHTML('<watermarktext content="DRAFT" alpha="0.4" />');

$mpdf->WriteHTML('
Hello World
');

```

# See Also

* <a href="{{ "/reference/mpdf-functions/setwatermarktext.html" | prepend: site.baseurl }}">SetWatermarkText()</a> - PHP equivalent to `<watermarktext>`
* <a href="{{ "/reference/mpdf-functions/setwatermarkimage.html" | prepend: site.baseurl }}">SetWatermarkImage()</a> - Set an image to use as a Watermark
* <a href="{{ "/reference/mpdf-variables/watermarkimagealpha.html" | prepend: site.baseurl }}">watermarkImageAlpha</a> - Specifies the transparency (alpha value) for the watermark image
* <a href="{{ "/reference/mpdf-variables/watermarktextalpha.html" | prepend: site.baseurl }}">watermarkTextAlpha</a> - Specifies the transparency (alpha value) for the watermark text
* <a href="{{ "/reference/mpdf-variables/showwatermarktext.html" | prepend: site.baseurl }}">showWatermarkText</a> - Specifies whether or not to show/print the watermark text
* <a href="{{ "/reference/mpdf-variables/showwatermarktext.html" | prepend: site.baseurl }}">showWatermarkImage</a> - Specifies whether or not to show/print the watermark image
* <a href="{{ "/reference/mpdf-variables/watermark-font.html" | prepend: site.baseurl }}">watermark_font</a> - Specifies the font to use for Watermark text

