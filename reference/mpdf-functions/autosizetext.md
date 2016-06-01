---
layout: page
title: AutosizeText()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/autosizetext.html
modification_time: 2015-08-05T12:00:42+00:00
---

`**AutosizeText**(**string** text, **float** width, **string** font, **string** style[, **float** fontsize])

` Writes a single line of text directly to the PDF document at the current position.

Font size will be automatically reduced to fit width (but is not increased).

NB Does not reverse RTL text

<ul>
<li>`text`

UTF-8 encoded text to write. Single line only.</li>
<li>`width`

Width of text in millimeters. The font size will be reduced if required to fit this size.</li>
<li>`font`

Font family to use</li>
<li>`style

`Font style used [blank for normal]|i|b|bi</li>
<li>`fontsize`

Maximm font size in points (pt)

Default = 72</li>
</ul>
