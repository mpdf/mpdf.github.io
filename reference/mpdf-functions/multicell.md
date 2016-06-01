---
layout: page
title: MultiCell()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/multicell.html
modification_time: 2015-08-05T12:00:49+00:00
---

`**MultiCell**(**float** w, **float** h, **string** text[, **mixed** border[, **string** align[, **integer** fill[, **mixed** link[, **string** directionality[, **boolean** encoded]]]]]])`

Writes a block of text directly to the PDF document at the current position. Lines are wrapped at the margins.

See the details for MultiCell() at FPDF. Two additional parameters have been added:

<ul>
<li>`directionality`

Set to 'rtl' if using RTL language (right-to-left)

Default = 'ltr'</li>
<li>`encoded`

When set to false (default), UTF-8 encoded text will be appropriately converted to the chosen output file format. It should only be set to true, when the input text has already been converted internally within the program.

Default = false</li>
</ul>
