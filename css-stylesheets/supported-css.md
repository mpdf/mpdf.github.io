---
layout: page
title: Supported CSS
parent_title: CSS & Stylesheets
permalink: /css-stylesheets/supported-css.html
modification_time: 2017-03-05T21:59:56+00:00
---

# Supported CSS attributes - stylesheets or in-line

Unless otherwise stated, the following values are supported:

<span class="smallblock">LENGTH</span>

: `px`, `pc`, `pt`, `cm`, `mm`, `in`, `em`, `rem`, `ex` and `%` (where appropriate) are supported.
  Default if no unit given is `px`.

<span class="smallblock">FONT-SIZE</span>

: `px`, `pc`, `pt`, `em`, `rem`, `ex`, `%`, `small`, `medium`, `large`, `x-small`, `x-large` are supported.
  Default if no unit given is `px`.

  <div class="alert alert-info" role="alert" markdown="1">
    **Note:** Support for `rem` was added in mPDF 5.7. Unlike the CSS3 specification, the basic size used for
    `rem` in the document is based on the `font-size` set on the `<body>` element (rather than the `<html>` element).
  </div>

  Conversion from `px` is determined by the configurable variables
  <a href="{{ "/reference/mpdf-variables/dpi.html" | prepend: site.baseurl }}" markdown="1">`dpi`</a>
  and <a href="{{ "/reference/mpdf-variables/img-dpi.html" | prepend: site.baseurl }}" markdown="1">`img_dpi`</a>

  `ex` uses an approximation of half the font height

<span class="smallblock">FONT-FAMILY</span>

: Any font family defined in your configuration, as well as
  `sans`, `sans-serif`, `serif` or `monospace`.

<span class="smallblock">ALPHA</span>

: transparency, value between `0` and `1`

<span class="smallblock">COLOR</span>

: `#rgb` or `#rrggbb` or `rgb(255,255,255)` or
  <a href="{{ "/css-stylesheets/named-colours.html" | prepend: site.baseurl }}">colour names</a> e.g.
  `black`, `gray` are supported.

  Also supported are:
  - `rgb(255, 255, 255)`
  - `rgba(255, 255, 255, 1)` last value is <span class="smallblock">ALPHA</span> \*
  - `rgb(100%, 100%, 100%)`
  - `hsl(360, 100%, 100%)`
  - `hsla(360, 100%, 100%, 1)` last value is <span class="smallblock">ALPHA</span> \*
  - `cmyk(100, 100, 100, 100)` *[or 0-100%]*
  - `cmyka(100, 100, 100, 100, 1)` *[or 0-100%]* last value is <span class="smallblock">ALPHA</span> \*
  - `device-cmyk(100, 100, 100, 100)` *[or 0-100%]*
  - `device-cmyka(100, 100, 100, 100, 1)` last value is <span class="smallblock">ALPHA</span> \*
  - `spot(<color name>, 100%)`. (cf. <a href="{{ "/reference/mpdf-functions/addspotcolor.html" | prepend: site.baseurl }}">AddSpotColor</a>)

  since mPDF 5.7, spotcolor CMYK values can be defined as it is used e.g. `color: spot(PANTONE 534 EC, 100%, 85, 65, 47, 9);`

  \* Alpha values (transparency) are only supported on background colours - not text color

<span class="smallblock">GRADIENT</span>

: Both the Mozilla or the draft CSS3 syntax are supported e.g.:

   * `background: -moz-repeating-linear-gradient(red, blue 20px, red 40px)`
   * `background-image: -moz-repeating-linear-gradient(red, blue 20px, red 40px)`
   * `background: linear-gradient(top, #c7cdde, #f0f2ff);`
   * `background-image: linear-gradient(top, #c7cdde, #f0f2ff);`

  There are more values supported.
  (cf. <a href="{{ "/what-else-can-i-do/backgrounds-borders.html" | prepend: site.baseurl }}">Backgrounds &amp; borders</a>)

<span class="smallblock">GRADIENT_OLD</span>

: `background-gradient: GRADIENT_OLD`  is **deprecated**

  Defines a linear or radial colour gradient for the background.
   * `linear `<span class="smallblock">COLOR1</span>` `<span class="smallblock">COLOR2</span>` x1 y1 x2 y2;` or
   * `radial `<span class="smallblock">COLOR1</span>` `<span class="smallblock">COLOR2</span>` x1 y1 x2 y2 radius;`

  `x`, `y` and `radius` are values between `0` and `1`

  (custom attribute) (cf. <a href="{{ "/what-else-can-i-do/backgrounds-borders.html" | prepend: site.baseurl }}">Backgrounds &amp; borders</a>)



<table class="table">
<thead>
<tr>
  <th>HTML Tag</th>
  <th>Property</th>
  <th>Values allowed & Notes</th>
</tr>
</thead>
<tbody>
<tr>
  <th rowspan="9">BODY</th>
  <td>direction</td>
  <td>rtl | ltr (mPDF &ge; 5.0)</td>
</tr>
<tr>
  <td>
  <span class="smallblock">COMMON TEXT STYLES</span>
  </td>
  <td>
  <span class="smallblock">See <a href="#common-text-styles">below</a></span> - all except text-shadow
  </td>
</tr>
<tr>
  <td markdown="1">
  *margin-collapse*
  </td>
  <td>collapse|none (custom attribute - collapses top and bottom margins if at top or bottom of page)</td>
</tr>
<tr>
  <td>line-height</td>
  <td markdown="1">
  Line height as a factor of font-height. Usual values around 1.2 or 1.3

  Also accepts `px`, `pc`, `pt`, `cm`, `mm`, `in`, `em` and `%` (mPDF &ge; 4.0)
  </td>
</tr>
<tr>
  <td>background, background-image, background-position, background-repeat, background-color</td>
  <td markdown="1">
  background is parsed as per the CSS specification.

  background-image in the form `url(image.png)` or `url('image.png')` or <span class="smallblock">GRADIENT</span>
  (mPDF &ge; 5.1).

  background-position is supported as per CSS2.1

  background-repeat: repeat \| repeat-x \| repeat-y \| no-repeat

  background-attachment is parsed but has no effect.

  See note below. (cf. <a href="{{ "/what-else-can-i-do/backgrounds-borders.html" | prepend: site.baseurl
  }}">Backgrounds &amp; borders</a>)

  (All except background-color added mPDF 3.0)
  </td>
</tr>
<tr>
  <td markdown="1">
  *background-image-resolution*
  </td>
  <td markdown="1">

  normal \| [ from-image \<dpi\> ]  (mPDF &ge; 5.1)

  Custom tag, but as for image-resolution in CSS3

  </td>
</tr>
<tr>
  <td markdown="1">
  *background-gradient*
  </td>
  <td>(Deprecated) <span class="smallblock">GRADIENT_OLD</span></td>
</tr>
<tr>
  <td markdown="1">
  *background-image-opacity*
  </td>
  <td markdown="1">

  Value between 0 and 1.0

  Sets the opacity/transparency of the background image.

  </td>
</tr>
<tr>
  <td markdown="1">
  *background-image-resize*
  </td>
  <td markdown="1">
  0 - No resizing (default)

  1 - Shrink-to-fit w (keep aspect ratio)

  2 - Shrink-to-fit h (keep aspect ratio)

  3 - Shrink-to-fit w and/or h (keep aspect ratio)

  4 - Resize-to-fit w (keep aspect ratio)

  5 - Resize-to-fit h (keep aspect ratio)

  6 - Resize-to-fit w and h
  </td>
