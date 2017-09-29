---
layout: page
title: Font names
parent_title: Fonts & Languages
permalink: /fonts-languages/font-names.html
modification_time: 2015-08-05T11:59:28+00:00
---

## CSS font-family name

Every font family has a name which is defined in the font file. This is the name by which your computer OS
registers and recognises the font family.

This is also the name used in CSS.

## mPDF font-family name

This is the name used by mPDF internally to process fonts. This could be anything you like, but by default mPDF will
convert CSS font-family names by removing any spaces and changing to lowercase. Reading the CSS name above, mPDF will
look for a "mPDF font-family name" of 'trebuchetms'.

Next it will look for a translation in `$this->fonttrans` in the `$config` constructor parameter. Imagine that we also
wished to recognise 'Trebuchet', we would add:

```php
<?php
$this->fonttrans = array(
    'trebuchet' => 'trebuchetms',
);

```

mPDF font-family names should therefore always be lower-case and contain no spaces. When mPDF needs to refer to a specific
variant (bold, italic etc.) it will use the mPDF font-family name (lowercase) followed by `B`, `I`, or `BI` (uppercase).
The regular/normal Trebuchet MS will be `trebuchetms`, and the bold variant will be referred to as `trebuchetmsB`.

These mPDF font names are used in other places:

- all the other configurable variables in the `$config` constructor parameter use the mPDF font-family name
- use the mPDF font name in the `$config` constructor parameter to make it selectively available in certain language.
- if used in the PHP script e.g. `$mpdf = new \Mpdf\Mpdf(['default_font' => 'trebuchetms']);`

## Font file name

To make a font available to mPDF, you need to specify the Truetype .ttf font files for each variant.

These should be defined in `$config` constructor parameter as an array:

```php
<?php
$this->fontdata = [
    "trebuchetms" => [
        'R' => "trebuc.ttf",
        'B' => "trebucbd.ttf",
        'I' => "trebucit.ttf",
        'BI' => "trebucbi.ttf",
    ],
];

```

Each font-family must have a Regular (`'R'`) file defined - the others (Bold `'B'`, Italic `'I'`, bold-italic `'BI'`) are optional.

mPDF looks for files based on the `fontDirectory` <a href="{{ "/configuration/configuration-v7-x.html" | prepend: site.baseurl }}">
configuration variable</a>. This is, by default set to `ttfonts` directory in the root of mPDF installation.

Any readable path or an array of paths can be set to the `fontDirectory` directive. When an array is set, mPDF will scan
directories in the defined order.

This is useful if you are running mPDF on a computer which already has a directory with TTF fonts in (e.g. on Windows)

Note that the font-file names are case-sensitive and can contain capitals.

