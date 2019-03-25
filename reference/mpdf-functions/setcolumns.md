---
layout: page
title: SetColumns()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setcolumns.html
modification_time: 2015-08-05T12:00:56+00:00
---

(mPDF &ge; 1.0)

SetColumns – Control use of Columns on the page

# Description

void **SetColumns** (
int <span class="parameter">$nCols</span>
[, string <span class="parameter">$vAlign</span>
[, float <span class="parameter">$gap</span>
]])

Define, start or stop Columns in the document.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** The maximum ratio to adjust column height when justifying is set by
  <a href="{{ "/reference/mpdf-variables/max-colh-correction.html" | prepend: site.baseurl }}">$max_colH_correction</a> - too
  large a value can give ugly results
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** If you are setting HTMLHeaders or HTMLFooters, this will cancel any columns you have set;
  you need to call `SetColumns()` after commands like
  <a href="{{ "/reference/mpdf-functions/sethtmlheader.html" | prepend: site.baseurl }}">SetHTMLHeader()</a> etc.
</div>

# Parameters

<span class="parameter">$nCols</span>

: Set the number of (vertical) columns to use on a page

  <span class="smallblock">BLANK</span> or omitted or `0` or `1` turns Columns OFF i.e. the whole page is used as one column.

  Default: `1`

<span class="parameter">$vAlign</span>

: Automatically adjusts height of columns to be equal if set to `'J'` or `'justify'`.

  <span class="smallblock">BLANK</span> or omitted turns vertical-alignment OFF

  **Values** (case-insensitive)

  * `''` (<span class="smallblock">BLANK</span>) or omitted: turns vertical alignment off
  * `'J'` or `'justify'`:  Automatically adjusts height of columns to be equal

  Default: `''`

<span class="parameter">$gap</span>

: Set the gap between columns in millimeters

  <span class="smallblock">BLANK</span> or omitted uses default value.

  Default: `5` (mm)

# Examples

Example #1

```php
<?php
$mpdf = new \Mpdf\Mpdf();

$mPDF->SetColumns(2, 'J', 3);

$mpdf->WriteHTML('Some text...');
$mpdf->AddColumn();
$mpdf->WriteHTML('Next column...');

$mpdf->Output();

```

# See Also

 * <a href="{{ "/reference/mpdf-functions/addcolumn.html" | prepend: site.baseurl }}">AddColumn()</a> - Start a new Column
 * &lt;<a href="{{ "/reference/html-control-tags/columnbreak.html" | prepend: site.baseurl }}">columnbreak</a>&gt; - Start a new Column
 * &lt;<a href="{{ "/reference/html-control-tags/columns.html" | prepend: site.baseurl }}">columns</a>&gt; - Control the use of multiple columns on the page - HTML equivalent of `SetColumns()`
