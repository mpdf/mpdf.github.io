---
layout: page
title: OverWrite()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/overwrite.html
modification_time: 2015-08-05T12:00:50+00:00
---

(mPDF &ge; 2.3)

OverWrite – Replace specified text strings in an existing PDF file

# Description

mixed **OverWrite** (
string <span class="parameter">$sourcefile</span> ,
mixed <span class="parameter">$search</span> ,
mixed <span class="parameter">$replacement</span>
[, string <span class="parameter">$dest</span>
[, string <span class="parameter">$file_out</span>
]])

Using the class mPDF, (until mPDF 8.0 after enabling with <a href="{{ "/reference/mpdf-functions/setimportuse.html" | prepend: site.baseurl }}" markdown="1">`SetImportUse`</a>), an existing PDF file can be overwritten, replacing specified text with alternatives.
For example you may have created a long complex PDF file, and you wish to produce copies with an individual number on
each copy without having to re-generate the whole document each time.

Overwrite() does not re-flow the text from the source file. If the <span class="parameter">$replacement</span> string
is longer than the <span class="parameter">$search</span> string, it may overlap the following text.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** `OverWrite()` has only been tested to work on PDF files produced by mPDF. It will work
  with encrpyted files, as long as the same encryption properties are used for the new document.
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** If you want the final PDF file to be encrypted, you need to encrypt the original source
  file. Make sure that you specify a password otherwise mPDF uses a random password and `OverWrite()` will not
  be able to access the text.
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** From mPDF &ge; 5.3 a unique encryption key is generated each time you create a PDF file.
  So to use encryption you need to save variables when you create the original file. See Example 2.
</div>

# Parameters

<span class="parameter">$sourcefile</span>

: This parameter specifies the source PDF file to use. <span class="parameter">$sourcefile</span> should be a relative
  path to a local file.

<span class="parameter">$search</span>

: The pattern to search for. It can be either a string or an array with strings. Must only contain only ASCII characters.

  If the document is utf-8 mode, the search patterns must not exist in text with justified alignment. (Justified
  text is achieved in mPDF by varying the character spacing for each <span class="smallblock">SPACE</span> between
  words; this breaks up the text in the PDF file.)

<span class="parameter">$replacement</span>

: The string or an array with strings to replace. <span class="parameter">$replacement</span> can contain any utf-8
  encoded characters.

  If this parameter is a string and the <span class="parameter">$search</span> parameter is an array, only the
  first <span class="parameter">$search</span> element will be replaced by the <span class="parameter">$replacement</span>
  string, any extra <span class="parameter">$search</span> s will be replaced by an empty string. If both
  <span class="parameter">$search</span> and <span class="parameter">$replacement</span> parameters are arrays,
  each <span class="parameter">$search</span> will be replaced by the <span class="parameter">$replacement</span>
  counterpart. If there are fewer elements in the <span class="parameter">$replacement</span> array than in the
  <span class="parameter">$search</span> array, any extra <span class="parameter">$search</span> s will be replaced
  by an empty string.

<span class="parameter">$dest</span>

: <span class="parameter">$dest</span> specifies the destination for the generated PDF document.

  Default: `"D"`

  **Values**

  * `'D'`: download the PDF file
  * `'I'`: serves in-line to the browser
  * `'S'`: returns the PDF document as a string
  * `'F'`: save as file <span class="parameter">$file_out</span>

<span class="parameter">$file_out</span>

: This parameter specifies the filename for the output PDF file. No path should be included unless
  <span class="parameter">$dest</span> is set as `"F"`.

  Default: `"mpdf.pdf"`

# Return Value

**OverWrite()** returns the PDF file as a string if <span class="parameter">$dest</span> is set to `"S"`.

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

// Must set codepage (e.g. UTF-8 or Core fonts) the same as for original document
// The rest of the parameters do nothing
$mpdf = new \Mpdf\Mpdf();
$mpdf->SetImportUse(); // only with mPDF <8.0

// forces no subsetting - otherwise the inserted characters may not be contained
// in a subset font
$mpdf->percentSubset = 0;

$search = array(
	'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX',
	'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXZZZZZZZZ'
);

$replacement = array(
	"personalised for Jos\xc3\xa9 Bloggs",
	"COPYRIGHT: Licensed to Jos\xc3\xa9 Bloggs"
);

$mpdf->OverWrite('test.pdf', $search, $replacement, 'I', 'mpdf.pdf' ) ;

```

Example #2  Using encryption

```php
<?php

// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->percentSubset = 0;
$mpdf->SetProtection(array(), '', 'bread');   // Need to specify a password

$mpdf->WriteHTML('This copy is XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX');
$mpdf->Output('test.pdf','F');

// Have to save various encryption keys, which are uniquely generated each document
$uid = $mpdf->uniqid;
$oval = $mpdf->Ovalue;
$encKey = $mpdf->encryption_key;
$uval = $mpdf->Uvalue;
$pval = $mpdf->Pvalue;
$RC128 = $mpdf->useRC128encryption;

unset($mpdf);

//==============================================================

$mpdf = new \Mpdf\Mpdf();
$mpdf->SetImportUse(); // only with mPDF <8.0

// Re-instate saved encryption keys from original document
$mpdf->encrypted = true;
$mpdf->useRC128encryption = $RC128;
$mpdf->uniqid = $uid ;
$mpdf->Ovalue = $oval ;
$mpdf->encryption_key = $encKey ;
$mpdf->Uvalue = $uval ;
$mpdf->Pvalue = $pval ;

$search = array(
	'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
);

$replacement = array(
	"personalised for Jos\xc3\xa9 Bloggs"
);

$mpdf->OverWrite('test.pdf', $search, $replacement, 'I', 'mpdf.pdf' ) ;

```

# See Also

- <a href="{{ "/reference/mpdf-functions/setimportuse.html" | prepend: site.baseurl }}">SetImportUse()</a> - Enable the use of imported PDF files or templates
- <a href="{{ "/reference/mpdf-functions/thumbnail.html" | prepend: site.baseurl }}">Thumbnail()</a> - Print thumbnails of an external PDF file
- <a href="{{ "/reference/mpdf-functions/setsourcefile.html" | prepend: site.baseurl }}">SetSourceFile()</a> - Specify the source PDF file used to import pages into the document
- <a href="{{ "/reference/mpdf-functions/importpage.html" | prepend: site.baseurl }}">ImportPage()</a> - Import a page from an external PDF file
- <a href="{{ "/reference/mpdf-functions/usetemplate.html" | prepend: site.baseurl }}">UseTemplate()</a> - Insert an imported page from an external PDF file
- <a href="{{ "/reference/mpdf-functions/setpagetemplate.html" | prepend: site.baseurl }}">SetPageTemplate()</a> - Specify a page from an external PDF file to use as a template
- <a href="{{ "/reference/mpdf-functions/setdoctemplate.html" | prepend: site.baseurl }}">SetDocTemplate()</a> - Specify an external PDF file to use as a template
- <a href="{{ "/reference/mpdf-functions/restartdoctemplate.html" | prepend: site.baseurl }}">RestartDocTemplate()</a> - Re-start the use of a Document template from the next page
