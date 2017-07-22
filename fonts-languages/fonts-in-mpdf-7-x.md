---
layout: page
title: Fonts in mPDF 7.x
parent_title: Fonts & Languages
permalink: /fonts-languages/fonts-in-mpdf-7-x.html
modification_time: 2017-03-13T15:06:17+01:00
---

mPDF supports Truetype fonts, reading and embedding directly from the .ttf font files. Fonts must follow the Truetype
specification and use Unicode mapping to the characters. Truetype collections (.ttc files) and Opentype files (.otf)
in Truetype format are also supported.

# Easy to add new fonts

- Add your font directory to `fontDir` configuration parameter.
- Define the font file details in the `fontData` parameter
- Access the font by specifying it in your HTML code as the CSS font-family
- Specifying languages for the font by defining custom `Mpdf\Language\LanguageToFontInterface`
and `Mpdf\Language\ScriptToLanguage` implementation

## Example

You have 2 font files `Frutiger-Normal.ttf` and `FrutigerObl-Normal.ttf` which you want to be available in mPDF,
and you will refer to them in HTML/CSS as `frutiger`.

1. Define the directory with the font

2. Define the font details in `fontdata` configuration variable

   Example below shows how to maintain default fonts and their settings

    ```php
    <?php

    $defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
    $fontDir = $defaultConfig['fontDir'];

    $defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
    $fontData = $defaultFontConfig['fontdata'];

    $mpdf = new \Mpdf\Mpdf([
        'fontDir' => [
            $fontDir,
            __DIR__ . '/custom/font/directory',
        ],
        'fontdata' => $fontData + ['frutiger' => [
            'R' => 'Frutiger-Normal.ttf',
            'I' => 'FrutigerObl-Normal.ttf',
        ]],
        'default_font' => 'frutiger'
    ]);

    ```

    For fonts which handle complex scripts and/or right-to-left text, see
    <a href="{{ "/fonts-languages/opentype-layout-otl.html" | prepend: site.baseurl }}">OpenType layout (OTL)</a> for
    details of setting OTL use and support for kashida e.g.

    ```php
    <?php
        'frutiger' => [
            'R' => 'Frutiger-Normal.ttf',
            'I' => 'FrutigerObl-Normal.ttf',
            'useOTL' => 0xFF,
            'useKashida' => 75,
        ],
    ```

3. In your HTML or CSS code use something like this:

    ```html

    <p style="font-family: frutiger">Text in Frutiger</p>

    ```

4. To use the font with specific languages, you need also to add the font to return of a custom
    `Mpdf\Language\LanguageToFontInterface` implementation.

    You can also extend existing `Mpdf\Language\LanguageToFontInterface` class.

    ```php
    <?php

    class CustomLanguageToFontImplementation extends \Mpdf\Language\LanguageToFontInterface implements \Mpdf\Language\LanguageToFontInterface
    {
    
        public function getLanguageOptions($llcc, $adobeCJK) 
        {
            if ($llcc === 'th') {
                return [false, 'frutiger']; // for thai language, font is not core suitable and the font is Frutiger
            }

            return parent::getLanguageOptions($llcc, $adobeCJK);
        }

    }

    $mpdf = new \Mpdf\Mpdf(['languageToFont' => new CustomLanguageToFontImplementation()]);

    ```

    This will enable the Frutiger font whenever the lang attribute is set, if the configurable variable `autoLangToFont` is set to `true`:

    ```html
    <p lang="th">Text in Frutiger</p>
    
    ```

# Full Unicode support

The DejaVu fonts distributed with mPDF contain an extensive set of characters - see
<a href="{{ "/reference/codepages-glyphs/unicode-coverage-of-free-fonts.html" | prepend: site.baseurl }}">Unicode
coverage of free fonts</a> for details of these and other open-source fonts.

# Complex scripts

## Right-to-left languages (Hebrew, Arabic etc.)

Arabic languages and Hebrew are written in a right-to-left direction (RTL). mPDF recognises both Arabic and
Hebrew languages and reverses text direction automatically.

