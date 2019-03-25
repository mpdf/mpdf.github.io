---
layout: page
title: anchor2Bookmark
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/anchor2bookmark.html
modification_time: 2015-08-05T12:01:37+00:00
---

anchor2Bookmark – Specifies whether PDF Bookmarks are created automatically from HTML anchors

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** This variable originally started with an uppercase
  letter (&le; mPDF 2.2).

  Support for the uppercase version was removed in mPDF &ge; 6.0
</div>

# Description

void **anchor2Bookmark** = `0`\|`1`

Specifies whether PDF Book marks are created from HTML anchors (e.g. `<a name="Introduction" />`) .

# Values

Set the variable with one of the values.

  * `0` - does not generate a bookmark
  * `1` - generate a bookmark using the text value of the `name="Text"` attribute

  Default: `0`

# Usage

Set at document initiation
```php
<?php
$mpdf = new \Mpdf\Mpdf(['anchor2Bookmark' => 1]);

```

# See Also

- <a href="{{ "/reference/mpdf-functions/setanchor2bookmark.html" | prepend: site.baseurl }}">SetAnchor2Bookmark()</a> - Specifies how PDF Book marks are created from HTML anchors
