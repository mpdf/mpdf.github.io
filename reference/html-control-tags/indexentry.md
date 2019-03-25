---
layout: page
title: indexentry
parent_title: HTML control tags
permalink: /reference/html-control-tags/indexentry.html
modification_time: 2015-08-05T12:01:24+00:00
---

(mPDF &ge; 1.0)

indexentry – Insert an Index entry for the document

# Description

&lt;**indexentry**  <span class="parameter">$content</span> [ <span class="parameter">$xref</span> ] /&gt;

Insert an Index entry for the document Index, referencing the current writing position in the document. If
<span class="parameter">$xref</span> is set, it will appear as a cross-referencing entry in the index as for
<a href="{{ "/reference/mpdf-functions/indexentrysee.html" | prepend: site.baseurl }}">IndexEntrySee()</a>.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** The Index must be generated explicity at the end of the document using
  <a href="{{ "/reference/mpdf-functions/tocpagebreak.html" | prepend: site.baseurl }}">CreateIndex()</a>
  at some point before <a href="{{ "/reference/mpdf-functions/output.html" | prepend: site.baseurl }}">Output()</a>
  is called.
</div>

# Attributes

<span class="parameter">$content</span>

: This attribute sets the text as it will appear in the Index entry. Text should be UTF-8 encoded.

  <span class="parameter">$content</span> cannot contain any of the characters: `<`, `>`, `&`, `'` or `"` and must use
  the appropriate HTML entities e.g. `<indexentry content="&lt; 40" />`

  It is recommended that you use `htmlspecialchars('Content', ENT_QUOTES)` for this.

  <span class="smallblock">REQUIRED</span>

<span class="parameter">$xref</span>

: This attribute sets the text used as a cross-reference. Text should be UTF-8 encoded.

  <span class="parameter">$xref</span> cannot contain any of the characters: `<`, `>`, `&`, `'` or `"` and must use the
  appropriate HTML entities e.g. `<indexentry xref="&lt; 40" />`

  It is recommended that you use e.g. `htmlspecialchars($xref, ENT_QUOTES)` for this.

  Text entries passed in the form `xref="Subject:Subcategory"` will appear in the Index as "Subject, Subcategory"

  <span class="smallblock">OPTIONAL</span>

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
  <td>3.0</td>
  <td><span class="parameter">$xref</span> attribute added.</td>
</tr>
</tbody>
</table>

# Examples

## Example #1

```php
<?php
$mpdf = new \Mpdf\Mpdf();

$mpdf->WriteHTML('Beginning bit of document...');
$mpdf->WriteHTML('Your text which refers
to a buffalo,<indexentry content="Buffalo" /> which you would like to see in the Index');

$mpdf->AddPage();
$mpdf->WriteHTML('<h2>Index</h2>', \Mpdf\HTMLParserMode::HTML_BODY);
$mpdf->CreateIndex(2, '', '', 3, 1, '', 5, 'serif','sans-serif');
$mpdf->Output();

```

## Example #2

```php
<?php

$mpdf->WriteHTML('<indexentry content="Dromedary" xref="Camel:types" />The dromedary
is a type of camel');

// This will produce an entry in the Index under 'Dromedary' appearing as:
// Dromedary - see Camel, types

```

# Notes

<div class="alert alert-info" role="alert" markdown="1">
  **Note:**
  &lt;<a href="{{ "/reference/html-control-tags/tocentry.html" | prepend: site.baseurl }}">indexentry</a>&gt;
  may be a preferred form to
  <a href="{{ "/reference/mpdf-functions/indexentry.html" | prepend: site.baseurl }}">IndexEntry()</a>,
  as it will allow more precise identification of the position and page - the `<indexentry>` can be placed
  just next to the appropriate word.
</div>

## Recommended placement

Recommended placement of Index Entries is just after the first word following the opening tag of the block element:

```html

<h2>First<indexentry... /> word of a heading or block</h2>

```

or alternatively just after the opening tag of the block element:

```html

<h2><indexentry... />Heading or block</h2>

```

or just after a word to be marked:

```html

    ... this is a word<indexentry... /> in the middle of text to be marked ...

```

# See Also

- <a href="{{ "/reference/mpdf-functions/indexentry.html" | prepend: site.baseurl }}">IndexEntry()</a> - Mark an Index entry in the document
- <a href="{{ "/reference/mpdf-functions/tocpagebreak.html" | prepend: site.baseurl }}">CreateIndex()</a> - Generate a document Index
