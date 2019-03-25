---
layout: page
title: simpleTables
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/simpletables.html
modification_time: 2015-08-05T12:02:29+00:00
---

(mPDF &ge; 4.3)

simpleTables – Disables complex table borders etc. to improve performance

# Description

void **simpleTables**

Specify whether to disable complex table borders etc. to improve performance. The border for all table cells will be the
same (although separate values can be used for `-top`, `-left` etc.). A separate table border may still be specified (if
`border-collapse` is not used).

This may improve performance considerably for large tables, reducing memory use and increasing processing speed by
approximately 30%

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** Prior to mPDF 4.4 using simpleTables also disabled
  padding, background-images, background-color and rotated text. These were re-introduced with almost no loss of
  performance.
</div>

# Values

<span class="parameter">$simpleTables</span> = `true`\|`false`

**Values**

* `true`: disable complex table borders etc.
* `false`: allow full CSS support for tables

Default: `false`

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
  <td>4.3</td>
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

$mpdf->simpleTables = true;

$mpdf->WriteHTML($table);
$mpdf->Output();

```

