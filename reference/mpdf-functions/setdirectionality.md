---
layout: page
title: SetDirectionality()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setdirectionality.html
modification_time: 2015-08-05T12:00:59+00:00
---



<p>(mPDF &gt;= 1.0)</p>
<p>SetDirectionality – Set the document RTL state</p>
<h2>Description</h2>
<p class="manual_block">void <b>SetDirectionality</b> ( string <span class="parameter">$dir</span> )</p>
<p>Set the document RTL state. This defines the default alignment of tables, columns, text justification, page layout etc. See <a href="{{ "/fonts-languages/arabic-rtl-text-v5-x.html" | prepend: site.baseurl }}">RTL &amp; Bidirectional Text</a> for more details. If SetDirectionality('rtl') is set, <i>Text Bidirectionality</i> is automatically turned on.</p>
<h2>Parameters</h2>
<p class="manual_param_dt"><span class="parameter">dir</span></p>
<p class="manual_param_dd">Defines the directionality of the document

BLANK or omitted (or any value other than RTL) sets the default of LTR</p>
<p class="manual_param_dd"><b>Values</b> (case-insensitive)

LTR

RTL

<span class="smallblock">DEFAULT</span>: LTR</p>
<h2>Examples</h2>

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<?php

<?php

$mpdf=new mPDF('utf-8');

$mpdf->SetDirectionality('rtl');

$mpdf->WriteHTML('<p>דג סקרן שט בים מאוכזב ולפתע מצא חברה</p>');

$mpdf->Output();

?>
{% endhighlight %}

