---
layout: page
title: Shaded_box()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/shaded-box.html
modification_time: 2015-08-05T12:01:11+00:00
---

<div class="alert alert-info" role="alert" markdown="1">
	**Note:** This function/method was altered in mPDF 2.2 by capitalising the first letter of the name.
	As function/method names in PHP have hitherto been case-insensitive, this should not cause any problems, but it
	is recommended where possible to use the preferred spelling.
</div>

`**Shaded_box**(**string** title
[, **string** font
[, **float** fontstyle
[, **float** fontsize
[, **float** width
[, **string** style
[, **float** radius
[, **string** backgroundcolor
[, **string** color
[, **float** padding
]]]]]]]]])

` Writes a single line of text surrounded by a box directly to the PDF document at the current position. The box can
have rounded corners, and be filled with background-colour.

<ul>
<li>`title`

UTF-8 encoded text (single line)</li>
<li>`font`

Font family

Default = '' i.e. default document font</li>
<li>`fontstyle`

Font style as one of B (bold), I (italic), BI (bold-italic) or blank for normal

Default = 'B' i.e. bold</li>
<li>`fontsize`

Font size in points (pt)

Default = '' i.e. default document font size</li>
<li>`width`

Width of the box - any units acceptable in CSS can be used e.g. pt, px, mm, % (of page width)

Default = '70%'</li>
<li>`style`

Box style: D or empty string - draw border (default); F - fill; DF or FD - draw and fill

Default = 'DF' i.e. border and fill</li>
<li>`radius`

Radius of the rounded corners

Default = 2.5</li>
<li>`backgroundcolor`

Fill colour for the box - as #rrggbb

Default = '#FFFFFF'</li>
<li>`color`

Text colour - as #rrggbb

Default = '#000000'</li>
<li>`padding`

Padding between text and box border, in millimeters

Default = 2</li>
</ul>

This method accepts UTF-8 encoded text, and will reverse RTL (right-to-left) text when appropriate.

Text containing HTML entities, as well as decimal and hex e.g. &amp; apos; &amp; #8812; or &amp; #x21a4; can be used, by setting:

$mpdf-&gt;text_input_as_HTML = true; (default = false)

This will convert all the above to their apropriate characters, otherwise the text will be output as it is.

