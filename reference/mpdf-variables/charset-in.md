---
layout: page
title: charset_in
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/charset-in.html
modification_time: 2015-08-05T12:01:46+00:00
---

(mPDF &ge; 1.0)

# Description

string **charset_in**

Defines the character encoding of any input HTML. Use it together with <span class="parameter">$allow_charset_conversion</span>
to manually set an input encoding.

# Values

<span class="parameter">$charset_in</span>

**Values** (case-insensitive)

* Any string value allowed which is valid for the PHP function <a href="{{ "/reference/codepages-glyphs/iconv.html" | prepend: site.baseurl }}">iconv()</a>.
  This appears to vary depending on the local configuration. See the manual entry for
  <a href="{{ "/reference/codepages-glyphs/iconv.html" | prepend: site.baseurl }}">iconv</a> for usual values. You may need
  to use `'cp1252'` or `'windows-1252'` instead of `'win-1252'`, or `'iso-88591'` instead of `'iso-8859-1'`.
* <span class="smallblock">BLANK</span> or omitted: Expect all text input as UTF-8 encoding.

# Examples

Example #1

```php
<?php
$html = '... the body of the document encoded in ISO-8859-4 ...';

$mpdf = new \Mpdf\Mpdf();

$mpdf->allow_charset_conversion = true;
$mpdf->charset_in = 'iso-8859-4';
$mpdf->WriteHTML($html);

$mpdf->Output();

```

# See Also

* <a href="{{ "/reference/mpdf-functions/writehtml.html" | prepend: site.baseurl }}">WriteHTML()</a> - Write HTML code to document
* <a href="{{ "/reference/mpdf-variables/allow-charset-conversion.html" | prepend: site.baseurl }}">allow_charset_conversion</a> - Activates character encoding conversion of input text
* <a href="{{ "/reference/codepages-glyphs/iconv.html" | prepend: site.baseurl }}">iconv</a> - list of values accepted for this variable

