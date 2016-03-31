---
layout: page
title: setpagefooter
parent_title: HTML control tags
permalink: /reference/html-control-tags/setpagefooter.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 2.0)</p>
<p>setpagefooter – Set a page footer by a given name</p>
<h2>Description</h2>

<div class="alert alert-info" role="alert">&lt; <b>setpagefooter</b> [ <span class="parameter">name</span> ] [ <span class="parameter">page</span> ] [ <span class="parameter">value</span> ] /&gt;</div>
<p>Sets a page footer that has previously been defined by name.</p>

<div class="alert alert-info" role="alert"><b>Note: </b>This function/method was altered in mPDF 2.2 by capitalising the first letter of the name. As function/method names in PHP have hitherto been case-insensitive, this should not cause any problems, but it is recommended where possible to use the preferred spelling.</div>
<h2>Parameters</h2>
<p class="manual_param_dt"><span class="parameter">name</span></p>
<p class="manual_param_dd">This parameter specifies the name of a previously defined page footer. If a <span class="smallblock">BLANK</span> string or <span class="smallblock">NULL</span> is passed, mPDF will use the value '_default' if such a page footer exists.

The <span class="parameter">name</span> does not need to be defined if you are setting the value to -1 or 'off'</p>
<p class="manual_param_dt"><span class="parameter">page</span></p>
<p class="manual_param_dd">Specify whether to set the footer for <span class="smallblock">ODD</span> or <span class="smallblock">EVEN</span> pages in a <span class="smallblock">DOUBLE-SIDED</span> document.

<span class="smallblock">DEFAULT</span>: 'ODD'

Note: setting this value to <span class="smallblock">BLANK</span> will not clear the footer; set <span class="parameter">value</span> to -1 or off to cancel the header</p>
<p class="manual_param_dd"><b>Values</b> (case-insensitive)

O or ODD - set the footer for <span class="smallblock">ODD</span> pages in a <span class="smallblock">DOUBLE-SIDED</span> document, or for both <span class="smallblock">ODD</span> and <span class="smallblock">EVEN</span> in a <span class="smallblock">SINGLE-SIDED</span> document.

E or EVEN - set the footer for <span class="smallblock">EVEN</span> pages

ALL - sets the footer for both <span class="smallblock">ODD</span> and <span class="smallblock">EVEN</span> pages.

If the <span class="parameter">page</span> value is <span class="smallblock">BLANK</span> or omitted - sets the footer for <span class="smallblock">ODD</span> in a <span class="smallblock">DOUBLE-SIDED</span> document, or for both <span class="smallblock">ODD</span> and <span class="smallblock">EVEN</span> in a <span class="smallblock">SINGLE-SIDED</span> document.</p>
<p class="manual_param_dt"><span class="parameter">value</span></p>
<p class="manual_param_dd">Specify whether to start or stop showing the named footer from the current position in the document.

<span class="smallblock">

</span></p>
<p class="manual_param_dd"><b>Values</b> (case-insensitive)

1 or ON - start using this named footer

-1 or OFF - stop using a footer

<span class="smallblock">DEFAULT</span> -&nbsp; <span class="smallblock">BLANK</span> is ignored, making no changes to the current state</p>
<h2>Changelog</h2>
<table class="bpmTopic"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>2.0</td>
<td>The function was added.</td>
</tr>
</tbody> </table>
<h2>Examples</h2>
<p>For examples and further information please see:</p>
<ul>
<li class="manual_boxlist"><a href="/headers-footers/headers-footers.html">Headers &amp; Footers</a></li>
<li class="manual_boxlist"><a href="/headers-footers/method-4.html">Headers &amp; Footers - Method 3</a></li>
</ul>
<h2>See Also</h2>
<ul>
<li class="manual_boxlist"><a href="/reference/mpdf-functions/deffooterbyname.html">DefFooterByName()</a></li>
<li class="manual_boxlist">&lt;<a href="/reference/html-control-tags/pagefooter.html">pagefooter</a>&gt;</li>
<li class="manual_boxlist"><a href="/reference/mpdf-functions/setfooterbyname.html">SetFooterByName()</a></li>
<li class="manual_boxlist">&lt;<a href="/reference/html-control-tags/setpageheader.html">setpageheader</a>&gt;</li>
<li class="manual_boxlist"><a href="/paging/using-page.html">@page</a></li>
</ul>
<p>&nbsp;</p>
</div>
</div>

