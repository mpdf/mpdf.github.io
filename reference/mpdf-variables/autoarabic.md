---
layout: page
title: autoArabic
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/autoarabic.html
modification_time: 2015-08-05T12:01:38+00:00
---

(mPDF &ge; 6.0)

# Description

boolean **autoArabic**

Tells mPDF whether to try and distinguish between Arabic languages when using `autoScriptToLang`.

Analysis of the text will attempt to distinguish Arabic, Farsi, Pashto, Urdu and Sindhi. If active, the text will then be
marked with a specific language tag e.g. `"pa"`, `"ur"`, `"fa"` etc.

# Values

<span class="parameter">$autoArabic</span> = `true`\|`false`

**Values**

* `false`: Arabic script will be marked with the attribute `lang='und-Arab'` when using `autoScriptToLang`.
* `true`: mPDF will attempt to distinguish Arabic, Farsi, Pashto, Urdu and Sindhi, and text will then be marked with a
  specific language tag e.g. `"pa"`, `"ur"`, `"fa"` etc.

Default: `false`

# Usage

Set at document initiation
```php
<?php
$mpdf = new \Mpdf\Mpdf(['autoArabic' => true]);

```

# See Also

* <a href="{{ "/reference/mpdf-variables/autoscripttolang.html" | prepend: site.baseurl }}">autoScriptToLang</a> - marks up HTML text using the lang attribute, based on the Unicode script block in question
* <a href="{{ "/fonts-languages/automatic-font-selection.html" | prepend: site.baseurl }}">Automatic Font selection</a>
