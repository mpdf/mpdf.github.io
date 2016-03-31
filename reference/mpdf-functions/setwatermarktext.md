---
layout: page
title: SetWatermarkText()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setwatermarktext.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 2.2)</p>
<p>SetWatermarkText – Set the text to use as a Watermark</p>
<h2>Description</h2>

<div class="alert alert-info" role="alert">void <b>SetWatermarkText</b> ( [ string <span class="parameter">$text</span> [, float <span class="parameter">$alpha</span> ]])</div>
<p>Set the text to use as a Watermark. The watermark is a semi-transparent background printed on each page, used for text such as "DRAFT". The watermark will be added to each page when the Footer is printed if the variable <a href="/reference/mpdf-variables/showwatermarktext.html">showWatermark</a> is set to 1 or <span class="smallblock">TRUE</span>.&nbsp;</p>

<div class="alert alert-info" role="alert"><b>Note:</b> Prior to mPDF 2.2 the function setUnvalidatedText() was used. SetWatermarkText() is now the preferred form.</div>
<h2>Parameters</h2>
<p class="manual_param_dt"><span class="parameter">text</span></p>
<p class="manual_param_dd">This parameter defines the text to use for the watermark. The text should be UTF-8 encoded, but should not contain HTML mark-up tags. If the text is blank, it will clear the watermark text, so nothing appears.

<span class="smallblock">DEFAULT</span>: <span class="smallblock">BLANK</span></p>
<p class="manual_param_dt"><span class="parameter">alpha</span></p>
<p class="manual_param_dd">This parameter defines the transparency value (alpha) to use for the watermark: either text or image. The Value should be between 0 and 1.

<span class="smallblock">DEFAULT</span>: 0.2</p>
<h2>Changelog</h2>
<table class="bpmTopic"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>2.2</td>
<td>The function was added.</td>
</tr>
<tr>
<td>2.2</td>
<td>Parameter <span class="parameter">alpha</span> was added</td>
</tr>
<tr>
<td>3.0</td>
<td>Parameter <span class="parameter">text</span> changed to be optional

</td>
</tr>
<tr>
<td>3.0</td>
<td>No parameters are required from v3.0 onwards e.g.

$mpdf-&gt;SetWatermarkText(); can be used as well as:

$mpdf-&gt;SetWatermarkText('');</td>
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

$mpdf->SetWatermarkText('DRAFT');

$mpdf->showWatermarkText = true;

$mpdf->WriteHTML('<p>Hallo World</p>');

?>
{% endhighlight %}

{% highlight php %}
Example #2
{% endhighlight %}

{% highlight php %}
<?php

// htmltoolkit contains a function strcode2utf() to convert htmlentities to UTF-8 encoded text 

<?php

$mpdf=new mPDF();

$wm = strcode2utf("&amp;#1575;&amp;#1610;&amp;#1604;&amp;#1575;&amp;#1578; &amp;#1601;&amp;#1610;&amp;#1605;&amp;#1575; &amp;#1575;&amp;#1610;&amp;#1604;&amp;#1575;&amp;#1578; &amp;#1601;&amp;#1610;&amp;#1605;&amp;#1575;");

$mpdf->SetWatermarkText($wm, 0.1);

$mpdf->showWatermarkText = true;

$mpdf->WriteHTML('<p>Hallo World</p>');

?>
{% endhighlight %}

<h2>See Also</h2>
<ul>
<li class="manual_boxlist">&lt;<a href="/reference/html-control-tags/watermarktext.html">watermarktext</a>&gt; - HTML equivalent of SetWatermarkText()</li>
<li class="manual_boxlist"><a href="/reference/mpdf-functions/setwatermarktext.html">SetWatermarkImage()</a> - Set an image to use as a Watermark</li>
<li class="manual_boxlist"><a href="/reference/mpdf-variables/watermarkimagealpha.html">watermarkImageAlpha</a> - Specifies the transparency (alpha value) for the watermark image</li>
<li class="manual_boxlist"><a href="/reference/mpdf-variables/watermarktextalpha.html">watermarkTextAlpha</a> - Specifies the transparency (alpha value) for the watermark text</li>
<li class="manual_boxlist"><a href="/reference/mpdf-variables/showwatermarktext.html">showWatermarkText</a> - Specifies whether or not to show/print the watermark text

</li>
<li class="manual_boxlist"><a href="/reference/mpdf-variables/showwatermarktext.html">showWatermarkImage</a> - Specifies whether or not to show/print the watermark image</li>
<li class="manual_boxlist"><a href="/reference/mpdf-variables/watermark-font.html">watermark_font</a> - Specifies the font to use for Watermark text</li>
</ul>
</div>
</div>

