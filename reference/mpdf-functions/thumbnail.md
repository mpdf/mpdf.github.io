---
layout: page
title: Thumbnail()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/thumbnail.html
modification_time: 2015-08-05T12:01:12+00:00
---

(mPDF &ge; 2.3)

Thumbnail – Create thumbnails of an external PDF file and insert in current document

# Description

void **Thumbnail** (
string <span class="parameter">$file</span>
[, integer <span class="parameter">$numberperrow</span>
[, float <span class="parameter">$spacing</span> ]])

Create thumbnails of an external PDF file and insert in current document.

# Parameters

<span class="parameter">$file</span>

: This parameter specifies the source PDF file to import. 

  **Note**: <span class="parameter">$file</span> should be a **relative path** to a local file.

<span class="parameter">$numberperrow</span>

: Specifies the number of thumbnails to print in each **row**.

  Default: `3`

<span class="parameter">$spacing</span>

: Specifies the spacing (vertical and horizontal) between thumbnails in millimetres.

  Default: `10`

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
  <td>2.3</td>
  <td>Function was added.</td>
</tr>
</tbody>
</table>

# Examples

Example #1

```php
<?php

// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->SetImportUse(); // only with mPDF <8.0

$mpdf->Thumbnail('testfile.pdf', 4);

$mpdf->Output();

```
# See Also

* <a href="{{ "/reference/mpdf-functions/setimportuse.html" | prepend: site.baseurl }}">SetImportUse()</a> - Enable the use of imported PDF files or templates
* <a href="{{ "/reference/mpdf-functions/setsourcefile.html" | prepend: site.baseurl }}">SetSourceFile()</a> - Specify the source PDF file used to import pages into the document
* <a href="{{ "/reference/mpdf-functions/importpage.html" | prepend: site.baseurl }}">ImportPage()</a> - Import a page from an external PDF file
* <a href="{{ "/reference/mpdf-functions/usetemplate.html" | prepend: site.baseurl }}">UseTemplate()</a> - Insert an imported page from an external PDF file
* <a href="{{ "/reference/mpdf-functions/setpagetemplate.html" | prepend: site.baseurl }}">SetPageTemplate()</a> - Specify a page from an external PDF file to use as a template
* <a href="{{ "/reference/mpdf-functions/setdoctemplate.html" | prepend: site.baseurl }}">SetDocTemplate()</a> - Specify an external PDF file to use as a template
* <a href="{{ "/reference/mpdf-functions/restartdoctemplate.html" | prepend: site.baseurl }}">RestartDocTemplate()</a> - Re-start the use of a Document template from the next page

