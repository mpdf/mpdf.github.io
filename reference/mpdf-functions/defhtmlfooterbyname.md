---
layout: page
title: DefHTMLFooterByName()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/defhtmlfooterbyname.html
modification_time: 2015-08-05T12:00:46+00:00
---

(mPDF >= 2.0)

DefHTMLFooterByName – Define an HTML page footer with a given name

# Description

void **DefHTMLFooterByName** ( string <span class="parameter">$name</span> [, string <span class="parameter">$html</span> ])

Define an HTML page footer with a given name. Named footers can be referenced and set later in the document e.g. <a href="{{ "/reference/mpdf-functions/sethtmlfooterbyname.html" | prepend: site.baseurl }}">SetHTMLFooterByName()</a>

<div class="alert alert-info" role="alert">**Note:** Do not name any header or footer starting with html_   This prefix is reserved to identify an <span class="smallblock">HTML</span> header/footer when passing its name in a reference.</div>

<div class="alert alert-info" role="alert">**Note:** This function/method was altered in mPDF 2.2 by capitalising the first letter of the name. As function/method names in PHP have hitherto been case-insensitive, this should not cause any problems, but it is recommended where possible to use the preferred spelling.</div>

# Parameters

<span class="parameter">$name</span>

User-defined name for the footer. If <span class="parameter">$name</span> = <span class="smallblock">BLANK</span> the name '_default' is used.<span class="smallblock">

</span>

<span class="parameter">$html</span>

This parameter specifies the content of the page footer as a string of valid HTML code.

<span class="smallblock">DEFAULT</span>: <span class="smallblock">BLANK</span>

# Changelog

<table class="table"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>2.0</td>
<td>The function was added.</td>
</tr>
</tbody> </table>

# Examples

For examples and further information please see:

<ul>
<li class="manual_boxlist"><a href="{{ "/headers-footers/headers-footers.html" | prepend: site.baseurl }}">Headers &amp; Footers</a></li>
<li class="manual_boxlist"><a href="{{ "/headers-footers/method-4.html" | prepend: site.baseurl }}">Headers &amp; Footers - Method 4</a></li>
</ul>

# See Also

<ul>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/defhtmlheaderbyname.html" | prepend: site.baseurl }}">DefHTMLHeaderByName()</a></li>
<li class="manual_boxlist">&lt;<a href="{{ "/reference/html-control-tags/htmlpagefooter.html" | prepend: site.baseurl }}">htmlpagefooter</a>&gt;</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/sethtmlfooterbyname.html" | prepend: site.baseurl }}">SetHTMLFooterByName()</a></li>
<li class="manual_boxlist">&lt;<a href="{{ "/reference/html-control-tags/sethtmlpagefooter.html" | prepend: site.baseurl }}">sethtmlpagefooter</a>&gt;</li>
</ul>

