---
layout: page
title: margBuffer
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/margbuffer.html
modification_time: 2015-08-05T12:02:11+00:00
---

(mPDF &ge; 5.5)

Allows an (empty) end of block to extend beyond the bottom margin by this amount (mm). Avoids just the
border/background-color of the end of a block being moved on to next page.

Default: `2`


# Usage

```php
<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf(['margBuffer' => 7]);

```
