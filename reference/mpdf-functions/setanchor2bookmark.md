---
layout: page
title: SetAnchor2Bookmark()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setanchor2bookmark.html
modification_time: 2015-08-05T12:00:54+00:00
---

(mPDF &ge; 1.0)

SetAnchor2Bookmark – Specifies whether PDF Bookmarks are created automatically from HTML anchors

# Description

void **SetAnchor2Bookmark** ( int <span class="parameter">$mode</span> )

Specifies whether PDF Book marks are created from HTML anchors (e.g. `<a name="Introduction" />`) .

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** This function/method was altered in mPDF 2.2 by capitalising the first letter of the name.
  As function/method names in PHP have hitherto been case-insensitive, this should not cause any problems, but it is
  recommended where possible to use the preferred spelling.
</div>

# Parameters

<span class="parameter">$mode</span>

: Set the variable with one of the values.

  **Values**

  * `0` - does not generate a bookmark
  * `1` - generate a bookmark using the text value of the `name="Text"` attribute

  Default: `0`

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
  <td>3.0</td>
  <td markdown="1">
  `$mode = 2` removed
  </td>
</tr>
</tbody>
</table>

# Examples

Example #1

```php
<?php
$mpdf = new \Mpdf\Mpdf();
$mpdf->SetAnchor2Bookmark(1);

$mpdf->WriteHTML('<h1><a name="Section 1" />The title</h1>');

$mpdf->Output();

```

This will create a Bookmark in the PDF document: "Section 1"

# Notes

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** Prior to mPDF 3.0 you could specify `$mode = 2` which added
  the page number to the bookmark e.g. "Introduction (p.32)". This was removed as it did not accurately handle
  pagebreaks etc.
</div>
