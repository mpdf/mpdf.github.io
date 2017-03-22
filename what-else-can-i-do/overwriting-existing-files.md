---
layout: page
title: Overwriting existing files
parent_title: What Else Can I Do
permalink: /what-else-can-i-do/overwriting-existing-files.html
modification_time: 2015-08-05T12:00:19+00:00
---

(mPDF >= 2.3)

Using the class extension (mPDFI), an existing PDF file can be overwritten, replacing specified text with alternatives.
For example you may have created a long complex PDF file, and you wish to produce copies with an individual number on
each copy without having to re-generate the whole document each time.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** OverWrite() was written to work on PDF files produced
  by mPDF. It will work with encrpyted files, as long as the same encryption properties are used for the new document.
  I have also used it successfully with a number of external PDF files, including those produced by Acrobat Distiller
  (but not if they are encrypted). It will not work with embedded font subsets.
</div>

# See

- <a href="{{ "/reference/mpdf-functions/overwrite.html" | prepend: site.baseurl }}">OverWrite()</a> - Replace specified text strings in an existing PDF file
- <a href="index4a46.html?tid=348">mPDFI()</a> - Class constructor for importing files and templates

