---
layout: page
title: collapseBlockMargins
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/collapseblockmargins.html
modification_time: 2015-08-05T12:01:47+00:00
---

(mPDF &ge; 4.2)

collapseBlockMargins – Specify whether to collapse (vertical) margins between block elements

# Description

void **collapseBlockMargins**

Specify whether to collapse (vertical) margins between block elements. In line with CSS specification, the top/bottom
margins of adjoining block-style elements are collapsed to the larger of the two. This works between all block elements
such as DIV, P, H1-6 etc. and also lists and tables.

NB Firefox does not collapse margins above and below tables, but IE8 does.

# Values

<span class="parameter">$collapseBlockMargins</span> =  `true`\|`false`

**Values**

* `true`: enable collapse
* `false`: disable collapse

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
  <td>4.2</td>
  <td>Variable was added.</td>
</tr>
</tbody>
</table>

# Examples

```php
<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();

$html = '
<div style="margin-bottom: 3em;">This DIV has a bottom margin defined as 3em</div>
<div style="margin-top: 2em;">This DIV has a top margin defined as 2em. The
space between these DIVs will collapse to 3em</div>';

$mpdf->WriteHTML($html);
$mpdf->Output();

```

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** The collapse of margins at the top and bottom of the page is unaffected by this variable.
  This is set by the custom CSS property `margin-collapse: collapse|none` which can be defined in the `defaultCSS`
  <a href="{{ "/configuration/configuration-v7-x.html" | prepend: site.baseurl }}">configuration variable</a>
</div>

