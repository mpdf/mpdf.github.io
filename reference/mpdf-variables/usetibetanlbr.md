---
layout: page
title: useTibetanLBR
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/usetibetanlbr.html
modification_time: 2015-08-05T12:02:39+00:00
---

<p>(mPDF &gt;= 6.0)</p>

# Description

<p class="manual_block">boolean <b>useTibetanLBR</b></p>
<p>Specify whether to use mPDF algorithm to determine appropriate places for line breaks when using Tibetan text.</p>
<p>mPDF uses a simple algorithm to identify line-breaking opportunities after the characters U+0F0B (Tsheg) or U+0F0D.</p>
<p>For more information, see <a href="{{ "/what-else-can-i-do/line-breaking.html" | prepend: site.baseurl }}">Line breaking</a>.</p>

# Values

<p class="manual_param_dt"><span class="parameter">useTibetanLBR = <span class="smallblock">FALSE</span>|<span class="smallblock">TRUE</span></span></p>
<p class="manual_param_dd"><b>Values</b>

<i><span class="smallblock">TRUE</span></i>: <span class="smallblock">DEFAULT</span> use mPDF algorithm to determine appropriate places for line breaks when using Tibetan text.

<span class="smallblock">FALSE</span>: algorithm not used. Line breaks will only be allowed according to usual line-breaking rules.</p>

# Changelog

<table class="table"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>6.0</td>
<td>Variable was added.</td>
</tr>
</tbody> </table>

# See Also

<p><a href="{{ "/what-else-can-i-do/line-breaking.html" | prepend: site.baseurl }}">Line breaking</a></p>
