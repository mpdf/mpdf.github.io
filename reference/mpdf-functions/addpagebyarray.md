---
layout: page
title: AddPageByArray()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/addpagebyarray.html
modification_time: 2015-08-05T12:00:39+00:00
---

(mPDF >= 5.0)

AddPageByArray — Add a new page using an array of parameters

# Description

void **AddPageByArray** ([ array <span class="parameter">$arr</span> ])

Add a new page to the document using an array of parameters which are all optional. The parameter <span class="parameter">$type</span> can specify certain conditions which determine how many pages are added. If writing a <span class="smallblock">DOUBLE-SIDED</span> document, a conditional page-break (<span class="parameter">$type</span>="E" or "O") will add a new page only if required to make the current page match the type (i.e. <span class="smallblock">ODD</span> or <span class="smallblock">EVEN</span>); a page-break with <span class="parameter">$type</span>="NEXT-ODD" or "NEXT-EVEN" will add one or two pages as required to make the current page match the type (i.e. <span class="smallblock">ODD</span> or <span class="smallblock">EVEN</span>).

Number of pages added:

<table class="table"> <tbody>
<tr>
<td> </td>
<td> </td>
<td colspan="2"><span class="smallblock">DOUBLE-SIDED</span></td>
</tr>
<tr>
<td><span class="parameter">$type</span></td>
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

<div class="alert alert-info" role="alert" markdown="1">
	**Note:** If no new page is added, the other parameters will be ignored e.g. resetting page numbers/styles, margins and headers/footers. If 2 pages are added, the changes in page numbers/styles, margins and headers/footers will start on the final added page.</div>

<div class="alert alert-info" role="alert" markdown="1">
	**Note:** From mPDF >= 3.0 the page numbering can be reset to any positive number. Prior to this, it was only possible to reset it to 1.</div>

<div class="alert alert-info" role="alert" markdown="1">
	**Note:** The description below uses the same parameter names as used in AddPage(), but these were not recognised in mPDF &lt; 5.4  The examples use different parameter names. From mPDF >=5.4 both are supported. See below for a list of alternatives.</div>

# Parameters

<span class="parameter">$orientation</span> = L|P

This attribute specifies the orientation of the new page.

<span class="smallblock">BLANK</span> or omitted leaves the current orientation unchanged

**Values** (case-insensitive)

L *or* landscape: Landscape

P *or* portrait: Portrait

<span class="parameter">$type</span> = E|O|even|odd|next-odd|next-even

If <span class="parameter">$type</span> is specified as "E" or "O" when writing a <span class="smallblock">DOUBLE-SIDED</span> document, the page-break is conditional; a new page will only be added if necessary to meet the specified condition. 

If <span class="parameter">$type</span> is specified as "NEXT-ODD" or "NEXT-EVEN" when writing a <span class="smallblock">DOUBLE-SIDED</span> document, either one or two pages are added as necessary to meet the specified condition.

If not writing a <span class="smallblock">DOUBLE-SIDED</span> document, a page-break <span class="parameter">$type</span>="E" or "O" will be ignored.

<span class="smallblock">BLANK</span> or omitted will force a new page unconditionally.

**Values** (case-insensitive)

O *or* ODD: Add a new page if required to make current page an <span class="smallblock">ODD</span> one.

E *or* EVEN: Add a new page if required to make current page an <span class="smallblock">EVEN</span> one.

NEXT-ODD: Add one or two pages as required to make the current page <span class="smallblock">ODD</span>.

NEXT-EVEN: Add one or two pages as required to make the current page <span class="smallblock">EVEN</span>.

<span class="parameter">$resetpagenum</span> = 1 - ∞

Sets/resets the document page number to <span class="parameter">$resetpagenum</span> starting on the new page. (The value must be a positive integer).

<span class="smallblock">BLANK</span> or omitted or 0 leaves the current page number sequence unchanged.

<span class="parameter">$pagenumstyle</span> = 1|A|a|I|i

Sets/resets the page numbering style (values as for lists)

