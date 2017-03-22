---
layout: page
title: Method 1
parent_title: Headers & Footers
permalink: /headers-footers/method-1.html
modification_time: 2015-08-05T11:59:50+00:00
---

This uses <span class="smallblock">RUNTIME</span> <span class="smallblock">NON-HTML</span> headers &amp; footers. 
This is the simplest &amp; quickest way to define a header/footer for the whole document if you need limited control 
over styling. There are several variants of this method, using string or array. The simplest form does not allow 
different header/footer for <span class="smallblock">ODD</span> and <span class="smallblock">EVEN</span> pages.

# Setting a Header/Footer at the start of a document

## Variant #1 (Simplest form)

Use a single command with a string as parameter, to set a header/footer at the right margin of the page on 
<span class="smallblock">ODD</span> pages, and left margin for <span class="smallblock">EVEN</span> pages 
(if <span class="smallblock">DOUBLE-SIDED</span> document), or right margin for all pages.

{% highlight php %}
<?php

$mpdf = new \Mpdf\Mpdf();

$mpdf->SetHeader('Document Title');

$mpdf->WriteHTML('Document text');

$mpdf->Output();
{% endhighlight %}

## Variant #2 (Split string)

Set a header/footer in three parts. The text string defines three strings divided by '|' which will set a header at the 
left/centre/right margin of the page on <span class="smallblock">ODD</span> pages and right/centre/left margin for 
<span class="smallblock">EVEN</span> pages (if  <span class="smallblock">DOUBLE-SIDED</span> document), or 
left/centre/right margin for all pages. Note the use of {PAGENO} which can be used in any type of header or footer.

{% highlight php %}
<?php

$mpdf = new \Mpdf\Mpdf();

$mpdf->SetHeader('Document Title|Center Text|{PAGENO}');

$mpdf->SetFooter('Document Title');

$mpdf->WriteHTML('Document text');

$mpdf->Output();
{% endhighlight %}

## Variant #3 (Controlling style with variables)

This is the same as Variant #2, but you can control some aspects of style for the headers/footers by altering certain 
mPDF variables.

{% highlight php %}
<?php

$mpdf = new \Mpdf\Mpdf();

$mpdf->SetHeader('Document Title|Center Text|{PAGENO}');

$mpdf->SetFooter('Document Title');

$mpdf->defaultheaderfontsize=10;

$mpdf->defaultheaderfontstyle='B';

$mpdf->defaultheaderline=0;

$mpdf->defaultfooterfontsize=10;

$mpdf->defaultfooterfontstyle='BI';

$mpdf->defaultfooterline=0;

$mpdf->WriteHTML('Document text');

$mpdf->Output();
{% endhighlight %}

## Variant #4 (Array) - DEPRECATED

Set a header/footer using an array of values. This allows greater control over styling. Recommended to use Variant #5, 
which is very similar, but specifies <span class="smallblock">ODD</span> and <span class="smallblock">EVEN</span> 
forms separately.

{% highlight php %}
<?php

