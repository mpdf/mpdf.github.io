---
layout: page
title: SetCompression()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setcompression.html
modification_time: 2015-08-05T12:00:56+00:00
---

(mPDF &ge; 1.0)

SetCompression – Specifies that mPDF should compress the data for the PDF file

# Description

void **SetCompression** ( boolean <span class="parameter">$flag</span> )

Specifies that mPDF should compress the data for the PDF file. This makes a smaller PDF file and is set by
default to `true` on initialising the mPDF class.

# Parameters

<span class="parameter">$flag</span>

: `true` or `false` to specify whether mPDF should compress the data for the PDF file.

  Default: `true`

# Examples

Example #1

```php
<?php
$mpdf = new \Mpdf\Mpdf();

$mpdf->SetCompression(false);

$mpdf->WriteHTML('
Hello World
');

$mpdf->Output('filename.pdf');

```

