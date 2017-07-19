---
layout: page
title: Limitations
parent_title: About mPDF
permalink: /about-mpdf/limitations.html
modification_time: 2015-08-05T11:59:21+00:00
---

The script is (a lot) slower than the original FPDF and html2fpdf. Some of this is due to the inclusion of unicode 
font files (when used), but there is also an increase in processing time.

## Tables

Block elements (e.g. DIV or P) are not supported inside tables. The content is displayed, but any CSS properties 
which apply to block elements are ignored (e.g. borders, padding, margins etc).

## Block and in-line elements

All HTML elements are hard-coded to be treated as block or in-line elements (e.g. equivalent to CSS `display:block` 
or `display:in-line`). This cannot be changed using CSS. See 
<a href="{{ "/html-support/html-tags.html" | prepend: site.baseurl }}">HTML tags</a>.

## Special features

Several of the "special" features of mPDF are incompatible with each other e.g columns, fixed-position block elements, 
`page-break-avoid:inside`, Keep-with-table and rotated tables.

## Other

Millimeters are the only accepted dimensions for defining page size and margins within mPDF (CSS stylesheets accept all usual units).

Blocks which are defined as `position:absolute`, `fixed` or `float` have only limited support (introduced v4.0).

# See Also

- <a href="{{ "/troubleshooting/known-issues.html" | prepend: site.baseurl }}">Known issues</a>
