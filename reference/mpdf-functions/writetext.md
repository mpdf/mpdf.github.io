---
layout: page
title: WriteText()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/writetext.html
modification_time: 2015-08-05T12:01:17+00:00
---


Description





WriteText — Writes a single line of text directly to the PDF document at a specified position.

# Description
 
void **WriteText**(
float <span class="parameter">$w</span>, 
float <span class="parameter">$h</span>, 
string <span class="parameter">$text</span>)

Writes a single line of text directly to the PDF document at a specified position.

Prints a character string. The origin is on the left of the first character, on the baseline. 
This method allows to place a string precisely on the page, but it is usually easier to use `WriteCell()`, 
`MultiCell()` or `Write()` which are the standard methods to print text.

# Parameters

`$w`

: Abscissa of the origin, horizontal.

`$h`

: Ordinate of the origin, vertical.

`$text`

: String to print.
  This method accepts UTF-8 encoded text, and will reverse RTL (right-to-left) text when appropriate.
  
  Text containing HTML entities, as well as decimal and hex e.g. `&apos;` `&#8812;` or `&#x21a4;` can be used, by setting:
  
  ```php
  <?php
  $mpdf->text_input_as_HTML = true; //(default = false)
  
  ```
  
  This will convert all the above to their appropriate characters, otherwise the text will be output as it is.



<div class="alert alert-info" role="alert" markdown="1">
  **Note** The methods `Cell()` and `Text()` from FPDF are still present, but should not be used directly as 
  they will not cope with UTF-8 encoded text. Use the `WriteCell()` and `WriteText()` methods instead.
  
  See the details for the original `Text()` at <a href="{{ "/reference/mpdf-functions/fpdf-original-functions.html" | prepend: site.baseurl }}">FPDF</a> equivalent.
</div>