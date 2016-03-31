---
layout: page
title: Using @page
parent_title: Paging
permalink: /paging/using-page.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 4.2)</p>

<div class="alert alert-info" role="alert"><b>Note:</b> If you are referencing an HTML header/footer, you must add the prefix 'html_' before the name.</div>
<p>&nbsp;</p>
<h2>About CSS Paged Media

</h2>
<p>The paged media model of CSS (http://www.w3.org/TR/1998/REC-CSS2-19980512/page.html) is used as a basis</p>

{% highlight php %}
   _____________________________

  |                         |   |<- sheet

  |                         |<--+-- crop marks

  |   ______________________  __

  |  |    A                 |   

  |  |    ______________    |<--+-- page box

  |  |   |   HEADER     |   |   

  |  | D |              | B |   

  |  |   |              |   |   

  |  |   |              |<--+---+-- page box minus margins = printed area

  |  |   |              |   |   

  |  |   |              |   |   

  |  |   |              |   |   

  |  |   |___FOOTER_____|   |   |   A: margin-top

  |  |    C                 |   |   B: margin-right

  |  |______________________|   |   C: margin-bottom

  |                             |   D: margin-left

  |_____________________________

{% endhighlight %}

<p>The dimensions set when calling a new mPDF() set the Sheet size.</p>
<p>The Page-box size is assumed to be the same as the sheet size by default.</p>
<p>The page-box margins are therefore by default the left/right/top and bottom margins.</p>
<p>NB Page-box margins are INSIDE the page-box (unlike block elements in CSS).</p>
<h2>Supported CSS selectors

</h2>
<p>The CSS <code>@page</code> selector is partially supported in mPDF with the following properties:</p>

{% highlight php %}
@page {

  size: 8.5in 11in;  <length>{1,2} | auto | portrait | landscape  ('em' 'ex' and % are not allowed; length values are width height

  margin: 10%; <any of the usual CSS values for margins> (% of page-box width for LR, of height for TB)

  margin-header: 5mm; <any of the usual CSS values for margins>

  margin-footer: 5mm; <any of the usual CSS values for margins>

  marks: crop | cross | none

  header: html_myHTMLHeaderOdd;

  footer: html_myHTMLFooterOdd;

  background: ...

  background-image: ...

  background-position ...

  background-repeat ...

  background-color ...

  background-gradient: ...

}
{% endhighlight %}

<h3>Notes

</h3>
<p>All properties except size are optional.</p>
<p>Three values for the <span class="parameter">size</span> property set the page box to the same size as the sheet:</p>
<p><code>auto</code>

&nbsp;&nbsp;&nbsp; The page box will be set to the size and orientation of the target sheet.</p>
<p><code>landscape</code>

&nbsp;&nbsp;&nbsp; Overrides the target's orientation. The page box is the same size as the target, and the longer sides are horizontal.</p>
<p><code>portrait</code>

&nbsp;&nbsp;&nbsp; Overrides the target's orientation. The page box is the same size as the target, and the shorter sides are horizontal.</p>
<p>&nbsp;</p>
<p>The header and footer names refer to named headers/footers set in your document.</p>
<p>NB The prefix "html_" used before the name is used to denote a header/footer defined as HTML code.</p>
<p>If a header/Footer name is set as _blank (or any name that hasn't been defined) it will turn off Headers/Footers.</p>
<p>Crop marks indicate where the page should be cut. Cross marks (also known as register marks or registration marks) are used to align sheets.</p>
<p>If you have defined @page {} in the CSS, then the values for the margins will override the ones set calling a new mPDF().</p>
<p>IMPORTANT - if you define a @page {} but don't specifiy margins, they will be set to the initial margin values of mPDF.</p>
<p>If you set a page(-box) smaller than the sheet size, the margins are increased by the difference between the page-box and sheet size - automatically centering the page-box inside the sheet.</p>
<p>If you change page-box orientation, the sheet orientation will follow.</p>
<p>Note that block-style elements - and any styling associated with it - will be terminated at a page-break.</p>
<h2>Pseudo-selectors

</h2>
<p>CSS pseudo-selectors :left :right and :first are recognised by mPDF and support the same properties as @page except:</p>
<ul>
<li>size</li>
<li>margin-left</li>
<li>margin-right

</li>
<li>odd-header-name</li>
<li>even-header-name</li>
<li>odd-footer-name</li>
<li>even-footer-name</li>
</ul>
<p>Example:</p>

{% highlight php %}
@page :right {

  margin-top: 3cm;

  margin-bottom: 4cm;

  header: html_myHeader;

}
{% endhighlight %}

<p>&nbsp;</p>
<p>Pseudo-selectors for page can change top, bottom, header and footer margins, but not left and right margins. mPDF can only cope with one set of (optionally mirrored) left/right margins.</p>
<p>Properties specified in a :first @page rule override those specified in :right (or :left) @page rules for the first page only</p>
<h2>Named @page selectors

</h2>
<p>Named pages are also supported e.g.:</p>

{% highlight php %}
@page rotated { size: landscape; }
{% endhighlight %}

<p>You can then refer to the named page in other CSS style sheets:</p>

{% highlight php %}
div.onitsside { page: rotated; page-break-before: right; }
{% endhighlight %}

<p><code>&lt;div class="onitsside"&gt;</code> will thus start a new right/odd page which will be in landscape.</p>
<h2>Setting a named page</h2>
<p>You can also set the page using parameters in:</p>
<ul>
<li>functions: <a href="{{ "/reference/mpdf-functions/addpage.html" | prepend: site.baseurl }}">AddPage()</a> and <a href="{{ "/reference/mpdf-functions/tocpagebreak.html" | prepend: site.baseurl }}">TOCpagebreak()</a></li>
<li>html tags: &lt;<a href="{{ "/reference/html-control-tags/tocpagebreak.html" | prepend: site.baseurl }}">tocpagebreak</a>&gt; &lt;<a href="{{ "/reference/html-control-tags/pagebreak.html" | prepend: site.baseurl }}">pagebreak</a>&gt; and &lt;<a href="{{ "/reference/html-control-tags/formfeed.html" | prepend: site.baseurl }}">formfeed</a>&gt;</li>
</ul>
<h3>page-break-before

</h3>
<p>The CSS property 'page-break-before' is useful in conjunction with a named page definition.</p>
<p class="code">page-break-before: always|left|right;</p>
<p><code>always</code>

&nbsp;&nbsp;&nbsp; Always force a page break before the generated block element.</p>
<p><code>left</code>

&nbsp;&nbsp;&nbsp; Force one or two page breaks before the generated block element so that the next page is formatted as a left/even page.</p>
<p><code>right</code>

&nbsp;&nbsp;&nbsp; Force one or two page breaks before the generated block element so that the next page is formatted as a right/odd page.</p>
<p>So, for example, <code>page-break-before: right</code> is equivalent of <code>AddPage(... 'NEXT-ODD'...)</code></p>
<h3>Example using Headers and Footers</h3>

{% highlight php %}
<?php

$mpdf=new mPDF(); 

$mpdf->useOddEven = 1;

$html = '

<html>

<head>

<style>

@page {

  size: auto;

  odd-header-name: html_myHeader1;

  even-header-name: html_myHeader2;

  odd-footer-name: html_myFooter1;

  even-footer-name: html_myFooter2;

}

@page chapter2 {

    odd-header-name: html_Chapter2HeaderOdd;

    even-header-name: html_Chapter2HeaderEven;

    odd-footer-name: html_Chapter2FooterOdd;

    even-footer-name: html_Chapter2FooterEven;

}

@page noheader {

    odd-header-name: _blank;

    even-header-name: _blank;

    odd-footer-name: _blank;

    even-footer-name: _blank;

}

div.chapter2 {

    page-break-before: right;

    page: chapter2;

}

div.noheader {

    page-break-before: right;

    page: noheader;

}

</style>

</head>

<body>

<htmlpageheader name="myHeader1" style="display:none">

<div style="text-align: right; border-bottom: 1px solid #000000; font-weight: bold; font-size: 10pt;">My document</div>

</htmlpageheader>

<htmlpageheader name="myHeader2" style="display:none">

<div style="border-bottom: 1px solid #000000; font-weight: bold;  font-size: 10pt;">My document</div>

</htmlpageheader>

<htmlpagefooter name="myFooter1" style="display:none">

<table width="100%" style="vertical-align: bottom; font-family: serif; font-size: 8pt; 

    color: #000000; font-weight: bold; font-style: italic;"><tr>

    <td width="33%"><span style="font-weight: bold; font-style: italic;">{DATE j-m-Y}</span></td>

    <td width="33%" align="center" style="font-weight: bold; font-style: italic;">{PAGENO}/{nbpg}</td>

    <td width="33%" style="text-align: right; ">My document</td>

    </tr></table>

</htmlpagefooter>

<htmlpagefooter name="myFooter2" style="display:none">

<table width="100%" style="vertical-align: bottom; font-family: serif; font-size: 8pt; 

    color: #000000; font-weight: bold; font-style: italic;"><tr>

    <td width="33%"><span style="font-weight: bold; font-style: italic;">My document</span></td>

    <td width="33%" align="center" style="font-weight: bold; font-style: italic;">{PAGENO}/{nbpg}</td>

    <td width="33%" style="text-align: right; ">{DATE j-m-Y}</td>

    </tr></table>

</htmlpagefooter>

<htmlpageheader name="Chapter2HeaderOdd" style="display:none">

<div style="text-align: right; border-bottom: 1px solid #000000; font-weight: bold; font-size: 10pt;">Chapter 2</div>

</htmlpageheader>

<htmlpageheader name="Chapter2HeaderEven" style="display:none">

<div style="border-bottom: 1px solid #000000; font-weight: bold; font-size: 10pt;">Chapter 2</div>

</htmlpageheader>

<htmlpagefooter name="Chapter2FooterOdd" style="display:none">

<div style="text-align: right; font-weight: bold; font-size: 8pt; font-style: italic;">Chapter 2 Footer</div>

</htmlpagefooter>

<htmlpagefooter name="Chapter2FooterEven" style="display:none">

<div style="font-weight: bold; font-size: 8pt; font-style: italic;">Chapter 2 Footer</div>

</htmlpagefooter>

Hallo World

<div class="chapter2">Text of Chapter 2</div>

<div class="noheader">No-Header page</div>

</body></html>

';

$mpdf->WriteHTML($html);

$mpdf->Output();
{% endhighlight %}

</div>
</div>

