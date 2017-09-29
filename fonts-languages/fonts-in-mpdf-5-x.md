---
layout: page
title: Fonts in mPDF 5.x
parent_title: Fonts & Languages
permalink: /fonts-languages/fonts-in-mpdf-5-x.html
modification_time: 2015-08-05T11:59:26+00:00
---

mPDF version 5 supports Truetype fonts, reading and embedding directly from the .ttf font files. Fonts must follow the 
Truetype specification and use Unicode mapping to the characters. Truetype collections (.ttc files) and Opentype files 
(.otf) in Truetype format are also supported.

# Easy to add new fonts

1. Upload the Truetype font file to the fonts directory (<span class="filename">/ttfonts</span>)
1. Define the font file details in the configuration file (<span class="filename">config_fonts.php</span>)
1. Access the font by specifying it in your HTML code as the CSS font-family
1. To use the font with specific languages, you need also to edit the configuration 
   file (<span class="filename">config_cp.php</span>) - see the example

## Example

You have 2 font files `Frutiger-Normal.ttf` and `FrutigerObl-Normal.ttf` which you want to be available in 
mPDF, and you will refer to them in HTML/CSS as `'Frutiger'`.

1. Upload the 2 files to the fonts directory (<span class="filename">/ttfonts</span>)

2. In the configuration file (<span class="filename">config_fonts.php</span>) add this to the array `$this->fontdata`:
    
    ```php
    "frutiger" => array(
        'R' => "Frutiger-Normal.ttf",
        'I' => "FrutigerObl-Normal.ttf",
    ),
    
    ```

3. In your HTML or CSS code use something like this:

    ```php

    ....

    ```

4. To use the font with specific languages, you need also to edit the configuration file 
    (<span class="filename">config_cp.php</span>); let us imagine that Frutiger contains a full set of 
    characters needed for the Thai language:

    ```php
    <?php
        // THAI
        CASE "th":  
            $unifonts = "frutiger,frutigerI";  
            break;
            
    ```

    This will enable the Frutiger font in all of the following:

    ```php
    <?php
    $mpdf = new \Mpdf\Mpdf('th');
    
    ```

    ```php
    <?php
    $mpdf->SetAutoFont(AUTOFONT_THAIVIET);
    
    ```

    ```php
    ...

    ```

# Full Unicode support

The DejaVu fonts distributed with mPDF contain an extensive set of characters, but it is easy to add fonts to access uncommon characters.

(The following characters will only appear in your browser if you have appropriate fonts installed on your computer.)

Georgian (DejaVuSansCondensed)

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

☀ ☁ ☂ ☃ ☄ ★ ☆ ☇ ☈ ☉ ☊ ☋ ☌ ☍ ☎ ☏ ☐ ☑ ☒

Names in brackets are open-source fonts which cover the Unicode ranges - see 
<a href="{{ "/reference/codepages-glyphs/unicode-coverage-of-free-fonts.html" | prepend: site.baseurl }}">Unicode 
coverage of free fonts</a> for details of these and other open-source fonts.

# Complex scripts

Although all characters may be displayed, there are various reasons why a script may not appear as expected.

## Right-to-left languages (Hebrew, Arabic etc.)

Arabic languages and Hebrew are written in a right-to-left direction (RTL). mPDF recognises both Arabic and Hebrew 
languages and reverses text direction automatically.

ألسّلام عليكم     שלום

Arabic languages (but not Hebrew) also change the form of the letter depending on its position in the text e.g.
these are the initial, medial, final, and isolated forms of arabic letter 'ain':

ع ـع ـعـ عـ

The isolated characters are contained in the Unicode block 'Arabic' U+0600 - U+06FF.

The initial, medial and final forms are contained in Unicode Blocks 'Arabic Presentation Forms' A and B (U+FB50 - 
	U+FDFF, U+FE70 - U+FEFE). Note that quite a large number of fonts contain the isolated characters but not the 
presentation forms. Fonts used with mPDF must contain the 'Arabic Presentation Forms' in order to display arabic 
text correctly. mPDF automatically converts letters to their initial/medial/final forms in several languages: arabic, 
persian/farsi, urdu, sindhi and pashto.

