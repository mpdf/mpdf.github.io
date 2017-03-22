---
layout: page
title: showWatermarkText
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/showwatermarktext.html
modification_time: 2015-08-05T12:02:27+00:00
---

(mPDF >= 2.2)

# Description

boolean **showWatermarkText**

Specifies whether or not to show/print the watermark text on each page. The text for the watermark must be defined using
<a href="{{ "/reference/mpdf-functions/setwatermarktext.html" | prepend: site.baseurl }}">SetWatermarkText()</a>. The
watermark is added to the document at the end of each page.

<div class="alert alert-info" role="alert" markdown="1">
	**Note:** This superceded TopicIsUnvalidated in mPDF 2.2 as an alias, and is now the preferred form.
</div>

# Values

<span class="parameter">$showWatermarkText</span> = <span class="smallblock">TRUE</span>|<span class="smallblock">*FALSE*</span>

If <span class="parameter">$showWatermarkText</span> is <span class="smallblock">TRUE</span> or 1 the watermark text
will be added to each page of the document.

The value can be changed during the document to turn the watermark on and off on different pages.

**Values**

<span class="smallblock">TRUE</span>: Show/print the watermark text

<span class="smallblock">*FALSE*</span>: <span class="smallblock">DEFAULT</span> Do not show/print the watermark text

Values of 1 or 0 can also be used

# Changelog

<table class="table"><thead>
<tr><th>Version</th> <th>Description</th></tr>
</thead> <tbody>
<tr>
<td>2.2</td>
<td>The variable was added.</td>
</tr>
</tbody></table>

# Examples

Example #1

{% highlight php %}
<?php

$mpdf = new \Mpdf\Mpdf();

$mpdf->SetWatermarkText('DRAFT');

$mpdf->showWatermarkText = true;

$mpdf->WriteHTML('Hello World');

// As showWatermark is true when the first page is finished, a watermark is added
$mpdf->AddPage();

// When the second page is finished the watermark will not appear.
$mpdf->showWatermarkText = false;

$mpdf->WriteHTML('Hello World');
{% endhighlight %}

# See Also

<a href="{{ "/reference/mpdf-functions/setwatermarktext.html" | prepend: site.baseurl }}">SetWatermarkText()</a> - Set the text to use as a Watermark
<a href="{{ "/reference/mpdf-functions/setwatermarkimage.html" | prepend: site.baseurl }}">SetWatermarkImage()</a> - Set an image to use as a Watermark
<a href="{{ "/reference/mpdf-variables/watermarkimagealpha.html" | prepend: site.baseurl }}">watermarkImageAlpha</a> - Specifies the transparency (alpha value) for the watermark image
<a href="{{ "/reference/mpdf-variables/watermarktextalpha.html" | prepend: site.baseurl }}">watermarkTextAlpha</a> - Specifies the transparency (alpha value) for the watermark text
<a href="{{ "/reference/mpdf-variables/showwatermarktext.html" | prepend: site.baseurl }}">showWatermarkImage</a> - Specifies whether or not to show/print the watermark image
<a href="{{ "/reference/mpdf-variables/watermark-font.html" | prepend: site.baseurl }}">watermark_font</a> - Specifies the font to use for Watermark text
