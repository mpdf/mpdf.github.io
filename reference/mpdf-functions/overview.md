---
layout: page
title: Overview
parent_title: mPDF functions
permalink: /reference/mpdf-functions/overview.html
modification_time: 2015-08-05T12:00:37+00:00
---

# mPDF Functions by Category

## Main controls

<a href="{{ "/reference/mpdf-functions/construct.html" | prepend: site.baseurl }}">\Mpdf\Mpdf::__construct()</a> — Main class constructor
mPDFI - [deprecated] - see <a href="{{ "/reference/mpdf-functions/setimportuse.html" | prepend: site.baseurl }}">SetImportUse()</a>
<a href="{{ "/reference/mpdf-functions/writehtml.html" | prepend: site.baseurl }}">WriteHTML()</a> — Write HTML code to the document
<a href="{{ "/reference/mpdf-functions/output.html" | prepend: site.baseurl }}">Output()</a> — Finalise the document and send it to specified destination

## Configuration

<a href="{{ "/reference/mpdf-functions/setimportuse.html" | prepend: site.baseurl }}">SetImportUse()</a> — Enables use of templates and imported PDF files (was mPDFI)
<a href="{{ "/reference/mpdf-functions/startprogressbaroutput.html" | prepend: site.baseurl }}">StartProgressBarOutput()</a> — Show progress bars whilst generating PDF file
<a href="{{ "/reference/mpdf-functions/setanchor2bookmark.html" | prepend: site.baseurl }}">SetAnchor2Bookmark()</a> — Specifies how PDF Book marks are created from HTML anchors
<a href="{{ "/reference/mpdf-functions/setbasepath.html" | prepend: site.baseurl }}">SetBasePath()</a> — Specifies a base URL for mPDF to interpret relative URLs
<a href="{{ "/reference/mpdf-functions/setcompression.html" | prepend: site.baseurl }}">SetCompression()</a> — Specifies that mPDF should compress the data for the PDF file
<a href="{{ "/reference/mpdf-functions/setdefaultbodycss.html" | prepend: site.baseurl }}">SetDefaultBodyCSS()</a> — Change default CSS properties at runtime
<a href="{{ "/reference/mpdf-functions/setdefaultfont.html" | prepend: site.baseurl }}">SetDefaultFont()</a> — [deprecated]
<a href="{{ "/reference/mpdf-functions/setdefaultfontsize.html" | prepend: site.baseurl }}">SetDefaultFontSize()</a> — [deprecated]
<a href="{{ "/reference/mpdf-functions/setdirectionality.html" | prepend: site.baseurl }}">SetDirectionality()</a> — Set the document RTL state
<a href="{{ "/reference/mpdf-functions/setdisplaymode.html" | prepend: site.baseurl }}">SetDisplayMode()</a> — Specify the initial Display Mode when the PDF file is opened
<a href="{{ "/reference/mpdf-functions/setautofont.html" | prepend: site.baseurl }}">SetAutoFont()</a> — [deprecated]
<a href="{{ "/reference/mpdf-functions/restrictunicodefonts.html" | prepend: site.baseurl }}">RestrictUnicodeFonts()</a> — Set (Unicode) fonts to restrict to

## Document Metadata

<a href="{{ "/reference/mpdf-functions/settitle.html" | prepend: site.baseurl }}">SetTitle()</a> — Set the document title
<a href="{{ "/reference/mpdf-functions/setauthor.html" | prepend: site.baseurl }}">SetAuthor()</a> — Set the document author
<a href="{{ "/reference/mpdf-functions/setcreator.html" | prepend: site.baseurl }}">SetCreator()</a> — Set the document creator
<a href="{{ "/reference/mpdf-functions/setsubject.html" | prepend: site.baseurl }}">SetSubject()</a> — Set the document subject
<a href="{{ "/reference/mpdf-functions/setkeywords.html" | prepend: site.baseurl }}">SetKeywords()</a> — Set the document keywords

## Encryption &amp; Passwords

<a href="{{ "/reference/mpdf-functions/setprotection.html" | prepend: site.baseurl }}">SetProtection()</a> — Encrypts and sets the PDF document permissions
SetUserRights() - [deprecated]

## Watermarks (page backgrounds)

<a href="{{ "/reference/mpdf-functions/setwatermarkimage.html" | prepend: site.baseurl }}">SetWatermarkImage()</a> — Set an image to use as a Watermark
<a href="{{ "/reference/mpdf-functions/setwatermarktext.html" | prepend: site.baseurl }}">SetWatermarkText()</a> — Set the text to use as a Watermark

