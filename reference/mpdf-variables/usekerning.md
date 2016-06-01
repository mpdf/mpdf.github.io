---
layout: page
title: useKerning
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/usekerning.html
modification_time: 2015-08-05T12:02:37+00:00
---

(mPDF >= 5.4)

# Description

boolean **useKerning**

When <span class="smallblock">TRUE</span>, mPDF will support the CSS style <span class="parameter">font-kerning</span>. This should only be set to <span class="smallblock">TRUE</span> when required to conserve memory and processing time.

# Values

<span class="parameter">useKerning</span> = <span class="smallblock">TRUE</span>|<span class="smallblock">*FALSE*</span>

**Values**

<span class="smallblock">TRUE</span>: Enable support for CSS style <span class="parameter">font-kerning</span>

<span class="smallblock">*FALSE*</span>: <span class="smallblock">DEFAULT</span>

# See Also

<ul>
<li class="manual_boxlist"><a href="{{ "/what-else-can-i-do/kerning.html" | prepend: site.baseurl }}">Kerning</a> </li>
</ul>
