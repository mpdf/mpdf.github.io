---
layout: page
title: columns
parent_title: HTML control tags
permalink: /reference/html-control-tags/columns.html
modification_time: 2015-08-05T12:01:21+00:00
---

(mPDF &ge; 1.0)

columns – Control use of Columns on the page

# Description

&lt;**columns**  <span class="parameter">$column-count</span>
[ <span class="parameter">$vAlign</span> ]
[ <span class="parameter">$column-gap</span> ]  /&gt;

Define, start or stop Columns in the document.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** The maximum ratio to adjust column height when justifying is set by
  <a href="{{ "/reference/mpdf-variables/max-colh-correction.html" | prepend: site.baseurl }}">$max_colH_correction</a> -
  too large a value can give ugly results
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** If you are setting HTMLHeaders or HTMLFooters, this will cancel any columns you have set;
  you need to call `SetColumns()` or use `<columns>` after commands like
  <a href="{{ "/reference/mpdf-functions/sethtmlheader.html" | prepend: site.baseurl }}">SetHTMLHeader()</a> etc.
</div>

# Parameters

<span class="parameter">$column-count</span>

: Set the number of (vertical) columns to use on a page

  <span class="smallblock">BLANK</span> or omitted or `'0'` or `'1'` turns Columns OFF i.e. the whole page is used as one column.

  Default: `'1'`

<span class="parameter">$vAlign</span>

: Automatically adjusts height of columns to be equal if set to `'J'` or `'justify'`.

  <span class="smallblock">BLANK</span> or omitted turns vertical-alignment OFF

  **Values** (case-insensitive)

  `'J'` or `'justify'`

  Default: `""`

<span class="parameter">$column-gap</span>

: Set the gap between columns in millimeters

  <span class="smallblock">BLANK</span> or omitted uses default value.

  Default: `"5"` (mm)

# Examples

Example #1

```php
<?php
$mpdf = new \Mpdf\Mpdf();

$mpdf->WriteHTML('<columns column-count="3" vAlign="J" column-gap="7" />');
$mpdf->WriteHTML('Some text...');

$mpdf->WriteHTML('<columnbreak />');

$mpdf->WriteHTML('Next column...');

$mpdf->Output();

```

# See Also

- <a href="{{ "/reference/mpdf-functions/addcolumn.html" | prepend: site.baseurl }}">AddColumn()</a> - Start a new Column
- &lt;<a href="{{ "/reference/html-control-tags/columnbreak.html" | prepend: site.baseurl }}">columnbreak</a>&gt; - Start a new Column
- <a href="{{ "/reference/mpdf-functions/setcolumns.html" | prepend: site.baseurl }}">SetColumns()</a> -
  Control the use of multiple columns on the page - PHP equivalent of `<columns>`
