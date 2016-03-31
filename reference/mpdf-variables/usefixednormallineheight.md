---
layout: page
title: useFixedNormalLineHeight
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/usefixednormallineheight.html
modification_time: 2015-08-05T12:02:36+00:00
---

(mPDF &gt;= 6.0)

# Description

boolean <b>useFixedNormalLineHeight</b>

Specify whether to use a fixed value for the line-height of text, when CSS property line-height is set to <code>normal</code> (default).

For more information, see <a href="{{ "/what-else-can-i-do/line-height.html" | prepend: site.baseurl }}">Line-height</a>.

# Values

<span class="parameter">useFixedNormalLineHeight= <span class="smallblock">FALSE</span>|<span class="smallblock">TRUE</span></span>

<b>Values</b>

<i><span class="smallblock">FALSE</span></i>: <span class="smallblock">DEFAULT</span> use the font metrics to determine the line-height of text, when CSS property line-height is set to <code>normal</code> (default).

<span class="smallblock">TRUE</span>: use a fixed value for the line-height of text, when CSS property line-height is set to <code>normal</code> (default).

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
<li class="manual_boxlist"><a href="{{ "/what-else-can-i-do/line-height.html" | prepend: site.baseurl }}">Line-height</a></li>
</ul>
