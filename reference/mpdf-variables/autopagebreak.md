---
layout: page
title: autoPageBreak
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/autopagebreak.html
modification_time: 2015-08-05T12:01:41+00:00
---



<p>(mPDF &gt;= 3.1)</p>
<p>autoPageBreak – Specify whether to allow automatic page breaks</p>
<h2>Description</h2>
<p class="manual_block">void <b>autoPageBreak</b></p>
<p>Specify whether to allow automatic page breaks. By default, mPDF creates page breaks when required in the document. Setting the value to FALSE allows an oversized object (image etc.) to overwrite the footer and/or the bottom margin of the page.</p>
<h2>Values</h2>
<p class="manual_param_dt"><span class="parameter">autoPageBreak</span> =&nbsp; <span class="smallblock">TRUE </span>| <span class="smallblock">FALSE</span></p>
<p class="manual_param_dd"><b>Values</b>

<span class="smallblock">TRUE </span>: enables automatic page breaks

<span class="smallblock">FALSE</span>: disable automatic page breaks

<span class="smallblock">DEFAULT</span>: <span class="smallblock">TRUE</span></p>
<h2>Changelog</h2>
<table class="table"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>3.1</td>
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

$html = '<img src="largeimage.jpg" height="290mm" /> ';

$mpdf->autoPageBreak = false;

$mpdf->AddPage();

$mpdf->WriteHTML($html);

$mpdf->Output();

?>
{% endhighlight %}

<div class="alert alert-info" role="alert"><strong>Note:</strong> This variable existed in the script before v3.1 but did not allow paging to be turned off. The variable was altered in mPDF 3.1 by making the first letter of the variable lowercase.</div>
<p>&nbsp;</p>
