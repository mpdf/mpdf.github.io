---
layout: page
title: baseScript
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/basescript.html
modification_time: 2015-08-05T12:01:43+00:00
---

(mPDF &ge; 6.0)

# Description

boolean **baseScript**

Tells mPDF which Script to ignore when using `autoScriptToLang`.

# Values

<span class="parameter">$baseScript</span> = *<span class="smallblock">INTEGER</span>*

**Values**

* *<span class="smallblock">INTEGER</span>*:  Number representing the
  script block to be ignored when using `autoScriptToLang`. It is set by default to `1` which is for Latin script.
  In this mode, all scripts *except* Latin script are marked up with `lang=` attribute. To select other scripts as the base,
  see the `\Mpdf\Ucdn` class.

Default: `1`

# See Also

- <a href="{{ "/reference/mpdf-variables/autoscripttolang.html" | prepend: site.baseurl }}">autoScriptToLang</a> - marks up HTML text using the lang attribute, based on the Unicode script block in question
- <a href="{{ "/fonts-languages/automatic-font-selection.html" | prepend: site.baseurl }}">Automatic Font selection</a>
