---
layout: page
title: AliasNbPageGroups()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/aliasnbpagegroups.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 2.0)</p>
<p>AliasNbPageGroups – Defines the placeholder used to insert total page number into the document</p>
<h2>Description</h2>

<div class="alert alert-info" role="alert">void <b>AliasNbPageGroups</b> ( string <span class="parameter">$text</span> )</div>
<p>Set the value for the variable string <a href="/reference/mpdf-variables/aliasnbpggp.html">aliasNbPgGp</a> which is used as a placeholder used to insert total page number into the document. If you have reset the page numbering with <a href="/reference/mpdf-functions/addpage.html">AddPage()</a> or &lt;<a href="/reference/html-control-tags/pagebreak.html">pagebreak</a>&gt; the total number of pages in the current page group will be used (up to where the numbering is reset) rather the total number of pages in the whole document.</p>
<h2>Parameters</h2>
<p class="manual_param_dt"><span class="parameter">text</span></p>
<p class="manual_param_dd">Defines the text for the vaiable <span class="parameter">aliasNbPgGp</span>. 

<span class="smallblock">DEFAULT</span>: {nbpg}</p>
<h2>Examples</h2>

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<?php

<?php

$mpdf=new mPDF();

$mpdf->AliasNbPageGroups('[pagetotal]');

$mpdf->WriteHTML('<p>There are [pagetotal] pages in this page group</p>');

$mpdf->Output();

?>
{% endhighlight %}

{% highlight php %}
Example #2
{% endhighlight %}

{% highlight php %}
<?php

$mpdf->AliasNbPageGroups('[pagetotal]');

is the exact equivalent of:

$mpdf->aliasNbPgGp = '[pagetotal]';
{% endhighlight %}

<h2>See Also</h2>
<ul>
<li class="manual_boxlist"><a href="/what-else-can-i-do/replaceable-aliases.html">Replaceable Aliases</a>&nbsp;</li>
<li class="manual_boxlist"><a href="/reference/mpdf-functions/aliasnbpagegroups.html">AliasNbPages()</a> - Sets the placeholder alias for the total number of pages in the document

</li>
</ul>
</div>
</div>

