---
layout: page
title: Headers & Footers
parent_title: Headers & Footers
permalink: /headers-footers/headers-footers.html
modification_time: 2015-08-05T11:59:49+00:00
---

Page headers and page footers can be set for mPDF documents in a number of different ways. As mPDF has evolved, new
methods have been added.

<div class="alert alert-warning" role="alert" markdown="1">
  **Warning:** Use of CSS @page selector with any content will rewrite/remove headers not defined in the selector.
  See <a href="{{ " /paging/using-page.html " | prepend: site.baseurl }}">@page</a> selector documentation.
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** As from mPDF v6.0 Headers and Footers are all now written internally as HTMLheaders/footers.


  The **use of non-HTML headers and footers (methods 1 & 3) is deprecated**, but remains supported. Non-HTML headers
  and footers are converted in mPDF to HTML equivalents.


  Default non-HTML headers will not clash with HTML headers, but named non-HTML headers WILL clash with
  (and overwrite) HTML headers of the same (equivalent) name
  e.g. `MyFooter` (non-HTML) **overwrites** `html_MyFooter` (HTML).
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** As from mPDF v7.1 Headers and Footers support <a href="{{ " what-else-can-i-do/fixed-position-blocks.html " | prepend: site.baseurl }}">absolute positioning</a>, however <a href="https://github.com/mpdf/mpdf/issues/791">you cannot use both absolute and non-absolute positioned content together</a> in the Headers and Footers.
</div>

# Types

RUNTIME
: <span class="smallblock">RUNTIME</span> headers/footers are set as they are required throughout
the document.

**NAMED**
: <span class="smallblock">NAMED</span> headers/footers are defined at any time (before they are used) and
given a 'name'; they can then be used/re-used by reference to that name at any time. They can be defined by either PHP
script or custom HTML tags.

**Non-HTML**
: (deprecated) <span class="smallblock">NON-HTML</span> headers/footers are set by text strings with no HTML mark up
to define styles. Style changes (font-size, font-family, color) can be defined by changing mPDF variables.

**HTML**
: <span class="smallblock">HTML</span> headers/footers are written in standard HTML code. They can only be
defined outside HTML block tags (except `<body>`).

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** **HTML** headers/footers are more intensive of processing time and memory. This probably
  makes little difference for an average/short document, but may be important for long/complex documents.
</div>

# Methods

<table class="table">
<tbody>
<tr>
  <td> </td>
  <td> </td>
  <td><span class="smallblock">NON-HTML</span></td>
  <td><span class="smallblock">HTML</span></td>
</tr>
<tr>
  <td><span class="smallblock">RUNTIME</span></td>
  <td> </td>
  <td markdown="1">
  <a href="{{ " /headers-footers/method-1.html " | prepend: site.baseurl }}">**Method 1**</a> (deprecated)

  This is the simplest & quickest way to define a header/footer for the whole document if you need limited control over styling.

  <a href="{{ " /reference/mpdf-functions/setheader.html " | prepend: site.baseurl }}">SetHeader()</a>
  <a href="{{ " /reference/mpdf-functions/setfooter.html " | prepend: site.baseurl }}">SetFooter()</a>
  There are several variants of this method, using string or array. The simplest form does not allow different header/footer for <span class="smallblock">ODD</span> and <span class="smallblock">EVEN</span> pages.

  Style can be defined by variables:

  <a href="{{ " /reference/mpdf-variables/defaultheaderfontsize.html " | prepend: site.baseurl }}">$defaultheaderfontsize</a>
  <a href="{{ " /reference/mpdf-variables/defaultheaderfontstyle.html " | prepend: site.baseurl }}">$defaultheaderfontstyle</a>
  <a href="{{ " /reference/mpdf-variables/defaultheaderline.html " | prepend: site.baseurl }}">$defaultheaderline</a>
  <a href="{{ " /reference/mpdf-variables/defaultfooterfontsize.html " | prepend: site.baseurl }}">$defaultfooterfontsize</a>
  <a href="{{ " /reference/mpdf-variables/defaultfooterfontstyle.html " | prepend: site.baseurl }}">$defaultfooterfontstyle</a>
  <a href="{{ " /reference/mpdf-variables/defaultfooterline.html " | prepend: site.baseurl }}">$defaultfooterline</a>

</td>
<td markdown="1">
  <a href="{{ " /headers-footers/method-2.html " | prepend: site.baseurl }}">**Method 2**</a>

  The simplest & quickest way to program a header/footer once for the whole document that includes images or uses more complex layout styles.

  <a href="{{ " /reference/mpdf-functions/sethtmlheader.html " | prepend: site.baseurl }}">SetHTMLHeader()</a>
  <a href="{{ " /reference/mpdf-functions/sethtmlfooter.html " | prepend: site.baseurl }}">SetHTMLFooter()</a>

