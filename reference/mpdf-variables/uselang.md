---
layout: page
title: useLang
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/uselang.html
modification_time: 2015-08-05T12:02:38+00:00
---

<p>(mPDF &gt;= 2.3&nbsp; &lt;= 5.7)</p>
<p>useLang – Specify whether to recognise/support the HTML attribute <span class="parameter">lang</span></p>

# Description

<p class="manual_block">void <b>useLang</b></p>
<p>Specify whether to recognise/support the HTML attribute <span class="parameter">lang</span>.</p>
<p>See <a href="{{ "/fonts-languages/lang-v5-x.html" | prepend: site.baseurl }}">lang</a> for more details.</p>

<div class="alert alert-info" role="alert"><strong>Note:</strong> This variable was removed in mPDF 6.0&nbsp; <a href="{{ "/reference/mpdf-variables/autoscripttolang.html" | prepend: site.baseurl }}"><code>autoScriptToLang</code></a> should be used for the same effect.</div>

<div class="alert alert-info" role="alert"><strong>Note:</strong> The default value was changed to <span class="smallblock">TRUE </span>in version 4.0</div>
<p><b>Note:</b> <span class="parameter">lang</span> is a useful way to select appropriate fonts for some languages. Automatic font selection using <a href="{{ "/reference/mpdf-functions/setautofont.html" | prepend: site.baseurl }}">SetAutoFont()</a> marks up the HTML with the <span class="parameter">lang</span> attribute, so useLang is required. Using automatic font selection adds considerable processing time when creating a large document. Automatic font selection is only valid when using UTF-8 as the codepage for the document.</p>

# Values

<p class="manual_param_dt"><span class="parameter">useLang</span> =&nbsp; <span class="smallblock">TRUE </span>| <span class="smallblock">FALSE</span></p>
<p class="manual_param_dd"><b>Values</b>

<span class="smallblock">TRUE </span>: recognise/support the HTML attribute <span class="parameter">lang</span>.

<span class="smallblock">FALSE</span>: does not recognise/support the HTML attribute <span class="parameter">lang</span>.

<span class="smallblock">DEFAULT</span>: <span class="smallblock">TRUE</span></p>

# Changelog

<table class="table"> <thead>
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

# Examples

{% highlight php %}
Example #1

{% endhighlight %}

{% highlight php %}
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

# See Also

<ul>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/autofontgroupsize.html" | prepend: site.baseurl }}">SetAutoFont()</a> - Use AutoFont to auto-detect text language in HTML input</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/autofontgroupsize.html" | prepend: site.baseurl }}">autoFontGroupSize</a> - Specify the text chunk size to group when autodetecting text language</li>
<li class="manual_boxlist"><a href="index0c23.html?tid=346">disableMultilingualJustify</a> - Specify whether to disable text justification in multilingual documents</li>
<li class="manual_boxlist"><a href="{{ "/fonts-languages/lang-v5-x.html" | prepend: site.baseurl }}">lang</a> - Information on mPDF support for the HTML attribute lang</li>
</ul>
