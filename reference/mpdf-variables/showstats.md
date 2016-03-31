---
layout: page
title: showStats
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/showstats.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 4.0)</p>
<p>showStats – Display performance data for the generated PDF file</p>
<h2>Value</h2>

<div class="alert alert-info" role="alert">void <b>showStats</b></div>
<p>Specify whether to show performance data. Useful if you are developing with mPDF, and want to test different configurations.</p>
<h2>Values</h2>
<p class="manual_param_dt"><span class="parameter">showStats</span> =&nbsp; <span class="smallblock">TRUE </span>| <span class="smallblock">FALSE</span></p>
<p class="manual_param_dd"><b>Values</b>

<span class="smallblock">TRUE </span>: enable display of data

<span class="smallblock">FALSE</span>: disabled

<span class="smallblock">DEFAULT</span>: <span class="smallblock">FALSE</span></p>
<h2>Changelog</h2>
<table class="bpmTopic"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>4.0</td>
<td>Variable was added.</td>
</tr>
</tbody> </table>
<h2>Examples</h2>

{% highlight php %}
Example #1

{% endhighlight %}

{% highlight php %}
<?php

<?php

include("../mpdf.php");

$mpdf=new mPDF();

$mpdf->showStats = true;

$mpdf->WriteHTML("Hallo World");

$mpdf->Output();

?>
{% endhighlight %}

{% highlight php %}
This will suppress output of the PDF file, and display data on the browser such as:
{% endhighlight %}

{% highlight php %}
Generated in 0.45 seconds

Compiled in 0.46 seconds (total)

Peak Memory usage 10.25MB

PDF file size 37kB

Number of fonts 6
{% endhighlight %}

<h2>See Also</h2>
<ul>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/debug.html" | prepend: site.baseurl }}">debug</a> - specify whether to show errors</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/showimageerrors.html" | prepend: site.baseurl }}">showImageErrors</a> - show/hide error reporting for problems with Images</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/allow-output-buffering.html" | prepend: site.baseurl }}">allow_output_buffering</a> - prevent error mesages when using output buffering</li>
</ul>
</div>
</div>

