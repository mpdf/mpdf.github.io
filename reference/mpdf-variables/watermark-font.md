---
layout: page
title: watermark_font
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/watermark-font.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 1.0)</p>
<h2>Description</h2>

<div class="alert alert-info" role="alert">string <b>watermark_font</b></div>
<p>Specifies the font to use for the watermark on each page. The BOLD style of the font is used by default.</p>
<h2>Values</h2>
<p class="manual_param_dt"><span class="parameter">watermark_font</span></p>
<p class="manual_param_dd">Define as any of the available font-families.

<span class="smallblock">DEFAULT</span> or <span class="smallblock">BLANK</span> uses the default font-family for the document.</p>
<h2>Examples</h2>

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<?php

<?php

$mpdf=new mPDF();

$mpdf->SetWatermarkText('DRAFT');

$mpdf->showWatermarkText = true;

$mpdf->watermark_font = 'DejaVuSansCondensed';

$mpdf->WriteHTML('<p>Hallo World</p>');

?>
{% endhighlight %}

<h2>See Also</h2>
<ul>
<li class="manual_boxlist"><a href="/reference/mpdf-functions/setwatermarktext.html">SetWatermarkText()</a> - Set the text to use as a Watermark</li>
<li class="manual_boxlist"><a href="/reference/mpdf-functions/setwatermarktext.html">SetWatermarkImage()</a> - Set an image to use as a Watermark</li>
<li class="manual_boxlist"><a href="/reference/mpdf-variables/watermarkimagealpha.html">watermarkImageAlpha</a> - Specifies the transparency (alpha value) for the watermark image</li>
<li class="manual_boxlist"><a href="/reference/mpdf-variables/watermarktextalpha.html">watermarkTextAlpha</a> - Specifies the transparency (alpha value) for the watermark text</li>
<li class="manual_boxlist"><a href="/reference/mpdf-variables/showwatermarktext.html">showWatermarkText</a> - Specifies whether or not to show/print the watermark text

</li>
<li class="manual_boxlist"><a href="/reference/mpdf-variables/showwatermarktext.html">showWatermarkImage</a> - Specifies whether or not to show/print the watermark image</li>
</ul>
</div>
</div>

