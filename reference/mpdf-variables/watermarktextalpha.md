---
layout: page
title: watermarkTextAlpha
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/watermarktextalpha.html
modification_time: 2015-08-05T12:02:42+00:00
---

(mPDF >= 2.2)

# Description

string **watermarkTextAlpha**

Specifies the transparency (alpha value) to use for the watermark text on each page.

# Values

<span class="parameter">$watermarkTextAlpha</span>

Define as a value between 0 and 1.

<span class="smallblock">DEFAULT</span> or <span class="smallblock">BLANK</span> : 0.2

# Examples

Example #1

```php
<?php

$mpdf = new \Mpdf\Mpdf();

$mpdf->SetWatermarkText('DRAFT');

$mpdf->showWatermarkText = true;

$mpdf->watermarkTextAlpha = 0.1;

$mpdf->WriteHTML('
Hello World
');

?>

```

# See Also

<ul>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/setwatermarktext.html" | prepend: site.baseurl }}">SetWatermarkText()</a> - Set the text to use as a Watermark</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/setwatermarktext.html" | prepend: site.baseurl }}">SetWatermarkImage()</a> - Set an image to use as a Watermark</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/watermarkimagealpha.html" | prepend: site.baseurl }}">watermarkImageAlpha</a> - Specifies the transparency (alpha value) for the watermark image</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/showwatermarktext.html" | prepend: site.baseurl }}">showWatermarkText</a> - Specifies whether or not to show/print the watermark text</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/showwatermarktext.html" | prepend: site.baseurl }}">showWatermarkImage</a> - Specifies whether or not to show/print the watermark image</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/watermark-font.html" | prepend: site.baseurl }}">watermark_font</a> - Specifies the font to use for Watermark text</li>
</ul>
