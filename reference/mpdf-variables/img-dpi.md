---
layout: page
title: img_dpi
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/img-dpi.html
modification_time: 2015-08-05T12:02:02+00:00
---

(mPDF &ge; 1.0)

img_dpi – Specify size conversion for images using pixels

# Description

void **img_dpi**

Specify how to convert image sizes specified in `px` units (pixels). As a print medium, PDF documents do not have any
inherent size for pixels. Width and height values of images set in pixels need to be converted to a real length. The
dots-per-inch (dpi) affects the conversion from pixels for images; other objects using pixels as a length, are set by a
separate variable <span class="parameter">$dpi</span>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** It is recommended that the values for
  <span class="parameter">$dpi</span> and <span class="parameter">$img_dpi</span> are the same.
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** This variable can be changed as any
  <a href="{{ "/configuration/configuration-v7-x.html" | prepend: site.baseurl }}">configuration variable</a>
</div>

# Values

<span class="parameter">$img_dpi</span>

**Values**

* <span class="smallblock">INTEGER </span>: set conversion for pixel - dots per inch

Default: `96`

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
  <td>1.0</td>
  <td>Variable was added.</td>
</tr>
</tbody>
</table>

# See Also

- <a href="{{ "/reference/mpdf-variables/dpi.html" | prepend: site.baseurl }}">dpi</a> - Specify conversion for other values set in pixels

