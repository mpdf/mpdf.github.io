---
layout: page
title: Default Font
parent_title: Fonts & Languages
permalink: /fonts-languages/default-font.html
modification_time: 2015-08-05T11:59:36+00:00
---

<p><b>Default font &amp; font-size</b></p>
<p>A default font and font-size are required for mPDF to function. These are determined by:</p>
<p>Declared when instantiating the mPDF class (see Getting Started). These "provisional" default values will be active if you are using functions to write directly to the PDF file e.g.</p>

{% highlight php %}
<?php

$mpdf=new mPDF('','A4',9,'dejavusans');

$mpdf->WriteCell(110,5,'Hallo World');
{% endhighlight %}

<p>If you are using WriteHTML() these "provisional" default values are overridden, and defaults are set as follows:</p>
<ul>
<li>If mPDF('c') is set, the default font is set as 'helvetica', 'times' or 'courier'</li>
<li>Otherwise the default font is set by the value in the default stylesheet <code>$default_CSS</code> in <span class="filename">config.php</span> </li>
<li>NB The default font-<i>size</i> is also set by the value in the default stylesheet <code>$default_CSS</code></li>
</ul>

<p>If the secondary default CSS stylesheet <span class="filename">mpdf.css</span> contains values to define the BODY tag, these values will override the above e.g.</p>

{% highlight php %}
body { font-family: serif; font-size: 10pt; }
{% endhighlight %}

<p>If a CSS stylesheet is used with WriteHTML() and contains values to define the BODY tag, these values will override the above.</p>
<p>In-line style used in the &lt;body&gt; tag will override the default values e.g.</p>

{% highlight php %}
<body style="font-family: serif; font-size: 10pt;">
{% endhighlight %}

