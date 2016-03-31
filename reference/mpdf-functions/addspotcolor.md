---
layout: page
title: AddSpotColor
parent_title: mPDF functions
permalink: /reference/mpdf-functions/addspotcolor.html
modification_time: 2015-08-05T12:00:39+00:00
---

<div>
<div>

(mPDF &gt;= 5.1)

AddSpotColor – Define a Spot colour

# Description

void <b>AddSpotColor</b> ( string <span class="parameter">$name</span> , int <span class="parameter">$c</span> , int <span class="parameter">$m</span>, int <span class="parameter">$y</span> , int <span class="parameter">$k</span> )

Define a Spot colour which can be used in the document. Spot colours need to be defined at the start of the script.

# Parameters

<span class="parameter">name</span>

Specifies the name used for the spot colour.

<span class="parameter">c, m, y, k</span>

<span class="parameter">S</span>pecifies the CMYK values to be used to display in the document or if the spot colour is not available.

<span class="smallblock">DEFAULT</span>: 0

# Examples

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<?php

$mpdf->AddSpotColor('PANTONE 534 EC',85,65,47,9);

?>

HTML

This will be printed using PANTONE 300 EC at 80% tint

{% endhighlight %}

</div>
</div>
