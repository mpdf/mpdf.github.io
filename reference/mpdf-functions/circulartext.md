---
layout: page
title: CircularText()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/circulartext.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>mPDF &gt;= 5.4</p>
<p>function CircularText($x, $y, $r, $text, $align='top|bottom', fontfamily='', fontsize=0, fontstyle='', $kerning=120, $fontwidth=100, $divider='') {</p>
<p>x: abscissa of center

y: ordinate of center

r: radius of circle

text: text to be printed

align: text alignment: top or bottom. Default value: top</p>
<p>

divider: optional character string to divide top and bottom text

kerning: (fixed) spacing between letters in percentage. Default value: 120. Zero is not allowed.

fontwidth: width of letters in percentage. Default value: 100. Zero is not allowed

- uses automatic Kerning between letters if useKerning == true</p>
<p>See &lt;<a href="{{ "/reference/html-control-tags/textcircle.html" | prepend: site.baseurl }}">textcircle</a>&gt; for more details</p>
</div>
</div>

