---
layout: page
title: AutosizeText()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/autosizetext.html
modification_time: 2015-08-05T12:00:42+00:00
---



<p><code><b>AutosizeText</b>(<b>string</b> text, <b>float</b> width, <b>string</b> font, <b>string</b> style[, <b>float</b> fontsize])

</code> Writes a single line of text directly to the PDF document at the current position.

Font size will be automatically reduced to fit width (but is not increased).

NB Does not reverse RTL text</p>
<ul>
<li><code>text</code>

UTF-8 encoded text to write. Single line only.</li>
<li><code>width</code>

Width of text in millimeters. The font size will be reduced if required to fit this size.</li>
<li><code>font</code>

Font family to use</li>
<li><code>style

</code>Font style used [blank for normal]|i|b|bi</li>
<li><code>fontsize</code>

Maximm font size in points (pt)

Default = 72</li>
</ul>
