---
layout: page
title: autoArabic
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/autoarabic.html
modification_time: 2015-08-05T12:01:38+00:00
---

(mPDF >= 6.0)

# Description

boolean **autoArabic**

Tells mPDF whether to try and distinguish between Arabic languages when using `autoScriptToLang`.

Analysis of the text will attempt to distinguish Arabic, Farsi, Pashto, Urdu and Sindhi. If active, the text will then be marked with a specific language tag e.g. "pa", "ur", "fa" etc.

# Values

<span class="parameter">autoArabic</span> = *<span class="smallblock">TRUE|FALSE</span>*<span class="smallblock">

</span>

**Values**

*<span class="smallblock">FALSE</span>*: <span class="smallblock">DEFAULT</span> Arabic script will be marked with the attribute lang='und-Arab' when using `autoScriptToLang`.

<span class="smallblock">TRUE: </span>mPDF will attempt to distinguish Arabic, Farsi, Pashto, Urdu and Sindhi, and text will then be marked with a specific language tag e.g. "pa", "ur", "fa" etc.

# See Also

<ul>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/autoscripttolang.html" | prepend: site.baseurl }}">autoScriptToLang</a> - `<span class="code">marks up HTML text using the lang attribute, based on the Unicode script block in question`</span></li>
<li class="manual_boxlist"><a href="{{ "/fonts-languages/automatic-font-selection.html" | prepend: site.baseurl }}">Automatic Font selection</a></li>
</ul>
