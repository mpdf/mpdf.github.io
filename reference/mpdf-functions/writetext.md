---
layout: page
title: WriteText()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/writetext.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p><code><b>WriteText</b>(<b>float</b> w, <b>float</b> h, <b>string</b> text)</code></p>
<p>Writes a single line of text directly to the PDF document at a specified position.

See the details for Text() at FPDF.</p>
<p>&nbsp;</p>

<div class="alert alert-info" role="alert">The methods Cell() and Text() from FPDF are still present, but should not be used directly as they will not cope with UTF-8 encoded text. Use the WriteCell() and WriteText() methods instead.</div>

<div class="alert alert-info" role="alert">This method accepts UTF-8 encoded text, and will reverse RTL (right-to-left) text when appropriate.</div>

<div class="alert alert-info" role="alert">Text containing HTML entities, as well as decimal and hex e.g. &amp; apos; &amp; #8812; or &amp; #x21a4; can be used, by setting:

$mpdf-&gt;text_input_as_HTML = true; (default = false)

This will convert all the above to their apropriate characters, otherwise the text will be output as it is.</div>

<div class="alert alert-info" role="alert">For further information, you are referred to the originals at <a href="http://www.fpdf.org/" target="_blank">FPDF</a> &gt;&gt; Manual.</div>
<p>&nbsp;</p>
</div>
</div>

