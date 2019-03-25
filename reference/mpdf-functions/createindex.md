---
layout: page
title: CreateIndex()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/createindex.html
modification_time: 2015-08-05T12:00:43+00:00
---

(mPDF &ge; 2.2)

CreateIndex — Generate an Index for the document

<div class="alert alert-danger" role="alert" markdown="1">
  **Note:** This function is removed in mPDF v6.0 and replaced by <a href="{{ "/reference/mpdf-functions/insertindex.html" | prepend: site.baseurl }}">InsertIndex()</a>
</div>

# Description

void **CreateIndex** (
 [ int <span class="parameter">$numberofcolumns</span>
[, float <span class="parameter">$fontsize</span>
[, float <span class="parameter">$linespacing</span>
[, float <span class="parameter">$offset</span>
[, int <span class="parameter">$usedivletters</span>
[, float <span class="parameter">$divlettersfontsize</span>
[, float <span class="parameter">$columngap</span>
[, string <span class="parameter">$font</span>
[, string <span class="parameter">$divletterfont</span>
[, boolean <span class="parameter">$uselinking</span>
]]]]]]]]])

Inserts an Index for the document based on index entries made
using &lt;<a href="{{ "/reference/html-control-tags/tocentry.html" | prepend: site.baseurl }}">indexentry</a>&gt;
or <a href="{{ "/reference/mpdf-functions/indexentry.html" | prepend: site.baseurl }}">IndexEntry()</a>.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** Prior to mPDF 2.2 the function `CreateReference()` was used. This function was replaced by `CreateIndex()` untill mPDF 6.0.
  Since mPDF 6.0 <a href="{{ "/reference/mpdf-functions/insertindex.html" | prepend: site.baseurl }}">InsertIndex()</a> is the preferred form.
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** <span class="parameter">$uselinking</span> was added in mPDF 3.0
</div>

## Parameters

<span class="parameter">$numberofcolumns</span>

: Set the number of (vertical) columns to use for the Index

  <span class="smallblock">BLANK</span> or omitted or `0` or `1` uses the whole page is used as one column.

  Default: `1`

<span class="parameter">$fontsize</span>

: Sets the font size for the Index in **points** (pt)

  <span class="smallblock">BLANK</span> or omitted or `0` uses the default font-size for the document.

<span class="parameter">$linespacing</span>

: Sets the line-height used for index entries. Usual values between `1.0` and `1.4`.

  <span class="smallblock">BLANK</span> or omitted or `0` uses the default value.

  Default: `1.2`  (changed from `1.0` in mPDF < 3.0)

<span class="parameter">$offset</span>

: Sets the text indent (in mm) for subsequent lines, if an index entry flows onto two or more lines.

  <span class="smallblock">BLANK</span> or omitted uses a default value of 3 mm.

<span class="parameter">$usedivletters</span>

: Defines whether to divide index entries starting with the same letter, using a (large) letter as a heading.

  Default: `1`

  **Values**

  * `1`: show dividing letters in the Index
  * `0`: do not show dividing letters in the Index

  <span class="smallblock">BLANK</span> or omitted uses a default value of `1`

<span class="parameter">$divlettersfontsize</span>

: Sets the font size for the dividing letters in **points** (pt)

  <span class="smallblock">BLANK</span> or omitted or `0` uses the 1.8 times the default font-size for the document.

<span class="parameter">$columngap</span>

: Sets the gap between columns (if set) in millimeters.

  <span class="smallblock">BLANK</span> or omitted uses the default value.

  Default: `5` (mm)

<span class="parameter">$font </span>

: Set the font-family for the Index.

  <span class="smallblock">BLANK</span> or omitted uses default font-family for the document.

<span class="parameter">$divletterfont </span>

: Set the font-family for the dividing letters in the Index.

  <span class="smallblock">BLANK</span> or omitted uses default font-family for the document.

<span class="parameter">$uselinking</span>

: Specify whether to add hyperlinks (internal links) to the entries in the document Index.

  * `true` or `1`: add links to Index
  * <span class="smallblock">BLANK</span> or omitted, `0` or `false`: do not add links to the Index
  * Default: `false`


# Changelog

<table class="table"> <thead>
<tr>
  <th>Version</th>
  <th>Description</th>
</tr>
</thead> <tbody>
<tr>
  <td>2.2</td>
  <td>Function was added as a synonym for CreateReference().</td>
</tr>
<tr>
  <td>3.0</td>
  <td><span class="parameter">$uselinking</span> parameter was added</td>
</tr>
<tr>
  <td>3.0</td>
  <td>Default value for <span class="parameter">$linespacing</span> changed to 1.2</td>
</tr>
</tbody> </table>

# Examples

Example #1

```php
<?php
$mpdf = new \Mpdf\Mpdf();

$mpdf->WriteHTML('
Beginning bit of document...
');

$mpdf->IndexEntry("Buffalo");
$mpdf->WriteHTML('
Your text which refers to a buffalo, which you would like to see in the Index
');

$mpdf->AddPage();
$mpdf->WriteHTML('<h2>Index</h2>',2);
$mpdf->CreateIndex(2, '', '', 3, 1, '', 5, 'serif','sans-serif');

$mpdf->Output();


```

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** There is no HTML equivalent of `CreateIndex()`
</div>

# See Also

* Replacement: <a href="{{ "/reference/mpdf-functions/insertindex.html" | prepend: site.baseurl }}">InsertIndex()</a> - Generate an Index for the document
* <a href="{{ "/reference/mpdf-functions/indexentry.html" | prepend: site.baseurl }}">IndexEntry()</a> - Add an Index entry in the document
* &lt;<a href="{{ "/reference/html-control-tags/tocentry.html" | prepend: site.baseurl }}">indexentry</a>&gt; - Mark an Index entry in the document
