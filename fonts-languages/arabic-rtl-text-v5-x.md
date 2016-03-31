---
layout: page
title: Arabic (RTL) text v5.x
parent_title: Fonts & Languages
permalink: /fonts-languages/arabic-rtl-text-v5-x.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">

<div class="alert alert-info" role="alert"><b>Note:</b> Handling of RTL (right-to-left) languages was significantly rewritten for mPDF v5.1</div>
<h3>Document Directionality - RTL versus LTR</h3>
<p>The document has a baseline direction which is <acronym title="Left-to-Right document, used for most langauges">LTR</acronym> or <acronym title="Right-to-Left document, used for Hebrew and Arabic languages">RTL</acronym>; this determines:</p>
<ul>
<li>text alignment in blocks for which text-align has not been specifically set</li>
<li>layout of mirrored page-margins, columns, ToC and Indexes, headers / footers</li>
</ul>
<p>This base/document directionality is <acronym title="Left-to-Right document, used for most langauges">LTR</acronym> by default, and can be set by any of the following:</p>

{% highlight php %}
<?php

$mpdf->SetDirectionality('rtl');

<html dir="rtl"> or <html style="direction: rtl;">

<body dir="rtl"> or <body style="direction: rtl;">
{% endhighlight %}

<p>Base direction is an inherited CSS property, so will affect all content, unless direction is specified elswhere.</p>
<h3>Block-level Directionality</h3>
<p>Direction can be set for any HTML block elements e.g. &lt;div&gt;&lt;p&gt;&lt;table&gt;&lt;ul&gt; etc using:</p>

{% highlight php %}
[HTML]

<div style="direction: rtl;">

or

[CSS stylesheet]

div.right { direction: rtl; }
{% endhighlight %}

<p>Block-level direction <i>may</i> affect text alignment, and will also influence text reversal in <acronym title="Right-to-Left document, used for Hebrew and Arabic languages">RTL</acronym> text.</p>
<p>Note that margin/padding are NOT reversed by direction i.e. left-margin will still be left-margin in <acronym title="Right-to-Left document, used for Hebrew and Arabic languages">RTL</acronym> state.</p>
<h3>Text alignment</h3>
<p>The default value for text-align is "a nameless value which is dependent on direction". However, once text-align is specified, it is respected and inherited by all descendants.</p>
<h3>Directionality in Tables</h3>
<ul>
<li>direction can only be set on the top-level element of nested lists</li>
<li>direction can only be set on &lt;table&gt;, NOT on &lt;thead&gt;&lt;tbody&gt;&lt;td&gt; etc.</li>
<li>nested tables CAN have different directions</li>
</ul>
<h3>Text Bidirectionality</h3>
<p>mPDF analyses any mixed text which contains <acronym title="Right-to-Left document, used for Hebrew and Arabic languages">RTL</acronym> text. The text between HTML tags is divided into "chunks" of <acronym title="Left-to-Right document, used for most langauges">LTR</acronym> and <acronym title="Right-to-Left document, used for Hebrew and Arabic languages">RTL</acronym> text.</p>
<p><acronym title="Right-to-Left document, used for Hebrew and Arabic languages">RTL</acronym> text chunks are reversed (both letter- and word-order).</p>
<p>If (and only if) the direction of the block is <acronym title="Left-to-Right document, used for most langauges">LTR</acronym> then the order of the chunks is reversed as well so that the sentence order is <acronym title="Right-to-Left document, used for Hebrew and Arabic languages">RTL</acronym>.</p>
<p>This process when <acronym title="Right-to-Left document, used for Hebrew and Arabic languages">RTL</acronym> arabic characters are present is fully automatic and unconfigurable. &lt;bdo&gt; etc has no effect.</p>
<p>However enclosing text in silent tags can sometimes help by altering the way the text is broken up into chunks to process e.g.:</p>

{% highlight php %}
english text <span>[arabic text]</span> english text
{% endhighlight %}

