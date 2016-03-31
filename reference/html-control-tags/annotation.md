---
layout: page
title: annotation
parent_title: HTML control tags
permalink: /reference/html-control-tags/annotation.html
modification_time: 2015-08-05T12:01:19+00:00
---



<p>(mPDF &gt;= 2.2)</p>
<p>annotation – Add an Annotation to the document</p>
<h2>Description</h2>
<p class="manual_block">&lt;<b>annotation</b>&nbsp; <span class="parameter">content</span> [ <span class="parameter">pos-x</span> ] [ <span class="parameter">pos-y</span> ] [ <span class="parameter">icon</span> ] [ <span class="parameter">author</span> ] [ <span class="parameter">subject</span> ] [ <span class="parameter">opacity</span> ] [ <span class="parameter">color</span> ] [ <span class="parameter">popup</span> ] [ <span class="parameter">file</span> ] /&gt;</p>
<p>Adds an Annotation to the document. An annotation is like a Tooltip on a webpage. The Annotation marker, like those of "Sticky Notes" in Adobe Reader. When the reader passes the cursor over, it will display a popup text box.</p>
<p>The exact position on the page can be specified using <span class="parameter">x</span> and <span class="parameter">y</span>, or left to position automatically. If <span class="parameter">x</span> and <span class="parameter">y</span> are not specified, the Annotation will be inserted at the current position of writing in the document. The <span class="parameter">x</span> position (horizontal) can be overridden by the variable <a href="{{ "/reference/mpdf-variables/annotmargin.html" | prepend: site.baseurl }}">annotMargin</a>, which can be used to force the Annotation marker to display in the right margin.</p>
<p>The attribute <span class="parameter">file</span> can be used to specify a file (any type) which is to be embedded inside the PDF document.</p>

<div class="alert alert-info" role="alert"><strong>Note:</strong> All text to do with an annotation (text, author, subject) is rendered with the system font and can therefore contain any Unicode character even if the document font restricts to a specific codepage.</div>
<p class="manual_block">Annotations cannot be moved or deleted by the reader.</p>
<h2>Parameters</h2>
<p class="manual_param_dt"><span class="parameter">content</span></p>
<p class="manual_param_dd">This parameter specifies the text to appear in the popup text box.

<span class="parameter">content</span> cannot contain any of the characters: &lt; &gt; &amp; ' <i>or</i> " and must use the appropriate HTML entities e.g. &lt;annotation content="This is &amp;lt; 40" /&gt;

It is recommended that you use htmlspecialchars('Content', ENT_QUOTES) for this.</p>
<p class="manual_param_dt"><span class="parameter">pos-x</span></p>
<p class="manual_param_dd">Sets the <span class="parameter">x</span> position of the (bottom left edge of the) Annotation marker, set in mm from the left of the page.

<span class="smallblock">BLANK</span>&nbsp;or omitted or 0 uses the current writing position on the page, unless overridden by <a href="{{ "/reference/mpdf-variables/annotmargin.html" | prepend: site.baseurl }}">$annotMargin</a>.</p>
<p class="manual_param_dt"><span class="parameter">pos-y</span></p>
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
<p class="manual_param_dt"><span class="parameter">color</span></p>
<p class="manual_param_dd">Specify the colour of the Annotation marker background.</p>
<p class="manual_param_dd"><b>Values</b>

Any valid CSS color recognised by mPDF:

#RRGGBB

#RGB

rgb(255,255,255)

Named colours such as white, yellow, blue etc.

<span class="smallblock">DEFAULT</span> Yellow</p>
<p class="manual_param_dt"><span class="parameter">popup</span></p>
<p class="manual_param_dd">Specify whether to show the popup box for the annotation when the PDF document is opened, and optional specify its dimensions and/or position.

<span class="smallblock">BLANK</span>&nbsp;or omitted or "0"&nbsp; - the popup box is not shown.

Any other value forces the popup box to appear when the document is opened.</p>
<p class="manual_param_dd"><b>Values</b>

&lt;nn nn&gt; - A string of 2 numbers (separated by spaces) will set the X and Y position in mm e.g. '30 30' will show a popup box with the top left corner 30mm from the top of the page and 30mm from the left of the page.

&lt;nn nn nn nn&gt; - A string of 4 numbers (separated by spaces) will set the X and Y position and also the width and height in mm e.g. '30 30 80 50' will show a popup box with the top left corner 30mm from the top of the page and 30mm from the left of the page, a width of 80mm and a height of 50mm.

Note that the PDF Reader (e.g. Adobe Reader) may reposition the popup box as it pleases.</p>
<p class="manual_param_dt"><span class="parameter">file</span></p>
<p class="manual_param_dd"><span class="parameter">file</span> specifies the name of a file to embed in the PDF document.

<span class="smallblock">DEFAULT</span>: <span class="smallblock">BLANK</span></p>
<h2>Changelog</h2>
<table class="table"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>2.2</td>
<td>The function was added.</td>
</tr>
<tr>
<td>2.4</td>
<td>
<p>Annotations cannot be moved or deleted.</p>
<p>(function SetUserRights removed)</p>
</td>
</tr>
<tr>
<td>4.3</td>
<td>Attribute <span class="parameter">popup</span> was added</td>
</tr>
<tr>
<td>5.1</td>
<td>Attribute <span class="parameter">file</span> was added</td>
</tr>
</tbody> </table>
<h2>Examples</h2>

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<?php

<?php

$mpdf=new mPDF();

$html = '<p>This is a paragraph about violas<annotation content="Violas are like big violins" /> about which I know very little.</p>';

$mpdf->WriteHTML($html);

$mpdf->Output();

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

$html = '<p>This is a paragraph about violas<annotation content="Violas are like big violins" /> about which I know very little.</p>';

$mpdf->Output();
{% endhighlight %}

<h2>See Also</h2>
<ul>
<li class="manual_boxlist"><a href="http://uk3.php.net/manual/en/function.explode.php"> </a><a href="{{ "/reference/mpdf-variables/annotmargin.html" | prepend: site.baseurl }}">annotMargin</a> - Specify the x (horizontal) placement of Annotation markers</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/annotopacity.html" | prepend: site.baseurl }}">annotOpacity</a> - Specifiy the default opacity used for Annotation markers</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/annotation.html" | prepend: site.baseurl }}">Annotation()</a> - PHP equivalent to &lt;annotation&gt;<b>

</b></li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/title2annots.html" | prepend: site.baseurl }}">title2annots</a> - Convert all HTML element <span class="parameter">title</span> attributes to Annotations</li>
</ul>
