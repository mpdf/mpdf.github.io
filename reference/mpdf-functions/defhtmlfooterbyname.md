---
layout: page
title: DefHTMLFooterByName()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/defhtmlfooterbyname.html
modification_time: 2015-08-05T12:00:46+00:00
---

<p>(mPDF &gt;= 2.0)</p>
<p>DefHTMLFooterByName – Define an HTML page footer with a given name</p>

# Description

<p class="manual_block">void <b>DefHTMLFooterByName</b> ( string <span class="parameter">$name</span> [, string <span class="parameter">$html</span> ])</p>
<p>Define an HTML page footer with a given name. Named footers can be referenced and set later in the document e.g. <a href="{{ "/reference/mpdf-functions/sethtmlfooterbyname.html" | prepend: site.baseurl }}">SetHTMLFooterByName()</a></p>

<div class="alert alert-info" role="alert"><strong>Note:</strong> Do not name any header or footer starting with html_&nbsp;&nbsp; This prefix is reserved to identify an <span class="smallblock">HTML</span> header/footer when passing its name in a reference.</div>

<div class="alert alert-info" role="alert"><strong>Note:</strong> This function/method was altered in mPDF 2.2 by capitalising the first letter of the name. As function/method names in PHP have hitherto been case-insensitive, this should not cause any problems, but it is recommended where possible to use the preferred spelling.</div>

# Parameters

<p class="manual_param_dt"><span class="parameter">name</span></p>
<p class="manual_param_dd">User-defined name for the footer. If <span class="parameter">name</span> = <span class="smallblock">BLANK</span> the name '_default' is used.<span class="smallblock">

</span></p>
<p class="manual_param_dt"><span class="parameter">html</span></p>
<p class="manual_param_dd">This parameter specifies the content of the page footer as a string of valid HTML code.

<span class="smallblock">DEFAULT</span>: <span class="smallblock">BLANK</span></p>

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

<p>For examples and further information please see:</p>
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

