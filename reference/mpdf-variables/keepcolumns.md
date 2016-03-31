---
layout: page
title: keepColumns
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/keepcolumns.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>&nbsp;</p>

<div class="alert alert-info" role="alert"><b>Note: </b>This variable originally started with an uppercase letter (&lt;= mPDF 2.2). Support for the uppercase version was removed in mPDF &gt;= 6.0</div>
<p>Set this variable to <span class="smallblock">TRUE</span> and columns will be written successively i.e. there will be no balancing of the length of columns.</p>

{% highlight php %}
<?php

$mpdf->keepColumns = true;
{% endhighlight %}

</div>
</div>

