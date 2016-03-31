---
layout: page
title: Line-height
parent_title: What Else Can I Do
permalink: /what-else-can-i-do/line-height.html
modification_time: 2015-08-05T12:00:05+00:00
---



<p>The line-height of text can be controlled using the CSS property <code>line-height</code> (since mPDF 4). This used a fixed value for the line-height when <code>normal</code> was specified (the default CSS value) -&nbsp; set by the configurable variable <code>normalLineheight</code>. It also used a fixed proportion to determine the position of the text baseline (non-configurable).</p>
<p>Form mPDF 6, you can (optionally) use font metrics derived from each font file to:</p>
<ul>
<li>Determine the height of a line when line-height is set to 'normal'</li>
<li>Determine the glyph baseline (previously a fixed value)</li>
</ul>
<p>Options are set by configurable variables in the <code>config.php</code> file:</p>
<p>Default settings in mPDF versions 6 - recommended especially for complex scripts with marks used above or below characters:</p>
<ul> </li>
</ul>

{% highlight php %}
<?php

$this->useFixedNormalLineHeight = false;

$this->useFixedTextBaseline = false;

$this->adjustFontDescLineheight = 1.14;
{% endhighlight %}

<p>Settings to be backwards compatible with mPDF versions &lt; 6:</p>
<ul> </li>
</ul>

{% highlight php %}
<?php

$this->useFixedNormalLineHeight = true;

$this->useFixedTextBaseline = true;

$this->normalLineheight = 1.33;
{% endhighlight %}

<h3></h3>
<p>Using the font metrics will give approximately the same result as the fixed value for many standard Latin script fonts e.g. DejaVu Sans Condensed:</p>
<p>However, for some fonts the normal line-height using font metrics will be significantly taller, to account for the design of the font glyphs e.g. Khmer font:</p>
<p>For more information on how complex normal lineheights are, see Eric Meyers' website: <a href="http://meyerweb.com/eric/thoughts/2008/05/06/line-height-abnormal/">http://meyerweb.com/eric/thoughts/2008/05/06/line-height-abnormal/</a> and <a href="http://typophile.com/node/13081">http://typophile.com/node/13081</a></p>
<h2>CSS control of line-height</h2>
<p>From mPDF v 6.0 there are new controls for line-height using draft CSS3 properties. These can be set on all block level elements (P, DIV etc) and tables (TABLE/TD/TH).</p>
<p><b>line-stacking-strategy</b> = <code>inline-line-height | block-line-height | max-height | grid-height</code></p>
<ul>
<li><code>inline-line-height</code> - [default] lineheight is initially calculated from the block-level font[-size]; the height is expanded by any inline content, including the calculated lineheight of that inline content;</li>
<li><code>block-line-height</code> - lineheight is fixed as the lineheight of the block-level font[-size];</li>
<li><code>max-height</code> - lineheight is initially calculated from the block-level font; the height is expanded by any inline content, EXCLUDING the calculated lineheight of that inline content;</li>
<li><code>grid-height</code> - lineheight is initially calculated from the block-level font; the height is expanded - AS MULTIPLES OF INITIAL LINEHEIGHT - by any inline content, EXCLUDING the calculated lineheight of that inline content;</li>
</ul>
<p>Note: XSL has a similar property with the same name, which uses different but equivalent values: <code>line-height</code> instead of <code>inline-line-height</code>, <code>font-height</code> instead of <code>block-line-height</code>. It also uses <code>max-height</code>. The value <code>grid-height</code> is new to the CSS3 property.</p>
<p><b>line-stacking-shift</b> = <code>consider-shifts | disregard-shifts </code></p>
<p>This property determines whether to include or disregard the adjusted top- and bottom-edge of any characters that have a baseline-shift (e.g. superscript) when calculating lineheight.</p>
<p>Note: XSL has a similar property with a different name: <code>line-height-shift-adjustment</code> which uses the same values.</p>
<p>For more details see the <a href="http://www.w3.org/TR/css3-linebox/#InlineBoxHeight">CSS3 draft specification</a>.</p>
<h2>Note for Advanced users</h2>
<p>There are actually three possible metrics that can be used in a TrueType font file. The differences are summed up quite well in this article at <a href="http://typophile.com/node/13081">http://typophile.com/node/13081</a>. mPDF will by default use the usWinAscent and usWinDescent values to determine a 'normal' line-height, with two variations:</p>
<ul>
<li>if either the usWinAscent or usWinDescent are greater than the font bounding box (yMin yMax), then the values are reduced to equal the yMin/yMax values. NB this works as a fix with Myanmar Text (Windows 8 version) to give a line-height normal that is equivalent to that produced in browsers.</li>
<li>if the USE_TYPO_METRICS bit is set on fsSelection (OS/2 table), this is telling the font to use the sTypo values and not the usWinAscent values. NB this works as a fix with Cambria Math font to give a normal line-height; at present, this is the only font I have found with this bit set; although note that MS WordPad and Windows FireFox browser use the big line-height from usWinAscent, whilst MS Word 2007 observes the fSelection value.</li>
</ul>
<p>You can change the font metrics used by mPDF, by editing the defined constant (<code>_FONT_DESCRIPTOR</code>) at the top of the <span>mpdf.php</span> file:</p>
<ul>
<li>'<code>winTypo</code>' uses sTypoAscender etc from the OS/2 table and is the one officially recommended - BUT</li>
<li>'<code>win</code>' use usWinAscent etc from OS/2 and in practice seems to be used most commonly in Windows environment; this is the default in mPDF;</li>
<li>'<code>mac</code>' uses Ascender etc from hhea table, and may be used to give results consistent with a Mac/OSX environment.</li>
</ul>
<p>Finally, you can override values for Ascent, Descent and Leading for any specific font, by setting values in <code>config_font.php</code> e.g.</p>

{% highlight php %}
"cambriamath" => array( 

    'R' => "cambria.ttc",

    'useOTL' => 0xFF,

    'TTCfontID' => array( 'R' => 2, ),

    'Ascent' => 950,

    'Descent' => -222,

    'Leading' => 0,

),
{% endhighlight %}

<p>Note - The same values are used for all styles of the font-family. Descent values should be negative. All values should be given using a 1000 units per em scale, regardless of the UnitsPerEm used in the font design.</p>
<h2>Notes</h2>
<p>Remember that line-height for a TABLE has a default value (1.2) set in the <code>config.php defaultCSS</code>. This is left in for backwards compatability. You can change this value to 'normal' for results consistent with most browsers.</p>
<p>Line-height in a &lt;textarea&gt; is fixed and defined in <code>classes/mpdfform.php</code> (= 1.2)</p>
<p>Details of the font metrics can be seen by inspecting the temporary font files e.g. <code>/ttfontdata/[fontname].mtx.php</code>.</p>
