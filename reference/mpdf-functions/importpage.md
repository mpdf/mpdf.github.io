---
layout: page
title: ImportPage() (until 8.0)
parent_title: mPDF functions
permalink: /reference/mpdf-functions/importpage.html
modification_time: 2019-03-25T08:21:00+00:00
---

(mPDF &ge; 2.3 && mPDF < 8.0)

ImportPage – Import a page from an external PDF file

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** This method was superseded by <a href="{{ "/reference/mpdf-functions/importpage-v8.html" | prepend: site.baseurl }}">importPage()</a> in mPDF 8.0.
</div>

# Description

int **ImportPage** (
int <span class="parameter">$pageno</span>
[, float <span class="parameter">$crop_x</span>
[, float <span class="parameter">$crop_y</span>
[, float <span class="parameter">$crop_w</span>
[, float <span class="parameter">$crop_h</span>
[, string <span class="parameter">$boxname</span> ]]]]])

Import a page, or part of a page, from an external PDF file. The external source file must first be set
with <a href="{{ "/reference/mpdf-functions/setsourcefile.html" | prepend: site.baseurl }}">SetSourceFile()</a>. A 'template'
is created in mPDF which stores the image of this page, ready to insert into the document.

# Parameters

<span class="parameter">$pageno</span>

: This parameter specifies the page number from the source PDF file to import.  <span class="parameter">$pageno</span> should
  be a positive integer value.

  Default: `1`

<span class="parameter">$crop_x</span>

: Specifies the x-coordinate (abscissa) for the page of the source PDF file, when importing a 'cropped' page into the template.
  Value in millimetres.

  Default: `0`

<span class="parameter">$crop_y</span>

: Specifies the y-coordinate (ordinate) for the page of the source PDF file, when importing a 'cropped' page into the template.
  Value in millimetres.

  Default: `0`

<span class="parameter">$crop_w</span>

: Specifies the width in millimetres when importing a 'cropped' page into the template.

  Default: `null` uses the full page width from the source file

<span class="parameter">$crop_h</span>

: Specifies the height in millimetres when importing a 'cropped' page into the template.

  Default: `null` uses the full page height from the source file

<span class="parameter">$boxname</span>

: <span class="parameter">$boxname</span> is currently not used.

# Return Value

**ImportPage()** returns an ID for the template which it has created. This ID can be used at any time to insert the template
into the document with <a href="{{ "/reference/mpdf-functions/usetemplate.html" | prepend: site.baseurl }}">UseTemplate()</a>
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
    <td>2.3</td>
    <td>Function was added.</td>
</tr>
</tbody> </table>

# Examples


Example #1 - Using a full page

```php
<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->SetImportUse(); // only with mPDF <8.0

$pagecount = $mpdf->SetSourceFile('logoheader.pdf');
$tplId = $mpdf->ImportPage($pagecount);
$mpdf->UseTemplate($tplId);

$mpdf->WriteHTML('Hello World');

$mpdf->Output();
```


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
  <td>Function was replaced by <a href="{{ "/reference/mpdf-functions/importpage-v8.html" | prepend: site.baseurl }}">importPage()</a>.</td>
</tr>
</tbody>
</table>


Example #2 - Using a 'cropped' page

```php
<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->SetImportUse(); // only with mPDF <8.0

$pagecount = $mpdf->SetSourceFile('testfile.pdf');
$tplId = $mpdf->ImportPage($pagecount, 50, 50, 100, 100);

$mpdf->UseTemplate($tplId, '', '', 100, 100);

$mpdf->Output();

```

# See Also

 * <a href="{{ "/reference/mpdf-functions/setimportuse.html" | prepend: site.baseurl }}">SetImportUse()</a> - Enable the use of imported PDF files or templates
 * <a href="{{ "/reference/mpdf-functions/thumbnail.html" | prepend: site.baseurl }}">Thumbnail()</a> - Print thumbnails of an external PDF file
 * <a href="{{ "/reference/mpdf-functions/setsourcefile.html" | prepend: site.baseurl }}">SetSourceFile()</a> - Specify the source PDF file used to import pages into the document
 * <a href="{{ "/reference/mpdf-functions/usetemplate.html" | prepend: site.baseurl }}">UseTemplate()</a> - Insert an imported page from an external PDF file
 * <a href="{{ "/reference/mpdf-functions/setpagetemplate.html" | prepend: site.baseurl }}">SetPageTemplate()</a> - Specify a page from an external PDF file to use as a template
 * <a href="{{ "/reference/mpdf-functions/setdoctemplate.html" | prepend: site.baseurl }}">SetDocTemplate()</a> - Specify an external PDF file to use as a template