$arr = array (
  'odd' => array (
    'L' => array (
      'content' => '',
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
  ),
  'even' => array ()
);

$mpdf->SetHeader($arr);
{% endhighlight %}

## Variant #5 (Array)

Set a header/footer using an array of values. This allows greater control over styling.  
<span class="smallblock">ODD</span> and <span class="smallblock">EVEN</span> headers/footers are set separately 
using the second parameter of 
<a href="{{ "/reference/mpdf-functions/setheader.html" | prepend: site.baseurl }}">SetHeader()</a>.

{% highlight php %}
<?php

$arr = array (
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

$mpdf->SetHeader($arr, 'O');  // O for Odd header
{% endhighlight %}

<div class="alert alert-info" role="alert" markdown="1">
    **Note:** When you are using the array form, any values that are not defined in the array use the 
    document default values, not the defaultheader values (like the previous Simple form)  i.e. an undefined font-size 
    uses the document default of 10pt, not the <span class="parameter">$defaultheaderfontsize</span> of 8pt.
</div>

Although this looks complex, you could change one value easily throughout a document:

{% highlight php %}
<?php

// following from above...

$mpdf->AddPage();

$arr['L']['content'] = 'Chapter 2';

$mpdf->SetHeader($arr, 'O');
{% endhighlight %}

# Changing Header/Footer during the document

This is where <span class="smallblock">RUNTIME</span> headers/footers get much more clumsy to use, whichever of the 
Variants above you are using. When a new page is added to the document (e.g. using 
<a href="{{ "/reference/mpdf-functions/addpage.html" | prepend: site.baseurl }}">AddPage()</a> or 
&lt;<a href="{{ "/reference/html-control-tags/pagebreak.html" | prepend: site.baseurl }}">pagebreak</a>&gt;) 
mPDF does the following:

- writes the footer for the current page</li>
- starts the new page</li>
- writes the header for the new page</li>

Therefore to use any <span class="smallblock">RUNTIME</span> method you need to:

- change the header before the page-break
- change the footer after the page-break

{% highlight php %}
<?php

$mpdf = new \Mpdf\Mpdf();

$mpdf->SetHeader('First section header');
$mpdf->SetFooter('First section footer');
$mpdf->WriteHTML('First section text...');

// Set the new Header before you AddPage
$mpdf->SetHeader('Second section header');
$mpdf->AddPage();

// Set the new Footer after you AddPage
$mpdf->SetFooter('Second section footer');
$mpdf->WriteHTML('Second section text...');

$mpdf->Output();
{% endhighlight %}

It gets even more complicated if you are using <span class="smallblock">DOUBLE-SIDED</span> document and you want to
 start the new section of your book on an <span class="smallblock">ODD</span> page:

{% highlight php %}
<?php

$mpdf = new \Mpdf\Mpdf();

$mpdf->useOddEven = true;

$mpdf->SetHeader('First section header');
$mpdf->SetFooter('First section footer');
$mpdf->WriteHTML('First section text...');

// Use a conditional page-break to ensure you are on an EVEN page before changing the Header
$mpdf->AddPage('','E');

// Now you know that this page-break takes you to an ODD page
$mpdf->SetHeader('Second section header');

$mpdf->AddPage();
$mpdf->SetFooter('Second section footer');
$mpdf->WriteHTML('Second section text...');

$mpdf->Output();
{% endhighlight %}

# Table of Contents

Using <span class="smallblock">RUNTIME</span> headers/footers with a Table of Contents gets so clumsy, it is 
recommended that you consider one of the <span class="smallblock">NAMED</span> methods. Here for the record is 
how you would do it:

{% highlight php %}
<?php

$mpdf = new \Mpdf\Mpdf();

$mpdf->useOddEven = true;

// Set header and footer arrays for section:Introduction
$intro_header_odd_array = array(...);
$intro_header_even_array = array(...);
$intro_footer_odd_array = array(...);
$intro_footer_even_array = array(...);

// Set header and footer arrays for section:Main
$main_header_odd_array = array(...);
$main_header_even_array = array(...);
$main_footer_odd_array = array(...);
$main_footer_even_array = array(...);

// Set the headers/footers for the Introduction
$mpdf->setHeader($intro_header_odd_array,'O');
$mpdf->setHeader($intro_header_even_array,'E');
$mpdf->setFooter($intro_footer_odd_array,'O');
$mpdf->setFooter($intro_footer_even_array,'E');

$mpdf->AddPage('', '', 1, '', 'on');    // suppress page numbering for the introduction
$mpdf->WriteHTML('Introduction of document...');

$mpdf->AddPage('','E');

$mpdf->setHeader($main_header_odd_array,'O');
$mpdf->setHeader($main_header_even_array,'E');

$mpdf->TOCpagebreak('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', $toc-preHTML, $toc-postHTML, $toc-bookmarkText, 1, 'A', 'off'); // sets numbering to start at A

$mpdf->setFooter($main_footer_odd_array,'O');
$mpdf->setFooter($main_footer_even_array,'E');

$mpdf->WriteHTML('Main part of document...');

$mpdf->Output();
{% endhighlight %}

... and for historical purposes using deprecated TOC functions:

{% highlight php %}
<?php

$mpdf = new \Mpdf\Mpdf();

$mpdf->useOddEven = true;

// Set header and footer arrays for section:Introduction
$intro_header_odd_array = array(...);
$intro_header_even_array = array(...);
$intro_footer_odd_array = array(...);
$intro_footer_even_array = array(...);

// Set header and footer arrays for section:Main
$main_header_odd_array = array(...);
$main_header_even_array = array(...);
$main_footer_odd_array = array(...);
$main_footer_even_array = array(...);

// Set the headers/footers for the Introduction
$mpdf->setHeader($intro_header_odd_array,'O');
$mpdf->setHeader($intro_header_even_array,'E');
$mpdf->setFooter($intro_footer_odd_array,'O');
$mpdf->setFooter($intro_footer_even_array,'E');

$mpdf->AddPage('', '', 1, '', 'on');    // suppress page numbering for the introduction

$mpdf->WriteHTML('Introduction of document...');

// Set some variables for the ToC - these are all now deprecated

$mpdf->TOCheader = array();
$mpdf->TOCfooter = array();
$mpdf->TOCpreHTML = '<h2>Table of Contents</h2>');
$mpdf->TOCpostHTML = 'Text to come after the contenst list';
$mpdf->TOCbookmarkText = 'Contents';

$mpdf->AddPage('','E');
$mpdf->setHeader($main_header_odd_array,'O');
$mpdf->setHeader($main_header_even_array,'E');

$mpdf->AddPage('', '', 1, 'i', 'off');    // sets page numbering to start here at 1
$mpdf->setFooter($main_footer_odd_array,'O');
$mpdf->setFooter($main_footer_even_array,'E');

$mpdf->TOC(($tocfont, $tocfontsize, $tocindent, $resetpagenum, $pagenumstyle, $suppress, $toc_orientation, $TOCusePaging, $TOCuseLinking);

$mpdf->WriteHTML('Main part of document...');

$mpdf->Output();
{% endhighlight %}

# See Also

- <a href="{{ "/reference/mpdf-functions/setfooter.html" | prepend: site.baseurl }}">SetHeader()</a>
- <a href="{{ "/reference/mpdf-functions/setfooter.html" | prepend: site.baseurl }}">SetFooter()</a>
- <a href="{{ "/reference/mpdf-variables/defaultheaderfontsize.html" | prepend: site.baseurl }}">$defaultheaderfontsize</a>
- <a href="{{ "/reference/mpdf-variables/defaultheaderfontstyle.html" | prepend: site.baseurl }}">$defaultheaderfontstyle</a>
- <a href="{{ "/reference/mpdf-variables/defaultheaderline.html" | prepend: site.baseurl }}">$defaultheaderline</a>
- <a href="{{ "/reference/mpdf-variables/defaultfooterfontsize.html" | prepend: site.baseurl }}">$defaultfooterfontsize</a>
- <a href="{{ "/reference/mpdf-variables/defaultfooterline.html" | prepend: site.baseurl }}">$defaultfooterfontstyle</a>
- <a href="{{ "/reference/mpdf-variables/defaultfooterline.html" | prepend: site.baseurl }}">$defaultfooterline</a>

