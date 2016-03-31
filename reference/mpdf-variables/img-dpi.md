---
layout: page
title: img_dpi
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/img-dpi.html
modification_time: 2015-08-05T12:02:02+00:00
---

<p>(mPDF &gt;= 1.0)</p>
<p>img_dpi – Specify size conversion for images using pixels</p>

# Description

<p class="manual_block">void <b>img_dpi</b></p>
<p>Specify how to convert image sizes specified in "px" units (pixels). As a print medium, PDF documents do not have any inherent size for pixels. Width and height values of images set in pixels need to be converted to a real length. The dots-per-inch (dpi) affects the conversion from pixels for images; other objects using pixels as a length, are set by a separate variable <span class="parameter">dpi</span></p>

<div class="alert alert-info" role="alert"><strong>Note:</strong> It is recommended that the values for <span class="parameter">dpi</span> and <span class="parameter">img_dpi</span> are the same.</div>

<div class="alert alert-info" role="alert"><strong>Note:</strong> This variable can be changed in the configuration file <span class="filename">config.php</span></div>

# Values

<p class="manual_param_dt"><span class="parameter">img_dpi</span></p>
<p class="manual_param_dd"><b>Values</b>

<span class="smallblock">INTEGER </span>: set conversion for pixel - dots per inch

<span class="smallblock">DEFAULT</span>: 96</p>

# Changelog

<table class="table"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>1.0</td>
<td>Variable was added.</td>
</tr>
</tbody> </table>

# See Also

<ul>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/dpi.html" | prepend: site.baseurl }}">dpi</a> - Specify conversion for other values set in pixels

</li>
</ul>

