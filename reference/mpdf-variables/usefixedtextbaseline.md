---
layout: page
title: useFixedTextBaseline
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/usefixedtextbaseline.html
modification_time: 2015-08-05T12:02:36+00:00
---

(mPDF &ge; 6.0)

# Description

boolean **useFixedTextBaseline**

Specify whether to use a fixed value to set the position of the text baseline.

For more information, see <a href="{{ "/what-else-can-i-do/line-height.html" | prepend: site.baseurl }}">Line-height</a>.

# Values

<span class="parameter">$useFixedTextBaseline</span> = `false`\|`true`

**Values**

* `false`: use the font metrics to set the position of the text baseline.
* `true`: use a fixed value to set the position of the text baseline.

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

