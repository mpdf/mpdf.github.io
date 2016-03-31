---
layout: page
title: Overview
parent_title: mPDF functions
permalink: /reference/mpdf-functions/overview.html
modification_time: 2015-08-05T12:00:37+00:00
---

# mPDF Functions by Category

## Main controls

<p><a href="{{ "/reference/mpdf-functions/mpdf.html" | prepend: site.baseurl }}">mPDF</a> - Main class constructor</p>
<p>mPDFI - [Depracated] - see <a href="{{ "/reference/mpdf-functions/setimportuse.html" | prepend: site.baseurl }}">SetImportUse()</a></p>
<p><a href="{{ "/reference/mpdf-functions/writehtml.html" | prepend: site.baseurl }}">WriteHTML</a> - Write HTML code to the document</p>
<p><a href="{{ "/reference/mpdf-functions/output.html" | prepend: site.baseurl }}">Output</a> - Finalise the document and send it to specified destination</p>

## Configuration

<p><a href="{{ "/reference/mpdf-functions/setimportuse.html" | prepend: site.baseurl }}">SetImportUse</a> - Enables use of templates and imported PDF files (was mPDFI)</p>
<p><a href="{{ "/reference/mpdf-functions/startprogressbaroutput.html" | prepend: site.baseurl }}">StartProgressBarOutput</a> - Show progress bars whilst generating PDF file</p>
<p><a href="{{ "/reference/mpdf-functions/setanchor2bookmark.html" | prepend: site.baseurl }}">SetAnchor2Bookmark</a> - Specifies how PDF Book marks are created from HTML anchors</p>
<p><a href="{{ "/reference/mpdf-functions/setbasepath.html" | prepend: site.baseurl }}">SetBasePath</a> - Specifies a base URL for mPDF to interpret relative URLs</p>
<p><a href="{{ "/reference/mpdf-functions/setcompression.html" | prepend: site.baseurl }}">SetCompression</a> - Specifies that mPDF should compress the data for the PDF file</p>
<p><a href="{{ "/reference/mpdf-functions/setdefaultfont.html" | prepend: site.baseurl }}">SetDefaultFont</a> -</p>
<p><a href="{{ "/reference/mpdf-functions/setdefaultbodycss.html" | prepend: site.baseurl }}">SetDefaultBodyCSS</a> -</p>
<p><a href="{{ "/reference/mpdf-functions/setdefaultfontsize.html" | prepend: site.baseurl }}">SetDefaultFontSize</a> -</p>
<p><a href="{{ "/reference/mpdf-functions/setdirectionality.html" | prepend: site.baseurl }}">SetDirectionality</a> -</p>
<p><a href="{{ "/reference/mpdf-functions/setdisplaymode.html" | prepend: site.baseurl }}">SetDisplayMode</a> - Specify the initial Display Mode when the PDF file is opened</p>
<p><a href="{{ "/reference/mpdf-functions/setautofont.html" | prepend: site.baseurl }}">SetAutoFont</a> -</p>
<p><a href="{{ "/reference/mpdf-functions/restrictunicodefonts.html" | prepend: site.baseurl }}">RestrictUnicodeFonts</a> -</p>
<p><a href="indexaf79.html?tid=193">SetUserRights</a> -</p>

## Document Metadata

<p><a href="{{ "/reference/mpdf-functions/settitle.html" | prepend: site.baseurl }}">SetTitle</a> - Set the document title</p>
<p><a href="{{ "/reference/mpdf-functions/setauthor.html" | prepend: site.baseurl }}">SetAuthor</a> - Set the document author</p>
<p><a href="{{ "/reference/mpdf-functions/setcreator.html" | prepend: site.baseurl }}">SetCreator</a> - Set the document creator</p>
<p><a href="{{ "/reference/mpdf-functions/setsubject.html" | prepend: site.baseurl }}">SetSubject</a> - Set the document subject</p>
<p><a href="{{ "/reference/mpdf-functions/setkeywords.html" | prepend: site.baseurl }}">SetKeywords</a> - Set the document keywords</p>

## Encryption &amp; Passwords

<p><a href="{{ "/reference/mpdf-functions/setprotection.html" | prepend: site.baseurl }}">SetProtection</a> - Encrypts and sets the PDF document permissions</p>
<p><a href="indexaf79.html?tid=193">SetUserRights</a> -</p>