<span class="smallblock">BLANK</span> or omitted leaves the current page number style unchanged.

**Values** (case-sensitive)

1: Decimal - 1,2,3,4...

A: Alpha uppercase - A,B,C,D...

a: Alpha lowercase - a,b,c,d...

I: Roman uppercase - I, II, III, IV...

i: Roman lowercase - i, ii, iii, iv...

<span class="parameter">$suppress</span> = on|off|1|0

<span class="parameter">$suppress</span>=on will suppress document page numbers from the new page onwards (until <span class="parameter">$suppress</span>=off is used)

<span class="smallblock">BLANK</span> or omitted leaves the current condition unchanged.

**Values** (case-insensitive)

1 *or* on: Suppress (hide) page numbers from the new page forwards.

0 *or* off: Show page numbers from the new page forwards.

<span class="parameter">$margin-left</span>

<span class="parameter">$margin-right</span>

<span class="parameter">$margin-top</span>

<span class="parameter">$margin-bottom</span>

<span class="parameter">$margin-header</span>

<span class="parameter">$margin-footer</span>

Sets the page margins from the new page forwards.

All values should be specified as <span class="smallblock">LENGTH</span> in millimetres.

If you are writing a <span class="smallblock">DOUBLE-SIDED</span> document, the margin values will be used for <span class="smallblock">ODD</span> pages; left and right margins will be mirrored for <span class="smallblock">EVEN</span> pages.

<span class="smallblock">BLANK</span> or omitted leaves the current margin unchanged. NB "0" (zero) will set the margin to zero.

<span class="parameter">$odd-header-name</span>

<span class="parameter">$even-header-name</span>

<span class="parameter">$odd-footer-name</span>

<span class="parameter">$even-footer-name</span>

Selects a header or footer by name to use from the new page forwards. The header/footer must already have been defined using <a href="{{ "/reference/mpdf-functions/defheaderbyname.html" | prepend: site.baseurl }}">DefHeaderByName()</a>, <a href="{{ "/reference/mpdf-functions/deffooterbyname.html" | prepend: site.baseurl }}">DefFooterByName()</a>, <a href="{{ "/reference/mpdf-functions/defhtmlheaderbyname.html" | prepend: site.baseurl }}">DefHTMLHeaderByName()</a>, or <a href="{{ "/reference/mpdf-functions/defhtmlfooterbyname.html" | prepend: site.baseurl }}">DefHTMLFooterByName()</a>.

If you are writing a <span class="smallblock">SINGLE-SIDED</span> document, the values for <span class="smallblock">ODD</span> will be used for all pages, and values for <span class="smallblock">EVEN</span> will be ignored.

<span class="smallblock">BLANK</span> or omitted leaves the header/footer unchanged. NB <span class="smallblock">BLANK</span> will not unset the header. Set <span class="parameter">$odd-header-value</span> to -1 to turn the header off.

<div class="alert alert-info" role="alert" markdown="1">
	**Note:** You must add the prefix 'html_' before the name if it is a HTMLHeader.</div>

<span class="parameter">$odd-header-value</span>

<span class="parameter">$even-header-</span><span class="parameter">$value</span>

<span class="parameter">$odd-footer-</span><span class="parameter">$value</span>

<span class="parameter">$even-footer-</span><span class="parameter">$value</span>

Specify whether to show or hide the named header or footer from the new page forwards. The header/footer must already have been defined using <a href="{{ "/reference/mpdf-functions/defheaderbyname.html" | prepend: site.baseurl }}">DefHeaderByName()</a>, <a href="{{ "/reference/mpdf-functions/deffooterbyname.html" | prepend: site.baseurl }}">DefFooterByName()</a>, <a href="{{ "/reference/mpdf-functions/defhtmlheaderbyname.html" | prepend: site.baseurl }}">DefHTMLHeaderByName()</a>, or <a href="{{ "/reference/mpdf-functions/defhtmlfooterbyname.html" | prepend: site.baseurl }}">DefHTMLFooterByName()</a>.

