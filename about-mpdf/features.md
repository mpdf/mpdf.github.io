---
layout: page
title: Features
parent_title: About mPDF
permalink: /about-mpdf/features.html
modification_time: 2017-08-05T10:06:20+02:00
---

# Main features (as of version 7)

- Accepts UTF-8 encoded HTML
- Supports almost all languages including <acronym title="Right-to-Left document, used for Hebrew and Arabic languages">
  RTL</acronym> (arabic and hebrew), and <acronym title="Chinese-Japanese-Korean languages">
  CJK</acronym> - (chinese-japanese-korean)
- Bookmarks
- CSS stylesheets
- Word spacing and character spacing for justification
- Nested block-level elements (e.g. P, DIV) including margins, borders, padding, line-height, background colours etc.
- Support (partial) for floating and fixed-position block-elements
- Page layout and orientation
- Text-justification and hyphenation
- Page numbering
- Odd and even paging with mirrored margins
- Page headers &amp; footers
- Columns
- Tables - nested tables, rotated, or autosized to fit on a page
- Table of contents
- Index
- Watermarks (with customizable text angle)
- Images in JPG, GIF, PNG, SVG, BMP or WMF format
- Password protection
- Annotations
- Barcodes (EAN13, UPC-A/E, Code 11, 39, 93, 128, Codabar, MSI, IMB, Planet, Postnet, RM4SCC etc.)
- Import another PDF file and use as a template
- Embedded font subsets
- PDF/A-1b support (ISO 19005-1:2005)
- PDF/X-1a support
- PDF/A-3 support (along with ZUGFeRD invoices compatibility)

# More Information

mPDF has a number of enhancements over the original FPDF, HTML2FPDF and UPDF scripts:

**UTF-8 encoded** HTML is accepted as the standard input.

<a href="{{ "/fonts-languages/arabic-rtl-text-v5-x.html" | prepend: site.baseurl }}">Right-to-left languages</a> are supported,
with automatic detection of RTL characters within a document. Transposes: tables, lists, text justification and table cell
alignment, as well as full text reversal for RTL characters. Automatically detects non-RTL characters and displays these in
original order.

<a href="{{ "/what-else-can-i-do/bookmarks.html" | prepend: site.baseurl }}">Bookmarks</a> and
<a href="{{ "/setting-pdf-file-properties/document-metadata.html" | prepend: site.baseurl }}">Meta tag information</a>
are supported in all character sets.

A single CSS stylesheet can be used for all pages, with
<a href="{{ "/fonts-languages/font-substitution-5-x.html" | prepend: site.baseurl }}">font substitution</a> automatically
for CJK characters.

<a href="{{ "/fonts-languages/character-substitution.html" | prepend: site.baseurl }}">Character substitution</a>
can optionally be used to automatically replace any characters that do not exist in the current font.
<a href="{{ "/what-else-can-i-do/text-justification.html" | prepend: site.baseurl }}">Word spacing and character
	spacing</a> are both used to justify text; works in unicode mode and CJK characters as well.

**Nested block-level elements** (e.g. P, DIV) are supported, with comprehensive CSS support e.g. margins, borders,
padding, line-height, background colours etc.

<a href="{{ "/css-stylesheets/introduction.html" | prepend: site.baseurl }}">CSS style attributes</a> now fully support
font, font-size, color, and background color (for highlighting) plus many more.

<a href="{{ "/tables/tables.html" | prepend: site.baseurl }}">Table</a> cell padding and borders are supported.

**Text-indent for 1st line of paragraph** and hanging indents are supported.

**List indenting** can be defined.

<a href="{{ "/html-support/custom-html-tags.html" | prepend: site.baseurl }}">Custom tags</a> added - PAGEBREAK,
COLUMNBREAK, INDEXENTRY

<a href="{{ "/what-else-can-i-do/columns.html" | prepend: site.baseurl }}">Multiple columns</a> can be started
and stopped anywhere on the page with column height adjusted (and optionally aligned to justify).

<a href="{{ "/tables/tables.html" | prepend: site.baseurl }}">Tables</a> can be **rotated**, or **autosized** - 
font-size is reduced if required to fit the page. Background colour for TR rows is supported.

<a href="{{ "/paging/double-sided-documents.html" | prepend: site.baseurl }}">Odd and even paging</a> can be used
with inner and outer margins alternated.

A more complex definition of <a href="{{ "/headers-footers/headers-footers.html" | prepend: site.baseurl }}">headers
and footers</a> allows left/center/right parts to be defined, each with their own font-styles, and including code to
allow the date/time to be inserted as well as page numbers.

A <a href="{{ "/what-else-can-i-do/table-of-contents.html" | prepend: site.baseurl }}">table of contents</a> can be
generated automatically, which can be inserted at the front of the document, based on custom tags used throughout
the HTML code. (Based on Richard Bondi's extension to FPDF.)

An <a href="{{ "/what-else-can-i-do/index.html" | prepend: site.baseurl }}">Index</a> can be generated at the end
of the document based on custom tags used throughout the HTML code.

**Non-breaking space** is supported when using fonts that have a character representing `chr(160)` (not all of them). 

<a href="{{ "/what-else-can-i-do/watermarks.html" | prepend: site.baseurl }}">Watermarks</a> as text or images can be
used e.g. for 'DRAFT', and will appear as a transparency over other elements.

Intelligent <a href="{{ "/what-else-can-i-do/text-justification.html" | prepend: site.baseurl }}">word-wrapping</a>
will avoid 'orphan' punctuation or superscript moving to the next line.

Automatic hyphenation is optional.

All **HTML entities** are supported, as well as decimal and hex e.g. `&apos;`, `&#8812;` or `&#x21a4;`

<a href="{{ "/setting-pdf-file-properties/password-protection.html" | prepend: site.baseurl }}">Password protection</a>
can be set for the PDF file.

NB The original commands from FPDF can be used e.g. `Write()`, but some are altered to allow UTF-8 encoding and RTL text
to be processed e.g. use `WriteCell()` and `WriteMultiCell()` instead of `Cell()` and `MultiCell()`.

