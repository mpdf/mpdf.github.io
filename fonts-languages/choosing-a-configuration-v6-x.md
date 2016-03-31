---
layout: page
title: Choosing a configuration v6.x
parent_title: Fonts & Languages
permalink: /fonts-languages/choosing-a-configuration-v6-x.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 6.0)</p>
<p>In mPDF there are a number of ways to configure your set-up. There is often a trade-off between file size, processing speed, appearance (support for different fonts), and reliability (i.e. ensuring that text is always displayed, at least in some form).</p>
<p>Some of the things you can change are:</p>
<ul>
<li>the initial parameter used to call mPDF e.g. <code>$mpdf=new mPDF('c')</code></li>
<li>configuration variables set in <span class="filename">config.php</span> see <a href="/reference/mpdf-variables/overview.html">mPDF Variables - Overview</a>

(many of those configuration variable can also be set at runtime on a 'per-script' basis)</li>
<li>font details in <span class="filename">config_fonts.php</span></li>
<li>language/font details in <span class="filename">config_lang2fonts.php</span></li>
<li>initial style settings in <span class="filename">config.php</span> or <span class="filename">mpdf.css</span></li>
</ul>
<h3>Main choices</h3>
<p>Some of the major considerations are:</p>
<ul>
<li>whether to restrict the document to core non-embedded fonts</li>
<li>whether, or how, to subset embedded fonts</li>
<li>handling of languages which require special fonts, including automatic font selection and character substitution</li>
</ul>
<h2>Core non-embedded fonts</h2>
<p>PDF files have certain standard fonts: Arial/Helvetica, Times and Courier in the win-1252 character set, and&nbsp;Zapfdingbats and Symbol character sets. These fonts should be available to any PDF reading program, and do not need to be embedded in the PDF document.</p>
<p><i>Advantages:</i> Small file size, fast processing, small memory usage.</p>
<p><i>Disadvantages:</i> Limited choice of fonts for appearance. Will not display characters which are not in the <a href="/reference/codepages-glyphs/win-1252.html">win-1252</a>&nbsp; <a href="/reference/codepages-glyphs/symbols-adobe.html">Symbols</a>, or&nbsp; <a href="/reference/codepages-glyphs/zapfdingbats-adobe.html">Dingbats</a> codepages (suitable for most Western European languages).</p>
<p>To use core fonts only, use 'c' for the initial parameter:</p>

{% highlight php %}
<?php

$mpdf = new mPDF('c');
{% endhighlight %}

<h2>Embedded Unicode fonts</h2>
<p>The alternative (the default setup) uses TrueType Unicode fonts, and the only limitation of characters to display is determined by the font files themselves.</p>
<h3>Subsetting fonts</h3>
<p>Fonts with good coverage of all characters you may require can be very large. If you embed the whole font file in the PDF document, the file can become very large - especially if you use a number of fonts. mPDF can embed subsets of the fonts i.e. just including the characters used in the PDF document.</p>
<p><i>Advantages of subsetting:</i> Manageable file size (typically between 20-200kB)</p>
<p><i>Disadvantages of subsetting:</i> Increase in processing time and memory usage (not always), as mPDF has to rebuild font files for each document.</p>
<p>By default, mPDF will embed subsets of fonts if less than 30% of the characters contained in the font are used in the document; otherwise it will embed the whole font file. You can override this by changing the configurable variable <code>$this-&gt;percentSubset</code></p>
<p>For backwards compatibility, you can use 's'&nbsp; in the initial parameter to override the <span class="filename">config.php</span> settings and force subsetting of all fonts e.g.</p>

{% highlight php %}
<?php

$mpdf = new mPDF('s');
{% endhighlight %}

<h3>Using core non-embedded fonts in a Unicode document</h3>
<p>If your document uses Unicode fonts as above, you can force mPDF to use the core (non-embedded) PDF fonts in parts of the document by selecting the fontnames: <code>chelvetica</code>, <code>ccourier</code> and <code>ctimes</code> e.g.</p>

{% highlight php %}
<p style="font-family:chelvetica">This paragraph will use core fonts</p>
{% endhighlight %}

<p>You could force mPDF to always use core fonts when Arial/Helvetica/Courier are specified, by editing the font translation variable <code>$this-&gt;fonttrans</code> in <span class="filename">config_fonts.php</span> e.g.:</p>

