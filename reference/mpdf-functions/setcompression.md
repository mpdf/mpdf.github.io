---
layout: page
title: SetCompression()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setcompression.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 1.0)</p>
<p>SetCompression – Specifies that mPDF should compress the data for the PDF file</p>
<h2>Description</h2>

<div class="alert alert-info" role="alert">void <b>SetCompression</b> ( boolean <span class="parameter">$flag</span> )</div>
<p>Specifies that mPDF should compress the data for the PDF file. This makes a smaller PDF file and is set by default to <span class="smallblock">TRUE</span> on initialising the mPDF class.</p>
<h2>Parameters</h2>
<p class="manual_param_dt"><span class="parameter">flag</span></p>
<p class="manual_param_dd">TRUE or FALSE to specify whether mPDF should compress the data for the PDF file.

<span class="smallblock">DEFAULT</span>: <span class="smallblock">TRUE</span></p>
<h2>Examples</h2>

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<?php

<?php

$mpdf=new mPDF();

$mpdf->SetCompression(false);

$mpdf->WriteHTML('<p>Hallo World</p>');

$mpdf->Output('filename.pdf');

?>
{% endhighlight %}

</div>
</div>

