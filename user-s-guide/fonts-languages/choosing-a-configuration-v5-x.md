---
layout: page
title: Choosing a configuration v5.x
parent_title: Fonts & Languages
permalink: /user-s-guide/fonts-languages/choosing-a-configuration-v5-x.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF >= 5.0)</p>
<p>In mPDF there are a number of ways to configure your set-up. There is often a trade-off between file size, processing speed, appearance (support for different fonts), and reliability (i.e. ensuring that text is always displayed, at least in some form).</p>
<p>Some of the things you can change are:</p>
<ul>
<li>the initial parameter used to call mPDF e.g. `$mpdf = new mPDF('c')`</li>
<li>configuration variables set in <span class="filename">config.php</span> see <a href="/reference/mpdf-variables/overview.html">mPDF Variables - Overview</a>

(many of those configuration variable can also be set at runtime on a 'per-script' basis)</li>
<li>font details in <span class="filename">config_fonts.php</span></li>
<li>language/font details in <span class="filename">config_cp.php</span></li>
<li>initial style settings in <span class="filename">config.php</span> or <span class="filename">mpdf.css</span></li>
</ul>
<h3>Main choices</h3>
<p>Some of the major considerations are:</p>
<ul>
<li>whether to restrict the document to core non-embedded fonts</li>
<li>whether, or how, to subset embedded fonts</li>
<li>handling of languages which require special fonts, including auto_font and character substitution</li>
</ul>
<h2>Core non-embedded fonts</h2>
<p>PDF files have certain standard fonts: Arial/Helvetica, Times and Courier in the win-1252 character set, and Zapfdingbats and Symbol character sets. These fonts should be available to any PDF reading program, and do not need to be embedded in the PDF document.</p>
<p>*Advantages:* Small file size, fast processing, small memory usage.</p>
<p>*Disadvantages:* Limited choice of fonts for appearance. Will not display characters which are not in the <a href="/reference/codepages-glyphs/win-1252.html">win-1252</a>  <a href="/reference/codepages-glyphs/symbols-adobe.html">Symbols</a>, or  <a href="/reference/codepages-glyphs/zapfdingbats-adobe.html">Dingbats</a> codepages (suitable for most Western European languages).</p>
<p>To use core fonts only, use 'c' for the initial parameter:</p>

{% highlight php %}
<?php

$mpdf = new mPDF('c');
{% endhighlight %}

<h2>Embedded Unicode fonts</h2>
<p>The alternative (the default setup) uses TrueType Unicode fonts, and the only limitation of characters to display is determined by the font files themselves.</p>
<h3>Subsetting fonts</h3>
<p>Fonts with good coverage of all characters you may require can be very large. If you embed the whole font file in the PDF document, the file can become very large - especially if you use a number of fonts. mPDF can embed subsets of the fonts i.e. just including the characters used in the PDF document.</p>
<p>*Advantages of subsetting:* Manageable file size (typically between 20-200kB)</p>
<p>*Disadvantages of subsetting:* Increase in processing time and memory usage (not always), as mPDF has to rebuild font files for each document.</p>
<p>By default, mPDF will embed subsets of fonts if less than 30% of the characters contained in the font are used in the document; otherwise it will embed the whole font file. You can override this by changing the configurable variable `$this->percentSubset`</p>
<p>For backwards compatibility, you can use '-s' or 's'  in the initial parameter to override the <span class="filename">config.php</span> settings and force subsetting of all fonts e.g.</p>

{% highlight php %}
<?php

$mpdf = new mPDF('s');

$mpdf = new mPDF('ar-s');  // also defining arabic language code

$mpdf = new mPDF('utf8-s'); // for backwards compatibility - the utf-8 does nothing
{% endhighlight %}

<h3>Using core non-embedded fonts in a Unicode document</h3>
<p>If your document uses Unicode fonts as above, you can force mPDF to use the core (non-embedded) PDF fonts in parts of the document by selecting the fontnames: `chelvetica`, `ccourier` and `ctimes` e.g.</p>

{% highlight php %}
<?php

&lt;p style="font-family:chelvetica"&gt;This paragraph will use core fonts&lt;/p&gt;
{% endhighlight %}

<p>You could force mPDF to always use core fonts when Arial/Helvetica/Courier are specified, by editing the font translation variable `$this->fonttrans` in <span class="filename">config_fonts.php</span> e.g.:</p>