## Page Numbering

<a href="{{ "/reference/mpdf-functions/aliasnbpages.html" | prepend: site.baseurl }}">AliasNbPages()</a> — Defines the placeholder used to insert total number of pages into the document
<a href="{{ "/reference/mpdf-functions/aliasnbpagegroups.html" | prepend: site.baseurl }}">AliasNbPageGroups()</a> — Defines the placeholder used to insert total page number into the document

## Colours

<a href="{{ "/reference/mpdf-functions/addspotcolor.html" | prepend: site.baseurl }}">AddSpotColor()</a> — Define a Spot Colour to be referenced in the document


## Paging
The following methods have HTML equivalents e.g. `<pagebreak />` and `AddPage()`:

<a href="{{ "/reference/mpdf-functions/addpage.html" | prepend: site.baseurl }}">AddPage()</a> — Add a new page
<a href="{{ "/reference/mpdf-functions/addpagebyarray.html" | prepend: site.baseurl }}">AddPageByArray()</a> — Add a new page using array of parameters

## Bookmarks (Outlines)

<a href="{{ "/reference/mpdf-functions/bookmark.html" | prepend: site.baseurl }}">Bookmark()</a> — Add a Bookmark to the document

## Annotations

<a href="{{ "/reference/mpdf-functions/annotation.html" | prepend: site.baseurl }}">Annotation()</a> — Add an Annotation to the document

## Index

<a href="{{ "/reference/mpdf-functions/indexentry.html" | prepend: site.baseurl }}">IndexEntry()</a> — Insert an Index entry for the document
<a href="{{ "/reference/mpdf-functions/indexentrysee.html" | prepend: site.baseurl }}">IndexEntrySee()</a> — Insert a cross-reference entry for the document Index
<a href="{{ "/reference/mpdf-functions/insertindex.html" | prepend: site.baseurl }}">InsertIndex()</a> — Generate an Index for the document (mPDF &ge; v6.0)
CreateReference() — [Deprecated] replace by `InsertIndex()` (mPDF < v2.4)
CreateIndex() — [Deprecated] replaced by `InsertIndex()` (mPDF < v6.0)

## Columns

<a href="{{ "/reference/mpdf-functions/setcolumns.html" | prepend: site.baseurl }}">SetColumns()</a> — Control the use of multiple columns on the page
<a href="{{ "/reference/mpdf-functions/bookmark.html" | prepend: site.baseurl }}">AddColumn()</a> — Start a new Column

## Page Headers &amp; Footers

<a href="{{ "/reference/mpdf-functions/deffooterbyname.html" | prepend: site.baseurl }}">DefFooterByName()</a> — Define a page footer by name
<a href="{{ "/reference/mpdf-functions/defheaderbyname.html" | prepend: site.baseurl }}">DefHeaderByName()</a> — Define a page header by name
<a href="{{ "/reference/mpdf-functions/defhtmlfooterbyname.html" | prepend: site.baseurl }}">DefHTMLFooterByName()</a> — Define an HTML page footer by name
<a href="{{ "/reference/mpdf-functions/defhtmlheaderbyname.html" | prepend: site.baseurl }}">DefHTMLHeaderByName()</a> — Define an HTML page header by name
<a href="{{ "/reference/mpdf-functions/setfooter.html" | prepend: site.baseurl }}">SetFooter()</a> — Set a page footer
<a href="{{ "/reference/mpdf-functions/setfooterbyname.html" | prepend: site.baseurl }}">SetFooterByName()</a> — Set a page footer by name
<a href="{{ "/reference/mpdf-functions/setheader.html" | prepend: site.baseurl }}">SetHeader()</a> — Set a page header
<a href="{{ "/reference/mpdf-functions/setheaderbyname.html" | prepend: site.baseurl }}">SetHeaderByName()</a> — Set a page header by name
<a href="{{ "/reference/mpdf-functions/sethtmlfooter.html" | prepend: site.baseurl }}">SetHTMLFooter()</a> — Set an HTML page footer
<a href="{{ "/reference/mpdf-functions/sethtmlfooterbyname.html" | prepend: site.baseurl }}">SetHTMLFooterByName()</a> — Set an HTML page footer by name
<a href="{{ "/reference/mpdf-functions/sethtmlheader.html" | prepend: site.baseurl }}">SetHTMLHeader()</a> — Set an HTML page header
<a href="{{ "/reference/mpdf-functions/sethtmlheaderbyname.html" | prepend: site.baseurl }}">SetHTMLHeaderByName()</a> — Set an HTML page header by name

