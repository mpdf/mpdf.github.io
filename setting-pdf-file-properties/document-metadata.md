---
layout: page
title: Document Metadata
parent_title: Setting PDF file properties
permalink: /setting-pdf-file-properties/document-metadata.html
modification_time: 2015-08-05T11:59:59+00:00
---

A PDF file contains metadata about the title, author, subject, creation date, keywords. The title is usually shown
in the top of the screen when a user views the file; the rest of the metadata can be accessed by viewing Document
properties in Adobe Reader.

You can set the metadata directly using:

- <a href="{{ "/reference/mpdf-functions/settitle.html" | prepend: site.baseurl }}">SetTitle()</a>
- <a href="{{ "/reference/mpdf-functions/setauthor.html" | prepend: site.baseurl }}">SetAuthor()</a>
- <a href="{{ "/reference/mpdf-functions/setcreator.html" | prepend: site.baseurl }}">SetCreator()</a>
- <a href="{{ "/reference/mpdf-functions/setsubject.html" | prepend: site.baseurl }}">SetSubject()</a>
- <a href="{{ "/reference/mpdf-functions/setkeywords.html" | prepend: site.baseurl }}">SetKeywords()</a>

Metadata is also set automatically if you pass full HTML code to WriteHTML() including:

* title is read from `<title>...</title>` tags
* subject, keywords and author are read from `<meta ... />` tags

Whichever is set later will override previous settings.

The text should be UTF-8 encoded, but should not contain HTML mark-up tags.
<a href="{{ "/reference/mpdf-utilities/strcode2utf.html" | prepend: site.baseurl }}">strcode2utf()</a> is a useful
function provided with mPDF which converts HTML numerical entities to UTF-8 encoded string.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** Adobe Reader uses system fonts to display the
  document metadata, therefore any Unicode text can be used, even if core fonts only are being used for the
  document.
</div>

Example

```php
<?php
$mpdf = new \Mpdf\Mpdf();

$md = strcode2utf("&#1575;&#1610;&#1604;&#1575;&#1578; &#1601;&#1610;&#1605;&#1575; 
    &#1575;&#1610;&#1604;&#1575;&#1578; &#1601;&#1610;&#1605;&#1575;");
$mpdf->SetTitle($md);

$mpdf->WriteHTML('Hello World');

$mpdf->Output();

```

# See Also

- <a href="{{ "/reference/mpdf-functions/settitle.html" | prepend: site.baseurl }}">SetTitle()</a> - Set document Title in metadata
- <a href="{{ "/reference/mpdf-functions/setauthor.html" | prepend: site.baseurl }}">SetAuthor()</a> - Set document Author in metadata
- <a href="{{ "/reference/mpdf-functions/setcreator.html" | prepend: site.baseurl }}">SetCreator()</a> - Set document Creator in metadata
- <a href="{{ "/reference/mpdf-functions/setsubject.html" | prepend: site.baseurl }}">SetSubject()</a> - Set document Subject in metadata
- <a href="{{ "/reference/mpdf-functions/setkeywords.html" | prepend: site.baseurl }}">SetKeywords()</a> - Set document Keywords in metadata
- <a href="{{ "/reference/mpdf-utilities/strcode2utf.html" | prepend: site.baseurl }}">strcode2utf()</a> - Convert HTML numerical entities to UTF-8 encoded string
