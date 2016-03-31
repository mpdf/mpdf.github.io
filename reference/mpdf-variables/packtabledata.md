---
layout: page
title: packTableData
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/packtabledata.html
modification_time: 2015-08-05T12:02:16+00:00
---

<p>(mPDF &gt;= 4.4)</p>
<p>packTableData – Use binary packing of table data to reduce memory usage</p>

# Description

<p class="manual_block">void <b>packTableData</b></p>
<p>Processing tables uses large amounts of internal memory, as the value are stored in an array. Enabling packTableData causes mPDF to pack the table data into a binary form saving considerable memory. However, the conversion to and from binary data takes a significant amount of time, and can increase processing time.</p>

<div class="alert alert-info" role="alert"><strong>Note:</strong> This variable can be changed either in the configuration file <span class="filename">config.php</span>&nbsp; or at runtime</div>

# Values

<p class="manual_param_dt"><span class="parameter">packTableData</span> =&nbsp; <span class="smallblock">TRUE </span>| <span class="smallblock">FALSE</span></p>
<p class="manual_param_dd"><b>Values</b>

<span class="smallblock">TRUE </span>: use binary packing of table data

<span class="smallblock">FALSE</span>: does not use binary packing of table data

<span class="smallblock">DEFAULT</span>: <span class="smallblock">FALSE</span></p>

# Changelog

<table class="table"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>4.4</td>
<td>Variable was added.</td>
</tr>
</tbody> </table>

# See Also

<ul>
<li><a href="{{ "/reference/mpdf-variables/simpletables.html" | prepend: site.baseurl }}">simpleTables</a> - Disables complex table borders etc. to improve performance</li>
</ul>

