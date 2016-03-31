---
layout: page
title: Fonts in mPDF 5.x
parent_title: Fonts & Languages
permalink: /fonts-languages/fonts-in-mpdf-5-x.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>mPDF version 5 supports Truetype fonts, reading and embedding directly from the .ttf font files. Fonts must follow the Truetype specification and use Unicode mapping to the characters. Truetype collections (.ttc files) and Opentype files (.otf) in Truetype format are also supported.</p>
<h2>Easy to add new fonts</h2>
<ol>
<li>Upload the Truetype font file to the fonts directory (<span class="filename">/ttfonts</span>)</li>
<li>Define the font file details in the configuration file (<span class="filename">config_fonts.php</span>)</li>
<li>Access the font by specifying it in your HTML code as the CSS font-family</li>
<li>To use the font with specific languages, you need also to edit the configuration file (<span class="filename">config_cp.php</span>) - see the example</li>
</ol>
<h3>Example</h3>
<p>You have 2 font files "Frutiger-Normal.ttf" and "FrutigerObl-Normal.ttf" which you want to be available in mPDF, and you will refer to them in HTML/CSS as "Frutiger".</p>
<p>1. Upload the 2 files to the fonts directory (<span class="filename">/ttfonts</span>)</p>
<p>2. In the configuration file (<span class="filename">config_fonts.php</span>) add this to the array <code>$this-&gt;fontdata</code>:</p>
<p>&nbsp;&nbsp; "frutiger" =&gt; array(

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 'R' =&gt; "Frutiger-Normal.ttf",

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 'I' =&gt; "FrutigerObl-Normal.ttf",

&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; ),</p>
<p>3. In your HTML or CSS code use something like this:</p>

{% highlight php %}
<p style="font-family: Frutiger">....</p>
{% endhighlight %}

<p>4. To use the font with specific languages, you need also to edit the configuration file (<span class="filename">config_cp.php</span>); let us imagine that Frutiger contains a full set of characters needed for the Thai language:</p>

{% highlight php %}
<?php

      // THAI

      CASE "th":  $unifonts = "frutiger,frutigerI";  break;
{% endhighlight %}

<p>This will enable the Frutiger font in all of the following:</p>

{% highlight php %}
<?php

$mpdf = new mPDF('th');
{% endhighlight %}

{% highlight php %}
<?php

$mpdf->SetAutoFont(AUTOFONT_THAIVIET);
{% endhighlight %}

{% highlight php %}
<p lang="th">...</p>
{% endhighlight %}

<h2>Full Unicode support</h2>
<p>The DejaVu fonts distributed with mPDF contain an extensive set of characters, but it is easy to add fonts to access uncommon characters.</p>
<p>(The following characters will only appear in your browser if you have appropriate fonts installed on your computer.)</p>

<div class="alert alert-info" role="alert">Georgian (DejaVuSansCondensed)

Ⴀ Ⴁ Ⴂ Ⴃ Ⴄ Ⴅ Ⴆ Ⴇ Ⴈ Ⴉ Ⴊ Ⴋ Ⴌ Ⴍ Ⴎ Ⴏ Ⴐ Ⴑ Ⴒ Ⴓ

Greek Extended (Quivira)

ἀ ἁ ἂ ἃ ἄ ἅ ἆ ἇ Ἀ Ἁ Ἂ Ἃ Ἄ Ἅ Ἆ Ἇ ἐ ἑ ἒ ἓ ἔ ἕ 

IPA Extensions (Quivira)

ɐ ɑ ɒ ɓ ɔ ɕ ɖ ɗ ɘ ə ɚ ɛ ɜ ʣ ʤ ʥ ʦ ʧ ʨ ʩ ʪ ʫ 

Letterlike Symbols (Symbola)

℀ ℁ ℂ ℃ ℄ ℅ ℆ ℇ ℈ ℉ ℊ ℋ ℌ ℍ ℎ ℏ ℐ ℑ ℒ ℓ ℔ ℕ № ℗ ℘ ℙ ℚ ℛ ℜ 

Mathematical Operators (Symbola)

∀ ∁ ∂ ∃ ∄ ∅ ∆ ∇ ∈ ∉ ∊ ∋ ∌ ∍ ∎ ∏ ∐ ∑ − ∓ ∔ ∕ ∖ ∗ ∘ ∙ √ ∛ ∜ ∝ ∞ 

