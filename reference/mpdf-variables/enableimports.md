---
layout: page
title: enableImports
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/enableimports.html
modification_time: 2015-08-05T12:01:55+00:00
---

<p>(mPDF &gt;= 4.3)</p>
<p>enableImports – Enable the use of imported PDF files or templates</p>

# Description

<p class="manual_block">void <b>enableImports</b></p>
<p>Enable the use of imported PDF files or templates. This causes additional files (classes) to be loaded, enabling several functions allowing you to import PDF files into the document you are writing, and using templates.</p>

<div class="alert alert-info" role="alert"><strong>Note:</strong> You should only change this variable in the configuration file <span class="filename">config.php</span>&nbsp; If you want to set this at runtime, use <a href="{{ "/reference/mpdf-functions/setimportuse.html" | prepend: site.baseurl }}">SetImportUse()</a></div>

<div class="alert alert-info" role="alert"><strong>Note:</strong> Prior to mPDF 4.3, this required calling mPDFI(). The functions have now been incorporated into the main mpdf.php file, but you must set this variable to enable them.</div>

# Values

<p class="manual_param_dt"><span class="parameter">enableImports</span> =&nbsp; <span class="smallblock">TRUE </span>| <span class="smallblock">FALSE</span></p>
<p class="manual_param_dd"><b>Values</b>

<span class="smallblock">TRUE </span>: enable import/template functions

<span class="smallblock">FALSE</span>: disabled

<span class="smallblock">DEFAULT</span>: <span class="smallblock">FALSE</span></p>

# Changelog

<table class="table"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>4.3</td>
<td>Variable was added.</td>
</tr>
</tbody> </table>

# See Also

<ul>
<li><a href="{{ "/reference/mpdf-functions/setimportuse.html" | prepend: site.baseurl }}">SetImportUse()</a> - Enable the use of imported PDF files or templates</li>
<li><a href="{{ "/reference/mpdf-functions/thumbnail.html" | prepend: site.baseurl }}">Thumbnail()</a> - Print thumbnails of an external PDF file

</li>
<li><a href="{{ "/reference/mpdf-functions/setsourcefile.html" | prepend: site.baseurl }}">SetSourceFile()</a> - Specify the source PDF file used to import pages into the document

</li>
<li><a href="{{ "/reference/mpdf-functions/importpage.html" | prepend: site.baseurl }}">ImportPage()</a> - Import a page from an external PDF file

</li>
<li><a href="{{ "/reference/mpdf-functions/usetemplate.html" | prepend: site.baseurl }}">UseTemplate()</a> - Insert an imported page from an external PDF file

</li>
<li><a href="{{ "/reference/mpdf-functions/setpagetemplate.html" | prepend: site.baseurl }}">SetPageTemplate()</a> - Specify a page from an external PDF file to use as a template

</li>
<li><a href="{{ "/reference/mpdf-functions/setdoctemplate.html" | prepend: site.baseurl }}">SetDocTemplate()</a> - Specify an external PDF file to use as a template</li>
<li><a href="{{ "/reference/mpdf-functions/restartdoctemplate.html" | prepend: site.baseurl }}">RestartDocTemplate()</a> - Re-start the use of a Document template from the next page</li>
</ul>

