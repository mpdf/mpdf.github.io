---
layout: page
title: textcircle
parent_title: HTML control tags
permalink: /reference/html-control-tags/textcircle.html
modification_time: 2015-08-05T12:01:29+00:00
---

(mPDF &ge; 5.4)

textcircle – Draw a circle using specified text

# Description

&lt;**textcircle** 
<span class="parameter">$r</span> 
<span class="parameter">$top-text</span> 
<span class="parameter">$bottom-text</span>
[ <span class="parameter">$divider</span> ]
[ <span class="parameter">$space-width</span> ]
[ <span class="parameter">$char-width</span> ]
[ <span class="parameter">$href</span> ] /&gt;

Draw a circle using specified text. One or both of top-text and/or bottom-text must be defined. The radius and
font-size are user-defined, whilst the width and height of the generated object will be calculated from these values.

Font-size should be set for `<textcircle>` using in-line CSS or specified in a CSS stylesheet as for any standard
HTML tag. Other CSS styles supported on Circular Text are: `border`, `margin`, `padding`, `color`, `background-color`, `font-family`,
`font-size`, `font-weight`, `font-style`, `display`, `visibility` and `opacity`.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** CSS style are not inherited from parent elements.
</div>

From mPDF &ge; 5.6 the CSS property `font-size` can be set to `auto`. This automatically
sizes text to fill a semicircle (if both top and bottom set) or a full circle (if only one set).

Circular Text is displayed as though an in-line element. Automatic kerning will be applied to the text if
<a href="{{ "/reference/mpdf-variables/usekerning.html" | prepend: site.baseurl }}">useKerning</a>
is `true`. 

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** Prior to mPDF 5.6 the textcircle was displayed with a white background.
  In &ge; 5.6 the background has been changed to transparent by default.
</div>

# Parameters

<span class="parameter">$r</span>

: Radius of circle. Any valid <span class="smallblock">LENGTH</span> can be entered

<span class="parameter">$top-text</span>

: This parameter defines text which will be centred on the top of the circle.

  <span class="parameter">$top-text</span> cannot contain any of the characters: `<`, `>`, `&`, `'` or `"` and must use
  the appropriate HTML entities e.g. `<textcircle top-text="Brian&#039;s document" />`.  It is recommended that
  you use `htmlspecialchars('Content', ENT_QUOTES)` for this.

  Either top-text or bottom-text (or both) must be defined.

  Default: <span class="smallblock">BLANK</span>

<span class="parameter">$bottom-text</span>

: This parameter defines text which will be centred on the bottom of the circle.

  <span class="parameter">$bottom-text</span> cannot contain any of the characters: `<`, `>`, `&`, `'` or `"` and must
  use the appropriate HTML entities e.g. `<textcircle bottom-text="Brian&#039;s document" />`.  It is recommended
  that you use `htmlspecialchars('Content', ENT_QUOTES)` for this.

  Either top-text or bottom-text (or both) must be defined.

  Default: <span class="smallblock">BLANK</span>

<span class="parameter">$divider</span>

: This parameter defines an optional string of characters which will be used to divide top and bottom text of the circle.

  <span class="parameter">$divider</span> cannot contain any of the characters: `<`, `>`, `&`, `'` or `"`. Use HTML
  entities for special characters or non-ASCII characters e.g. `<textcircle divider="&bull;" />`

  Default: <span class="smallblock">BLANK</span>

<span class="parameter">$space-width</span>

: This parameter should be specified as an integer defining the (fixed) letter-spacing as a percentage of normal.

  Default: `'120'`

<span class="parameter">$char-width</span>

: This parameter should be specified as an integer defining the width of each character as a percentage of normal.

  Default: `'100'`

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
  <td>5.4</td>
  <td>The tag was added.</td>
</tr>
<tr>
  <td>5.6</td>
  <td markdown="1">
  Transparent background fixed.
  Support for divider added.
  Support for `font: auto` added.
  </td>
</tr>
</tbody>
</table>

# Examples

```php
<?php

...

$mpdf->WriteHTML('<textcircle r="30mm" space-width="120" char-width="150"
    top-text="&bull; Circular Text &bull;" bottom-text="Circular Text"
    style="background-color: #FFAAAA; border:1px solid red; padding: 0.3em; margin: 0.3em;
           color: #000000; font-size: 21pt; font-weight:bold; font-family: Arial" />');

```

# See Also

- <a href="{{ "/reference/mpdf-functions/circulartext.html" | prepend: site.baseurl }}">CircularText()</a> - PHP equivalent to `<textcircle>`
