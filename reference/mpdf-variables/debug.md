---
layout: page
title: debug
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/debug.html
modification_time: 2015-08-05T12:01:50+00:00
---

(mPDF &gt;= 3.1)

debug – Turn on debugging messages

# Description

void <b>debug</b>

Specify whether to show debugging messages. If you are having problems with mPDF, set <span class="parameter">debug</span> to TRUE to show error and warning&nbsp; messages that may otherwise be suppressed.

# Values

<span class="parameter">debug</span> =&nbsp; <span class="smallblock">TRUE </span>| <span class="smallblock">FALSE</span>

<b>Values</b>

<span class="smallblock">TRUE </span>: enable debugging

<span class="smallblock">FALSE</span>: disable debugging

<span class="smallblock">DEFAULT</span>: <span class="smallblock">FALSE</span>

# Changelog

<table class="table"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>3.1</td>
<td>Variable was added.</td>
</tr>
</tbody> </table>

# Examples

{% highlight php %}
Example #1

{% endhighlight %}

{% highlight php %}
<?php

include("../mpdf.php");

$mpdf=new mPDF();

$mpdf->debug = true;

$mpdf->WriteHTML("Hallo World");

$mpdf->Output();

?>
{% endhighlight %}

<div class="alert alert-info" role="alert"><strong>Note:</strong> This was introduced in mPDF 3.1 as the method used by mPDF to catch error messages inadvertently picked up suppressed errors such as those caused by @fopen()&nbsp; - even though the @ is deliberately there to prevent interruption of the script.</div>

# See Also

<ul>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/showimageerrors.html" | prepend: site.baseurl }}">showImageErrors</a> - show/hide error reporting for problems with Images</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/allow-output-buffering.html" | prepend: site.baseurl }}">allow_output_buffering</a> - prevent error mesages when using output buffering</li>
</ul>

