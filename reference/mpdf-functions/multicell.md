---
layout: page
title: MultiCell()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/multicell.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p><code><b>MultiCell</b>(<b>float</b> w, <b>float</b> h, <b>string</b> text[, <b>mixed</b> border[, <b>string</b> align[, <b>integer</b> fill[, <b>mixed</b> link[, <b>string</b> directionality[, <b>boolean</b> encoded]]]]]])</code></p>
<p>Writes a block of text directly to the PDF document at the current position. Lines are wrapped at the margins.

See the details for MultiCell() at FPDF. Two additional parameters have been added:</p>
<ul>
<li><code>directionality</code>

Set to 'rtl' if using RTL language (right-to-left)

Default = 'ltr'</li>
<li><code>encoded</code>

When set to false (default), UTF-8 encoded text will be appropriately converted to the chosen output file format. It should only be set to true, when the input text has already been converted internally within the program.

Default = false</li>
</ul>
</div>
</div>