## Table of Contents

<a href="{{ "/reference/mpdf-functions/tocpagebreak.html" | prepend: site.baseurl }}">TOCpagebreak()</a> — Insert a table of contents in the document
<a href="{{ "/reference/mpdf-functions/tocpagebreakbyarray.html" | prepend: site.baseurl }}">TOCpagebreakByArray()</a> — Insert a table of contents in the document using an array of parameters
<a href="{{ "/reference/mpdf-functions/toc-entry.html" | prepend: site.baseurl }}">TOC_Entry()</a> — Insert an entry for the Table of Contents

Other Miscellaneous methods:

## Replacing text in existing PDF files

<a href="{{ "/reference/mpdf-functions/overwrite.html" | prepend: site.baseurl }}">OverWrite()</a> — Replace specified text strings in an existing PDF file

## Control Visibility

<a href="{{ "/reference/mpdf-functions/setvisibility.html" | prepend: site.baseurl }}">SetVisibility()</a> — Control the visibility of subsequent objects

## Import PDF files &amp; Templates

mPDFI() — [deprecated] — see <a href="{{ "/reference/mpdf-functions/setimportuse.html" | prepend: site.baseurl }}">SetImportUse()</a>

<a href="{{ "/reference/mpdf-functions/thumbnail.html" | prepend: site.baseurl }}">Thumbnail()</a> — Print thumbnails of an external PDF file
<a href="{{ "/reference/mpdf-functions/setsourcefile.html" | prepend: site.baseurl }}">SetSourceFile()</a> — Specify the source PDF file used to import pages into the document
<a href="{{ "/reference/mpdf-functions/importpage.html" | prepend: site.baseurl }}">ImportPage()</a> — Import a page from an external PDF file
<a href="{{ "/reference/mpdf-functions/usetemplate.html" | prepend: site.baseurl }}">UseTemplate()</a> — Insert an imported page from an external PDF file
<a href="{{ "/reference/mpdf-functions/setpagetemplate.html" | prepend: site.baseurl }}">SetPageTemplate()</a> — Specify a page from an external PDF file to use as a template
<a href="{{ "/reference/mpdf-functions/setdoctemplate.html" | prepend: site.baseurl }}">SetDocTemplate()</a> — Specify an external PDF file to use as a template

## Barcode

<a href="{{ "/reference/mpdf-functions/writebarcode.html" | prepend: site.baseurl }}">WriteBarcode()</a> — Write an EAN-13 (ISBN-13) barcode

## Write directly to page without HTML

<a href="{{ "/reference/mpdf-functions/autosizetext.html" | prepend: site.baseurl }}">AutosizeText()</a> — Writes a single line of text, font size automatically reduced to fit width
<a href="{{ "/reference/mpdf-functions/roundedrect.html" | prepend: site.baseurl }}">RoundedRect()</a> — Draws a rectangle with rounded corners
<a href="{{ "/reference/mpdf-functions/writecell.html" | prepend: site.baseurl }}">WriteCell()</a> — print a cell
<a href="{{ "/reference/mpdf-functions/multicell.html" | prepend: site.baseurl }}">MultiCell()</a> — print text with line breaks
<a href="{{ "/reference/mpdf-functions/writetext.html" | prepend: site.baseurl }}">WriteText()</a> — print a string
<a href="{{ "/reference/mpdf-functions/shaded-box.html" | prepend: site.baseurl }}">Shaded_box()</a> — Writes line of text surrounded by layouted box
<a href="{{ "/reference/mpdf-functions/circulartext.html" | prepend: site.baseurl }}">CircularText()</a> — Draw a circle using specified text

## Original FPDF functions to write directly to page

<a href="{{ "/reference/mpdf-functions/fpdf-original-functions.html" | prepend: site.baseurl }}">FPDF</a> functions to write
directly to page without HTML:

 * Image() — output an image
 * Line() — draw a line
 * Rect() — draw a rectangle
 * SetDrawColor() — set drawing color
 * SetFillColor() — set filling color
 * SetFont() — set font
 * SetFontSize() — set font size
 * SetLineWidth() — set line width
 * SetTextColor() — set text color
 * SetX() — set current x position
 * SetXY() — set current x and y positions
 * SetY() — set current y position


