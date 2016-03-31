---
layout: page
title: RestartDocTemplate()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/restartdoctemplate.html
modification_time: 2015-08-05T12:00:51+00:00
---

<p>(mPDFI &gt;= 2.4)</p>
<p>RestartDocTemplate – Re-start the use of a Document template from the next page</p>

# Description

<p class="manual_block">void <b>RestartDocTemplate</b> ( )</p>
<p>Restart the use of a document template (set by <a href="{{ "/reference/mpdf-functions/setdoctemplate.html" | prepend: site.baseurl }}">SetDocTemplate()</a>) from the next page.</p>

# Parameters

<p class="manual_param_dt"><span class="parameter">none</span></p>

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

