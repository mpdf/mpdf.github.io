---
layout: page
title: Double-sided documents
parent_title: Paging
permalink: /paging/double-sided-documents.html
modification_time: 2015-08-05T11:59:46+00:00
---

## Odd/Even pages and margins

mPDF can use alternating margins for <span class="smallblock">ODD</span> and <span class="smallblock">EVEN</span>
pages (e.g. for <span class="smallblock">DOUBLE-SIDED</span> printing). If
<a href="{{ "/reference/mpdf-variables/mirrormargins.html" | prepend: site.baseurl }}">mirrorMargins</a>
(`useOddEven` in mPDF < 4.0) is set to `true` or `1` before adding the first page,
the document will mirror the left and right margin values on <span class="smallblock">ODD</span> and
<span class="smallblock">EVEN</span> pages i.e. they become inner and outer margins. (this is automatically reversed
for <acronym title="Right-to-Left document, used for Hebrew and Arabic languages">RTL</acronym> languages).

NB Headers and footers use the <span class="smallblock">ODD</span> pages as default if this is not used.

The first page in a document will be <span class="smallblock">ODD</span> i.e. page number 1, and will appear as a
<span class="smallblock">RIGHT</span> page in a
<acronym title="Left-to-Right document, used for most langauges">LTR</acronym> document (or
<span class="smallblock">LEFT</span> page in a <acronym title="Right-to-Left document, used for Hebrew and
Arabic languages">RTL</acronym> document)

# Examples

```php
<?php

// Define a document with default left-margin=30 and right-margin=10
$mpdf = new \Mpdf\Mpdf([
	'margin_top' => 0,
	'margin_left' => 30,
	'margin_right' => 10,
	'mirrorMargins' => true
]);

$mpdf->WriteHTML('Hello World');

$mpdf->AddPage();

// Now the right-margin (inner margin on page 2) = 30

$mpdf->WriteHTML('Hello World');

$mpdf->Output();

```

