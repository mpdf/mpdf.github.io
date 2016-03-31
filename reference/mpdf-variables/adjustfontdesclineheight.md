---
layout: page
title: adjustFontDescLineheight
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/adjustfontdesclineheight.html
modification_time: 2015-08-05T12:01:32+00:00
---

<p>(mPDF &gt;= 6.0)</p>

# Description

<p class="manual_block">void <b>adjustFontDescLineheight</b></p>
<p>Specify a factor by which to multiply the font metrics, when determining the text lineheight. When set to 1, the text linehieght will equal the values set in the font for Ascent + Descent.</p>
<p>For more information, see <a href="{{ "/what-else-can-i-do/line-height.html" | prepend: site.baseurl }}">Line-height</a>.</p>

# Values

<p class="manual_param_dt"><span class="parameter">adjustFontDescLineheight</span></p>
<p class="manual_param_dd"><b>Values</b>

<span class="smallblock">FLOAT </span>: use the when font metrics are being used to set the text line-height. Usual value between 1 and 1.2

<span class="smallblock">DEFAULT</span>: 1.14</p>

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

<p><a href="{{ "/what-else-can-i-do/line-height.html" | prepend: site.baseurl }}">Line-height</a></p>
