---
layout: page
title: SetDefaultBodyCSS()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setdefaultbodycss.html
modification_time: 2015-08-05T12:00:57+00:00
---

(mPDF &ge; 4.2)

SetDefaultBodyCSS – Change default CSS properties at runtime

# Description

void **SetDefaultBodyCSS** ( string <span class="parameter">$property</span> , string <span class="parameter">$value</span> )

Change default CSS properties at runtime. This changes the default CSS stylesheet values for the BODY element.

# Parameters

<span class="parameter">$property</span>

: Specifies the CSS property to set. Any valid CSS property that mPDF supports for the BODY element e.g.

  `font-family`, `font-size`, `color`

  Case-insensitive

<span class="parameter">$value</span>

: Specifies the value for the given property.

# Examples

```php
<?php
$mpdf = new \Mpdf\Mpdf();

$mpdf->SetDefaultBodyCSS('color', '#880000');

$mpdf->WriteHTML('Hallo World should be in red');
$mpdf->Output();

```

