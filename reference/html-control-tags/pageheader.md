---
layout: page
title: pageheader
parent_title: HTML control tags
permalink: /reference/html-control-tags/pageheader.html
modification_time: 2015-08-05T12:01:26+00:00
---



<p>(mPDF &gt;= 2.0)</p>
<p>pageheader – Define a page header with a given name</p>
<h2>Description</h2>
<p class="manual_block">&lt;<b>pageheader</b> [ <span class="parameter">name</span> ] [ <span class="parameter">content-left</span> ] [ <span class="parameter">content-center</span> ] [ <span class="parameter">content-right</span> ] [ <span class="parameter">header-style</span> ] [ <span class="parameter">header-style-left</span> ] [ <span class="parameter">header-style-center</span> ] [ <span class="parameter">header-style-right</span> ] [ <span class="parameter">line</span> ] /&gt;</p>
<p>Define a page header with a given name. Named headers can be referenced and set later in the document e.g. &lt;<a href="{{ "/reference/html-control-tags/setpageheader.html" | prepend: site.baseurl }}">setpageheader</a>&gt;</p>

<div class="alert alert-info" role="alert"><strong>Note:</strong> Do not name any header or footer starting with html_&nbsp;&nbsp; This prefix is reserved to identify an <span class="smallblock">HTML</span> header/footer when passing its name in a reference.</div>
<h2>Attributes</h2>
<p class="manual_param_dt"><span class="parameter">name</span></p>
<p class="manual_param_dd">This attribute is a text string to use as the name for this header.

If name is <span class="smallblock">BLANK</span> or omitted, it is set as '_default'.</p>
<p class="manual_param_dt"><span class="parameter">content-left

content-center

content_right</span></p>
<p class="manual_param_dd">Defines the text to appear in the page header.

At least one 'content-' must be defined.</p>
<p class="manual_param_dd"><b>Values</b> 

<span class="parameter">content-left</span>: Text to appear at left margin

<span class="parameter">content-center</span>: Text to appear in centre of page

<span class="parameter">content-right</span>: Text to appear at right margin</p>
<p class="manual_param_dt"><span class="parameter">header-style

header-style-left

</span><span class="parameter">header-style-center

</span><span class="parameter">header-style-right</span></p>
<p class="manual_param_dd">This attribute can optionally set CSS style properties for the page header.

<span class="parameter">header-style</span> will set the same style for left, right and center content, whereas <span class="parameter">header-style-left</span>, <span class="parameter">header-style-center</span> and&nbsp; <span class="parameter">header-style-right</span> set the style for one part of the content only.</p>
<p class="manual_param_dd"><b>Values</b>

Valid CSS inline style declaration but only 5 properties can be set:

<span class="parameter">font-family

font-size

font-weight

font-style

color

</span>If style is not set, the default values for the document are used.</p>
<p class="manual_param_dt"><span class="parameter">line</span></p>
<p class="manual_param_dd">If set to "1" or any positive value, a line will be drawn below the header<b>.</b></p>
<h2>Changelog</h2>
<table class="table"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>2.0</td>
<td>The tag was added.</td>
</tr>
</tbody> </table>
<h2>Examples</h2>
<p>For examples and further information please see:</p>
<ul>
<li class="manual_boxlist"><a href="{{ "/headers-footers/headers-footers.html" | prepend: site.baseurl }}">Headers &amp; Footers</a></li>
<li class="manual_boxlist"><a href="{{ "/headers-footers/method-3.html" | prepend: site.baseurl }}">Headers &amp; Footers - Method 3</a></li>
</ul>
<h2>See Also</h2>
<ul>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/defheaderbyname.html" | prepend: site.baseurl }}">DefHeaderByName()</a></li>
<li class="manual_boxlist">&lt;<a href="{{ "/reference/html-control-tags/pagefooter.html" | prepend: site.baseurl }}">pagefooter</a>&gt;</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/setheaderbyname.html" | prepend: site.baseurl }}">SetHeaderByName()</a></li>
<li class="manual_boxlist">&lt;<a href="{{ "/reference/html-control-tags/setpageheader.html" | prepend: site.baseurl }}">setpageheader</a>&gt;</li>
</ul>
<p>&nbsp;</p>
