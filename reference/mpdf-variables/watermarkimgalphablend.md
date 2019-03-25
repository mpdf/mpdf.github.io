---
layout: page
title: watermarkImgAlphaBlend
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/watermarkimgalphablend.html
modification_time: 2015-08-05T12:02:41+00:00
---

(mPDF &ge; 4.5)

watermarkImgAlphaBlend – Specify the blend mode for overlying watermark images

# Description

void **watermarkImgAlphaBlend**

Specify the blend mode for overlying watermark images. Different blend modes work with different types of images.
The blend modes are those specified in the
<a href="{{ "/reference/pdf-files-adobe/pdf-reference.html" | prepend: site.baseurl }}">PDF reference</a>. The value of
`'Normal'` gives acceptable results for most cases. `'Multiply'` may produce better results with overlying WMF or SVG images.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** This variable can be changed as any other
  <a href="{{ "/configuration/configuration-v7-x.html" | prepend: site.baseurl }}">configuration variable</a>
</div>

# Values

<span class="parameter">$watermarkImgAlphaBlend</span>

- `'Normal'`
- `'Multiply'`
- `'Screen'`
- `'Overlay'`
- `'Darken'`
- `'Lighten'`
- `'ColorDodge'`
- `'ColorBurn'`
- `'HardLight'`
- `'SoftLight'`
- `'Difference'`
- `'Exclusion'`

Default: `'Normal'`

# Changelog

<table class="table">
<thead>
<tr>
  <th>Version</th>
  <th>Description</th>
</tr>
</thead>
<tbody>
<tr>
  <td>4.5</td>
  <td>Variable was added.</td>
</tr>
</tbody>
</table>

See Also

- <a href="{{ "/reference/mpdf-variables/watermarkimgbehind.html" | prepend: site.baseurl }}">watermarkImgBehind</a> - Specify whether to place watermark images behind page contents

