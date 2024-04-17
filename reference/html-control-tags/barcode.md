---
layout: page
title: barcode
parent_title: HTML control tags
permalink: /reference/html-control-tags/barcode.html
modification_time: 2015-08-05T12:01:19+00:00
---

(mPDF &ge; 4.0)

barcode – Add a Barcode to the document

# Description

&lt;**barcode** 
<span class="parameter">$code</span>
[ <span class="parameter">$type</span> ]
[ <span class="parameter">$text</span> ]
[ <span class="parameter">$size</span> ]
[ <span class="parameter">$height</span> ]
[ <span class="parameter">$pr</span> ] /&gt;

Add a Barcode to the document.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** See <a href="{{ "/what-else-can-i-do/barcodes.html" | prepend: site.baseurl }}">barcodes</a>
  and the example file for further information.
</div>

# Attributes

<span class="parameter">$code</span>

: Specifies the code to translate to a barcode.

  <span class="parameter">$code</span> for EAN13 / ISBN / ISSN / UPCA / UPCE can contain hyphens (`-`) but no other
  characters are allowed.

  Check-digits can be optionally included for EAN13 / ISBN / ISSN / UPCA / UPCE

  It is recommended you convert HTML special characters to entities using `htmlspecialchars('Content')`.

  <span class="smallblock">REQUIRED</span>

<span class="parameter">$type</span>

: <span class="parameter">$type</span> specifies the type of barcode required.

  Default: `'EAN13'`

  **Values**

  * `'EAN13'`, `'ISBN'`, `'ISSN'`, `'UPCA'`, `'UPCE'`, `'EAN8'`
  * `'EAN13P2'`, `'ISBNP2'`, `'ISSNP2'`, `'UPCAP2'`, `'UPCEP2'`, `'EAN8P2'` (with EAN-2 supplement code i.e. 01-99 )
  * `'EAN13P5'`, `'ISBNP5'`, `'ISSNP5'`, `'UPCAP5'`, `'UPCEP5'`, `'EAN8P5'`  (with EAN-5 supplement code e.g. 90000 )
    (`'UPCE'` needs the UPCA <span class="parameter">$code</span> entered)
  * `'IMB'`, `'RM4SCC'`, `'KIX'`, `'POSTNET'`, `'PLANET'`
  * `'C128A'`, `'C128B'`, `'C128C'`
  * `'EAN128A'`, `'EAN128B'`, `'EAN128C'`
  * `'C39'`, `'C39+'`, `'C39E'`, `'C39E+'`
  * `'S25'`, `'S25+'`, `'I25'`, `'I25+'`, `'I25B'`, `'I25B+'`
  * `'C93'`
  * `'MSI'`, `'MSI+'`
  * `'CODABAR'`
  * `'CODE11'`

  Note: Type with a `'+'` at the end includes check-digits.

<span class="parameter">$text</span>

: **EAN13 only**

  Specifies whether to show the code at the top of an EAN13 barcode.

  Note that ISBN and ISSN always show the text, prefixed with ISBN or ISSN.

  Values: `1` or `0`

  Default: `0`

<span class="parameter">$size</span>

: Specifies the size of the barcode.

  <span class="parameter">$size (float)</span> will scale the nominal size of the barcode as a factor of 1

  `size="1.5"` will generate a barcode one and half times the height and width of
  the nominal size set in mPDF

  NB Sizes between `'0.8'` and `'2.0'` are recommended for EAN13 and similar barcodes.

  Default: `'1'`

<span class="parameter">$height</span>

: Specifies the height of the barcode.

  <span class="parameter">$height (float)</span> will determine the relative height of the barcode as a factor of 1

  The height factor is applied after the <span class="parameter">$size </span>

  `size="2" height="0.5"` will generate a barcode of twice the nominal width, but with the
  nominal height.

  NB Ignored for Postcode barcodes

  Default: `'1'`

<span class="parameter">$pr</span>

: Specifies the print ratio i.e. narrow:wide bar width for some types of barcode.

  Valid for:
  * `'C39'` (Code 39),
  * Standard and Interleaved 2 of 5 (`'S25'`, `'I25'` etc.),
  * `'CODABAR'` and `'CODE11'`

  Default: Varies between `2.5` and `3.0` dependent on barcode specification (see
  <a href="{{ "/what-else-can-i-do/barcodes.html" | prepend: site.baseurl }}">barcodes</a>)

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
  <td>4.0</td>
  <td>The function was added.</td>
</tr>
</tbody>
</table>

# Examples

```html

<barcode code="978-0-9542246-0" type="ISBN" height="0.66" text="1" />

```

```html

<barcode code="04210000526" type="UPCE" />
<!-- Note the UPC-A code is required which is converted to UPCE -->

```

```html

<barcode code="978-0-9542246-0-8 07" type="ISSNP2" text="1" />

```

```html

<barcode code="01234567094987654321-01234567891" type="IMB" />

```

```html

<barcode code="SN34RD1A" type="RM4SCC" />

```

```html

<barcode code="54321068" type="I25" />

```

```html

<barcode code="A34698735B" type="CODABAR" />

```

# Notes

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** The following CSS properties can be set on the `<barcode />` element as though it were standard HTML:

  * `vertical-align`  (default: middle)
  * `border*`
  * `margin*`
  * `padding*` (default 2 mm for EAN13)
  * `color` (default: black)
  * `background-color` (default: white)

  NB: padding has defaults as `0`(mm) if not specified

  Padding is in addition to any specified quiet zones/light margins.

</div>

## Example with CSS

```html
<style>
.barcode {
    padding: 1.5mm;
    margin: 0;
    vertical-align: top;
    color: #000044;
}
.barcodecell {
    text-align: center;
    vertical-align: middle;
}
</style>

<div class="barcodecell"><barcode code="54321068" type="I25" class="barcode" /></div>

```

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** mPDF will generate a Checkdigit for most barcodes if required, which is added to the
  barcode. If you need to know what the checkdigit is for a particular barcode, you could do the following:
</div>

## Example - Generating a checkdigit

```php
<?php

// Must not contain any - or spaces
include('../src/Barcode.php');

$bc = new \Mpdf\Barcode();
echo $bc->getChecksum('9344543204454', 'C93');

```

# See Also

- <a href="{{ "/what-else-can-i-do/barcodes.html" | prepend: site.baseurl }}">Barcodes</a> - More information on types of barcode
