---
layout: page
title: watermarkImgBehind
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/watermarkimgbehind.html
modification_time: 2015-08-05T12:02:41+00:00
---

(mPDF >= 4.4)

watermarkImgBehind – Specify whether to place watermark images behind page contents

# Description

void **watermarkImgBehind**

Specify whether to place watermark images behind page contents

<div class="alert alert-info" role="alert">
	<strong>Note:</strong> This variable can be changed either in the
	configuration file <span class="filename">config.php</span> or at runtime
</div>

<div class="alert alert-info" role="alert">
	<strong>Note:</strong> This variable was unintentionally set to
	<span class="smallblock">TRUE</span> in the <span class="filename">config.php</span> file released with mPDF 4.4
	In version 4.5 it was changed to <span class="smallblock">FALSE</span>
</div>

# Values

<span class="parameter">$watermarkImgBehind</span> = <span class="smallblock">TRUE</span>|<span class="smallblock">FALSE</span>

**Values**

<span class="smallblock">TRUE</span>: place watermark images behind page contents

<span class="smallblock">FALSE</span>: place watermark images in front of all page contents

<span class="smallblock">DEFAULT</span>: <span class="smallblock">FALSE</span>

# Changelog

<table class="table">
	<thead>
	<tr><th>Version</th><th>Description</th></tr>
	</thead>
<tbody>
	<tr>
		<td>4.4</td>
		<td>Variable was added.</td>
	</tr>
	<tr>
		<td>4.5</td>
		<td>Default value changed to <span class="smallblock">FALSE</span></td>
	</tr>
</tbody>
</table>

See Also

- <a href="{{ "/reference/mpdf-variables/watermarkimgalphablend.html" | prepend: site.baseurl }}">watermarkImgAlphaBlend</a> - Specify the blend mode for overlaid watermark images<

