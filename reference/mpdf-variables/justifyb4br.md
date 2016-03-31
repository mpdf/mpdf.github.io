---
layout: page
title: justifyB4br
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/justifyb4br.html
modification_time: 2015-08-05T12:02:05+00:00
---



<p>(mPDF &gt;= 4.4)</p>
<p>justifyB4br – Specify whether to justify line of text beofre a linebreak</p>
<h2>Description</h2>
<p class="manual_block">void <b>justifyB4br</b></p>
<p>Specify whether to justify line of text beofre a linebreak. This only makes a difference when the text-alignment of the current block is set as "text-align: justify".</p>
<p>In a justified text block, a &lt;br&gt; linebreak will not cause the preceding line to be justified. This behaviour matches most browsers. However, to allow optional compliance with the behaviour of MS Word, which also justifies text before a &lt;br&gt; you can set this variable to <span class="smallblock">TRUE</span>.</p>
<h2>Values</h2>
<p class="manual_param_dt"><span class="parameter">justifyB4br</span> =&nbsp; <span class="smallblock">TRUE </span>| <span class="smallblock">FALSE</span></p>
<p class="manual_param_dd"><b>Values</b>

<span class="smallblock">TRUE </span>: justify line of text beofre a linebreak

<span class="smallblock">FALSE</span>: do not justify line of text beofre a linebreak

<span class="smallblock">DEFAULT</span>: <span class="smallblock">FALSE</span></p>
<h2>Changelog</h2>
<table class="table"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>4.4</td>
<td>Variable was added.</td>
</tr>
</tbody> </table>
