---
layout: page
title: SetHTMLFooterByName()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/sethtmlfooterbyname.html
modification_time: 2015-08-05T12:01:04+00:00
---

(mPDF &ge; 2.0)

SetHTMLFooterByName – Sets an HTML page footer by a given name

# Description

void **SetHTMLFooterByName** ( string <span class="parameter">$name</span> [, string <span class="parameter">$side</span> ])

Sets an HTML page footer that has previously been defined by name.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** This function/method was altered in mPDF 2.2 by
  capitalising the first letter of the name. As function/method names in PHP have hitherto been case-insensitive,
  this should not cause any problems, but it is recommended where possible to use the preferred spelling.
</div>

# Parameters

<span class="parameter">$name</span>

: This parameter specifies the name of a previously defined HTML page footer. If a <span class="smallblock">BLANK</span>
  string or `null` is passed, mPDF will use the value `_default` if such a page footer exists.

<span class="parameter">$side</span>

: Specify whether to set the footer for <span class="smallblock">ODD</span> or <span class="smallblock">EVEN</span> pages
  in a <span class="smallblock">DOUBLE-SIDED</span> document.

  Default: `'O'`

  **Values** (case-sensitive)

  `'O'`
  : Set the footer for <span class="smallblock">ODD</span> pages in a <span class="smallblock">DOUBLE-SIDED</span>
  document, or for both <span class="smallblock">ODD</span> and <span class="smallblock">EVEN</span> in a
  <span class="smallblock">SINGLE-SIDED</span> document.

  `'E'`
  : set the footer for <span class="smallblock">EVEN</span> pages


  Default: `'O'`

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
  <td>2.0</td>
  <td>The function was added.</td>
</tr>
</tbody>
</table>

# Examples

For examples and further information please see:

- <a href="{{ "/headers-footers/headers-footers.html" | prepend: site.baseurl }}">Headers &amp; Footers</a>
- <a href="{{ "/headers-footers/method-4.html" | prepend: site.baseurl }}">Headers &amp; Footers - Method 4</a>

# See Also

- <a href="{{ "/reference/mpdf-functions/defhtmlfooterbyname.html" | prepend: site.baseurl }}">DefHTMLFooterByName()</a>
- &lt;<a href="{{ "/reference/html-control-tags/htmlpagefooter.html" | prepend: site.baseurl }}">htmlpagefooter</a>&gt;
- <a href="{{ "/reference/mpdf-functions/sethtmlheaderbyname.html" | prepend: site.baseurl }}">SetHTMLHeaderByName()</a>
- &lt;<a href="{{ "/reference/html-control-tags/sethtmlpagefooter.html" | prepend: site.baseurl }}">sethtmlpagefooter</a>&gt;

