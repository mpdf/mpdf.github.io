---
layout: page
title: SetSourceFile() (until 8.0)
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setsourcefile.html
modification_time: 2019-03-25T08:21:00+00:00
---

(mPDF &ge; 2.3 && mPDF < 8.0)

SetSourceFile – Specify the source PDF file used to import pages into the document

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** This method was superseded by <a href="{{ "/reference/mpdf-functions/setsourcefile-v8.html" | prepend: site.baseurl }}">setSourceFile()</a> in mPDF 8.0.
</div>

# Description

int **SetSourceFile** ( string <span class="parameter">$file</span> )

Specify the source PDF file used to import pages into the document.

# Parameters

<span class="parameter">$file</span>

: This parameter specifies the source PDF file used to import pages into the document.

  **Note**:  <span class="parameter">$file</span> should be a **relative path** to a local file.

# Return Value

**SetSourceFile()** returns the number of pages in the source file.

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
<tr>
  <td>8.0</td>
  <td>Function was removed in favour of <a href="{{ "/reference/mpdf-functions/setsourcefile-v8.html" | prepend: site.baseurl }}">setSourceFile()</a>.</td>
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

// Enable imports
$mpdf->SetImportUse();

// Specify a PDF template
$pagecount = $mpdf->SetSourceFile('logoheader.pdf');

// Import the last page of the source PDF file
$tplId = $mpdf->ImportPage($pagecount);
$mpdf->UseTemplate($tplId);

$mpdf->WriteHTML('Hello World');
$mpdf->Output();

```

# See Also

* <a href="{{ "/reference/mpdf-functions/setimportuse.html" | prepend: site.baseurl }}">SetImportUse()</a> - Enable the use of imported PDF files or templates
* <a href="{{ "/reference/mpdf-functions/thumbnail.html" | prepend: site.baseurl }}">Thumbnail()</a> - Print thumbnails of an external PDF file
* <a href="{{ "/reference/mpdf-functions/importpage.html" | prepend: site.baseurl }}">ImportPage()</a> - Import a page from an external PDF file
* <a href="{{ "/reference/mpdf-functions/usetemplate.html" | prepend: site.baseurl }}">UseTemplate()</a> - Insert an imported page from an external PDF file
* <a href="{{ "/reference/mpdf-functions/setpagetemplate.html" | prepend: site.baseurl }}">SetPageTemplate()</a> - Specify a page from an external PDF file to use as a template
* <a href="{{ "/reference/mpdf-functions/setdoctemplate.html" | prepend: site.baseurl }}">SetDocTemplate()</a> - Specify an external PDF file to use as a template