</td>
</tr>
<tr>
<td rowspan="3"><span class="smallblock">NAMED</span></td>
<td>Define</td>
<td markdown="1">

  <a href="{{ " /headers-footers/method-3.html " | prepend: site.baseurl }}">**Method 3**</a> (deprecated)

  This method is useful if you do not need the flexibility of an HTML header/footer, but are changing headers/footers throughout the document.

  <a href="{{ " /reference/mpdf-functions/defheaderbyname.html " | prepend: site.baseurl }}">DefHeaderByName()</a>
  <a href="{{ " /reference/mpdf-functions/deffooterbyname.html " | prepend: site.baseurl }}">DefFooterByName()</a>
  &lt;<a href="{{ " /reference/html-control-tags/pageheader.html " | prepend: site.baseurl }}">pageheader</a>&gt;
  &lt;<a href="{{ " /reference/html-control-tags/pagefooter.html " | prepend: site.baseurl }}">pagefooter</a>&gt;

</td>
<td markdown="1">

  <a href="{{ " /headers-footers/method-4.html " | prepend: site.baseurl }}">**Method 4**</a>

  This is the best way for complex headers/footers with the advantage of HTML code, but you can easily change the headers/footers at any time during the document.

  <a href="{{ " /reference/mpdf-functions/defhtmlheaderbyname.html " | prepend: site.baseurl }}">DefHTMLHeaderByName()</a>
  <a href="{{ " /reference/mpdf-functions/defhtmlfooterbyname.html " | prepend: site.baseurl }}">DefHTMLFooterByName()</a>
  &lt;<a href="{{ " /reference/html-control-tags/htmlpageheader.html " | prepend: site.baseurl }}">htmlpageheader</a>&gt;
  &lt;<a href="{{ " /reference/html-control-tags/htmlpagefooter.html " | prepend: site.baseurl }}">htmlpagefooter</a>&gt;

</td>
</tr>
<tr>
<td rowspan="2">Reference</td>
<td markdown="1">

  These methods are recommended when setting the header/footer at the **start** of a document.

  <a href="{{ " /reference/mpdf-functions/setheaderbyname.html " | prepend: site.baseurl }}">SetHeaderByName()</a>
  <a href="{{ " /reference/mpdf-functions/setfooterbyname.html " | prepend: site.baseurl }}">SetFooterByName()</a>
  &lt;<a href="{{ " /reference/html-control-tags/setpageheader.html " | prepend: site.baseurl }}">setpageheader</a>&gt;
  &lt;<a href="{{ " /reference/html-control-tags/setpagefooter.html " | prepend: site.baseurl }}">setpagefooter</a>&gt;
  <a href="{{ " /paging/using-page.html " | prepend: site.baseurl }}">@page</a>

</td>
<td markdown="1">

  These methods are recommended when setting the header/footer at the **start** of a document.

  <a href="{{ " /reference/mpdf-functions/sethtmlheaderbyname.html " | prepend: site.baseurl }}">SetHTMLHeaderByName()</a>
  <a href="{{ " /reference/mpdf-functions/sethtmlfooterbyname.html " | prepend: site.baseurl }}">SetHTMLFooterByName()</a>
  &lt;<a href="{{ " /reference/html-control-tags/sethtmlpageheader.html " | prepend: site.baseurl }}">sethtmlpageheader</a>&gt;
  &lt;<a href="{{ " /reference/html-control-tags/sethtmlpagefooter.html " | prepend: site.baseurl }}">sethtmlpagefooter</a>&gt;
  <a href="{{ " /paging/using-page.html " | prepend: site.baseurl }}">@page</a>
</td>
</tr>

<tr>
<td colspan="2" class="pmhTopCenter" markdown="1">

  Recommended when you wish to change the headers/footers **during** the document. These methods can reference any <span class="smallblock">NAMED</span> header or footer
  (<span class="smallblock">NON-HTML</span> or <span class="smallblock">HTML</span>)

  <a href="{{ " /reference/mpdf-functions/addpage.html " | prepend: site.baseurl }}">AddPage()</a>

  <a href="{{ " /reference/mpdf-functions/tocpagebreak.html " | prepend: site.baseurl }}">TOCpagebreak()</a>
  &lt;<a href="{{ " /reference/html-control-tags/pagebreak.html " | prepend: site.baseurl }}">pagebreak</a>&gt;
  &lt;<a href="{{ " /reference/html-control-tags/tocpagebreak.html " | prepend: site.baseurl }}">tocpagebreak</a>&gt;
  <a href="{{ " /paging/using-page.html " | prepend: site.baseurl }}">@page</a>

</td>
</tr>
</tbody>
</table>

In any of the options, `{PAGENO}` or `{DATE j-m-Y}` can be used - which will be replaced by the page number or current date.
`j-m-Y` can be replaced by any of the valid formats used in the PHP <a href="http://www.php.net/manual/en/function.date.php" target="_blank">date()</a> function.

# See also
  - <a href="{{ " /headers-footers/method-1.html " | prepend: site.baseurl }}">Method 1</a> RUNTIME non-HTML headers & footers (deprecated)
  - <a href="{{ " /headers-footers/method-2.html " | prepend: site.baseurl }}">Method 2</a> RUNTIME HTML headers & footers
  - <a href="{{ " /headers-footers/method-3.html " | prepend: site.baseurl }}">Method 3</a> NAMED non-HTML headers & footers (deprecated)
  - <a href="{{ " /headers-footers/method-4.html " | prepend: site.baseurl }}">Method 4</a> NAMED HTML headers & footers

 * <a href="{{ "/reference/mpdf-variables/forceportraitheaders.html" | prepend: site.baseurl }}">forcePortraitHeaders</a>
