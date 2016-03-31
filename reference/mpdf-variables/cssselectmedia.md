---
layout: page
title: CSSselectMedia
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/cssselectmedia.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 4.4)</p>
<p>CSSselectMedia – Selects which media-dependent CSS stylesheets to use</p>
<h2>Description</h2>

<div class="alert alert-info" role="alert">void <b>CSSselectMedia</b></div>
<p>Selects which media-dependent CSS stylesheets to use. mPDF supports internal and external CSS stylesheets, if the media property is set to "all", or matches the value of <span class="parameter">CSSselectMedia</span>. The <span class="parameter">@media</span> selector within stylesheets is also supported.</p>

<div class="alert alert-info" role="alert"><b>Note:</b> This variable can be changed either in the configuration file <span class="filename">config.php</span>&nbsp; or at runtime</div>
<h2>Values</h2>
<p class="manual_param_dt"><span class="parameter">CSSselectMedia</span>&nbsp;&nbsp;</p>
<p class="manual_param_dd"><b>Values</b>

"print"

"screen"

[any other valid CSS @media selector, except "all"]

<span class="smallblock">DEFAULT</span>: "print"</p>
<h2>Changelog</h2>
<table class="bpmTopic"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>4.4</td>
<td>Variable was added.</td>
</tr>
</tbody> </table>
<p>&nbsp;</p>
</div>
</div>

