---
layout: page
title: bookmark
parent_title: HTML control tags
permalink: /reference/html-control-tags/bookmark.html
modification_time: 2015-08-05T12:01:20+00:00
---

(mPDF &ge; 1.0)

bookmark – Add a Bookmark to the document

# Description

&lt;**bookmark**  <span class="parameter">$content</span> [ <span class="parameter">$level</span> ] /&gt;

Add a Bookmark to the document. Bookmarks appear in Adobe Reader and link to specific points in the text. The target
is set as the current writing position in the document when the Bookmark is defined.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** Bookmarks use Adobe Reader system fonts, therefore any Unicode text can be used, even if
  a unibyte codepage is being used for the document.
</div>

# Attributes

<span class="parameter">$content</span>

: Specifies the text to appear as a Bookmark.

  <span class="parameter">$content</span> cannot contain any of the characters: `<`, `>`, `&`, `'` or `"` and must use
  the appropriate HTML entities e.g. `<bookmark content="&lt; 40" />`

  It is recommended that you use `htmlspecialchars('Content', ENT_QUOTES)` for this.

<span class="parameter">$level</span>

: <span class="parameter">$level</span> specifies the "tree" level for the Bookmark. The top level is `0`. See Example #2
  below. Accepts an integer from `0` to the maximum depth you wish.

  Default: `0`

# Examples

## Example #1

```html
<html>

<bookmark content="Start of the Document" />

<div>Section 1 text</div>

</html>

```

## Example #2

```html
<html>

    <bookmark content="Section 1" />
    <div>Section 1 text</div>

    <bookmark content="Chapter 1" />
    <div>Chapter 1 text</div>

    <bookmark content="Chapter 2" />
    <div>Chapter 2 text</div>

    <bookmark content="Section 2" />
    <div>Section 2 text</div>

    <bookmark content="Chapter 3" />
    <div>Chapter 3 text</div>

</html>

This will produce a Bookmark tree in Adobe Reader:

+ Section 1
  + Chapter 1
  + Chapter 2
+ Section 2
  + Chapter 3

```

# Notes

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** To set the Bookmark for a Table of Contents, see
  <span class="parameter">$toc-bookmarkText</span> in
  &lt;<a href="{{ "/reference/html-control-tags/tocpagebreak.html" | prepend: site.baseurl }}">tocpagebreak</a>&gt;.
</div>

## Recommended placement

Recommended placement of Bookmarks is just after the first word following the opening tag of the block element:

```html

<h2>First<bookmark... /> word of a heading or block</h2>

```

or alternatively just after the opening tag of the block element:

```html

<h2><bookmark... />Heading or block</h2>

```

or just after a word to be marked:

```html

... this is a word<bookmark... /> in the middle of text to be marked ...

```

## Automatically Generated Bookmarks

You can automatically generate bookmarks from h1 - h6 tags, by setting the variable
<span class="parameter">$h2bookmarks</span>.

Define arrays with e.g. the `tag => Bookmark level`

Remember bookmark levels start at `0`.

The tags `H1` - `H6` must be written with uppercase when defining the array.

Example:

```php
<?php

$mpdf->h2bookmarks = array('H1'=>0, 'H2'=>1, 'H3'=>2);

```

# See Also

- <a href="{{ "/reference/mpdf-functions/bookmark.html" | prepend: site.baseurl }}">Bookmark()</a> - PHP equivalent to `<bookmark>`
