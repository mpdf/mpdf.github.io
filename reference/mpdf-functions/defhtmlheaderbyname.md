---
layout: page
title: DefHTMLHeaderByName()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/defhtmlheaderbyname.html
modification_time: 2015-08-05T12:00:46+00:00
---

(mPDF &ge; 2.0)

DefHTMLHeaderByName – Define an HTML page header with a given name

# Description

void **DefHTMLHeaderByName** ( string <span class="parameter">$name</span> [, string <span class="parameter">$html</span> ])

Define an HTML page header with a given name. Named headers can be referenced and set later in the document e.g.
<a href="{{ "/reference/mpdf-functions/setheaderbyname.html" | prepend: site.baseurl }}">SetHTMLHeaderByName()</a>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** Do not name any header or footer starting with `html_` This prefix is reserved to identify an
  <span class="smallblock">HTML</span> header/footer when passing its name in a reference.
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** This function/method was altered in mPDF 2.2 by capitalising the first letter of the name.
  As function/method names in PHP have hitherto been case-insensitive, this should not cause any problems, but it is
  recommended where possible to use the preferred spelling.
</div>

# Parameters

<span class="parameter">$name</span>

: User-defined name for the header. If <span class="parameter">$name</span>`= ''` (blank) the
  name `_default` is used.

<span class="parameter">$html</span>

: This parameter specifies the content of the page header as a string of valid HTML code.

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

- <a href="{{ "/reference/mpdf-functions/defhtmlfooterbyname.html" | prepend: site.baseurl }}">DefHTMLFooterByName()</a>
- &lt;<a href="{{ "/reference/html-control-tags/htmlpageheader.html" | prepend: site.baseurl }}">htmlpageheader</a>&gt;
- <a href="{{ "/reference/mpdf-functions/sethtmlheaderbyname.html" | prepend: site.baseurl }}">SetHTMLHeaderByName()</a>
- &lt;<a href="{{ "/reference/html-control-tags/sethtmlpageheader.html" | prepend: site.baseurl }}">sethtmlpageheader</a>&gt;

