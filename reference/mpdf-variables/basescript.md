---
layout: page
title: baseScript
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/basescript.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 6.0)</p>
<h2>Description</h2>

<div class="alert alert-info" role="alert">boolean <b>baseScript</b></div>
<p>Tells mPDF which Script to ignore when using <code>autoScriptToLang</code>.</p>
<h2>Values</h2>
<p class="manual_param_dt"><span class="parameter">baseScript</span> = <i><span class="smallblock">INTEGER</span></i><span class="smallblock">&nbsp;</span></p>
<p class="manual_param_dd"><b>Values</b>

<i><span class="smallblock">INTEGER</span></i>: (<span class="smallblock">DEFAULT</span> = 1) Number representing the script block to be ignored when using <code>autoScriptToLang</code>. It is set by default to "1" which is for Latin script. In this mode, all scripts <i>except</i> Latin script are marked up with "lang" attribute. To select other scripts as the base, see the file <span class="filename">/classes/ucdn.php</span></p>
<h2>See Also</h2>
<ul>
<li class="manual_boxlist"><a href="/reference/mpdf-variables/autoscripttolang.html">autoScriptToLang</a> - <code><span class="code">marks up HTML text using the lang attribute, based on the Unicode script block in question</code></span></li>
<li class="manual_boxlist"><a href="/fonts-languages/automatic-font-selection.html">Automatic Font selection</a> </li>
</ul>
</div>
</div>