<h2>Fonts</h2>
<p>Arabic is a complex script requiring processing before output. However any appropriate font can be used - as long as it contains the characters in Unicode blocks 'Arabic Presentation Forms' A and B (U+FB50 - U+FDFF, U+FE70 - U+FEFE). Note that quite a large number of fonts contain the isolated characters but not the presentation forms.</p>
<p>2 fonts are bundled with mPDF: XB Zar and XB Riyaz. These are 2 of a number of fonts available from <a href="http://wiki.irmug.com/index.php/X_Series_2">http://wiki.irmug.com/index.php/X_Series_2</a>.</p>

<div class="alert alert-info" role="alert"><b>Note:</b> The script handling Arabic text (RTL) was rewritten in mPDF 5.5 with improved support for Pashto/Sindhi/Urdu/Kurdish, especially for joining characters and added new presentation forms.</div>
<h3>Non-unicode characters</h3>
<p>Some characters in Pashto/Sindhi/Urdu/Kurdish do not have Unicode values for the final/initial/medial forms of the characters. However, some fonts include glyphs for these characters "un-mapped" to Unicode (including XB Zar and XB Riyaz, which are bundled with mPDF).</p>
<p>By editing <span class="filename">config_fonts.php</span> and adding to appropriate fonts:</p>

{% highlight php %}
'unAGlyphs' => true,
{% endhighlight %}

<p>this will force mPDF to use unmapped glyphs. It requires the font file to include a Format 2.0 POST table which references the glyphs by name as e.g. uni067C.med or uni067C.medi</p>
<p>XB Riyaz, XB Zar, Arabic Typesetting (MS), Arial (MS) all contain this table. NB If you want to know if a font file is suitable, you can open a .ttf file in a text editor and search for "uni067C.med" - if it exists, it may work!</p>
<p>Using "unAGlyphs" forces subsetting of fonts, and will not work with SIP/SMP fonts (using characters beyond the Unicode BMP Plane).</p>
<p>mPDF maps these characters to part of the Private Use Area allocated by Unicode U+F500-F7FF. This could interfere with correct use if the font already utilises these codes (unlikely).</p>
<h2>Alef Maksura</h2>
<p>Detailed note on the Alef Maksura for advanced users:

U+0649 Alef Maksura only normally appears at the end of a word (in Arabic)

Initial and Medial forms exist in Unicode as FBE8 and FBE9 but are not in most fonts

So the final form is set in mPDF to show as FEF0; Initial and medial forms are shown as isolated/final, so that it does at least display.

It seems that Initial and Medial forms are used in Koranic text.

I have left options encoded in <span class="function">function InitArabic()</span> if you want to alter - to make it double-joining, it also needs to be added to <span class="parameter">$arabPrevLink</span> as "\xd9\x89"</p>

<div class="alert alert-info" role="alert"><b>Note:</b> mPDF deletes Unicode characters: U+200C,U+200D,U+200E,U+200F zero-width joiner/non-joiner, LTR and RTL marks so they will not appear - even though some fonts contain glyphs for these characters.</div>
<h2>See Also</h2>
<ul>
<li class="manual_boxlist"><a href="/reference/mpdf-variables/uselang.html">useLang</a> - Specify whether to recognise and support the HTML attribute lang</li>
<li class="manual_boxlist"><a href="/reference/mpdf-functions/setautofont.html">SetAutoFont()</a> - Use AutoFont to auto-detect text language in HTML input</li>
<li class="manual_boxlist"><a href="/reference/mpdf-variables/autofontgroupsize.html">autoFontGroupSize</a> - Specify the text chunk size to group when autodetecting text language</li>
<li class="manual_boxlist"><a href="index0c23.html?tid=346">disableMultilingualJustify</a> - Specify whether to disable text justification in multilingual documents</li>
<li class="manual_boxlist"><a href="/fonts-languages/lang-v5-x.html">lang</a> - Information on mPDF support for the HTML attribute lang</li>
</ul>
</div>
</div>

