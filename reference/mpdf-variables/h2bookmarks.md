---
layout: page
title: h2bookmarks
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/h2bookmarks.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 5.7)</p>
<h2>Description</h2>

<div class="alert alert-info" role="alert">boolean <b>h2bookmarks</b></div>
<p>When a valid array is set, mPDF will automatically generate PDF Bookmarks from all heading elements (H1 - H6) written to the document using <code>WriteHTML()</code>.<code>&nbsp;</code></p>
<p>Any number of levels may be specified, but the first level should be 0 and other levels should be consecutive.</p>
<h2>Values</h2>
<p class="manual_param_dt"><span class="parameter">h2bookmarks</span><span class="smallblock"> 

</span></p>
<p class="manual_param_dd"><b>Values</b>

An array should be specified mapping the headings to the required level of Bookmarks

e.g. array('H1'=&gt;0, 'H2'=&gt;1, 'H3'=&gt;2)

<span class="smallblock">DEFAULT:</span> array()</p>
</div>
</div>

