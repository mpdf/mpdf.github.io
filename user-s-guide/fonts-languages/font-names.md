---
layout: page
title: Font names
parent_title: Fonts & Languages
permalink: /user-s-guide/fonts-languages/font-names.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<h3>CSS font-family name</h3>
<p>Every font family has a name which is defined in the font file. This is the name by which your computer OS registers and recognises the font family.</p>
<p>This is also the name used in CSS e.g.</p>

{% highlight php %}
<?php

&nbsp;&nbsp;&nbsp; &lt;p style="font-family: 'Trebuchet MS';"&gt;
{% endhighlight %}

<h3>mPDF font-family name</h3>
<p>This is the name used by mPDF internally to process fonts. This could be anything you like, but by default mPDF will convert CSS font-family names by removing any spaces and changing to lowercase. Reading the CSS name above, mPDF will look for a "mPDF font-family name" of 'trebuchetms'.</p>
<p>This means that this will also work:</p>

{% highlight php %}
<?php

&nbsp;&nbsp;&nbsp; &lt;p style="font-family: trebuchetms;"&gt;
{% endhighlight %}

<p>Next it will look for a translation in <code>$this-&gt;fonttrans</code> in the <span class="filename">config_fonts.php</span> file. Imagine that we also wished to recognise 'Trebuchet', we would add:</p>

{% highlight php %}
<?php

$this-&gt;fonttrans = array(

...

&nbsp;&nbsp;&nbsp; 'trebuchet' =&gt; 'trebuchetms',

...

)
{% endhighlight %}

<p>mPDF font-family names should therefore always be lower-case and contain no spaces. When mPDF needs to refer to a specific variant (bold, italic etc.) it will use the mPDF font-family name (lowercase) followed by 'B', 'I', or 'BI' (uppercase). The regular/normal Trebuchet MS will be 'trebuchetms', and the bold variant will be referred to as 'trebuchetmsB'.</p>
<p>These mPDF font names are used in other places:</p>
<ul>
<li>all the other configurable variables in the <span class="filename">config_fonts.php</span> use the mPDF font-family name</li>
<li>use the mPDF font name in the <span class="filename">config_cp.php</span> file to make it selectively available in certain languages.</li>
<li>if used in the PHP script e.g. $mpdf = new mPDF('','','','trebuchetms');</li>
</ul>
<h3>Font file name</h3>
<p>To make a font available to mPDF, you need to specify the Truetype .ttf font files for each variant.</p>
<p>These should be defined in <span class="filename">config_fonts.php</span> in the array:</p>

{% highlight php %}
<?php

$this-&gt;fontdata = array(

...

&nbsp;&nbsp;&nbsp; "trebuchetms" =&gt; array(

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 'R' =&gt; "trebuc.ttf",

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 'B' =&gt; "trebucbd.ttf",

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 'I' =&gt; "trebucit.ttf",

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 'BI' =&gt; "trebucbi.ttf",

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; ),

...

)
{% endhighlight %}

<p>Each font-family must have a Regular ['R'] file defined - the others (['B']old, ['I']talic, ['BI']bold-italic) are optional.</p>
<p>mPDF will try to locate the font-file. If you have defined <code>_MPDF_SYSTEM_TTFONTS</code> at the top of the <span class="filename">config_fonts.php</span> file, it will first look for the font-file there. This is useful if you are running mPDF on a computer which already has a folder with TTF fonts in (e.g. on Windows)</p>
<p>If the font-file is not there, or <code>_MPDF_SYSTEM_TTFONTS</code> is not defined, mPDF will look in the folder <span class="filename">/[your_path_to_mpdf]/ttfonts/</span></p>
<p>Note that the font-file names are case-sensitive and can contain capitals.</p>
</div>
</div>