{% highlight php %}
<?php

$this->fonttrans = array(

 'arial' =&gt; 'chelvetica',

 'helvetica' =&gt; 'chelvetica',

 'timesnewroman' =&gt; 'ctimes',

 'times' =&gt; 'ctimes',

 'couriernew' =&gt; 'ccourier',

 'courier' =&gt; 'ccourier',
{% endhighlight %}

<h2>Languages which require special fonts</h2>
<p>Indic languages always require special handling (cf. <a href="/user-s-guide/fonts-languages/indic-fonts-v5-x.html">Indic fonts</a>). Other than this, whether you need to do anything special is determined by the choice of fonts you use in the document, and whether they contain the necessary characters to display your text. The DejaVu fonts distributed with mPDF will usually display most Western and Eastern European languages, Cyrillic text, Baltic languages, Turkish, and Greek. Languages which usually need special consideration are: CJK (chinese - japanese - korean) languages, Vietnamese, Thai, and Arabic languages. With these, you need to tell mPDF to select a suitable font.</p>
<p>There are a number of different ways to do this:</p>
<p>1) Write your HTML code to specify the exact fonts needed:</p>

{% highlight php %}
<?php

`&lt;p style="font-family: Garuda"&gt;เป็นมนุษย์สุดประเสริฐเลิศคุณค่า&lt;/p&gt;

``&lt;p style="font-family: BIG5"&gt;仝娃阿哀愛挨姶&lt;/p&gt;

``&lt;p style="font-family: sun-exta"&gt;仝娃阿哀愛挨姶&lt;/p&gt;`

`&lt;p ``style="font-family: 'XB Riyaz'"``&gt;البرادعی البرادعی&lt;/p&gt;`

`&lt;p ``style="font-family: ind_hi_1_001"``&gt;`<span class="l">पहला पन्ना</span>`&lt;/p&gt;`
{% endhighlight %}

<p>2) Use the `lang` attribute to define the language. This causes mPDF to use a font as specified in the <span class="filename">config_cp.php</span> file. The current font-family will be used if it is available in the list defined as `$unifonts`, otherwise the first font specified in the `$unifonts` list will be selected.</p>

{% highlight php %}
<?php

`&lt;p lang="th"&gt;เป็นมนุษย์สุดประเสริฐเลิศคุณค่า&lt;/p&gt;

``&lt;p lang="zh-CN"&gt;仝娃阿哀愛挨姶&lt;/p&gt;`

`&lt;p lang="ar"&gt;البرادعی البرادعی&lt;/p&gt;`

`&lt;p lang="hi"&gt;`<span class="l">पहला पन्ना</span>`&lt;/p&gt;`
{% endhighlight %}

<p>3) If you set the language in the initial call to mPDF i.e.</p>

{% highlight php %}
<?php

`$mpdf = new mPDF('th');

``$mpdf = new mPDF('zh-CN');`  // You can append +aCJK or -aCJK

`$mpdf = new mPDF('ar');

``$mpdf = new mPDF('hi');`
{% endhighlight %}

<p>then mPDF will restrict the fonts you can use for the whole document`. `Any of the fonts defined in `$unifonts` can be used:</p>

{% highlight php %}
<?php

`// If config_cp.php defines:

CASE "th":  $spacing = "C"; 

$unifonts = "garuda,garudaB,garudaI,garudaBI,norasi,norasiB,norasiI,norasiBI"; 

break;

`
{% endhighlight %}

<p>These paragraphs will appear in Garuda (a sans-serif font) and Norasi (serif) respectively:</p>

{% highlight php %}
<?php

`&lt;p style="font-family:sans"&gt;เป็นมนุษย์สุดประเสริฐเลิศคุณค่า&lt;/p&gt;

``&lt;p style="font-family:serif"&gt;เป็นมนุษย์สุดประเสริฐเลิศคุณค่า&lt;/p&gt;`
{% endhighlight %}

<p>4) You can also set the language for the whole document by setting:</p>

{% highlight php %}
<?php

`&lt;body lang="th"&gt;

``&lt;body lang="zh-CN"&gt;`

`&lt;body lang="ar"&gt;

``&lt;body lang="hi"&gt;`
{% endhighlight %}

