---
layout: page
title: watermarkImageAlpha
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/watermarkimagealpha.html
modification_time: 2015-08-05T12:02:40+00:00
---

(mPDF &ge; 2.2)

# Description

string **watermarkTextAlpha**

Specifies the transparency (alpha value) to use for the watermark text on each page.

# Values

<span class="parameter">$watermarkTextAlpha</span>

* Define as a value between `0` and `1`.
* <span class="smallblock">BLANK</span> is default value.

Default: `0.2`

# Examples

Example #1

```php
<?php
$mpdf = new \Mpdf\Mpdf();

$mpdf->SetWatermarkImage('images/logo.jpg');
$mpdf->showWatermarkImage = true;
$mpdf->watermarkImageAlpha = 0.1;

$mpdf->WriteHTML('
Hello World
');

```

# See Also

* <a href="{{ "/reference/mpdf-functions/setwatermarktext.html" | prepend: site.baseurl }}">SetWatermarkText()</a> - Set the text to use as a Watermark
* <a href="{{ "/reference/mpdf-functions/setwatermarktext.html" | prepend: site.baseurl }}">SetWatermarkImage()</a> - Set an image to use as a Watermark
* <a href="{{ "/reference/mpdf-variables/watermarkimagealpha.html" | prepend: site.baseurl }}"></a>
* <a href="{{ "/reference/mpdf-variables/watermarktextalpha.html" | prepend: site.baseurl }}">watermarkTextAlpha</a> - Specifies the transparency (alpha value) for the watermark text
* <a href="{{ "/reference/mpdf-variables/showwatermarktext.html" | prepend: site.baseurl }}">showWatermarkText</a> - Specifies whether or not to show/print the watermark text
* <a href="{{ "/reference/mpdf-variables/showwatermarktext.html" | prepend: site.baseurl }}">showWatermarkImage</a> - Specifies whether or not to show/print the watermark image
* <a href="{{ "/reference/mpdf-variables/watermark-font.html" | prepend: site.baseurl }}">watermark_font</a> - Specifies the font to use for Watermark text
