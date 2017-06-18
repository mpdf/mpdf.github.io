---
layout: page
title: WriteCell()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/writecell.html
modification_time: 2015-08-05T12:01:15+00:00
---

WriteCell — Writes a single line of text directly to the PDF document at the current position.

# Description

void **WriteCell**(
float <span class="parameter">$w</span>, 
float <span class="parameter">$h</span>, 
string <span class="parameter">$text</span>
[, mixed <span class="parameter">$border</span>
[, integer <span class="parameter">$ln</span>
[, string <span class="parameter">$align</span>
[, integer <span class="parameter">$fill</span>
[, mixed <span class="parameter">$link</span>
[, float <span class="parameter">$returnx</span>]]]]]])

Prints a cell (rectangular area) with optional borders, background color and character string. The upper-left 
corner of the cell corresponds to the current position. The text can be aligned or centered. After the call, 
the current position moves to the right or to the next line. It is possible to put a link on the text. 
If automatic page breaking is enabled and the cell goes beyond the limit, a page break is done before outputting.

# Parameters

`$w`

: Cell width. If `0`, the cell extends up to the right margin.

`$h`

: Cell height. 

  Default value: `0`

`$text`

: String to print. 

  Default value: `''` (empty string.)

  This method accepts UTF-8 encoded text, and will reverse RTL (right-to-left) text when appropriate.
  
  Text containing HTML entities, as well as decimal and hex e.g. `&apos;` `&#8812;` or `&#x21a4;` can be used, by setting:
  
  ```php
  <?php
  $mpdf->text_input_as_HTML = true; //(default = false)
  
  ```
  
  This will convert all the above to their appropriate characters, otherwise the text will be output as it is.

`$border`

: Indicates if borders must be drawn around the cell. 

  The value can be either a number:
  * `0`: no border
  * `1`: frame
  
  or a string containing some or all of the following characters (in any order):
  * `'L'`: left
  * `'T'`: top
  * `'R'`: right
  * `'B'`: bottom
  
  Default value: `0`

`$ln`

: Indicates where the current position should go after the call. 

  Possible values are:

  * `0`: to the right
  * `1`: to the beginning of the next line
  * `2`: below
  
  Default value: `0`

`$align`

: Allows to center or align the text. 

  Possible values are:
  * `'L'` or empty string: left align (default value)
  * `'C'`: center
  * `'R'`: right align

`$fill`

: Indicates if the cell background must be painted (`true`) or transparent (`false`). 

  Default value: `false`.

`$link`

: URL or identifier returned by FPDF function `AddLink()`.

`$returnx`

: An additional parameter `$returnx` has been added, compared to the original FPDF function; 

  If `$ln` is set, the current position moves not to the left margin, but to the value set as `$returnx`.



<div class="alert alert-info" role="alert" markdown="1">
  **Note**: The methods `Cell()` and `Text()` from FPDF are still present, but should not be used directly as 
  they will not cope with UTF-8 encoded text. Use the `WriteCell()` and `WriteText()` methods instead.
  
  See the details for original `Cell()` at the <a href="{{ "/reference/mpdf-functions/fpdf-original-functions.html" | prepend: site.baseurl }}">FPDF</a> 
  equivalent.
</div>

