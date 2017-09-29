---
layout: page
title: FPDF Original Functions
parent_title: mPDF functions
permalink: /reference/mpdf-functions/fpdf-original-functions.html
modification_time: 2015-08-05T12:01:17+00:00
---

mPDF is based on <a href="http://www.fpdf.org/">FDPF</a> and has developed to support HTML input. 
However you can still use the original functions to write directly to the document. The links below 
take you straight to the FPDF Reference Manual pages:

 * <a href="http://www.fpdf.org/en/doc/cell.htm">Cell</a> - print a cell*
 * <a href="http://www.fpdf.org/en/doc/image.htm">Image</a> - output an image
 * <a href="http://www.fpdf.org/en/doc/line.htm">Line</a> - draw a line
 * <a href="http://www.fpdf.org/en/doc/multicell.htm">MultiCell</a> - print text with line breaks*
 * <a href="http://www.fpdf.org/en/doc/rect.htm">Rect</a> - draw a rectangle
 * <a href="http://www.fpdf.org/en/doc/setdrawcolor.htm">SetDrawColor</a> - set drawing color
 * <a href="http://www.fpdf.org/en/doc/setfillcolor.htm">SetFillColor</a> - set filling color
 * <a href="http://www.fpdf.org/en/doc/setfont.htm">SetFont</a> - set font
 * <a href="http://www.fpdf.org/en/doc/setfontsize.htm">SetFontSize</a> - set font size
 * <a href="http://www.fpdf.org/en/doc/setlinewidth.htm">SetLineWidth</a> - set line width
 * <a href="http://www.fpdf.org/en/doc/settextcolor.htm">SetTextColor</a> - set text color
 * <a href="http://www.fpdf.org/en/doc/setx.htm">SetX</a> - set current x position
 * <a href="http://www.fpdf.org/en/doc/setxy.htm">SetXY</a> - set current x and y positions
 * <a href="http://www.fpdf.org/en/doc/sety.htm">SetY</a> - set current y position
 * <a href="http://www.fpdf.org/en/doc/text.htm">Text</a> - print a string
 * <a href="http://www.fpdf.org/en/doc/write.htm">Write</a> - print flowing text*

 \* Note that these functions require text to be encoded if required, and do not automatically 
 reverse RTL text, or convert HTML entities to characters. See the mPDF 
 functions <a href="{{ "/reference/mpdf-functions/writecell.html" | prepend: site.baseurl }}">WriteCell()</a> 
 and <a href="{{ "/reference/mpdf-functions/writetext.html" | prepend: site.baseurl }}">WriteText()</a> which 
 do much the same thing, but support UTF-8 input regardless of the output encoding of your PDF file.

