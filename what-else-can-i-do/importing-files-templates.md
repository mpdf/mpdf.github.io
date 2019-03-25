---
layout: page
title: Importing files & Templates
parent_title: What Else Can I Do
permalink: /what-else-can-i-do/importing-files-templates.html
modification_time: 2015-08-05T12:00:18+00:00
---

(mPDF &ge; 2.3)

Using an extension of mPDF, pages from external PDF files can be imported into 'templates' and used throughout the
current document. This can be used for:

- page templates e.g. statements or invoices
- letterheads (see also <a href="{{ "/headers-footers/headers-footers.html" | prepend: site.baseurl }}">Headers & Footers</a>)
- a whole document template
- create thumbnails as handouts etc. from a document you have produced

<div class="alert alert-success" role="alert" markdown="1">
  **Tip:** mPDF imports all embedded fonts required for the document, even if they are the same as the
  ones used in the document being written. Try to keep the file size of the external source PDF file down to a minimum.
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** On limited testing, mPDF appears to import any PDF file (with a version &le; 1.4, or one
  produced by mPDF) as long as it is not password protected. Text and images are imported, but links, bookmarks etc.
  are not. LZW encoding is supported from mPDF 4.3 onwards
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** Prior to mPDF 4.3, this required calling `mPDFI()`. The functions have now been incorporated
  into the main `\Mpdf\Mpdf` class, Until mPDF 8.0, you must use
  <a href="{{ "/reference/mpdf-functions/setimportuse.html" | prepend: site.baseurl }}">SetImportUse()</a> to
  enable them.
</div>

# See

## Since v8.0

- <a href="{{ "/reference/mpdf-functions/setsourcefile-v8.html" | prepend: site.baseurl }}">setSourceFile()</a> - Specify the source PDF file used to import pages into the document
- <a href="{{ "/reference/mpdf-functions/importpage-v8.html" | prepend: site.baseurl }}">importPage()</a> - Import a page from an external PDF file
- <a href="{{ "/reference/mpdf-functions/usetemplate-v8.html" | prepend: site.baseurl }}">useTemplate()</a> - Insert an imported page from an external PDF file


## Until v8.0

- <a href="{{ "/reference/mpdf-functions/setimportuse.html" | prepend: site.baseurl }}">SetImportUse()</a> - Enable the use of imported PDF files or templates
- <a href="{{ "/reference/mpdf-functions/setsourcefile.html" | prepend: site.baseurl }}">SetSourceFile()</a> - Specify the source PDF file used to import pages into the document
- <a href="{{ "/reference/mpdf-functions/importpage.html" | prepend: site.baseurl }}">ImportPage()</a> - Import a page from an external PDF file
- <a href="{{ "/reference/mpdf-functions/usetemplate.html" | prepend: site.baseurl }}">UseTemplate()</a> - Insert an imported page from an external PDF file

## Common

- <a href="{{ "/reference/mpdf-functions/thumbnail.html" | prepend: site.baseurl }}">Thumbnail()</a> - Print thumbnails of an external PDF file
- <a href="{{ "/reference/mpdf-functions/setpagetemplate.html" | prepend: site.baseurl }}">SetPageTemplate()</a> - Specify a page from an external PDF file to use as a template
- <a href="{{ "/reference/mpdf-functions/setdoctemplate.html" | prepend: site.baseurl }}">SetDocTemplate()</a> - Specify an external PDF file to use as a template
