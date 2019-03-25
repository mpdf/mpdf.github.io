---
layout: page
title: sethtmlpageheader
parent_title: HTML control tags
permalink: /reference/html-control-tags/sethtmlpageheader.html
modification_time: 2015-08-05T12:01:28+00:00
---

(mPDF &ge; 2.0)

sethtmlpageheader – Set an HTML page header by a given name

# Description

&lt; **sethtmlpageheader** [ <span class="parameter">$name</span> ] [ <span class="parameter">$page</span> ] [ <span class="parameter">$value</span> ] [ <span class="parameter">$show-this-page</span> ] /&gt;

Sets an HTML page header that has previously been defined by name.

# Parameters

<span class="parameter">$name</span>

: This parameter specifies the name of a previously defined HTML page header. If a <span class="smallblock">BLANK</span>
  string or `null` is passed, mPDF will use the value `'_default'` if such a page header
  exists.

  The <span class="parameter">$name</span> does not need to be defined if you are setting the value to `'-1'` or `'off'`

<span class="parameter">$page</span>

: Specify whether to set the header for <span class="smallblock">ODD</span> or <span class="smallblock">EVEN</span> pages
  in a <span class="smallblock">DOUBLE-SIDED</span> document.

  Default: `'ODD'`

  Note: setting this value to <span class="smallblock">BLANK</span> will not clear the header; set
  <span class="parameter">$value</span> to `'-1'` or `'off'` to cancel the header

  **Values** (case-insensitive)

  * `'O'` or `'ODD'` - set the header for <span class="smallblock">ODD</span> pages in a <span class="smallblock">DOUBLE-SIDED</span>
  document, or for both <span class="smallblock">ODD</span> and <span class="smallblock">EVEN</span> in a
  <span class="smallblock">SINGLE-SIDED</span> document.
  * `'E'` or `'EVEN'` - set the header for <span class="smallblock">EVEN</span> pages
  * `'ALL'` - sets the header for both <span class="smallblock">ODD</span> and <span class="smallblock">EVEN</span> pages.

  If the <span class="parameter">$page</span> value is <span class="smallblock">BLANK</span> or omitted - sets the header
  for <span class="smallblock">ODD</span> in a <span class="smallblock">DOUBLE-SIDED</span> document, or for both
  <span class="smallblock">ODD</span> and <span class="smallblock">EVEN</span> in a
  <span class="smallblock">SINGLE-SIDED</span> document.

<span class="parameter">$value</span>

: Specify whether to start or stop showing the named header from the current position in the document.

  **Values** (case-insensitive)

  * `'1'` or `'ON'` - start using this named header
  * `'-1'` or `'OFF'` - stop using a header

  Default: <span class="smallblock">BLANK</span> is ignored, making no changes to the
  current state

<span class="parameter">$show-this-page</span>

: If <span class="parameter">$show-this-page</span> is set to `"1"` (or any positive value) it forces the header to be
  written immediately to the current page. Use if the header is being set after the new page has been added.

  Default: <span class="smallblock">BLANK</span>

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

- <a href="{{ "/reference/mpdf-functions/defhtmlheaderbyname.html" | prepend: site.baseurl }}">DefHTMLHeaderByName()</a>
- &lt;<a href="{{ "/reference/html-control-tags/htmlpageheader.html" | prepend: site.baseurl }}">htmlpageheader</a>&gt;
- <a href="{{ "/reference/mpdf-functions/sethtmlfooterbyname.html" | prepend: site.baseurl }}">SetHTMLFooterByName()</a>
- &lt;<a href="{{ "/reference/html-control-tags/sethtmlpageheader.html" | prepend: site.baseurl }}">sethtmlpagefooter</a>&gt;

