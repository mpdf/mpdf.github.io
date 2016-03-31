---
layout: page
title: columns
parent_title: HTML control tags
permalink: /reference/html-control-tags/columns.html
modification_time: 2015-08-05T12:01:21+00:00
---

<p>(mPDF &gt;= 1.0)</p>
<p>columns – Control use of Columns on the page</p>

# Description

<p class="manual_block">&lt;<b>columns</b>&nbsp; <span class="parameter">column-count</span> [ <span class="parameter">vAlign</span> ] [ <span class="parameter">column-gap</span> ]&nbsp; /&gt;</p>
<p>Define, start or stop Columns in the document.</p>

<div class="alert alert-info" role="alert"><strong>Note:</strong> The maximum ratio to adjust column height when justifying is set by <a href="{{ "/reference/mpdf-variables/max-colh-correction.html" | prepend: site.baseurl }}">$max_colH_correction</a> - too large a value can give ugly results</div>

<div class="alert alert-info" role="alert"><strong>Note:</strong> If you are setting HTMLHeaders or HTMLFooters, this will cancel any columns you have set; you need to call SetColumns() or use &lt;columns&gt; after commands like <a href="{{ "/reference/mpdf-functions/sethtmlheader.html" | prepend: site.baseurl }}">SetHTMLHeader()</a> etc.</div>

# Parameters

<p class="manual_param_dt"><span class="parameter">column-count</span></p>
<p class="manual_param_dd">Set the number of (vertical) columns to use on a page

<span class="smallblock">BLANK</span>&nbsp;or omitted or 0 or 1 turns Columns OFF i.e. the whole page is used as one column.

<span class="smallblock">DEFAULT</span>: 1</p>
<p class="manual_param_dt"><span class="parameter">vAlign</span></p>
<p class="manual_param_dd">Automatically adjusts height of columns to be equal if set to J or justify.

<span class="smallblock">BLANK</span>&nbsp;or omitted turns vertical-alignment OFF</p>
<p class="manual_param_dd"><b>Values</b> (case-insensitive)

J or justify

<span class="smallblock">DEFAULT</span>: ""</p>
<p class="manual_param_dt"><span class="parameter">column-gap</span></p>
<p class="manual_param_dd">Set the gap between columns in millimeters

<span class="smallblock">BLANK</span>&nbsp;or omitted uses default value.

<span class="smallblock">DEFAULT</span>: 5 (mm)</p>

# Examples

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<?php

$mpdf=new mPDF();

$mpdf->WriteHTML('<columns column-count="3" vAlign="J" column-gap="7" />');

$mpdf->WriteHTML('<p>Some text...</p>');

$mpdf->WriteHTML('<columnbreak />');

$mpdf->WriteHTML('<p>Next column...</p>');

$mpdf=Output();

?>
{% endhighlight %}

# See Also

<ul>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/addcolumn.html" | prepend: site.baseurl }}">AddColumn()</a> - Start a new Column</li>
<li class="manual_boxlist">&lt;<a href="{{ "/reference/html-control-tags/columnbreak.html" | prepend: site.baseurl }}">columnbreak</a>&gt; - Start a new Column</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/setcolumns.html" | prepend: site.baseurl }}">SetColumns()</a> - Control the use of multiple columns on the page - PHP equivalent of &lt;columns&gt;</li>
</ul>
