---
layout: page
title: autoVietnamese
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/autovietnamese.html
modification_time: 2015-08-05T12:01:42+00:00
---



<p>(mPDF &gt;= 6.0)</p>
<h2>Description</h2>
<p class="manual_block">boolean <b>autoVietnamese</b></p>
<p>Tells mPDF whether to try and distinguish the Vietnamese language when using <code>autoScriptToLang</code>.</p>
<p>Vietnamese is written using mainly Latin script, and cannot therefore be distinguished for certain from other languages using Latin script. However there are a few characters which are unique to Vietnamese and may enable mPDF to distinguish text in a Vietnamese language.</p>
<p>Because a number of fonts do not contain these unique characters, you may wish mPDF to try and detect Vietnamese so a special font can be selected.</p>
<p>Note: If <code>autoVietnamese</code> is <span class="smallblock">TRUE</span> mPDF will mark up text detected as Vietnamese even if <code>baseScript</code> is set as "1" - ignoring most Latin scripts.</p>
<h2>Values</h2>
<p class="manual_param_dt"><span class="parameter">autoVietnamese</span> = <i><span class="smallblock">TRUE|FALSE</span></i><span class="smallblock"> 

</span></p>
<p class="manual_param_dd"><b>Values</b>

<i><span class="smallblock">FALSE</span></i>: <span class="smallblock">DEFAULT</span> Vietnamese text will be treated as Latin text when using <code>autoScriptToLang</code>

<span class="smallblock">TRUE: </span>mPDF will attempt to distinguish Vietnamese, and text will then be marked with lang= "vi"</p>
<h2>See Also</h2>
<ul>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/autoscripttolang.html" | prepend: site.baseurl }}">autoScriptToLang</a> - <code><span class="code">marks up HTML text using the lang attribute, based on the Unicode script block in question</code></span></li>
<li class="manual_boxlist"><a href="{{ "/fonts-languages/automatic-font-selection.html" | prepend: site.baseurl }}">Automatic Font selection</a> </li>
</ul>
