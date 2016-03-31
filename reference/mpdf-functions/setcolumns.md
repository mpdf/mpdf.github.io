---
layout: page
title: SetColumns()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setcolumns.html
modification_time: 2015-08-05T12:00:56+00:00
---

(mPDF &gt;= 1.0)

SetColumns – Control use of Columns on the page

# Description

void <b>SetColumns</b> ( int <span class="parameter">$nCols</span> [, string <span class="parameter">$vAlign</span> [, float <span class="parameter">$gap</span> ]])

Define, start or stop Columns in the document.

<div class="alert alert-info" role="alert"><strong>Note:</strong> The maximum ratio to adjust column height when justifying is set by <a href="{{ "/reference/mpdf-variables/max-colh-correction.html" | prepend: site.baseurl }}">$max_colH_correction</a> - too large a value can give ugly results</div>

<div class="alert alert-info" role="alert"><strong>Note:</strong> If you are setting HTMLHeaders or HTMLFooters, this will cancel any columns you have set; you need to call SetColumns() after commands like <a href="{{ "/reference/mpdf-functions/sethtmlheader.html" | prepend: site.baseurl }}">SetHTMLHeader()</a> etc.</div>

# Parameters

<span class="parameter">nCols</span>

Set the number of (vertical) columns to use on a page

<span class="smallblock">BLANK</span>&nbsp;or omitted or 0 or 1 turns Columns OFF i.e. the whole page is used as one column.

<span class="smallblock">DEFAULT</span>: 1

<span class="parameter">vAlign</span>

Automatically adjusts height of columns to be equal if set to J or justify.

<span class="smallblock">BLANK</span>&nbsp;or omitted turns vertical-alignment OFF

<b>Values</b> (case-insensitive)

J or justify

<span class="smallblock">DEFAULT</span>: ""

<span class="parameter">gap</span>

Set the gap between columns in millimeters

<span class="smallblock">BLANK</span>&nbsp;or omitted uses default value.

<span class="smallblock">DEFAULT</span>: 5 (mm)

# Examples

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<?php

$mpdf=new mPDF();

$mPDF->SetColumns(2, 'J', 3);

$mpdf->WriteHTML('
Some text...
');

$mpdf->AddColumn();

$mpdf->WriteHTML('
Next column...
');

$mpdf=Output();

?>
{% endhighlight %}

# See Also

<ul>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/addcolumn.html" | prepend: site.baseurl }}">AddColumn()</a> - Start a new Column</li>
<li class="manual_boxlist">&lt;<a href="{{ "/reference/html-control-tags/columnbreak.html" | prepend: site.baseurl }}">columnbreak</a>&gt; - Start a new Column</li>
<li class="manual_boxlist">&lt;<a href="{{ "/reference/html-control-tags/columns.html" | prepend: site.baseurl }}">columns</a>&gt; - Control the use of multiple columns on the page - HTML equivalent of SetColumns()

</li>
</ul>