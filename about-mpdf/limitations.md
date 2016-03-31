---
layout: page
title: Limitations
parent_title: About mPDF
permalink: /about-mpdf/limitations.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>The script is (a lot) slower than the original FPDF and html2fpdf. Some of this is due to the inclusion of unicode font files (when used), but there is also an increase in processing time.</p>
<h3>Tables</h3>
<p>Block elements (e.g. DIV or P) are not supported inside tables. The content is displayed, but any CSS properties which apply to block elements are ignored (e.g. borders, padding, margins etc).</p>
<h3>Block and in-line elements</h3>
<p>All HTML elements are hard-coded to be treated as block or in-line elements (e.g. equivalent to CSS display:block or display:in-line). This cannot be changed using CSS. See <a href="/html-support/html-tags.html">HTML tags</a>.</p>
<h3>Special features</h3>
<p>Several of the "special" features of mPDF are incompatible with each other e.g columns, fixed-position block elements, page-break-avoid:inside, Keep-with-table and rotated tables.</p>
<h3>Other</h3>
<p>Millimeters are the only accepted dimensions for defining page size and margins within mPDF (CSS stylesheets accept all usual units).</p>
<p>Blocks which are defined as position:absolute, fixed or float have only limited support (introduced v4.0).</p>
<h2>See Also</h2>
<ul>
<li><a href="/troubleshooting/known-issues.html">Known issues</a></li>
</ul>
</div>
</div>

