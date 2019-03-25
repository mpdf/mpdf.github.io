---
layout: page
title: SetHeaderByName()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setheaderbyname.html
modification_time: 2015-08-05T12:01:03+00:00
---

(mPDF &ge; 2.0)

SetHeaderByName – Sets a page header by a given name

# Description

void **SetHeaderByName** ( string <span class="parameter">$name</span> [, string <span class="parameter">$side</span>
[, boolean <span class="parameter">$write</span> ]])

Sets a page header that has previously been defined by name.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** This function/method was altered in mPDF 2.2 by capitalising the first letter of the name.
  As function/method names in PHP have hitherto been case-insensitive, this should not cause any problems, but it is
  recommended where possible to use the preferred spelling.
</div>

# Parameters

<span class="parameter">$name</span>

: This parameter specifies the name of a previously defined page header. If a <span class="smallblock">BLANK</span>
  string or `null` is passed, mPDF will use the value `_default` if such a page header exists.

<span class="parameter">$side</span>

: Specify whether to set the header for <span class="smallblock">ODD</span> or <span class="smallblock">EVEN</span>
  pages in a <span class="smallblock">DOUBLE-SIDED</span> document.


  **Values** (case-sensitive)

  `'O'`
  : set the header for <span class="smallblock">ODD</span> pages in a <span class="smallblock">DOUBLE-SIDED</span>
    document, or for both <span class="smallblock">ODD</span> and <span class="smallblock">EVEN</span> in a
    <span class="smallblock">SINGLE-SIDED</span> document.

  `'E'`
  : set the header for <span class="smallblock">EVEN</span> pages

  Default: `'O'`

<span class="parameter">$write</span>

: If `true` it forces the Header to be written immediately to the current page.
  Use if the header is being set after the new page has been added.

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
  <td>2.0</td>
  <td>The function was added.</td>
</tr>
</tbody>
</table>

# Examples

For examples and further information please see:

- <a href="{{ "/headers-footers/headers-footers.html" | prepend: site.baseurl }}">Headers &amp; Footers</a>
- <a href="{{ "/headers-footers/method-1.html" | prepend: site.baseurl }}">Headers &amp; Footers - Method 3</a>

# See Also

- <a href="{{ "/reference/mpdf-functions/defheaderbyname.html" | prepend: site.baseurl }}">DefHeaderByName()</a>
- &lt;<a href="{{ "/reference/html-control-tags/pageheader.html" | prepend: site.baseurl }}">pageheader</a>&gt;
- <a href="{{ "/reference/mpdf-functions/setfooterbyname.html" | prepend: site.baseurl }}">SetFooterByName()</a>
- &lt;<a href="{{ "/reference/html-control-tags/setpageheader.html" | prepend: site.baseurl }}">setpageheader</a>&gt;
