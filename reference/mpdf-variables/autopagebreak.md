---
layout: page
title: autoPageBreak
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/autopagebreak.html
modification_time: 2015-08-05T12:01:41+00:00
---

(mPDF &ge; 3.1)

autoPageBreak – Specify whether to allow automatic page breaks

# Description

void **autoPageBreak**

Specify whether to allow automatic page breaks. By default, mPDF creates page breaks when required in the document.
Setting the value to `false` allows an oversized object (image etc.) to overwrite the footer and/or the bottom margin of
the page.

# Values

<span class="parameter">autoPageBreak</span> => `true`\|`false`

**Values**

* `true`: enables automatic page breaks
* `false`: disable automatic page breaks

Default: `true`

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
  <td>3.1</td>
  <td>Variable was added.</td>
</tr>
</tbody>
</table>

# Examples

```php
<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf(['autoPageBreak' => false]);

$html = '<img src="largeimage.jpg" height="290mm" /> ';

$mpdf->autoPageBreak = false;

$mpdf->AddPage();

$mpdf->WriteHTML($html);
$mpdf->Output();

```



<div class="alert alert-info" role="alert" markdown="1">
  **Note:** This variable existed in the script before v3.1
  but did not allow paging to be turned off. The variable was altered in mPDF 3.1 by making the first letter of
  the variable lowercase.
</div>

