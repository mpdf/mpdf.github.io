---
layout: page
title: RoundedRect()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/roundedrect.html
modification_time: 2015-08-05T12:00:52+00:00
---

void **RoundedRect**(
float $x, float $y, 
float $w, float $h, 
float $radius
[, string $style])

Draws a rectangle with rounded corners directly to the PDF document at the specified position.

# Parameters

`$x`

: Abscissa of left edge of box - value in millimeters

`$y`

: Ordinate of top edge of box - value in millimeters

`$w`

: Width of the box - in millimeters

`$h`

: Width of the box - in millimeters

`$radius`

: Radius of the rounded corners

`$style`

: Box style

  **Values**: 
  * `'D'` or empty string - draw border (default); 
  * `'F'` - fill; 
  * `'DF'` or `'FD'` - draw and fill

  Default: `''` i.e. border, no fill
