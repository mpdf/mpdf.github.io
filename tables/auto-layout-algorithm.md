---
layout: page
title: Auto-layout algorithm
parent_title: Tables
permalink: /tables/auto-layout-algorithm.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<h2>Algorithm used for autosizing tables</h2>
<h3>For non-rotated tables</h3>
<ol>
<li>If the minimum width of the table is greater than the page width, the table is resized to fit the minimum width = page width.*

(Minimum width is calculated when each cell accommodates longest word (allowing for nowrap / &amp;nbsp;))

This disregards the value of autosize.

</li>
<li>If the height of the highest row is greater than a full page height, the table is resized to fit the highest row &lt; page height.

(This is an approximation, as it scales the table size by a factor of less than sqrt(maxrow / pageheight) ).

This disregards the value of autosize.

</li>
<li>The table is now printed - allowing it to break across pages - unless page-break-inside: avoid is set.

</li>
<li>If page-break-inside: avoid is set:
<ul>
<li>if table height is greater than a full page, the size is reduced to fit the table on a full page, and printed.

&nbsp;&nbsp;&nbsp; (This is an approximation, as it scales the table size by a factor of less than sqrt(tableheight / pageheight) ).

&nbsp;&nbsp;&nbsp; This disregards the value of autosize.</li>
<li>if table height is greater than the remaining space on the page (but less than a full page):
<ul>
<li>if the table size can be reduced to fit in the remaining space, AND respect the autosize value (i.e. maximum scaling factor), it is scaled and printed in the remaining page space;</li>
<li>if not, a new page is started and the table is printed using the scaling factor set by 1 or 2.</li>
</ul>
</li>
</ul>
</li>
</ol>
<p>If there is a conflict between respecting <span class="parameter">page-break-inside:avoid</span> and respecting the maximum value allowed for <span class="parameter">autosize</span>, the configurable variable <a href="{{ "/reference/mpdf-variables/tableminsizepriority.html" | prepend: site.baseurl }}">tableMinSizePriority</a> will determine which factor takes priority. (mPDF v&gt;=4.6)</p>
<h3>For rotated tables

</h3>
<ol>
<li>If the whole table fits into the remaining height left on the page, print as it is.

</li>
<li>If the minimum width of the table is greater than the page height remaining, the table is resized to fit the minimum width = page height remaining, as long as the whole table fits, and the scaling factor is within the value of autosize.

(Minimum width is calculated when each cell accommodates longest word - allowing for nowrap,&nbsp; &amp;nbsp; etc.)

</li>
<li>Else a new page is started, and the algorithm above followed (obviously containing size width becomes height etc.)</li>
</ol>
<p>* From mPDF 4.3, this can be overridden using CSS property overflow:</p>
<p>&lt;table style="overflow: auto | hidden | visible | wrap"&gt;</p>
<p>auto is the default, described above.</p>
<p>&nbsp;</p>
</div>
</div>

