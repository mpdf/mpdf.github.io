---
layout: page
title: useFixedNormalLineHeight
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/usefixednormallineheight.html
modification_time: 2015-08-05T12:02:36+00:00
---

(mPDF &ge; 6.0)

# Description

boolean **useFixedNormalLineHeight**

Specify whether to use a fixed value for the line-height of text, when CSS property `line-height` is set to `normal` (default).

For more information, see <a href="{{ "/what-else-can-i-do/line-height.html" | prepend: site.baseurl }}">Line-height</a>.

# Values

<span class="parameter">$useFixedNormalLineHeight</span> = `false`\|`true`

**Values**

* `false`: use the font metrics to determine the line-height of text, when CSS property `line-height` is set to `normal` (default).
* `true`: use a fixed value for the line-height of text, when CSS property `line-height` is set to `normal` (default).

Default: `false`

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

* <a href="{{ "/what-else-can-i-do/line-height.html" | prepend: site.baseurl }}">Line-height</a>
