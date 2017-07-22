---
layout: page
title: UseTemplate()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/usetemplate.html
modification_time: 2015-08-05T12:01:14+00:00
---

(mPDF >= 2.3)

UseTemplate – Insert an imported page from an external PDF file

# Description

array `UseTemplate` ( int <span class="parameter">$templateID</span> [, float <span class="parameter">$x</span> [, float <span class="parameter">$y</span> [, float <span class="parameter">$width</span> [, float <span class="parameter">$height</span> ]]]])

Insert an imported page/template from an external PDF file into the current document. The page, or 'cropped' page, must have
already been stored as a 'template' using <a href="{{ "/reference/mpdf-functions/setsourcefile.html" | prepend: site.baseurl }}">SetSourceFile()</a>.
The template is inserted on the current page of the document. UseTemplate() returns an array of height and width of the
imported page as it is printed (see Example #1).

<div class="alert alert-info" role="alert" markdown="1">
	**Note:** The template will be printed onto the page as the bottom 'layer' i.e.
	anything else written to that page by mPDF will be written on top of thie template. NB If you use `WriteHTML()` and have
	a background-color set on BODY this will hide the template from view e.g. `body style="background-color:#FFFFFF;"`
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** If you are using automatic header-margins, you need to set the header before starting the first page; if you start
  the document with `UseTemplate()` this will move it to page 1, so the order needs to be:
  
{% highlight php %}
<?php

$mpdf = new \Mpdf\Mpdf();

$mpdf->SetImportUse();

$mpdf->SetHTMLHeader($header);

$pagecount = $mpdf->SetSourceFile('logoheader.pdf');

$tplIdx = $mpdf->ImportPage($pagecount);

$mpdf->UseTemplate($tplIdx);

$mpdf->WriteHTML($html);
{% endhighlight %}

</div>

# Parameters

<span class="parameter">$templateID</span>

This parameter specifies the ID of the page template to insert.

<span class="parameter">$x</span>

Sets the <span class="parameter">$x</span> co-ordinate (abscissa) to output the template. Value should be specified as <span class="smallblock">LENGTH</span> in millimetres.

<span class="smallblock">DEFAULT</span> <span class="smallblock">NULL</span> - Sets <span class="parameter">$x</span> co-ordinate to 0

<span class="smallblock">BLANK</span> or omitted - uses default (0)

-1: Uses current writing position in document

<span class="parameter">$y</span>

Sets the <span class="parameter">$y</span> co-ordinate (ordinate) to output the template. Value should be specified as <span class="smallblock">LENGTH</span> in millimetres.

<span class="smallblock">DEFAULT</span> <span class="smallblock">NULL</span> - Sets <span class="parameter">$y</span> co-ordinate to 0

<span class="smallblock">BLANK</span> or omitted - uses default (0)

-1: Uses current writing position in document

<span class="parameter">$width</span>

Specifies the width for the template to appear on the page. Value should be specified as <span class="smallblock">LENGTH</span> in millimetres.

<span class="smallblock">DEFAULT</span> or 0 will output the template at the original size (if neither <span class="parameter">$width</span> nor <span class="parameter">$height</span> are set) or if <span class="parameter">$height</span> is set, the <span class="parameter">$width</span> is automatically set to ouput the template in proportion to the original.

<span class="parameter">$height</span>

Specifies the height for the template to appear on the page. Value should be specified as <span class="smallblock">LENGTH</span> in millimetres.

<span class="smallblock">DEFAULT</span> or 0 will output the template at the original size (if neither <span class="parameter">$width</span> nor <span class="parameter">$height</span> are set) or if <span class="parameter">$width</span> is set, the <span class="parameter">$height</span> is automatically set to ouput the template in proportion to the original.

# Return Value

**`UseTemplate()`** returns an array of the calculated <span class="parameter">$width</span> and <span class="parameter">$height</span>.

# Changelog

<table class="table">
<thead>
	<tr><th>Version</th><th>Description</th></tr>
</thead>
<tbody>
	<tr>td>2.3</td><td>Function was added.</td></tr>
</tbody>
</table>

# Examples

Example #1

{% highlight php %}
<?php

// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

$mpdf->SetImportUse();

// Add First page

$mpdf->AddPage();

$pagecount = $mpdf->SetSourceFile('logoheader.pdf');

$tplId = $mpdf->ImportPage($pagecount);

$actualsize = $mpdf->UseTemplate($tplId);

// The height of the template as it was printed is returned as $actualsize['h']

// The width of the template as it was printed is returned as $actualsize['w']

$mpdf->WriteHTML('Hello World');

$mpdf->Output();

?>
{% endhighlight %}

{% highlight php %}
Example #2 - Using a 'cropped' page

{% endhighlight %}

{% highlight php %}
<?php

// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

$mpdf->SetImportUse();

$pagecount = $mpdf->SetSourceFile('testfile.pdf');

$tplId = $mpdf->ImportPage($pagecount, 50, 50, 100, 100);

$mpdf->UseTemplate($tplId, '', '', 100, 100);

$mpdf->Output();

?>
{% endhighlight %}

# See Also

<ul>
<li><a href="{{ "/reference/mpdf-functions/setimportuse.html" | prepend: site.baseurl }}">SetImportUse()</a> - Enable the use of imported PDF files or templates</li>
<li><a href="{{ "/reference/mpdf-functions/thumbnail.html" | prepend: site.baseurl }}">Thumbnail()</a> - Print thumbnails of an external PDF file</li>
<li><a href="{{ "/reference/mpdf-functions/setsourcefile.html" | prepend: site.baseurl }}">SetSourceFile()</a> - Specify the source PDF file used to import pages into the document</li>
<li><a href="{{ "/reference/mpdf-functions/importpage.html" | prepend: site.baseurl }}">ImportPage()</a> - Import a page from an external PDF file</li>
<li><a href="{{ "/reference/mpdf-functions/setpagetemplate.html" | prepend: site.baseurl }}">SetPageTemplate()</a> - Specify a page from an external PDF file to use as a template</li>
<li><a href="{{ "/reference/mpdf-functions/setdoctemplate.html" | prepend: site.baseurl }}">SetDocTemplate()</a> - Specify an external PDF file to use as a template</li>
<li><a href="{{ "/reference/mpdf-functions/restartdoctemplate.html" | prepend: site.baseurl }}">RestartDocTemplate()</a> - Re-start the use of a Document template from the next page</li>
</ul>

