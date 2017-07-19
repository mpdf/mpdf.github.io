---
layout: page
title: AutosizeText()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/autosizetext.html
modification_time: 2015-08-05T12:00:42+00:00
---

# Description

void **AutosizeText**( 
string <span class="parameter">$text</span>, 
float <span class="parameter">$width</span>, 
string <span class="parameter">$font</span>, 
string <span class="parameter">$style</span>
[, float <span class="parameter">$fontsize</span>
])

Writes a single line of text directly to the PDF document at the current position.
Font size will be automatically reduced to fit width (but is not increased).

NB Does not reverse RTL text

## Parameters

<span class="parameter">$text</span>

: UTF-8 encoded text to write. Single line only.

<span class="parameter">$width</span>

: Width of text in millimeters. The font size will be reduced if required to fit this size.

<span class="parameter">$font</span>

: Font family to use

<span class="parameter">$style</span>

: Font style used

  **Values**
  * [blank for normal]
  * `'i'` - italic
  * `'b'` - bold
  * `'bi'` - italic and bold

<span class="parameter">$fontsize</span>

: Maximum font size in points (pt)

  Default: `72`
