---
layout: page
title: Watermarks
parent_title: What Else Can I Do
permalink: /what-else-can-i-do/watermarks.html
modification_time: 2015-08-05T12:00:16+00:00
---

You can add a watermark to the page(s) either text (e.g. "DRAFT") and/or a background image.

Set the following before writing the HTML code. NB The watermark is added when writing the footer at the end of a page,
so it can be set anytime before ending the page/document.

Since version 8.2.0, watermark data objects were introduced. <a href="#v816">See below</a> for previous style of setting watermarks which is still supported, but will be deprecated in the next major version.

<h2 id="v816">Version >=8.2.0</h2>

```php
<?php
$mpdf->SetWatermarkText(new \Mpdf\WatermarkText('DRAFT')); // Will cope with UTF-8 encoded text

```

<h2 id="v816">Version <=8.1.6</h2>

```php
<?php
$mpdf->SetWatermarkText('DRAFT'); // Will cope with UTF-8 encoded text
$mpdf->watermark_font = 'DejaVuSansCondensed'; // Uses default font if left blank

```

You can alter the transparency values (Default: `0.2`) using

```php
<?php
$mpdf->watermarkTextAlpha = 0.1;
$mpdf->watermarkImageAlpha = 0.5;
```

A watermark image is set by default to print on top of the page contents. The opacity setting will alter the appearance
of the text behind the image. You can optionally set the watermark to appear behind the page contents using
<a href="{{ "/reference/mpdf-variables/watermarkimgbehind.html" | prepend: site.baseurl }}">watermarkImgBehind</a> configuration setting, but
note that the image will be hidden by any background colour specified, including table cells and the page background.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** In version 4.4 <span class="parameter">$watermarkImgBehind</span> was unintentionally set
  to `true` in the <span class="filename">config.php</span> file.
</div>

Set the watermark(s) to show using:
<a href="{{ "/reference/mpdf-variables/showwatermarktext.html" | prepend: site.baseurl }}">showWatermarkText</a> or
<a href="{{ "/reference/mpdf-variables/showwatermarktext.html" | prepend: site.baseurl }}">showWatermarkImage</a>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** From mPDF &ge; 3.0 you can alternatively use the CSS
  style for `background-image` on the `<body>` tag to create a sort of watermark, although this does not support
  opacity. The difference is that text, tables etc are written over the top of a background-image; a watermark is
  actually printed over the top of everything else, but is semi-transparent.
</div>

<h2 id="changelog">Changelog</h2>

<table class="table">
    <thead>
        <tr>
            <th>Version</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>8.2.0</td>
            <td>Watermark objects were introduced.</td>
        </tr>
    </tbody>
</table>

# See

- <a href="{{ "/reference/mpdf-classes/watermarktext.html" | prepend: site.baseurl }}">\Mpdf\WatermarkText()</a> - Watermark text data transfer object
- <a href="{{ "/reference/mpdf-classes/watermarkimage.html" | prepend: site.baseurl }}">\Mpdf\WatermarkImage()</a> - Watermark image data transfer object
- <a href="{{ "/reference/mpdf-functions/setwatermarktext.html" | prepend: site.baseurl }}">SetWatermarkText()</a> - Set the text to use as a Watermark
- &lt;<a href="{{ "/reference/html-control-tags/watermarktext.html" | prepend: site.baseurl }}">watermarktext</a>&gt; - HTML equivalent to `SetWatermarkText()`
- <a href="{{ "/reference/mpdf-functions/setwatermarkimage.html" | prepend: site.baseurl }}">SetWatermarkImage()</a> - Set the image to use as a Watermark
- &lt;<a href="{{ "/reference/html-control-tags/watermarkimage.html" | prepend: site.baseurl }}">watermarkimage</a>&gt; - HTML equivalent to `SetWatermarkImage()`
- <a href="{{ "/reference/mpdf-variables/watermarkimagealpha.html" | prepend: site.baseurl }}">watermarkImageAlpha</a> - Specifies the transparency (alpha value) for the watermark image
- <a href="{{ "/reference/mpdf-variables/watermarktextalpha.html" | prepend: site.baseurl }}">watermarkTextAlpha</a> - Specifies the transparency (alpha value) for the watermark text
- <a href="{{ "/reference/mpdf-variables/showwatermarktext.html" | prepend: site.baseurl }}">showWatermarkText</a> - Specifies whether or not to show/print the watermark text
- <a href="{{ "/reference/mpdf-variables/showwatermarktext.html" | prepend: site.baseurl }}">showWatermarkImage</a> - Specifies whether or not to show/print the watermark image
- <a href="{{ "/reference/mpdf-variables/watermark-font.html" | prepend: site.baseurl }}">watermark_font</a> - Specifies the font to use for Watermark text
- <a href="{{ "/reference/mpdf-variables/watermarkimgbehind.html" | prepend: site.baseurl }}">watermarkImgBehind</a> - Specify whether to show the watermark image behind the page contents

