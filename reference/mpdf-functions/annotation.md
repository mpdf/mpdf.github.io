---
layout: page
title: Annotation()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/annotation.html
modification_time: 2015-08-05T12:00:41+00:00
---

<p>(mPDF &gt;= 2.2)</p>
<p>Annotation – Add an Annotation to the document</p>

# Description

<p class="manual_block">void <b>Annotation</b> ( string <span class="parameter">$text</span> [, float <span class="parameter">$x</span> , float <span class="parameter">$y</span> [, string <span class="parameter">$icon</span> [, string <span class="parameter">$author</span> [, string <span class="parameter">$subject</span> [, float <span class="parameter">$opacity</span> [, array <span class="parameter">$colarray</span> [, mixed <span class="parameter">$popup</span> ]]]]]]])</p>
<p>Adds an Annotation to the document. An annotation is like a Tooltip on a webpage. The Annotation marker, like those of "Sticky Notes" in Adobe Reader. When the reader passes the cursor over, it will display a popup text box.</p>
<p>The exact position on the page can be specified using <span class="parameter">x</span> and <span class="parameter">y</span>, or left to position automatically. If <span class="parameter">x</span> and <span class="parameter">y</span> are not specified, the Annotation will be inserted at the current position of writing in the document. The <span class="parameter">x</span> position (horizontal) can be overridden by the variable <a href="{{ "/reference/mpdf-variables/annotmargin.html" | prepend: site.baseurl }}">annotMargin</a>, which can be used to force the Annotation marker to display in the right margin.</p>

<div class="alert alert-info" role="alert"><strong>Note:</strong> All text to do with an annotation (text, author, subject) is rendered with the system font and can therefore contain any Unicode character even if the document font restricts to a specific codepage.</div>
<p class="manual_block"><b>** SetUserRights was removed in mPDF 2.4 **</b>

Annotations cannot be moved or deleted by the reader</p>

# Parameters

<p class="manual_param_dt"><span class="parameter">text</span></p>
<p class="manual_param_dd">This parameter specifies the text to appear in the popup text box</p>
<p class="manual_param_dt"><span class="parameter">x</span></p>
<p class="manual_param_dd">Sets the <span class="parameter">x</span> position of the (bottom left edge of the) Annotation marker, set in mm from the left of the page.

<span class="smallblock">BLANK</span>&nbsp;or omitted or 0 uses the current writing position on the page, unless overridden by <a href="{{ "/reference/mpdf-variables/annotmargin.html" | prepend: site.baseurl }}">$annotMargin</a>.</p>
<p class="manual_param_dt"><span class="parameter">y</span></p>
<p class="manual_param_dd">Sets the <span class="parameter">y</span> position of the (bottom left edge of the) Annotation marker, set in mm from the top of the page. When Annotation markers are used within the text (<a href="{{ "/reference/mpdf-variables/annotmargin.html" | prepend: site.baseurl }}">annotMargin</a>=<span class="smallblock">FALSE</span>), the marker is raised by the current lineheight to appear above the text.

<span class="smallblock">BLANK</span>&nbsp;or omitted or 0 uses the current writing position on the page.</p>
<p class="manual_param_dt"><span class="parameter">icon</span></p>
<p class="manual_param_dd">Sets the appearance of the Annotation marker.

<span class="smallblock">BLANK</span>&nbsp;or omitted uses <span class="smallblock">DEFAULT</span> i.e. 'Note'</p>
<p class="manual_param_dd"><b>Values</b> (case sensitive)

Note

Comment

Help

Insert

Key

NewParagraph

Paragraph

<span class="smallblock">DEFAULT:</span> Note</p>

<div class="alert alert-info" role="alert"><strong>Note:</strong> The default is "Comment" when using Annotations from HTML markup &lt;span title=""&gt; when <a href="{{ "/reference/mpdf-variables/title2annots.html" | prepend: site.baseurl }}">title2annots</a> is <span class="smallblock">TRUE</span></div>
<p class="manual_param_dt"><span class="parameter">author</span></p>
<p class="manual_param_dd">This specifies the name of the Author which will appear at the top of the popup text box.

<span class="smallblock">DEFAULT</span>: <span class="smallblock">BLANK</span></p>
<p class="manual_param_dt"><span class="parameter">subject</span></p>
<p class="manual_param_dd">This specifies the text to appear in the Annotation properties.

