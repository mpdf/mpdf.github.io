---
layout: page
title: setSourceFile() (since 8.0)
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setsourcefile-v8.html
modification_time: 2019-03-25T08:21:00+00:00
---

(mPDF &ge; 8.0)

setSourceFile – Specify the source PDF file used to import pages into the document

# Description

int **setSourceFile** ( string\|resource\|\\setasign\\Fpdi\\PdfParser\\Streamreader <span class="parameter">$file</span> )

Specify the source PDF file used to import pages into the document.

# Parameters

<span class="parameter">$file</span>

: This parameter specifies the source PDF file used to import pages into the document. It can either be a path to a file, file resource handle, or a FPDI StreamReader instance with contents of the file.

  **Note**:  If path to a file, <span class="parameter">$file</span> should be a **relative path** to a local file.

# Return Value

**setSourceFile()** returns the number of pages in the source file.

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
  <td>8.0</td>
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

// Specify a PDF template
$pagecount = $mpdf->setSourceFile('logoheader.pdf');

// Import the last page of the source PDF file
$tplId = $mpdf->importPage($pagecount);
$mpdf->UseTemplate($tplId);

$mpdf->WriteHTML('Hello World');
$mpdf->Output();

```

# See Also

* <a href="{{ "/reference/mpdf-functions/thumbnail.html" | prepend: site.baseurl }}">Thumbnail()</a> - Print thumbnails of an external PDF file
* <a href="{{ "/reference/mpdf-functions/importpage-v8.html" | prepend: site.baseurl }}">importPage()</a> - Import a page from an external PDF file
* <a href="{{ "/reference/mpdf-functions/usetemplate-v8.html" | prepend: site.baseurl }}">useTemplate()</a> - Insert an imported page from an external PDF file
* <a href="{{ "/reference/mpdf-functions/setpagetemplate.html" | prepend: site.baseurl }}">SetPageTemplate()</a> - Specify a page from an external PDF file to use as a template
* <a href="{{ "/reference/mpdf-functions/setdoctemplate.html" | prepend: site.baseurl }}">SetDocTemplate()</a> - Specify an external PDF file to use as a template
