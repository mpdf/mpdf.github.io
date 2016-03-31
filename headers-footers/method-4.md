---
layout: page
title: Method 4
parent_title: Headers & Footers
permalink: /headers-footers/method-4.html
modification_time: 2015-08-05T11:59:51+00:00
---

<p>This uses <span class="smallblock">NAMED</span> <span class="smallblock">HTML</span> headers &amp; footers. This is the best way for complex headers/footers with the advantage of HTML code, but you can easily change the headers/footers at any time during the document.</p>
<p>Note that <span class="smallblock">NAMED</span> <span class="smallblock">HTML</span> headers are not specified as <span class="smallblock">ODD</span> or <span class="smallblock">EVEN</span> when they are defined, but only when they are selected.</p>

<div class="alert alert-info" role="alert"><strong>Note:</strong> Do not name any header or footer starting with html_&nbsp;&nbsp; This prefix is reserved to identify an <span class="smallblock">HTML</span> header/footer when passing its name in a reference.</div>
<p class="manual_block"><b>Note:&nbsp;</b><a href="{{ "/reference/mpdf-functions/addpage.html" | prepend: site.baseurl }}">AddPage()</a>, <a href="{{ "/reference/mpdf-functions/tocpagebreak.html" | prepend: site.baseurl }}">TOCpagebreak()</a>, &lt;<a href="{{ "/reference/html-control-tags/pagebreak.html" | prepend: site.baseurl }}">pagebrea</a>k&gt; &lt;<a href="{{ "/reference/html-control-tags/tocpagebreak.html" | prepend: site.baseurl }}">tocpagebreak</a>&gt; and <a href="{{ "/paging/using-page.html" | prepend: site.baseurl }}">@page</a> can reference both HTML and NON-HTML headers/footers. When referring to an HTML header/footer you must add the prefix 'html_' to distinguish them.</p>

# Defining NAMED HTML Headers/Footers

{% highlight php %}
Example #1 - Using PHP
{% endhighlight %}

{% highlight php %}
<?php

$mpdf=new mPDF(); 

$mpdf->DefHTMLHeaderByName('Chapter2Header','<div style="text-align: right; border-bottom: 1px solid #000000; font-weight: bold; font-size: 10pt;">Chapter 2</div>');

$mpdf->DefHTMLFooterByName('Chapter2Footer','<div style="text-align: right; font-weight: bold; font-size: 8pt; font-style: italic;">Chapter 2 Footer</div>');
{% endhighlight %}

{% highlight php %}
Example #2 - Using Custom HTML tags
{% endhighlight %}

{% highlight php %}
<?php

$mpdf=new mPDF(); 

$html = '

<htmlpageheader name="myHeader1">

<div style="text-align: right; border-bottom: 1px solid #000000; font-weight: bold; font-size: 10pt;">My document</div>

</htmlpageheader>

<htmlpageheader name="myHeader2">

<div style="border-bottom: 1px solid #000000; font-weight: bold;  font-size: 10pt;">My document</div>

</htmlpageheader>

<htmlpagefooter name="myFooter1">

<table width="100%" style="vertical-align: bottom; font-family: serif; font-size: 8pt; 

    color: #000000; font-weight: bold; font-style: italic;"><tr>

    <td width="33%"><span style="font-weight: bold; font-style: italic;">{DATE j-m-Y}</span></td>

    <td width="33%" align="center" style="font-weight: bold; font-style: italic;">{PAGENO}/{nbpg}</td>

    <td width="33%" style="text-align: right; ">My document</td>

    </tr></table>

</htmlpagefooter>

<htmlpagefooter name="myFooter2">

<table width="100%" style="vertical-align: bottom; font-family: serif; font-size: 8pt; 

    color: #000000; font-weight: bold; font-style: italic;"><tr>

    <td width="33%"><span style="font-weight: bold; font-style: italic;">My document</span></td>

    <td width="33%" align="center" style="font-weight: bold; font-style: italic;">{PAGENO}/{nbpg}</td>

    <td width="33%" style="text-align: right; ">{DATE j-m-Y}</td>

    </tr></table>

