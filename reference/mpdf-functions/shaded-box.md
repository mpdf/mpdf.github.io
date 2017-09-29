---
layout: page
title: Shaded_box()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/shaded-box.html
modification_time: 2015-08-05T12:01:11+00:00
---

Shaded_box – Writes line of text surrounded by box

# Description

void **Shaded_box**(
string <span class="parameter">$title</span>
[, string <span class="parameter">$font</span>
[, float <span class="parameter">$fontstyle</span>
[, float <span class="parameter">$fontsize</span>
[, float <span class="parameter">$width</span>
[, string <span class="parameter">$style</span>
[, float <span class="parameter">$radius</span>
[, string <span class="parameter">$backgroundcolor</span>
[, string <span class="parameter">$color</span>
[, float <span class="parameter">$padding</span>
]]]]]]]]])

Writes a single line of text surrounded by a box directly to the PDF document at the current position. The box can
have rounded corners, and be filled with background-colour.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** This function/method was altered in mPDF 2.2 by capitalising the first letter of the name.
  As function/method names in PHP have hitherto been case-insensitive, this should not cause any problems, but it
  is recommended where possible to use the preferred spelling.
</div>

# Parameters

`$title`

: UTF-8 encoded text (single line)

  This method accepts UTF-8 encoded text, and will reverse RTL (right-to-left) text when appropriate.
  
  Text containing HTML entities, as well as decimal and hex e.g. `&apos;` `&#8812;` or `&#x21a4;` can be used, by setting:   
  `$mpdf->text_input_as_HTML = true;` (default: `false`)   
  This will convert all the above to their apropriate characters, otherwise the text will be output as it is.

`$font`

: Font family

  Default: `''` i.e. default document font

`$fontstyle`

: Font style as one of 
  * `'B'` (bold) 
  * `'I'` (italic) 
  * `'BI'` (bold-italic) 
  * or blank for normal

  Default: `'B'` i.e. bold

`$fontsize`

: Font size in points (pt)

  Default: `''` i.e. default document font size

`$width`

: Width of the box - any units acceptable in CSS can be used e.g. `pt`, `px`, `mm`, `%` (of page width)

  Default: `'70%'`

`$style`

: Box style: 
  * `'D'` or empty string - draw border (default); 
  * `'F'` - fill; 
  * `'DF'` or `'FD'` - draw and fill

   Default: `'DF'` i.e. border and fill

`$radius`

: Radius of the rounded corners

  Default: `2.5`

`$backgroundcolor`

: Fill colour for the box - as `'#rrggbb'`

  Default: `'#FFFFFF'`

`$color`

: Text colour - as `'#rrggbb'`

  Default: `'#000000'`

`$padding`

: Padding between text and box border, in millimeters

  Default: `2`




