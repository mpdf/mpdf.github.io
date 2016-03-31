---
layout: page
title: SetImportUse()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setimportuse.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 4.3)</p>
<p>SetImportUse – Enable the use of imported PDF files or templates</p>
<h2>Description</h2>

<div class="alert alert-info" role="alert">void <b>SetImportUse</b> ( )</div>
<p>Enable the use of imported PDF files or templates. This causes additional files (classes) to be loaded, enabling several functions allowing you to import PDF files into the document you are writing, and using templates.</p>

<div class="alert alert-info" role="alert"><b>Note:</b> Prior to mPDF 4.3, this required calling mPDFI(). The functions have now been incorporated into the main mpdf.php file, but you must use SetImportUse() to enable them.</div>
<h2>Changelog</h2>
<table class="bpmTopic"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>4.3</td>
<td>
<p>Function added.</p>
</td>
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

$mpdf->WriteHTML('You can use this just like normal, but also import and use templates...');

$mpdf->Output();

?>
{% endhighlight %}

<h2>See Also</h2>
<ul>
<li class="manual_boxlist"><a href="/reference/mpdf-functions/thumbnail.html">Thumbnail()</a> - Print thumbnails of an external PDF file</li>
<li class="manual_boxlist"><a href="/reference/mpdf-functions/setsourcefile.html">SetSourceFile()</a> - Specify the source PDF file used to import pages into the document</li>
<li class="manual_boxlist"><a href="/reference/mpdf-functions/importpage.html">ImportPage()</a> - Import a page from an external PDF file</li>
<li class="manual_boxlist"><a href="/reference/mpdf-functions/usetemplate.html">UseTemplate()</a> - Insert an imported page from an external PDF file</li>
<li class="manual_boxlist"><a href="/reference/mpdf-functions/setpagetemplate.html">SetPageTemplate()</a> - Specify a page from an external PDF file to use as a template</li>
<li class="manual_boxlist"><a href="/reference/mpdf-functions/setdoctemplate.html">SetDocTemplate()</a> - Specify an external PDF file to use as a template</li>
<li class="manual_boxlist"><a href="/reference/mpdf-functions/restartdoctemplate.html">RestartDocTemplate()</a> - Re-start the use of a Document template from the next page</li>
</ul>
<p>&nbsp;</p>
</div>
</div>

