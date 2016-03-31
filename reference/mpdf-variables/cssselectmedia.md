---
layout: page
title: CSSselectMedia
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/cssselectmedia.html
modification_time: 2015-08-05T12:01:49+00:00
---

<p>(mPDF &gt;= 4.4)</p>
<p>CSSselectMedia – Selects which media-dependent CSS stylesheets to use</p>

# Description

<p class="manual_block">void <b>CSSselectMedia</b></p>
<p>Selects which media-dependent CSS stylesheets to use. mPDF supports internal and external CSS stylesheets, if the media property is set to "all", or matches the value of <span class="parameter">CSSselectMedia</span>. The <span class="parameter">@media</span> selector within stylesheets is also supported.</p>

<div class="alert alert-info" role="alert"><strong>Note:</strong> This variable can be changed either in the configuration file <span class="filename">config.php</span>&nbsp; or at runtime</div>

# Values

<p class="manual_param_dt"><span class="parameter">CSSselectMedia</span>&nbsp;&nbsp;</p>
<p class="manual_param_dd"><b>Values</b>

"print"

"screen"

[any other valid CSS @media selector, except "all"]

<span class="smallblock">DEFAULT</span>: "print"</p>

# Changelog

<table class="table"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>4.4</td>
<td>Variable was added.</td>
</tr>
</tbody> </table>

