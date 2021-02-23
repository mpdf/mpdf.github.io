---
layout: page
title: Fonts in mPDF 6.x
parent_title: Fonts & Languages
permalink: /fonts-languages/fonts-in-mpdf-6-x.html
modification_time: 2015-08-05T11:59:27+00:00
---

mPDF supports Truetype fonts, reading and embedding directly from the .ttf font files. Fonts must follow the Truetype
specification and use Unicode mapping to the characters. Truetype collections (.ttc files) and Opentype files (.otf)
in Truetype format are also supported.

# Easy to add new fonts

- Upload the Truetype font file to the fonts directory (<span class="filename">/ttfonts</span>)
- Define the font file details in the configuration file (<span class="filename">config_fonts.php</span>)
- Access the font by specifying it in your HTML code as the CSS font-family
- To use the font with specific languages, you need also to edit the configuration file
  (<span class="filename">config_lang2fonts.php</span>) - see the example

## Specify custom font directory

You can specify a custom font directory (eg when installing mPDF with composer or when you want to share custom
fonts between instances) by defining `_MPDF_TTFONTPATH` constant with the path before initializing mPDF library (ie
requiring mpdf.php file).

```php
define('_MPDF_TTFONTPATH', __DIR__ . '/fonts');
$mpdf = new mPDF();
```
You may want to copy font files included in the distribution for defaults and font substitutions to work.

## Example

You have 2 font files `Frutiger-Normal.ttf` and `FrutigerObl-Normal.ttf` which you want to be available in mPDF,
and you will refer to them in HTML/CSS as "Frutiger".

1. Upload the 2 files to the fonts directory (<span class="filename">/ttfonts</span>)

2. In the configuration file (<span class="filename">config_fonts.php</span>) add this to the array `$this->fontdata`:

    ```php
    "frutiger" => array(
        'R' => "Frutiger-Normal.ttf",
        'I' => "FrutigerObl-Normal.ttf",
    ),
    ```

    For fonts which handle complex scripts and/or right-to-left text, see
    <a href="{{ "/fonts-languages/opentype-layout-otl.html" | prepend: site.baseurl }}">OpenType layout (OTL)</a> for
    details of setting OTL use and support for kashida e.g.

    ```php
    "frutiger" => array(
        'R' => "Frutiger-Normal.ttf",
        'I' => "FrutigerObl-Normal.ttf",
        'useOTL' => 0xFF,
        'useKashida' => 75,
    ),
    ```

    If you are not able to edit config_fonts.php from the distribution, just edit `fontdata` property of your mPDF instance:

    ```php
    $mpdf = new mPDF();
    $mpdf->fontdata["frutiger"] = [
        'R' => "Frutiger-Normal.ttf",
        'I' => "FrutigerObl-Normal.ttf",
    ];
    ```

3. In your HTML or CSS code use something like this:

    ```php

    <p style="font-family: frutiger"></p>

    ```

4. To use the font with specific languages, you need also to edit the configuration file
   (<span class="filename">config_lang2fonts.php</span>); let us imagine that Frutiger contains a full set
   of characters needed for the Thai language:

    ```php
    <?php
    // THAI
    case "th":
        $unifont = "frutiger";
        break;
    ```

    This will enable the Frutiger font whenever the lang attribute is set, if the configurable variable
    `autoLangToFont` is set to `true`:

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
  **Note:** You must enable OpenType layout (OTL) features for a font to correctly display
  right-to-left scripts.
</div>

## Indic languages, Lao, Tibetan etc.

Other complex scripts require some processing of characters before display. For example some vowels consist of 2
characters, to be placed before and after the adjacent consonant e.g.

U+0D1C + U+0D4C [vowel AU] = [written together as &amp;#x0D1C;&amp;#x0D4C;]

ജ + ൌ = ജൌ

Consonant conjuncts are where two adjacent characters are written as a single 'conjunct' form e.g.

प + ॡ = पॣ

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** You must enable OpenType layout (OTL) features for a font to correctly
  display complex scripts.
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
method, and it can be suppressed by adding the font name to the array `BMPonly` in the
<span class="filename">config_fonts.php</span> configuration file.

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

mPDF allows you to treat these as one font by defining the second file as an SIP-extension of the first in the
config_fonts.php configuration file.

This is an example of the entry in the <span class="filename">config_fonts.php</span> configuration file:

```php
<?php
$this->fontdata = array(
    "sun-exta" => array(
        'R' => "Sun-ExtA.ttf",
        'sip-ext' => 'sun-extb',
    ),
    "sun-extb" => array(
        'R' => "Sun-ExtB.ttf",
    ),
);

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
`TTCfontID` array in the <span class="filename">config_fonts.php</span> configuration file.

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

This is the entry in the config_fonts.php configuration file:

```php
<?php
$this->fontdata = array(

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

