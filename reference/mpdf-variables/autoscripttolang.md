---
layout: page
title: autoScriptToLang
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/autoscripttolang.html
modification_time: 2017-03-13T15:06:17+01:00
---

(mPDF &ge; 6.0)

# Description

boolean **autoScriptToLang**

When `true`, marks up HTML text using the lang attribute, based on the Unicode script
block in question, and values in `\Mpdf\Language\ScriptToLanguageIntergface` interface implementation set for mPDF.

<div class="alert alert-info" role="alert" markdown="1">
  **Note**: Prior to mPDF 7.0 this behaviour is being set-up by altering `config_script2lang.php` file in mPDF path root.
</div>

# Values

<span class="parameter">$autoScriptToLang</span> = `true`\|`false`

**Values**

* `true`: Mark up HTML text using the lang
  attribute, based on the Unicode script block in question, and values in `\Mpdf\ScriptToLang` class.
* `false`: No markup applied.

Default: `false`

# See Also

- <a href="{{ "/fonts-languages/fonts-in-mpdf-7-x.html" | prepend: site.baseurl }}">Fonts in mPDF 7.x</a>
- <a href="{{ "/reference/mpdf-variables/autolangtofont.html" | prepend: site.baseurl }}">autoLangToFont</a> - selects the font to use, based on the HTML lang attribute
- <a href="{{ "/fonts-languages/automatic-font-selection.html" | prepend: site.baseurl }}">Automatic Font selection</a>
