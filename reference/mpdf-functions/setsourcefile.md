---
layout: page
title: SetSourceFile()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setsourcefile.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 2.3)</p>
<p>SetSourceFile – Specify the source PDF file used to import pages into the document</p>
<h2>Description</h2>

<div class="alert alert-info" role="alert">int <b>SetSourceFile</b> ( string <span class="parameter">$file</span> )</div>
<p>Specify the source PDF file used to import pages into the document.</p>
<h2>Parameters</h2>
<p class="manual_param_dt"><span class="parameter">file</span></p>
<p class="manual_param_dd">This parameter specifies the source PDF file used to import pages into the document. <b>Note:&nbsp; <span class="parameter">file</span> should be a relative path to a local file.</b></p>
<h2>Return Value</h2>
<p class="manual_param_dd"><b>SetSourceFile()</b> returns the number of pages in the source file.</p>
<p>&nbsp;</p>
<h2>Changelog</h2>
<table class="bpmTopic"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>2.3</td>
<td>Function was added.</td>
</tr>
</tbody> </table>
<h2>Examples</h2>

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<?php

<?php

include("../mpdf.php");

$mpdf=new mPDF(); 

$mpdf->SetImportUse(); 

$pagecount = $mpdf->SetSourceFile('logoheader.pdf');

// Import the last page of the source PDF file

$tplId = $mpdf->ImportPage($pagecount);

$mpdf->UseTemplate($tplId);

$mpdf->WriteHTML('Hallo World');

$mpdf->Output();

?>
{% endhighlight %}

<h2>See Also</h2>
<p>&nbsp;</p>
<ul>
<li><a href="{{ "/reference/mpdf-functions/setimportuse.html" | prepend: site.baseurl }}">SetImportUse()</a> - Enable the use of imported PDF files or templates</li>
<li><a href="{{ "/reference/mpdf-functions/thumbnail.html" | prepend: site.baseurl }}">Thumbnail()</a> - Print thumbnails of an external PDF file</li>
<li><a href="{{ "/reference/mpdf-functions/importpage.html" | prepend: site.baseurl }}">ImportPage()</a> - Import a page from an external PDF file</li>
<li><a href="{{ "/reference/mpdf-functions/usetemplate.html" | prepend: site.baseurl }}">UseTemplate()</a> - Insert an imported page from an external PDF file</li>
<li><a href="{{ "/reference/mpdf-functions/setpagetemplate.html" | prepend: site.baseurl }}">SetPageTemplate()</a> - Specify a page from an external PDF file to use as a template</li>
<li><a href="{{ "/reference/mpdf-functions/setdoctemplate.html" | prepend: site.baseurl }}">SetDocTemplate()</a> - Specify an external PDF file to use as a template</li>
</ul>
</div>
</div>