</tr>
<tr>
  <th rowspan="30">
  All Block level tags:
  P, DIV, H1-H6, OL, UL, ADDRESS,
  BLOCKQUOTE, CAPTION,
  CENTER, DL, DT, DD, FORM,
  ARTICLE, ASIDE, DETAILS,
  FIELDSET, FIGURE,
  FIGCAPTION, FOOTER,
  HEADER, HGROUP, NAV,
  SECTION, SUMMARY
  </th>
  <td>margin*, margin-top, margin-bottom, margin-left, margin-right</td>
  <td><span class="smallblock">LENGTH</span></td>
</tr>
<tr>
  <td>padding*, padding-right, padding-left, padding-top, padding-bottom</td>
  <td><span class="smallblock">LENGTH</span></td>
</tr>
<tr>
  <td>border, border-top, border-bottom, border-left, border-right</td>
  <td markdown="1">
  Size style and colour e.g.

  <span class="smallblock">LENGTH</span> solid|dotted|dashed|double <span class="smallblock">COLOR</span>
  </td>
</tr>
<tr>
  <td>border-color*, border-top-color, border-right-color, border-bottom-color, border-left-color</td>
  <td markdown="1">

  <span class="smallblock">COLOR</span>

  (mPDF &ge; 4.0)

  </td>
</tr>
<tr>
  <td>border-width*, border-top-width, border-right-width, border-bottom-width, border-left-width</td>
  <td markdown="1">

  <span class="smallblock">LENGTH</span> 

  (mPDF &ge; 4.0)
  </td>
</tr>
<tr>
  <td>border-style*, border-top-style, border-right-style, border-bottom-style, border-left-style</td>
  <td markdown="1">

  solid \| dotted \| dashed \| double

  (mPDF &ge; 4.0)

  (double was added mPDF 4.2)

  </td>
</tr>
<tr>
  <td>border-radius, border-top-left-radius, border-top-right-radius, border-bottom-right-radius,
  border-bottom-left-radius
  </td>
  <td markdown="1">
  <span class="smallblock">LENGTH</span>

  See <a href="http://www.w3.org/TR/2008/WD-css3-background-20080910/#layering">draft CSS3 specification</a>
  for use.

  NB Use of `$autoPadding` which can automatically increase padding in block elements with border-radius set as
  required
  </td>
</tr>
<tr>
  <td>width</td>
  <td markdown="1">

  <span class="smallblock">LENGTH</span>

  mPDF does not support nested block elements which overlap (horizontally or vertically) i.e. the inner block
  must be contained by the outer block's physical dimensions. width and height are overridden if this is
  not the case.

  </td>
</tr>
<tr>
  <td>height</td>
  <td markdown="1">

  <span class="smallblock">LENGTH</span> 

  mPDF does not support nested block elements which overlap (horizontally or vertically) i.e. the inner block
  must be  contained by the outer block's physical dimensions. width and height are overridden if this is
  not the case.

  (Prior to mPDF v5.1: only supported if whole block is all on one page; will extend a block but not shorten
  it; will not force a pagebreak even if height should move onto next page.)

  NB % is interpreted as % of printable page height (inside margins)

  </td>
</tr>
<tr>
  <td>text-align</td>
  <td>left | center | right | justify</td>
</tr>
<tr>
  <td>page-break-after</td>
  <td>auto | avoid | always | left | right (extended mPDF &ge; 5.4)</td>
</tr>
<tr>
  <td>page-break-inside</td>
  <td>
  avoid (avoids a page-break within the block - only works across max. of 2 pages; not compatible with table
  autosize or table rotate)
  </td>
</tr>
<tr>
  <td>page-break-before</td>
  <td>always | left | right</td>
</tr>
<tr>
  <td>display</td>
  <td>none</td>
</tr>
<tr>
  <td>visibility</td>
  <td markdown="1">
  visible \| hidden \| *printonly* \| *screenonly*  (mPDF &ge; 5.4)
  </td>
</tr>
<tr>
  <td markdown="1">
  *margin-collapse*
  </td>
  <td>collapse | none (custom attribute - collapses top and bottom margins if at top or bottom of page)</td>
</tr>
<tr>
  <td>line-height</td>
  <td markdown="1">

  Line height as a factor of font-height. Usual values around 1.2 or 1.3

  Also accepts px, pc, pt, cm, mm, in, em and % (mPDF &ge; 4.0)

  'normal' also accepted (set by default to 1.3 in mPDF)

  </td>
</tr>
<tr>
  <td>line-stacking-strategy</td>
  <td markdown="1">

  inline-line-height \| block-line-height \| max-height \| grid-height

  As per draft CSS3 spec. (mPDF &ge; 6.0)

  Default = inline-line-height

  </td>
</tr>
<tr>
  <td>line-stacking-shift</td>
  <td markdown="1">

  consider-shifts \| disregard-shifts

  As per draft CSS3 spec. (mPDF &ge; 6.0)

  Default = consider-shifts

  </td>
</tr>
<tr>
  <td>background, background-image, background-position, background-repeat, background-color</td>
  <td markdown="1">

  background is parsed as per the CSS specification.

  background-image in the form `url(image.png)` or `url('image.png')` or <span class="smallblock">GRADIENT</span>
  (mPDF &ge; 5.1).

  background-position is supported as per CSS2.1

  background-repeat: repeat \| repeat-x \| repeat-y \| no-repeat

  background-attachment is parsed but has no effect.

  See note below. (cf. <a href="{{ "/what-else-can-i-do/backgrounds-borders.html" | prepend: site.baseurl
  }}">Backgrounds &amp; borders</a>)

  (All except background-color added mPDF 3.0)

  </td>
</tr>
<tr>
  <td>background-clip</td>
  <td markdown="1">

  padding-box \| border-box (default=border-box)

  extended to include "content-box" from mPDF 5.7

  </td>
</tr>
<tr>
  <td>background-origin</td>
  <td markdown="1">

  padding-box \| content-box \| border-box  (default padding-box)

  As per CSS3. mPDF &ge; 5.7

  </td>
</tr>
<tr>
  <td>background-size</td>
  <td markdown="1">

  [ \<length\> \| \<percentage\> \| auto ]{1,2} \| cover \| contain  (default = auto)

  As per CSS3. mPDF &ge; 5.7

  </td>
</tr>
<tr>
  <td markdown="1">
  *background-image-resolution*
  </td>
  <td markdown="1">

  normal \| [ from-image \<dpi\> ]  (mPDF &ge; 5.1)

  Custom tag, but as for image-resolution in CSS3

  </td>
</tr>
<tr>
  <td markdown="1">
  *background-gradient*
  </td>
  <td>(Deprecated) <span class="smallblock">GRADIENT_OLD</span></td>
</tr>
<tr>
  <td markdown="1">
  *background-image-opacity*
  </td>
  <td markdown="1">

  Value between 0 and 1.0

  Sets the opacity/transparency of the background image.

  </td>
</tr>
<tr>
  <td markdown="1">
  *background-image-resize*
  </td>
  <td markdown="1">
  0 - No resizing (default)

  1 - Shrink-to-fit w (keep aspect ratio)

  2 - Shrink-to-fit h (keep aspect ratio)

  3 - Shrink-to-fit w and/or h (keep aspect ratio)

  4 - Resize-to-fit w (keep aspect ratio)

  5 - Resize-to-fit h (keep aspect ratio)

  6 - Resize-to-fit w and h
  </td>
</tr>
<tr>
  <td>box-shadow</td>
  <td markdown="1">

  As per CSS3 specification. 'inset' is not supported.

  (mPDF &ge; 5.4)

  </td>
</tr>
<tr>
  <td>box-decoration-break</td>
  <td markdown="1">

  slice \| clone  (default = slice)

  Defines the handling of padding and borders at page breaks, when <a href="{{ "/paging/page-breaks.html" |
  prepend: site.baseurl }}">clonebycss</a> set

  </td>
