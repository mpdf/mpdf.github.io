---
layout: page
title: showWatermarkImage
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/showwatermarkimage.html
modification_time: 2015-08-05T12:02:27+00:00
---

(mPDF >= 2.2)

# Description

boolean **showWatermarkImage**

Specifies whether or not to show/print the watermark image on each page. The file for the watermark must be defined 
using <a href="{{ "/reference/mpdf-functions/setwatermarkimage.html" | prepend: site.baseurl }}">SetWatermarkImage()</a>. 
The watermark is added to the document at the end of each page.

# Values

<span class="parameter">$showWatermarkImage</span> = `true`\|`false`

If <span class="parameter">$showWatermarkImage</span> is `true` or `1` the watermark image will be added to each page of the document.

The value can be changed during the document to turn the watermark on and off on different pages.

**Values**

* `true`:  Show/print the watermark image
* `false`: Do not show/print the watermark image

Default: `false`

Values of `1` or `0` can also be used


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
  <td>2.2</td>
  <td>The variable was added.</td>
</tr>
</tbody>
</table>

# Examples

Example #1

```php
<?php
$mpdf = new \Mpdf\Mpdf();

$mpdf->SetWatermarkImage('images/tiger.jpg');
$mpdf->showWatermarkImage = true;

$mpdf->WriteHTML('
Hello World
');

// As showWatermark is true when the first page is finished, a watermark is added
$mpdf->AddPage();

// When the second page is finished the watermark will not appear.
$mpdf->showWatermarkImage = false;

$mpdf->WriteHTML('
Hello World
');

```

# See Also

* <a href="{{ "/reference/mpdf-functions/setwatermarktext.html" | prepend: site.baseurl }}">SetWatermarkText()</a> - Set the text to use as a Watermark
* <a href="{{ "/reference/mpdf-functions/setwatermarktext.html" | prepend: site.baseurl }}">SetWatermarkImage()</a> - Set an image to use as a Watermark
* <a href="{{ "/reference/mpdf-variables/watermarkimagealpha.html" | prepend: site.baseurl }}">watermarkImageAlpha</a> - Specifies the transparency (alpha value) for the watermark image
* <a href="{{ "/reference/mpdf-variables/watermarktextalpha.html" | prepend: site.baseurl }}">watermarkTextAlpha</a> - Specifies the transparency (alpha value) for the watermark text
* <a href="{{ "/reference/mpdf-variables/showwatermarktext.html" | prepend: site.baseurl }}">showWatermarkText</a> - Specifies whether or not to show/print the watermark text
* <a href="{{ "/reference/mpdf-variables/showwatermarktext.html" | prepend: site.baseurl }}"></a>
* <a href="{{ "/reference/mpdf-variables/watermark-font.html" | prepend: site.baseurl }}">watermark_font</a> - Specifies the font to use for Watermark text
