---
layout: page
title: SetFooter()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setfooter.html
modification_time: 2015-08-05T12:01:01+00:00
---

(mPDF >= 1.0)

SetFooter – Sets a page header

# Description

void **SetFooter** ([ mixed <span class="parameter">$footer</span> [, string <span class="parameter">$side</span> ]])

Set a page footer.

<div class="alert alert-info" role="alert" markdown="1">
	**Note:** This function/method was altered in mPDF 2.2 by capitalising the first letter of the name.
	As function/method names in PHP have hitherto been case-insensitive, this should not cause any problems, but it is
	recommended where possible to use the preferred spelling.
</div>

# Parameters

<span class="parameter">$footer</span>

This parameter specifies the content of the page footer. It can accept a string or array. If a
<span class="smallblock">BLANK</span> string or <span class="smallblock">NULL</span> or array() is passed,
this will clear the page footer.

<span class="smallblock">DEFAULT</span>: array()

**Values**

A simple text string is set as content for the <span class="smallblock">RIGHT</span> margin. If
<span class="smallblock">DOUBLE-SIDED</span> document, this is mirrored on <span class="smallblock">EVEN</span>
pages i.e. <span class="smallblock">LEFT</span> margin.

A text string containing 2 characters '|' - will be split into three strings and set as content for the
left|centre|right parts of the footer e.g. <span class="parameter">$header</span>=''Chapter 1|{PAGENO}|Book Title".

If <span class="smallblock">DOUBLE-SIDED</span> document, this is mirrored on <span class="smallblock">EVEN</span>
pages i.e. right|centre|left.

An array can be in two forms. The first form includes information for both <span class="smallblock">ODD</span> and
<span class="smallblock">EVEN</span> footers, and is the expected form if  <span class="parameter">$side</span> =
<span class="smallblock">BLANK</span>.

**Values**

<span class="parameter">$content</span>: <span class="smallblock">TEXT STRING</span>

<span class="parameter">$font-size</span>: <span class="smallblock">FLOAT</span> font size in **pts**

<span class="parameter">$font-style</span>: B|I|BI|<span class="smallblock">BLANK STRING</span>

<span class="parameter">$font-family</span>: Any available font-family

<span class="parameter">$color</span>: CSS '#RRGGBB' string

<span class="parameter">$line</span>: 0|1 - specify whether to draw a line above the Footer

{% highlight php %}
<?php
$footer = array (
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
<span class="smallblock">EVEN</span> footers, and must be accompanied by a valid value for
<span class="parameter">$side</span> = O|E

{% highlight php %}
$footer = array (
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

Specify whether to set the footer for <span class="smallblock">ODD</span> or <span class="smallblock">EVEN</span>
pages in a <span class="smallblock">DOUBLE-SIDED</span> document.

<span class="smallblock">DEFAULT</span>: <span class="smallblock">BLANK</span>

**Values** (case-sensitive)

O - set the footer for <span class="smallblock">ODD</span> pages

E - set the footer for <span class="smallblock">EVEN</span> pages

<span class="smallblock">BLANK</span> - sets both <span class="smallblock">ODD</span> or
<span class="smallblock">EVEN</span> page footers

# Changelog

<table class="table"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>2.0</td>
<td>The <span class="parameter">$side</span> parameter was added.</td>
</tr>
</tbody> </table>

# Examples

For examples and further information please see:

- <a href="{{ "/headers-footers/headers-footers.html" | prepend: site.baseurl }}">Headers &amp; Footers</a>
- <a href="{{ "/headers-footers/method-1.html" | prepend: site.baseurl }}">Headers &amp; Footers - Method 1</a>

# See Also

- <a href="{{ "/reference/mpdf-functions/setheader.html" | prepend: site.baseurl }}">SetHeader()</a>
- <a href="{{ "/reference/mpdf-variables/defaultfooterfontsize.html" | prepend: site.baseurl }}">$defaultfooterfontsize</a>
- <a href="{{ "/reference/mpdf-variables/defaultfooterline.html" | prepend: site.baseurl }}">$defaultfooterfontstyle</a>
- <a href="{{ "/reference/mpdf-variables/defaultfooterline.html" | prepend: site.baseurl }}">$defaultfooterline</a>

