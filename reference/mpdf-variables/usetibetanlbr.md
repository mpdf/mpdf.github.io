---
layout: page
title: useTibetanLBR
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/usetibetanlbr.html
modification_time: 2015-08-05T12:02:39+00:00
---

(mPDF &ge; 6.0)

# Description

boolean **useTibetanLBR**

Specify whether to use mPDF algorithm to determine appropriate places for line breaks when using Tibetan text.

mPDF uses a simple algorithm to identify line-breaking opportunities after the characters U+0F0B (Tsheg) or U+0F0D.

For more information, see <a href="{{ "/what-else-can-i-do/line-breaking.html" | prepend: site.baseurl }}">Line breaking</a>.

# Values

<span class="parameter">$useTibetanLBR</span> =`false`\|`true`

**Values**

* `true`: use mPDF algorithm to determine appropriate places for line breaks when using Tibetan text.
* `false`: algorithm not used. Line breaks will only be allowed according to usual line-breaking rules.

Default: `true`

# Changelog

<table class="table">
<thead>
<tr>
  <th>Version</th>
  <th>Description</th>
</tr>
</thead>
<tbody>
<tr>
  <td>6.0</td>
  <td>Variable was added.</td>
</tr>
</tbody>
</table>

# See Also

* <a href="{{ "/what-else-can-i-do/line-breaking.html" | prepend: site.baseurl }}">Line breaking</a>