<span class="smallblock">DEFAULT</span>: <span class="smallblock">BLANK</span></p>
<p class="manual_param_dt"><span class="parameter">opacity</span></p>
<p class="manual_param_dd">Sets the opacity of the Annotation marker. Values must be greater than 0 and &lt;= 1. 

<span class="smallblock">BLANK</span>&nbsp;or omitted or 0: sets the opacity to the value of <a href="{{ "/reference/mpdf-variables/annotopacity.html" | prepend: site.baseurl }}">annotOpacity</a> (<span class="smallblock">DEFAULT</span> 0.5), unless <a href="{{ "/reference/mpdf-variables/annotmargin.html" | prepend: site.baseurl }}">annotMargin</a> forces the Annotations to appear in the margin, when the <span class="smallblock">DEFAULT</span> is 1</p>
<p class="manual_param_dt"><span class="parameter">colarray</span></p>
<p class="manual_param_dd">An array containing RGB color specification, which determines the colour of the Annotation marker background

<span class="smallblock">DEFAULT</span> array(255,255,0) i.e. Yellow</p>
<p class="manual_param_dt"><span class="parameter">popup</span></p>
<p class="manual_param_dd">Specify whether to show the popup box for the annotation when the PDF document is opened, and optional specify its dimensions and/or position.

<span class="smallblock">BLANK</span>&nbsp;or omitted, 0 or "0"&nbsp; - the popup box is not shown.

Any other value forces the popup box to appear when the document is opened.</p>
<p class="manual_param_dd">An array of 2 numbers will set the X and Y position in mm e.g. <span class="parameter">popup=</span>array(30, 30) will show a popup box with the top left corner 30mm from the top of the page and 30mm from the left of the page.

An array of 4 numbers will set the X and Y position and also the width and height in mm e.g. <span class="parameter">popup=</span>array(30, 30, 80, 50) will show a popup box with the top left corner 30mm from the top of the page and 30mm from the left of the page, a width of 80mm and a height of 50mm.

Note that the PDF Reader (e.g. Adobe Reader) may reposition the popup box as it pleases.</p>

# Changelog

<table class="table"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>2.2</td>
<td>The function was added.</td>
</tr>
<tr>
<td>2.4</td>
<td>Annotations cannot be moved or deleted</td>
</tr>
<tr>
<td>4.3</td>
<td>Parameter <span class="parameter">popup</span> was added</td>
</tr>
</tbody> </table>

# Examples

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<?php

$mpdf=new mPDF();

$mpdf->WriteHTML('<p>Hallo World</p>');

$mpdf->Annotation("Text annotation example");

$mpdf->WriteHTML('<p>Hallo World</p>');

$mpdf->Output('filename.pdf');

?>
{% endhighlight %}

{% highlight php %}
Example #2
{% endhighlight %}

{% highlight php %}
<?php

$mpdf=new mPDF();

// The Annotation markers will appear 10mm in from the right margin of the page

$mpdf->annotMargin = 10;

// The Annotation markers need no transparency as they appear in the margins

$mpdf->annotOpacity = 1;

$mpdf->WriteHTML('<p>Hallo World</p>');

$mpdf->Annotation("Text annotation example\nCharacters test:\xd1\x87\xd0\xb5 \xd0\xbf\xd1\x83\xd1\x85\xd1\x8a\xd1\x82", 145, 24, 'Comment', "Ian Back", "My Subject", 0.7, array(127, 127, 255));

$mpdf->WriteHTML('<p>Hallo World</p>');

$mpdf->Output('filename.pdf');
{% endhighlight %}

# See Also

<ul>
<li class="manual_boxlist"><a href="http://uk3.php.net/manual/en/function.explode.php"> </a><a href="{{ "/reference/mpdf-variables/annotmargin.html" | prepend: site.baseurl }}">annotMargin</a> - Specify the x (horizontal) placement of Annotation markers</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/annotopacity.html" | prepend: site.baseurl }}">annotOpacity</a> - Specifiy the default opacity used for Annotation markers</li>
<li class="manual_boxlist">&lt;<a href="{{ "/reference/html-control-tags/annotation.html" | prepend: site.baseurl }}">annotation</a>&gt; - Custom HTML tag - equivalent to <b>Annotation</b></li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/title2annots.html" | prepend: site.baseurl }}">title2annots</a> - Convert all HTML element <span class="parameter">title</span> attributes to Annotations</li>
</ul>