</htmlpagefooter>

';
{% endhighlight %}

# Referencing a Header/Footer by NAME

<p>Once you have defined <span class="smallblock">NAMED</span> <span class="smallblock">HTML</span> headers/footers for your document, you can reference them using:</p>
<ul>
<li>Methods for <span class="smallblock">HTML</span> headers/footers only - <b>Recommended</b> when setting the first page header/footer at the start of a document (although they can also be used to change headers/footers during the document).
<ul>
<li><a href="{{ "/reference/mpdf-functions/sethtmlheaderbyname.html" | prepend: site.baseurl }}">SetHTMLHeaderByName()</a> - see Example #3&nbsp; </li>
<li><a href="{{ "/reference/mpdf-functions/sethtmlfooterbyname.html" | prepend: site.baseurl }}">SetHTMLFooterByName()</a> - see Example #3

</li>
<li><a href="{{ "/paging/using-page.html" | prepend: site.baseurl }}">@page</a> - see Example #5

</li>
<li>&lt;<a href="{{ "/reference/html-control-tags/sethtmlpageheader.html" | prepend: site.baseurl }}">sethtmlpageheader</a>&gt; - see Example #4

</li>
<li>&lt;<a href="{{ "/reference/html-control-tags/sethtmlpagefooter.html" | prepend: site.baseurl }}">sethtmlpagefooter</a>&gt; - see Example#4

</li>
</ul>
</li>
</ul>
<ul>
<li>Methods to access any headers/footers (<span class="smallblock">HTML</span> or <span class="smallblock">NON-HTML</span>) - <b>Recommended</b> when changing header/footer during the document.
<ul>
<li><a href="{{ "/reference/mpdf-functions/addpage.html" | prepend: site.baseurl }}">AddPage()</a> - see Example #6

</li>
<li>&lt;<a href="{{ "/reference/html-control-tags/pagebreak.html" | prepend: site.baseurl }}">pagebrea</a>k&gt; - see Example #7

</li>
<li><a href="{{ "/paging/using-page.html" | prepend: site.baseurl }}">@page</a> - see Example #5

</li>
<li><a href="{{ "/reference/mpdf-functions/tocpagebreak.html" | prepend: site.baseurl }}">TOCpagebreak()</a> - see Example #8</li>
<li>&lt;<a href="{{ "/reference/html-control-tags/tocpagebreak.html" | prepend: site.baseurl }}">tocpagebreak</a>&gt; - see Example #9</li>
</ul>
</li>
</ul>

# Setting a named HTML header at the start of a document

<p>When using a <span class="smallblock">NAMED</span> header on the first page, remember that mPDF writes the header as the first page is started. This is usually when you first use WriteHTML() which automatically triggers an AddPage().</p>

{% highlight php %}
Example #3 - SetHTMLHeaderByName()
{% endhighlight %}

{% highlight php %}
<?php

$mpdf = new mPDF();

// Define an HTML header named 'MyHeader1' here (as Example #1)

$mpdf->SetHTMLHeaderByName('MyHeader1');

$mpdf->WriteHTML('Document text');

$mpdf->Output();
{% endhighlight %}

<p>In this example using custom HTML tags to set the <span class="smallblock">HTML</span> header, notice that &lt;sethtmlpageheader&gt; has <span class="parameter">show-this-page</span> = 1. This is because as soon as you call WriteHTML(), mPDF has added the first page, so this fixes the problem by forcing the header to show on the first page:</p>

{% highlight php %}
Example #4 - <sethtmlpageheader>
{% endhighlight %}

{% highlight php %}
<?php

$mpdf = new mPDF();

$html = '

<htmlpageheader name="MyHeader1">

<div style="text-align: right; border-bottom: 1px solid #000000; font-weight: bold; font-size: 10pt;">My document</div>

</htmlpageheader>

<htmlpagefooter name="MyFooter1">