## Watermarks (page backgrounds)

<p><a href="{{ "/reference/mpdf-functions/setwatermarkimage.html" | prepend: site.baseurl }}">SetWatermarkImage</a> - Set an image to use as a Watermark</p>
<p><a href="{{ "/reference/mpdf-functions/setwatermarktext.html" | prepend: site.baseurl }}">SetWatermarkText</a> - Set the text to use as a Watermark</p>

## Page Numbering

<p><a href="{{ "/reference/mpdf-functions/aliasnbpages.html" | prepend: site.baseurl }}">AliasNbPages</a> -Defines the placeholder used to insert total number of pages into the document</p>
<p><a href="{{ "/reference/mpdf-functions/aliasnbpagegroups.html" | prepend: site.baseurl }}">AliasNbPageGroups</a> -Defines the placeholder used to insert total page number into the document</p>

## Colours

<p><a href="{{ "/reference/mpdf-functions/addspotcolor.html" | prepend: site.baseurl }}">AddSpotColor</a> - Define a Spot Colour to be referenced in the document</p>

<p>The following methods have HTML equivalents e,g, &lt;pagebreak /&gt; and AddPage():</p>

## Paging

<p><a href="{{ "/reference/mpdf-functions/addpage.html" | prepend: site.baseurl }}">AddPage</a> - Add a new page</p>
<p><a href="{{ "/reference/mpdf-functions/addpagebyarray.html" | prepend: site.baseurl }}">AddPageByArray</a> - Add a new page using array of parameters</p>

## Bookmarks (Outlines)

<p><a href="{{ "/reference/mpdf-functions/bookmark.html" | prepend: site.baseurl }}">Bookmark</a> -Add a Bookmark to the document</p>

## Annotations

<p><a href="{{ "/reference/mpdf-functions/annotation.html" | prepend: site.baseurl }}">Annotation</a> -Add an Annotation to the document</p>

## Index

<p><a href="{{ "/reference/mpdf-functions/createreference.html" | prepend: site.baseurl }}">CreateIndex</a> -Generate an Index for the document (mPDF &lt; v6.0)</p>
<p><a href="{{ "/reference/mpdf-functions/insertindex.html" | prepend: site.baseurl }}">InsertIndex</a> - Generate an Index for the document (mPDF &gt;= v6.0)</p>
<p><a href="index3e79.html?tid=145">IndexEntry</a> -Insert an Index entry for the document</p>
<p><a href="{{ "/reference/mpdf-functions/indexentrysee.html" | prepend: site.baseurl }}">IndexEntrySee</a> - Insert a cross-reference entry for the document Index</p>

## Columns

<p><a href="{{ "/reference/mpdf-functions/setcolumns.html" | prepend: site.baseurl }}">SetColumns</a> -Control the use of multiple columns on the page</p>
<p><a href="{{ "/reference/mpdf-functions/bookmark.html" | prepend: site.baseurl }}">AddColumn</a> - Start a new Column</p>

## Page Headers &amp; Footers

<p><a href="{{ "/reference/mpdf-functions/deffooterbyname.html" | prepend: site.baseurl }}">DefFooterByName</a> - Define a page footer by name</p>
<p><a href="{{ "/reference/mpdf-functions/defheaderbyname.html" | prepend: site.baseurl }}">DefHeaderByName</a> - Define a page header by name</p>
<p><a href="{{ "/reference/mpdf-functions/defhtmlfooterbyname.html" | prepend: site.baseurl }}">DefHTMLFooterByName</a> - Define an HTML page footer by name</p>
<p><a href="{{ "/reference/mpdf-functions/defhtmlheaderbyname.html" | prepend: site.baseurl }}">DefHTMLHeaderByName</a> - Define an HTML page header by name</p>
<p><a href="{{ "/reference/mpdf-functions/setfooter.html" | prepend: site.baseurl }}">SetFooter</a> - Set a page footer</p>
<p><a href="{{ "/reference/mpdf-functions/setfooterbyname.html" | prepend: site.baseurl }}">SetFooterByName</a> - Set a page footer by name</p>
<p><a href="{{ "/reference/mpdf-functions/setheader.html" | prepend: site.baseurl }}">SetHeader</a> - Set a page header</p>
<p><a href="{{ "/reference/mpdf-functions/setheaderbyname.html" | prepend: site.baseurl }}">SetHeaderByName</a> - Set a page header by name</p>
<p><a href="{{ "/reference/mpdf-functions/sethtmlfooter.html" | prepend: site.baseurl }}">SetHTMLFooter</a> - Set an HTML page footer</p>
<p><a href="{{ "/reference/mpdf-functions/sethtmlfooterbyname.html" | prepend: site.baseurl }}">SetHTMLFooterByName</a> - Set an HTML page footer by name</p>
<p><a href="{{ "/reference/mpdf-functions/sethtmlheader.html" | prepend: site.baseurl }}">SetHTMLHeader</a> - Set an HTML page header</p>
<p><a href="{{ "/reference/mpdf-functions/sethtmlheaderbyname.html" | prepend: site.baseurl }}">SetHTMLHeaderByName</a> - Set an HTML page header by name</p>