</tr>
<tr>
  <td>z-index</td>
  <td markdown="1">

  Sets a layer in the PDF document.

  Note: this is not the same as a "layer" in CSS terms. See <a href="{{ "/what-else-can-i-do/layers.html" |
  prepend: site.baseurl }}">Layers</a>.

  </td>
</tr>
<tr>
  <th rowspan="11">
  All Block level tags:
  P, DIV, H1-H6, OL, UL, ADDRESS,
  BLOCKQUOTE, CAPTION,
  CENTER, DL, DT, DD, FORM,
  ARTICLE, ASIDE, DETAILS,
  FIELDSET, FIGURE, FIGCAPTION, FOOTER,
  HEADER, HGROUP, NAV,
  SECTION, SUMMARY

  (contd.)
  </th>
  <td><span class="smallblock">COMMON TEXT STYLES</span></td>
  <td><span class="smallblock">See <a href="#common-text-styles">below</a></span></td>
</tr>
<tr>
  <td markdown="1">
  *text-indent*
  </td>
  <td markdown="1">

  Indents first line of text in the paragraph/block.

  <span class="smallblock">LENGTH</span>

  (Indent is disabled in tables.)

  Negative value will give a 'hanging indent'.

  </td>
</tr>
<tr>
  <td>position</td>
  <td markdown="1">
  fixed \| absolute

  absolute - uses physical page as containing element;

  fixed - uses printable page (inside margins) as containing element.

  (mPDF &ge; 4.0)

  NB Only supported for top-level elements i.e. where the parent element is &lt;body&gt;. Fixed-position or
  floating
  elements nested inside other fixed-position or floating elements are not supported.

  </td>
</tr>
<tr>
  <td>overflow</td>
  <td markdown="1">

  visible \| hidden \| auto

  Applies to block elements with position fixed or absolute. auto - causes text to autofit within the block
  size
  (constrained if necessary to page edges).

  (mPDF &ge; 4.0)

  </td>
</tr>
<tr>
  <td>hyphens</td>
  <td markdown="1">

  none \| manual \| auto (default = manual)

  As per CSS. (mPDF  &ge; 5.7)

  </td>
</tr>
<tr>
  <td markdown="1">
  *rotate*
  </td>
  <td markdown="1">

  90 \| -90

  Applies only to block elements with position fixed or absolute. (mPDF &ge; 5.0)

  Sizing and layout of the block element using top, left, bottom, right, width and height are applied BEFORE
  the element is rotated. The top and left co-ordinates are respected for positioning, except when bottom
  or right are specified without respective top or left when the bottom/right co-ordinates are used.

  </td>
</tr>
<tr>
  <td>top, left, bottom, right</td>
  <td markdown="1">

  <span class="smallblock">LENGTH</span>

  Applies to block elements with position fixed or absolute.

  (mPDF &ge; 4.0)

  </td>
</tr>
<tr>
  <td>float</td>
  <td markdown="1">

  left \| right

  Partially supported as for CSS2 property.

  NB Fixed-position or floating elements nested inside other fixed-position or floating elements are not
  supported.

  </td>
</tr>
<tr>
  <td>clear</td>
  <td>left | right | both</td>
</tr>
<tr>
  <td>page</td>
  <td>Specify a named page selector (see @page)</td>
</tr>
<tr>
  <td>direction</td>
  <td>rtl | ltr (mPDF &ge; 5.1)</td>
</tr>
</tbody>
</table>


<table class="table">
<thead>
<tr>
  <th>HTML Tag</th>
  <th>Property     </th>
  <th>Values allowed &amp; Notes</th>
</tr>
</thead>
<tbody>
<tr>
  <th rowspan="5">LIST tags: OL, UL</th>
  <td>list-style</td>
  <td>[ 'list-style-type' 'list-style-position' 'list-style-image' ]   mPDF &ge; 6.0</td>
</tr>
<tr>
  <td>list-style-type* *</td>
  <td markdown="1">

  1 \| A \| a \| I \| i \| disc \| circle \| square \| decimal \| lower-roman \| upper-roman \| lower-latin \|
  upper-latin \| lower-alpha \| upper-alpha \| none

  arabic-indic \| bengali \| cambodian \| cjk-decimal \| devanagari \| gujarati \| gurmukhi \| hebrew
  \|kannada \| khmer \| lao \| malayalam \| oriya \| persian \| telugu \| thai \| urdu \| tamil

  "1" - decimal

  "A" = upper-latin

  "a" = lower-latin

  "I" = upper-roman

  "i" = lower-roman

  Custom list-style-type is recognised e.g.: `U+263Argb(255,0,0);`
  - where `U+263A` is the Unicode HEX value of the character you want for the bullet
  - the character MUST be included in the font used for that list item
  - `rgb()` bit is optional

  </td>
</tr>
<tr>
  <td>list-style-image</td>
  <td markdown="1">

  <span class="smallblock" markdown="1">&lt;URI&gt;</span>

  mPDF &ge; 6.0

  </td>
</tr>
<tr>
  <td>list-style-position</td>
  <td markdown="1">

  inside \| outside  (default = outside)

  mPDF &ge; 6.0

  </td>
</tr>
<tr>
  <td> </td>
  <td markdown="1">
  **NB Lists are handled as block-level elements as from mPDF 6.0 (see above)**
  </td>
</tr>
<tr>
  <th rowspan="5">LI</th>
  <td>list-style</td>
  <td markdown="1">
  [ 'list-style-type' 'list-style-position' 'list-style-image' ]  

  mPDF &ge; 6.0
  </td>
</tr>
<tr>
  <td>list-style-type* *</td>
  <td markdown="1">

  1 \| A \| a \| I \| i \| disc \| circle \| square \| decimal \| lower-roman \| upper-roman \| lower-latin \|
  upper-latin \| lower-alpha \| upper-alpha \| none

  arabic-indic \| bengali \| cambodian \| cjk-decimal \| devanagari \| gujarati \| gurmukhi \| hebrew
  \|kannada \| khmer \| lao \| malayalam \| oriya \| persian \| telugu \| thai \| urdu \| tamil

  "1" - decimal

  "A" = upper-latin

  "a" = lower-latin

  "I" = upper-roman

  "i" = lower-roman

  Custom list-style-type is recognised e.g.: `U+263Argb(255,0,0);`
  - where `U+263A` is the Unicode HEX value of the character you want for the bullet
  - the character MUST be included in the font used for that list item
  - `rgb()` bit is optional

  </td>
</tr>
<tr>
  <td>list-style-image</td>
  <td markdown="1">

  <span class="smallblock" markdown="1">&lt;URI&gt;</span>

  mPDF &ge; 6.0
  </td>
</tr>
<tr>
  <td>list-style-position</td>
  <td markdown="1">

  inside \| outside  (default = outside)

  mPDF &ge; 6.0

  </td>
</tr>
<tr>
  <td> </td>
  <td markdown="1">
  **NB Lists are handled as block-level elements as from mPDF 6.0 (see above)**
  </td>
</tr>
</tbody>
</table>


<table class="table">
<thead>
<tr>
  <th>HTML Tag</th>
  <th>Property</th>
  <th>Values allowed & Notes</th>
</tr>
</thead>
<tbody>
<tr>
  <th rowspan="9">
  All Inline tags:
  SPAN, A, SUB, SUP,  ACRONYM,
  BIG, SMALL, INS, S, STRIKE,
  DEL, STRONG, CITE, Q, EM,
  B, I, U, SAMP, CODE, KBD, TT,
  VAR, FONT, TIME, MARK
  </th>
  <td><span class="smallblock">COMMON TEXT STYLES</span></td>
  <td><span class="smallblock">See <a href="#common-text-styles">below</a></span></td>
