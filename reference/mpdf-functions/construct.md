---
layout: page
title: __construct()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/construct.html
modification_time: 2016-06-24T15:36:37+02:00
---

(mPDF &ge; 7.0)

@todo

__construct – Initialise an instance of mPDF class

# Description

`\Mpdf\Mpdf::__construct([array $config = []])`

Initialise an instance of mPDF class.

# Parameters

<span class="parameter">$config</span>

: This parameter specifies configuration of the new document.

  * Apart from configuration variables defined in
  `ConfigVariables` and `FontVariables` classes it can obtain variables which where the arguments
  from the constructor of   mPDF&nbsp;<&nbsp;7.0: `mode`, `format`, `default_font_size`, `default_font`, `margin_left` (formerly `$mgl`),
  `margin_right` (formerly `$mgr`), `margin_top` (formerly `$mgt`), `$margin_bottom` (formerly `mgb`), `$margin_header` (formerly `$mgh`),
  `margin_footer` (formerly `$mgf`), `orientation`. These variables with their defaults are described in the next section.

  * The other configuration keys are listed at the <a href="{{ "/reference/mpdf-variables/overview.html" | prepend: site.baseurl }}">configuration overview</a>.

## Variables with defaults from constructor

`mode`

: Mode of the document. Is parsed from values of various formats:

  * **Codepage Values** (case-insensitive)

    `'c'`
    `'...-x'`
    `'...-s'` or `'s'`
    `'...+aCJK'` or `'+aCJK'`
    `'...-aCJK'` or `'-aCJK'`

    where `...` can be any string. Only language/country codes will have any effect, but other strings are parsed for
    backwards compatability (but have no effect).

    Only some combinations make sense. See
    <a href="{{ "/fonts-languages/choosing-a-configuration-v7-x.html" | prepend: site.baseurl }}">Choosing a configuration</a>
    for more details.

  * **Country/Language code values** (case-insensitive)

    Country/language codes are defined in `\Mpdf\LangToFont` class

    A country/language code can be passed as e.g. `'en-GB'` or `'en_GB'` or `'en'`

    <div class="alert alert-info" role="alert" markdown="1">
      **Note:** If the <span class="parameter">mode</span> is set by passing a country/language string,
      this may also set: available fonts, text justification, and directionality
      <acronym title="Right-to-Left document, used for Hebrew and Arabic languages">RTL</acronym>
    </div>

    <div class="alert alert-info" role="alert" markdown="1">
      **Note:** There is a useful list of language/country codes at:
      <a href="http://www.i18nguy.com/unicode/language-identifiers.html">http://www.i18nguy.com/unicode/language-identifiers.html</a>
    </div>

`format`

: Can be specified either as a pre-defined page size, or as an array of width and height in millimetres (see Example #2 below).

  Default value: `'A4'`

  **Values** (case-insensitive)

  - `'A0`' - `'A10'`, `'B0'` - `'B10'`, `'C0'` - `'C10'`
  - `'4A0'`, `'2A0'`, `'RA0'` - `'RA4'`, `'SRA0'` - `'SRA4'`
  - `'Letter'`, `'Legal'`, `'Executive'`, `'Folio'`
  - `'Demy'`, `'Royal'`
  - `'A'` (Type A paperback 111x178mm)
  - `'B'` (Type B paperback 128x198mm)
  - `'Ledger'`\*, `'Tabloid'`\*

  All of the above values can be suffixed with `'-L'` to force a Landscape page orientation document e.g. `'A4-L'`.

  If <span class="parameter">format</span> is defined as a string, the <span class="parameter">orientation</span>
  parameter will be ignored.

  \* Ledger and Tabloid are standard formats with the same page size but different orientation
  (Ledger is landscape, and Tabloid is portrait). Prior to mPDF 6.1, mPDF treats these identically; if you wished to use
  Ledger, you should have specified `'Ledger-L'` for landscape.

`default_font_size`

: Sets the default document font size in **points** (pt)

  <span class="smallblock">BLANK</span> or omitted or `0` uses the default value set in <span class="parameter">defaultCSS</span>
  configuration variable for the font-size of the BODY.

`default_font`

: Sets the default font-family for the new document.

  <span class="smallblock">BLANK</span> or omitted uses default value set in <span class="parameter">defaultCSS</span> for the font-family of BODY
  unless <span class="parameter">codepage</span> has been set to `'win-1252'` (e.g. by using `'mode' => 'c'`). If
  `'codepage' => "win-1252"`, the appropriate core Adobe font will be set i.e. Helvetica, Times, or Courier.

`margin_left`
`margin_right`
`margin_top`
`margin_bottom`
`margin_header`
`margin_footer`

: Set the page margins for the new document.

  All values should be specified as <span class="smallblock">LENGTH</span> in millimetres.

  If you are creating a <span class="smallblock">DOUBLE-SIDED</span> document, the margin values specified will be
  used for <span class="smallblock">ODD</span> pages; left and right margins will be mirrored for
  <span class="smallblock">EVEN</span> pages.

  <span class="smallblock">BLANK</span> or omitted uses the default values.

  Default values:

  - <span class="parameter">margin_left</span>:   `15`
  - <span class="parameter">margin_right</span>:  `15`
  - <span class="parameter">margin_top</span>:    `16`
  - <span class="parameter">margin_bottom</span>: `16`
  - <span class="parameter">margin_header</span>:  `9`
  - <span class="parameter">margin_footer</span>:  `9`

`orientation`

: This attribute specifies the default page orientation of the new document if <span class="parameter">format</span>
  is defined as an array. This value will be ignored if <span class="parameter">format</span> is a string value.


  Default value: `'P'`

  **Values** (case-insensitive)

   * `'P'`: Portrait
   * `'L'`: Landscape

# Changelog

<table class="table">
<thead>
  <tr>
    <th>Version</th>
    <th>Description</th>
  </tr>
</thead>
<tbody>
<tr>
  <td>6.1</td>
  <td>Introduced to support higher versions of PHP</td>
</tr>
<tr>
  <td>7.0</td>
  <td markdown="1">
  Parameters replaced with single `$config` parameter array
  </td>
</tr>
</tbody>
</table>

# Examples

## Example #1

```php
<?php

// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();

$mpdf->WriteHTML('Hello World');

$mpdf->Output('filename.pdf');

```

## Example #2

```php
<?php
// Define a new \Mpdf\Mpdf document using utf-8 fonts
$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8']);

// Define a new \Mpdf\Mpdf document using win-1252 fonts based on a language/country code
$mpdf = new \Mpdf\Mpdf(['mode' => 'en-GB']);

// Define a Landscape page size/format by name
$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);

// Define a page size/format by array - page will be 190mm wide x 236mm height
$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [190, 236]]);

// Define a page using all default values except "L" for Landscape orientation
$mpdf = new \Mpdf\Mpdf(['orientation' => 'L']);

```

# Notes

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** `_MPDF_PATH` was required to be
  defined explicitly prior to mPDF 4.0 e.g. `define('_MPDF_PATH','../')`. From mPDF 4.0 the value should be automatically
  defined by the script itself when including the `mpdf.php` file.
</div>

# See Also

- <a href="{{ "/reference/mpdf-functions/writehtml.html" | prepend: site.baseurl }}">WriteHTML()</a> - Write HTML to the document
- <a href="{{ "/reference/mpdf-functions/output.html" | prepend: site.baseurl }}">Output()</a> - Finalise and output the document
