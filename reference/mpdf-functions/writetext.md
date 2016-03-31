---
layout: page
title: WriteText()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/writetext.html
modification_time: 2015-08-05T12:01:17+00:00
---



<p><code><b>WriteText</b>(<b>float</b> w, <b>float</b> h, <b>string</b> text)</code></p>
<p>Writes a single line of text directly to the PDF document at a specified position.

See the details for Text() at FPDF.</p>
<p>&nbsp;</p>
<p class="manual_block">The methods Cell() and Text() from FPDF are still present, but should not be used directly as they will not cope with UTF-8 encoded text. Use the WriteCell() and WriteText() methods instead.</p>
<p class="manual_block">This method accepts UTF-8 encoded text, and will reverse RTL (right-to-left) text when appropriate.</p>
<p class="manual_block">Text containing HTML entities, as well as decimal and hex e.g. &amp; apos; &amp; #8812; or &amp; #x21a4; can be used, by setting:

$mpdf-&gt;text_input_as_HTML = true; (default = false)

This will convert all the above to their apropriate characters, otherwise the text will be output as it is.</p>
<p class="manual_block">For further information, you are referred to the originals at <a href="http://www.fpdf.org/" target="_blank">FPDF</a> &gt;&gt; Manual.</p>
<p>&nbsp;</p>
