---
layout: page
title: defaultPageNumStyle
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/defaultpagenumstyle.html
modification_time: 2015-08-05T12:01:54+00:00
---

(mPDF &ge; 6.0)

# Description

void **defaultPageNumStyle**

Specifies a default page number style to use from the start of the document.

For more information, see <a href="{{ "/paging/page-numbering.html" | prepend: site.baseurl }}">page numbering</a>.

# Values

<span class="parameter">$defaultPageNumStyle</span>

**Values**

(Uses the same values as for list-style-type)

`'1'` \| `'A'` \| `'a'` \| `'I'` \| `'i'` \| `'disc'` \| `'circle'` \| `'square'` \| `'decimal'` \| `'lower-roman'` \|
`'upper-roman'` \| `'lower-latin'` \| `'upper-latin'` \| `'lower-alpha'` \| `'upper-alpha'` \| `'none'`

`'arabic-indic'` \| `'bengali'` \| `'cambodian'` \| `'cjk-decimal'` \| `'devanagari'` \| `'gujarati'` \| `'gurmukhi'` \|
`'hebrew'` \|`'kannada'` \| `'khmer'` \| `'lao'` \| `'malayalam'` \| `'oriya'` \| `'persian'` \| `'telugu'` \|
`'thai'` \| `'urdu'` \| `'tamil'`

`'1'` = decimal
`'A'` = upper-latin
`'a'` = lower-latin
`'I'` = upper-roman
`'i'` = lower-roman

Default: `'1'`

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
  <td>6.0</td>
  <td>Variable was added.</td>
</tr>
</tbody>
</table>

# Usage

Set at document initiation
```php
<?php
$mpdf = new \Mpdf\Mpdf(['defaultPageNumStyle' => 'A']);

```


# Examples

```php
<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf(['defaultPageNumStyle' => 'a']);

// Set a simple Footer including the page number
$mpdf->setFooter('{PAGENO}');

$mpdf->WriteHTML('Section 1');
$mpdf->WriteHTML('Page a ');

// add another page
$mpdf->AddPage();
$mpdf->WriteHTML('Section 2 - More content');

$mpdf->WriteHTML('<pagebreak resetpagenum="1" pagenumstyle="1" />');
$mpdf->WriteHTML('Section 3 - Page with page number starting at 1');

$mpdf->Output();

```


# See Also

* <a href="{{ "/paging/page-numbering.html" | prepend: site.baseurl }}">Page numbering</a>
