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
<p class="manual_block">**mPDF &gt;= 6.0** A new mpdf.css file includes defaults for Lists top/bottom margins, and also examples for Indexes and ToCs. This now acts like a normal CSS file, including cascading selectors i.e. not just main tags. This is always read (if present), so acts as a secondary default CSS, but one which allows selectors. Styles added to this act like a user stylesheet when considering precedence e.g. cellSpacing and border-spacing. (The following text describes behaviour prior to mPDF v6.0)</p>
<p>The file should be a valid CSS stylesheet, but will only support changing properties at element level i.e. P, DIV, TABLE, TD and not P.classname.</p>
<p>The mpdf.css file supplied is inactive as it has all the entries commented out by /* ... */</p>
<p>The following values will restore behaviour of pre-4.2 versions to 4.2:</p>

{% highlight php %}
<?php

    img { margin: 0.83em 0; vertical-align: bottom; }

    table { margin: 0.5em; }

    textarea { vertical-align: top; }
{% endhighlight %}

<p>The following values will restore behaviour of 2.2 versions:</p>

{% highlight php %}
<?php

    body {

        font-family: sans-serif;

    }

    a {

        color: #000066;

        text-decoration: none;

    }

    table {

        border-collapse: collapse;

    }

    thead {

        vertical-align: bottom;

        text-align: center;

        font-weight: bold;

    }

    tfoot {

        text-align: center;

        font-weight: bold;

    }

    th {

        text-align: left;

        padding-left: 0.35em;

        padding-right: 0.35em;

        padding-top: 0.35em;

        padding-bottom: 0.35em;

        vertical-align: top;

    }

    td {

        padding-left: 0.35em;

        padding-right: 0.35em;

        padding-top: 0.35em;

        padding-bottom: 0.35em;

        vertical-align: top;

    }

    img {

        margin: 0.2em;

        vertical-align: middle;

    }
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

    'BODY' =&gt; array(

        'FONT-FAMILY' =&gt; 'sans-serif',

    ),

    'A' =&gt; array(

        'COLOR' =&gt; '#000066',

        'TEXT-DECORATION' =&gt; '',

    ),

    'TABLE' =&gt; array(

        'BORDER-COLLAPSE' =&gt; 'collapse',

    ),

    'THEAD' =&gt; array(

        'VERTICAL-ALIGN' =&gt; 'bottom',

        'TEXT-ALIGN' =&gt; 'center',

        'FONT-WEIGHT' =&gt; 'bold',

    ),

    'TFOOT' =&gt; array(

        'TEXT-ALIGN' =&gt; 'center',

        'FONT-WEIGHT' =&gt; 'bold',

    ),

    'TH' =&gt; array(

        'TEXT-ALIGN' =&gt; '',

        'PADDING-LEFT' =&gt; '0.35em',

        'PADDING-RIGHT' =&gt; '0.35em',

        'PADDING-TOP' =&gt; '0.35em',

        'PADDING-BOTTOM' =&gt; '0.35em',

        'VERTICAL-ALIGN' =&gt; 'top',

    ),

    'TD' =&gt; array(

        'PADDING-LEFT' =&gt; '0.35em',

        'PADDING-RIGHT' =&gt; '0.35em',

        'PADDING-TOP' =&gt; '0.35em',

        'PADDING-BOTTOM' =&gt; '0.35em',

        'VERTICAL-ALIGN' =&gt; 'top',

    ),

    'IMG' =&gt; array(

        'MARGIN' =&gt; '0.2em',

        'VERTICAL-ALIGN' =&gt; 'middle',

    ),

);
{% endhighlight %}

</div>
</div>

