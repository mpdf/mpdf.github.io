---
layout: page
title: SetCompression()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setcompression.html
modification_time: 2015-08-05T12:00:56+00:00
---

<p>(mPDF &gt;= 1.0)</p>
<p>SetCompression – Specifies that mPDF should compress the data for the PDF file</p>

# Description

<p class="manual_block">void <b>SetCompression</b> ( boolean <span class="parameter">$flag</span> )</p>
<p>Specifies that mPDF should compress the data for the PDF file. This makes a smaller PDF file and is set by default to <span class="smallblock">TRUE</span> on initialising the mPDF class.</p>

# Parameters

<p class="manual_param_dt"><span class="parameter">flag</span></p>
<p class="manual_param_dd">TRUE or FALSE to specify whether mPDF should compress the data for the PDF file.

<span class="smallblock">DEFAULT</span>: <span class="smallblock">TRUE</span></p>

# Examples

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

