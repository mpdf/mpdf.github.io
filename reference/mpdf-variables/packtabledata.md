---
layout: page
title: packTableData
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/packtabledata.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 4.4)</p>
<p>packTableData – Use binary packing of table data to reduce memory usage</p>
<h2>Description</h2>

<div class="alert alert-info" role="alert">void <b>packTableData</b></div>
<p>Processing tables uses large amounts of internal memory, as the value are stored in an array. Enabling packTableData causes mPDF to pack the table data into a binary form saving considerable memory. However, the conversion to and from binary data takes a significant amount of time, and can increase processing time.</p>

<div class="alert alert-info" role="alert"><b>Note:</b> This variable can be changed either in the configuration file <span class="filename">config.php</span>&nbsp; or at runtime</div>
<h2>Values</h2>
<p class="manual_param_dt"><span class="parameter">packTableData</span> =&nbsp; <span class="smallblock">TRUE </span>| <span class="smallblock">FALSE</span></p>
<p class="manual_param_dd"><b>Values</b>

<span class="smallblock">TRUE </span>: use binary packing of table data

<span class="smallblock">FALSE</span>: does not use binary packing of table data

<span class="smallblock">DEFAULT</span>: <span class="smallblock">FALSE</span></p>
<h2>Changelog</h2>
<table class="bpmTopic"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>4.4</td>
<td>Variable was added.</td>
</tr>
</tbody> </table>
<h2>See Also</h2>
<ul>
<li><a href="{{ "/reference/mpdf-variables/simpletables.html" | prepend: site.baseurl }}">simpleTables</a> - Disables complex table borders etc. to improve performance</li>
</ul>
<p>&nbsp;</p>
</div>
</div>

