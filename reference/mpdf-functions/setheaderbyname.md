---
layout: page
title: SetHeaderByName()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setheaderbyname.html
modification_time: 2015-08-05T12:01:03+00:00
---

<p>(mPDF &gt;= 2.0)</p>
<p>SetHeaderByName – Sets a page header by a given name</p>

# Description

<p class="manual_block">void <b>SetHeaderByName</b> ( string <span class="parameter">$name</span> [, string <span class="parameter">$side</span> [, boolean <span class="parameter">$write</span> ]])</p>
<p>Sets a page header that has previously been defined by name.</p>

<div class="alert alert-info" role="alert"><strong>Note:</strong> This function/method was altered in mPDF 2.2 by capitalising the first letter of the name. As function/method names in PHP have hitherto been case-insensitive, this should not cause any problems, but it is recommended where possible to use the preferred spelling.</div>

# Parameters

<p class="manual_param_dt"><span class="parameter">name</span></p>
<p class="manual_param_dd">This parameter specifies the name of a previously defined page header. If a <span class="smallblock">BLANK</span> string or <span class="smallblock">NULL</span> is passed, mPDF will use the value '_default' if such a page header exists.</p>
<p class="manual_param_dt"><span class="parameter">side</span></p>
<p class="manual_param_dd">Specify whether to set the header for <span class="smallblock">ODD</span> or <span class="smallblock">EVEN</span> pages in a <span class="smallblock">DOUBLE-SIDED</span> document.

<span class="smallblock">DEFAULT</span>: 'O'</p>
<p class="manual_param_dd"><b>Values</b> (case-sensitive)

O - set the header for <span class="smallblock">ODD</span> pages in a <span class="smallblock">DOUBLE-SIDED</span> document, or for both <span class="smallblock">ODD</span> and <span class="smallblock">EVEN</span> in a <span class="smallblock">SINGLE-SIDED</span> document.

E - set the header for <span class="smallblock">EVEN</span> pages

<span class="smallblock">DEFAULT</span> - sets the header for <span class="smallblock">ODD</span> in a <span class="smallblock">DOUBLE-SIDED</span> document, or for both <span class="smallblock">ODD</span> and <span class="smallblock">EVEN</span> in a <span class="smallblock">SINGLE-SIDED</span> document.</p>
<p class="manual_param_dt"><span class="parameter">write</span></p>
<p class="manual_param_dd">If <span class="smallblock">TRUE</span> it forces the Header to be written immediately to the current page. Use if the header is being set after the new page has been added.

<span class="smallblock">DEFAULT</span>: <span class="smallblock">FALSE</span></p>

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
<li class="manual_boxlist"><a href="{{ "/headers-footers/method-1.html" | prepend: site.baseurl }}">Headers &amp; Footers - Method 3</a></li>
</ul>

# See Also

<ul>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/defheaderbyname.html" | prepend: site.baseurl }}">DefHeaderByName()</a></li>
<li class="manual_boxlist">&lt;<a href="{{ "/reference/html-control-tags/pageheader.html" | prepend: site.baseurl }}">pageheader</a>&gt;</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/setfooterbyname.html" | prepend: site.baseurl }}">SetFooterByName()</a></li>
<li class="manual_boxlist">&lt;<a href="{{ "/reference/html-control-tags/setpageheader.html" | prepend: site.baseurl }}">setpageheader</a>&gt;</li>
</ul>
<ul> </li>
</ul>
