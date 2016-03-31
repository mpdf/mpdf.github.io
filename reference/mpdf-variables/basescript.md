---
layout: page
title: baseScript
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/basescript.html
modification_time: 2015-08-05T12:01:43+00:00
---

(mPDF &gt;= 6.0)

# Description

boolean <b>baseScript</b>

Tells mPDF which Script to ignore when using <code>autoScriptToLang</code>.

# Values

<span class="parameter">baseScript</span> = <i><span class="smallblock">INTEGER</span></i><span class="smallblock">&nbsp;</span>

<b>Values</b>

<i><span class="smallblock">INTEGER</span></i>: (<span class="smallblock">DEFAULT</span> = 1) Number representing the script block to be ignored when using <code>autoScriptToLang</code>. It is set by default to "1" which is for Latin script. In this mode, all scripts <i>except</i> Latin script are marked up with "lang" attribute. To select other scripts as the base, see the file <span class="filename">/classes/ucdn.php</span>

# See Also

<ul>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/autoscripttolang.html" | prepend: site.baseurl }}">autoScriptToLang</a> - <code><span class="code">marks up HTML text using the lang attribute, based on the Unicode script block in question</code></span></li>
<li class="manual_boxlist"><a href="{{ "/fonts-languages/automatic-font-selection.html" | prepend: site.baseurl }}">Automatic Font selection</a> </li>
</ul>