<p>5) Use <a href="/reference/mpdf-functions/setautofont.html">SetAutoFont()</a> to automatically detect these languages. AutoFont inspects the HTML code and inserts a `span` element to mark text which is auto-detected e.g.</p>

{% highlight php %}
<?php

$mpdf-&gt;SetAutoFont(AUTOFONT_ALL);
{% endhighlight %}

{% highlight php %}
<?php

`&lt;p&gt;This is Thai text: ``เป็นมนุษย์สุดประเสริฐเลิศคุณค่า``&lt;/p&gt;`
{% endhighlight %}

<p>becomes:</p>

{% highlight php %}
<?php

`&lt;p&gt;This is Thai text: &lt;span lang="th" class="lang_th"&gt;``เป็นมนุษย์สุดประเสริฐเลิศคุณค่า``&lt;/span&gt;&lt;/p&gt;`
{% endhighlight %}

<p>The `lang` attribute means that mPDF will select a font as described above in 2). You can also use CSS stylesheets to apply additional styles e.g. changing the font-size.</p>
<p>Do not use AutoFont as well as methods (1) - (4).</p>
<p>6) Use <a href="/reference/mpdf-variables/usesubstitutions.html">$useSubstitutions</a> to use character susbstitution. mPDF will inspect every character in the HTML code, and if the character is not represented in the current font, it will try to substitute it from one of the fonts defined in `$this->backupSubsFont` in <span class="filename">config_fonts.php</span>.</p>

{% highlight php %}
<?php

`$this->backupSubsFont = array('dejavusanscondensed','norasi');`
{% endhighlight %}

<h2>Which method should I use?</h2>
<p>Let us call Western and Eastern European languages, Cyrillic text, Baltic languages, Turkish, and Greek - **common languages**, and CJK and Indic languages, Vietnamese, Thai, and Arabic - **special languages**.</p>
<h3>Individually authored pages</h3>
<p>If you are authoring a document in a common language which contains sections of text using special languages, the ideal method to use is 1) or 2).</p>
<h3>Document in a Special language</h3>
<p>If you are writing documents entirely in a special language, you should use method 3) or 4), but you will be restricted to selecting from the fonts defined in <span class="filename">config_cp.php</span></p>
<h3>Multilingual documents 'on-the-fly'</h3>
<p>If you are creating a PDF document from a page such as this web-page or a forum board which is likely to contain some special language text, and it is not possible to mark-up the special language text, you should use method 5) AutoFont.</p>
<p>If the document is mainly in a common language and may contain only occasional words or characters, the alternative is to use method 6) character substitution. This will be slower than 5) if there are substantial sections in special languages.</p>
<p>It is possible to use methods 5) and 6) together, to ensure that all special characters are displayed.</p>
<h3>Multilingual website</h3>
<p>If you are using a multilingual website (Wiki?) which has document in different languages, but where each page will be in only one language, and you have a common stylesheet etc. you can use method 3). Use the language code (en-GB, zh-CN) from the website page selected to set up the mPDF class.</p>
<p>If you want to use core non-embedded fonts when possible (for Western European languages), you can add '-x' to the language string. This will select core fonts only when the language string is appropriate (as defined in <span class="filename">config_cp.php</span>) e.g.</p>

{% highlight php %}
<?php

$mpdf = new mPDF('en-GB-x');  // will only use core non-embedded fonts

$mpdf = new mPDF('de-x');     // will only use core non-embedded fonts (German)

$mpdf = new mPDF('ar-x');     // behaves as though ('ar') called (Arabic)

$mpdf = new mPDF('ru-x');     // behaves as though ('ru') called (Russian)
{% endhighlight %}

<h2>See Also</h2>
<ul>
<li class="manual_boxlist"><a href="/reference/mpdf-functions/annotation.html">RTL &amp; Bidirectional text</a></li>
<li class="manual_boxlist"><a href="/reference/mpdf-functions/setautofont.html">SetAutoFont()</a> - Automatically detect language in the input HTML text and use appropriate fonts</li>
</ul>
<p>There is a useful list of language/country codes at: <a href="http://www.i18nguy.com/unicode/language-identifiers.html">http://www.i18nguy.com/unicode/language-identifiers.html</a>.</p>
</div>
</div>

