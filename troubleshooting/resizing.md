---
layout: page
title: Resizing
parent_title: Troubleshooting
permalink: /troubleshooting/resizing.html
modification_time: 2015-08-05T12:00:35+00:00
---

mPDF automatically resizes content in some circumstances. Using the default settings and CSS properties, the following are resized:

<ul>
<li>tables will resize so that the tallest row (cell) will fit on a page [this is the only one that cannot be overridden]</li>
<li>tables will resize to fit the minimum width into the available width (minimum width of a table is when no words are broken) - override using CSS `&lt;table style="overflow: hidden|visible|wrap"&gt;`</li>
<li>tables will resize to fit the table into the remaining available space left on a page, as long as it is within the limit set by configurable variable `$this->shrink_tables_to_fit` - this can be prevented by setting this value to "1" in <span class="filename">config.php</span> or `&lt;table autosize="1"&gt;`</li>
<li>block elements (e.g. &lt;div&gt;) with `position:fixed` or `position:absolute` and `overflow:auto` (the default) will resize the contents if required to fit on the page - override by changing the value of `overflow`</li>
<li>images will resize if necessary to fit onto a page</li>
</ul>

Tables may also resize if you set the CSS property `page-break-inside: avoid`

