---
layout: page
title: autoLangToFont
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/autolangtofont.html
modification_time: 2015-08-05T12:01:39+00:00
---

<div>
<div>

(mPDF >= 6.0)

# Description

boolean **autoLangToFont**

When <span class="smallblock">TRUE</span>, selects the font to use, based on the HTML lang attribute, using configurable values in `config_lang2font.php`

# Values

<span class="parameter">autoLangToFont</span> = *<span class="smallblock">TRUE</span>*|<span class="smallblock">FALSE</span>

**Values**

*<span class="smallblock">TRUE</span>*: <span class="smallblock">DEFAULT</span> selects the font to use, based on the HTML lang attribute, using configurable values in `config_lang2font.php`

<span class="smallblock">FALSE</span>: Font selection unaffected.

# See Also

<ul>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/autoscripttolang.html" | prepend: site.baseurl }}">autoScriptToLang</a> - marks up HTML text using the lang attribute, based on the Unicode script block</li>
<li class="manual_boxlist"><a href="{{ "/fonts-languages/automatic-font-selection.html" | prepend: site.baseurl }}">Automatic Font selection</a></li>
</ul>

</div>
</div>
