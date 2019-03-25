---
layout: page
title: falseBoldWeight
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/falseboldweight.html
modification_time: 2015-08-05T12:01:56+00:00
---

(mPDF &ge; 4.2)

falseBoldWeight – Specify weight used for bold text when using an artificial (outline) bold

# Description

void **falseBoldWeight**

Specify weight used for bold text when using an artificial (outline) bold. If bold text is set by `<b>` and the
current font does not have a font file for the bold variant, an artificial bold is created by stroking the outline of
the characters. This variable sets the width of the line and thus the "weight" of the bold text. Values between `0` and
`10` are recommended.

# Values

<span class="parameter">$falseBoldWeight</span><span class="smallblock"></span>

**Values**

* <span class="smallblock">INTEGER </span>: set weight of bold text

Default: `5`

# Changelog

<table class="table">
<thead>
<tr>
  <th>Version</th>
  <th>Description</th>
</tr>
</thead>
<tbody>
<tr>
  <td>4.2</td>
  <td>Variable was added.</td>
</tr>
</tbody>
</table>

# Examples

```php
<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();

$mpdf->falseBoldWeight = 8;

$mpdf->WriteHTML('<p style="font-family: mysimplefont"><b>Hello World</b><p>');
$mpdf->Output();

```

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** False bold text has the same character widths as the normal text.
</div>

