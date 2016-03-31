---
layout: page
title: AddSpotColor
parent_title: mPDF functions
permalink: /reference/mpdf-functions/addspotcolor.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<div>
<div>
<p>(mPDF &gt;= 5.1)</p>
<p>AddSpotColor – Define a Spot colour</p>
<h2>Description</h2>

<div class="alert alert-info" role="alert">void <b>AddSpotColor</b> ( string <span class="parameter">$name</span> , int <span class="parameter">$c</span> , int <span class="parameter">$m</span>, int <span class="parameter">$y</span> , int <span class="parameter">$k</span> )</div>
<p>Define a Spot colour which can be used in the document. Spot colours need to be defined at the start of the script.</p>
<h2>Parameters</h2>
<p class="manual_param_dt"><span class="parameter">name</span></p>
<p class="manual_param_dd">Specifies the name used for the spot colour.</p>
<p class="manual_param_dt"><span class="parameter">c, m, y, k</span></p>
<p class="manual_param_dd"><span class="parameter">S</span>pecifies the CMYK values to be used to display in the document or if the spot colour is not available.

<span class="smallblock">DEFAULT</span>: 0</p>
<h2>Examples</h2>

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<?php

<?php

$mpdf->AddSpotColor('PANTONE 534 EC',85,65,47,9);

?>

HTML

<p style="color: spot(PANTONE 300 EC,80%);">This will be printed using PANTONE 300 EC at 80% tint</p>
{% endhighlight %}

</div>
</div>
</div>
</div>

