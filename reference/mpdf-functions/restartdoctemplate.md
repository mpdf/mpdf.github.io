---
layout: page
title: RestartDocTemplate()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/restartdoctemplate.html
modification_time: 2015-08-05T12:00:51+00:00
---

(mPDF &ge; 2.4)

RestartDocTemplate – Re-start the use of a Document template from the next page

# Description

void **RestartDocTemplate** ( )

Restart the use of a document template (set by <a href="{{ "/reference/mpdf-functions/setdoctemplate.html" | prepend: site.baseurl }}">SetDocTemplate()</a>) from the next page.

# Parameters

none

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
  <td>2.4</td>
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

// Document template consisting of 2 pages,
// first with logo and addresses, 2nd with a simple header
$mpdf->SetDocTemplate('logoheader.pdf',true);
$mpdf->AddPage();
$mpdf->WriteHTML($firstletter);

$mpdf->RestartDocTemplate();
$mpdf->AddPage();
$mpdf->WriteHTML($secondletter);

$mpdf->RestartDocTemplate();
$mpdf->AddPage();
$mpdf->WriteHTML($thirdletter);

$mpdf->Output();

```

# See Also

* <a href="{{ "/reference/mpdf-functions/setimportuse.html" | prepend: site.baseurl }}">SetImportUse()</a> - Enable the use of imported PDF files or templates
* <a href="{{ "/reference/mpdf-functions/setdoctemplate.html" | prepend: site.baseurl }}">SetDocTemplate()</a> - Specify an external PDF file to use as a template
* <a href="{{ "/reference/mpdf-functions/thumbnail.html" | prepend: site.baseurl }}">Thumbnail()</a> - Print thumbnails of an external PDF file
* <a href="{{ "/reference/mpdf-functions/setsourcefile.html" | prepend: site.baseurl }}">SetSourceFile()</a> - Specify the source PDF file used to import pages into the document
* <a href="{{ "/reference/mpdf-functions/usetemplate.html" | prepend: site.baseurl }}">UseTemplate()</a> - Insert an imported page from an external PDF file
* <a href="{{ "/reference/mpdf-functions/setpagetemplate.html" | prepend: site.baseurl }}">SetPageTemplate()</a> - Specify a page from an external PDF file to use as a template

