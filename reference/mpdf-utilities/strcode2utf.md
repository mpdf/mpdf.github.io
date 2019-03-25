---
layout: page
title: strcode2utf()
parent_title: mPDF Utilities
permalink: /reference/mpdf-utilities/strcode2utf.html
modification_time: 2015-08-05T12:02:42+00:00
---

(mPDF &ge;1.0 && < 7.0)

strcode2utf – Convert HTML numerical entities to UTF-8 encoded string

<div class="alert alert-warning" role="alert" markdown="1">
  **Note:** in mPDF &ge; 7.0 use `\Mpdf\Utils\UtfString::strcode2utf` method.
</div>

# Description

string **strcode2utf** ( string <span class="parameter">$text</span> [, boolean <span class="parameter">$low</span> ])

Returns a UTF-8 encoded string.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** `strcode2utf()` is useful for preparing text to be
  used as a Watermark, or for the metadata properties of Title, Author, Creator and Keywords - which require UTF-8
  encoded strings with no entities.
</div>

# Parameters

<span class="parameter">$text</span>

: The input string, containing HTML numerical entities e.g. `&#8123;` or `&#x2022;`

<span class="parameter">$low</span>

: Specifies whether to convert HTML numerical entities of ASCII characters (< 128).

  Default: `true`

  **Values**

  * `true`: Convert all HTML numerical entities to UTF-8 characters
  * `false`: Only convert characters above codepoint 127

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** This function does not convert named character
  entities like `&amp;`, `&quot;` or `&raquo;`
</div>

# Return value

Returns a UTF-8 encoded string.

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
  <td>1.0</td>
  <td>Function was added.</td>
</tr>
<tr>
  <td>7.0</td>
  <td>Function was removed in favor of <code>\Mpdf\Utils\UtfString::strcode2utf</code> static class method</td>
</tr>
</tbody>
</table>

# Examples

```php
<?php

$mpdf = new \Mpdf\Mpdf();

$mpdf->showWatermark = true;

$wm = \Mpdf\Utils\UtfString::strcode2utf("&#1575;&#1610;&#1604;&#1575;&#1578; &#1601;&#1610;&#1605;&#1575;
    &#1575;&#1610;&#1604;&#1575;&#1578; &#1601;&#1610;&#1605;&#1575;");

$mpdf->SetWatermarkText($wm);
$mpdf->WriteHTML('Hello World');
```

# See Also

- <a href="{{ "/reference/mpdf-functions/setwatermarktext.html" | prepend: site.baseurl }}">SetWatermarkText()</a> - Sets the text to use for a Watermark
- <a href="{{ "/reference/mpdf-functions/settitle.html" | prepend: site.baseurl }}">SetTitle()</a> - Set document Title in metadata
- <a href="{{ "/reference/mpdf-functions/setauthor.html" | prepend: site.baseurl }}">SetAuthor()</a> - Set document Author in metadata
- <a href="{{ "/reference/mpdf-functions/setcreator.html" | prepend: site.baseurl }}">SetCreator()</a> - Set document Creator in metadata
- <a href="{{ "/reference/mpdf-functions/setsubject.html" | prepend: site.baseurl }}">SetSubject()</a> - Set document Subject in metadata
- <a href="{{ "/reference/mpdf-functions/setkeywords.html" | prepend: site.baseurl }}">SetKeywords()</a> - Set document Keywords in metadata
