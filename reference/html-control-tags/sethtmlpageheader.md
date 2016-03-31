---
layout: page
title: sethtmlpageheader
parent_title: HTML control tags
permalink: /reference/html-control-tags/sethtmlpageheader.html
modification_time: 2015-08-05T12:01:28+00:00
---

<p>(mPDF &gt;= 2.0)</p>
<p>sethtmlpageheader – Set an HTML page header by a given name</p>

# Description

<p class="manual_block">&lt; <b>sethtmlpageheader</b> [ <span class="parameter">name</span> ] [ <span class="parameter">page</span> ] [ <span class="parameter">value</span> ] [ <span class="parameter">show-this-page</span> ] /&gt;</p>
<p>Sets an HTML page header that has previously been defined by name.</p>

# Parameters

<p class="manual_param_dt"><span class="parameter">name</span></p>
<p class="manual_param_dd">This parameter specifies the name of a previously defined HTML page header. If a <span class="smallblock">BLANK</span> string or <span class="smallblock">NULL</span> is passed, mPDF will use the value '_default' if such a page header exists.

The <span class="parameter">name</span> does not need to be defined if you are setting the value to -1 or 'off'</p>
<p class="manual_param_dt"><span class="parameter">page</span></p>
<p class="manual_param_dd">Specify whether to set the header for <span class="smallblock">ODD</span> or <span class="smallblock">EVEN</span> pages in a <span class="smallblock">DOUBLE-SIDED</span> document.

<span class="smallblock">DEFAULT</span>: 'ODD'

Note: setting this value to <span class="smallblock">BLANK</span> will not clear the header; set <span class="parameter">value</span> to -1 or off to cancel the header</p>
<p class="manual_param_dd"><b>Values</b> (case-insensitive)

O or ODD - set the header for <span class="smallblock">ODD</span> pages in a <span class="smallblock">DOUBLE-SIDED</span> document, or for both <span class="smallblock">ODD</span> and <span class="smallblock">EVEN</span> in a <span class="smallblock">SINGLE-SIDED</span> document.

E or EVEN - set the header for <span class="smallblock">EVEN</span> pages

ALL - sets the header for both <span class="smallblock">ODD</span> and <span class="smallblock">EVEN</span> pages.

If the <span class="parameter">page</span> value is <span class="smallblock">BLANK</span> or omitted - sets the header for <span class="smallblock">ODD</span> in a <span class="smallblock">DOUBLE-SIDED</span> document, or for both <span class="smallblock">ODD</span> and <span class="smallblock">EVEN</span> in a <span class="smallblock">SINGLE-SIDED</span> document.</p>
<p class="manual_param_dt"><span class="parameter">value</span></p>
<p class="manual_param_dd">Specify whether to start or stop showing the named header from the current position in the document.

<span class="smallblock">

</span></p>
<p class="manual_param_dd"><b>Values</b> (case-insensitive)

1 or ON - start using this named header

-1 or OFF - stop using a header

<span class="smallblock">DEFAULT</span> -&nbsp; <span class="smallblock">BLANK</span> is ignored, making no changes to the current state</p>
<p class="manual_param_dt"><span class="parameter">show-this-page</span></p>
<p class="manual_param_dd">If <span class="parameter">show-this-page</span> is set to "1" (or any positive value) it forces the header to be written immediately to the current page. Use if the header is being set after the new page has been added.

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
<li class="manual_boxlist">&lt;<a href="{{ "/reference/html-control-tags/htmlpageheader.html" | prepend: site.baseurl }}">htmlpageheader</a>&gt;</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/sethtmlfooterbyname.html" | prepend: site.baseurl }}">SetHTMLFooterByName()</a></li>
<li class="manual_boxlist">&lt;<a href="{{ "/reference/html-control-tags/sethtmlpageheader.html" | prepend: site.baseurl }}">sethtmlpagefooter</a>&gt;</li>
</ul>

