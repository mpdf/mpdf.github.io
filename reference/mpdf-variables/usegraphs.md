---
layout: page
title: useGraphs
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/usegraphs.html
modification_time: 2015-08-05T12:02:37+00:00
---



<p>(mPDF &gt;= 2.4)</p>
<h2>Description</h2>
<p class="manual_block">boolean <b>useGraphs</b></p>
<p>When <span class="smallblock">TRUE</span>, mPDF will parse table data and allow the use of &lt;<a href="{{ "/reference/html-control-tags/jpgraph.html" | prepend: site.baseurl }}">jpgraph</a>&gt; to generate graphs from the data. This should only be set to <span class="smallblock">TRUE</span> when required to conserve memory and processing time.</p>
<p class="manual_block"><b>Note: </b>Graphs require <a href="http://www.aditus.nu/jpgraph/" target="_blank">JPGraph</a> to be installed on the server. See <a href="{{ "/what-else-can-i-do/graphs.html" | prepend: site.baseurl }}">Graphs</a> for further information.</p>
<h2>Values</h2>
<p class="manual_param_dt"><span class="parameter">useGraphs</span> = <span class="smallblock">TRUE</span>|<span class="smallblock"><i>FALSE</i></span></p>
<p class="manual_param_dd"><b>Values</b>

<span class="smallblock">TRUE</span>: Parse table data from the HTML, and allow the use of &lt;<a href="{{ "/reference/html-control-tags/jpgraph.html" | prepend: site.baseurl }}">jpgraph</a>&gt;

<span class="smallblock"><i>FALSE</i></span>: <span class="smallblock">DEFAULT</span></p>
<h2>Examples</h2>

{% highlight php %}
See <jpgraph> for example
{% endhighlight %}

<h2>See Also</h2>
<ul>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/writehtml.html" | prepend: site.baseurl }}"></a>&lt;<a href="{{ "/reference/html-control-tags/jpgraph.html" | prepend: site.baseurl }}">jpgraph</a>&gt; - Write HTML code to document</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/charset-in.html" | prepend: site.baseurl }}">Graphs</a> - More about JPGraph and graphs

</li>
</ul>
<p>&nbsp;</p>