ألسّلام عليكم     שלום

Arabic languages (but not Hebrew) also change the form of the letter depending on its position in the text e.g.
these are the initial, medial, final, and isolated forms of arabic letter 'ain':

ع ـع ـعـ عـ

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** You must enable OpenType layout (OTL) features for a font to correctly display right-to-left scripts.
</div>

## Indic languages, Lao, Tibetan etc.

Other complex scripts require some processing of characters before display. For example some vowels consist of 2
characters, to be placed before and after the adjacent consonant e.g.

U+0D1C + U+0D4C [vowel AU] = [written together as &amp;#x0D1C;&amp;#x0D4C;]

ജ + ൌ = ജൌ

Consonant conjuncts are where two adjacent characters are written as a single 'conjunct' form e.g.

प + ॡ = पॣ

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** You must enable OpenType layout (OTL) features for a font to correctly display complex scripts.
</div>

## Vertical writing

Vertical writing is not supported by mPDF (e.g. Mongolian and Phags-pa) although the individual characters
can be displayed using suitable fonts.

# Unicode Supplementary Planes

The original Unicode allocated characters between x0000 and xFFFF (65,536 characters). This 'Basic Multilingual Plane'
supported most characters in common use, including a large number of Unified Chinese-Japanese-Korean characters (CJK).
Later the Unicode standard was extended to 16 Planes.

The first plane (plane 0), the Basic Multilingual Plane (BMP), is where most characters have been assigned so far.

Plane 1, the Supplementary Multilingual Plane (SMP), is mostly used for historic scripts such as Linear B, but is also
used for musical and mathematical symbols.

Plane 2, the Supplementary Ideographic Plane (SIP), is used for about 40,000 Unified Han (CJK) Ideographs.

mPDF supports fonts containing characters from all Unicode Planes. By choosing the correct font, almost every single
character from Unicode 5 can be displayed in a PDF file.

## Unicode Supplementary Multilingual Plane (SMP or Plane 1) U+10000 - U+1FFFF

The Unicode Supplementary Multilingual Plane contains ranges such as Gothic text and Egyptian Hieroglyphics. as well as
other (mainly) ancient scripts - see
<a href="{{ "/reference/codepages-glyphs/unicode-coverage-of-free-fonts.html" | prepend: site.baseurl }}">Unicode
coverage of free fonts</a> for full list.

mPDF uses a different method to embed fonts in the PDF file if they include characters from SMP or SIP, because the
characters cannot be represented by a 4 character hex code 0000-FFFF. This method is less eficient than the default
method, and it can be suppressed by adding the font name to the configuration key `BMPonly` configuration key.

Note that the DejaVu fonts  distributed with mPDF do contain a few characters in the SMP plane, but most users will
not require them and by default they are added to the array `BMPonly`.

# Using CJK fonts in mPDF

Fonts containing CJK characters are large files, typically 10-30MB. Adobe provides a free download of an
'Asian font pack' allowing you to create PDF files without including (embedding) the font information in the file.
This keeps the file size to a minimum and minimises resource usage on your website generating the PDF file. However,
users will have to download the Adobe font packs to read the file, and other PDF software will not
display the text correctly.

mPDF allows you to embed subsets of CJK fonts keeping file size down, although there is considerable memory usage
to generate these files.

Some CJK fonts are broken up into 2 files because of the size of the files. One freely available font with almost
complete coverage of all CJK characters (in both BMP and SIP) is 'Sun' available from Alan Wood's excellent website:
<a href="http://www.alanwood.net/unicode/fonts-east-asian.html">http://www.alanwood.net/unicode/fonts-east-asian.html</a>.
This comes as 2 files, Sun-ExtA and Sun-ExtB (both about 20MB in size) containing the characters from
BMP and SIP respectively.

mPDF allows you to treat these as one font by defining the second file as an SIP-extension of the first.

This is an example of the entry in the `fontdata` configuration key:

{% highlight php %}
<?php

'fontdata' = [
    'sun-exta' => [
        'R' => 'Sun-ExtA.ttf',
        'sip-ext' => 'sun-extb',
    ],
    'sun-extb' => [
        'R' => 'Sun-ExtB.ttf',
    ],
];
{% endhighlight %}

This is a sample of HTML code containing CJK characters in both BMP and SIP - note only the sun-exta font-family
needs to be referenced:

{% highlight html %}
<div style="font-family:sun-extA;"> 
    &amp;#40706; &amp;#40712; &amp;#40727; &amp;#x2320f; &amp;#x23225; &amp;#40742; 
    &amp;#40743; &amp;#x2322f; &amp;#x23231; &amp;#40761; &amp;#40772; &amp;#x23232; 
    &amp;#x23233; &amp;#40773; &amp;#40784; &amp;#x23234; &amp;#x23256; &amp;#40787; 
    &amp;#40794; &amp;#x23262; &amp;#x23281; &amp;#40802; &amp;#40809; &amp;#x23289; 
    &amp;#x2328a; 
</div>
{% endhighlight %}

# TrueType Collections

TrueType Collections (.ttc files) contain more than one font. mPDF treats each font separately by defining the
`TTCfontID` array in the `$config` mPDF constrctor parameter.

This example uses the Windows MingLiU fonts, which consist of 2 files containing 6 fonts (note that mingliub is not
a Bold variant):

Font collection file (<span class="filename">mingliu.ttc</span>) contains the following fonts:

 1. MingLiU (mingliu) Regular
 2. PMingLiU (pmingliu) Regular (Proportional)
 3. MingLiU_HKSCS (mingliu_hkscs) Regular

Font collection file (<span class="filename">mingliub.ttc</span>) contains the following fonts:

1. MingLiU-ExtB (mingliu-extb) Regular
2. PMingLiU-ExtB (pmingliu-extb) Regular (Proportional)
3. MingLiU_HKSCS-ExtB (mingliu_hkscs-extb) Regular

This is the entry in the mPDF configuration:

{% highlight php %}
<?php
$config = [
    'fontdata' = [

        'mingliu' => [
            'R' => 'mingliu.ttc',
            'TTCfontID' => [
                'R' => 1,
            ],
            'sip-ext' => 'mingliu-extb',
        ],
        'pmingliu' => [
            'R' => 'mingliu.ttc',
            'TTCfontID' => [
                'R' => 2,
            ],
            'sip-ext' => 'pmingliu-extb',
        ],
        'mingliu_hkscs' => [
            'R' => 'mingliu.ttc',
            'TTCfontID' => [
                'R' => 3,
            ],
            'sip-ext' => 'mingliu_hkscs-extb',
        ],
        'mingliu-extb' => [
            'R' => 'mingliub.ttc',
            'TTCfontID' => [
                'R' => 1,
            ],
        ],
        'pmingliu-extb' => [
            'R' => 'mingliub.ttc',
            'TTCfontID' => [
                'R' => 2,
            ],
        ],
        'mingliu_hkscs-extb' => [
            'R' => 'mingliub.ttc',
            'TTCfontID' => [
                'R' => 3,
            ],
        ],
    ]
];
{% endhighlight %}

This is an example of HTML code containing CJK characters from both BMP and SIP, and selecting the different fonts:

{% highlight html %}
<div style="font-family:mingliu;"> 
    &amp;#40706; &amp;#40742; &amp;#40772; &amp;#40784; &amp;#40802; &amp;#40809; 
    &amp;#x23289; &amp;#x2328a; 
</div>

<div style="font-family:mingliu_hkscs;"> 
    &amp;#40706; &amp;#40742; &amp;#40772; &amp;#40784; &amp;#40802; &amp;#40809; 
    &amp;#x23289; &amp;#x2328a; 
</div>

<div style="font-family:pmingliu;"> 
    &amp;#40706; &amp;#40742; &amp;#40772; &amp;#40784; &amp;#40802; &amp;#40809; 
    &amp;#x23289; &amp;#x2328a; 
</div>
{% endhighlight %}

