---
layout: page
title: Default font and size
parent_title: Fonts & Languages
permalink: /fonts-languages/default-font.html
modification_time: 2015-08-05T11:59:36+00:00
---

A default font and font-size are required for mPDF to function. These are determined by:

Declared when instantiating the mPDF class (see Getting Started). These "provisional" default values will be active
if you are using functions to write directly to the PDF file e.g.

```php
<?php
$mpdf = new \Mpdf\Mpdf([
	'default_font_size' => 9,
	'default_font' => 'dejavusans'
]);

$mpdf->WriteCell(110, 5, 'Hello World');

```

If you are using `WriteHTML()` these "provisional" default values are overridden, and defaults are set as follows:

- If `'mode' = 'c'`  is set, the default font is set as `'helvetica'`, `'times'` or `'courier'`
- NB The default font-*size* is also set by the value in the default stylesheet `$default_CSS`

If the secondary default CSS stylesheet <span class="filename">mpdf.css</span> contains values to define the 
BODY tag, these values will override the above e.g.

```css
body { 
    font-family: serif; 
    font-size: 10pt; 
}
```

If a CSS stylesheet is used with `WriteHTML()` and contains values to define the BODY tag, these values will override the above.

In-line style used in the `<body>` tag will override the default values e.g.

```php

<body style="font-family: serif; font-size: 10pt;">

```

