---
layout: page
title: autoFontGroupSize
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/autofontgroupsize.html
modification_time: 2015-08-05T12:01:39+00:00
---

(mPDF &ge; 2.3 & < 6.0)

autoFontGroupSize – Specify the chunk size of text to group when auto-detecting languages using SetAutoFont()

# Value

void **autoFontGroupSize**

Specify the chunk size of text to group when auto-detecting languages using
<a href="{{ "/reference/mpdf-functions/setautofont.html" | prepend: site.baseurl }}">SetAutoFont()</a>.

<div class="alert alert-danger" role="alert" markdown="1">
  **Note:** This variable is removed from mPDF v 6.0
</div>

Bigger chunks (`3`) allows reversal of whole sentences of RTL text, not just letters in individual words; the disadvantage
is that it may include bits of other languages either side, forcing them in the font used for the "foreign" language.

Smaller chunks (`1`) - analysing word by word - takes more processing time, and cannot reverse RTL sentences. In text with
CJK language, it makes it harder for mPDF to correctly identify between e.g. Korean and Chinese which share some
characters. Thus words may be identified alternately as Korean or Chinese.

# Values

<span class="parameter">$autoFontGroupSize</span>

**Values**

* `1`: individual words are analysed
* `2`: words are analysed to see if they are distinctive of a particular language, and then surrounding text that is
  compatible is grouped together with these words
* `3`: as big chunks as possible are grouped, including ASCII characters and punctuation

Default: `2`

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
  <td>2.3</td>
  <td>Variable was added.</td>
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

$html = "
<style>
p {
    font-family: FreeSerif;
}
</style>

Most of this text is in English, but has occasional words in Chinese:来自商务
or Vietnamese: Một khảo sát mới cho biết, or maybe even Arabic: الابيض

الابيض "بشدة" تفجير

其截至 WHO 年底 2005 笔

";

$mpdf->SetAutoFont();

$mpdf->autoFontGroupSize = 1;
$mpdf->WriteHTML($html);

$mpdf->autoFontGroupSize = 2;
$mpdf->WriteHTML($html);

$mpdf->autoFontGroupSize = 3;
$mpdf->WriteHTML($html);

$html2 = "
In this example, the word boundaries from different languages are already defined
by marking with &lt;span&gt; tags

Most of this text is in English, but has occasional words in
Chinese:<span>来自商务</span> or Vietnamese: <span>Một khảo sát mới cho biết</span>,
or maybe even Arabic: <span>الابيض</span>
";

$mpdf->WriteHTML($html2);

$mpdf->Output();

```

# See Also

- <a href="{{ "/reference/mpdf-variables/uselang.html" | prepend: site.baseurl }}">useLang</a> - Specify whether to recognise and support the HTML attribute lang
- <a href="{{ "/reference/mpdf-variables/autofontgroupsize.html" | prepend: site.baseurl }}">SetAutoFont()</a> - Use AutoFont to auto-detect text language in HTML input
- disableMultilingualJustify (mPDF < 6.0) - Specify whether to disable text justification in multilingual documents
- <a href="{{ "/fonts-languages/lang-v5-x.html" | prepend: site.baseurl }}">lang</a> - Information on mPDF support for the HTML attribute lang
