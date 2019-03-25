---
layout: page
title: Table layout
parent_title: Tables
permalink: /tables/table-layout.html
modification_time: 2015-08-05T11:59:44+00:00
---

mPDF will atempt to layout tables using the same algorithm recommended by the HTML specifications
(see <a href="{{ "/tables/auto-layout-algorithm.html" | prepend: site.baseurl }}">Auto-layout algorithm</a>).
However, the constraints of fitting content to the page size means that the recommended algorithm has to be altered.

In general, mPDF places more priority on producing a pleasing, efficiently laid out table than it does on respecting
defined values e.g. `<table width="300px">` or `<td width="30%">`

If the result is not what you want, consider using some of the following to control the layout:

- change the maximum shrinkage factor allowed for an individual table e.g. `<table autosize="1.6">`
- prevent an individual table from resizing e.g. `<table autosize="1">`
- prevent all tables from resizing: `$mpdf->shrink_tables_to_fit = 1;`
- non-breaking spaces `&nbsp;`
- `<td nowrap="nowrap">`
- `<td style="white-space:nowrap">`
- `<td style="width: 33%">`
- `<td style="width: 5cm">`
- `<table style="page-break-inside:avoid">` to force the table onto one page.
- `<table style="overflow: visible|hidden|wrap">` to control wide tables or tables with specific widths specified

## Overriding the Auto- Layout

Other methods to override the default layout algorithm.

<span class="parameter">$keep_table_proportions </span>

If the table width is set greater than the page width allows, mPDF will by default ignore any defined sizes and attempt
to auto-layout the table to the page width. This will result in relative column widths etc. being lost.

If you wish to maintain the relative proportions of the table, set `$keep_table_proportions = true;` this forces the table to be resized, but keep relative proportions. NB It also
 forces respect of cell widths set by `%`

<span class="parameter">$ignore_table_percents</span>

Table and cell widths set as a percent value are respected when possible by mPDF - as long as the table layout meets the
other constraints. This can lead to an ugly or inefficiently laid out table for a printed document. Setting
`$ignore_table_percents = true;` will force mPDF to
ignore any table or cell widths set as percent values.

<span class="parameter">$ignore_table_width</span>

Table widths set as absolute length values are respected when possible by mPDF - as long as the table layout meets
the other constraints. This can lead to an ugly or inefficiently laid out table for a printed document. Setting
`$ignore_table_width = true;` will force mPDF to ignore any table widths set as absolute length values.

<span class="parameter">$tableMinSizePriority</span>

If there is a conflict between respecting `$page-break-inside:avoid` and respecting
the maximum value allowed for <span class="parameter">$autosize</span>, the configurable variable
<a href="{{ "/reference/mpdf-variables/tableminsizepriority.html" | prepend: site.baseurl }}">tableMinSizePriority</a>
will determine which factor takes priority. (mPDF v&ge;4.6)

