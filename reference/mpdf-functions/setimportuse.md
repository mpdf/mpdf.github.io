---
layout: page
title: SetImportUse()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setimportuse.html
modification_time: 2015-08-05T12:01:06+00:00
---

(mPDF &ge; 4.3 && < 8.0)

SetImportUse – Enable the use of imported PDF files or templates

# Description

void **SetImportUse** ( )

Enable the use of imported PDF files or templates. This causes additional files (classes) to be loaded, enabling several
functions allowing you to import PDF files into the document you are writing, and using templates.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** This method was removed in mPDF 8.0, it is no longer needed.
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** Prior to mPDF 4.3, this required calling `mPDFI()`. The functions have now been incorporated
  into the main `\Mpdf\Mpdf` class, but you must use `SetImportUse()` to enable them.
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
  <td>4.3</td>
  <td>Function added.</td>
</tr>
<tr>
  <td>8.0</td>
  <td>Function removed.</td>
</tr>
</tbody>
</table>

# Examples

```php
<?php

// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

$mpdf->SetImportUse(); // only with mPDF <8.0

$mpdf->WriteHTML('You can use this just like normal, but also import and use templates...');
$mpdf->Output();
```

# See Also

- <a href="{{ "/reference/mpdf-functions/thumbnail.html" | prepend: site.baseurl }}">Thumbnail()</a> - Print thumbnails of an external PDF file
- <a href="{{ "/reference/mpdf-functions/setsourcefile.html" | prepend: site.baseurl }}">SetSourceFile()</a> - Specify the source PDF file used to import pages into the document
- <a href="{{ "/reference/mpdf-functions/importpage.html" | prepend: site.baseurl }}">ImportPage()</a> - Import a page from an external PDF file
- <a href="{{ "/reference/mpdf-functions/usetemplate.html" | prepend: site.baseurl }}">UseTemplate()</a> - Insert an imported page from an external PDF file
- <a href="{{ "/reference/mpdf-functions/setpagetemplate.html" | prepend: site.baseurl }}">SetPageTemplate()</a> - Specify a page from an external PDF file to use as a template
- <a href="{{ "/reference/mpdf-functions/setdoctemplate.html" | prepend: site.baseurl }}">SetDocTemplate()</a> - Specify an external PDF file to use as a template
- <a href="{{ "/reference/mpdf-functions/restartdoctemplate.html" | prepend: site.baseurl }}">RestartDocTemplate()</a> - Re-start the use of a Document template from the next page
