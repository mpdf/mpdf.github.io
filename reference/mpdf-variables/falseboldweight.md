---
layout: page
title: falseBoldWeight
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/falseboldweight.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 4.2)</p>
<p>falseBoldWeight – Specify weight used for bold text when using an artificial (outline) bold</p>
<h2>Description</h2>

<div class="alert alert-info" role="alert">void <b>falseBoldWeight</b></div>
<p>Specify weight used for bold text when using an artificial (outline) bold. If bold text is set by &lt;b&gt; and the current font does not have a font file for the bold variant, an artificial bold is created by stroking the outline of the characters. This variable sets the width of the line and thus the "weight" of the bold text. Values between 0 and 10 are recommended.</p>
<h2>Values</h2>
<p class="manual_param_dt"><span class="parameter">falseBoldWeight</span><span class="smallblock"></span></p>
<p class="manual_param_dd"><b>Values</b>

<span class="smallblock">INTEGER </span>: set weight of bold text

<span class="smallblock"></span><span class="smallblock">DEFAULT</span>: 5</p>
<h2>Changelog</h2>
<table class="bpmTopic"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>4.2</td>
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

$mpdf->falseBoldWeight = 8;

$mpdf->WriteHTML('<p style="font-family: mysimplefont"><b>Hallo World</b><p>');

$mpdf->Output();

?>
{% endhighlight %}

<div class="alert alert-info" role="alert"><b>Note:</b> False bold text has the same character widths as the normal text.</div>
<p>&nbsp;</p>
</div>
</div>

