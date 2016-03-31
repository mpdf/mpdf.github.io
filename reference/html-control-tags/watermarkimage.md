---
layout: page
title: watermarkimage
parent_title: HTML control tags
permalink: /reference/html-control-tags/watermarkimage.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 3.0)</p>
<p>watermarkimage – Set an image to use as a Watermark</p>
<h2>Description</h2>

<div class="alert alert-info" role="alert">&lt;<b>watermarkimage</b>&nbsp; <span class="parameter">src</span> [ <span class="parameter">alpha</span> ] [ <span class="parameter">size</span> ] [ <span class="parameter">position</span> ] /&gt;</div>
<p>Set an image to use as a Watermark. The watermark is a semi-transparent background printed on each page, used for text such as "DRAFT" or a background image. The watermark will be added to each page when the Footer is printed if the variable <a href="/reference/mpdf-variables/showwatermarktext.html">showWatermarkImage</a> is set to 1 or <span class="smallblock">TRUE</span>.</p>
<h2>Parameters</h2>
<p class="manual_param_dt"><span class="parameter">src</span></p>
<p class="manual_param_dd">This parameter specifies the image file to use for the watermark. This can be a full URI or use a relative path<span class="smallblock">

</span></p>
<p class="manual_param_dt"><span class="parameter">alpha</span></p>
<p class="manual_param_dd">This parameter defines the transparency value (alpha) to use for the watermark. The Value should be between 0 and 1.

<span class="smallblock">DEFAULT</span>: 0.2</p>
<p class="manual_param_dt"><span class="parameter">size</span></p>
<p class="manual_param_dd">This parameter takes either a pre-defined string, an integer, or an array of width and height. Defines the size of the watermark.</p>
<p class="manual_param_dd"><b>Values</b>

D: default i.e. original size of image - may depend on <a href="/reference/mpdf-variables/img-dpi.html">img_dpi</a>

P: Resize to fit the full page size, keeping aspect ratio

F: Resize to fit the print-area (frame) respecting current page margins, keeping aspect ratio

<span class="smallblock">INT</span>: Resize to full page size minus a margin set by this integer in millimeters, keeping aspect ratio

2 comma-separated numbers (<span class="parameter">$width</span>, <span class="parameter">$height</span>): Specify a size; units in millimeters

<span class="smallblock">DEFAULT</span>: "D"</p>
<p class="manual_param_dt"><span class="parameter">position</span></p>
<p class="manual_param_dd">This parameter takes either a pre-defined string or an array of <span class="parameter">x</span> and <span class="parameter">y</span>. Defines the position of the watermark on the page.</p>
<p class="manual_param_dd"><b>Values</b>

P: Centred on the whole page area

F: Centred on the page print-area (frame) respecting page margins

2 comma-separated numbers (<span class="parameter">$x</span>, <span class="parameter">$y</span>): Specify a position; units in millimeters

<span class="smallblock">DEFAULT</span>: "P"</p>
<h2>Changelog</h2>
<table class="bpmTopic"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>3.0</td>
<td>The tag was added.</td>
</tr>
</tbody> </table>
<h2>Examples</h2>

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<?php

<?php

$mpdf=new mPDF();

$mpdf->showWatermarkText = true;

$mpdf->WriteHTML('<watermarkimage src="images/background.png" alpha="0.4" size="200,250" />');

$mpdf->WriteHTML('<p>Hallo World</p>');

?>
{% endhighlight %}

<p>&nbsp;</p>
<h2>See Also</h2>
<ul>
<li class="manual_boxlist"><a href="/reference/mpdf-functions/setwatermarkimage.html">SetWatermarkImage()</a> - PHP equivalent to &lt;watermarkimage&gt;</li>
<li class="manual_boxlist"><a href="/reference/mpdf-variables/watermarkimagealpha.html">watermarkImageAlpha</a> - Specifies the transparency (alpha value) for the watermark image</li>
<li class="manual_boxlist"><a href="/reference/mpdf-variables/watermarktextalpha.html">watermarkTextAlpha</a> - Specifies the transparency (alpha value) for the watermark text</li>
<li class="manual_boxlist"><a href="/reference/mpdf-variables/showwatermarktext.html">showWatermarkText</a> - Specifies whether or not to show/print the watermark text

</li>
<li class="manual_boxlist"><a href="/reference/mpdf-variables/showwatermarktext.html">showWatermarkImage</a> - Specifies whether or not to show/print the watermark image</li>
<li class="manual_boxlist"><a href="/reference/mpdf-variables/watermark-font.html">watermark_font</a> - Specifies the font to use for Watermark text</li>
</ul>
<p>&nbsp;</p>
</div>
</div>

