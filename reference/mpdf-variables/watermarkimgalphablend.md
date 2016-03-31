---
layout: page
title: watermarkImgAlphaBlend
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/watermarkimgalphablend.html
modification_time: 2015-08-05T12:02:41+00:00
---

<p>(mPDF &gt;= 4.5)</p>
<p>watermarkImgAlphaBlend – Specify the blend mode for overlying watermark images</p>

# Description

<p class="manual_block">void <b>watermarkImgAlphaBlend</b></p>
<p>Specify the blend mode for overlying watermark images. Different blend modes work with different types of images. The blend modes are those specified in the <a href="{{ "/reference/pdf-files-adobe/pdf-reference.html" | prepend: site.baseurl }}">PDF reference</a>. The value of Normal gives acceptable results for most cases. 'Multiply' may produce better results with overlying WMF or SVG images.</p>

<div class="alert alert-info" role="alert"><strong>Note:</strong> This variable can be changed either in the configuration file <span class="filename">config.php</span>&nbsp; or at runtime</div>

# Values

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

# Changelog

<table class="table"> <thead>
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

