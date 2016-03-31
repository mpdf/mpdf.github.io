---
layout: page
title: AliasNbPageGroups()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/aliasnbpagegroups.html
modification_time: 2015-08-05T12:00:41+00:00
---

<p>(mPDF &gt;= 2.0)</p>
<p>AliasNbPageGroups – Defines the placeholder used to insert total page number into the document</p>

# Description

<p class="manual_block">void <b>AliasNbPageGroups</b> ( string <span class="parameter">$text</span> )</p>
<p>Set the value for the variable string <a href="{{ "/reference/mpdf-variables/aliasnbpggp.html" | prepend: site.baseurl }}">aliasNbPgGp</a> which is used as a placeholder used to insert total page number into the document. If you have reset the page numbering with <a href="{{ "/reference/mpdf-functions/addpage.html" | prepend: site.baseurl }}">AddPage()</a> or &lt;<a href="{{ "/reference/html-control-tags/pagebreak.html" | prepend: site.baseurl }}">pagebreak</a>&gt; the total number of pages in the current page group will be used (up to where the numbering is reset) rather the total number of pages in the whole document.</p>

# Parameters

<p class="manual_param_dt"><span class="parameter">text</span></p>
<p class="manual_param_dd">Defines the text for the vaiable <span class="parameter">aliasNbPgGp</span>. 

<span class="smallblock">DEFAULT</span>: {nbpg}</p>

# Examples

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
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

# See Also

<ul>
<li class="manual_boxlist"><a href="{{ "/what-else-can-i-do/replaceable-aliases.html" | prepend: site.baseurl }}">Replaceable Aliases</a>&nbsp;</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/aliasnbpagegroups.html" | prepend: site.baseurl }}">AliasNbPages()</a> - Sets the placeholder alias for the total number of pages in the document

</li>
</ul>
