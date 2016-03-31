---
layout: page
title: useDictionaryLBR
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/usedictionarylbr.html
modification_time: 2015-08-05T12:02:35+00:00
---

(mPDF &gt;= 6.0)

# Description

boolean <b>useDictionaryLBR</b>

Specify whether to use mPDF word dictionaries to determine appropriate places for line breaks when using Lao, Thai or Khmer text.

For more information, see <a href="{{ "/what-else-can-i-do/line-breaking.html" | prepend: site.baseurl }}">Line breaking</a>.

# Values

<span class="parameter">useDictionaryLBR = <span class="smallblock">FALSE</span>|<span class="smallblock">TRUE</span></span>

<b>Values</b>

<i><span class="smallblock">TRUE</span></i>: <span class="smallblock">DEFAULT</span> use mPDF word dictionaries to determine appropriate places for line breaks when using Lao, Thai or Khmer text.

<span class="smallblock">FALSE</span>: word dictionaries not used. Line breaks will only be allowed according to usual line-breaking rules.

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

<ul>
<li class="manual_boxlist"><a href="{{ "/what-else-can-i-do/line-breaking.html" | prepend: site.baseurl }}">Line breaking</a></li>
</ul>
