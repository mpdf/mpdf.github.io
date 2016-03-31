---
layout: page
title: Importing files & Templates
parent_title: What Else Can I Do
permalink: /what-else-can-i-do/importing-files-templates.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 2.3)</p>
<p>Using an extension of mPDF, pages from external PDF files can be imported into 'templates' and used throughout the current document. This can be used for:</p>
<ul>
<li>page templates e.g. statements or invoices</li>
<li>letterheads (see also <a href="/headers-footers/headers-footers.html">Headers &amp; Footers</a>)</li>
<li>a whole document template</li>
<li>create thumbnails as handouts etc. from a document you have produced</li>
</ul>

<div class="alert alert-info" role="alert"><b>Note:</b> On limited testing, mPDF appears to import any PDF file (with a version &lt;= 1.4, or one produced by mPDF) as long as it is not password protected. Text and images are imported, but links, bookmarks etc. are not. LZW encoding is supported from mPDF 4.3 onwards</div>

<div class="alert alert-info" role="alert"><b>Tip:</b> mPDF imports all embedded fonts required for the document, even if they are the same as the ones used in the document being written. Try to keep the file size of the external source PDF file down to a minimum.</div>

<div class="alert alert-info" role="alert"><b>Note:</b> Prior to mPDF 4.3, this required calling mPDFI(). The functions have now been incorporated into the main mpdf.php file, but you must use <a href="/reference/mpdf-functions/setimportuse.html">SetImportUse()</a> to enable them.</div>
<h2>See</h2>
<ul>
<li><a href="/reference/mpdf-functions/setimportuse.html">SetImportUse()</a> - Enable the use of imported PDF files or templates</li>
<li><a href="/reference/mpdf-functions/thumbnail.html">Thumbnail()</a> - Print thumbnails of an external PDF file

</li>
<li><a href="/reference/mpdf-functions/setsourcefile.html">SetSourceFile()</a> - Specify the source PDF file used to import pages into the document

</li>
<li><a href="/reference/mpdf-functions/importpage.html">ImportPage()</a> - Import a page from an external PDF file

</li>
<li><a href="/reference/mpdf-functions/usetemplate.html">UseTemplate()</a> - Insert an imported page from an external PDF file

</li>
<li><a href="/reference/mpdf-functions/setpagetemplate.html">SetPageTemplate()</a> - Specify a page from an external PDF file to use as a template

</li>
<li><a href="/reference/mpdf-functions/setdoctemplate.html">SetDocTemplate()</a> - Specify an external PDF file to use as a template</li>
</ul>
</div>
</div>

