---
layout: page
title: htmlpageheader
parent_title: HTML control tags
permalink: /reference/html-control-tags/htmlpageheader.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 2.0)</p>
<p>htmlpageheader – Define an HTML page header with a given name</p>
<h2>Description</h2>

<div class="alert alert-info" role="alert">&lt;<b>htmlpageheader</b>&nbsp; <span class="parameter">name</span>&nbsp; &gt; <span class="parameter">html</span> &lt;/htmlpageheader&gt;</div>
<p>Define an HTML page header with a given name. Named headers can be referenced and set later in the document e.g. &lt;<a href="/reference/html-control-tags/setpageheader.html">sethtmlpageheader</a>&gt;</p>

<div class="alert alert-info" role="alert"><b>Note:</b> Do not name any header or footer starting with html_&nbsp;&nbsp; This prefix is reserved to identify an <span class="smallblock">HTML</span> header/footer when passing its name in a reference.</div>

<div class="alert alert-info" role="alert"><b>Note:</b> Remember that, unlike most mPDF custom tags which are self-closing with /&gt;, htmlpageheader and htmlpagefooter require end tags. If you wish to make the HTML code compatible with browsers, see <a href="/html-support/custom-html-tags.html">Custom tags</a></div>
<h2>Attributes</h2>
<p class="manual_param_dt"><span class="parameter">name</span></p>
<p class="manual_param_dd">This attribute is a text string to use as the name for this header.

If name is <span class="smallblock">BLANK</span> or omitted, it is set as '_default'.</p>
<h2>Content</h2>
<p class="manual_param_dt"><span class="parameter">html</span></p>
<p class="manual_param_dd">Any valid HTML code can be enclosed between the tags, and will be parsed by mPDF as for any other content.</p>
<h2>Changelog</h2>
<table class="bpmTopic"> <thead>
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
<li class="manual_boxlist"><a href="/headers-footers/headers-footers.html">Headers &amp; Footers</a></li>
<li class="manual_boxlist"><a href="/headers-footers/method-4.html">Headers &amp; Footers - Method 4</a></li>
</ul>
<h2>See Also</h2>
<ul>
<li class="manual_boxlist"> <a href="/reference/mpdf-functions/defhtmlfooterbyname.html">DefHTMLHeaderByName()</a></li>
<li class="manual_boxlist"> &lt;<a href="/reference/html-control-tags/htmlpagefooter.html">htmlpagefooter</a>&gt; </li>
<li class="manual_boxlist"> <a href="/reference/mpdf-functions/sethtmlheaderbyname.html">SetHTMLHeaderByName()</a> </li>
<li class="manual_boxlist">&lt;<a href="/reference/html-control-tags/sethtmlpageheader.html">sethtmlpageheader</a>&gt; </li>
<li class="manual_boxlist"> <a href="/paging/using-page.html">@page</a> </li>
</ul>
</div>
</div>

