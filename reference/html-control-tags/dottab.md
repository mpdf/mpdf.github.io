---
layout: page
title: dottab
parent_title: HTML control tags
permalink: /reference/html-control-tags/dottab.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 4.3)</p>
<p>dottab – Insert dots to following (right-aligned) text</p>
<h2>Description</h2>

<div class="alert alert-info" role="alert">&lt;<b>dottab</b> [ <span class="parameter">outdent</span> ] /&gt;</div>
<p>Insert a string of dots to fill the space to the text which follows &lt;dottab /&gt;, which is right-aligned. This gives the appearance seen in e.g. a table of contents, or a menu with prices. A minimum of 3 dots (with spaces either side) is inserted. If the text which follows the &lt;dottab /&gt; will not fit on a single line, the default tab of ' ... ' is added, and text is not right-aligned.</p>

<div class="alert alert-info" role="alert"><b>Note:</b> If a space is required after the &lt;dottab&gt; use a non-breaking space &amp;nbsp;</div>

<div class="alert alert-info" role="alert">From mPDF 5.7+ CSS styles can be applied to &lt;dottab&gt; as for an inline element.</div>
<h2>Attributes</h2>
<p class="manual_param_dt"><span class="parameter">outdent</span></p>
<p class="manual_param_dd">Takes any valid CSS <span class="smallblock">LENGTH</span>&nbsp; e.g. "2em"

<span class="smallblock">DEFAULT</span>: 0</p>
<h2>Changelog</h2>
<table class="bpmTopic"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>4.3</td>
<td>This tag was added.</td>
</tr>
<tr>
<td>5.7</td>
<td><span class="parameter">outdent</span> was added</td>
</tr>
</tbody> </table>
<h2>Examples</h2>

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<?php

$menuitem = '<p>Chilli con carne <dottab />&amp;nbsp;£7.95</p>';

$mpdf->WriteHTML($menuitem);
{% endhighlight %}

{% highlight php %}
Example #2
{% endhighlight %}

{% highlight php %}
<?php

To right-align the text which follows the <dottab> whilst indenting any preceding lines:

$menuitem = '<p style="padding-right: 3em">Chilli con carne etc. etc. <dottab outdent="3em" />&amp;nbsp;£7.95</p>';
{% endhighlight %}

</div>
</div>

