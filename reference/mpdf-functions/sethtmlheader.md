---
layout: page
title: SetHTMLHeader()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/sethtmlheader.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 1.2)</p>
<p>SetHTMLHeader – Sets an HTML page header</p>
<h2>Description</h2>

<div class="alert alert-info" role="alert">void <b>SetHTMLHeader</b> ( string <span class="parameter">$html</span> [, string <span class="parameter">$side</span> [, boolean <span class="parameter">$write</span> ]])</div>
<p>Set an HTML page header.</p>
<h2>Parameters</h2>
<p class="manual_param_dt"><span class="parameter">header</span></p>
<p class="manual_param_dd">This parameter specifies the content of the page header as a string of valid HTML code.

<span class="smallblock">DEFAULT</span>: <span class="smallblock">BLANK</span></p>
<p class="manual_param_dt"><span class="parameter">side</span></p>
<p class="manual_param_dd">Specify whether to set the header for <span class="smallblock">ODD</span> or <span class="smallblock">EVEN</span> pages in a <span class="smallblock">DOUBLE-SIDED</span> document.

<span class="smallblock">DEFAULT</span>: <span class="smallblock">BLANK</span></p>
<p class="manual_param_dd"><b>Values</b> (case-sensitive)

O - set the header for <span class="smallblock">ODD</span> pages

E - set the header for <span class="smallblock">EVEN</span> pages

<span class="smallblock">BLANK</span> - sets <span class="smallblock">ODD</span> page headers</p>
<p class="manual_param_dt"><span class="parameter">write</span></p>
<p class="manual_param_dd">If <span class="smallblock">TRUE</span> it forces the Header to be written immediately to the current page. Use if the header is being set after the new page has been added.

<span class="smallblock">DEFAULT</span>: <span class="smallblock">FALSE</span></p>

<div class="alert alert-info" role="alert"><b>Note:</b> Important Difference - <a href="/reference/mpdf-functions/setheader.html">SetHeader()</a> and <a href="/reference/mpdf-functions/setfooter.html">SetFooter()</a> called without specifying a <span class="parameter">side</span> sets both <span class="smallblock">ODD</span> &amp; <span class="smallblock">EVEN</span> headers/footers; <b>SetHTMLHeader()</b> and <a href="/reference/mpdf-functions/sethtmlfooter.html">SetHTMLFooter()</a> without a <span class="parameter">side</span> - sets <span class="smallblock">ODD</span> page header/footer only as default</div>
<h2>Changelog</h2>
<table class="bpmTopic"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>1.2</td>
<td>The function was added.</td>
</tr>
</tbody> </table>
<h2>Examples</h2>
<p>For examples and further information please see:</p>
<ul>
<li class="manual_boxlist"><a href="/headers-footers/headers-footers.html">Headers &amp; Footers</a></li>
<li class="manual_boxlist"><a href="/headers-footers/method-2.html">Headers &amp; Footers - Method 2</a></li>
</ul>
<h2>See Also</h2>
<ul>
<li class="manual_boxlist"><a href="/reference/mpdf-functions/sethtmlfooter.html">SetHTMLFooter()</a></li>
</ul>
<p>&nbsp;</p>
</div>
</div>

