---
layout: page
title: Method 2
parent_title: Headers & Footers
permalink: /headers-footers/method-2.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>This uses <span class="smallblock">RUNTIME</span> <span class="smallblock">HTML</span> headers &amp; footers. This is the simplest &amp; quickest way to program a header/footer once for the whole document that includes images or uses more complex layout styles.</p>
<h2>Setting Headers/Footers for the whole document

</h2>
<p>Use <a href="{{ "/reference/mpdf-functions/sethtmlheader.html" | prepend: site.baseurl }}">SetHTMLHeader()</a> and/or <a href="{{ "/reference/mpdf-functions/sethtmlfooter.html" | prepend: site.baseurl }}">SetHTMLFooter()</a> to set HTML headers/footers before writing to the document.</p>

{% highlight php %}
Example #1 - Single-sided document
{% endhighlight %}

{% highlight php %}
<?php

$mpdf = new mPDF();

// Define the Header/Footer before writing anything so they appear on the first page

$mpdf->SetHTMLHeader('<div style="text-align: right; font-weight: bold;">My document</div>'); 

$mpdf->SetHTMLFooter('

<table width="100%" style="vertical-align: bottom; font-family: serif; font-size: 8pt; color: #000000; font-weight: bold; font-style: italic;"><tr>

<td width="33%"><span style="font-weight: bold; font-style: italic;">{DATE j-m-Y}</span></td>

<td width="33%" align="center" style="font-weight: bold; font-style: italic;">{PAGENO}/{nbpg}</td>

<td width="33%" style="text-align: right; ">My document</td>

</tr></table>

');

$mpdf->WriteHTML('Hallo World');

$mpdf->Output();
{% endhighlight %}

{% highlight php %}
Example #2 - Double-sided document
{% endhighlight %}

{% highlight php %}
<?php

$mpdf = new mPDF();

$mpdf->useOddEven = 1;    // Use different Odd/Even headers and footers and mirror margins

// Define the Headers before writing anything so they appear on the first page

$mpdf->SetHTMLHeader('<div style="text-align: right; font-weight: bold;">My document</div>','O'); 

$mpdf->SetHTMLHeader('<div style="border-bottom: 1px solid #000000;">My document</div>','E');

$mpdf->SetHTMLFooter('

<table width="100%" style="vertical-align: bottom; font-family: serif; font-size: 8pt; color: #000000; font-weight: bold; font-style: italic;"><tr>

<td width="33%"><span style="font-weight: bold; font-style: italic;">{DATE j-m-Y}</span></td>

<td width="33%" align="center" style="font-weight: bold; font-style: italic;">{PAGENO}/{nbpg}</td>

<td width="33%" style="text-align: right; ">My document</td>

</tr></table>

');  // Note that the second parameter is optional : default = 'O' for ODD

$mpdf->SetHTMLFooter('

<table width="100%" style="vertical-align: bottom; font-family: serif; font-size: 8pt; color: #000000; font-weight: bold; font-style: italic;"><tr>

<td width="33%"><span style="font-weight: bold; font-style: italic;">My document</span></td>

<td width="33%" align="center" style="font-weight: bold; font-style: italic;">{PAGENO}/{nbpg}</td>

<td width="33%" style="text-align: right; ">{DATE j-m-Y}</td>

</tr></table>

', 'E');

$mpdf->WriteHTML('Hallo World');

$mpdf->Output();
{% endhighlight %}

<h2>Changing Header/Footer during the document</h2>
<p>This is where <span class="smallblock">RUNTIME</span> headers/footers get much more clumsy to use. When a new page is added to the document (e.g. using <a href="{{ "/reference/mpdf-functions/addpage.html" | prepend: site.baseurl }}">AddPage()</a> or &lt;<a href="{{ "/reference/html-control-tags/pagebreak.html" | prepend: site.baseurl }}">pagebreak</a>&gt;) mPDF does the following:</p>
<ul>
<li>writes the footer for the current page</li>
<li>starts the new page</li>
<li>writes the header for the new page</li>
</ul>
<p>Therefore to use any <span class="smallblock">RUNTIME</span> method you need to:</p>
<ul>
<li>change the header before the page-break</li>
<li>change the footer after the page-break

</li>
</ul>

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<?php

// First ensure that you are on an Even page

$mpdf->AddPage('','E');

// Then set the headers for the next page before you add the page

$mpdf->SetHTMLHeader('<div style="text-align: right; border-bottom: 1px solid #000000; font-weight: bold; font-size: 10pt;">Chapter 2</div>','O');

$mpdf->SetHTMLHeader('<div style="border-bottom: 1px solid #000000; font-weight: bold; font-size: 10pt;">Chapter 2</div>','E');

    

$mpdf->AddPage();

$mpdf->SetHTMLFooter('<div style="text-align: right; font-weight: bold; font-size: 8pt; font-style: italic;">Chapter 2</div>','O');

$mpdf->SetHTMLFooter('<div style="font-weight: bold; font-size: 8pt; font-style: italic;">Chapter 2</div>','E');

$mpdf->WriteHTML('Rest of the document');

$mpdf->Output();
{% endhighlight %}

{% highlight php %}
Example #2 - Turning a Header/Footer off
{% endhighlight %}

{% highlight php %}
<?php

// If you want the changes to start on an ODD page

$mpdf->AddPage('','E');

$mpdf->SetHTMLHeader();

$mpdf->AddPage();

$mpdf->SetHTMLFooter();

$mpdf->WriteHTML('No-Header page');

$mpdf->Output();
{% endhighlight %}

<h2>Table of Contents</h2>
<p>Using <span class="smallblock">RUNTIME</span> headers/footers with a Table of Contents is very clumsy, it is strongly recommended that you use one of the <span class="smallblock">NAMED</span> methods. Here for the record is how you would do it:</p>

{% highlight php %}
<?php

$mpdf = new mPDF();

$mpdf->useOddEven = true;

// Set the headers/footers for the Introduction

$mpdf->SetHTMLHeader('<div style="text-align: right; font-weight: bold;">Introduction</div>','O'); 

$mpdf->SetHTMLHeader('<div style="border-bottom: 1px solid #000000;">Introduction</div>','E');

$mpdf->SetHTMLFooter('<div style="font-weight: bold;">{PAGENO}</div>','O'); 

$mpdf->SetHTMLFooter('<div style="text-align: right;">{PAGENO}</div>','E'); 

$mpdf->AddPage('', '', 1, '', 'on');    // suppress page numbering for the introduction

$mpdf->WriteHTML('Introduction of document...');

$mpdf->AddPage('','E');

$mpdf->SetHTMLHeader('<div style="text-align: right; font-weight: bold;">Main</div>','O'); 

$mpdf->SetHTMLHeader('<div style="border-bottom: 1px solid #000000;">Main</div>','E');

$mpdf->TOCpagebreak('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 

   $toc-preHTML, $toc-postHTML, $toc-bookmarkText, 1, 'A', 'off');    // sets numbering to start at A

$mpdf->SetHTMLFooter('<div style="font-weight: bold;">Main - {PAGENO}</div>','O'); 

$mpdf->SetHTMLFooter('<div style="text-align: right;">Main - {PAGENO}</div>','E'); 

$mpdf->WriteHTML('Main part of document...');

$mpdf->Output();
{% endhighlight %}

<p>...and for historical reference, using depracated TOC function:</p>

{% highlight php %}
<?php

$mpdf = new mPDF();

$mpdf->useOddEven = true;

// Set the headers/footers for the Introduction

$mpdf->SetHTMLHeader('<div style="text-align: right; font-weight: bold;">Introduction</div>','O'); 

$mpdf->SetHTMLHeader('<div style="border-bottom: 1px solid #000000;">Introduction</div>','E');

$mpdf->SetHTMLFooter('<div style="font-weight: bold;">{PAGENO}</div>','O'); 

$mpdf->SetHTMLFooter('<div style="text-align: right;">{PAGENO}</div>','E'); 

$mpdf->AddPage('', '', 1, '', 'on');    // suppress page numbering for the introduction

$mpdf->WriteHTML('Introduction of document...');

$mpdf->AddPage('','E');

$mpdf->SetHTMLHeader('<div style="text-align: right; font-weight: bold;">Main</div>','O'); 

$mpdf->SetHTMLHeader('<div style="border-bottom: 1px solid #000000;">Main</div>','E');

$mpdf->AddPage('', '', 1, 'i', 'off');    // sets page numbering to start here at 1

$mpdf->SetHTMLFooter('<div style="font-weight: bold;">Main - {PAGENO}</div>','O'); 

$mpdf->SetHTMLFooter('<div style="text-align: right;">Main - {PAGENO}</div>','E'); 

// Set some variables for the ToC - these are all now depracated

$mpdf->TOCheader = array();

$mpdf->TOCfooter = array();

$mpdf->TOCpreHTML = '<h2>Table of Contents</h2>');

$mpdf->TOCpostHTML = '<p>Text to come after the contenst list</p>';

$mpdf->TOCbookmarkText = 'Contents';

// Mark this current page as where the ToC is to be inserted

$mpdf->TOC(($tocfont, $tocfontsize, $tocindent, $resetpagenum, $pagenumstyle, $suppress, $toc_orientation, $TOCusePaging, $TOCuseLinking);

$mpdf->WriteHTML('Main part of document...');

$mpdf->Output();
{% endhighlight %}

<h2>See Also</h2>
<ul>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/sethtmlfooter.html" | prepend: site.baseurl }}">SetHTMLHeader()</a></li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/sethtmlfooter.html" | prepend: site.baseurl }}">SetHTMLFooter()</a></li>
</ul>
<p>&nbsp;</p>
</div>
</div>

