---
layout: page
title: max_colH_correction
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/max-colh-correction.html
modification_time: 2015-08-05T12:02:12+00:00
---

(mPDF &ge; 1.0)

max_colH_correction – Sets maximum ratio to allow when adjusting column heights

# Description

float **max_colH_correction**

The maximum ratio to adjust column height when justifying - too large a value can give ugly results

Default: `1.15`

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** The <span class="parameter">$vAlign</span> parameter of
  &lt;<a href="{{ "/reference/html-control-tags/columnbreak.html" | prepend: site.baseurl }}">columnbreak</a>&gt;
  or <a href="{{ "/reference/mpdf-functions/setcolumns.html" | prepend: site.baseurl }}">SetColumns()</a> must
  be set to `J` or `justify`
</div>

# Values

<table class="table">
<thead>
<tr>
  <th>value</th>
  <th>description</th>
</tr>
</thead> <tbody>
<tr>
  <td>default</td>
  <td>1.15</td>
</tr>
<tr>
  <td>range</td>
  <td>Values above 1.0</td>
</tr>
</tbody>
</table>

# Examples

```php
<?php
$mpdf = new \Mpdf\Mpdf();

$mpdf->max_colH_correction = 1.3;

```

