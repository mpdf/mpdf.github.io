---
layout: page
title: watermarkImageAlpha
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/watermarkimagealpha.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 2.2)</p>
<h2>Description</h2>

<div class="alert alert-info" role="alert">string <b>watermarkTextAlpha</b></div>
<p>Specifies the transparency (alpha value) to use for the watermark text on each page.</p>
<h2>Values</h2>
<p class="manual_param_dt"><span class="parameter">watermarkTextAlpha</span></p>
<p class="manual_param_dd">Define as a value between 0 and 1.

<span class="smallblock">DEFAULT</span> or <span class="smallblock">BLANK</span> : 0.2</p>
<h2>Examples</h2>

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<?php

<?php

$mpdf=new mPDF();

$mpdf->SetWatermarkImage('images/logo.jpg');

$mpdf->showWatermarkImage = true;

$mpdf->watermarkImageAlpha = 0.1;

$mpdf->WriteHTML('<p>Hallo World</p>');

?>
{% endhighlight %}

<h2>See Also</h2>
<ul>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/setwatermarktext.html" | prepend: site.baseurl }}">SetWatermarkText()</a> - Set the text to use as a Watermark</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/setwatermarktext.html" | prepend: site.baseurl }}">SetWatermarkImage()</a> - Set an image to use as a Watermark</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/watermarkimagealpha.html" | prepend: site.baseurl }}"></a></li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/watermarktextalpha.html" | prepend: site.baseurl }}">watermarkTextAlpha</a> - Specifies the transparency (alpha value) for the watermark text</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/showwatermarktext.html" | prepend: site.baseurl }}">showWatermarkText</a> - Specifies whether or not to show/print the watermark text

</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/showwatermarktext.html" | prepend: site.baseurl }}">showWatermarkImage</a> - Specifies whether or not to show/print the watermark image</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/watermark-font.html" | prepend: site.baseurl }}">watermark_font</a> - Specifies the font to use for Watermark text</li>
</ul>
</div>
</div>