## Table of Contents

<p><a href="{{ "/reference/mpdf-functions/tocpagebreak.html" | prepend: site.baseurl }}">TOCpagebreak</a> - Insert a table of contents in the document</p>
<p><a href="{{ "/reference/mpdf-functions/tocpagebreakbyarray.html" | prepend: site.baseurl }}">TOCpagebreakByArray</a> - Insert a table of contents in the document using an array of parameters</p>
<p><a href="{{ "/reference/mpdf-functions/toc-entry.html" | prepend: site.baseurl }}">TOC_Entry</a> - Insert an entry for the Table of Contents</p>

<p>Other Miscellaneous methods:</p>

## Replacing text in existing PDF files

<p><a href="{{ "/reference/mpdf-functions/overwrite.html" | prepend: site.baseurl }}">OverWrite</a> - Replace specified text strings in an existing PDF file</p>

## Control Visibility

<p><a href="{{ "/reference/mpdf-functions/setvisibility.html" | prepend: site.baseurl }}">SetVisibility</a> - Control the visibility of subsequent objects</p>

## Import PDF files &amp; Templates

<p>mPDFI - [Depracated] - see <a href="{{ "/reference/mpdf-functions/setimportuse.html" | prepend: site.baseurl }}">SetImportUse()</a></p>
<p><a href="{{ "/reference/mpdf-functions/thumbnail.html" | prepend: site.baseurl }}">Thumbnail</a> - Print thumbnails of an external PDF file</p>
<p><a href="{{ "/reference/mpdf-functions/setsourcefile.html" | prepend: site.baseurl }}">SetSourceFile</a> - Specify the source PDF file used to import pages into the document</p>
<p><a href="{{ "/reference/mpdf-functions/importpage.html" | prepend: site.baseurl }}">ImportPage</a> - Import a page from an external PDF file</p>
<p><a href="{{ "/reference/mpdf-functions/usetemplate.html" | prepend: site.baseurl }}">UseTemplate</a> - Insert an imported page from an external PDF file</p>
<p><a href="{{ "/reference/mpdf-functions/setpagetemplate.html" | prepend: site.baseurl }}">SetPageTemplate</a> - Specify a page from an external PDF file to use as a template</p>
<p><a href="{{ "/reference/mpdf-functions/setdoctemplate.html" | prepend: site.baseurl }}">SetDocTemplate</a> - Specify an external PDF file to use as a template</p>

## Barcode

<p><a href="{{ "/reference/mpdf-functions/writebarcode.html" | prepend: site.baseurl }}">WriteBarcode</a> - Write an EAN-13 (ISBN-13) barcode</p>

## Write directly to page without HTML

<p><a href="{{ "/reference/mpdf-functions/autosizetext.html" | prepend: site.baseurl }}">AutosizeText</a> -</p>
<p><a href="{{ "/reference/mpdf-functions/roundedrect.html" | prepend: site.baseurl }}">RoundedRect</a> -</p>
<p><a href="{{ "/reference/mpdf-functions/writecell.html" | prepend: site.baseurl }}">WriteCell</a> -</p>
<p><a href="{{ "/reference/mpdf-functions/writetext.html" | prepend: site.baseurl }}">WriteText</a> -</p>
<p><a href="{{ "/reference/mpdf-functions/shaded-box.html" | prepend: site.baseurl }}">Shaded_box</a> -</p>
<p><a href="{{ "/reference/mpdf-functions/circulartext.html" | prepend: site.baseurl }}">CircularText</a> - NB This does have an HTML equivalent as &lt;textcircle&gt;</p>
