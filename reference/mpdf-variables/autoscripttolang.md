---
layout: page
title: autoScriptToLang
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/autoscripttolang.html
modification_time: 2015-08-05T12:01:41+00:00
---

<div>
<div>
<div>

(mPDF >= 6.0)

# Description

boolean **autoScriptToLang**

When <span class="smallblock">TRUE</span>, `marks up HTML text using the lang attribute, based on the Unicode script block in question, and configurable values in <span class="code">config_script2lang.php`.</span>

# Values

<span class="parameter">autoScriptToLang</span> = *<span class="smallblock">TRUE</span>*|<span class="smallblock">FALSE</span>

**Values**

*<span class="smallblock">TRUE</span>*: <span class="smallblock">DEFAULT</span> mark up HTML text using the lang attribute, based on the Unicode script block in question, and configurable values in `config_script2lang.php`.

<span class="smallblock">FALSE</span>: No markup applied.

# See Also

<ul>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/autolangtofont.html" | prepend: site.baseurl }}">autoLangToFont</a> - selects the font to use, based on the HTML lang attribute, using configurable values in `config_lang2font.php`</li>
<li class="manual_boxlist"><a href="{{ "/fonts-languages/automatic-font-selection.html" | prepend: site.baseurl }}">Automatic Font selection</a></li>
</ul>

</div>
</div>
</div>