<table width="100%" style="vertical-align: bottom; font-family: serif; font-size: 8pt; 

    color: #000000; font-weight: bold; font-style: italic;"><tr>

    <td width="33%"><span style="font-weight: bold; font-style: italic;">{DATE j-m-Y}</span></td>

    <td width="33%" align="center" style="font-weight: bold; font-style: italic;">{PAGENO}/{nbpg}</td>

    <td width="33%" style="text-align: right; ">My document</td>

    </tr></table>

</htmlpagefooter>

<sethtmlpageheader name="MyHeader1" value="on" show-this-page="1" />

<sethtmlpagefooter name="MyFooter1" value="on" />

<div>Start of the document ... and all the rest</div>

';

$mpdf->WriteHTML($html);

$mpdf->Output();
{% endhighlight %}

{% highlight php %}
Example #5 - @page
{% endhighlight %}

{% highlight php %}
<?php

$mpdf=new mPDF(); 

$html = '

<html>

<head>

<style>

@page {

  size: auto;

  odd-header-name: html_MyHeader1;

  odd-footer-name: html_MyFooter1;

}

@page chapter2 {

    odd-header-name: html_MyHeader2;

    odd-footer-name: html_MyFooter2;

}

@page noheader {

    odd-header-name: _blank;

    odd-footer-name: _blank;

}

div.chapter2 {

    page-break-before: always;

    page: chapter2;

}

div.noheader {

    page-break-before: always;

    page: noheader;

}

</style>

</head>

<body>

<htmlpageheader name="MyHeader1">

<div style="text-align: right; border-bottom: 1px solid #000000; font-weight: bold; font-size: 10pt;">My document</div>

</htmlpageheader>

<htmlpageheader name="MyHeader2">

<div style="border-bottom: 1px solid #000000; font-weight: bold;  font-size: 10pt;">My document</div>

</htmlpageheader>

<htmlpagefooter name="MyFooter1">

<table width="100%" style="vertical-align: bottom; font-family: serif; font-size: 8pt; 

    color: #000000; font-weight: bold; font-style: italic;"><tr>

    <td width="33%"><span style="font-weight: bold; font-style: italic;">{DATE j-m-Y}</span></td>

    <td width="33%" align="center" style="font-weight: bold; font-style: italic;">{PAGENO}/{nbpg}</td>

    <td width="33%" style="text-align: right; ">My document</td>

    </tr></table>

</htmlpagefooter>

<htmlpagefooter name="MyFooter2">

<table width="100%" style="vertical-align: bottom; font-family: serif; font-size: 8pt; 

    color: #000000; font-weight: bold; font-style: italic;"><tr>

    <td width="33%"><span style="font-weight: bold; font-style: italic;">My document</span></td>

    <td width="33%" align="center" style="font-weight: bold; font-style: italic;">{PAGENO}/{nbpg}</td>

    <td width="33%" style="text-align: right; ">{DATE j-m-Y}</td>

    </tr></table>

</htmlpagefooter>

<div>Here is the text of the first chapter</div>

<div class="chapter2">Text of Chapter 2</div>

<div class="noheader">No-Header page</div>

</body></html>

';

$mpdf->WriteHTML($html);

$mpdf->Output();
{% endhighlight %}

# Selecting a named header during the document

{% highlight php %}
Example #6 - AddPage()
{% endhighlight %}

{% highlight php %}
<?php

$mpdf->WriteHTML('Document text');

// In a SINGLE-SIDED document, the 'ODD' values set the default for all pages.

$mpdf->AddPage('','','','','','','','','','','', 'html_MyHeader2', '', 'html_MyFooter2', '', 1, 0, 1, 0);

$mpdf->WriteHTML('Document text');

// Turn Headers and Footers off

$mpdf->AddPage('','','','','','','','','','','', '', '', '', '', -1, 0, -1, 0);

$mpdf->WriteHTML('Document text with No Headers/Footers');
{% endhighlight %}

{% highlight php %}
Example #7 - <pagebreak>
{% endhighlight %}

{% highlight php %}
<?php

$html = '

<p>Document text</p>

<pagebreak odd-header-name="html_MyHeader2" odd-header-value="on" odd-footer-name="html_MyFooter2" odd-footer-value="on" />