</tr>
<tr>
  <td>border, border-top, border-bottom, border-left, border-right</td>
  <td markdown="1">

  Size style and colour e.g.

  <span class="smallblock">LENGTH</span> solid\|dotted\|dashed\|double <span class="smallblock">COLOR</span>

  (mPDF &ge; 5.4)
  </td>
</tr>
<tr>
  <td>border-color*, border-top-color, border-right-color, border-bottom-color, border-left-color</td>
  <td markdown="1">

  <span class="smallblock">COLOR</span>

  (mPDF &ge; 5.4)

  </td>
</tr>
<tr>
  <td>border-width*, border-top-width, border-right-width, border-bottom-width, border-left-width</td>
  <td markdown="1">

  <span class="smallblock">LENGTH</span> 

  (mPDF &ge; 5.4)
  </td>
</tr>
<tr>
  <td markdown="1">

  border-style*, border-top-style, border-right-style, border-bottom-style, border-left-style

  </td>
  <td markdown="1">

  solid \| dotted \| dashed \| double

  (mPDF &ge; 5.4)

  </td>
</tr>
<tr>
  <td>background-color, background</td>
  <td><span class="smallblock">COLOR</span> (only the color is supported in background)</td>
</tr>
<tr>
  <td>display</td>
  <td>none (mPDF &ge; 5.0)</td>
</tr>
<tr>
  <td>visibility</td>
  <td markdown="1">

  hidden \| visible \| printonly \| screenonly (default = visible)

  (mPDF &ge; 5.7)

  </td>
</tr>
<tr>
  <td>hyphens</td>
  <td markdown="1">

  none \| manual \| auto (default = manual)

  As per CSS. (mPDF  &ge; 5.7)
  </td>
</tr>
</tbody>
</table>


<table class="table">
<thead>
<tr>
  <th style="white-space: nowrap;">HTML Tag</th>
  <th>Property</th>
  <th>Values allowed & Notes</th>
</tr>
</thead>
<tbody>
<tr>
  <th rowspan="28">TABLE</th>
  <td>background-color</td>
  <td><span class="smallblock">COLOR</span></td>
</tr>
<tr>
  <td>background, background-image, background-position, background-repeat, background-color</td>
  <td markdown="1">

  background is parsed as per the CSS specification.

  background-image in the form `url(image.png)` or `url('image.png')` or <span class="smallblock">GRADIENT</span>.

  background-position is supported as per CSS2.1

  background-repeat: repeat \| repeat-x \| repeat-y \| no-repeat

  background-attachment is parsed but has no effect.

  See note below. (cf. <a href="{{ "/what-else-can-i-do/backgrounds-borders.html" | prepend: site.baseurl
  }}">Backgrounds &amp; borders</a>)

  (All except background-color added mPDF 5.1)

  </td>
</tr>
<tr>
  <td>background-image-resolution</td>
  <td markdown="1">
  normal \| [ from-image \<dpi\> ]  (mPDF &ge; 5.1)
  </td>
</tr>
<tr>
  <td markdown="1">
  *background-image-opacity*
  </td>
  <td markdown="1">

  Value between 0 and 1.0

  Sets the opacity/transparency of the background image.

  </td>
</tr>
<tr>
  <td><span class="smallblock">COMMON TEXT STYLES</span></td>
  <td><span class="smallblock">See <a href="#common-text-styles">below</a> - except text-decoration, text-transform and text-shadow</span>
  </td>
</tr>
<tr>
  <td>border, border-right, border-left, border-top, border-bottom</td>
  <td markdown="1">

  Size style and colour e.g.

  <span class="smallblock">LENGTH</span> double \| solid \| dashed \| dotted \| ridge \| outset \| groove \|
  inset \| hidden \| none <span class="smallblock">COLOR</span> 

  NB Table & cell borders accept: double \| solid \| dashed \| dotted \| ridge \| outset \| groove \| inset
  (other block elements only support solid \| dotted \| dashed \| double)

  </td>
</tr>
<tr>
  <td>border-color*, border-top-color, border-right-color, border-bottom-color, border-left-color</td>
  <td markdown="1">

  <span class="smallblock">COLOR</span>

  (mPDF &ge; 4.0)

  </td>
</tr>
<tr>
  <td>border-width*, border-top-width, border-right-width, border-bottom-width, border-left-width</td>
  <td markdown="1">

  <span class="smallblock">LENGTH</span> 

  (mPDF &ge; 4.0)
  </td>
</tr>
<tr>
  <td>border-style*, border-top-style, border-right-style, border-bottom-style, border-left-style</td>
  <td markdown="1">

  double \| solid \| dashed \| dotted \| ridge \| outset \| groove \| inset \| hidden \| none

  (mPDF &ge; 4.0)

  </td>
</tr>
<tr>
  <td>padding*, padding-right, padding-left, padding-top, padding-bottom</td>
  <td markdown="1">

  <span class="smallblock">LENGTH</span>

  (mPDF &le; 1.3 incorrectly set cell-padding for all cells in table.)

  Sets table padding (only relevant when `border-collapse:separate`)

  </td>
</tr>
<tr>
  <td>margin*, margin-right, margin-left, margin-top, margin-bottom</td>
  <td><span class="smallblock">LENGTH</span></td>
</tr>
<tr>
  <td>width</td>
  <td><span class="smallblock">LENGTH</span></td>
</tr>
<tr>
  <td>vertical-align</td>
  <td>top | middle | bottom (applies to all cells in table)</td>
</tr>
<tr>
  <td>text-align</td>
  <td>
  left | right | center (applies to all cells in table; to centre a table on the page, you must use the
  align="center" attribute in the table tag)
  </td>
</tr>
<tr>
  <td>border-collapse</td>
  <td>collapse | separate</td>
</tr>
<tr>
  <td>border-spacing</td>
  <td markdown="1">

  Single or double values:

  `2px` sets horizontal and vertical;

  `2px 3px` sets horizontal=2 and vertical=3

  (Same as cellSpacing attribute) Default=2px

  </td>
</tr>
<tr>
  <td>empty-cells</td>
  <td>hide | show (only relevant when border-collapse:separate)</td>
</tr>
<tr>
  <td>page-break-inside</td>
  <td>avoid</td>
</tr>
<tr>
  <td>page-break-after</td>
  <td markdown="1">
  left \| right \| always

  (mPDF &ge; 5.4)
  </td>
</tr>
<tr>
  <td markdown="1">
  *rotate*
  </td>
  <td>rotates the table 90 degress clockwise (90) or counter-clockwise (-90). Does not work with columns, and
  bookmarks will not be correctly placed (custom attribute)
  </td>
</tr>
<tr>
  <td markdown="1">
  *autosize*
  </td>
  <td>Shrinks a table to fit if width is too small to allow complete words to fit. The value (must be &ge;1)
  determines the maximum allowable factor to shrink i.e. `autosize="2"` will allow the font-size to be reduced
  to a minimum of 1/2 the original size. A value of 1 prevents automatic resizing of the table. (custom
  property)
  </td>
</tr>
<tr>
  <td markdown="1">
  *topntail*
  </td>
  <td>Sets border at top and bottom of table, and below THEAD row if present. (custom attribute)</td>
</tr>
<tr>
  <td markdown="1">
  *thead-underline*
  </td>
  <td>Sets border at bottom of THEAD row if present. (custom attribute added mPDF v1.1)</td>
</tr>
<tr>
  <td>line-height</td>
  <td>Sets default line-height for table cells as factor or % (value e.g. 1.3)</td>
</tr>
<tr>
  <td>line-stacking-strategy</td>
  <td markdown="1">
  inline-line-height \| block-line-height \| max-height \| grid-height

  As per draft CSS3 spec. (mPDF &ge; 6.0)

  Default = inline-line-height
  </td>
