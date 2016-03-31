---
layout: page
title: simpleTables
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/simpletables.html
modification_time: 2015-08-05T12:02:29+00:00
---

<p>(mPDF &gt;= 4.3)</p>
<p>simpleTables – Disables complex table borders etc. to improve performance</p>

# Description

<p class="manual_block">void <b>simpleTables</b></p>
<p>Specify whether to disable complex table borders etc. to improve performance. The border for all table cells will be the same (although separate values can be used for -top, -left etc.). A separate table border may still be specified (if border-collapse is not used).</p>
<p>This may improve performance considerably for large tables, reducing memory use and increasing processing speed by approximately 30%</p>

<div class="alert alert-info" role="alert"><strong>Note:</strong> Prior to mPDF 4.4 using simpleTables also disabled padding, background-images, background-color and rotated text. These were re-introduced with almost no loss of performance.</div>

# Values

<p class="manual_param_dt"><span class="parameter">simpleTables</span> =&nbsp; <span class="smallblock">TRUE </span>| <span class="smallblock">FALSE</span></p>
<p class="manual_param_dd"><b>Values</b>

<span class="smallblock">TRUE </span>: disable complex table borders etc.

<span class="smallblock">FALSE</span>: allow full CSS support for tables

<span class="smallblock">DEFAULT</span>: <span class="smallblock">FALSE</span></p>

# Changelog

<table class="table"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>4.3</td>
<td>Variable was added.</td>
</tr>
</tbody> </table>

# Examples

{% highlight php %}
Example #1

{% endhighlight %}

{% highlight php %}
<?php

<?php

include("../mpdf.php");

$mpdf=new mPDF();

$mpdf->simpleTables = true;

$mpdf->WriteHTML($table);

$mpdf->Output();

?>
{% endhighlight %}