<p>Text of Chapter 2/p>

<!-- TO TURN HEADER/FOOTER OFF FOR A NEW PAGE -->

<pagebreak odd-header-value="off" odd-footer-value="off" />

<p>No-Header page/p>

';

$mpdf->WriteHTML($html);
{% endhighlight %}

# Table of Contents

{% highlight php %}
Example #8 - TOCpagebreak()
{% endhighlight %}

{% highlight php %}
<?php

$mpdf = new mPDF();

// Define HTML headers here named 'MyHeader1', 'MyTOCHeader', 'MyTOCFooter', 'MyHeader2', 'MyFooter2' (as Example #1)

$mpdf->SetHTMLHeaderByName('MyHeader1');

$mpdf->WriteHTML('Introduction of document...');

$mpdf->TOCpagebreak ('', '', '', '', '', '', '', '', '', '', '', '', 'html_MyTOCHeader', '', 'html_MyTOCFooter', '', 1, 0 , 1, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'html_MyHeader2', '', 'html_MyFooter2', '', 1, 0,  1,0); 

$mpdf->WriteHTML('Main part of document...');

$mpdf->Output();
{% endhighlight %}

{% highlight php %}
Example #9 - <tocpagebreak>
{% endhighlight %}

{% highlight php %}
<?php

$html = '

<!-- Define HTML headers etc  here named 'MyHeader1', 'MyTOCHeader', 'MyTOCFooter', 'MyHeader2', 'MyFooter2' (as Example #2) -->

<p>Introduction: Here starts the document</p>

<tocpagebreak toc-odd-header-name='html_MyTOCHeader' toc-odd-footer-name='html_MyTOCFooter' toc-odd-header-value="1" toc-odd-footer-value="1"odd-header-name='html_MyHeader2' odd-header-value="1"  odd-footer-name='html_MyFooter2' odd-footer-value="1" />

<p>Text of Chapter 2... </p>

';

$mpdf->WriteHTML($html);
{% endhighlight %}

# See Also

<ul>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/defhtmlheaderbyname.html" | prepend: site.baseurl }}">DefHTMLHeaderByName()</a></li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/defhtmlfooterbyname.html" | prepend: site.baseurl }}">DefHTMLFooterByName()</a></li>
<li class="manual_boxlist">&lt;<a href="{{ "/reference/html-control-tags/htmlpageheader.html" | prepend: site.baseurl }}">htmlpageheader</a>&gt;</li>
<li class="manual_boxlist">&lt;<a href="{{ "/reference/html-control-tags/htmlpagefooter.html" | prepend: site.baseurl }}">htmlpagefooter</a>&gt;</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/sethtmlheaderbyname.html" | prepend: site.baseurl }}">SetHTMLHeaderByName()</a></li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/sethtmlfooterbyname.html" | prepend: site.baseurl }}">SetHTMLFooterByName()</a></li>
<li class="manual_boxlist">&lt;<a href="{{ "/reference/html-control-tags/sethtmlpageheader.html" | prepend: site.baseurl }}">sethtmlpageheader</a>&gt;</li>
<li class="manual_boxlist">&lt;<a href="{{ "/reference/html-control-tags/sethtmlpagefooter.html" | prepend: site.baseurl }}">sethtmlpagefooter</a>&gt;</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/addpage.html" | prepend: site.baseurl }}">AddPage()</a></li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/tocpagebreak.html" | prepend: site.baseurl }}">TOCpagebreak()</a></li>
<li class="manual_boxlist">&lt;<a href="{{ "/reference/html-control-tags/pagebreak.html" | prepend: site.baseurl }}">pagebrea</a>k&gt;</li>
<li class="manual_boxlist">&lt;<a href="{{ "/reference/html-control-tags/tocpagebreak.html" | prepend: site.baseurl }}">tocpagebreak</a>&gt;</li>
<li class="manual_boxlist"><a href="{{ "/paging/using-page.html" | prepend: site.baseurl }}">@page</a></li>
</ul>