If you are writing a <span class="smallblock">SINGLE-SIDED</span> document, the values for <span class="smallblock">ODD</span> will be used for all pages, and values for <span class="smallblock">EVEN</span> will be ignored.

<span class="smallblock">BLANK</span> or omitted or 0 leaves the header/footer state unchanged.

**Values** (case-insensitive)

1 *or* on: Start using the selected header/footer from the new page onwards.

-1 *or* off: Start the selected header from the new page onwards.

<span class="parameter">$pageselector</span>

Select a named CSS @page.

<span class="smallblock">BLANK</span> or omitted or leaves the CSS page unchanged.

See <a href="{{ "/paging/using-page.html" | prepend: site.baseurl }}">Using @page</a> for more information

<span class="parameter">$sheet-size</span>

<span class="parameter">$sheet-size</span> can be specified either as a pre-defined page size, or as an array of width and height in millimetres e.g. array(210,297).

<span class="smallblock">DEFAULT</span>: <span class="smallblock">BLANK</span> - makes no change to the current sheet-size

**Values** (case-insensitive)

A0 - A10, B0 - B10, C0 - C10

4A0, 2A0, RA0 - RA4, SRA0 - SRA4

Letter, Legal, Executive, Folio

Demy, Royal

A (Type A paperback 111x178mm)

B (Type B paperback 128x198mm)

All of the above values can be suffixed with "-L" to force a Landscape page orientation document e.g. "A4-L"

**Note:** If you use the array() form for <span class="parameter">$sheet-size</span>, then you must:

- specify the width less than the height i.e. the dimensions of the page in portrait orientation; and

- explicitly define the <span class="parameter">$orientation</span> as L or P

<ul> </li>
</ul>

# Changelog

<table class="table"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>5.0</td>
<td>

Function was added.

</td>
</tr>
<tr>
<td>5.4</td>
<td>Alternative parameter names added</td>
</tr>
</tbody> </table>

# Alternative parameter names

<table class="table"> <tbody>
<tr>
<td>type</td>
<td>condition</td>
</tr>
<tr>
<td>margin-left</td>
<td>mgl</td>
</tr>
<tr>
<td>margin-right</td>
<td>mgr</td>
</tr>
<tr>
<td>margin-top</td>
<td>mgt</td>
</tr>
<tr>
<td>margin-bottom</td>
<td>mgb</td>
</tr>
<tr>
<td>margin-header</td>
<td>mgh</td>
</tr>
<tr>
<td>margin-footer</td>
<td>mgf</td>
</tr>
<tr>
<td>odd-header-name</td>
<td>ohname</td>
</tr>
<tr>
<td>even-header-name</td>
<td>ehname</td>
</tr>
<tr>
<td>odd-footer-name</td>
<td>ofname</td>
</tr>
<tr>
<td>even-footer-name</td>
<td>efname</td>
</tr>
<tr>
<td>odd-header-value</td>
<td>ohvalue</td>
</tr>
<tr>
<td>even-header-value</td>
<td>ehvalue</td>
</tr>
<tr>
<td>odd-footer-value</td>
<td>ofvalue</td>
</tr>
<tr>
<td>even-footer-value</td>
<td>efvalue</td>
</tr>
<tr>
<td>pageselector</td>
<td>pagesel</td>
</tr>
<tr>
<td>sheet-size</td>
<td>newformat</td>
</tr>
</tbody> </table>

# Examples

Example #1

{% highlight php %}
<?php

$mpdf = new \Mpdf\Mpdf();

$mpdf->WriteHTML('Your Introduction');

$mpdf->AddPage();

$mpdf->WriteHTML('Your Book text');

?>
{% endhighlight %}

{% highlight php %}
Example #2 - Resetting page numbering with a new style
{% endhighlight %}

{% highlight php %}
<?php

$mpdf = new \Mpdf\Mpdf();

$mpdf->useOddEven = 1;

