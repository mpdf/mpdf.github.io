---
layout: page
title: autoVietnamese
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/autovietnamese.html
modification_time: 2015-08-05T12:01:42+00:00
---

(mPDF &ge; 6.0)

# Description

boolean **autoVietnamese**

Tells mPDF whether to try and distinguish the Vietnamese language when using `autoScriptToLang`.

Vietnamese is written using mainly Latin script, and cannot therefore be distinguished for certain from other
languages using Latin script. However there are a few characters which are unique to Vietnamese and may enable
mPDF to distinguish text in a Vietnamese language.

Because a number of fonts do not contain these unique characters, you may wish mPDF to try and detect Vietnamese
so a special font can be selected.

Note: If `autoVietnamese` is `true` mPDF will mark up text detected as Vietnamese
even if `baseScript` is set as `1` - ignoring most Latin scripts.

# Values

<span class="parameter">$autoVietnamese</span> = `true`\|`false`


**Values**

* `false`: Vietnamese text will be treated as Latin text when using `autoScriptToLang`
* `true`: mPDF will attempt to distinguish Vietnamese, and text will then be marked with `lang="vi"`

Default: `false`

# See Also

* <a href="{{ "/reference/mpdf-variables/autoscripttolang.html" | prepend: site.baseurl }}">autoScriptToLang</a> - marks up HTML text using the lang attribute, based on the Unicode script block in question
* <a href="{{ "/fonts-languages/automatic-font-selection.html" | prepend: site.baseurl }}">Automatic Font selection</a>
