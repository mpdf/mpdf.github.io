---
layout: page
title: Bookmark()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/bookmark.html
modification_time: 2015-08-05T12:00:42+00:00
---

(mPDF &ge; 1.0)

Bookmark – Add a Bookmark to the document

# Description

void **Bookmark** (
string <span class="parameter">$content</span>
[, int <span class="parameter">$level</span>
[, float <span class="parameter">$y</span>
]])

Add a Bookmark to the document. Bookmarks appear in Adobe Reader and link to specific points in the text.
The target is set as the current writing position in the document when the Bookmark is defined.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** Bookmarks use Adobe Reader system fonts, therefore any Unicode text can be used, even
  if a unibyte codepage is being used for the document.
</div>

## Parameters

<span class="parameter">$content</span>

: Specifies the text to appear as a Bookmark.

  <span class="parameter">$content</span> cannot contain any of the characters: `<` `>` `&` `'` or `"` and must use
  the appropriate HTML entities e.g. `<annotation content="This is &lt; 40" />`

  It is recommended that you use `htmlspecialchars('Content', ENT_QUOTES)` for this.

<span class="parameter">$level</span>

: <span class="parameter">$level</span> specifies the "tree" level for the Bookmark. The top level is 0. See Example 2
  below. Accepts an integer from `0` to the maximum depth you wish.

  Default: `0`

<span class="parameter">$y</span>

: <span class="parameter">$y</span> specifies the y-coordinate on the page for the Bookmark. The top of the page is 0.
  The default is the current writing position on the page.


# Examples

### Example #1

```php
<?php
$mpdf = new \Mpdf\Mpdf();

$mpdf->Bookmark('Start of the document');
$mpdf->WriteHTML('<div>Section 1 text</div>');
$mpdf->Output('filename.pdf');

```

### Example #2

```php
<?php
$mpdf = new \Mpdf\Mpdf();

$mpdf->Bookmark('Section 1', 0);
$mpdf->WriteHTML('<div>Section 1 text</div>');

$mpdf->Bookmark('Chapter 1', 1);
$mpdf->WriteHTML('<div>Chapter 1 text</div>');

$mpdf->Bookmark('Chapter 2', 1);
$mpdf->WriteHTML('<div>Chapter 2 text</div>');

$mpdf->Bookmark('Section 2', 0);
$mpdf->WriteHTML('<div>Section 2 text</div>');

$mpdf->Bookmark('Chapter 3', 1);
$mpdf->WriteHTML('<div>Chapter 3 text</div>');

$mpdf->Output('filename.pdf');

/*
This will produce a Bookmark tree in Adobe Reader:

 + Section 1
   + Chapter 1
   + Chapter 2
 + Section 2
   + Chapter 3

*/

```

# Notes

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** To set the Bookmark for a Table of Contents, see <span class="parameter">$toc-bookmarkText</span>
  in <a href="{{ "/reference/mpdf-functions/tocpagebreak.html" | prepend: site.baseurl }}">TOCpagebreak()</a>.
</div>

# See Also

 * &lt;<a href="{{ "/reference/html-control-tags/bookmark.html" | prepend: site.baseurl }}">bookmark</a>&gt; - Custom HTML tag - equivalent to `Bookmark()`
