---
layout: page
title: dpi
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/dpi.html
modification_time: 2015-08-05T12:01:55+00:00
---

(mPDF &ge; 4.5)

# Description

void **dpi**

Specify how to convert sizes specified in `px` units (pixels). As a print medium, PDF documents do not have any
inherent size for pixels. Any values set for e.g. font-size, border-width etc. need to be converted to a real length.
The dots-per-inch (dpi) affects all conversions from pixels ***except images***, which are set by a separate variable
<span class="parameter">$img_dpi</span>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** It is recommended that the values for
  <span class="parameter">$dpi</span> and <span class="parameter">$img_dpi</span> are the same.
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** This variable can be changed as any other
  <a href="{{ "/configuration/configuration-v7-x.html" | prepend: site.baseurl }}">configuration variable</a>
</div>

# Values

<span class="parameter">$dpi</span>

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
  <td>4.5</td>
  <td>Variable was added.</td>
</tr>
</tbody>
</table>

# See Also

- <a href="{{ "/reference/mpdf-variables/img-dpi.html" | prepend: site.baseurl }}">img_dpi</a> - Specify conversion for image sizes set in pixels
