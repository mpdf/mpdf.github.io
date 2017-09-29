---
layout: page
title: Arabic (RTL) text v5.x
parent_title: Fonts & Languages
permalink: /fonts-languages/arabic-rtl-text-v5-x.html
modification_time: 2015-08-05T11:59:34+00:00
---

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** Handling of RTL (right-to-left) languages was significantly rewritten for mPDF v5.1
</div>

## Document Directionality - RTL versus LTR

The document has a baseline direction which is
<acronym title="Left-to-Right document, used for most languages">LTR</acronym>
or <acronym title="Right-to-Left document, used for Hebrew and Arabic languages">RTL</acronym>; this determines:

- text alignment in blocks for which text-align has not been specifically set
- layout of mirrored page-margins, columns, ToC and Indexes, headers / footers

This base/document directionality is <acronym title="Left-to-Right document, used for most langauges">LTR</acronym>
by default, and can be set by any of the following:

```php
<?php
$mpdf->SetDirectionality('rtl');

<html dir="rtl"> or <html style="direction: rtl;">
<body dir="rtl"> or <body style="direction: rtl;">

```

Base direction is an inherited CSS property, so will affect all content, unless direction is specified elsewhere.

## Block-level Directionality

Direction can be set for any HTML block elements e.g. `<div><p><table><ul>` etc using:

HTML:
```php
<div style="direction: rtl;">

```

or CSS stylesheet:

```css
div.right { direction: rtl; }

```

Block-level direction *may* affect text alignment, and will also influence text reversal in
<acronym title="Right-to-Left document, used for Hebrew and Arabic languages">RTL</acronym> text.

Note that margin/padding are NOT reversed by direction i.e. left-margin will still be left-margin in
<acronym title="Right-to-Left document, used for Hebrew and Arabic languages">RTL</acronym> state.

## Text alignment

The default value for text-align is "a nameless value which is dependent on direction". However, once text-align is
specified, it is respected and inherited by all descendants.

## Directionality in Tables

- direction can only be set on the top-level element of nested lists
- direction can only be set on `<table>`, NOT on `<thead><tbody><td>` etc.
- nested tables CAN have different directions

## Text Bidirectionality

mPDF analyses any mixed text which contains
<acronym title="Right-to-Left document, used for Hebrew and Arabic languages">RTL</acronym> text. The text between
HTML tags is divided into "chunks" of <acronym title="Left-to-Right document, used for most langauges">LTR</acronym>
and <acronym title="Right-to-Left document, used for Hebrew and Arabic languages">RTL</acronym> text.

<acronym title="Right-to-Left document, used for Hebrew and Arabic languages">RTL</acronym> text chunks are reversed
(both letter- and word-order).

If (and only if) the direction of the block is
<acronym title="Left-to-Right document, used for most langauges">LTR</acronym> then the order of the chunks is
reversed as well so that the sentence order is
<acronym title="Right-to-Left document, used for Hebrew and Arabic languages">RTL</acronym>.

This process when <acronym title="Right-to-Left document, used for Hebrew and Arabic languages">RTL</acronym>
arabic characters are present is fully automatic and unconfigurable. <bdo> etc has no effect.

However enclosing text in silent tags can sometimes help by altering the way the text is broken up into chunks to
process e.g.:

```html
english text <span>[arabic text]</span> english text

```

# Fonts

Arabic is a complex script requiring processing before output. However any appropriate font can be used - as long as
it contains the characters in Unicode blocks 'Arabic Presentation Forms' A and B (U+FB50 - U+FDFF, U+FE70 - U+FEFE).
Note that quite a large number of fonts contain the isolated characters but not the presentation forms.

Two fonts are bundled with mPDF: XB Zar and XB Riyaz. These are 2 of a number of fonts available from
<a href="http://wiki.irmug.com/index.php/X_Series_2">http://wiki.irmug.com/index.php/X_Series_2</a>.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** The script handling Arabic text (RTL) was rewritten in mPDF 5.5 with improved support for
  Pashto/Sindhi/Urdu/Kurdish, especially for joining characters and added new presentation forms.
</div>

## Non-unicode characters

Some characters in Pashto/Sindhi/Urdu/Kurdish do not have Unicode values for the final/initial/medial forms of the
characters. However, some fonts include glyphs for these characters "un-mapped" to Unicode (including XB Zar and XB
Riyaz, which are bundled with mPDF).

By editing <span class="filename">config_fonts.php</span> and adding to appropriate fonts:

```php
'unAGlyphs' => true,

```

this will force mPDF to use unmapped glyphs. It requires the font file to include a Format 2.0 POST table which
references the glyphs by name as e.g. `uni067C.med` or `uni067C.medi`

XB Riyaz, XB Zar, Arabic Typesetting (MS), Arial (MS) all contain this table. NB If you want to know if a font file
is suitable, you can open a .ttf file in a text editor and search for `uni067C.med` - if it exists, it may work!

Using `unAGlyphs` forces subsetting of fonts, and will not work with SIP/SMP fonts (using characters beyond the
Unicode BMP Plane).

mPDF maps these characters to part of the Private Use Area allocated by Unicode U+F500-F7FF. This could interfere
with correct use if the font already utilises these codes (unlikely).

# Alef Maksura

Detailed note on the Alef Maksura for advanced users:

U+0649 Alef Maksura only normally appears at the end of a word (in Arabic)

Initial and Medial forms exist in Unicode as FBE8 and FBE9 but are not in most fonts

So the final form is set in mPDF to show as FEF0; Initial and medial forms are shown as isolated/final, so that it
does at least display.

It seems that Initial and Medial forms are used in Koranic text.

I have left options encoded in <span class="function">function InitArabic()</span> if you want to alter - to make it
double-joining, it also needs to be added to <span class="parameter">$arabPrevLink</span> as `\xd9\x89`

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** mPDF deletes Unicode characters: U+200C,U+200D,U+200E,U+200F zero-width joiner/non-joiner,
  LTR and RTL marks so they will not appear - even though some fonts contain glyphs for these characters.
</div>

# See Also

- <a href="{{ "/reference/mpdf-variables/uselang.html" | prepend: site.baseurl }}">useLang</a> - Specify whether to recognise and support the HTML attribute lang
- <a href="{{ "/reference/mpdf-functions/setautofont.html" | prepend: site.baseurl }}">SetAutoFont()</a> - Use AutoFont to auto-detect text language in HTML input
- <a href="{{ "/reference/mpdf-variables/autofontgroupsize.html" | prepend: site.baseurl }}">autoFontGroupSize</a> - Specify the text chunk size to group when autodetecting text language
- <a href="{{ "/fonts-languages/lang-v5-x.html" | prepend: site.baseurl }}">lang</a> - Information on mPDF support for the HTML attribute lang