Miscellaneous Technical (Symbola)

⌀ ⌁ ⌂ ⌃ ⌄ ⌅ ⌆ ⌇⌎ ⌏ ⌐ ⌑ ⌒ ⌓ ⌔ ⌕ ⌖ ⌗ ⌘ ⌙ ⌚ ⌛ ⌠ ⌡ ⌢ ⌣ ⌤ ⌥ ⌦ ⌧ 

Enclosed Alphanumerics (Quivira)

① ② ③ ④ ⑤ ⑥ ⑦ ⑧ ⑨ ⑩ ⑪ ⑫ ⑬ ⑭ ⑮ ⑯

Miscellaneous Symbols (DejaVuSansCondensed)

☀ ☁ ☂ ☃ ☄ ★ ☆ ☇ ☈ ☉ ☊ ☋ ☌ ☍ ☎ ☏ ☐ ☑ ☒</div>
<p>Names in brackets are open-source fonts which cover the Unicode ranges - see <a href="{{ "/reference/codepages-glyphs/unicode-coverage-of-free-fonts.html" | prepend: site.baseurl }}">Unicode coverage of free fonts</a> for details of these and other open-source fonts.</p>
<h2>Complex scripts</h2>
<p>Although all characters may be displayed, there are various reasons why a script may not appear as expected.</p>
<h3>Right-to-left languages (Hebrew, Arabic etc.)</h3>
<p>Arabic languages and Hebrew are written in a right-to-left direction (RTL). mPDF recognises both Arabic and Hebrew languages and reverses text direction automatically.</p>

<div class="alert alert-info" role="alert">ألسّلام عليكم &nbsp; &nbsp; שלום</div>
<p>Arabic languages (but not Hebrew) also change the form of the letter depending on its position in the text e.g. these are the initial, medial, final, and isolated forms of arabic letter 'ain':</p>

<div class="alert alert-info" role="alert">ع ـع ـعـ عـ</div>
<p>The isolated characters are contained in the Unicode block 'Arabic' U+0600 - U+06FF.</p>
<p>The initial, medial and final forms are contained in Unicode Blocks 'Arabic Presentation Forms' A and B (U+FB50 - U+FDFF, U+FE70 - U+FEFE). Note that quite a large number of fonts contain the isolated characters but not the presentation forms. Fonts used with mPDF must contain the 'Arabic Presentation Forms' in order to display arabic text correctly. mPDF automatically converts letters to their initial/medial/final forms in several languages: arabic, persian/farsi, urdu, sindhi and pashto.</p>
<p>Arabic text is used for many different languages e.g. persian/farsi, urdu, pashto etc. These languages often contain letters unique to that language. 'Arabic' fonts do not always contain the full set of arabic characters necessary for all languages.</p>
<p>Other RTL languages (using other alphabets) are reversed in order, but not otherwise processed, by mPDF e.g. Syriac, Thaana, N'Ko, and Samaritan.</p>
<h3>Indic languages</h3>
<p>Indic languages are also complex scripts which require some processing of characters before display. For example some vowels consist of 2 characters, to be placed before and after the adjacent consonant e.g.</p>

