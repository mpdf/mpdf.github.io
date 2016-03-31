---
layout: page
title: keepColumns
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/keepcolumns.html
modification_time: 2015-08-05T12:02:06+00:00
---



<p>&nbsp;</p>
<p class="manual_block"><b>Note: </b>This variable originally started with an uppercase letter (&lt;= mPDF 2.2). Support for the uppercase version was removed in mPDF &gt;= 6.0</p>
<p>Set this variable to <span class="smallblock">TRUE</span> and columns will be written successively i.e. there will be no balancing of the length of columns.</p>

{% highlight php %}
<?php

$mpdf->keepColumns = true;
{% endhighlight %}

