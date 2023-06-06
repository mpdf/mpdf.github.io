---
layout: page
title: SetWatermarkText()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setwatermarktext.html
modification_time: 2015-08-05T12:01:10+00:00
---

(mPDF &ge; 2.2)

SetWatermarkText – Set the text to use as a Watermark

# Description

void **SetWatermarkText** (
  [ string|\Mpdf\WatermarkText <span class="parameter">$text</span> [,
  float <span class="parameter">$alpha</span> ]]
)

Set the text to use as a Watermark. The watermark is a semi-transparent background printed on each page, used for text
such as "DRAFT". The watermark will be added to each page when the Footer is printed if the variable
<a href="{{ "/reference/mpdf-variables/showwatermarktext.html" | prepend: site.baseurl }}">$showWatermark</a> is set
to a truthy value. 

# Parameters

<span class="parameter">$text</span>

: This parameter defines the text to use for the watermark. The text should be UTF-8 encoded, but should not contain HTML
  mark-up tags.

  Since 8.2.0 the value can be an instance of <a href="{{ "/reference/mpdf-classes/watermark.html" | prepend: site.baseurl }}">\Mpdf\WatermarkText</a> class. Its properties then overwrite internal watermark variables.

  If the text is blank, it will clear the watermark text, so nothing appears.

  Default: <span class="smallblock">BLANK</span>


<span class="parameter">$alpha</span>

: This parameter defines the transparency value (alpha) to use for the watermark: either text or image. The Value should
  be between `0` and `1`.

  Default: `0.2`

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
  <td>The function was added.</td>
</tr>
<tr>
  <td>2.2</td>
  <td>Parameter <span class="parameter">$alpha</span> was added</td>
</tr>
<tr>
  <td>3.0</td>
  <td>Parameter <span class="parameter">$text</span> changed to be optional</td>
</tr>
<tr>
  <td>3.0</td>
  <td markdown="1">
  No parameters are required from v3.0 onwards
  e.g. `$mpdf->SetWatermarkText();` can be used
  as well as `$mpdf->SetWatermarkText('');`
  </td>
</tr>
<tr>
  <td>8.2.0</td>
  <td>\Mpdf\WatermarkText object was introduced.</td>
</tr>
</tbody>
</table>

# Examples

Example #1 (Since mPDF 8.2.0)

```php
<?php
$mpdf = new \Mpdf\Mpdf();

$mpdf->SetWatermarkText(new \Mpdf\WatermarkText('DRAFT'));
$mpdf->showWatermarkText = true;
```

Example #2

```php
<?php
$mpdf = new \Mpdf\Mpdf();

$mpdf->SetWatermarkText('DRAFT');
$mpdf->showWatermarkText = true;

$mpdf->WriteHTML('Hello World');
```

Example #3

```php
<?php
$mpdf = new \Mpdf\Mpdf();

// The library defines a function strcode2utf() to convert htmlentities to UTF-8 encoded text
$wm = strcode2utf("&amp;#1575;&amp;#1610;&amp;#1604;&amp;#1575;&amp;#1578; &amp;#1601;&amp;#1610;&amp;#1605;&amp;#1575; &amp;#1575;&amp;#1610;&amp;#1604;&amp;#1575;&amp;#1578; &amp;#1601;&amp;#1610;&amp;#1605;&amp;#1575;");
$mpdf->SetWatermarkText($wm, 0.1);
$mpdf->showWatermarkText = true;

$mpdf->WriteHTML('Hello World');

```

# See Also

- <a href="{{ "/reference/mpdf-classes/watermarktext.html" | prepend: site.baseurl }}">\Mpdf\WatermarkText()</a> - Watermark text data transfer object
- &lt;<a href="{{ "/reference/html-control-tags/watermarktext.html" | prepend: site.baseurl }}">watermarktext</a>&gt; - HTML equivalent of SetWatermarkText()
- <a href="{{ "/reference/mpdf-functions/setwatermarkimage.html" | prepend: site.baseurl }}">SetWatermarkImage()</a> - Set an image to use as a Watermark
- <a href="{{ "/reference/mpdf-variables/watermarkimagealpha.html" | prepend: site.baseurl }}">$watermarkImageAlpha</a> - Specifies the transparency (alpha value) for the watermark image
- <a href="{{ "/reference/mpdf-variables/watermarktextalpha.html" | prepend: site.baseurl }}">$watermarkTextAlpha</a> - Specifies the transparency (alpha value) for the watermark text
- <a href="{{ "/reference/mpdf-variables/showwatermarktext.html" | prepend: site.baseurl }}">$showWatermarkText</a> - Specifies whether or not to show/print the watermark text
- <a href="{{ "/reference/mpdf-variables/showwatermarktext.html" | prepend: site.baseurl }}">$showWatermarkImage</a> - Specifies whether or not to show/print the watermark image
- <a href="{{ "/reference/mpdf-variables/watermark-font.html" | prepend: site.baseurl }}">$watermark_font</a> - Specifies the font to use for Watermark text
