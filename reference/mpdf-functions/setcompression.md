---
layout: page
title: SetCompression()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setcompression.html
modification_time: 2015-08-05T12:00:56+00:00
---

(mPDF >= 1.0)

SetCompression – Specifies that mPDF should compress the data for the PDF file

# Description

void **SetCompression** ( boolean <span class="parameter">$flag</span> )

Specifies that mPDF should compress the data for the PDF file. This makes a smaller PDF file and is set by default to <span class="smallblock">TRUE</span> on initialising the mPDF class.

# Parameters

<span class="parameter">flag</span>

TRUE or FALSE to specify whether mPDF should compress the data for the PDF file.

<span class="smallblock">DEFAULT</span>: <span class="smallblock">TRUE</span>

# Examples

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<?php

$mpdf = new mPDF();

$mpdf->SetCompression(false);

$mpdf->WriteHTML('
Hallo World
');

$mpdf->Output('filename.pdf');

?>
{% endhighlight %}

