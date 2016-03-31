---
layout: page
title: watermarkImgAlphaBlend
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/watermarkimgalphablend.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 4.5)</p>
<p>watermarkImgAlphaBlend – Specify the blend mode for overlying watermark images</p>
<h2>Description</h2>

<div class="alert alert-info" role="alert">void <b>watermarkImgAlphaBlend</b></div>
<p>Specify the blend mode for overlying watermark images. Different blend modes work with different types of images. The blend modes are those specified in the <a href="{{ "/reference/pdf-files-adobe/pdf-reference.html" | prepend: site.baseurl }}">PDF reference</a>. The value of Normal gives acceptable results for most cases. 'Multiply' may produce better results with overlying WMF or SVG images.</p>

<div class="alert alert-info" role="alert"><b>Note:</b> This variable can be changed either in the configuration file <span class="filename">config.php</span>&nbsp; or at runtime</div>
<h2>Values</h2>
<p class="manual_param_dt"><span class="parameter">watermarkImgAlphaBlend</span></p>
<p class="manual_param_dd"><b>Values</b>

Normal

Multiply

Screen

Overlay

Darken

Lighten

ColorDodge

ColorBurn

HardLight

SoftLight

Difference

Exclusion

<span class="smallblock">DEFAULT</span>: Normal</p>
<h2>Changelog</h2>
<table class="bpmTopic"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>4.5</td>
<td>Variable was added.</td>
</tr>
</tbody> </table>
<p>See Also</p>
<ul>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/watermarkimgbehind.html" | prepend: site.baseurl }}">watermarkImgBehind</a> - Specify whether to place watermark images behind page contents</li>
</ul>
<p>&nbsp;</p>
</div>
</div>