</tr>
<tr>
  <td>line-stacking-shift</td>
  <td markdown="1">
  consider-shifts \| disregard-shifts

  As per draft CSS3 spec. (mPDF &ge; 6.0)

  Default = consider-shifts
  </td>
</tr>
<tr>
  <td markdown="1">
  *overflow*
  </td>
  <td markdown="1">
  auto \| hidden \| visible \| wrap

  Controls table layout if minimum width is too wide for page.
  </td>
</tr>
<tr>
  <td>direction</td>
  <td>rtl | ltr (mPDF &ge; 5.1)</td>
</tr>
<tr>
  <th>CAPTION</th>
  <td>caption-side</td>
  <td>top | bottom (mPDF &ge; 5.4) Right and left are not supported</td>
</tr>
<tr>
  <th rowspan="3">THEAD, TFOOT</th>
  <td>font-weight</td>
  <td>normal | bold</td>
</tr>
<tr>
  <td>vertical-align</td>
  <td>top | middle | bottom</td>
</tr>
<tr>
  <td>text-align</td>
  <td>left | center | right</td>
</tr>
<tr>
  <th rowspan="10">TR</th>
  <td>background-color</td>
  <td><span class="smallblock">COLOR</span></td>
</tr>
<tr>
  <td>background, background-image, background-position, background-repeat, background-color</td>
  <td markdown="1">

  background is parsed as per the CSS specification.

  background-image in the form url(image.png) or url('image.png') or <span class="smallblock">GRADIENT</span>.

  background-position is supported as per CSS2.1

  background-repeat: repeat \| repeat-x \| repeat-y \| no-repeat

  background-attachment is parsed but has no effect.

  See note below. (cf. <a href="{{ "/what-else-can-i-do/backgrounds-borders.html" | prepend: site.baseurl
  }}">Backgrounds &amp; borders</a>)

  (All except background-color added mPDF 5.1)

  </td>
</tr>
<tr>
  <td markdown="1">
  *background-image-opacity*
  </td>
  <td markdown="1">

  Value between 0 and 1.0

  Sets the opacity/transparency of the background image.

  </td>
</tr>
<tr>
  <td>border, border-right, border-left, border-top, border-bottom</td>
  <td markdown="1">

  Size style and colour e.g.

  <span class="smallblock">LENGTH</span> double \| solid \| dashed \| dotted \| ridge \| outset \| groove \|
  inset \| hidden \| none <span class="smallblock">COLOR</span> 

  NB Table & cell borders accept: double \| solid \| dashed \| dotted \| ridge \| outset \| groove \| inset \|
  hidden \| none (other block elements only support solid \| dotted \| dashed \| double)

  (mPDF &ge; 5.1)
  </td>
</tr>
<tr>
  <td>border-color*, border-top-color, border-right-color, border-bottom-color, border-left-color</td>
  <td markdown="1">

  <span class="smallblock">COLOR</span>

  (mPDF &ge; 5.1)

  </td>
</tr>
<tr>
  <td>border-width*, border-top-width, border-right-width, border-bottom-width, border-left-width</td>
  <td markdown="1">

  <span class="smallblock">LENGTH</span> 

  (mPDF &ge; 5.1)
  </td>
</tr>
<tr>
  <td>border-style*, border-top-style, border-right-style, border-bottom-style, border-left-style</td>
  <td markdown="1">

  double \| solid \| dashed \| dotted \| ridge \| outset \| groove \| inset \| hidden \| none

  (mPDF &ge; 5.1)

  </td>
</tr>
<tr>
  <td markdown="1">
  *text-rotate*
  </td>
  <td>Rotate the text inside table cells for this row. Accepted values are 1 - 90 for degrees anticlockwise, or
  -90 (only) for clockwise rotation. (custom attribute)
  </td>
</tr>
<tr>
  <td>:nth-child()  <span class="smallblock">SELECTOR</span>* *</td>
  <td markdown="1">
  odd \| even \| *a*n+*b*

  As per CSS3 specification
  </td>
</tr>
<tr>
  <td>page-break-before, page-break-after</td>
  <td markdown="1">
  avoid \| allow

  Allows grouping of table rows and avoiding page breaks between two pages inside a group.
  since 8.2.4
  </td>
</tr>
<tr>
  <th rowspan="21">TD, TH</th>
  <td>background, background-image, background-position, background-repeat, background-color</td>
  <td markdown="1">

  background is parsed as per the CSS specification.

  background-image in the form `url(image.png)` or `url('image.png')` or <span class="smallblock">GRADIENT</span>
  (mPDF &ge; 5.1).

  background-position is supported as per CSS2.1

  background-repeat: repeat \| repeat-x \| repeat-y \| no-repeat

  background-attachment is parsed but has no effect.

  See note below.

  (All except background-color added mPDF 3.2)

  </td>
</tr>
<tr>
  <td markdown="1">
  *background-gradient*
  </td>
  <td markdown="1">

  (Deprecated) <span class="smallblock">GRADIENT_OLD</span>

  (Added mPDF 3.2)

  </td>
</tr>
<tr>
  <td markdown="1">
  *background-image-opacity*
  </td>
  <td markdown="1">

  Value between 0 and 1.0

  Sets the opacity/transparency of the background image.

  </td>
</tr>
<tr>
  <td markdown="1">
  *background-image-resize*
  </td>
  <td markdown="1">
  0 - No resizing (default)

  1 - Shrink-to-fit w (keep aspect ratio)

  2 - Shrink-to-fit h (keep aspect ratio)

  3 - Shrink-to-fit w and/or h (keep aspect ratio)

  4 - Resize-to-fit w (keep aspect ratio)

  5 - Resize-to-fit h (keep aspect ratio)

  6 - Resize-to-fit w and h
  </td>
</tr>
<tr>
  <td>border, border-right, border-left, border-top, border-bottom</td>
  <td markdown="1">

  Size style and colour e.g.

  <span class="smallblock">LENGTH</span> double \| solid \| dashed \| dotted \| ridge \| outset \| groove \|
  inset \| hidden \| none <span class="smallblock">COLOR</span> 

  NB Table & cell borders accept: double \| solid \| dashed \| dotted \| ridge \| outset \| groove \| inset \|
  hidden \| none (other block elements only support solid \| dotted \| dashed \| double)

  </td>
</tr>
<tr>
  <td>border-color*, border-top-color, border-right-color, border-bottom-color, border-left-color</td>
  <td markdown="1">

  <span class="smallblock">COLOR</span>

  (mPDF &ge; 4.0)

  </td>
</tr>
<tr>
  <td>border-width*, border-top-width, border-right-width, border-bottom-width, border-left-width</td>
  <td markdown="1">

  <span class="smallblock">LENGTH</span> 

  (mPDF &ge; 4.0)
  </td>
</tr>
<tr>
  <td>border-style*, border-top-style, border-right-style, border-bottom-style, border-left-style</td>
  <td markdown="1">

  double \| solid \| dashed \| dotted \| ridge \| outset \| groove \| inset \| hidden \| none

  (mPDF &ge; 4.0)

  </td>
</tr>
<tr>
  <td>padding*, padding-right, padding-left, padding-top, padding-bottom</td>
  <td><span class="smallblock">LENGTH</span></td>
</tr>
<tr>
  <td>width</td>
  <td><span class="smallblock">LENGTH</span></td>
</tr>
<tr>
  <td>height</td>
  <td><span class="smallblock">LENGTH</span> (but not %) (mPDF &ge; 4.0)</td>
</tr>
<tr>
  <td><span class="smallblock">COMMON TEXT STYLES</span></td>
  <td><span class="smallblock">See <a href="#common-text-styles">below</a></span></td>
</tr>
<tr>
  <td>white-space</td>
  <td>nowrap</td>
