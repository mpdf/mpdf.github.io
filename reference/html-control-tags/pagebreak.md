---
layout: page
title: pagebreak
parent_title: HTML control tags
permalink: /reference/html-control-tags/pagebreak.html
modification_time: 2015-08-05T12:01:25+00:00
---

<p>(mPDF &gt;= 1.0)</p>
<p>pagebreak — Add a new page</p>

# Description

<p class="manual_block">&lt;<b>pagebreak</b> [&nbsp;<span class="parameter">orientation</span> ] [&nbsp;<span class="parameter">type</span> ] [&nbsp;<span class="parameter">resetpagenum</span> ] [&nbsp;<span class="parameter">pagenumstyle</span> ] [&nbsp;<span class="parameter">suppress</span> ] 

[ <span class="parameter">margin-left</span> ] [ <span class="parameter">margin-right</span> ] [ <span class="parameter">margin-top</span> ] [ <span class="parameter">margin-bottom</span> ] [ <span class="parameter">margin-header</span> ] [ <span class="parameter">margin-footer</span> ]

[ <span class="parameter">odd-header-name</span> ] [ <span class="parameter">odd-header-value</span> ] [ <span class="parameter">even-header-name</span> ] [ <span class="parameter">even-header-value</span> ] [ <span class="parameter">odd-footer-name</span> ] [ <span class="parameter">odd-footer-value</span> ] [ <span class="parameter">even-footer-name</span> ] [ <span class="parameter">even-footer-value</span> ] [ <span class="parameter">page-selector</span> ] [ <span class="parameter">sheet-size</span> ] [ <span class="parameter">page-break-type</span> ] /&gt;</p>
<p>Add a new page to the document. All properties set by a pagebreak will continue on subsequent pages until reset.</p>
<p>The attribute <span class="parameter">type</span> can specify certain conditions which determine how many pages are added. If writing a <span class="smallblock">DOUBLE-SIDED</span> document, a conditional page-break (<span class="parameter">type</span>="E" or "O") will add a new page only if required to make the current page match the type (i.e. <span class="smallblock">ODD</span> or <span class="smallblock">EVEN</span>); a page-break with <span class="parameter">type</span>="NEXT-ODD" or "NEXT-EVEN" will add one or two pages as required to make the current page match the type (i.e. <span class="smallblock">ODD</span> or <span class="smallblock">EVEN</span>).</p>
<p>Number of pages added:</p>
<table class="table"> <tbody>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td colspan="2"><span class="smallblock">DOUBLE-SIDED</span></td>
</tr>
<tr>
<td><span class="parameter">type</span></td>
<td><span class="smallblock">SINGLE-SIDED</span> 

</td>
<td>Currently

<span class="smallblock">ODD</span> page</td>
<td>Currently

<span class="smallblock">EVEN</span> page</td>
</tr>
<tr>
<td><span class="smallblock">BLANK</span></td>
<td>1</td>
<td>1</td>
<td>1</td>
</tr>
<tr>
<td>O or ODD</td>
<td>0</td>
<td>0</td>
<td>1</td>
</tr>
<tr>
<td>E or EVEN</td>
<td>0</td>
<td>1</td>
<td>0</td>
</tr>
<tr>
<td>NEXT-ODD</td>
<td>1</td>
<td>2</td>
<td>1</td>
</tr>
<tr>
<td>NEXT-EVEN</td>
<td>1</td>
<td>1</td>
<td>2</td>
</tr>
</tbody> </table>

<div class="alert alert-info" role="alert"><strong>Note:</strong> If no new page is added, the other parameters will be ignored e.g. resetting page numbers/styles, margins and headers/footers. If 2 pages are added, any changes in page numbers/styles, margins and headers/footers will start on the final added page.</div>

<div class="alert alert-info" role="alert"><strong>Note:</strong> &lt;newpage&gt; and &lt;page_break&gt; are synonymous. &lt;pagebreak&gt; is the preferred form.</div>

<div class="alert alert-info" role="alert"><strong>Note:</strong> From mPDF &gt;= 3.0 the page numbering can be reset to any positive number. Prior to this, it was only possible to reset it to 1.</div>

# Attributes

<p class="manual_param_dt"><span class="parameter">orientation</span> = L|P|landscape|portrait</p>
<p class="manual_param_dd">This attribute specifies the orientation of the new page.

<span class="smallblock">BLANK</span> or omitted leaves the current orientation unchanged</p>
<p class="manual_param_dd"><b>Values</b> (case-insensitive)

