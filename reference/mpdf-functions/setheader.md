---
layout: page
title: SetHeader()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setheader.html
modification_time: 2015-08-05T12:01:02+00:00
---

(mPDF >= 1.0)

SetHeader – Sets a page header

# Description

void **SetHeader** ([ mixed <span class="parameter">$header</span> [, string <span class="parameter">$side</span>
[, boolean <span class="parameter">$write</span> ]]])

Set a page header.

<div class="alert alert-info" role="alert" markdown="1">
	**Note:** This function/method was altered in mPDF 2.2 by
	capitalising the first letter of the name. As function/method names in PHP have hitherto been case-insensitive,
	this should not cause any problems, but it is recommended where possible to use the preferred spelling.
</div>

# Parameters

<span class="parameter">$header</span>

This parameter specifies the content of the page header. It can accept a string or array. If a
<span class="smallblock">BLANK</span> string or <span class="smallblock">NULL</span> or array()
is passed, this will clear the page header.

<span class="smallblock">DEFAULT</span>: array()

**Values**

A simple text string is set as content for the <span class="smallblock">RIGHT</span> margin. If
<span class="smallblock">DOUBLE-SIDED</span> document, this is mirrored on <span class="smallblock">EVEN</span>
pages i.e. <span class="smallblock">LEFT</span> margin.

A text string containing 2 characters '|' - will be split into three strings and set as content for the
left|centre|right parts of the header e.g. <span class="parameter">$header</span>=''Chapter 1|{PAGENO}|Book Title".

If <span class="smallblock">DOUBLE-SIDED</span> document, this is mirrored on <span class="smallblock">EVEN</span>
pages i.e. right|centre|left.

An array can be in two forms. The first form includes information for both <span class="smallblock">ODD</span> and
<span class="smallblock">EVEN</span> headers, and is the expected form if  <span class="parameter">$side</span> =
<span class="smallblock">BLANK</span>.

**Values**

<span class="parameter">$content</span>: <span class="smallblock">TEXT STRING</span>

<span class="parameter">$font-size</span>: <span class="smallblock">FLOAT</span> font size in **pts**

<span class="parameter">$font-style</span>: B|I|BI|<span class="smallblock">BLANK STRING</span>

<span class="parameter">$font-family</span>: Any available font-family

<span class="parameter">$color</span>: CSS '#RRGGBB' string

<span class="parameter">$line</span>: 0|1 - specify whether to draw a line under the Header

{% highlight php %}
<?php
$header = array (
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
{% endhighlight %}

The second form includes information for either <span class="smallblock">ODD</span> or
<span class="smallblock">EVEN</span> headers, and must be accompanied by a valid value for
<span class="parameter">$side</span> = O|E

{% highlight php %}
$header = array (
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
);
{% endhighlight %}

<span class="parameter">$side</span>

Specify whether to set the header for <span class="smallblock">ODD</span> or <span class="smallblock">EVEN</span>
pages in a <span class="smallblock">DOUBLE-SIDED</span> document.

<span class="smallblock">DEFAULT</span>: <span class="smallblock">BLANK</span>

**Values** (case-sensitive)

O - set the header for <span class="smallblock">ODD</span> pages

E - set the header for <span class="smallblock">EVEN</span> pages

<span class="smallblock">BLANK</span> - sets both <span class="smallblock">ODD</span> or
<span class="smallblock">EVEN</span> page headers

<span class="parameter">$write</span>

If <span class="smallblock">TRUE</span> it forces the Header to be written immediately to the current page. Use if
the header is being set after the new page has been added.

<span class="smallblock">DEFAULT</span>: <span class="smallblock">FALSE</span>

<div class="alert alert-info" role="alert" markdown="1">
	**Note:** <span class="parameter">$write</span> forces the
appropriate header to be written. If you have just defined an <span class="smallblock">ODD</span>-sided header and
the document is currently writing to an <span class="smallblock">EVEN</span>-sided page, the
<span class="smallblock">EVEN</span> header will be output.</div>

# Changelog

<table class="table"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>2.0</td>
<td>The <span class="parameter">$side</span> and <span class="parameter">$write</span> parameters were added.</td>
</tr>
</tbody> </table>

# Examples

For examples and further information please see:

- <a href="{{ "/headers-footers/headers-footers.html" | prepend: site.baseurl }}">Headers &amp; Footers</a>
- <a href="{{ "/headers-footers/method-1.html" | prepend: site.baseurl }}">Headers &amp; Footers - Method 1</a>

# See Also

- <a href="{{ "/reference/mpdf-functions/setfooter.html" | prepend: site.baseurl }}">SetFooter()</a>
- <a href="{{ "/reference/mpdf-variables/defaultheaderfontsize.html" | prepend: site.baseurl }}">$defaultheaderfontsize</a>
- <a href="{{ "/reference/mpdf-variables/defaultheaderfontstyle.html" | prepend: site.baseurl }}">$defaultheaderfontstyle</a>
- <a href="{{ "/reference/mpdf-variables/defaultheaderline.html" | prepend: site.baseurl }}">$defaultheaderline</a>
