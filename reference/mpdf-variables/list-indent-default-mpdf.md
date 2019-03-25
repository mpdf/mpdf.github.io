---
layout: page
title: list_indent_default_mpdf
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/list-indent-default-mpdf.html
modification_time: 2015-08-05T12:02:09+00:00
---

(mPDF &ge; 6.0)

# Description

void **list_indent_default_mpdf**

Define the default indentation of a list item, when in (backwards-compatible) `'mpdf'` list mode. Note that in mpdf mode,
the real indentation is calculated by adding the value of this property to the width of the widest list-marker.

For more information, see <a href="{{ "/what-else-can-i-do/lists.html" | prepend: site.baseurl }}">Lists</a>.

# Values

<span class="parameter">$list_indent_default_mpdf</span>

**Values**

* <span class="smallblock">LENGTH</span>: Any valid CSS length value is permitted e.g. `"10pt"` or `"3em"`

Default: `'0em'`

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

* <a href="{{ "/what-else-can-i-do/lists.html" | prepend: site.baseurl }}">Lists </a>
* <a href="{{ "/reference/mpdf-variables/list-auto-mode.html" | prepend: site.baseurl }}">list_auto_mode</a>
* <a href="{{ "/reference/mpdf-variables/list-indent-default.html" | prepend: site.baseurl }}">list_indent_default</a>
