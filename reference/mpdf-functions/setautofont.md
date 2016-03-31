---
layout: page
title: SetAutoFont()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setautofont.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 2.3&nbsp;&nbsp; &lt;= 5.7)</p>
<p>SetAutoFont – Automatically detect language in the input HTML text and use appropriate fonts</p>
<h2>Description</h2>

<div class="alert alert-info" role="alert">void <b>SetAutoFont</b> ( int <span class="parameter">$flag</span> )</div>
<p>Turns on the AutoFont function, which automatically detects language in the input HTML text and uses appropriate fonts.</p>

<div class="alert alert-info" role="alert"><b>Note:</b> This function was removed in mPDF 6.0&nbsp; Use <a href="{{ "/reference/mpdf-variables/autolangtofont.html" | prepend: site.baseurl }}"><code>autoLangToFont</code></a> for the same results</div>
<p>AutoFont uses <code>&lt;span lang="" class="lang_xx"&gt;...&lt;/span&gt;</code> to mark text which is auto-detected. See <a href="{{ "/fonts-languages/lang-v5-x.html" | prepend: site.baseurl }}">lang</a> for further details, but note that SetAutoFont also:</p>
<ul>
<li>disables support for text-align=justify</li>
<li>sets <a href="{{ "/reference/mpdf-variables/uselang.html" | prepend: site.baseurl }}">$useLang</a>=<span class="smallblock">TRUE</span></li>
<li>sets <a href="{{ "/reference/mpdf-variables/bidirectional.html" | prepend: site.baseurl }}">$biDirectional</a>=<span class="smallblock">TRUE</span> (if AUTOFONT_RTL is set)</li>
</ul>

<div class="alert alert-info" role="alert"><b>Note:</b> Using automatic language detection adds considerable processing time when creating a large document.</div>

<div class="alert alert-info" role="alert"><b>Note:</b> It is better to mark the HTML text yourself using block tags e.g. <code>&lt;p lang=""</code> rather than relying on mPDF to set <code>&lt;span lang=""</code> if possible; when set at block level, it allows appropriate changes to text alignment, character spacing and text-justification.</div>

<div class="alert alert-info" role="alert"><b>Note:</b> Automatic language detection is based on analysis of the characters in the text. It is therefore not precise, and in particular it may be difficult to distinguish between different arabic languages (arabic, farsi, urdu, pashto etc), CJK languages (even between Chinese and Japanese text in same text chunk).</div>

<div class="alert alert-info" role="alert"><b>Note:</b> Chinese Traditional and Simplified Chinese share so many characters that mPDF does not even try to distinguish which is being used. If AutoFont is being used and a chinese languages is identified, it is marked as <code>&lt;span lang="zh"&gt;...&lt;/span&gt;</code>.

The font actually used for default chinese is determined by the settings in function <span class="function">GetCodepage()</span> in <span class="filename">config_cp.php</span>; by default this is Chinese Simplified (GB, GBK).</div>

<div class="alert alert-info" role="alert"><b>Note:</b> SetAutoFont is only valid when using UTF-8 as the codepage for the document.</div>
<h2>Parameters</h2>
<p class="manual_param_dt"><span class="parameter">flag</span></p>
<p class="manual_param_dd">This parameter specifies which languages are auto-detected. Either an integer or one of the defined constants can be used.

SetAutoFont(0) will turn off any auto-detection. Bitwise operators can be used with the defined constants e.g.

SetAutoFont(AUTOFONT_CJK | AUTOFONT_THAIVIET) will turn on autodetection for CJK languages and Thai and Vietnamese.</p>
<p class="manual_param_dd"><b>Values</b>

AUTOFONT_CJK = 1 = Any CJK languages (Chinese - Japanese - Korean)

AUTOFONT_THAIVIET = 2 = Thai and Vietnamese

AUTOFONT_RTL = 4 = RTL languages i.e. Hebrew and Arabic, including Pashto, Urdu etc.

AUTOFONT_INDIC = 8 = Indic languages such as Devanagari

AUTOFONT_ALL = 15 = All of the above

<span class="smallblock">DEFAULT</span>: AUTOFONT_ALL (15)</p>
<h2>Changelog</h2>
<table class="bpmTopic"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>4.0</td>
<td>AutoFont marks up the <code>&lt;span&gt;</code> with <code>class="lang_xx"</code> as well as&nbsp;&nbsp;<code>lang</code><code>="xx"</code></td>
</tr>
<tr>
<td>2.3</td>
<td>Function was added.</td>
</tr>
<tr>
<td>2.3</td>
<td>Internal variable <span class="parameter">$pregRTLchars</span> was altered for better detection of arabic/hebrew</td>
</tr>
<tr>
<td>6.0</td>
<td>Removed in favour of autoLangToFont</td>
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

<p>Most of this text is in English, but has occasional words in Chinese:其貢獻在 or Vietnamese: Một khảo sát mới cho biết, or maybe even Arabic: البرادعی</p>

<p>البرادعی -12- البرادعی</p>

<p>其貢獻在國際間亦備受肯定，2005年</p>

';

$mpdf->SetAutoFont();

$mpdf->WriteHTML($html);

$mpdf->Output();

?>
{% endhighlight %}

<h2>See Also</h2>
<ul>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/uselang.html" | prepend: site.baseurl }}">useLang</a> - Specify whether to recognise and support the HTML attribute lang</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/autofontgroupsize.html" | prepend: site.baseurl }}">autoFontGroupSize</a> - Specify the text chunk size to group when autodetecting text language</li>
<li class="manual_boxlist"><a href="index0c23.html?tid=346">disableMultilingualJustify</a> - Specify whether to disable text justification in multilingual documents</li>
<li class="manual_boxlist"><a href="{{ "/fonts-languages/lang-v5-x.html" | prepend: site.baseurl }}">lang</a> - Information on mPDF support for the HTML attribute lang</li>
</ul>
</div>
</div>

