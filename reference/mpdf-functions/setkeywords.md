---
layout: page
title: SetKeywords()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setkeywords.html
modification_time: 2015-08-05T12:01:06+00:00
---

(mPDF &ge; 1.0)

SetKeywords – Set the document metadata Keywords

# Description

void **SetKeywords** ( string <span class="parameter">$text</span> )

Set Keywords for the document metadata. This metadata can be seen when inspecting the document properties in Adobe Reader.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** Adobe Reader uses system fonts to display the document metadata, therefore any Unicode text
  can be used, even if a unibyte codepage is being used for the document.
</div>

# Parameters

<span class="parameter">$text</span>

: Defines the text to appear as Keywords. The text should be UTF-8 encoded, but should not contain HTML mark-up tags.

  <a href="{{ "/reference/mpdf-utilities/strcode2utf.html" | prepend: site.baseurl }}">strcode2utf()</a> is a useful
  function provided with mPDF which converts HTML numerical entities to UTF-8 encoded string.

# Examples

Example #1

```php
<?php
$mpdf = new \Mpdf\Mpdf();

$mpdf->SetKeywords('My Keywords, More Keywords');

$mpdf->WriteHTML('Hello World');
$mpdf->Output('filename.pdf');

```

Example #2

```php
<?php
$mpdf = new \Mpdf\Mpdf();

// The library defines a function strcode2utf() to convert htmlentities to UTF-8 encoded text
$md = strcode2utf("&amp;#1575;&amp;#1610;&amp;#1604;&amp;#1575;&amp;#1578; &amp;#1601;&amp;#1610;&amp;#1605;&amp;#1575; &amp;#1575;&amp;#1610;&amp;#1604;&amp;#1575;&amp;#1578; &amp;#1601;&amp;#1610;&amp;#1605;&amp;#1575;");
$mpdf->SetKeywords($md);

$mpdf->WriteHTML('Hello World');
$mpdf->Output('filename.pdf');

```

# See Also

- <a href="{{ "/reference/mpdf-functions/settitle.html" | prepend: site.baseurl }}">SetTitle()</a> - Set document Title in metadata
- <a href="{{ "/reference/mpdf-functions/setauthor.html" | prepend: site.baseurl }}">SetAuthor()</a> - Set document Author in metadata
- <a href="{{ "/reference/mpdf-functions/setcreator.html" | prepend: site.baseurl }}">SetCreator()</a> - Set document Creator in metadata
- <a href="{{ "/reference/mpdf-functions/setsubject.html" | prepend: site.baseurl }}">SetSubject()</a> - Set document Subject in metadata
- <a href="{{ "/reference/mpdf-functions/setkeywords.html" | prepend: site.baseurl }}"></a><a href="{{ "/reference/mpdf-utilities/strcode2utf.html" | prepend: site.baseurl }}">strcode2utf()</a> - Convert HTML numerical entities to UTF-8 encoded string
