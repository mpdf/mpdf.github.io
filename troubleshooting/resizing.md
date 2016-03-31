---
layout: page
title: Resizing
parent_title: Troubleshooting
permalink: /troubleshooting/resizing.html
modification_time: 2015-08-05T12:00:35+00:00
---

<p>mPDF automatically resizes content in some circumstances. Using the default settings and CSS properties, the following are resized:</p>
<ul>
<li>tables will resize so that the tallest row (cell) will fit on a page [this is the only one that cannot be overridden]</li>
<li>tables will resize to fit the minimum width into the available width (minimum width of a table is when no words are broken) - override using CSS <code>&lt;table style="overflow: hidden|visible|wrap"&gt;</code></li>
<li>tables will resize to fit the table into the remaining available space left on a page, as long as it is within the limit set by configurable variable <code>$this-&gt;shrink_tables_to_fit</code> - this can be prevented by setting this value to "1" in <span class="filename">config.php</span> or <code>&lt;table autosize="1"&gt;</code></li>
<li>block elements (e.g. &lt;div&gt;) with <code>position:fixed</code> or <code>position:absolute</code> and <code>overflow:auto</code> (the default) will resize the contents if required to fit on the page - override by changing the value of <code>overflow</code></li>
<li>images will resize if necessary to fit onto a page</li>
</ul>
<p>Tables may also resize if you set the CSS property <code>page-break-inside: avoid</code></p>
