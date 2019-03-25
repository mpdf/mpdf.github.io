---
layout: page
title: SetDirectionality()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setdirectionality.html
modification_time: 2015-08-05T12:00:59+00:00
---

(mPDF &ge; 1.0)

SetDirectionality – Set the document RTL state

# Description

void **SetDirectionality** ( string <span class="parameter">$dir</span> )

Set the document RTL state. This defines the default alignment of tables, columns, text justification, page layout etc.
See <a href="{{ "/fonts-languages/arabic-rtl-text-v5-x.html" | prepend: site.baseurl }}">RTL &amp; Bidirectional Text</a>
for more details. If `SetDirectionality('rtl')` is set, *Text Bidirectionality* is automatically turned on.

# Parameters

<span class="parameter">$dir</span>

: Defines the directionality of the document

  BLANK or omitted (or any value other than `'rtl'` or `'RTL'`) sets the default of `'ltr'`

  **Values** (case-insensitive)

  * `'ltr'`
  * `'rtl'`

  Default: `'ltr'`

# Examples

```php
<?php
$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8']);

$mpdf->SetDirectionality('rtl');

$mpdf->WriteHTML('דג סקרן שט בים מאוכזב ולפתע מצא חברה');
$mpdf->Output();

```

