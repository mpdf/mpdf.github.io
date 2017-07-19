---
layout: page
title: MultiCell()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/multicell.html
modification_time: 2015-08-05T12:00:49+00:00
---

void **MultiCell**(
float <span class="parameter">$w</span>, 
float <span class="parameter">$h</span>, 
string <span class="parameter">$text</span> 
[, mixed <span class="parameter">$border</span> 
[, string <span class="parameter">$align</span> 
[, integer <span class="parameter">$fill</span> 
[, mixed <span class="parameter">$link</span> 
[, string <span class="parameter">$directionality</span> 
[, boolean <span class="parameter">$encoded</span>]]]]]])

Writes a block of text directly to the PDF document at the current position. Lines are wrapped at the margins.

# Description

This method allows printing text with line breaks. They can be automatic (as soon as the text reaches the 
right border of the cell) or explicit (via the `\n` character). As many cells as necessary are output, one 
below the other. Text can be aligned, centered or justified. The cell block can be framed and the background painted.


# Parameters

See the details for `MultiCell()` at the <a href="{{ "/reference/mpdf-functions/fpdf-original-functions.html" | prepend: site.baseurl }}">FPDF</a> equivalent. 

Two additional parameters have been added:

`$directionality`

: Set to `'rtl'` if using RTL language (right-to-left)

  Default: `'ltr'`

`$encoded`

: When set to false (default), UTF-8 encoded text will be appropriately converted to the chosen output 
  file format. It should only be set to true, when the input text has already been converted internally 
  within the program.

  Default: `false`
  

   
   

**Original parameters** as the FPDF equivalent:

`$w`

: Width of cells. 

  If `0`, they extend up to the right margin of the page.

`$h`

: Height of cells.

`$text`

: String to print.

`$border`

: Indicates if borders must be drawn around the cell block. 

  The value can be either a number:
  * `0`: no border
  * `1`: frame
  
  or a string containing some or all of the following characters (in any order):
  * `'L'`: left
  * `'T'`: top
  * `'R'`: right
  * `'B'`: bottom
  
  Default value: `0`.

`$align`

: Sets the text alignment. 

  Possible values are:
  * `'L'`: left alignment
  * `'C'`: center
  * `'R'`: right alignment
  * `'J'`: justification (default value)

`$fill`

: Indicates if the cell background must be painted (`true`) or transparent (`false`). 

  Default value: `false`.
  
`$link`

: URL or identifier as returned by FPDF's AddLink().

  
NB: This does have an HTML equivalent as `<textcircle>`