</tr>
<tr>
  <td>vertical-align</td>
  <td>top | middle | bottom</td>
</tr>
<tr>
  <td>text-align</td>
  <td markdown="1">

  left \| right \| center

  From mPDF 5.7, also supports a decimal-mark alignment followed by a default e.g.

  `text-align: '.' center;`

  Non-ASCII characters should be defined using Unicode values:

  `text-align: '\66B' center;`

  </td>
</tr>
<tr>
  <td markdown="1">
  *text-rotate*
  </td>
  <td>Rotates the text in a table cell. Accepted values are 1-90 for degrees anticlockwise, or -90 (only) for
  clockwise rotation. (custom attribute)
  </td>
</tr>
<tr>
  <td>line-stacking-strategy</td>
  <td markdown="1">
  inline-line-height \| block-line-height \| max-height \| grid-height

  As per draft CSS3 spec. (mPDF &ge; 6.0)

  Default = inline-line-height
  </td>
</tr>
<tr>
  <td>line-stacking-shift</td>
  <td markdown="1">
  consider-shifts \| disregard-shifts

  As per draft CSS3 spec. (mPDF &ge; 6.0)

  Default = consider-shifts
  </td>
</tr>
<tr>
  <td>hyphens* *</td>
  <td markdown="1">
  none \| manual \| auto (default = manual)

  As per CSS. (mPDF  &ge; 5.7)
  </td>
</tr>
<tr>
  <td>:nth-child()  <span class="smallblock">SELECTOR</span></td>
  <td markdown="1">
  odd \| even \| *a*n+*b*

  As per CSS3 specification
  </td>
</tr>
<tr>
  <td>direction</td>
  <td>rtl | ltr (mPDF &ge; 6.0)</td>
</tr>
</tbody>
</table>

<table class="table">
<thead>
<tr>
  <th>HTML Tag</th>
  <th>Property</th>
  <th>Values allowed & Notes</th>
</tr>
</thead>
<tbody>
<tr>
  <th rowspan="7">HR</th>
  <td>width</td>
  <td><span class="smallblock">LENGTH</span></td>
</tr>
<tr>
  <td>text-align</td>
  <td>left | right | center</td>
</tr>
<tr>
  <td>color</td>
  <td><span class="smallblock">COLOR</span></td>
</tr>
<tr>
  <td>height</td>
  <td>i.e. line-width. <span class="smallblock">LENGTH</span></td>
</tr>
<tr>
  <td>margin-top, margin-bottom</td>
  <td><span class="smallblock">LENGTH</span></td>
</tr>
<tr>
  <td>margin-left, margin-right</td>
  <td>auto | 0 (only) are supported as an alternative way to align a HR of less than 100% width. Values for
  margin-left: 0; margin-right: auto; will align the HR to the left etc.
  </td>
</tr>
<tr>
  <td>clear</td>
  <td>left | right | both</td>
</tr>
<tr>
  <th rowspan="18">IMG</th>
  <td>vertical-align</td>
  <td markdown="1">

  top \| middle \| bottom \| baseline \| text-bottom \| text-top

  (Full support only from mPDF 4.2)

  </td>
</tr>
<tr>
  <td>margin, margin-right, margin-left, margin-top, margin-bottom</td>
  <td><span class="smallblock">LENGTH</span></td>
</tr>
<tr>
  <td>border, border-right, border-left, border-top, border-bottom</td>
  <td markdown="1">

  Must be full declaration of size style and colour e.g.

  0.1pt solid \| dotted \| dashed #cccccc

  Will also accept `#cccccc 0.1pt solid` (which is generated by IE WYSIWYG editor)

  and (from mPDF 1.4) `solid 3mm #000000`

  medium \| thin \| thick accepted for size

  </td>
</tr>
<tr>
  <td>padding*, padding-right, padding-left, padding-top, padding-bottom</td>
  <td><span class="smallblock">LENGTH</span></td>
</tr>
<tr>
  <td>background-color</td>
  <td><span class="smallblock">COLOR</span>  (mPDF &ge; 5.7.3)<span class="smallblock"> </span></td>
</tr>
<tr>
  <td>opacity</td>
  <td markdown="1">

  Value between 0 and 1.0

  CSS3 recommended property (but already supported by Firefox)

  Sets the opacity/transparency of the image.

  </td>
</tr>
<tr>
  <td>image-orientation</td>
  <td><span class="smallblock">ANGLE</span> as deg, rad, or grad (as per draft CSS3)  mPDF &ge; 5.1</td>
</tr>
<tr>
  <td>image-resolution</td>
  <td markdown="1">
  normal \| [ from-image
  \<dpi\> ] (as per draft CSS3)  mPDF &ge; 5.1
  </td>
</tr>
<tr>
  <td>image-rendering</td>
  <td markdown="1">

  auto \| crisp-edges \| optimizequality \| smooth  (as per draft CSS3)

  (mPDF &ge; 6.0)

  Controls whether interpolation is on or off in PDF document. Once set for an image, subsequent use of the
  same image will use the initial setting for this property.

  auto (default) - uses the value set by config variable: `$interpolateImages`

  crisp-edges - interpolation disabled

  optimizequality - interpolation enabled

  smooth - interpolation enabled

  </td>
</tr>
<tr>
  <td markdown="1">
  *gradient-mask*
  </td>
  <td><span class="smallblock">GRADIENT_OLD</span>  mPDF &ge; 5.1</td>
</tr>
<tr>
  <td>display</td>
  <td>none</td>
</tr>
<tr>
  <td>visibility</td>
  <td markdown="1">
  visible \| hidden \| *printonly* \| *screenonly*  (mPDF &ge; 5.4)
  </td>
</tr>
<tr>
  <td>transform</td>
  <td markdown="1">

  All CSS3 transform functions are supported except matrix() i.e.

  translate(), translateX(), translateY()

  skew(), skewX(), skewY()

  scale(), scaleX(), scaleY()

  rotate()

  cf. <a href="http://www.w3.org/TR/css3-transforms/#typedef-transform-function">http://www.w3.org/TR/css3-transforms/#typedef-transform-function</a>

  </td>
</tr>
<tr>
  <td>float</td>
  <td>left | right (cf. <a href="{{ "/what-else-can-i-do/images.html" | prepend: site.baseurl }}">Images</a>)</td>
</tr>
<tr>
  <td>z-index</td>
  <td>Sets a layer in the PDF document. See <a href="{{ "/what-else-can-i-do/layers.html" | prepend: site.baseurl
  }}">Layers</a>.
  </td>
</tr>
<tr>
  <td>(vspace, hspace)</td>
  <td>Attributes - set values for margin-left/right or margin-top/bottom</td>
</tr>
<tr>
  <td>width, height</td>
  <td><span class="smallblock">LENGTH</span>. NB the inline attributes `width=""` and `height=""` are also supported
  </td>
</tr>
<tr>
  <td>min-width, min-height, max-width, max-height</td>
  <td><span class="smallblock">LENGTH</span>. (mPDF &ge; 5.6)</td>
</tr>
<tr>
  <th rowspan="3">SELECT</th>
  <td>font-family</td>
  <td><span class="smallblock">FONT-FAMILY</span></td>
</tr>
<tr>
  <td>font-size</td>
  <td><span class="smallblock">FONT-SIZE</span></td>
</tr>
<tr>
  <td>color</td>
  <td><span class="smallblock">COLOR</span></td>
</tr>
<tr>
  <th rowspan="7">TEXTAREA</th>
  <td>width, height</td>
  <td><span class="smallblock">LENGTH</span>. NB the inline attributes cols="" and rows="" are also supported</td>
</tr>
<tr>
  <td>font-family</td>
  <td><span class="smallblock">FONT-FAMILY</span></td>