{% highlight php %}
<?php

$this->fonttrans = array(

 'arial' => 'chelvetica',

 'helvetica' => 'chelvetica',

 'timesnewroman' => 'ctimes',

 'times' => 'ctimes',

 'couriernew' => 'ccourier',

 'courier' => 'ccourier',
{% endhighlight %}

<h2>Languages/Scripts which require special fonts</h2>
<p>Most browsers / PC applications automatically select / substitute appropriate fonts when required. mPDF does not do this by default (additional processing resources required). there are two situations when you need to consider the method of font selection:</p>
<ul>
<li>the text contains characters which are not covered by the initial font selected</li>
<li>the text contains complex script requiring special treatment i.e. <a href="/fonts-languages/opentype-layout-otl.html">OpenType layout (OTL)</a></li>
</ul>
<p>The DejaVu fonts distributed with mPDF contain characters (glyphs) to display most Western and Eastern European languages, Cyrillic text, Baltic languages, Turkish, and Greek. Languages which usually need special consideration are: CJK (chinese - japanese - korean) languages, Indic languages, Vietnamese, Thai, and Arabic languages. With these, you need to tell mPDF to select a suitable font.</p>
<p>There are several different ways to do this:</p>
<p>1) Write your HTML code to specify the exact fonts needed:</p>

{% highlight php %}
<p style="font-family: Garuda">เป็นมนุษย์สุดประเสริฐเลิศคุณค่า</p>

<p style="font-family: BIG5">仝娃阿哀愛挨姶</p>

<p style="font-family: sun-exta">仝娃阿哀愛挨姶</p>

<p style="font-family: 'XB Riyaz'">البرادعی البرادعی</p>
{% endhighlight %}

<p>2) Write your HTML code using the <code>lang</code> attribute to define the language.&nbsp;</p>

{% highlight php %}
<p lang="th">เป็นมนุษย์สุดประเสริฐเลิศคุณค่า</p>

<p lang="zh-CN">仝娃阿哀愛挨姶</p>

<p lang="ar">البرادعی البرادعی</p>

<p lang="hi">पहला पन्ना</p>
{% endhighlight %}

<p>This needs to be used in conjunction with either:</p>
<ul>
<li><code>autoLangToFont</code></li>
<li>CSS stylesheet using the <code>:lang</code> selector<code>

</code></li>
</ul>
<p>3) Use <code>autoScriptToLang</code> to mark up HTML text by inserting the <code>lang</code> attribute, based on the Unicode script block in question, and configurable values in <code>config_script2lang.php</code></p>

{% highlight php %}
<?php

$mpdf->autoScriptToLang = true;
{% endhighlight %}

<p>As for (2) this needs to be used in conjunction with either:</p>
<ul>
<li><code>autoLangToFont</code></li>
<li>CSS stylesheet using the <code>:lang</code> selector</li>
</ul>
<p>4) Use <a href="/reference/mpdf-variables/usesubstitutions.html">$useSubstitutions</a> to use character susbstitution. mPDF will inspect every character in the HTML code, and if the character is not represented in the specified font, it will try to substitute it from one of the fonts defined in <code>$this-&gt;backupSubsFont</code> in <span class="filename">config_fonts.php</span>.</p>

{% highlight php %}
$this->backupSubsFont = array('dejavusanscondensed','arialunicodems');
{% endhighlight %}

<h2>Which method should I use?</h2>
<h3>Individually authored pages</h3>
<p>If you are authoring a document in a common language which contains sections of text using special languages, the ideal method to use is 1) or 2).</p>
<h3>Multilingual documents 'on-the-fly'</h3>
<p>If you are creating a PDF document from a page such as this web-page or a forum board which is likely to contain some special language text, and it is not possible to mark-up the special language text, you should use method 3).</p>
<p>If the document is mainly in a common language and may contain only occasional words or characters, the alternative is to use method 4) character substitution.</p>
<p>It is possible to use method 4) together with 1) 2) or 3), to ensure that all special characters are displayed.</p>
<h2>See Also</h2>
<ul>
<li class="manual_boxlist"><a href="/reference/mpdf-functions/annotation.html">RTL &amp; Bidirectional text</a></li>
</ul>
<p>&nbsp;</p>
</div>
</div>

