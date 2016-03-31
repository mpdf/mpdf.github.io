---
layout: page
title: SetDefaultBodyCSS()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setdefaultbodycss.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 4.2)</p>
<p>SetDefaultBodyCSS – Change default CSS properties at runtime</p>
<h2>Description</h2>

<div class="alert alert-info" role="alert">void <b>SetDefaultBodyCSS</b> ( string <span class="parameter">$property</span> , string <span class="parameter">$value</span> )</div>
<p>Change default CSS properties at runtime. This changes the default CSS stylesheet values for the BODY element.</p>
<h2>Parameters</h2>
<p class="manual_param_dt"><span class="parameter">property</span></p>
<p class="manual_param_dd">Specifies the CSS property to set. Any valid CSS property that mPDF supports for the BODY element e.g.

<code>font-family</code>, <code>font-size</code>, <code>color </code>

Case-insensitive</p>
<p><span class="parameter">value</span></p>
<p class="manual_param_dd"><span class="parameter"></span>Specifies the value for the given property.</p>
<h2>Examples</h2>

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<?php

<?php

$mpdf=new mPDF();

$mpdf->SetDefaultBodyCSS('color', '#880000');

$mpdf->WriteHTML('Hallow World should be in red');

$mpdf->Output();

?>
{% endhighlight %}

<p>&nbsp;</p>
</div>
</div>

