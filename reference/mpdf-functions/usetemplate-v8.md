---
layout: page
title: useTemplate() (since 8.0)
parent_title: mPDF functions
permalink: /reference/mpdf-functions/usetemplate-v8.html
modification_time: 2019-03-25T08:21:00+00:00
---

(mPDF &ge; 8.0)

useTemplate – Insert an imported page from an external PDF file

# Description

array **useTemplate** (
int <span class="parameter">$templateID</span>
[, float <span class="parameter">$x</span>
[, float <span class="parameter">$y</span>
[, float <span class="parameter">$width</span>
[, float <span class="parameter">$height</span>
]]]])

Insert an imported page/template from an external PDF file into the current document. The page, or 'cropped' page, must have
already been stored as a 'template' using <a href="{{ "/reference/mpdf-functions/setsourcefile-v8.html" | prepend: site.baseurl }}">setSourceFile()</a>.
The template is inserted on the current page of the document. `useTemplate()` returns an array of height and width of the
imported page as it is printed (see Example #1).

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** The template will be printed onto the page as the bottom 'layer' i.e.
	anything else written to that page by mPDF will be written on top of the template. NB If you use `WriteHTML()` and have
	a background-color set on BODY this will hide the template from view e.g.
  `<body style="background-color:#FFFFFF;">`
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** If you are using automatic header-margins, you need to set the header before starting the first page; if you start
  the document with `useTemplate()` this will move it to page 1, so the order needs to be:

  ```php
  <?php
  $mpdf = new \Mpdf\Mpdf();

  $mpdf->SetHTMLHeader($header);

  $pagecount = $mpdf->setSourceFile('logoheader.pdf');
  $tplIdx = $mpdf->importPage($pagecount);
  $mpdf->useTemplate($tplIdx);

  $mpdf->WriteHTML($html);
  ```
</div>

## Parameters

<span class="parameter">$templateID</span>

: This parameter specifies the ID of the page template to insert.

<span class="parameter">$x</span>

: Sets the <span class="parameter">$x</span> co-ordinate (abscissa) to output the template. Value should be
  specified as <span class="smallblock">LENGTH</span> in millimetres.

  Default: `null` - Sets <span class="parameter">$x</span> co-ordinate to `0`

  <span class="smallblock">BLANK</span> or omitted - uses default (`0`)

  `-1`: Uses current writing position in document

<span class="parameter">$y</span>

: Sets the <span class="parameter">$y</span> co-ordinate (ordinate) to output the template. Value should be
  specified as <span class="smallblock">LENGTH</span> in millimetres.

  Default: `null` - Sets <span class="parameter">$y</span> co-ordinate to `0`

  <span class="smallblock">BLANK</span> or omitted - uses default (`0`)

  `-1`: Uses current writing position in document

<span class="parameter">$width</span>

: Specifies the width for the template to appear on the page. Value should be specified as <span class="smallblock">LENGTH</span>
  in millimetres.

  Default or `0` will output the template at the original size (if
  neither <span class="parameter">$width</span> nor <span class="parameter">$height</span> are set) or
  if <span class="parameter">$height</span> is set, the <span class="parameter">$width</span> is automatically
  set to output the template in proportion to the original.

<span class="parameter">$height</span>

: Specifies the height for the template to appear on the page. Value should be specified as <span class="smallblock">LENGTH</span>
  in millimetres.

  Default or `0` will output the template at the original size (if
  neither <span class="parameter">$width</span> nor <span class="parameter">$height</span> are set) or
  if <span class="parameter">$width</span> is set, the <span class="parameter">$height</span> is automatically
  set to output the template in proportion to the original.

## Return Value

`useTemplate()` returns an array of the calculated <span class="parameter">$width</span> and <span class="parameter">$height</span>.

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

## Example #1

```php
<?php

// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

// Add First page
$mpdf->AddPage();

$pagecount = $mpdf->setSourceFile('logoheader.pdf');
$tplId = $mpdf->importPage($pagecount);

$actualsize = $mpdf->useTemplate($tplId);

// The height of the template as it was printed is returned as $actualsize['h']
// The width of the template as it was printed is returned as $actualsize['w']

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
* <a href="{{ "/reference/mpdf-functions/importpage-v8.html" | prepend: site.baseurl }}">importPage()</a> - Import a page from an external PDF file
* <a href="{{ "/reference/mpdf-functions/setpagetemplate.html" | prepend: site.baseurl }}">SetPageTemplate()</a> - Specify a page from an external PDF file to use as a template
* <a href="{{ "/reference/mpdf-functions/setdoctemplate.html" | prepend: site.baseurl }}">SetDocTemplate()</a> - Specify an external PDF file to use as a template
* <a href="{{ "/reference/mpdf-functions/restartdoctemplate.html" | prepend: site.baseurl }}">RestartDocTemplate()</a> - Re-start the use of a Document template from the next page

