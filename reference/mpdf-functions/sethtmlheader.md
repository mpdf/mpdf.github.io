---
layout: page
title: SetHTMLHeader()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/sethtmlheader.html
modification_time: 2015-08-05T12:01:04+00:00
---

(mPDF &ge; 1.2)

SetHTMLHeader – Sets an HTML page header

# Description

void **SetHTMLHeader** (
string <span class="parameter">$html</span>
[, string <span class="parameter">$side</span>
[, boolean <span class="parameter">$write</span>
]])

Set an HTML page header.

# Parameters

<span class="parameter">$header</span>

: This parameter specifies the content of the page header as a string of valid HTML code.

  Default: <span class="smallblock">BLANK</span>

<span class="parameter">$side</span>

: Specify whether to set the header for <span class="smallblock">ODD</span> or <span class="smallblock">EVEN</span> pages
  in a <span class="smallblock">DOUBLE-SIDED</span> document.

  **Values** (case-sensitive)

  `'O'` - set the header for <span class="smallblock">ODD</span> pages

  `'E'` - set the header for <span class="smallblock">EVEN</span> pages

  Default: <span class="smallblock">BLANK</span>, which sets `'O'`


<span class="parameter">$write</span>

: If `true` it forces the Header to be written immediately to the current page. Use if the
  header is being set after the new page has been added.

  Default: `false`

  <div class="alert alert-info" role="alert" markdown="1">
    **Note:** Important Difference
    * <a href="{{ "/reference/mpdf-functions/setheader.html" | prepend: site.baseurl }}">SetHeader()</a> and
      <a href="{{ "/reference/mpdf-functions/setfooter.html" | prepend: site.baseurl }}">SetFooter()</a> called without
      specifying a <span class="parameter">$side</span> sets both <span class="smallblock">ODD</span> &amp;
      <span class="smallblock">EVEN</span> headers/footers;
    * `SetHTMLHeader()` and <a href="{{ "/reference/mpdf-functions/sethtmlfooter.html" | prepend: site.baseurl }}">SetHTMLFooter()</a>
      without a <span class="parameter">$side</span> - sets <span class="smallblock">ODD</span> page header/footer only
      as default
  </div>

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
  <td>1.2</td>
  <td>The function was added.</td>
</tr>
</tbody>
</table>

# Examples

For examples and further information please see:

- <a href="{{ "/headers-footers/headers-footers.html" | prepend: site.baseurl }}">Headers &amp; Footers</a>
- <a href="{{ "/headers-footers/method-2.html" | prepend: site.baseurl }}">Headers &amp; Footers - Method 2</a>

# See Also

- <a href="{{ "/reference/mpdf-functions/sethtmlfooter.html" | prepend: site.baseurl }}">SetHTMLFooter()</a>
