---
layout: page
title: importPage() (since 8.0)
parent_title: mPDF functions
permalink: /reference/mpdf-functions/importpage-v8.html
modification_time: 2019-03-25T08:21:00+00:00
---

(mPDF &ge; 8.0)

importPage – Import a page from an external PDF file

# Description

int **importPage** (
int <span class="parameter">$pageNumber</span>
[, string <span class="parameter">$box</span>
[, bool <span class="parameter">$groupXObject</span> ]]])

Import a page, or part of a page, from an external PDF file. The external source file must first be set
with <a href="{{ "/reference/mpdf-functions/setsourcefile-v8.html" | prepend: site.baseurl }}">setSourceFile()</a>. A 'template'
is created in mPDF which stores the image of this page, ready to insert into the document.

# Parameters

<span class="parameter">$pageNumber</span>

: This parameter specifies the page number from the source PDF file to import.  <span class="parameter">$pageNumber</span> should
  be a positive integer value.

  Default: `1`

<span class="parameter">$box</span>

: The page boundary to import. Default set to `\setasign\Fpdi\PdfReader\PageBoundaries::CROP_BOX`.

  Default: `\setasign\Fpdi\PdfReader\PageBoundaries::CROP_BOX`

<span class="parameter">$groupXObject</span>

: Define the form XObject as a group XObject to support transparency (if used).

  Default: `true`

# Return Value

**importPage()** returns an ID for the template which it has created. This ID can be used at any time to insert the template
into the document with <a href="{{ "/reference/mpdf-functions/usetemplate-v8.html" | prepend: site.baseurl }}">useTemplate()</a>
or <a href="{{ "/reference/mpdf-functions/setpagetemplate.html" | prepend: site.baseurl }}">SetPageTemplate()</a>

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

## Example #1 - Using a full page

```php
<?php

// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

$pagecount = $mpdf->setSourceFile('logoheader.pdf');
$tplId = $mpdf->importPage($pagecount);
$mpdf->useTemplate($tplId);

$mpdf->WriteHTML('Hello World');

$mpdf->Output();
```


## Example #2 - Using a 'cropped' page

```php
<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

$pagecount = $mpdf->setSourceFile('testfile.pdf');
$tplId = $mpdf->importPage($pagecount);

$mpdf->useTemplate($tplId, 50, 50, 100, 100);

$mpdf->Output();

```

# See Also

 * <a href="{{ "/reference/mpdf-functions/thumbnail.html" | prepend: site.baseurl }}">Thumbnail()</a> - Print thumbnails of an external PDF file
 * <a href="{{ "/reference/mpdf-functions/setsourcefile-v8.html" | prepend: site.baseurl }}">setSourceFile()</a> - Specify the source PDF file used to import pages into the document
 * <a href="{{ "/reference/mpdf-functions/usetemplate-v8.html" | prepend: site.baseurl }}">useTemplate()</a> - Insert an imported page from an external PDF file
 * <a href="{{ "/reference/mpdf-functions/setpagetemplate.html" | prepend: site.baseurl }}">SetPageTemplate()</a> - Specify a page from an external PDF file to use as a template
 * <a href="{{ "/reference/mpdf-functions/setdoctemplate.html" | prepend: site.baseurl }}">SetDocTemplate()</a> - Specify an external PDF file to use as a template

