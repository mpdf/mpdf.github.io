---
layout: page
title: Default stylesheet
parent_title: CSS & Stylesheets
permalink: /css-stylesheets/default-stylesheet.html
modification_time: 2015-08-05T11:59:57+00:00
---

mPDF uses a default "stylesheet" for default settings of style and layout; this is in <span class="filename">config.php</span> as a variable <span class="parameter">$defaultCSS</span>.

mPDF ( &gt;= 2.2) will load an optional file <span class="filename">mpdf.css</span> (located in the same directory as <span class="filename">mpdf.php</span>) which can be edited to change your default styles for PDF files.

<b>mPDF &gt;= 6.0</b> A new mpdf.css file includes defaults for Lists top/bottom margins, and also examples for Indexes and ToCs. This now acts like a normal CSS file, including cascading selectors i.e. not just main tags. This is always read (if present), so acts as a secondary default CSS, but one which allows selectors. Styles added to this act like a user stylesheet when considering precedence e.g. cellSpacing and border-spacing. (The following text describes behaviour prior to mPDF v6.0)

The file should be a valid CSS stylesheet, but will only support changing properties at element level i.e. P, DIV, TABLE, TD and not P.classname.

The mpdf.css file supplied is inactive as it has all the entries commented out by /* ... */

The following values will restore behaviour of pre-4.2 versions to 4.2:

{% highlight php %}

    img { margin: 0.83em 0; vertical-align: bottom; }

    table { margin: 0.5em; }

    textarea { vertical-align: top; }
{% endhighlight %}

The following values will restore behaviour of 2.2 versions:

{% highlight php %}

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

## Prior to mPDF 2.2

The original default styles (mPDF &lt;=2.0) were extensively changed with improvements in CSS handling in mPDF 2.0 (this particularly changed table borders, and table cell alignment, as well as a serif default font-family).

In order to allow backwards compatibilty, a secondary "stylesheet" - a variable $defaultCSS2 was introduced in mPDF 2.0 - and the option to load this on intiating mPDF:

{% highlight php %}
<?php

$mpdf->useDefaultCSS2 = true;
{% endhighlight %}

## Secondary default CSS values used mPDF 2.0 - 2.1

{% highlight php %}
<?php

var $defaultCSS2 = array(

    'BODY' => array(

        'FONT-FAMILY' => 'sans-serif',

    ),

    'A' => array(

        'COLOR' => '#000066',

        'TEXT-DECORATION' => '',

    ),

    'TABLE' => array(

        'BORDER-COLLAPSE' => 'collapse',

    ),

    'THEAD' => array(

        'VERTICAL-ALIGN' => 'bottom',

        'TEXT-ALIGN' => 'center',

        'FONT-WEIGHT' => 'bold',

    ),

    'TFOOT' => array(

        'TEXT-ALIGN' => 'center',

        'FONT-WEIGHT' => 'bold',

    ),

    'TH' => array(

        'TEXT-ALIGN' => '',

        'PADDING-LEFT' => '0.35em',

        'PADDING-RIGHT' => '0.35em',

        'PADDING-TOP' => '0.35em',

        'PADDING-BOTTOM' => '0.35em',

        'VERTICAL-ALIGN' => 'top',

    ),

    'TD' => array(

        'PADDING-LEFT' => '0.35em',

        'PADDING-RIGHT' => '0.35em',

        'PADDING-TOP' => '0.35em',

        'PADDING-BOTTOM' => '0.35em',

        'VERTICAL-ALIGN' => 'top',

    ),

    'IMG' => array(

        'MARGIN' => '0.2em',

        'VERTICAL-ALIGN' => 'middle',

    ),

);
{% endhighlight %}

