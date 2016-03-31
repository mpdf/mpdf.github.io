---
layout: page
title: Headers & Footers
parent_title: Headers & Footers
permalink: /headers-footers/headers-footers.html
modification_time: 2015-08-05T11:59:49+00:00
---

<p>Page headers and page footers can be set for mPDF documents in a number of different ways. As mPDF has evolved, new methods have been added.</p>

<div class="alert alert-info" role="alert"><strong>Note:</strong> As from mPDF v6.0 Headers and Footers are all now written internally as HTMLheaders/footers. The use of non-HTML headers and footers (methods 1 &amp; 3) is depracated, but remains supported. Non-HTML headers and footers are converted in mPDF to HTML equivalents. Default non-HTML headers will not clash with HTML headers, but named non-HTML headers WILL clash with (and overwrite) HTML headers of the same (equivalent) name e.g. html_MyFooter == MyFooter (non-HTML).</div>

# Types

<p><b>RUNTIME</b> - <span class="smallblock">RUNTIME</span> headers/footers are set as they are required throughout the document.</p>
<p><b>NAMED</b> - <span class="smallblock">NAMED</span> headers/footers are defined at any time (before they are used) and given a 'name'; they can then be used/re-used by reference to that name at any time. They can be defined by either PHP script or custom HTML tags.</p>
<p><b>Non-HTML</b> - <span class="smallblock">NON-HTML</span> headers/footers are set by text strings with no HTML mark up to define styles. Style changes (font-size, font-family, color) can be defined by changing mPDF variables.</p>
<p><b>HTML</b> - <span class="smallblock">HTML</span> headers/footers are written in standard HTML code. They can only be defined outside HTML block tags (except &lt;body&gt;).</p>

<div class="alert alert-info" role="alert"><strong>Note:</strong> &nbsp; <b>HTML</b> headers/footers are more intensive of processing time and memory. This probably makes little difference for an average/short document, but may be important for long/complex documents.</div>

# Methods

<table class="table"> <tbody>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><span class="smallblock">NON-HTML</span></td>
<td><span class="smallblock">HTML</span></td>
</tr>
<tr>
<td><span class="smallblock">RUNTIME</span></td>
<td>

</td>
<td>
<p><b><a href="{{ "/headers-footers/method-1.html" | prepend: site.baseurl }}">Method 1</a></b></p>
<p><i>This is the simplest &amp; quickest way to define a header/footer for the whole document if you need limited control over styling.</i></p>

<p><a href="{{ "/reference/mpdf-functions/setheader.html" | prepend: site.baseurl }}">SetHeader()</a></p>
<p><a href="{{ "/reference/mpdf-functions/setfooter.html" | prepend: site.baseurl }}">SetFooter()</a></p>

<p>There are several variants of this method, using string or array. The simplest form does not allow different header/footer for <span class="smallblock">ODD</span> and <span class="smallblock">EVEN</span> pages.</p>

<p>Style can be defined by variables:</p>
<p><a href="{{ "/reference/mpdf-variables/defaultheaderfontsize.html" | prepend: site.baseurl }}">$defaultheaderfontsize</a>

<a href="{{ "/reference/mpdf-variables/defaultheaderfontstyle.html" | prepend: site.baseurl }}">$defaultheaderfontstyle</a>

<a href="{{ "/reference/mpdf-variables/defaultheaderline.html" | prepend: site.baseurl }}">$defaultheaderline</a></p>
<p><a href="{{ "/reference/mpdf-variables/defaultfooterfontsize.html" | prepend: site.baseurl }}">$defaultfooterfontsize</a>

<a href="{{ "/reference/mpdf-variables/defaultfooterfontstyle.html" | prepend: site.baseurl }}">$defaultfooterfontstyle</a>

<a href="{{ "/reference/mpdf-variables/defaultfooterline.html" | prepend: site.baseurl }}">$defaultfooterline</a></p>
</td>
<td>
<p><b><a href="{{ "/headers-footers/method-2.html" | prepend: site.baseurl }}">Method 2</a></b></p>
<p><i>T</i><i>he simplest &amp; quickest way to program a header/footer once for the whole document that includes images or uses more complex layout styles.</i></p>

<p><a href="{{ "/reference/mpdf-functions/sethtmlheader.html" | prepend: site.baseurl }}">SetHTMLHeader() </a>

<a href="{{ "/reference/mpdf-functions/sethtmlfooter.html" | prepend: site.baseurl }}">SetHTMLFooter()</a></p>
</td>
</tr>
<tr>
<td rowspan="3"><span class="smallblock">NAMED</span></td>
<td>Define</td>
<td>
<p><b><a href="{{ "/headers-footers/method-3.html" | prepend: site.baseurl }}">Method 3</a></b></p>
<p><i>This method is useful if you do not need the flexibility of an HTML header/footer, but are changing headers/footers throughout the document</i><i>.</i></p>

