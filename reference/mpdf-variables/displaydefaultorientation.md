---
layout: page
title: displayDefaultOrientation
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/displaydefaultorientation.html
modification_time: 2015-08-05T12:01:54+00:00
---


Default: `false`

If default page orientation is `P`(`portrait`), any `L`(`landscape`) pages in the document are displayed in Adobe Reader 
rotated to appear in portrait. Reverse is true if default orientation is landscape.

# Examples

```php
<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf(['displayDefaultOrientation' => true]);

```


