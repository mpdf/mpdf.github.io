---
layout: page
title: AddColumn()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/addcolumn.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 2.2)</p>
<p>AddColumn – Start a new Column</p>
<h2>Description</h2>

<div class="alert alert-info" role="alert">void <b>AddColumn</b> ( )</div>
<p>Start a new Column in the document. Columns must be set using <a href="/reference/mpdf-functions/setcolumns.html">SetColumns()</a> or &lt;<a href="/reference/html-control-tags/columns.html">columns</a>&gt;. Height justification for the Columns is disabled when column breaks are set explicitly.</p>

<div class="alert alert-info" role="alert"><b>Note:</b> Columns are incompatible with (and automatically disable): borders for block-level elements (DIV, P etc), table rotation, and collapsible margins for blocks e.g. top and bottom margins for a DIV will not collapse (default) at the top/bottom of a column.</div>
<h2>Parameters</h2>
<p class="manual_param_dd">No parameters</p>
<h2>Examples</h2>

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<?php

<?php

$mpdf=new mPDF();

$mPDF->SetColumns(2);

$mpdf->WriteHTML('<p>Some text...</p>');

$mpdf->AddColumn();

$mpdf->WriteHTML('<p>Next column...</p>');

$mpdf=Output();

?>
{% endhighlight %}

<h2>See Also</h2>
<ul>
<li class="manual_boxlist"><a href="/reference/mpdf-functions/bookmark.html"></a>&lt;<a href="/reference/html-control-tags/columnbreak.html">columnbreak</a>&gt; - HTML equivalent to AddColumn()</li>
<li class="manual_boxlist"><a href="/reference/mpdf-functions/setcolumns.html">SetColumns()</a> - Control the use of multiple columns on the page</li>
<li class="manual_boxlist">&lt;<a href="/reference/html-control-tags/columns.html">columns</a>&gt; - Control the use of multiple columns on the page</li>
</ul>
</div>
</div>