<p><a href="{{ "/reference/mpdf-functions/defheaderbyname.html" | prepend: site.baseurl }}">DefHeaderByName()</a></p>
<p><a href="{{ "/reference/mpdf-functions/deffooterbyname.html" | prepend: site.baseurl }}">DefFooterByName()</a></p>

<p>&lt;<a href="{{ "/reference/html-control-tags/pageheader.html" | prepend: site.baseurl }}">pageheader</a>&gt;</p>
<p>&lt;<a href="{{ "/reference/html-control-tags/pagefooter.html" | prepend: site.baseurl }}">pagefooter</a>&gt;</p>
</td>
<td>
<p><b><a href="{{ "/headers-footers/method-4.html" | prepend: site.baseurl }}">Method 4</a></b></p>
<p><i>This is the best way for complex headers/footers with the advantage of HTML code, but you can easily change the headers/footers at any time during the document.</i></p>

<p><a href="{{ "/reference/mpdf-functions/defhtmlheaderbyname.html" | prepend: site.baseurl }}">DefHTMLHeaderByName()</a></p>
<p><a href="{{ "/reference/mpdf-functions/defhtmlfooterbyname.html" | prepend: site.baseurl }}">DefHTMLFooterByName()</a></p>

<p>&lt;<a href="{{ "/reference/html-control-tags/htmlpageheader.html" | prepend: site.baseurl }}">htmlpageheader</a>&gt;</p>
<p>&lt;<a href="{{ "/reference/html-control-tags/htmlpagefooter.html" | prepend: site.baseurl }}">htmlpagefooter</a>&gt;</p>
</td>
</tr>
<tr>
<td rowspan="2">Reference

</td>
<td>
<p><i>These methods are recommended when setting the header/footer at the start of a document.

</i></p>
<p><a href="{{ "/reference/mpdf-functions/setheaderbyname.html" | prepend: site.baseurl }}">SetHeaderByName()</a></p>
<p><a href="{{ "/reference/mpdf-functions/setfooterbyname.html" | prepend: site.baseurl }}">SetFooterByName()</a></p>
<p>&lt;<a href="{{ "/reference/html-control-tags/setpageheader.html" | prepend: site.baseurl }}">setpageheader</a>&gt;</p>
<p>&lt;<a href="{{ "/reference/html-control-tags/setpagefooter.html" | prepend: site.baseurl }}">setpagefooter</a>&gt;

<a href="{{ "/paging/using-page.html" | prepend: site.baseurl }}">@page</a></p>
</td>
<td>
<p><i>These methods are recommended when setting the header/footer at the start of a document.</i></p>
<p><a href="{{ "/reference/mpdf-functions/sethtmlheaderbyname.html" | prepend: site.baseurl }}">SetHTMLHeaderByName()</a></p>
<p><a href="{{ "/reference/mpdf-functions/sethtmlfooterbyname.html" | prepend: site.baseurl }}">SetHTMLFooterByName()</a></p>
<p>&lt;<a href="{{ "/reference/html-control-tags/sethtmlpageheader.html" | prepend: site.baseurl }}">sethtmlpageheader</a>&gt;</p>
<p>&lt;<a href="{{ "/reference/html-control-tags/sethtmlpagefooter.html" | prepend: site.baseurl }}">sethtmlpagefooter</a>&gt;

<a href="{{ "/paging/using-page.html" | prepend: site.baseurl }}">@page</a></p>
</td>
</tr>
<tr>
<td colspan="2" class="pmhTopCenter">
<p><i>Recommended when you wish to change the headers/footers during the document.</i></p>
<p>These methods can reference any <span class="smallblock">NAMED</span> header or footer (<span class="smallblock">NON-HTML</span> or <span class="smallblock">HTML</span>)</p>

<p><a href="{{ "/reference/mpdf-functions/addpage.html" | prepend: site.baseurl }}">AddPage()</a></p>
<p><a href="{{ "/reference/mpdf-functions/tocpagebreak.html" | prepend: site.baseurl }}">TOCpagebreak()</a></p>
<p>&lt;<a href="{{ "/reference/html-control-tags/pagebreak.html" | prepend: site.baseurl }}">pagebrea</a>k&gt;</p>
<p>&lt;<a href="{{ "/reference/html-control-tags/tocpagebreak.html" | prepend: site.baseurl }}">tocpagebreak</a>&gt;</p>
<p><a href="{{ "/paging/using-page.html" | prepend: site.baseurl }}">@page</a></p>
</td>
</tr>
</tbody> </table>
<p>In any of the options, {PAGENO} or {DATE j-m-Y} can be used - which will be replaced by the page number or current date. j-m-Y can be replaced by any of the valid formats used in the php <a href="http://www.php.net/manual/en/function.date.php" target="_blank">date()</a> function.</p>
<p>See also: <a href="{{ "/reference/mpdf-variables/forceportraitheaders.html" | prepend: site.baseurl }}">forcePortraitHeaders</a></p>