L <i>or</i> landscape: Landscape

P <i>or</i> portrait:&nbsp;Portrait</p>
<p class="manual_param_dt"><span class="parameter">type</span> = E|O|even|odd|next-odd|next-even</p>
<ul> </li>
</ul>
<p class="manual_param_dd">If <span class="parameter">type</span> is specified when writiing a&nbsp;<span class="smallblock">DOUBLE-SIDED</span> document, the page-break is conditional; a new page will only be added if necessary to meet the specified condition.&nbsp;

If&nbsp;not writing a&nbsp;<span class="smallblock">DOUBLE-SIDED</span> document, a page-break <span class="parameter">type</span>="E" will be ignored, whilst a page-break <span class="parameter">type</span>="O" will always force a new page.

<span class="smallblock">BLANK</span> or omitted will force a new page unconditionally.</p>
<p class="manual_param_dd"><b>Values</b> (case-insensitive)

O <i>or</i> odd: Add a new page if required to make current page an&nbsp;<span class="smallblock">ODD</span>&nbsp;one.

E <i>or</i> even: Add a new page if required to make current page an&nbsp;<span class="smallblock">EVEN</span>&nbsp;one. 

NEXT-ODD: Add one or two pages as required to make the current page <span class="smallblock">ODD</span>.

NEXT-EVEN: Add one or two pages as required to make the current page <span class="smallblock">EVEN</span>.</p>
<p class="manual_param_dt"><span class="parameter">resetpagenum</span> = 1 - ∞</p>
<p class="manual_param_dd">Sets/resets the document page number to <span class="parameter">resetpagenum</span> starting on the new page. (The value must be a positive integer).

<span class="smallblock">BLANK</span>&nbsp;or omitted or 0 leaves the current&nbsp;page number sequence&nbsp;unchanged.</p>
<p class="manual_param_dt"><span class="parameter">pagenumstyle</span> = 1|A|a|I|i|[+ any value supported for list-style-type]</p>
<ul> </li>
</ul>
<p class="manual_param_dd">Sets/resets the page numbering style (values as for cf. <a href="{{ "/css-stylesheets/supported-css.html" | prepend: site.baseurl }}">lists</a>)

<span class="smallblock">BLANK</span>&nbsp;or omitted leaves the current&nbsp;page number&nbsp;style&nbsp;unchanged.</p>
<p class="manual_param_dd"><b>Values</b> (case-sensitive)

1: Decimal - 1,2,3,4...

A: Alpha uppercase - A,B,C,D...

a: Alpha lowercase - a,b,c,d...

I: Roman uppercase - I, II, III, IV...

i: Roman lowercase - i, ii, iii, iv...</p>
<p class="manual_param_dt"><span class="parameter">suppress</span> = on|off|1|0</p>
<ul> </li>
</ul>
<p class="manual_param_dd"><span class="parameter">suppress</span>=on will suppress document page numbers from the new page onwards (until <span class="parameter">suppress</span>=off is used)

<span class="smallblock">BLANK</span>&nbsp;or omitted leaves the current&nbsp;condition unchanged.</p>
<p class="manual_param_dd"><b>Values</b> (case-insensitive)

1 <i>or</i> on: Suppress (hide) page numbers from the new page forwards.

0 <i>or</i> off: Show page numbers from the new page forwards.</p>
<p class="manual_param_dt"><span class="parameter">margin-left</span>

<span class="parameter">margin-right</span>

<span class="parameter">margin-top</span>

<span class="parameter">margin-bottom</span>

<span class="parameter">margin-header</span>

<span class="parameter">margin-footer</span></p>
<p class="manual_param_dd">Sets the page margins from the new page forwards.

All values should be specified as <span class="smallblock">LENGTH</span> in any valid CSS form.

If you are writing a <span class="smallblock">DOUBLE-SIDED</span> document, the margin values will be used for <span class="smallblock">ODD</span> pages; left and right margins will be mirrored for <span class="smallblock">EVEN</span> pages.

<span class="smallblock">BLANK</span>&nbsp;or omitted leaves the current margin unchanged. NB "0" (zero) will set the margin to zero.</p>
<p class="manual_param_dt"><span class="parameter">odd-header-name</span>

<span class="parameter">even-header-name</span>

<span class="parameter">odd-footer-name</span>

