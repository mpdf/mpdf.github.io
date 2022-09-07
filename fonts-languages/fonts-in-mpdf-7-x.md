---
layout: page
title: Fonts in mPDF v7+
parent_title: Fonts & Languages
permalink: /fonts-languages/fonts-in-mpdf-7-x.html
modification_time: 2017-09-05T14:19:17+01:00
---

mPDF supports Truetype fonts, reading and embedding directly from the .ttf font files. Fonts must follow the Truetype
specification and use Unicode mapping to the characters. Truetype collections (.ttc files) and Opentype files (.otf)
in Truetype format are also supported.

# Easy to add new fonts

- Add your font directory to `fontDir` configuration parameter or by calling
  `$mpdf->`<a href="{{ "/reference/mpdf-functions/addfontdirectory.html" | prepend: site.baseurl }}">`AddFontDirectory()`</a> method
- Define the font file details in the `fontData` parameter array
- Access the font by specifying it in your HTML code as the CSS font-family
- Specifying languages for the font by defining custom `Mpdf\Language\LanguageToFontInterface`
and `Mpdf\Language\ScriptToLanguage` implementation

For working code example, feel free to look into the [examples repository](https://github.com/mpdf/mpdf-examples/blob/development/example67_custom_font.php).

## Example

You have 2 font files `Frutiger-Normal.ttf` and `FrutigerObl-Normal.ttf` which you want to be available in mPDF,
and you will refer to them in HTML/CSS as `frutiger`.

1.  Define the directory with the font via `fontDir` configuration key or add it after instantiation
    with `$mpdf->AddFontDirectory()` method

2.  Define the font details in `fontdata` configuration variable - font name must contain **lowercase letters only**, i.e. `frutiger`.

    Example below shows how to maintain default fonts and their settings

    ```php
    <?php

    $defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
    $fontDirs = $defaultConfig['fontDir'];

    $defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
    $fontData = $defaultFontConfig['fontdata'];

    $mpdf = new \Mpdf\Mpdf([
        'fontDir' => array_merge($fontDirs, [
            __DIR__ . '/custom/font/directory',
        ]),
        'fontdata' => $fontData + [ // lowercase letters only in font key
            'frutiger' => [
                'R' => 'Frutiger-Normal.ttf',
                'I' => 'FrutigerObl-Normal.ttf',
            ]
        ],
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

3.  In your HTML or CSS code use something like this:

    ```html

    <p style="font-family: frutiger">Text in Frutiger</p>

    ```

    You can use full names even with spaces in CSS font-family definition

    ```html

    <p style="font-family: Frutiger">Text in Frutiger</p>

    ```

4.  To use the font with specific languages you need to extend the `Mpdf\Language\LanguageToFont` class (if you require granular control you should implement `Mpdf\Language\LanguageToFontInterface` yourself).

    ```php
    <?php
    class CustomLanguageToFontImplementation extends \Mpdf\Language\LanguageToFont
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

    This will enable the Frutiger font whenever the lang attribute is set, if the configurable variable
    <a href="{{ "/reference/mpdf-variables/autolangtofont.html" | prepend: site.baseurl }}">`autoLangToFont`</a> is set to `true` (default):

    ```html
    <p lang="th">Text in Frutiger</p>

    ```

    When using <a href="{{ "/reference/mpdf-variables/autolangtofont.html" | prepend: site.baseurl }}">`autoLangToFont`</a> mPDF may identify the script but not the language and `$llcc` will be set to `und-{$script}`.

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
characters cannot be represented by a 4 character hex code 0000-FFFF. This method is less efficient than the default
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

```php
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

```

This is a sample of HTML code containing CJK characters in both BMP and SIP - note only the sun-exta font-family
needs to be referenced:

```html
<div style="font-family:sun-extA;">
    &#40706; &#40712; &#40727; &#x2320f; &#x23225; &#40742;
    &#40743; &#x2322f; &#x23231; &#40761; &#40772; &#x23232;
    &#x23233; &#40773; &#40784; &#x23234; &#x23256; &#40787;
    &#40794; &#x23262; &#x23281; &#40802; &#40809; &#x23289;
    &#x2328a;
</div>

```

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

```php
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

```

This is an example of HTML code containing CJK characters from both BMP and SIP, and selecting the different fonts:

```html
<div style="font-family:mingliu;">
    &#40706; &#40742; &#40772; &#40784; &#40802; &#40809;
    &#x23289; &#x2328a;
</div>

<div style="font-family:mingliu_hkscs;">
    &#40706; &#40742; &#40772; &#40784; &#40802; &#40809;
    &#x23289; &#x2328a;
</div>

<div style="font-family:pmingliu;">
    &#40706; &#40742; &#40772; &#40784; &#40802; &#40809;
    &#x23289; &#x2328a;
</div>

```