Arabic text is used for many different languages e.g. persian/farsi, urdu, pashto etc. These languages often contain 
letters unique to that language. 'Arabic' fonts do not always contain the full set of arabic characters necessary for 
all languages.

Other RTL languages (using other alphabets) are reversed in order, but not otherwise processed, by mPDF e.g. Syriac,
Thaana, N'Ko, and Samaritan.

## Indic languages

Indic languages are also complex scripts which require some processing of characters before display. For example some 
vowels consist of 2 characters, to be placed before and after the adjacent consonant e.g.

U+0D1C + U+0D4C [vowel AU] = [written together as &amp;#x0D1C;&amp;#x0D4C;]

ജ + ൌ = ജൌ

Consonant conjuncts are where two adjacent characters are written as a single 'conjunct' form e.g.

प + ॡ = पॣ

mPDF can support some of these languages, but requires specially prepared font files that are unique to mPDF. These are 
distributed with the mPDF package.

Supported languages: Bengali, Devanāgarī, Gujarāti, Gurmukhi, Kannada, Malayalam, Oriya, Tamil, Telugu

আসসালামু আলাইকুম નમસ્તે നമസ്കാരം नमस्ते வணக்கம்!

Complex scripts **not** supported: Khmer, Sinhala, Tibetan, Myanmar (Burmese), Balinese

## Vertical writing

Vertical writing is not supported by mPDF (e.g. Mongolian and Phags-pa) although the individual characters can be 
displayed using suitable fonts.

## Combining diacritics

In Unicode, letters with diacritics (e.g. ÁáȦȧÄä) are usually represented as a single character e.g. Unicode U+0196 
is an A Umlaut. There are 4 blocks in Unicode of diacritics or 'marks' which can be used to combine with adjacent 
letters: Combining Diacritical Marks (U+0300 - U+036F), Combining Diacritical Marks Supplement (U+1DC0 - U+1DFF), 
Combining Marks for Symbols(U+20D0 - U+20FF) and Combining Half Marks (U+FE20 - U+FE2F).

Software applications may use special positioning information stored in OpenType font files to resposition the 
diacritic/mark depending on the context. mPDF does not support this repositioning and is dependent on the font 
design and original placement of the diacritic. (The following characters may display differently depending on 
your browser.)

Á á Ȧ ȧ Ä ä ï (Precomposed characters)

Á á Ȧ ȧ Ä ä ï (Using diacritics)

**It is recommended to use precomposed characters whenever possible with mPDF.**

# Unicode Supplementary Planes

The original Unicode allocated characters between x0000 and xFFFF (65,536 characters). This 'Basic Multilingual Plane' 
supported most characters in common use, including a large number of Unified Chinese-Japanese-Korean characters (CJK). 
Later the Unicode standard was extended to 16 Planes.

The first plane (plane 0), the Basic Multilingual Plane (BMP), is where most characters have been assigned so far.

Plane 1, the Supplementary Multilingual Plane (SMP), is mostly used for historic scripts such as Linear B, but is 
also used for musical and mathematical symbols.

Plane 2, the Supplementary Ideographic Plane (SIP), is used for about 40,000 Unified Han (CJK) Ideographs.

mPDF version 5 supports fonts containing characters from all Unicode Planes. By choosing the correct font, almost 
every single character from Unicode 5 can be displayed in a PDF file.

## Unicode Supplementary Multilingual Plane (SMP or Plane 1) U+10000 - U+1FFFF

The Unicode Supplementary Multilingual Plane contains ranges such as Gothic text and Egyptian Hieroglyphics. as well 
as other (mainly) ancient scripts - see <a href="{{ "/reference/codepages-glyphs/unicode-coverage-of-free-fonts.html" | 
prepend: site.baseurl }}">Unicode coverage of free fonts</a> for full list.

