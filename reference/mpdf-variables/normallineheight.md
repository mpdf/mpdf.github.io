---
layout: page
title: normalLineheight
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/normallineheight.html
modification_time: 2015-08-05T12:02:16+00:00
---

<p>(mPDF &gt;= 4.2)</p>
<p>normalLineheight – Define the default line-height</p>

# Description

<p class="manual_block">void <b>normalLineheight</b></p>
<p>This variable defines the default line-height used when the CSS property line-height is set to normal (default).</p>

<div class="alert alert-info" role="alert"><strong>Note:</strong> From mPDF v 6.0 onwards, this value will only be used when the variable <code>useFixedNormalLineHeight</code> is set to <span class="smallblock">TRUE</span></div>
<p>For more information, see <a href="{{ "/what-else-can-i-do/line-height.html" | prepend: site.baseurl }}">Line-height</a>.</p>

# Values

<p class="manual_param_dt"><span class="parameter">normalLineheight</span></p>
<p class="manual_param_dd"><b>Values</b>

<span class="smallblock">FLOAT </span>: Usual value between 1.1 and 1.5

<span class="smallblock">DEFAULT</span>: 1.33</p>

# Changelog

<table class="table"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>4.2</td>
<td>Variable was added.</td>
</tr>
</tbody> </table>

# See Also

<p><a href="{{ "/what-else-can-i-do/line-height.html" | prepend: site.baseurl }}">Line-height</a></p>

# Further reading

<ul>
<li><a href="http://office.microsoft.com/en-us/word/HP100165231033.aspx">http://office.microsoft.com/en-us/word/HP100165231033.aspx</a> </li>
<li><a href="http://typophile.com/node/13081">http://typophile.com/node/13081</a></li>
</ul>

