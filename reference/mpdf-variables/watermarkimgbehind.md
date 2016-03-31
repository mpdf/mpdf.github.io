---
layout: page
title: watermarkImgBehind
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/watermarkimgbehind.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 4.4)</p>
<p>watermarkImgBehind – Specify whether to place watermark images behind page contents</p>
<h2>Description</h2>

<div class="alert alert-info" role="alert">void <b>watermarkImgBehind</b></div>
<p>Specify whether to place watermark images behind page contents</p>

<div class="alert alert-info" role="alert"><b>Note:</b> This variable can be changed either in the configuration file <span class="filename">config.php</span>&nbsp; or at runtime</div>

<div class="alert alert-info" role="alert"><b>Note:</b> This variable was unintentionally set to <span class="smallblock">TRUE</span> in the <span class="filename">config.php</span> file released with mPDF 4.4 In version 4.5 it was changed to <span class="smallblock">FALSE</span></div>
<h2>Values</h2>
<p class="manual_param_dt"><span class="parameter">watermarkImgBehind</span> =&nbsp; <span class="smallblock">TRUE </span>| <span class="smallblock">FALSE</span></p>
<p class="manual_param_dd"><b>Values</b>

<span class="smallblock">TRUE </span>: place watermark images behind page contents

<span class="smallblock">FALSE</span>: place watermark images in front of all page contents

<span class="smallblock">DEFAULT</span>: <span class="smallblock">FALSE</span></p>
<h2>Changelog</h2>
<table class="bpmTopic"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>4.4</td>
<td>Variable was added.</td>
</tr>
<tr>
<td>4.5</td>
<td>Default value changed to <span class="smallblock">FALSE</span></td>
</tr>
</tbody> </table>
<p>See Also</p>
<ul>
<li class="manual_boxlist"><a href="/reference/mpdf-variables/watermarkimgalphablend.html">watermarkImgAlphaBlend</a> - Specify the blend mode for overlaid watermark images</li>
</ul>
<p>&nbsp;</p>
</div>
</div>

