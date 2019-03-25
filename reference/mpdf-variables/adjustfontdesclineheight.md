---
layout: page
title: adjustFontDescLineheight
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/adjustfontdesclineheight.html
modification_time: 2015-08-05T12:01:32+00:00
---

(mPDF &ge; 6.0)

# Description

void **adjustFontDescLineheight**

Specify a factor by which to multiply the font metrics, when determining the text lineheight. When set to `1`, the text
line height will equal the values set in the font for Ascent + Descent.

For more information, see <a href="{{ "/what-else-can-i-do/line-height.html" | prepend: site.baseurl }}">Line-height</a>.

# Values

<span class="parameter">$adjustFontDescLineheight</span>

**Values**

* <span class="smallblock">FLOAT </span>: use the when font metrics are being used to set the text line-height. Usual
  value between `1` and `1.2`

Default: `1.14`

# Usage

Set at document initiation
```php
<?php
$mpdf = new \Mpdf\Mpdf(['adjustFontDescLineheight' => 1.14]);

```

or during the course of creating the document

```php
<?php
$mpdf->adjustFontDescLineheight = 1.14;

```

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

