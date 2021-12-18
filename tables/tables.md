---
layout: page
title: Tables
parent_title: Tables
permalink: /tables/tables.html
modification_time: 2015-08-05T11:59:43+00:00
---

# Styles

For a full list of CSS styles supported by mPDF for tables/cells, see
<a href="{{ "/css-stylesheets/supported-css.html" | prepend: site.baseurl }}">Valid CSS</a>. Note the custom attribute
"topntail" which I have added to add a horizontal border at the top and bottom of the table, and under the THEAD
row if present.

Block-level tags (DIV, P etc) are ignored inside tables, including any CSS styles - inline CSS or stylesheet
classes, id etc. To set text characteristics within a table/cell, either define the CSS for the table/cell, or
use in-line tags e.g. `<span style="...">`

Both models of border-collapse are supported (CSS border-collapse:collapse or separate), as well as cellSpacing and
cellPadding.

# Rotate

Tables can be rotated by 90 degrees clockwise or anticlockwise using either:

`<table rotate="90|-90">` or `<table style="rotate:90|-90;">`

(`90` is clockwise, and `-90` is counterclockwise)

Table rotation is disabled when columns are used.

# Autosize

If a table's minimum width is too wide for the page/div/column, it will automatically reduce the font size in order to
fit. The minimum width is calculated by the sum of column widths required to fit the longest single word in the column.

This function is ON by default, set by
<a href="{{ "/configuration/configuration-v7-x.html" | prepend: site.baseurl }}">configuration variable</a>
`'shrink_tables_to_fit' => 1.4`

The font size will only be reduced to a minimum size to avoid ridiculous results. The value of
`shrink_tables_to_fit` is the maximum factor by which the font-size will be reduced.

If it is turned off e.g. `$mpdf->shrink_tables_to_fit = 0;` it is overridden by a specific declaration for a table e.g.:

`<table autosize="2.4">` or

`<table style="autosize:2.4;">`

A value of 1 will prevent any (unnecessary) resizing.

# page-break-inside:avoid

If a table has the property `page-break-inside:avoid` and will not fit on the page, mPDF tries to shrink it to fit -
up to a maximum "shrink-factor" set by the variable `$mpdf->shrink_tables_to_fit` - default is `1.4` (i.e. about 70%
original size). If this still won't fit, it moves it to the next page.

A shrunk table may not be what you want. You can prevent this resizing either by setting the maximum shrink-factor
for a particular table e.g.  `<table autosize="1">` or by setting the variable for the whole document i.e.
`$mpdf->shrink_tables_to_fit = 1;`

<div class="alert alert-warning" role="alert" markdown="1">
  **Note**: mPDF will always resize tables if it is the only way to fit a row or whole table onto a full page.
</div>

# Repeating Table Header row on new page

If a table is split onto more than one page, the first row of the table will be repeated at the top of the new page if `<thead>` or `<tfoot>` is defined

# Error reporting

NB two <a href="{{ "/configuration/configuration-v7-x.html" | prepend: site.baseurl }}">configuration variables</a> values
are defined which control error reporting for tables:

* `'table_error_report' => false`
  Die and report error if table is too wide to contain whole words (even after autosizing)
* `'table_error_report_param' => ''`
  Parameter which can be passed to show in error report i.e. chapter number being processed.

