---
layout: page
title: Method 3
parent_title: Headers & Footers
permalink: /headers-footers/method-3.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>This uses <span class="smallblock">NAMED</span> <span class="smallblock">NON-HTML</span> headers &amp; footers. This method is useful if you do not need the flexibility of an HTML header/footer, but are changing headers/footers throughout the document.</p>
<p>These use the same array values as <a href="/headers-footers/method-1.html">Method 1</a> Variant #5.</p>
<p>Note that named headers are not specified as <span class="smallblock">ODD</span> or <span class="smallblock">EVEN</span> when they are defined, but only when they are selected.</p>

<div class="alert alert-info" role="alert"><b>Note:</b> Do not name a header or footer starting with html_&nbsp;&nbsp; This prefix is reserved to identify an <span class="smallblock">HTML</span> header/footer.</div>
<h2>Defining NAMED Headers/Footers

</h2>

{% highlight php %}
Example #1 - Using PHP
{% endhighlight %}

{% highlight php %}
<?php

$arr1 = array (

    'L' => array (

      'content' => 'Chapter 1',

      'font-size' => 10,

      'font-style' => 'B',

      'font-family' => 'serif',

      'color'=>'#000000'

    ),

    'C' => array (

      'content' => '',

      'font-size' => 10,

      'font-style' => 'B',

      'font-family' => 'serif',

      'color'=>'#000000'

    ),

    'R' => array (

      'content' => 'My document',

      'font-size' => 10,

      'font-style' => 'B',

      'font-family' => 'serif',

      'color'=>'#000000'

    ),

    'line' => 1,

);

$mpdf->DefHeaderByName('MyHeader1', $arr1);
{% endhighlight %}

{% highlight php %}
Example #2 - Using Custom HTML tags
{% endhighlight %}

{% highlight php %}
<?php

$mpdf=new mPDF(); 

// Define the Headers and Footers with names

$html = '

<pageheader name="MyHeader1" content-left="" content-center="" content-right="My document" header-style="font-family: serif; font-size: 10pt; font-weight: bold; color: #000000;" line="on" />

<pagefooter name="MyFooter1" content-left="{DATE j-m-Y}" content-center="{PAGENO}/{nbpg}" content-right="My document" footer-style="font-family: serif; font-size: 8pt; font-weight: bold; font-style: italic; color: #000000;" />

<div>Now starts the document text... </div>

';

$mpdf->WriteHTML($html);
{% endhighlight %}

<h2>Referencing a Header/Footer by NAME

</h2>
<p>Once you have defined <span class="smallblock">NAMED</span> headers/footers for your document, you can reference them using:</p>
<ul>
<li>Methods for <span class="smallblock">NON-HTML</span> headers/footers only - <b>Recommended</b> when setting the first page header/footer at the start of a document (although they can also be used to change headers/footers during the document).
<ul>
<li><a href="/reference/mpdf-functions/setheaderbyname.html">SetHeaderByName()</a> - see Example #3&nbsp; </li>
<li><a href="/reference/mpdf-functions/setfooterbyname.html">SetFooterByName()</a> - see Example #3

</li>
<li><a href="/paging/using-page.html">@page</a> - see Example #5

</li>
<li>&lt;<a href="/reference/html-control-tags/setpageheader.html">setpageheader</a>&gt; - see Example #4

</li>
<li>&lt;<a href="/reference/html-control-tags/setpagefooter.html">setpagefooter</a>&gt; - see Example#4

</li>
</ul>
</li>
</ul>
<ul>
<li>Methods to access any headers/footers (<span class="smallblock">HTML</span> or <span class="smallblock">NON-HTML</span>) - <b>Recommended</b> when changing header/footer during the document.
<ul>
<li><a href="/reference/mpdf-functions/addpage.html">AddPage()</a> - see Example #6

</li>
<li>&lt;<a href="/reference/html-control-tags/pagebreak.html">pagebrea</a>k&gt; - see Example #7

</li>
<li><a href="/paging/using-page.html">@page</a> - see Example #5

</li>
<li><a href="/reference/mpdf-functions/tocpagebreak.html">TOCpagebreak()</a> - see Example #8</li>
<li>&lt;<a href="/reference/html-control-tags/tocpagebreak.html">tocpagebreak</a>&gt; - see Example #9</li>
</ul>
</li>
</ul>
<h2>Setting a named header at the start of a document</h2>
<p>When using a <span class="smallblock">NAMED</span> header on the first page, remember that mPDF writes the header as the first page is started. This is usually when you first use WriteHTML() which automatically triggers an AddPage().</p>

{% highlight php %}
Example #3 - SetHeaderByName()
{% endhighlight %}

{% highlight php %}
<?php

$mpdf = new mPDF();

// Define a header named 'MyHeader1' here (as Example #1)

$mpdf->SetHeaderByName('MyHeader1');

$mpdf->WriteHTML('Document text');

$mpdf->Output();
{% endhighlight %}

<p>In this example using custom HTML tags to set the <span class="smallblock">NON-HTML</span> header, notice that &lt;setpageheader&gt; has <span class="parameter">show-this-page</span> = 1. This is because as soon as you call WriteHTML(), mPDF has added the first page, so this fixes the problem by forcing the header to show on the first page:</p>

{% highlight php %}
Example #4 - <setpageheader>
{% endhighlight %}

{% highlight php %}
<?php

$mpdf = new mPDF();

$html = '

<pageheader name="MyHeader1" content-left="" content-center="" content-right="My document" header-style="font-family: serif; font-size: 10pt; font-weight: bold; color: #000000;" line="on" />

<pagefooter name="MyFooter1" content-left="{DATE j-m-Y}" content-center="{PAGENO}/{nbpg}" content-right="My document" footer-style="font-family: serif; font-size: 8pt; font-weight: bold; font-style: italic; color: #000000;" />

