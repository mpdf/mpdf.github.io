---
layout: page
title: Default stylesheet
parent_title: CSS & Stylesheets
permalink: /user-s-guide/css-stylesheets/default-stylesheet.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>mPDF uses a default "stylesheet" for default settings of style and layout; this is in <span class="filename">config.php</span> as a variable <span class="parameter">$defaultCSS</span>.</p>
<p>mPDF ( &gt;= 2.2) will load an optional file <span class="filename">mpdf.css</span> (located in the same directory as <span class="filename">mpdf.php</span>) which can be edited to change your default styles for PDF files.</p>
<p class="manual_block"><b>mPDF &gt;= 6.0</b> A new mpdf.css file includes defaults for Lists top/bottom margins, and also examples for Indexes and ToCs. This now acts like a normal CSS file, including cascading selectors i.e. not just main tags. This is always read (if present), so acts as a secondary default CSS, but one which allows selectors. Styles added to this act like a user stylesheet when considering precedence e.g. cellSpacing and border-spacing. (The following text describes behaviour prior to mPDF v6.0)</p>
<p>The file should be a valid CSS stylesheet, but will only support changing properties at element level i.e. P, DIV, TABLE, TD and not P.classname.</p>
<p>The mpdf.css file supplied is inactive as it has all the entries commented out by /* ... */</p>
<p>The following values will restore behaviour of pre-4.2 versions to 4.2:</p>

{% highlight php %}
<?php

&nbsp;&nbsp;&nbsp; img { margin: 0.83em 0; vertical-align: bottom; }

&nbsp;&nbsp;&nbsp; table { margin: 0.5em; }

&nbsp;&nbsp;&nbsp; textarea { vertical-align: top; }
{% endhighlight %}

<p>The following values will restore behaviour of 2.2 versions:</p>

{% highlight php %}
<?php

&nbsp;&nbsp;&nbsp; body {

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; font-family: sans-serif;

&nbsp;&nbsp;&nbsp; }

&nbsp;&nbsp;&nbsp; a {

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; color: #000066;

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; text-decoration: none;

&nbsp;&nbsp;&nbsp; }

&nbsp;&nbsp;&nbsp; table {

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; border-collapse: collapse;

&nbsp;&nbsp;&nbsp; }

&nbsp;&nbsp;&nbsp; thead {

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; vertical-align: bottom;

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; text-align: center;

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; font-weight: bold;

&nbsp;&nbsp;&nbsp; }

&nbsp;&nbsp;&nbsp; tfoot {

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; text-align: center;

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; font-weight: bold;

&nbsp;&nbsp;&nbsp; }

&nbsp;&nbsp;&nbsp; th {

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; text-align: left;

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; padding-left: 0.35em;

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; padding-right: 0.35em;

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; padding-top: 0.35em;

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; padding-bottom: 0.35em;

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; vertical-align: top;

&nbsp;&nbsp;&nbsp; }

&nbsp;&nbsp;&nbsp; td {

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; padding-left: 0.35em;

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; padding-right: 0.35em;

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; padding-top: 0.35em;

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; padding-bottom: 0.35em;

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; vertical-align: top;

&nbsp;&nbsp;&nbsp; }

&nbsp;&nbsp;&nbsp; img {

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; margin: 0.2em;

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; vertical-align: middle;

&nbsp;&nbsp;&nbsp; }
{% endhighlight %}

<h3>Prior to mPDF 2.2</h3>
<p>The original default styles (mPDF &lt;=2.0) were extensively changed with improvements in CSS handling in mPDF 2.0 (this particularly changed table borders, and table cell alignment, as well as a serif default font-family).</p>
<p>In order to allow backwards compatibilty, a secondary "stylesheet" - a variable $defaultCSS2 was introduced in mPDF 2.0 - and the option to load this on intiating mPDF:</p>

{% highlight php %}
<?php

$mpdf-&gt;useDefaultCSS2 = true;
{% endhighlight %}

<h3>Secondary default CSS values used mPDF 2.0 - 2.1</h3>

{% highlight php %}
<?php

var $defaultCSS2 = array(

&nbsp;&nbsp;&nbsp; 'BODY' =&gt; array(

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 'FONT-FAMILY' =&gt; 'sans-serif',

&nbsp;&nbsp;&nbsp; ),

&nbsp;&nbsp;&nbsp; 'A' =&gt; array(

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 'COLOR' =&gt; '#000066',

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 'TEXT-DECORATION' =&gt; '',

&nbsp;&nbsp;&nbsp; ),

&nbsp;&nbsp;&nbsp; 'TABLE' =&gt; array(

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 'BORDER-COLLAPSE' =&gt; 'collapse',

&nbsp;&nbsp;&nbsp; ),

&nbsp;&nbsp;&nbsp; 'THEAD' =&gt; array(

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 'VERTICAL-ALIGN' =&gt; 'bottom',

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 'TEXT-ALIGN' =&gt; 'center',

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 'FONT-WEIGHT' =&gt; 'bold',

&nbsp;&nbsp;&nbsp; ),

&nbsp;&nbsp;&nbsp; 'TFOOT' =&gt; array(

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 'TEXT-ALIGN' =&gt; 'center',

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 'FONT-WEIGHT' =&gt; 'bold',

&nbsp;&nbsp;&nbsp; ),

&nbsp;&nbsp;&nbsp; 'TH' =&gt; array(

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 'TEXT-ALIGN' =&gt; '',

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 'PADDING-LEFT' =&gt; '0.35em',

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 'PADDING-RIGHT' =&gt; '0.35em',

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 'PADDING-TOP' =&gt; '0.35em',

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 'PADDING-BOTTOM' =&gt; '0.35em',

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 'VERTICAL-ALIGN' =&gt; 'top',

&nbsp;&nbsp;&nbsp; ),

&nbsp;&nbsp;&nbsp; 'TD' =&gt; array(

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 'PADDING-LEFT' =&gt; '0.35em',

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 'PADDING-RIGHT' =&gt; '0.35em',

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 'PADDING-TOP' =&gt; '0.35em',

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 'PADDING-BOTTOM' =&gt; '0.35em',

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 'VERTICAL-ALIGN' =&gt; 'top',

&nbsp;&nbsp;&nbsp; ),

&nbsp;&nbsp;&nbsp; 'IMG' =&gt; array(

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 'MARGIN' =&gt; '0.2em',

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 'VERTICAL-ALIGN' =&gt; 'middle',

&nbsp;&nbsp;&nbsp; ),

);
{% endhighlight %}

</div>
</div>