$mpdf->AddPageByArray(array(

    'resetpagenum' => '1',

    'pagenumstyle' => 'i',

    'suppress' => 'on',

    ));

$mpdf->WriteHTML('Your Book text');

?>
{% endhighlight %}

{% highlight php %}
Example #3 - Defining new margins and page orientation
{% endhighlight %}

{% highlight php %}
<?php

$mpdf = new \Mpdf\Mpdf();

$mpdf->WriteHTML('Your Introduction');

$mpdf->AddPageByArray(array(

    'orientation' => 'L',

    'mgl' => '50',

    'mgr' => '50',

    'mgt' => '50',

    'mgb' => '50',

    'mgh' => '10',

    'mgf' => '10',

    ));

$mpdf->WriteHTML('Your Book text');

?>
{% endhighlight %}

{% highlight php %}
Example #4 - Changing headers/footers
{% endhighlight %}

{% highlight php %}
<?php

$mpdf = new \Mpdf\Mpdf();

$mpdf->useOddEven = 1;

$mpdf->defHeaderByName('myHeader', array (

    'L' => array (),

    'R' => array (),

    'C' => array ('content' => 'Chapter 2', 'font-style' => 'B', 'font-family' => 'serif'),

    'line' => 1,

    ));

$mpdf->defHTMLHeaderByName('myHeader2','<div style="text-align: center; font-weight: bold;">Chapter 2</div>');

$mpdf->WriteHTML('Your Introduction');

// Selects new headers for ODD and EVEN pages to use from the new page onwards

// Note the html_ prefix before the named HTML header

$mpdf->AddPageByArray(array(

    'condition' => 'NEXT-ODD',

    'ohname' => 'myHeader',

    'ehname' => 'html_myHeader2',

    'ohvalue' => 1,

    'ehvalue' => 1,

    ));

$mpdf->WriteHTML('Your Book text');

// Turns all headers/footers off from new page onwards

$mpdf->AddPage('','NEXT-ODD','','','','','','','','','','','','','',-1,-1,-1,-1);

$mpdf->AddPageByArray(array(

    'condition' => 'NEXT-ODD',

    'ohvalue' => -1,

    'ehvalue' => -1,

    'ofvalue' => -1,

    'efvalue' => -1,

    ));

$mpdf->WriteHTML('End section of book with no headers');

?>
{% endhighlight %}

{% highlight php %}
Example #5 - Blank template as example
{% endhighlight %}

{% highlight php %}
<?php

$mpdf = new \Mpdf\Mpdf();

$mpdf->WriteHTML('Introduction');

$mpdf->AddPageByArray(array(

    'orientation' => '',

    'condition' => '',

    'resetpagenum' => '',

    'pagenumstyle' => '',

    'suppress' => '',

    'mgl' => '',

    'mgr' => '',

    'mgt' => '',

    'mgb' => '',

    'mgh' => '',

    'mgf' => '',

    'ohname' => '',

    'ehname' => '',

    'ofname' => '',

    'efname' => '',

    'ohvalue' => 0,

    'ehvalue' => 0,

    'ofvalue' => 0,

    'efvalue' => 0,

    'pagesel' => '',

    'newformat' => '',

    ));

$mpdf->WriteHTML('Chapter 1 ...');

$mpdf->Output();

?>
{% endhighlight %}

# Notes

<div class="alert alert-info" role="alert" markdown="1">
	**Note:** Unlike FPDF **AddPage()** or **AddPageByArray()** does not need to be called at the beginning of the document if you are writing HTML code to the document. <a href="{{ "/reference/codepages-glyphs/iso-8859-win-comparison-chart.html" | prepend: site.baseurl }}">WriteHTML()</a> will automatically add the first page to a new document.</div>

# See Also

<ul>
<li class="manual_boxlist">&lt;<a href="{{ "/reference/html-control-tags/pagebreak.html" | prepend: site.baseurl }}">pagebreak</a>&gt; - Custom HTML tag - equivalent to **AddPage()** or **AddPageByArray()**</li>
</ul>
