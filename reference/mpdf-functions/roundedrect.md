---
layout: page
title: RoundedRect()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/roundedrect.html
modification_time: 2015-08-05T12:00:52+00:00
---

`**RoundedRect**(**float** x, **float** y, **float** w, **float** h, **float** radius[, **string** style])

` Draws a rectangle with rounded corners directly to the PDF document at the specified position.

<ul>
<li>`x`

Abscissa of left edge of box - value in millimeters</li>
<li>`y`

Ordinate of top edge of box - value in millimeters</li>
<li>`w`

Width of the box - in millimeters</li>
<li>`h`

Width of the box - in millimeters</li>
<li>`radius`

Radius of the rounded corners</li>
<li>`style`

Box style: D or empty string - draw border (default); F - fill; DF or FD - draw and fill

Default = '' i.e. border, no fill</li>
</ul>
