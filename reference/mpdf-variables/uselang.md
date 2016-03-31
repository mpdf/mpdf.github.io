---
layout: page
title: useLang
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/uselang.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 2.3&nbsp; &lt;= 5.7)</p>
<p>useLang – Specify whether to recognise/support the HTML attribute <span class="parameter">lang</span></p>
<h2>Description</h2>

<div class="alert alert-info" role="alert">void <b>useLang</b></div>
<p>Specify whether to recognise/support the HTML attribute <span class="parameter">lang</span>.</p>
<p>See <a href="/fonts-languages/lang-v5-x.html">lang</a> for more details.</p>

<div class="alert alert-info" role="alert"><b>Note:</b> This variable was removed in mPDF 6.0&nbsp; <a href="/reference/mpdf-variables/autoscripttolang.html"><code>autoScriptToLang</code></a> should be used for the same effect.</div>

<div class="alert alert-info" role="alert"><b>Note:</b> The default value was changed to <span class="smallblock">TRUE </span>in version 4.0</div>
<p><b>Note:</b> <span class="parameter">lang</span> is a useful way to select appropriate fonts for some languages. Automatic font selection using <a href="/reference/mpdf-functions/setautofont.html">SetAutoFont()</a> marks up the HTML with the <span class="parameter">lang</span> attribute, so useLang is required. Using automatic font selection adds considerable processing time when creating a large document. Automatic font selection is only valid when using UTF-8 as the codepage for the document.</p>
<h2>Values</h2>
<p class="manual_param_dt"><span class="parameter">useLang</span> =&nbsp; <span class="smallblock">TRUE </span>| <span class="smallblock">FALSE</span></p>
<p class="manual_param_dd"><b>Values</b>

<span class="smallblock">TRUE </span>: recognise/support the HTML attribute <span class="parameter">lang</span>.

<span class="smallblock">FALSE</span>: does not recognise/support the HTML attribute <span class="parameter">lang</span>.

<span class="smallblock">DEFAULT</span>: <span class="smallblock">TRUE</span></p>
<h2>Changelog</h2>
<table class="bpmTopic"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>2.3</td>
<td>Variable was added.</td>
</tr>
<tr>
<td>4.0</td>
<td>Default value changed to <span class="smallblock">TRUE</span></td>
</tr>
</tbody> </table>
<h2>Examples</h2>

{% highlight php %}
Example #1

{% endhighlight %}

{% highlight php %}
<?php

<?php

include("../mpdf.php");

$mpdf=new mPDF('utf-8'); 

$html = '

<p>Start with some English text</p>

<p lang="ar"> هل ستسفر الجهود الدبلوماسية الجارية عن حلول؟ وكيف تنظر للاتهامات لبعض هذه الدول بالتدخل في الشأن العراقي، والتورط في دعم عمليات العنف؟ والى اي مدى يبدو الوضع في العراق انعكاسا للصراعات الإقليمية في المنطقة؟</p>

<p>And again in English</p>

';

$mpdf->useLang = true;

$mpdf->WriteHTML($html);

$mpdf->Output();

?>

{% endhighlight %}

<h2>See Also</h2>
<ul>
<li class="manual_boxlist"><a href="/reference/mpdf-variables/autofontgroupsize.html">SetAutoFont()</a> - Use AutoFont to auto-detect text language in HTML input</li>
<li class="manual_boxlist"><a href="/reference/mpdf-variables/autofontgroupsize.html">autoFontGroupSize</a> - Specify the text chunk size to group when autodetecting text language</li>
<li class="manual_boxlist"><a href="index0c23.html?tid=346">disableMultilingualJustify</a> - Specify whether to disable text justification in multilingual documents</li>
<li class="manual_boxlist"><a href="/fonts-languages/lang-v5-x.html">lang</a> - Information on mPDF support for the HTML attribute lang</li>
</ul>
</div>
</div>

