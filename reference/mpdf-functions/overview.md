---
layout: page
title: Overview
parent_title: mPDF functions
permalink: /reference/mpdf-functions/overview.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<h2>mPDF Functions by Category</h2>
<h3>Main controls</h3>
<p><a href="/reference/mpdf-functions/mpdf.html">mPDF</a> - Main class constructor</p>
<p>mPDFI - [Depracated] - see <a href="/reference/mpdf-functions/setimportuse.html">SetImportUse()</a></p>
<p><a href="/reference/mpdf-functions/writehtml.html">WriteHTML</a> - Write HTML code to the document</p>
<p><a href="/reference/mpdf-functions/output.html">Output</a> - Finalise the document and send it to specified destination</p>
<h3>Configuration</h3>
<p><a href="/reference/mpdf-functions/setimportuse.html">SetImportUse</a> - Enables use of templates and imported PDF files (was mPDFI)</p>
<p><a href="/reference/mpdf-functions/startprogressbaroutput.html">StartProgressBarOutput</a> - Show progress bars whilst generating PDF file</p>
<p><a href="/reference/mpdf-functions/setanchor2bookmark.html">SetAnchor2Bookmark</a> - Specifies how PDF Book marks are created from HTML anchors</p>
<p><a href="/reference/mpdf-functions/setbasepath.html">SetBasePath</a> - Specifies a base URL for mPDF to interpret relative URLs</p>
<p><a href="/reference/mpdf-functions/setcompression.html">SetCompression</a> - Specifies that mPDF should compress the data for the PDF file</p>
<p><a href="/reference/mpdf-functions/setdefaultfont.html">SetDefaultFont</a> -</p>
<p><a href="/reference/mpdf-functions/setdefaultbodycss.html">SetDefaultBodyCSS</a> -</p>
<p><a href="/reference/mpdf-functions/setdefaultfontsize.html">SetDefaultFontSize</a> -</p>
<p><a href="/reference/mpdf-functions/setdirectionality.html">SetDirectionality</a> -</p>
<p><a href="/reference/mpdf-functions/setdisplaymode.html">SetDisplayMode</a> - Specify the initial Display Mode when the PDF file is opened</p>
<p><a href="/reference/mpdf-functions/setautofont.html">SetAutoFont</a> -</p>
<p><a href="/reference/mpdf-functions/restrictunicodefonts.html">RestrictUnicodeFonts</a> -</p>
<p><a href="indexaf79.html?tid=193">SetUserRights</a> -</p>
<h3>Document Metadata</h3>
<p><a href="/reference/mpdf-functions/settitle.html">SetTitle</a> - Set the document title</p>
<p><a href="/reference/mpdf-functions/setauthor.html">SetAuthor</a> - Set the document author</p>
<p><a href="/reference/mpdf-functions/setcreator.html">SetCreator</a> - Set the document creator</p>
<p><a href="/reference/mpdf-functions/setsubject.html">SetSubject</a> - Set the document subject</p>
<p><a href="/reference/mpdf-functions/setkeywords.html">SetKeywords</a> - Set the document keywords</p>
<h3>Encryption &amp; Passwords</h3>
<p><a href="/reference/mpdf-functions/setprotection.html">SetProtection</a> - Encrypts and sets the PDF document permissions</p>
<p><a href="indexaf79.html?tid=193">SetUserRights</a> -</p>
<h3>Watermarks (page backgrounds)</h3>
<p><a href="/reference/mpdf-functions/setwatermarkimage.html">SetWatermarkImage</a> - Set an image to use as a Watermark</p>
<p><a href="/reference/mpdf-functions/setwatermarktext.html">SetWatermarkText</a> - Set the text to use as a Watermark</p>
<h3>Page Numbering</h3>
<p><a href="/reference/mpdf-functions/aliasnbpages.html">AliasNbPages</a> -Defines the placeholder used to insert total number of pages into the document</p>
<p><a href="/reference/mpdf-functions/aliasnbpagegroups.html">AliasNbPageGroups</a> -Defines the placeholder used to insert total page number into the document</p>
<h3>Colours</h3>
<p><a href="/reference/mpdf-functions/addspotcolor.html">AddSpotColor</a> - Define a Spot Colour to be referenced in the document</p>
<p>&nbsp;</p>
<p>The following methods have HTML equivalents e,g, &lt;pagebreak /&gt; and AddPage():</p>
<h3>Paging</h3>
<p><a href="/reference/mpdf-functions/addpage.html">AddPage</a> - Add a new page</p>
<p><a href="/reference/mpdf-functions/addpagebyarray.html">AddPageByArray</a> - Add a new page using array of parameters</p>
<h3>Bookmarks (Outlines)</h3>
<p><a href="/reference/mpdf-functions/bookmark.html">Bookmark</a> -Add a Bookmark to the document</p>
<h3>Annotations</h3>
<p><a href="/reference/mpdf-functions/annotation.html">Annotation</a> -Add an Annotation to the document</p>
<h3>Index</h3>
<p><a href="/reference/mpdf-functions/createreference.html">CreateIndex</a> -Generate an Index for the document (mPDF &lt; v6.0)</p>
<p><a href="/reference/mpdf-functions/insertindex.html">InsertIndex</a> - Generate an Index for the document (mPDF &gt;= v6.0)</p>
<p><a href="index3e79.html?tid=145">IndexEntry</a> -Insert an Index entry for the document</p>
<p><a href="/reference/mpdf-functions/indexentrysee.html">IndexEntrySee</a> - Insert a cross-reference entry for the document Index</p>
<h3>Columns</h3>
<p><a href="/reference/mpdf-functions/setcolumns.html">SetColumns</a> -Control the use of multiple columns on the page</p>
<p><a href="/reference/mpdf-functions/bookmark.html">AddColumn</a> - Start a new Column</p>
<h3>Page Headers &amp; Footers</h3>
<p><a href="/reference/mpdf-functions/deffooterbyname.html">DefFooterByName</a> - Define a page footer by name</p>
<p><a href="/reference/mpdf-functions/defheaderbyname.html">DefHeaderByName</a> - Define a page header by name</p>
<p><a href="/reference/mpdf-functions/defhtmlfooterbyname.html">DefHTMLFooterByName</a> - Define an HTML page footer by name</p>
<p><a href="/reference/mpdf-functions/defhtmlheaderbyname.html">DefHTMLHeaderByName</a> - Define an HTML page header by name</p>
<p><a href="/reference/mpdf-functions/setfooter.html">SetFooter</a> - Set a page footer</p>
<p><a href="/reference/mpdf-functions/setfooterbyname.html">SetFooterByName</a> - Set a page footer by name</p>
<p><a href="/reference/mpdf-functions/setheader.html">SetHeader</a> - Set a page header</p>
<p><a href="/reference/mpdf-functions/setheaderbyname.html">SetHeaderByName</a> - Set a page header by name</p>
<p><a href="/reference/mpdf-functions/sethtmlfooter.html">SetHTMLFooter</a> - Set an HTML page footer</p>
<p><a href="/reference/mpdf-functions/sethtmlfooterbyname.html">SetHTMLFooterByName</a> - Set an HTML page footer by name</p>
<p><a href="/reference/mpdf-functions/sethtmlheader.html">SetHTMLHeader</a> - Set an HTML page header</p>
<p><a href="/reference/mpdf-functions/sethtmlheaderbyname.html">SetHTMLHeaderByName</a> - Set an HTML page header by name</p>
<h3>Table of Contents</h3>
<p><a href="/reference/mpdf-functions/tocpagebreak.html">TOCpagebreak</a> - Insert a table of contents in the document</p>
<p><a href="/reference/mpdf-functions/tocpagebreakbyarray.html">TOCpagebreakByArray</a> - Insert a table of contents in the document using an array of parameters</p>
<p><a href="/reference/mpdf-functions/toc-entry.html">TOC_Entry</a> - Insert an entry for the Table of Contents</p>
<p>&nbsp;</p>
<p>Other Miscellaneous methods:</p>
<h3>Replacing text in existing PDF files</h3>
<p><a href="/reference/mpdf-functions/overwrite.html">OverWrite</a> - Replace specified text strings in an existing PDF file</p>
<h3>Control Visibility</h3>
<p><a href="/reference/mpdf-functions/setvisibility.html">SetVisibility</a> - Control the visibility of subsequent objects</p>
<h3>Import PDF files &amp; Templates</h3>
<p>mPDFI - [Depracated] - see <a href="/reference/mpdf-functions/setimportuse.html">SetImportUse()</a></p>
<p><a href="/reference/mpdf-functions/thumbnail.html">Thumbnail</a> - Print thumbnails of an external PDF file</p>
<p><a href="/reference/mpdf-functions/setsourcefile.html">SetSourceFile</a> - Specify the source PDF file used to import pages into the document</p>
<p><a href="/reference/mpdf-functions/importpage.html">ImportPage</a> - Import a page from an external PDF file</p>
<p><a href="/reference/mpdf-functions/usetemplate.html">UseTemplate</a> - Insert an imported page from an external PDF file</p>
<p><a href="/reference/mpdf-functions/setpagetemplate.html">SetPageTemplate</a> - Specify a page from an external PDF file to use as a template</p>
<p><a href="/reference/mpdf-functions/setdoctemplate.html">SetDocTemplate</a> - Specify an external PDF file to use as a template</p>
<h3>Barcode</h3>
<p><a href="/reference/mpdf-functions/writebarcode.html">WriteBarcode</a> - Write an EAN-13 (ISBN-13) barcode</p>
<h3>Write directly to page without HTML</h3>
<p><a href="/reference/mpdf-functions/autosizetext.html">AutosizeText</a> -</p>
<p><a href="/reference/mpdf-functions/roundedrect.html">RoundedRect</a> -</p>
<p><a href="/reference/mpdf-functions/writecell.html">WriteCell</a> -</p>
<p><a href="/reference/mpdf-functions/writetext.html">WriteText</a> -</p>
<p><a href="/reference/mpdf-functions/shaded-box.html">Shaded_box</a> -</p>
<p><a href="/reference/mpdf-functions/circulartext.html">CircularText</a> - NB This does have an HTML equivalent as &lt;textcircle&gt;</p>
</div>
</div>

