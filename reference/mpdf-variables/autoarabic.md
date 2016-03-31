---
layout: page
title: autoArabic
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/autoarabic.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 6.0)</p>
<h2>Description</h2>

<div class="alert alert-info" role="alert">boolean <b>autoArabic</b></div>
<p>Tells mPDF whether to try and distinguish between Arabic languages when using <code>autoScriptToLang</code>.</p>
<p>Analysis of the text will attempt to distinguish Arabic, Farsi, Pashto, Urdu and Sindhi. If active, the text will then be marked with a specific language tag e.g. "pa", "ur", "fa" etc.</p>
<h2>Values</h2>
<p class="manual_param_dt"><span class="parameter">autoArabic</span> = <i><span class="smallblock">TRUE|FALSE</span></i><span class="smallblock"> 

</span></p>
<p class="manual_param_dd"><b>Values</b>

<i><span class="smallblock">FALSE</span></i>: <span class="smallblock">DEFAULT</span> Arabic script will be marked with the attribute lang='und-Arab' when using <code>autoScriptToLang</code>. 

<span class="smallblock">TRUE: </span>mPDF will attempt to distinguish Arabic, Farsi, Pashto, Urdu and Sindhi, and text will then be marked with a specific language tag e.g. "pa", "ur", "fa" etc.</p>
<h2>See Also</h2>
<ul>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/autoscripttolang.html" | prepend: site.baseurl }}">autoScriptToLang</a> - <code><span class="code">marks up HTML text using the lang attribute, based on the Unicode script block in question</code></span></li>
<li class="manual_boxlist"><a href="{{ "/fonts-languages/automatic-font-selection.html" | prepend: site.baseurl }}">Automatic Font selection</a> </li>
</ul>
</div>
</div>

