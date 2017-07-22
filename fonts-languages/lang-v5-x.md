---
layout: page
title: lang v5.x
parent_title: Fonts & Languages
permalink: /fonts-languages/lang-v5-x.html
modification_time: 2015-08-05T11:59:32+00:00
---

When creating a multilingual document containing Arabic, Indic,
<acronym title="Chinese-Japanese-Korean languages">CJK</acronym>, Vietnamese or Thai languages, the text in these
languages needs to be identified in order to correctly display them using appropriate fonts.

Marking up your HTML text using the lang attribute is one way to do this. The attribute can be used on any block or
in-line tag e.g. `<div lang="zh-CN">....</div>` or `<span lang="ru">...</span>`. It is also
recognised in `<body>` or `<html>` tags.

**Important:** Support for the attribute <span class="parameter">$lang</span> is only active when the variable
<a href="{{ "/reference/mpdf-variables/uselang.html" | prepend: site.baseurl }}">$useLang</a> is set to
`true` (Default).

The language codes supported are determined by <span class="filename">config_cp.php</span> :

- en, ca, cy, da, de, es, eu, fr, ga, fi, is, it, nl, no, pt, sv
- cs, hr, hu, pl, ro, sk, sl
- bg, mk, ru, sr, uk
- et, kl, lt, lv
- el, tr
- vi, th
- CJK: ja, zh, zh-CN, zh-HK, zh-TW, ko
- RTL: he, ar, fa, ps, ur, sd
- INDIC: as, bn, gu, hi, kn, ks, ml, ne, or, pa, sd-IN, ta, te

See <a href="{{ "/reference/codepages-glyphs/iso-639-1-language-codes.html" | prepend: site.baseurl }}">ISO 639-1 language codes</a>.

Codes such as `'en-US'` are supported, and interpreted as `'en'`

When a language is set, the following happens (determined by function `GetCodepage()`):

- available fonts are restricted to those which contain the necessary glyphs to display this language
- justification type (`jSpacing` mPDF < 5.1) is set when a block tag has the property
  `text-align: justify;` for span/inline elements the justification
  is disabled for the enclosing block element.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** Automatic language detection using `SetAutoFont()`
  will detect language use in the text passed to mPDF, and add
  `<span lang="xx" class="lang_xx">..</span>` tags to mark up.
  Using automatic language detection may add to the processing time when creating a large document.
</div>

# See Also

- <a href="{{ "/reference/mpdf-variables/uselang.html" | prepend: site.baseurl }}">useLang</a> - Specify whether to recognise and support the HTML attribute lang
- <a href="{{ "/reference/mpdf-functions/setautofont.html" | prepend: site.baseurl }}">SetAutoFont()</a> - Use AutoFont to auto-detect text language in HTML input
- <a href="{{ "/reference/mpdf-variables/autofontgroupsize.html" | prepend: site.baseurl }}">autoFontGroupSize</a> - Specify the text chunk size to group when autodetecting text language
