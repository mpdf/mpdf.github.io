---
layout: page
title: CSSselectMedia
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/cssselectmedia.html
modification_time: 2015-08-05T12:01:49+00:00
---

(mPDF &ge; 4.4)

CSSselectMedia – Selects which media-dependent CSS stylesheets to use

# Description

void **CSSselectMedia**

Selects which media-dependent CSS stylesheets to use. mPDF supports internal and external CSS stylesheets, if the
media property is set to `"all"`, or matches the value of <span class="parameter">$CSSselectMedia</span>. The
`@media` selector within stylesheets is also supported.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** This variable can be changed as a
  <a href="{{ "/configuration/configuration-v7-x.html" | prepend: site.baseurl }}">configuration variable</a>
</div>

# Values

<span class="parameter">$CSSselectMedia</span>  

**Values**

* `"print"`
* `"screen"`
* [any other valid CSS `@media` selector, except `"all"`]

Default: `"print"`

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
  <td>4.4</td>
  <td>Variable was added.</td>
</tr>
</tbody>
</table>

