---
layout: page
title: justifyB4br
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/justifyb4br.html
modification_time: 2015-08-05T12:02:05+00:00
---

(mPDF &gt;= 4.4)

justifyB4br – Specify whether to justify line of text beofre a linebreak

# Description

void **justifyB4br**

Specify whether to justify line of text beofre a linebreak. This only makes a difference when the text-alignment of the current block is set as "text-align: justify".

In a justified text block, a &lt;br&gt; linebreak will not cause the preceding line to be justified. This behaviour matches most browsers. However, to allow optional compliance with the behaviour of MS Word, which also justifies text before a &lt;br&gt; you can set this variable to <span class="smallblock">TRUE</span>.

# Values

<span class="parameter">justifyB4br</span> =  <span class="smallblock">TRUE </span>| <span class="smallblock">FALSE</span>

**Values**

<span class="smallblock">TRUE </span>: justify line of text beofre a linebreak

<span class="smallblock">FALSE</span>: do not justify line of text beofre a linebreak

<span class="smallblock">DEFAULT</span>: <span class="smallblock">FALSE</span>

# Changelog

<table class="table"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>4.4</td>
<td>Variable was added.</td>
</tr>
</tbody> </table>
