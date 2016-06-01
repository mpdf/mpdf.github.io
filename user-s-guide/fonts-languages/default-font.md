---
layout: page
title: Default Font
parent_title: Fonts & Languages
permalink: /user-s-guide/fonts-languages/default-font.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>**Default font &amp; font-size**</p>
<p>A default font and font-size are required for mPDF to function. These are determined by:</p>
<p>Declared when instantiating the mPDF class (see Getting Started). These "provisional" default values will be active if you are using functions to write directly to the PDF file e.g.</p>

{% highlight php %}
<?php

$mpdf = new mPDF('','A4',9,'dejavusans');

$mpdf-&gt;WriteCell(110,5,'Hallo World');
{% endhighlight %}

<p>If you are using WriteHTML() these "provisional" default values are overridden, and defaults are set as follows:</p>
<ul>
<li>If mPDF('c') is set, the default font is set as 'helvetica', 'times' or 'courier'</li>
<li>Otherwise the default font is set by the value in the default stylesheet `$default_CSS` in <span class="filename">config.php</span> </li>
<li>NB The default font-*size* is also set by the value in the default stylesheet `$default_CSS`</li>
</ul>
<p> </p>
<p>If the secondary default CSS stylesheet <span class="filename">mpdf.css</span> contains values to define the BODY tag, these values will override the above e.g.</p>

{% highlight php %}
<?php

body { font-family: serif; font-size: 10pt; }
{% endhighlight %}

<p>If a CSS stylesheet is used with WriteHTML() and contains values to define the BODY tag, these values will override the above.</p>
<p>In-line style used in the &lt;body&gt; tag will override the default values e.g.</p>

{% highlight php %}
<?php

&lt;body style="font-family: serif; font-size: 10pt;"&gt;
{% endhighlight %}

</div>
</div>

