---
layout: page
title: defaultPagebreakType
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/defaultpagebreaktype.html
modification_time: 2017-06-22T12:02:00+00:00
---


Types page breaks for forced pagebreaks using `<pagebreak />`.

(mPDF &ge; 6.0)

# Description

void **defaultPageNumStyle**

Types page breaks for forced pagebreaks using `<pagebreak />`. Automatic pagebreaks (flow in text) are always `'slice'`

For more information, see <a href="{{ "/paging/page-breaks.html" | prepend: site.baseurl }}">page breaks</a>.

# Values

<span class="parameter">defaultPagebreakType</span>

**Values**

* `'slice'`
* `'cloneall'`
* `'clonebycss'`

Default: `'cloneall'`

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

* <a href="{{ "/paging/page-breaks.html" | prepend: site.baseurl }}">page breaks</a>
* &lt;<a href="{{ "/reference/html-control-tags/pagebreak.html" | prepend: site.baseurl }}">pagebreak</a>&gt;
* &lt;<a href="{{ "/reference/html-control-tags/tocpagebreak.html" | prepend: site.baseurl }}">tocpagebreak</a>&gt;
