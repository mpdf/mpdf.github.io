---
layout: page
title: WriteCell()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/writecell.html
modification_time: 2015-08-05T12:01:15+00:00
---

`**WriteCell**(**float** w, **float** h, **string** text[, **mixed** border[, **integer** ln[, **string** align[, **integer** fill[, **mixed** link[, **float** returnx]]]]]])`

Writes a single line of text directly to the PDF document at the current position.

See the details for Cell() at FPDF. An additional parameter returnx has been added; if ln is set, the current position moves not to the left margin, but to the value set as returnx.

The methods Cell() and Text() from FPDF are still present, but should not be used directly as they will not cope with UTF-8 encoded text. Use the WriteCell() and WriteText() methods instead.

This method accepts UTF-8 encoded text, and will reverse RTL (right-to-left) text when appropriate.

Text containing HTML entities, as well as decimal and hex e.g. &amp; apos; &amp; #8812; or &amp; #x21a4; can be used, by setting:

$mpdf-&gt;text_input_as_HTML = true; (default = false)

This will convert all the above to their apropriate characters, otherwise the text will be output as it is.

For further information, you are referred to the originals at <a href="http://www.fpdf.org/" target="_blank">FPDF</a> &gt;&gt; Manual.

