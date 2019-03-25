---
layout: page
title: packTableData
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/packtabledata.html
modification_time: 2015-08-05T12:02:16+00:00
---

(mPDF &ge; 4.4)

packTableData – Use binary packing of table data to reduce memory usage

# Description

void **packTableData**

Processing tables uses large amounts of internal memory, as the value are stored in an array. Enabling packTableData
causes mPDF to pack the table data into a binary form saving considerable memory. However, the conversion to and from
binary data takes a significant amount of time, and can increase processing time.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** This variable can be changed as any
  <a href="{{ "/configuration/configuration-v7-x.html" | prepend: site.baseurl }}">configuration variable</a>
</div>

# Values

<span class="parameter">$packTableData</span> = `true`\|`false`

**Values**

* `true`: use binary packing of table data
* `false`: does not use binary packing of table data

Default: `false`

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
  <td>4.4</td>
  <td>Variable was added.</td>
</tr>
</tbody>
</table>

# See Also

- <a href="{{ "/reference/mpdf-variables/simpletables.html" | prepend: site.baseurl }}">simpleTables</a> - Disables complex table borders etc. to improve performance

