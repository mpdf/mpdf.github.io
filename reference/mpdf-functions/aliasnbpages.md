---
layout: page
title: AliasNbPages()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/aliasnbpages.html
modification_time: 2015-08-05T12:00:40+00:00
---

<p>(mPDF &gt;= 1.0)</p>
<p>AliasNbPages – Defines the placeholder used to insert total number of pages into the document</p>

# Description

<p class="manual_block">void <b>AliasNbPages</b> ( string <span class="parameter">$text</span> )</p>
<p>Set the value for the variable string <a href="{{ "/reference/mpdf-variables/aliasnbpg.html" | prepend: site.baseurl }}">aliasNbPg</a> which is used as a placeholder used to insert total number of pages into the document.</p>

# Parameters

<p class="manual_param_dt"><span class="parameter">text</span></p>
<p class="manual_param_dd">Defines the text for the vaiable <span class="parameter">aliasNbPg</span>. 

<span class="smallblock">DEFAULT</span>: {nb}</p>

# Examples

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<?php

$mpdf=new mPDF();

$mpdf->AliasNbPages('[pagetotal]');

$mpdf->WriteHTML('<p>There are [pagetotal] pages in this document</p>');

$mpdf->Output();

?>
{% endhighlight %}

{% highlight php %}
Example #2
{% endhighlight %}

{% highlight php %}
<?php

$mpdf->AliasNbPages('[pagetotal]');

is the exact equivalent of:

$mpdf->aliasNbPg = '[pagetotal]';
{% endhighlight %}

# See Also

<ul>
<li class="manual_boxlist"><a href="{{ "/what-else-can-i-do/replaceable-aliases.html" | prepend: site.baseurl }}">Replaceable Aliases</a> 

</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/aliasnbpagegroups.html" | prepend: site.baseurl }}">AliasNbPageGroups()</a> - Sets the placeholder alias for the total number of pages in a document or page group</li>
</ul>