</tr>
<tr>
  <td>font-size</td>
  <td><span class="smallblock">FONT-SIZE</span></td>
</tr>
<tr>
  <td>color</td>
  <td><span class="smallblock">COLOR</span></td>
</tr>
<tr>
  <td>vertical-align</td>
  <td markdown="1">

  top \| middle \| bottom \| baseline \| text-bottom \| text-top

  (Full support only from mPDF 4.2)

  </td>
</tr>
<tr>
  <td>border-color</td>
  <td><span class="smallblock">COLOR</span>  Active Forms only (mPDF &ge; 5.3)</td>
</tr>
<tr>
  <td>background-color</td>
  <td><span class="smallblock">COLOR</span>  Active Forms only (mPDF &ge; 5.3)</td>
</tr>
<tr>
  <th>INPUT (type=IMAGE)</th>
  <td>width, height</td>
  <td><span class="smallblock">LENGTH</span></td>
</tr>
<tr>
  <th rowspan="5">INPUT (type=BUTTON| SUBMIT|RESET)</th>
  <td>font-family</td>
  <td><span class="smallblock">FONT-FAMILY</span>  Active Forms only (mPDF &ge; 5.3)</td>
</tr>
<tr>
  <td>font-size</td>
  <td><span class="smallblock">FONT-SIZE</span>  Active Forms only (mPDF &ge; 5.3)</td>
</tr>
<tr>
  <td>color</td>
  <td><span class="smallblock">COLOR</span>  Active Forms only (mPDF &ge; 5.3)</td>
</tr>
<tr>
  <td>border-color</td>
  <td><span class="smallblock">COLOR</span>  Active Forms only (mPDF &ge; 5.3)</td>
</tr>
<tr>
  <td>background-color</td>
  <td><span class="smallblock">COLOR</span>  Active Forms only (mPDF &ge; 5.3)</td>
</tr>
<tr>
  <th rowspan="2">INPUT (type=CHECKBOX| RADIO)</th>
  <td>font-size</td>
  <td><span class="smallblock">FONT-SIZE</span> (sets size of glyph). Not inherited.</td>
</tr>
<tr>
  <td>color</td>
  <td><span class="smallblock">COLOR</span>. Not inherited.</td>
</tr>
<tr>
  <th rowspan="6">INPUT (type=PASSWORD| TEXT)</th>
  <td>width</td>
  <td><span class="smallblock">LENGTH</span>. NB the inline attribute size="" is also supported</td>
</tr>
<tr>
  <td>font-family</td>
  <td><span class="smallblock">FONT-FAMILY</span></td>
</tr>
<tr>
  <td>font-size</td>
  <td><span class="smallblock">FONT-SIZE</span></td>
</tr>
<tr>
  <td>color</td>
  <td><span class="smallblock">COLOR</span></td>
</tr>
<tr>
  <td>border-color</td>
  <td><span class="smallblock">COLOR</span>  Active Forms only (mPDF &ge; 5.3)</td>
</tr>
<tr>
  <td>background-color</td>
  <td><span class="smallblock">COLOR</span>  Active Forms only (mPDF &ge; 5.3)</td>
</tr>
<tr>
  <th>BR</th>
  <td>clear</td>
  <td>left | right | both</td>
</tr>
<tr>
  <th>DOTTAB</th>
  <td markdown="1">
  *outdent*
  </td>
  <td><span class="smallblock">LENGTH</span>. (mPDF &ge; 5.7)</td>
</tr>
<tr>
  <th rowspan="4" markdown="1">
  @page

  @page \<named\> 

  </th>
  <td>size</td>
  <td markdown="1">

  \<length\>{1,2} \| auto \| portrait \| landscape

  Note: 'em' 'ex' and % are not allowed

  Length values are width and height e.g. `size: 8.5in 11in;` or one value for a square.

  Sets the size of the 'page-box', which is usually used with a constant size sheet through the document, as
  in the CSS2 @paged media spec.

  </td>
</tr>
<tr>
  <td>sheet-size</td>
  <td markdown="1">

  \<length\>{2} \| A4 \| A4-L etc.

  Note: 'em' 'ex' and % are not allowed

  Length values are width and height e.g. `size: 8.5in 11in;` Any of the standard sheet sizes can be used (as
  for mPDF() ) with the suffix `-L` for landscape

  </td>
</tr>
<tr>
  <td>odd-header-name, even-header-name, odd-footer-name, even-footer-name</td>
  <td markdown="1">

  A named Header or Footer. HTML headers/footers must precede the name with
  `$html_`

  NB This was the original form, and still takes preference over header and footer which can be set using the
  pseudo-selectors e.g. :right

  The name `_default` can be used to allow the current non-HTML header to remain unchanged (mPDF &ge; 5.1)
  </td>
</tr>
<tr>
  <td>margin, margin-left, margin-right, margin-top, margin-bottom</td>
  <td><span class="smallblock">LENGTH</span> (% refers to page-box width for left/right, of height for top/bottom)
  </td>
</tr>
<tr>
  <th rowspan="11" markdown="1">
  @page  

  @page :right

  @page :left

  @page :first

  @page \<named\>

  </th>
  <td>margin-top, margin-bottom</td>
  <td markdown="1">

  <span class="smallblock">LENGTH</span> (% refers to page-box width for left/right, of height for top/bottom)

  Note that left and right margins cannot be changed when using a page selector.

  @page :first is not recognised unless @page has been set with some CSS properties

  </td>
</tr>
<tr>
  <td markdown="1">
  *margin-header, margin-footer*
  </td>
  <td><span class="smallblock">LENGTH</span></td>
</tr>
<tr>
  <td>marks</td>
  <td markdown="1">

  crop \| cross \| none

  From mPDF 5.1 crop and cross can be used together.

  </td>
</tr>
<tr>
  <td>header, footer</td>
  <td markdown="1">
  A named Header or Footer. HTML headers/footers must precede the name with
  `$html_` (from mPDF 4.2)
  </td>
</tr>
<tr>
  <td>background, background-image, background-position, background-repeat, background-color</td>
  <td markdown="1">

  background is parsed as per the CSS specification.

  background-image in the form `url(image.png)` or `url('image.png')` supported.

  background-position is supported as per CSS2.1

  background-repeat: repeat \| repeat-x \| repeat-y \| no-repeat

  background-attachment is parsed but has no effect.

  See note below. (cf. <a href="{{ "/what-else-can-i-do/backgrounds-borders.html" | prepend: site.baseurl
  }}">Backgrounds &amp; borders</a>)

  </td>
</tr>
<tr>
  <td markdown="1">
  *background-image-opacity*
  </td>
  <td markdown="1">

  Value between 0 and 1.0

  Sets the opacity/transparency of the background image.

  </td>
</tr>
<tr>
  <td markdown="1">
  *background-image-resize*
  </td>
  <td markdown="1">
  0 - No resizing (default)

  1 - Shrink-to-fit w (keep aspect ratio)

  2 - Shrink-to-fit h (keep aspect ratio)

  3 - Shrink-to-fit w and/or h (keep aspect ratio)

  4 - Resize-to-fit w (keep aspect ratio)

  5 - Resize-to-fit h (keep aspect ratio)

  6 - Resize-to-fit w and h

  </td>
</tr>
<tr>
  <td markdown="1">
  *background-gradient*
  </td>
  <td>(Deprecated) <span class="smallblock">GRADIENT_OLD</span></td>
</tr>
<tr>
  <td markdown="1">
  *resetpagenum*
  </td>
  <td markdown="1">
  <span class="smallblock">INTEGER</span> Reset page numbering. Use with **:first**
  </td>