<span class="parameter">even-footer-name</span></p>
<p class="manual_param_dd">Selects a header or footer by name to use from the new page forwards. The header/footer must already have been defined using &lt;<a href="{{ "/reference/html-control-tags/pageheader.html" | prepend: site.baseurl }}">pageheader</a>&gt;, &lt;<a href="{{ "/reference/html-control-tags/pagefooter.html" | prepend: site.baseurl }}">pagefooter</a>&gt;, &lt;<a href="{{ "/reference/html-control-tags/htmlpageheader.html" | prepend: site.baseurl }}">htmlpageheader</a>&gt;, or &lt;<a href="{{ "/reference/html-control-tags/htmlpagefooter.html" | prepend: site.baseurl }}">htmlpagefooter</a>&gt;.

If you are writing a <span class="smallblock">SINGLE-SIDED</span> document, the values for <span class="smallblock">ODD</span> will be used for all pages, and values for <span class="smallblock">EVEN</span> will be ignored.

<span class="smallblock">BLANK</span>&nbsp;or omitted leaves the header/footer unchanged. NB "" will not unset the header. Use <span class="parameter">odd-header-value</span> to turn the header off.</p>

<div class="alert alert-info" role="alert"><strong>Note:</strong> You must add the prefix 'html_' before the name if it is a HTMLHeader.</div>
<p class="manual_param_dt"><span class="parameter">odd-header-value</span>

<span class="parameter">even-header-</span><span class="parameter">value</span>

<span class="parameter">odd-footer-</span><span class="parameter">value</span>

<span class="parameter">even-footer-</span><span class="parameter">value</span></p>
<p class="manual_param_dd">Specify whether to show or hide the named header or footer from the new page forwards. The header/footer must already have been defined using &lt;<a href="{{ "/reference/html-control-tags/pageheader.html" | prepend: site.baseurl }}">pageheader</a>&gt;, &lt;<a href="{{ "/reference/html-control-tags/pagefooter.html" | prepend: site.baseurl }}">pagefooter</a>&gt;, &lt;<a href="{{ "/reference/html-control-tags/htmlpageheader.html" | prepend: site.baseurl }}">htmlpageheader</a>&gt;, or &lt;<a href="{{ "/reference/html-control-tags/htmlpagefooter.html" | prepend: site.baseurl }}">htmlpagefooter</a>&gt;.

If you are writing a <span class="smallblock">SINGLE-SIDED</span> document, the values for <span class="smallblock">ODD</span> will be used for all pages, and values for <span class="smallblock">EVEN</span> will be ignored.

<span class="smallblock">BLANK</span>&nbsp;or omitted or 0 leaves the header/footer state unchanged.</p>
<p class="manual_param_dd"><b>Values</b> (case-insensitive)

1 <i>or</i> on: Start using the selected header/footer from the new page onwards.

-1 <i>or</i> off: Stop using the selected header from the new page onwards.</p>
<p><span class="parameter">page-selector</span></p>
<p class="manual_param_dd">Select a named CSS @page.

<span class="smallblock">BLANK</span>&nbsp;or omitted or leaves the CSS page unchanged.</p>
<p class="manual_param_dd">See <a href="{{ "/paging/using-page.html" | prepend: site.baseurl }}">Using @page</a> for more information</p>
<p class="manual_param_dt"><span class="parameter">sheet-size</span></p>
<p class="manual_param_dd"><span class="parameter">sheet-size</span> can be specified either as a pre-defined page size, or as two <span class="smallblock">LENGTH</span> values separated by a space, representing width and height e.g. '210mm 297mm'. em, ex and % are not accepted. Note that this is different from the 'size' property of the page-box used with the CSS @page selector.

<span class="smallblock">DEFAULT</span>: <span class="smallblock">BLANK</span> - makes no change to the current sheet-size</p>
<p class="manual_param_dd"><b>Values</b> (case-insensitive)

A0 - A10, B0 - B10, C0 - C10

4A0, 2A0, RA0 - RA4, SRA0 - SRA4

Letter, Legal, Executive, Folio

Demy, Royal

A (Type A paperback 111x178mm)

B (Type B paperback 128x198mm)

&lt;<span class="smallblock">LENGTH</span>&gt;{2}</p>
<p class="manual_param_dd">All of the pre-defined values can be suffixed with "-L" to force a Landscape page orientation document e.g. "A4-L"</p>
<p class="manual_param_dt"><span class="parameter">page-break-type</span> = slice|clone|clonebycss</p>
<p class="manual_param_dd"><span class="parameter">slice </span>- no border and no padding are inserted at a break. The effect is as though the element were rendered with no breaks present, and then sliced by the breaks afterward

