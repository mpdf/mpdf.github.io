---
layout: page
title: dpi
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/dpi.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 4.5)</p>
<h2>Description</h2>

<div class="alert alert-info" role="alert">void <b>dpi</b></div>
<p>Specify how to convert sizes specified in "px" units (pixels). As a print medium, PDF documents do not have any inherent size for pixels. Any values set for e.g. font-size, border-width etc. need to be converted to a real length. The dots-per-inch (dpi) affects all conversions from pixels <i><b>except images</b></i>, which are set by a separate variable <span class="parameter">img_dpi</span></p>

<div class="alert alert-info" role="alert"><b>Note:</b> It is recommended that the values for <span class="parameter">dpi</span> and <span class="parameter">img_dpi</span> are the same.</div>

<div class="alert alert-info" role="alert"><b>Note:</b> This variable can be changed in the configuration file <span class="filename">config.php</span></div>
<h2>Values</h2>
<p class="manual_param_dt"><span class="parameter">dpi</span></p>
<p class="manual_param_dd"><b>Values</b>

<span class="smallblock">INTEGER </span>: set conversion for pixel - dots per inch

<span class="smallblock">DEFAULT</span>: 96</p>
<h2>Changelog</h2>
<table class="bpmTopic"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>4.5</td>
<td>Variable was added.</td>
</tr>
</tbody> </table>
<h2>See Also</h2>
<ul>
<li class="manual_boxlist"><a href="/reference/mpdf-variables/img-dpi.html">img_dpi</a> - Specify conversion for image sizes set in pixels</li>
</ul>
</div>
</div>

