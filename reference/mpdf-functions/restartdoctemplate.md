---
layout: page
title: RestartDocTemplate()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/restartdoctemplate.html
modification_time: 2015-08-05T12:00:51+00:00
---

(mPDFI &gt;= 2.4)

RestartDocTemplate – Re-start the use of a Document template from the next page

# Description

void <b>RestartDocTemplate</b> ( )

Restart the use of a document template (set by <a href="{{ "/reference/mpdf-functions/setdoctemplate.html" | prepend: site.baseurl }}">SetDocTemplate()</a>) from the next page.

# Parameters

<span class="parameter">none</span>

# Changelog

<table class="table"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>2.4</td>
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

// Document template consisting of 2 pages, first with logo and addresses, 2nd with a simple header

$mpdf->SetDocTemplate('logoheader.pdf',true); 

$mpdf->AddPage();

$mpdf->WriteHTML($firstletter);

$mpdf->RestartDocTemplate();

$mpdf->AddPage();

$mpdf->WriteHTML($secondletter);

$mpdf->RestartDocTemplate();

$mpdf->AddPage();

$mpdf->WriteHTML($thirdletter);

$mpdf->Output();

?>
{% endhighlight %}

# See Also

<ul>
<li><a href="{{ "/reference/mpdf-functions/setimportuse.html" | prepend: site.baseurl }}">SetImportUse()</a> - Enable the use of imported PDF files or templates</li>
<li><a href="{{ "/reference/mpdf-functions/setdoctemplate.html" | prepend: site.baseurl }}">SetDocTemplate()</a> - Specify an external PDF file to use as a template</li>
<li><a href="{{ "/reference/mpdf-functions/thumbnail.html" | prepend: site.baseurl }}">Thumbnail()</a> - Print thumbnails of an external PDF file

</li>
<li><a href="{{ "/reference/mpdf-functions/setsourcefile.html" | prepend: site.baseurl }}">SetSourceFile()</a> - Specify the source PDF file used to import pages into the document

</li>
<li><a href="{{ "/reference/mpdf-functions/usetemplate.html" | prepend: site.baseurl }}">UseTemplate()</a> - Insert an imported page from an external PDF file</li>
<li><a href="{{ "/reference/mpdf-functions/setpagetemplate.html" | prepend: site.baseurl }}">SetPageTemplate()</a> - Specify a page from an external PDF file to use as a template

</li>
</ul>

