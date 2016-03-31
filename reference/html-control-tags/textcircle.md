---
layout: page
title: textcircle
parent_title: HTML control tags
permalink: /reference/html-control-tags/textcircle.html
modification_time: 2015-08-05T12:01:29+00:00
---

<p>(mPDF &gt;= 5.4)</p>
<p>textcircle – Draw a circle using specified text</p>

# Description

<p class="manual_block">&lt;<b>textcircle</b>&nbsp; <span class="parameter">r</span>&nbsp; <span class="parameter">top-text</span>&nbsp; <span class="parameter">bottom-text</span> [ <span class="parameter">divider</span> ][ <span class="parameter">space-width</span> ] [ <span class="parameter">char-width</span> ] [ <span class="parameter">href</span> ] /&gt;</p>
<p>Draw a circle using specified text. One or both of top-text and/or bottom-text must be defined. The radius and font-size are user-defined, whilst the width and height of the generated object will be calculated from these values. Font-size should be set for &lt;textcircle&gt; using in-line CSS or specified in a CSS stylesheet as for any standard HTML tag. Other CSS styles supported on Circular Text are: border, margin, padding, color, background-color, font-family, font-size, font-weight, font-style, display, visibility, and opacity.</p>

<div class="alert alert-info" role="alert"><strong>Note:</strong> CSS style are not inherited from parent elements.</div>
<p class="manual_block">From mPDF &gt;= 5.6 the CSS property <code><span class="parameter">font-size</code></span> can be set to <code>auto</code>. This automatically sizes text to fill a semicircle (if both top and bottom set) or a full circle (if only one set).</p>
<p>Circular Text is displayed as though an in-line element. Automatic kerning will be applied to the text if <a href="{{ "/reference/mpdf-variables/usekerning.html" | prepend: site.baseurl }}">useKerning</a> is <span class="smallblock">TRUE</span>.&nbsp;</p>

<div class="alert alert-info" role="alert"><strong>Note:</strong> Prior to mPDF 5.6 the textcircle was displayed with a white background. in &gt;= 5.6 the background has been changed to transparent by default.</div>

# Parameters

<p class="manual_param_dt"><span class="parameter">r</span></p>
<p class="manual_param_dd">Radius of circle. Any valid <span class="smallblock">LENGTH</span> can be entered<span class="smallblock">

</span></p>
<p class="manual_param_dt"><span class="parameter">top-text</span></p>
<p class="manual_param_dd">This parameter defines text which will be centred on the top of the circle.

<span class="parameter">top-text</span> cannot contain any of the characters: &lt; &gt; &amp; ' <i>or</i> " and must use the appropriate HTML entities e.g. &lt;textcircle top-text="Brian&amp;#039;s document" /&gt;&nbsp; It is recommended that you use htmlspecialchars('Content', ENT_QUOTES) for this.

Either top-text or bottom-text (or both) must be defined.

<span class="smallblock">DEFAULT</span>: <span class="smallblock">BLANK</span></p>
<p class="manual_param_dt"><span class="parameter">bottom-text</span></p>
<p class="manual_param_dd">This parameter defines text which will be centred on the bottom of the circle.

<span class="parameter">bottom-text</span> cannot contain any of the characters: &lt; &gt; &amp; ' <i>or</i> " and must use the appropriate HTML entities e.g. &lt;textcircle bottom-text="Brian&amp;#039;s document" /&gt;&nbsp; It is recommended that you use htmlspecialchars('Content', ENT_QUOTES) for this.

Either top-text or bottom-text (or both) must be defined.

<span class="smallblock">DEFAULT</span>: <span class="smallblock">BLANK</span></p>
<p class="manual_param_dt"><span class="parameter">divider</span></p>
<p class="manual_param_dd">This parameter defines an optional string of characters which will be used to divide top and bottom text of the circle.

<span class="parameter">divider</span> cannot contain any of the characters: &lt; &gt; &amp; ' <i>or</i> ". Use HTML entities for special charactesr or non-ASCII characters e.g. &lt;textcircle divider="&amp;bull;" /&gt;

<span class="smallblock">DEFAULT</span>: <span class="smallblock">BLANK</span></p>
<p class="manual_param_dt"><span class="parameter">space-width</span></p>
<p class="manual_param_dd">This parameter should be specified as an integer defining the (fixed) letter-spacing as a percentage of normal.

<span class="smallblock">DEFAULT</span>: 120</p>
<p class="manual_param_dt"><span class="parameter">char-width</span></p>
<p class="manual_param_dd">This parameter should be specified as an integer defining the width of each character as a percentage of normal.

<span class="smallblock">DEFAULT</span>: 100</p>

# Changelog

<table class="table"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>5.4</td>
<td>The tag was added.</td>
</tr>
<tr>
<td>5.6</td>
<td>
<p>Transparent background fixed.</p>
<p>Support for divider added.</p>
<p>Support for "font: auto" added.</p>
</td>
</tr>
</tbody> </table>

# Examples

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<?php

...

$mpdf->WriteHTML('<textcircle r="30mm" space-width="120" char-width="150" 

top-text="&amp;bull; Circular Text &amp;bull;" bottom-text="Circular Text" 

style="background-color: #FFAAAA; border:1px solid red; padding: 0.3em; margin: 0.3em; color: #000000; font-size: 21pt; font-weight:bold; font-family: Arial" />');

...

?>
{% endhighlight %}

# See Also

<ul>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/circulartext.html" | prepend: site.baseurl }}">CircularText()</a> - PHP equivalent to &lt;textcircle&gt;</li>
</ul>
