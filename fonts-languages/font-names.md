---
layout: page
title: Font names
parent_title: Fonts & Languages
permalink: /fonts-languages/font-names.html
modification_time: 2015-08-05T11:59:28+00:00
---

## CSS font-family name

Every font family has a name which is defined in the font file. This is the name by which your computer OS registers and recognises the font family.

This is also the name used in CSS e.g.

{% highlight php %}


{% endhighlight %}

## mPDF font-family name

<p>This is the name used by mPDF internally to process fonts. This could be anything you like, but by default mPDF will convert CSS font-family names by removing any spaces and changing to lowercase. Reading the CSS name above, mPDF will look for a "mPDF font-family name" of 'trebuchetms'.

This means that this will also work:

{% highlight php %}


{% endhighlight %}

<p>Next it will look for a translation in `$this->fonttrans` in the <span class="filename">config_fonts.php</span> file. Imagine that we also wished to recognise 'Trebuchet', we would add:

{% highlight php %}
<?php

$this->fonttrans = array(

...

    'trebuchet' => 'trebuchetms',

...

)
{% endhighlight %}

mPDF font-family names should therefore always be lower-case and contain no spaces. When mPDF needs to refer to a specific variant (bold, italic etc.) it will use the mPDF font-family name (lowercase) followed by 'B', 'I', or 'BI' (uppercase). The regular/normal Trebuchet MS will be 'trebuchetms', and the bold variant will be referred to as 'trebuchetmsB'.

These mPDF font names are used in other places:

<ul>
<li>all the other configurable variables in the <span class="filename">config_fonts.php</span> use the mPDF font-family name</li>
<li>use the mPDF font name in the <span class="filename">config_cp.php</span> file to make it selectively available in certain languages.</li>
<li>if used in the PHP script e.g. $mpdf = new mPDF('','','','trebuchetms');</li>
</ul>

## Font file name

To make a font available to mPDF, you need to specify the Truetype .ttf font files for each variant.

These should be defined in <span class="filename">config_fonts.php</span> in the array:

{% highlight php %}
<?php

$this->fontdata = array(

...

    "trebuchetms" => array(

        'R' => "trebuc.ttf",

        'B' => "trebucbd.ttf",

        'I' => "trebucit.ttf",

        'BI' => "trebucbi.ttf",

        ),

...

)
{% endhighlight %}

Each font-family must have a Regular ['R'] file defined - the others (['B']old, ['I']talic, ['BI']bold-italic) are optional.

mPDF will try to locate the font-file. If you have defined `_MPDF_SYSTEM_TTFONTS` at the top of the <span class="filename">config_fonts.php</span> file, it will first look for the font-file there. This is useful if you are running mPDF on a computer which already has a folder with TTF fonts in (e.g. on Windows)

If the font-file is not there, or `_MPDF_SYSTEM_TTFONTS` is not defined, mPDF will look in the folder <span class="filename">/[your_path_to_mpdf]/ttfonts/</span>

Note that the font-file names are case-sensitive and can contain capitals.

