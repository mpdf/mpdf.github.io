---
layout: page
title: SetAutoFont()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setautofont.html
modification_time: 2015-08-05T12:00:55+00:00
---

(mPDF &ge; 2.3   &le; 5.7)

SetAutoFont – Automatically detect language in the input HTML text and use appropriate fonts

# Description

void **SetAutoFont** ( int <span class="parameter">$flag</span> )

Turns on the AutoFont function, which automatically detects language in the input HTML text and uses appropriate fonts.

<div class="alert alert-danger" role="alert" markdown="1">
  **Note:** This function was removed in mPDF 6.0  Use the
  <a href="{{ "/reference/mpdf-variables/autolangtofont.html" | prepend: site.baseurl }}">`$autoLangToFont`</a> variable
  for the same results
</div>

AutoFont uses `<span lang="" class="lang_xx">...</span>` to mark text which is auto-detected.
See <a href="{{ "/fonts-languages/lang-v5-x.html" | prepend: site.baseurl }}">lang</a> for further details,
but note that `SetAutoFont()` also:

- disables support for `text-align=justify`
- sets <a href="{{ "/reference/mpdf-variables/uselang.html" | prepend: site.baseurl }}">`$useLang`</a>`= true`
- sets <a href="{{ "/reference/mpdf-variables/bidirectional.html" | prepend: site.baseurl }}">`$biDirectional`</a>`= true` (if `AUTOFONT_RTL` is set)

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** Using automatic language detection adds considerable processing
  time when creating a large document.
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** It is better to mark the HTML text yourself using block tags e.g. `<p lang="">`
  rather than relying on mPDF to set `<span lang="">` if possible; when set at block level, it allows appropriate
  changes to text alignment, character spacing and text-justification.
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** Automatic language detection is based on analysis of the characters in the text. It is
  therefore not precise, and in particular it may be difficult to distinguish between different arabic languages
  (arabic, farsi, urdu, pashto etc), CJK languages (even between Chinese and Japanese text in same text chunk).
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** Chinese Traditional and Simplified Chinese share so many characters that mPDF does not
  even try to distinguish which is being used. If AutoFont is being used and a chinese languages is identified,
  it is marked as `<span lang="zh">...</span>`.

  The font actually used for default chinese is determined by the settings in function
  <span class="function">GetCodepage()</span> in `\Mpdf\LangToFont` class.
  By default this is Chinese Simplified (GB, GBK).
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** SetAutoFont is only valid when using UTF-8 as the codepage for the document.
</div>

# Parameters

<span class="parameter">$flag</span>

: This parameter specifies which languages are auto-detected. Either an integer or one of the defined constants can be used.

  `SetAutoFont(0)` will turn off any auto-detection.

  Bitwise operators can be used for combining the defined constants e.g.
  `SetAutoFont(AUTOFONT_CJK | AUTOFONT_THAIVIET)` will turn on autodetection for CJK languages and Thai and Vietnamese.

  **Values**

  * `0` - Turn off any auto-detection
  * `AUTOFONT_CJK` = 1 - Any CJK languages (Chinese - Japanese - Korean)
  * `AUTOFONT_THAIVIET` = 2 - Thai and Vietnamese
  * `AUTOFONT_RTL` = 4 - RTL languages i.e. Hebrew and Arabic, including Pashto, Urdu etc.
  * `AUTOFONT_INDIC` = 8 - Indic languages such as Devanagari
  * `AUTOFONT_ALL` = 15 - All of the above

  Default: `AUTOFONT_ALL` (15)

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
  <td markdown="1">
  AutoFont marks up the `<span>` with `class="lang_xx"` as well as  `lang="xx"`
  </td>
</tr>
<tr>
    <td>2.3</td>
    <td>Function was added.</td>
</tr>
<tr>
  <td>2.3</td>
  <td markdown="1">
  Internal variable <span class="parameter">$pregRTLchars</span> was altered for better detection of arabic/hebrew
  </td>
</tr>
<tr>
  <td>6.0</td>
  <td markdown="1">
  Removed in favour of <a href="{{ "/reference/mpdf-variables/autolangtofont.html" | prepend: site.baseurl }}">`$autoLangToFont`</a> variable
  </td>
</tr>
</tbody>
</table>

# Examples

Example #1

```php
<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8']);

$html = '
Most of this text is in English, but has occasional words in Chinese:其貢獻在 or
Vietnamese: Một khảo sát mới cho biết, or maybe even Arabic: البرادعی

البرادعی -12- البرادعی

其貢獻在國際間亦備受肯定，2005年
';

$mpdf->SetAutoFont();

$mpdf->WriteHTML($html);
$mpdf->Output();

```

# See Also

- <a href="{{ "/reference/mpdf-variables/uselang.html" | prepend: site.baseurl }}">$useLang</a> - Specify whether to recognise and support the HTML attribute lang
- <a href="{{ "/reference/mpdf-variables/autofontgroupsize.html" | prepend: site.baseurl }}">$autoFontGroupSize</a> - Specify the text chunk size to group when autodetecting text language
- disableMultilingualJustify (mPDF < 6.0) - Specify whether to disable text justification in multilingual documents
- <a href="{{ "/fonts-languages/lang-v5-x.html" | prepend: site.baseurl }}">lang</a> - Information on mPDF support for the HTML attribute lang
