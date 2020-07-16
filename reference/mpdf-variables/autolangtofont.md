---
layout: page
title: autoLangToFont
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/autolangtofont.html
modification_time: 2017-03-13T15:06:17+01:00
---

(mPDF &ge; 6.0)

# Description

boolean **autoLangToFont**

When `true`, selects the font to use, based on the HTML lang attribute,
using values in `\Mpdf\Language\LanguageToFontInterface` interface implementation set for mPDF.

<div class="alert alert-info" role="alert" markdown="1">
  **Note**: Prior to mPDF 7.0 this behaviour is being set-up by altering `config_lang2font.php` file in mPDF path root.
</div>

# Values

`$autoLangToFont` = `true`\|`false`

**Values**

* `true`: Selects the font to use, based on
  the HTML lang attribute, using values in `\Mpdf\LangToFont` class.
* `false`: Font selection unaffected.

Default: `false`

# Usage

Set at document initiation
```php
<?php
$mpdf = new \Mpdf\Mpdf(['autoLangToFont' => false]);

```

# See Also

- <a href="{{ "/fonts-languages/fonts-in-mpdf-7-x.html" | prepend: site.baseurl }}">Fonts in mPDF 7.x</a>
- <a href="{{ "/reference/mpdf-variables/autoscripttolang.html" | prepend: site.baseurl }}">autoScriptToLang</a> - marks up HTML text using the lang attribute, based on the Unicode script block
- <a href="{{ "/fonts-languages/automatic-font-selection.html" | prepend: site.baseurl }}">Automatic Font selection</a>
