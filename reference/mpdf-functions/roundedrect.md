---
layout: page
title: RoundedRect()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/roundedrect.html
modification_time: 2015-08-05T12:00:52+00:00
---

<code><b>RoundedRect</b>(<b>float</b> x, <b>float</b> y, <b>float</b> w, <b>float</b> h, <b>float</b> radius[, <b>string</b> style])

</code> Draws a rectangle with rounded corners directly to the PDF document at the specified position.

<ul>
<li><code>x</code>

Abscissa of left edge of box - value in millimeters</li>
<li><code>y</code>

Ordinate of top edge of box - value in millimeters</li>
<li><code>w</code>

Width of the box - in millimeters</li>
<li><code>h</code>

Width of the box - in millimeters</li>
<li><code>radius</code>

Radius of the rounded corners</li>
<li><code>style</code>

Box style: D or empty string - draw border (default); F - fill; DF or FD - draw and fill

Default = '' i.e. border, no fill</li>
</ul>
