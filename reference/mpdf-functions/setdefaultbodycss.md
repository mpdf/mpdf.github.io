---
layout: page
title: SetDefaultBodyCSS()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setdefaultbodycss.html
modification_time: 2015-08-05T12:00:57+00:00
---

<p>(mPDF &gt;= 4.2)</p>
<p>SetDefaultBodyCSS – Change default CSS properties at runtime</p>

# Description

<p class="manual_block">void <b>SetDefaultBodyCSS</b> ( string <span class="parameter">$property</span> , string <span class="parameter">$value</span> )</p>
<p>Change default CSS properties at runtime. This changes the default CSS stylesheet values for the BODY element.</p>

# Parameters

<p class="manual_param_dt"><span class="parameter">property</span></p>
<p class="manual_param_dd">Specifies the CSS property to set. Any valid CSS property that mPDF supports for the BODY element e.g.

<code>font-family</code>, <code>font-size</code>, <code>color </code>

Case-insensitive</p>
<p><span class="parameter">value</span></p>
<p class="manual_param_dd"><span class="parameter"></span>Specifies the value for the given property.</p>

# Examples

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<?php

$mpdf=new mPDF();

$mpdf->SetDefaultBodyCSS('color', '#880000');

$mpdf->WriteHTML('Hallow World should be in red');

$mpdf->Output();

?>
{% endhighlight %}