<setpageheader name="MyHeader1" value="on" show-this-page="1" />

<setpagefooter name="MyFooter1" value="on" />

<div>Start of the document ... and all the rest</div>

';

$mpdf->WriteHTML($html);

$mpdf->Output();
{% endhighlight %}

<p>&nbsp;</p>

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

  odd-header-name: MyHeader1;

  odd-footer-name: MyFooter1;

}

@page chapter2 {

    odd-header-name: MyHeader2;

    odd-footer-name: MyFooter2;

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

<pageheader name="MyHeader1" content-right="My document" header-style="font-weight: bold; color: #000000;" line="on" />

<pagefooter name="MyFooter1" content-left="{DATE j-m-Y}" content-center="{PAGENO}/{nbpg}" footer-style="font-size: 8pt;" />

<pageheader name="MyHeader2" content-right="Chapter 2" header-style="font-weight: bold; color: #000000;" line="on" />

<pagefooter name="MyFooter2" content-left="{DATE j-m-Y}" content-center="2: {PAGENO}" footer-style="font-size: 8pt;" />

<div>Here is the text of the first chapter</div>

<div class="chapter2">Text of Chapter 2</div>

<div class="noheader">No-Header page</div>

</body></html>

';

$mpdf->WriteHTML($html);

$mpdf->Output();
{% endhighlight %}

<h2>Selecting a named header during the document</h2>

{% highlight php %}
Example #6 - AddPage()
{% endhighlight %}

{% highlight php %}
<?php

$mpdf->WriteHTML('Document text');

// In a SINGLE-SIDED document, the 'ODD' values set the default for all pages.

$mpdf->AddPage('','','','','','','','','','','', 'MyHeader2', '', 'MyFooter2', '', 1, 0, 1, 0);

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

<pagebreak odd-header-name="MyHeader2" odd-header-value="on" odd-footer-name="MyFooter2" odd-footer-value="on" />

<p>Text of Chapter 2/p>

<!-- TO TURN HEADER/FOOTER OFF FOR A NEW PAGE -->

<pagebreak odd-header-value="off" odd-footer-value="off" />

<p>No-Header page/p>

';

$mpdf->WriteHTML($html);
{% endhighlight %}

<h2>Table of Contents</h2>

{% highlight php %}
Example #8 - TOCpagebreak()
{% endhighlight %}

{% highlight php %}
<?php

$mpdf = new mPDF();

// Define headers here named 'MyHeader1', 'MyTOCHeader', 'MyTOCFooter', 'MyHeader2', 'MyFooter2' (as Example #1)

$mpdf->SetHeaderByName('MyHeader1');

$mpdf->WriteHTML('Introduction of document...');

$mpdf->TOCpagebreak ('', '', '', '', '', '', '', '', '', '', '', '', 'MyTOCHeader', '', 'MyTOCFooter', '', 1, 0 , 1, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'MyHeader2', '', 'MyFooter2', '', 1, 0,  1,0); 

$mpdf->WriteHTML('Main part of document...');

$mpdf->Output();
{% endhighlight %}

{% highlight php %}
Example #9 - <tocpagebreak>
{% endhighlight %}

{% highlight php %}
<?php

$html = '

<!-- Define headers etc. here named 'MyHeader1', 'MyTOCHeader', 'MyTOCFooter', 'MyHeader2', 'MyFooter2' (as Example #2) -->

<p>Introduction: Here starts the document</p>

<tocpagebreak toc-odd-header-name='MyTOCHeader' toc-odd-footer-name='MyTOCFooter' toc-odd-header-value="1" toc-odd-footer-value="1"odd-header-name='MyHeader2' odd-header-value="1"  odd-footer-name='MyFooter2' odd-footer-value="1" />

<p>Text of Chapter 2... </p>

';

$mpdf->WriteHTML($html);
{% endhighlight %}

<h2>See Also</h2>
<ul>
<li class="manual_boxlist"><a href="/reference/mpdf-functions/defheaderbyname.html">DefHeaderByName()</a></li>
<li class="manual_boxlist"><a href="/reference/mpdf-functions/deffooterbyname.html">DefFooterByName()</a></li>
<li class="manual_boxlist">&lt;<a href="/reference/html-control-tags/pageheader.html">pageheader</a>&gt;</li>
<li class="manual_boxlist">&lt;<a href="/reference/html-control-tags/pagefooter.html">pagefooter</a>&gt;</li>
<li class="manual_boxlist"><a href="/reference/mpdf-functions/setheaderbyname.html">SetHeaderByName()</a></li>
<li class="manual_boxlist"><a href="/reference/mpdf-functions/setfooterbyname.html">SetFooterByName()</a></li>
<li class="manual_boxlist">&lt;<a href="/reference/html-control-tags/setpageheader.html">setpageheader</a>&gt;</li>
<li class="manual_boxlist">&lt;<a href="/reference/html-control-tags/setpagefooter.html">setpagefooter</a>&gt;</li>
<li class="manual_boxlist"><a href="/reference/mpdf-functions/addpage.html">AddPage()</a></li>
<li class="manual_boxlist"><a href="/reference/mpdf-functions/tocpagebreak.html">TOCpagebreak()</a></li>
<li class="manual_boxlist">&lt;<a href="/reference/html-control-tags/pagebreak.html">pagebrea</a>k&gt;</li>
<li class="manual_boxlist">&lt;<a href="/reference/html-control-tags/tocpagebreak.html">tocpagebreak</a>&gt;</li>
<li class="manual_boxlist"><a href="/paging/using-page.html">@page</a></li>
</ul>
<p>&nbsp;</p>
</div>
</div>

