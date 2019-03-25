---
layout: page
title: CircularText()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/circulartext.html
modification_time: 2015-08-05T12:00:43+00:00
---

mPDF &ge; 5.4

CircularText – Draw a circle using specified text

# Description

function **CircularText**(
<span class="parameter">$x</span>, <span class="parameter">$y</span>, <span class="parameter">$r</span>,
<span class="parameter">$text</span>,
<span class="parameter">$align</span>`= 'top|bottom'`,
<span class="parameter">$fontfamily</span>`= ''`,
<span class="parameter">$fontsize</span>`= 0`,
<span class="parameter">$fontstyle</span>`= ''`,
<span class="parameter">$kerning</span>`= 120`,
<span class="parameter">$fontwidth</span>` = 100`,
<span class="parameter">$divider</span>`= ''`
)


Draw a circle using specified text. One or both of top-text and/or bottom-text must be defined. The radius and
font-size are user-defined, whilst the width and height of the generated object will be calculated from these values.


From mPDF &ge; 5.6 the CSS property `font-size` can be set to `auto`. This automatically
sizes text to fill a semicircle (if both top and bottom set) or a full circle (if only one set).

Circular Text is displayed as though an in-line element. Automatic kerning will be applied to the text if
<a href="{{ "/reference/mpdf-variables/usekerning.html" | prepend: site.baseurl }}">useKerning</a>
is `true`. 

## Parameters

<span class="parameter">$x</span>

: Abscissa of center

<span class="parameter">$y</span>

: Ordinate of center

<span class="parameter">$r</span>

: Radius of circle

<span class="parameter">$text</span>

: Text to be printed

<span class="parameter">$align</span>

: Text alignment: `'top'` or `'bottom'`.

  Default: `'top'`

<span class="parameter">$fontfamily</span>

:

<span class="parameter">$fontsize</span>

:

<span class="parameter">$fontstyle</span>

:

<span class="parameter">$kerning</span>

: (Fixed) spacing between letters in percentage.

  Default value: `120`. Zero is not allowed.

  Uses automatic Kerning between letters if
  <a href="{{ "/reference/mpdf-variables/usekerning.html" | prepend: site.baseurl }}">useKerning</a>` = true`.

<span class="parameter">$fontwidth</span>

: Width of letters in percentage.

  Default value: `100`. Zero is not allowed

<span class="parameter">$divider</span>

: Optional character string to divide top and bottom text




# See Also

* For more details see &lt;<a href="{{ "/reference/html-control-tags/textcircle.html" | prepend: site.baseurl }}">textcircle</a>&gt;

