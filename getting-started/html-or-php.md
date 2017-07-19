---
layout: page
title: HTML or PHP?
parent_title: Getting Started
permalink: /getting-started/html-or-php.html
modification_time: 2017-03-13T15:06:17+01:00
---

Most of the functions of mPDF can be achieved two ways: 
 * using PHP commands, 
 * or using custom HTML tags. 

Use whichever suits your purpose better, and you can always combine a mixture of the two.

If you are new to mPDF, I would recommend using HTML/CSS for everything - you can test most things out in a browser
this way as you are writing it.

# Examples

Example #1 PHP Command

```php
<?php
$mpdf = new \Mpdf\Mpdf();

$mpdf->Bookmark('Start of the document');
$mpdf->WriteHTML('<div>Section 1 text</div>');

$mpdf->Output();

```

Example #2 Custom HTML Tag

```php
<?php
$html = '<bookmark content="Start of the Document" /><div>Section 1 text</div>';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output();

```

# Invalid HTML?

If you want to hide mPDF custom tags from a browser, enclose any mPDF code within:

```php

<!--mpdf  ..  anything you want to write ...  mpdf-->
<div>Your HTML text</div>

```

mPDF will strip away the `<!--mpdf` tag and any following spaces, and the `$mpdf-->` tag and any preceeding spaces,
and process all enclosed code e.g.

```html

<!--mpdf <htmlheader id="header1"><h2>Section 2</h2></htmlheader> mpdf-->

```

# See Also

* <a href="{{ "/what-else-can-i-do/capture-html-output.html" | prepend: site.baseurl }}">Capturing HTML</a>

