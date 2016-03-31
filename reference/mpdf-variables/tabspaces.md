---
layout: page
title: tabSpaces
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/tabspaces.html
modification_time: 2015-08-05T12:02:32+00:00
---

<p>(mPDF &gt;= 2.3)</p>

# Description

<p class="manual_block">int <b>tabSpaces</b></p>
<p>Specifies the number of spaces to substitue for a <span class="smallblock">TAB</span> character when parsing HTML input between &lt;pre&gt;...&lt;/pre&gt; tags. The default value (8) is consistent with the HTML specification, but many programs including Windows NotePad uses a value of 6.</p>

# Values

<p class="manual_param_dt"><span class="parameter">tabSpaces</span></p>
<p class="manual_param_dd"><b>Values</b>

Integer value greater than 0

<span class="smallblock"></span><span class="smallblock">DEFAULT</span>: 8</p>

# Examples

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<?php

<?php

$mpdf=new mPDF();

$mpdf->tabSpaces = 6;

$html = file_get_content('NotePad.txt');

$mpdf->WriteHTML('<pre>'.$html.'</pre>');

$mpdf->Output();

?>
{% endhighlight %}

<p><span class="jslink">

</span></p>