<span class="parameter">cloneall</span> - each page fragment is independently wrapped with the borders and padding of all open elements

<span class="parameter">clonebycss</span> - open elements which have the (custom) CSS property "box-decoration-break" set to "clone" are independently wrapped with their border and padding

<span class="smallblock">BLANK</span>&nbsp;or omitted - default page break type is used - as specified by <code>defaultPagebreakType</code></p>

# Changelog

<table class="table"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>1.3</td>
<td>
<p>Values NEXT-ODD and NEXT-EVEN for <span class="parameter">type</span> were added.</p>
<p>Parameters <span class="parameter">resetpagenum</span> , <span class="parameter">pagenumstyle</span> and <span class="parameter">suppress</span> were added.&nbsp;</p>
</td>
</tr>
<tr>
<td>2.0</td>
<td>Parameters <span class="parameter">margin-left</span> , <span class="parameter">margin-right</span> , <span class="parameter">margin-top</span> , <span class="parameter">margin-bottom</span> , <span class="parameter">margin-header</span> , <span class="parameter">margin-footer</span> , <span class="parameter">odd-header-name</span> , <span class="parameter">odd-header-value</span> , <span class="parameter">even-header-name</span> , <span class="parameter">even-header-value</span> , <span class="parameter">odd-footer-name</span> , <span class="parameter">odd-footer-value</span> , <span class="parameter">even-footer-name</span> , <span class="parameter">even-footer-value</span>&nbsp; were added.

</td>
</tr>
<tr>
<td>3.0</td>
<td><span class="parameter">resetpagenum</span> changed to allow positive integers above 1</td>
</tr>
<tr>
<td>4.2</td>
<td>Parameter <span class="parameter">page-selector</span> was added</td>
</tr>
<tr>
<td>4.3</td>
<td>Parameter <span class="parameter">sheet-size</span> was added</td>
</tr>
<tr>
<td>6.0</td>
<td>Parameter <span class="parameter">page-break-type</span> was added</td>
</tr>
</tbody> </table>

# Examples

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<html>

<p>Text of introduction...</p>

<pagebreak type="NEXT-ODD" resetpagenum="1" pagenumstyle="i" suppress="off" />

<p>Text of main book...</p>

</html>
{% endhighlight %}

{% highlight php %}
Example #2 - Defining new margins and page orientation
{% endhighlight %}

{% highlight php %}
<html>

<p>Text of introduction...</p>

<pagebreak orientation="landscape" margin-left="60mm" margin-right="40mm" margin-top="55mm" margin-bottom="30mm" margin-header="12mm" margin-footer="12mm" />

<p>Text of main book...</p>

</html>
{% endhighlight %}

{% highlight php %}
Example #3 - Changing headers/footers
{% endhighlight %}

{% highlight php %}
<html>

<pageheader name="myHeader1" content-center="My document" header-style="font-weight: bold;" line="on" />

<htmlpageheader name="myHeader2">

<div style="text-align: center; font-weight: bold;">My document</div>

</htmlpageheader>

<p>Text of introduction...</p>

<pagebreak type="NEXT-ODD" odd-header-name="myHeader1" odd-header-value="1" even-header-name="html_myHeader2" even-header-value="1" odd-footer-value="-1" even-footer-value="-1" />

<p>Text of main book...</p>

</html>
{% endhighlight %}

# Notes

<div class="alert alert-info" role="alert"><strong>Note:</strong> <b>pagebreak</b> can be used as an <acronym title="Hypertext Markup Language (code used to display Internet pages)">HTML</acronym> equivalent of <a href="{{ "/reference/mpdf-functions/addpage.html" | prepend: site.baseurl }}">AddPage()</a>.</div>

# See Also

<ul>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/addpage.html" | prepend: site.baseurl }}">AddPage()</a> - Add one or more (conditional) pages to the document</li>
<li class="manual_boxlist"><a href="{{ "/paging/page-breaks.html" | prepend: site.baseurl }}">Page breaks</a></li>
<li class="manual_boxlist">&lt;<a href="{{ "/reference/html-control-tags/formfeed.html" | prepend: site.baseurl }}">formfeed</a>&gt; - Forces a new page keeping current HTML tags/CSS active</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/restoreblockpagebreaks.html" | prepend: site.baseurl }}">restoreBlockPageBreaks</a> - Configure pagebreak to act like formfeed</li>
</ul>