<div class="alert alert-info" role="alert">U+0D1C + U+0D4C [vowel AU] = [written together as &amp;#x0D1C;&amp;#x0D4C;]

ജ + ൌ = ജൌ</div>
<p>Consonant conjuncts are where two adjacent characters are written as a single 'conjunct' form e.g.</p>

<div class="alert alert-info" role="alert">प + ॡ = पॣ</div>
<p>mPDF can support some of these languages, but requires specially prepared font files that are unique to mPDF. These are distributed with the mPDF package.

Supported languages: Bengali, Devanāgarī, Gujarāti, Gurmukhi, Kannada, Malayalam, Oriya, Tamil, Telugu</p>

<div class="alert alert-info" role="alert">আসসালামু আলাইকুম નમસ્તે നമസ്കാരം नमस्ते வணக்கம்!</div>
<p>Complex scripts <b>not</b> supported: Khmer, Sinhala, Tibetan, Myanmar (Burmese), Balinese</p>
<h3>Vertical writing</h3>
<p>Vertical writing is not supported by mPDF (e.g. Mongolian and Phags-pa) although the individual characters can be displayed using suitable fonts.</p>
<h3>Combining diacritics</h3>
<p>In Unicode, letters with diacritics (e.g. ÁáȦȧÄä) are usually represented as a single character e.g. Unicode U+0196 is an A Umlaut. There are 4 blocks in Unicode of diacritics or 'marks' which can be used to combine with adjacent letters: Combining Diacritical Marks (U+0300 - U+036F), Combining Diacritical Marks Supplement (U+1DC0 - U+1DFF), Combining Marks for Symbols(U+20D0 - U+20FF) and Combining Half Marks (U+FE20 - U+FE2F).</p>
<p>Software applications may use special positioning information stored in OpenType font files to resposition the diacritic/mark depending on the context. mPDF does not support this repositioning and is dependent on the font design and original placement of the diacritic. (The following characters may display differently depending on your browser.)</p>

<div class="alert alert-info" role="alert">Á á Ȧ ȧ Ä ä ï (Precomposed characters)

Á á Ȧ ȧ Ä ä ï (Using diacritics)</div>
<p><b>It is recommended to use precomposed characters whenever possible with mPDF.</b></p>
<h2>Unicode Supplementary Planes</h2>
<p>The original Unicode allocated characters between x0000 and xFFFF (65,536 characters). This 'Basic Multilingual Plane' supported most characters in common use, including a large number of Unified Chinese-Japanese-Korean characters (CJK). Later the Unicode standard was extended to 16 Planes.</p>
<p>The first plane (plane 0), the Basic Multilingual Plane (BMP), is where most characters have been assigned so far.</p>
<p>Plane 1, the Supplementary Multilingual Plane (SMP), is mostly used for historic scripts such as Linear B, but is also used for musical and mathematical symbols.</p>
<p>Plane 2, the Supplementary Ideographic Plane (SIP), is used for about 40,000 Unified Han (CJK) Ideographs.</p>
<p>mPDF version 5 supports fonts containing characters from all Unicode Planes. By choosing the correct font, almost every single character from Unicode 5 can be displayed in a PDF file.</p>
<h3>Unicode Supplementary Multilingual Plane (SMP or Plane 1) U+10000 - U+1FFFF</h3>
<p>The Unicode Supplementary Multilingual Plane contains ranges such as Gothic text and Egyptian Hieroglyphics. as well as other (mainly) ancient scripts - see <a href="{{ "/reference/codepages-glyphs/unicode-coverage-of-free-fonts.html" | prepend: site.baseurl }}">Unicode coverage of free fonts</a> for full list.</p>
<p>mPDF uses a different method to embed fonts in the PDF file if they include characters from SMP or SIP, because the characters cannot be represented by a 4 character hex code 0000-FFFF. This method is less eficient than the default method, and it can be suppressed by adding the font name to the array <code>BMPonly</code> in the <span class="filename">config_fonts.php</span> configuration file.</p>
<p>Note that the DejaVu fonts&nbsp; distributed with mPDF do contain a few characters in the SMP plane, but most users will not require them and by default they are added to the array <code>BMPonly</code>.</p>
<h2>Using CJK fonts in mPDF</h2>
<p>Fonts containing CJK characters are large files, typically 10-30MB. Adobe provides a free download of an 'Asian font pack' allowing you to create PDF files without including (embedding) the font information in the file. This keeps the file size to a minimum and minimises resource usage on your website generating the PDF file. However, users will have to download the Adobe font packs to read the file, and other PDF software will not display the text correctly.</p>
<p>mPDF allows you to embed subsets of CJK fonts keeping file size down, although there is considerable memory usage to generate these files.</p>
<p>Some CJK fonts are broken up into 2 files because of the size of the files. One freely available font with almost complete coverage of all CJK characters (in both BMP and SIP) is 'Sun' available from Alan Wood's excellent website: <a href="http://www.alanwood.net/unicode/fonts-east-asian.html">http://www.alanwood.net/unicode/fonts-east-asian.html</a>. This comes as 2 files, Sun-ExtA and Sun-ExtB (both about 20MB in size) containing the characters from BMP and SIP respectively.</p>
<p>mPDF allows you to treat these as one font by defining the second file as an SIP-extension of the first in the config_fonts.php configuration file.</p>
<p>This is an example of the entry in the <span class="filename">config_fonts.php</span> configuration file:</p>

{% highlight php %}
<?php

$this->fontdata = array(

...

      "sun-exta" => array(

            'R' => "Sun-ExtA.ttf",

            'sip-ext' => 'sun-extb',

      ),

      "sun-extb" => array(

             'R' => "Sun-ExtB.ttf",

      ),

...

);
{% endhighlight %}

<p>This is a sample of HTML code containing CJK characters in both BMP and SIP - note only the sun-exta font-family needs to be referenced:</p>

{% highlight php %}
<div style="font-family:sun-extA;"> &amp;#40706; &amp;#40712; &amp;#40727; &amp;#x2320f; &amp;#x23225; &amp;#40742; &amp;#40743; &amp;#x2322f; &amp;#x23231; &amp;#40761; &amp;#40772; &amp;#x23232; &amp;#x23233; &amp;#40773; &amp;#40784; &amp;#x23234; &amp;#x23256; &amp;#40787; &amp;#40794; &amp;#x23262; &amp;#x23281; &amp;#40802; &amp;#40809; &amp;#x23289; &amp;#x2328a; </div>
{% endhighlight %}

<p>&nbsp;</p>
<h2>TrueType Collections</h2>
<p>TrueType Collections (.ttc files) contain more than one font. mPDF treats each font separately by defining the <code>TTCfontID</code> array in the <span class="filename">config_fonts.php</span> configuration file.</p>
<p>This example uses the Windows MingLiU fonts, which consist of 2 files containing 6 fonts (note that mingliub is not a Bold variant):</p>
<p>Font collection file (<span class="filename">mingliu.ttc</span>) contains the following fonts:

[1] MingLiU (mingliu) Regular

[2] PMingLiU (pmingliu) Regular (Proportional)

[3] MingLiU_HKSCS (mingliu_hkscs) Regular</p>
<p>Font collection file (<span class="filename">mingliub.ttc</span>) contains the following fonts:

[1] MingLiU-ExtB (mingliu-extb) Regular

[2] PMingLiU-ExtB (pmingliu-extb) Regular (Proportional)

[3] MingLiU_HKSCS-ExtB (mingliu_hkscs-extb) Regular</p>
<p>&nbsp;</p>
<p>This is the entry in the config_fonts.php configuration file:</p>

{% highlight php %}
<?php

$this->fontdata = array(

...

      "mingliu" => array(

            'R' => "mingliu.ttc",

            'TTCfontID' => array (

                'R' => 1,

            ),

            'sip-ext' => 'mingliu-extb',

      ),

      "pmingliu" => array(

            'R' => "mingliu.ttc",

            'TTCfontID' => array (

                'R' => 2,

            ),

            'sip-ext' => 'pmingliu-extb',

      ),

      "mingliu_hkscs" => array(

            'R' => "mingliu.ttc",

            'TTCfontID' => array (

                'R' => 3,

            ),

            'sip-ext' => 'mingliu_hkscs-extb',

      ),

      "mingliu-extb" => array(

            'R' => "mingliub.ttc",

            'TTCfontID' => array (

                'R' => 1,

            ),

      ),

      "pmingliu-extb" => array(

            'R' => "mingliub.ttc",

            'TTCfontID' => array (

                'R' => 2,

            ),

      ),

      "mingliu_hkscs-extb" => array(

            'R' => "mingliub.ttc",

            'TTCfontID' => array (

                'R' => 3,

            ),

      ),

...

);
{% endhighlight %}

<p>This is an example of HTML code containing CJK characters from both BMP and SIP, and selecting the different fonts:</p>

{% highlight php %}
<div style="font-family:mingliu;"> &amp;#40706; &amp;#40742; &amp;#40772; &amp;#40784; &amp;#40802; &amp;#40809; &amp;#x23289; &amp;#x2328a; </div> 

<div style="font-family:mingliu_hkscs;"> &amp;#40706; &amp;#40742; &amp;#40772; &amp;#40784; &amp;#40802; &amp;#40809; &amp;#x23289; &amp;#x2328a; </div> 

<div style="font-family:pmingliu;"> &amp;#40706; &amp;#40742; &amp;#40772; &amp;#40784; &amp;#40802; &amp;#40809; &amp;#x23289; &amp;#x2328a; </div>
{% endhighlight %}

</div>
</div>

