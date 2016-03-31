---
layout: page
title: Shaded_box()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/shaded-box.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>&nbsp;</p>

<div class="alert alert-info" role="alert"><b>Note: </b>This function/method was altered in mPDF 2.2 by capitalising the first letter of the name. As function/method names in PHP have hitherto been case-insensitive, this should not cause any problems, but it is recommended where possible to use the preferred spelling.</div>
<p><code><b>Shaded_box</b>(<b>string</b> title[, <b>string</b> font[, <b>float</b> fontstyle[, <b>float</b> fontsize[, <b>float</b> width[, <b>string</b> style[, <b>float</b> radius[, <b>string</b> backgroundcolor[, <b>string</b> color[, <b>float</b> padding]]]]]]]]])

</code> Writes a single line of text surrounded by a box directly to the PDF document at the current position. The box can have rounded corners, and be filled with background-colour.</p>
<ul>
<li><code>title</code>

UTF-8 encoded text (single line)</li>
<li><code>font</code>

Font family

Default = '' i.e. default document font</li>
<li><code>fontstyle</code>

Font style as one of B (bold), I (italic), BI (bold-italic) or blank for normal

Default = 'B' i.e. bold</li>
<li><code>fontsize</code>

Font size in points (pt)

Default = '' i.e. default document font size</li>
<li><code>width</code>

Width of the box - any units acceptable in CSS can be used e.g. pt, px, mm, % (of page width)

Default = '70%'</li>
<li><code>style</code>

Box style: D or empty string - draw border (default); F - fill; DF or FD - draw and fill

Default = 'DF' i.e. border and fill</li>
<li><code>radius</code>

Radius of the rounded corners

Default = 2.5</li>
<li><code>backgroundcolor</code>

Fill colour for the box - as #rrggbb

Default = '#FFFFFF'</li>
<li><code>color</code>

Text colour - as #rrggbb

Default = '#000000'</li>
<li><code>padding</code>

Padding between text and box border, in millimeters

Default = 2</li>
</ul>
<p>&nbsp;</p>
<p>&nbsp;</p>

<div class="alert alert-info" role="alert">This method accepts UTF-8 encoded text, and will reverse RTL (right-to-left) text when appropriate.</div>

<div class="alert alert-info" role="alert">Text containing HTML entities, as well as decimal and hex e.g. &amp; apos; &amp; #8812; or &amp; #x21a4; can be used, by setting:

$mpdf-&gt;text_input_as_HTML = true; (default = false)

This will convert all the above to their apropriate characters, otherwise the text will be output as it is.</div>
<p>&nbsp;</p>
</div>
</div>

