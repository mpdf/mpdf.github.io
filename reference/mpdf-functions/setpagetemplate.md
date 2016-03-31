---
layout: page
title: SetPageTemplate()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setpagetemplate.html
modification_time: 2015-08-05T12:01:07+00:00
---

(mPDF &gt;= 2.3)

SetPageTemplate – Specify a page from an external PDF file to use as a template

# Description

void <b>SetPageTemplate</b> ([ int <span class="parameter">$templateID</span> ])

Specify a page from an external PDF file to use as a template. The page must have already been stored as a 'template' using <a href="{{ "/reference/mpdf-functions/setsourcefile.html" | prepend: site.baseurl }}">SetSourceFile()</a>. Once a 'page template' has been set, the template is inserted on every subsequent page of the document. The template is added to the page at the same time as a new page is started (in the Header).

# Parameters

<span class="parameter">templateID</span>

This parameter specifies the ID of the page template to use. Value must be a valid template ID from <a href="{{ "/reference/mpdf-functions/setsourcefile.html" | prepend: site.baseurl }}">SetSourceFile()</a>.

<span class="smallblock">DEFAULT</span> or <span class="smallblock">BLANK</span> will clear the template, so subsequent pages will not have the template added.

# Changelog

<table class="table"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>2.3</td>
<td>Function was added.</td>
</tr>
</tbody> </table>

# Examples

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<?php

include("../mpdf.php");

$mpdf=new mPDF(); 

$mpdf->SetImportUse(); 

$pagecount = $mpdf->SetSourceFile('logoheader.pdf');

$tplId = $mpdf->ImportPage($pagecount);

$mpdf->SetPageTemplate($tplId); 

// Do not add page until page template set, as it is inserted at the start of each page

$mpdf->AddPage();

$mpdf->WriteHTML('Hallo World');

// The template $tplId will be inserted on all subsequent pages until (optionally)

// $mpdf->SetPageTemplate(); 

$mpdf->Output();

?>
{% endhighlight %}

# See Also

<ul>
<li><a href="{{ "/reference/mpdf-functions/setimportuse.html" | prepend: site.baseurl }}">SetImportUse()</a> - Enable the use of imported PDF files or templates</li>
<li><a href="{{ "/reference/mpdf-functions/thumbnail.html" | prepend: site.baseurl }}">Thumbnail()</a> - Print thumbnails of an external PDF file

</li>
<li><a href="{{ "/reference/mpdf-functions/setsourcefile.html" | prepend: site.baseurl }}">SetSourceFile()</a> - Specify the source PDF file used to import pages into the document

</li>
<li><a href="{{ "/reference/mpdf-functions/usetemplate.html" | prepend: site.baseurl }}">UseTemplate()</a> - Insert an imported page from an external PDF file

</li>
<li><a href="{{ "/reference/mpdf-functions/setdoctemplate.html" | prepend: site.baseurl }}">SetDocTemplate()</a> - Specify an external PDF file to use as a template

</li>
</ul>

