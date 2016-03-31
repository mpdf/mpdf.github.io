---
layout: page
title: Columns
parent_title: What Else Can I Do
permalink: /what-else-can-i-do/columns.html
modification_time: 2015-08-05T12:00:13+00:00
---

<p>Columns</p>
<p>Multiple columns can be used on a page. This can started and stopped anywhere in the document, by either:</p>
<p>$mPDF-&gt;SetColumns(nCols[, vAlign [, gap ]]); or

&lt;columns&nbsp; column-count="n" vAlign="justify" column-gap="n" /&gt;</p>
<p>nCols = Number of columns. Anything less than 2 sets columns off. (Required)

vAlign = Automatically adjusts height of columns to be equal if set to J or justify. Default Off. (Optional)

gap = gap in mm between columns. Default 5. (Optional)</p>
<p>&lt;columnbreak /&gt; &lt;column_break /&gt; or &lt;newcolumn /&gt; (synonymous) can be included to force a new column. (This will automatically disable any justification or readjustment of column heights.)</p>
<p>The maximum ratio to adjust column height when justifying is defined at the top of the mpdf.php file - too large a value can give ugly results:

var $max_colH_correction = 1.15; (default value)</p>
<p>You can keep columns as they are i.e. 1st column will finish page then start on second, by setting</p>

{% highlight php %}
<?php

$mpdf->KeepColumns = true;
{% endhighlight %}

<p><b>Limitations</b></p>
<p>Columns are incompatible with (and automatically disable): justification if a table is included, table rotation, collapsible margins for blocks e.g. top and bottom margins for a DIV will not collapse (default) at the top/bottom of a column. Support for block-level borders (DIV, P etc) was added in mPDF 3.0</p>

<div class="alert alert-info" role="alert"><strong>Note:</strong> Block element borders (P,DIV etc) in columns may appear as disjointed lines. This is because they are written to the document line by line to allow repositioning when the columns are adjusted. The borders should appear correctly when "zoomed in" and when printing. Table cell borders may be similarly affected. Also note that the horizontal borders between table cells will only appear half width if a background color is used in the cell below, because the cell background may write over the bottom half of the border.</div>

<div class="alert alert-info" role="alert"><strong>Note:</strong> To create columns that span more than one page, use <a href="{{ "/what-else-can-i-do/floating-blocks.html" | prepend: site.baseurl }}">Floating blocks</a>.</div>

