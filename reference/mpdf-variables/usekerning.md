---
layout: page
title: useKerning
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/usekerning.html
modification_time: 2015-08-05T12:02:37+00:00
---

(mPDF &ge; 5.4)

# Description

boolean **useKerning**

When `true`, mPDF will support the CSS style `font-kerning`.
This should only be set to `true` when required to conserve memory and processing time.

# Values

<span class="parameter">$useKerning</span> =`true`\|`false`

**Values**

* `true`: Enable support for CSS style `font-kerning`
* `false`: Default

Default: `false`

# See Also

* <a href="{{ "/what-else-can-i-do/kerning.html" | prepend: site.baseurl }}">Kerning</a>
