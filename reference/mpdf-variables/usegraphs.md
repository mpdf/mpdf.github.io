---
layout: page
title: useGraphs
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/usegraphs.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 2.4)</p>
<h2>Description</h2>

<div class="alert alert-info" role="alert">boolean <b>useGraphs</b></div>
<p>When <span class="smallblock">TRUE</span>, mPDF will parse table data and allow the use of &lt;<a href="/reference/html-control-tags/jpgraph.html">jpgraph</a>&gt; to generate graphs from the data. This should only be set to <span class="smallblock">TRUE</span> when required to conserve memory and processing time.</p>

<div class="alert alert-info" role="alert"><b>Note: </b>Graphs require <a href="http://www.aditus.nu/jpgraph/" target="_blank">JPGraph</a> to be installed on the server. See <a href="/what-else-can-i-do/graphs.html">Graphs</a> for further information.</div>
<h2>Values</h2>
<p class="manual_param_dt"><span class="parameter">useGraphs</span> = <span class="smallblock">TRUE</span>|<span class="smallblock"><i>FALSE</i></span></p>
<p class="manual_param_dd"><b>Values</b>

<span class="smallblock">TRUE</span>: Parse table data from the HTML, and allow the use of &lt;<a href="/reference/html-control-tags/jpgraph.html">jpgraph</a>&gt;

<span class="smallblock"><i>FALSE</i></span>: <span class="smallblock">DEFAULT</span></p>
<h2>Examples</h2>

{% highlight php %}
See <jpgraph> for example
{% endhighlight %}

<h2>See Also</h2>
<ul>
<li class="manual_boxlist"><a href="/reference/mpdf-functions/writehtml.html"></a>&lt;<a href="/reference/html-control-tags/jpgraph.html">jpgraph</a>&gt; - Write HTML code to document</li>
<li class="manual_boxlist"><a href="/reference/mpdf-variables/charset-in.html">Graphs</a> - More about JPGraph and graphs

</li>
</ul>
<p>&nbsp;</p>
</div>
</div>

