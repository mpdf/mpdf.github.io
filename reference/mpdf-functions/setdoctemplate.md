---
layout: page
title: SetDocTemplate()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setdoctemplate.html
modification_time: 2015-08-05T12:01:00+00:00
---

(mPDF &ge; 2.3)

SetDocTemplate – Specify an external PDF file to use as a template

# Description

void **SetDocTemplate** (
[ string <span class="parameter">$file</span>
[, boolean <span class="parameter">$continue</span>
]])

Specify an external PDF file to use as a template. Each page of the external source PDF file will be used as a template
for the corresponding page in your new document. If the current mPDF document has more pages than the external PDF
source document, the last page or last 2 pages will (optionally) continue to be used for any remaining pages.

# Parameters

<span class="parameter">$file</span>

: This parameter specifies the source PDF file used as the template document.  <span class="parameter">$file</span>
  should be a relative path to a local file.

  Default: <span class="smallblock">BLANK</span>

<span class="parameter">$continue</span>

: **Values**: `1` \| `0` \| `true` \| `false`

  If `true` (or any positive value) it forces the last page of the source file to
  continue to be used as a template, if the current mPDF document contains more pages than the source file.

  Default: `false`

  <div class="alert alert-info" role="alert" markdown="1">
    **Note:** If you want to turn the template off, just use
    <code>$mpdf->SetDocTemplate()</code> with no parameters.
  </div>

<span class="parameter">$continue2pages</span>

: **Values**: `1` \| `0` \| `true` \| `false`
  
  If `true` (or any positive value) it forces the last 2 pages of the source file to continue
  to be used alternately as a template, if the current mPDF document contains more pages than the source file.
  The source file should contain at least 2 pages to enable this functionality.
  If this option is set to `true` (or any positive value) the `$continue` parameter will automatically be set to the same positive value.
  
  Default: `false`
  
  <div class="alert alert-info" role="alert" markdown="1">
    **Note:** If you want to turn the template off, just use
    <code>$mpdf->SetDocTemplate()</code> with no parameters.
  </div>

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
  <td>8.*</td>
  <td>$continue2pages parameter was added.</td>
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

$mpdf->SetDocTemplate('logoheader.pdf',true);

// Do not add page until doc template set, as it is inserted at the start of each page
$mpdf->AddPage();
$mpdf->WriteHTML('Hello World');

// Subsequent pages from logoheader.pdf will be inserted on all subsequent pages
$mpdf->Output();

```

# See Also


 * <a href="{{ "/reference/mpdf-functions/setimportuse.html" | prepend: site.baseurl }}">SetImportUse()</a> - Enable the use of imported PDF files or templates
 * <a href="{{ "/reference/mpdf-functions/restartdoctemplate.html" | prepend: site.baseurl }}">RestartDocTemplate()</a> - Re-start the use of a Document template from the next page
 * <a href="{{ "/reference/mpdf-functions/thumbnail.html" | prepend: site.baseurl }}">Thumbnail()</a> - Print thumbnails of an external PDF file
 * <a href="{{ "/reference/mpdf-functions/setsourcefile.html" | prepend: site.baseurl }}">SetSourceFile()</a> - Specify the source PDF file used to import pages into the document
 * <a href="{{ "/reference/mpdf-functions/usetemplate.html" | prepend: site.baseurl }}">UseTemplate()</a> - Insert an imported page from an external PDF file
 * <a href="{{ "/reference/mpdf-functions/setpagetemplate.html" | prepend: site.baseurl }}">SetPageTemplate()</a> - Specify a page from an external PDF file to use as a template