</tr>
<tr>
  <td markdown="1">
  *pagenumstyle*
  </td>
  <td>1 | A | a | I | i  <span class="smallblock"> </span>See &lt;<a href="{{ "/reference/html-control-tags/pagebreak.html"
  | prepend: site.baseurl }}">pagebreak</a>&gt; for details
  </td>
</tr>
<tr>
  <td markdown="1">
  *suppress*
  </td>
  <td markdown="1">
  on \| off \| 1 \| 0 

  See &lt;<a href="{{ "/reference/html-control-tags/pagebreak.html" | prepend: site.baseurl }}">pagebreak</a>&gt; for details
  </td>
</tr>
</tbody>
</table>


## Common Text Styles

<span class="smallblock">COMMON TEXT STYLES</span> are:

<table class="table">
<tbody>
<tr>
  <td>font-family</td>
  <td><span class="smallblock">FONT-FAMILY</span></td>
</tr>
<tr>
  <td>font-size</td>
  <td>
  <span class="smallblock">FONT-SIZE</span>
  </td>
</tr>
<tr>
  <td>font-style</td>
  <td>italic | oblique | normal</td>
</tr>
<tr>
  <td>font-weight</td>
  <td>bold | normal (only)</td>
</tr>
<tr>
  <td>font</td>
  <td>Shorthand form, as per CSS2 specification (mPDF &ge; 4.0)</td>
</tr>
<tr>
  <td>font-variant</td>
  <td markdown="1">

  normal \| none \| [ \<common-lig-values\>
  \<discretionary-lig-values\>
  \<historical-lig-values\>
  \<contextual-alt-values\>

  historical-forms

  [ small-caps \| all-small-caps \| petite-caps \| all-petite-caps \| unicase \| titling-caps ]

  \<numeric-figure-values\>
  \<numeric-spacing-values\>
  \<numeric-fraction-values\>

  ordinal

  slashed-zero ]

  (mPDF &ge; 6.0)

  </td>
</tr>
<tr>
  <td>font-variant-position</td>
  <td markdown="1">

  normal \| sub \| super

  (mPDF &ge; 6.0)

  </td>
</tr>
<tr>
  <td>font-variant-caps</td>
  <td markdown="1">

  normal \| small-caps \| all-small-caps \| petite-caps \| all-petite-caps \| unicase \| titling-caps

  (mPDF &ge; 6.0)

  </td>
</tr>
<tr>
  <td>font-variant-ligatures</td>
  <td markdown="1">

  normal \| none \| [

  \<common-lig-values\>
  \<discretionary-lig-values\>
  \<historical-lig-values\>
  \<contextual-alt-values\> ]

  (mPDF &ge; 6.0)

  \<common-lig-values\> = [ common-ligatures \| no-common-ligatures ]

  \<discretionary-lig-values\> = [ discretionary-ligatures \| no-discretionary-ligatures ]

  \<historical-lig-values\> = [ historical-ligatures \| no-historical-ligatures ]

  \<contextual-alt-values\> = [ contextual \| no-contextual ]

  </td>
</tr>
<tr>
  <td>font-variant-numeric</td>
  <td markdown="1">

  normal \| [
  \<numeric-figure-values\>

  \<numeric-spacing-values\>

  \<numeric-fraction-values\>

  ordinal

  slashed-zero ]

  (mPDF &ge; 6.0)

  </td>
</tr>
<tr>
  <td>font-variant-alternates</td>
  <td markdown="1">

  Only [normal \| historical-forms] supported (i.e. most are NOT supported)

  (mPDF &ge; 6.0)

  </td>
</tr>
<tr>
  <td>font-language-override</td>
  <td markdown="1">
  3-letter case-sensitive OpenType language system tag

  (mPDF &ge; 6.0)

  </td>
</tr>
<tr>
  <td>font-feature-settings</td>
  <td markdown="1">

  Comma separated list of
  \<feature-tag-value\> with the following syntax:

  \<feature-tag-value\> = \<string\> [ \<integer\> \| on \| off ]?

  (mPDF &ge; 6.0)

  </td>
</tr>
<tr>
  <td>font-kerning</td>
  <td markdown="1">

  auto \| normal \| none (mPDF &ge; 5.1)

  auto and normal both have the effect of turning kerning on, as long as

  `$mpdf->useKerning = true;`

  </td>
</tr>
<tr>
  <td>vertical-align</td>
  <td>super | sub | baseline | <span class="smallblock">LENGTH</span>  (mPDF &ge; 5.7.3)</td>
</tr>
<tr>
  <td>letter-spacing</td>
  <td>normal | <span class="smallblock">LENGTH</span>  (mPDF &ge; 5.1)</td>
</tr>
<tr>
  <td>word-spacing</td>
  <td>normal | <span class="smallblock">LENGTH</span>  (mPDF &ge; 5.1)</td>
</tr>
<tr>
  <td>color</td>
  <td><span class="smallblock">COLOR</span></td>
</tr>
<tr>
  <td>text-decoration</td>
  <td markdown="1">

  underline \| line-through \| normal (line-through = strike-through)  (mPDF &ge; 5.4)

  overline  (mPDF &ge; 5.7.3)

  </td>
</tr>
<tr>
  <td>text-outline</td>
  <td markdown="1">
  thickness [ blur ] color; OR none (default)

  Blur is not supported.

  As per CSS3

  (mPDF &ge; 5.7) Supported in tables &ge; 6.0

  </td>
</tr>
<tr>
  <td markdown="1">
  text-outline-width, *outline-width*
  </td>
  <td markdown="1">
  Width of the outline. <span class="smallblock">LENGTH</span>

  (text-outline-width as from mPDF &ge; 5.7)

  Supported in tables &ge; 6.0
  </td>
</tr>
<tr>
  <td markdown="1">
  text-outline-color, *outline-color*
  </td>
  <td markdown="1">
  <span class="smallblock">COLOR</span>  = colour of the inner part of the text e.g. #rrggbb. 'INVERT' is also accepted.

  (text-outline-color as from mPDF &ge; 5.7) Supported in tables &ge; 6.0
  </td>
</tr>
<tr>
  <td>text-shadow</td>
  <td>As per CSS3 specification. `blur` is not supported.  (mPDF &ge; 5.4)</td>
</tr>
<tr>
  <td>text-transform</td>
  <td><span class="smallblock"> </span>capitalize | uppercase | lowercase  (mPDF &ge; 5.4)</td>
</tr>
<tr>
  <td>unicode-bidi</td>
  <td markdown="1">
  normal \| embed \| isolate \| bidi-override \| isolate-override \| plaintext

  (mPDF &ge; 6.0)

  When used on block-level elements:

  - the value is not inherited to child blocks
  - using `embed` or `isolate` has no effect on block level-boxes
  - `isolate-override` is equivalent to `bidi-override` on block-level boxes
  </td>
</tr>
</tbody>
</table>

**Notes:**

\* Margin, padding, border-width, border-color and border-style accept the various shorthand forms e.g.:

 * `margin: 1pt;` will set all top, right, bottom and left values the same
 * `margin: 1pt 2pt;` will set top and bottom to 1pt, left and right to 2pt
 * `margin: 1pt 2pt 3pt;` will set top to 1 pt, left and right to 2 pt, and bottom to 3 pt (mPDF &ge; 4.0)
 * `margin: 1pt 2pt 3pt 4pt;` will set all values in order: `top > right > bottom > left`

NB Table page-break-inside, autosize values and rotate are only respected for that set on first level table of nested tables

## Border

medium \| thin \| thick are accepted for size - converted to 1px, 3px, 5px

# See Also

- <a href="{{ "/what-else-can-i-do/backgrounds-borders.html" | prepend: site.baseurl }}">Backgrounds &amp; Borders (including Gradients)</a>
- <a href="{{ "/html-support/html-attributes.html" | prepend: site.baseurl }}">HTML supported attributes</a>
