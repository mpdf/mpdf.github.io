---
layout: page
title: WriteFixedPosHTML()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/writefixedposhtml.html
modification_time: 2015-08-05T12:01:16+00:00
---

(mPDF &ge; 4.0)

WriteFixedPosHTML — Write HTML to a fixed position on the current page

# Description

void **WriteFixedPosHTML** (
string <span class="parameter">$html</span> ,
float <span class="parameter">$x</span> ,
float <span class="parameter">$y</span> ,
float <span class="parameter">$w</span> ,
float <span class="parameter">$h</span>
[, string <span class="parameter">$overflow</span> ])

Write HTML to a fixed position on the current page.

# Parameters

<span class="parameter">$html</span>

: This parameter specifies the text to write to the document - parsed as HTML code

<span class="parameter">$x</span>

: Sets the <span class="parameter">$x</span> position of the (left edge) of the block element,
  set in mm from the left of the page.<span class="smallblock">


<span class="parameter">$y</span>

: Sets the <span class="parameter">$y</span> position of the (top edge) of the block element,
  set in mm from the top of the page.<span class="smallblock">

<span class="parameter">$w</span>

: Sets the width of the block element, in mm.<span class="smallblock">

<span class="parameter">$h</span>

: Sets the height of the block element, in mm.<span class="smallblock">

<span class="parameter">$overflow</span>

: Specifies how to handle text which would not fit inside the block element, with its dimensions
  as specified.

  **Values**

  * `'visible'`: show all text, even if it spills over outside the dimensions of the block element
  * `'hidden'`: hide any text (clip) which spills over outside the dimensions of the block element
  * `'auto'`: force text to be reduced in size if required to fit inside the dimensions of the block element

  <span class="smallblock">BLANK</span> uses the default value of `'visible'`

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
    <td>4.0</td>
    <td>Function was added.</td>
</tr>
</tbody>
</table>

# Examples

Example #1

```php
<?php
$mpdf = new \Mpdf\Mpdf();

$mpdf->WriteHTML('
Beginning bit of document...
');

$mpdf->WriteFixedPosHTML('
This text will appear just where I want it!
', 30, 120, 50, 90, 'auto');

$mpdf->Output();

```

# See Also

* <a href="{{ "/reference/mpdf-functions/writehtml.html" | prepend: site.baseurl }}">WriteHTML</a> -
  Add an Index entry in the document
* <a href="{{ "/what-else-can-i-do/fixed-position-blocks.html" | prepend: site.baseurl }}">Fixed position elements</a> -
  About fixed-position elements (using CSS)
