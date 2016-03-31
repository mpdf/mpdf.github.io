---
layout: page
title: list_indent_default_mpdf
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/list-indent-default-mpdf.html
modification_time: 2015-08-05T12:02:09+00:00
---

<p>(mPDF &gt;= 6.0)</p>

# Description

<p class="manual_block">void <b>list_indent_default_mpdf</b></p>
<p>Define the default indentation of a list item, when in (backwards-compatible) 'mpdf' list mode. Note that in mpdf mode, the real indentation is calculated by adding the value of this property to the width of the widest list-marker.</p>
<p>For more information, see <a href="{{ "/what-else-can-i-do/lists.html" | prepend: site.baseurl }}">Lists</a>.</p>

# Values

<p class="manual_param_dt"><span class="parameter">list_indent_default_mpdf</span></p>
<p class="manual_param_dd"><b>Values</b>

<span class="smallblock">LENGTH</span>: Any valid CSS length value is permitted e.g. "10pt" or "3em"

<span class="smallblock">DEFAULT</span>: '0em'</p>

# Changelog

<table class="table"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>6.0</td>
<td>Variable was added.</td>
</tr>
</tbody> </table>

# See Also

<p><a href="{{ "/what-else-can-i-do/lists.html" | prepend: site.baseurl }}">Lists </a></p>