mPDF uses a different method to embed fonts in the PDF file if they include characters from SMP or SIP, because the 
characters cannot be represented by a 4 character hex code 0000-FFFF. This method is less eficient than the default 
method, and it can be suppressed by adding the font name to the array `BMPonly` in the
 <span class="filename">config_fonts.php</span> configuration file.

Note that the DejaVu fonts  distributed with mPDF do contain a few characters in the SMP plane, but most users 
will not require them and by default they are added to the array `BMPonly`.

# Using CJK fonts in mPDF

Fonts containing CJK characters are large files, typically 10-30MB. Adobe provides a free download of an 
'Asian font pack' allowing you to create PDF files without including (embedding) the font information in the file. This keeps the file size to a minimum and minimises resource usage on your website generating the PDF file. However, users will have to download the Adobe font packs to read the file, and other PDF software will not display the text correctly.

mPDF allows you to embed subsets of CJK fonts keeping file size down, although there is considerable memory 
usage to generate these files.

Some CJK fonts are broken up into 2 files because of the size of the files. One freely available font with 
almost complete coverage of all CJK characters (in both BMP and SIP) is 'Sun' available from Alan Wood's excellent
website: [http://www.alanwood.net/unicode/fonts-east-asian.html](http://www.alanwood.net/unicode/fonts-east-asian.html).

This comes as 2 files, Sun-ExtA and Sun-ExtB (both about 20MB in size) 
containing the characters from BMP and SIP respectively.

mPDF allows you to treat these as one font by defining the second file as an SIP-extension of the first 
in the config_fonts.php configuration file.

This is an example of the entry in the <span class="filename">config_fonts.php</span> configuration file:

```php
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

```

This is a sample of HTML code containing CJK characters in both BMP and SIP - note only the sun-exta font-family 
needs to be referenced:

```html
<div style="font-family:sun-extA;"> 
    &amp;#40706; &amp;#40712; &amp;#40727; &amp;#x2320f; &amp;#x23225; &amp;#40742; 
    &amp;#40743; &amp;#x2322f; &amp;#x23231; &amp;#40761; &amp;#40772; &amp;#x23232; 
    &amp;#x23233; &amp;#40773; &amp;#40784; &amp;#x23234; &amp;#x23256; &amp;#40787; 
    &amp;#40794; &amp;#x23262; &amp;#x23281; &amp;#40802; &amp;#40809; &amp;#x23289; 
    &amp;#x2328a; 
</div>

```

# TrueType Collections

TrueType Collections (.ttc files) contain more than one font. mPDF treats each font separately by defining the 
`TTCfontID` array in the <span class="filename">config_fonts.php</span> configuration file.

This example uses the Windows MingLiU fonts, which consist of 2 files containing 6 fonts (note that mingliub is 
not a Bold variant):

Font collection file (<span class="filename">mingliu.ttc</span>) contains the following fonts:

1. MingLiU (mingliu) Regular
2. PMingLiU (pmingliu) Regular (Proportional)
3. MingLiU_HKSCS (mingliu_hkscs) Regular

Font collection file (<span class="filename">mingliub.ttc</span>) contains the following fonts:

1. MingLiU-ExtB (mingliu-extb) Regular
2. PMingLiU-ExtB (pmingliu-extb) Regular (Proportional)
3. MingLiU_HKSCS-ExtB (mingliu_hkscs-extb) Regular

This is the entry in the config_fonts.php configuration file:

```php
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

```

This is an example of HTML code containing CJK characters from both BMP and SIP, and selecting the different fonts:

```php
<div style="font-family:mingliu;"> 
    &#40706; &#40742; &#40772; &#40784; &#40802; &#40809; 
    &#x23289; &#x2328a; 
</div>

<div style="font-family:mingliu_hkscs;"> 
    &#40706; &#40742; &#40772; &#40784; &#40802; &#40809; 
    &#x23289; &amp;#x2328a; 
</div>

<div style="font-family:pmingliu;"> 
    &amp;#40706; &amp;#40742; &amp;#40772; &amp;#40784; &amp;#40802; &amp;#40809; 
    &amp;#x23289; &amp;#x2328a; 
</div>

```

