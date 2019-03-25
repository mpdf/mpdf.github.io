---
layout: page
title: CreateReference()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/createreference.html
modification_time: 2015-08-05T12:00:44+00:00
---

(mPDF &ge; 1.0 & < 6.0)

CreateRefence — Generate an Index - deprecated / Removed in mPDF v6.0

# Description

void **CreateReference** ( )

<div class="alert alert-danger" role="alert" markdown="1">
  **Note:** `CreateReference()` is now deprecated in favour of the better-named `CreateIndex()`. Which is
  replace again by <a href="{{ "/reference/mpdf-functions/insertindex.html" | prepend: site.baseurl }}">InsertIndex()</a>.
</div>

# Changelog

<table class="table"> <thead>
<tr>
  <th>Version</th>
  <th>Description</th> </tr>
</thead> <tbody>
<tr>
  <td>1.0</td>
  <td>Function was added.</td>
</tr>
<tr>
  <td>2.2</td>
  <td>deprecated in favour of CreateIndex()</td>
</tr>
</tbody> </table>

# See Also

- Replacement: <a href="{{ "/reference/mpdf-functions/insertindex.html" | prepend: site.baseurl }}">InsertIndex()</a> - Generate an Index for the document
- <a href="{{ "/reference/mpdf-functions/createindex.html" | prepend: site.baseurl }}">CreateIndex()</a> - [Deprecated] Generate an Index
