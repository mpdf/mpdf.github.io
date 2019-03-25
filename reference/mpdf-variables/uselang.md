---
layout: page
title: useLang
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/uselang.html
modification_time: 2015-08-05T12:02:38+00:00
---

(mPDF &ge; 2.3 && &le; 5.7)

useLang – Specify whether to recognise/support the HTML attribute <span class="parameter">lang</span>

# Description

void **useLang**

Specify whether to recognise/support the HTML attribute <span class="parameter">lang</span>.

See <a href="{{ "/fonts-languages/lang-v5-x.html" | prepend: site.baseurl }}">lang</a> for more details.

<div class="alert alert-danger" role="alert" markdown="1">
  **Note:** This variable was removed in mPDF 6.0 
  <a href="{{ "/reference/mpdf-variables/autoscripttolang.html" | prepend: site.baseurl }}">autoScriptToLang</a>
  should be used for the same effect.
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** The default value was changed to `true` in version 4.0
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** `lang=` is a useful way to select appropriate fonts for some
  languages.

  Automatic font selection using
  <a href="{{ "/reference/mpdf-functions/setautofont.html" | prepend: site.baseurl }}">SetAutoFont()</a> marks up the
  HTML with the <span class="parameter">lang</span> attribute, so useLang is required. Using automatic font selection
  adds considerable processing time when creating a large document. Automatic font selection is only valid when using
  UTF-8 as the codepage for the document.
</div>

# Values

<span class="parameter">$useLang</span> =`true`\|`false`

**Values**

* `true`: recognise/support the HTML attribute <span class="parameter">lang</span>.
* `false`: does not recognise/support the HTML attribute <span class="parameter">lang</span>.

Default: `true`

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
<tr>
  <td>4.0</td>
  <td>Default value changed to <code>true</code></td>
</tr>
</tbody>
</table>

# Examples

Example #1

```php
<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf('utf-8');

$html = '

Start with some English text

 هل ستسفر الجهود الدبلوماسية الجارية عن حلول؟ وكيف تنظر للاتهامات لبعض هذه الدول بالتدخل في الشأن العراقي، والتورط في دعم عمليات العنف؟ والى اي مدى يبدو الوضع في العراق انعكاسا للصراعات الإقليمية في المنطقة؟

And again in English

';

$mpdf->useLang = true;

$mpdf->WriteHTML($html);
$mpdf->Output();

```

# See Also

- <a href="{{ "/reference/mpdf-variables/autofontgroupsize.html" | prepend: site.baseurl }}">SetAutoFont()</a> - Use AutoFont to auto-detect text language in HTML input
- <a href="{{ "/reference/mpdf-variables/autofontgroupsize.html" | prepend: site.baseurl }}">autoFontGroupSize</a> - Specify the text chunk size to group when autodetecting text language
- disableMultilingualJustify (mPDF < 6.0) - Specify whether to disable text justification in multilingual documents
- <a href="{{ "/fonts-languages/lang-v5-x.html" | prepend: site.baseurl }}">lang</a> - Information on mPDF support for the HTML attribute lang
