---
layout: page
title: CreateIndex()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/createindex.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 2.2)</p>
<p>CreateIndex — Generate an Index for the document</p>

<div class="alert alert-info" role="alert"><b>Note:</b> This function is removed in mPDF v6.0 and replaced by <a href="/reference/mpdf-functions/insertindex.html">InsertIndex</a>()</div>
<h2>Description</h2>

<div class="alert alert-info" role="alert">void <b>CreateIndex</b> ([ int <span class="parameter">$numberofcolumns</span> [, float <span class="parameter">$fontsize</span> [, float <span class="parameter">$linespacing</span> [, float <span class="parameter">$offset</span> [, int <span class="parameter">$usedivletters</span> [, float <span class="parameter">$divlettersfontsize</span> [, float <span class="parameter">$columngap</span> [, string <span class="parameter">$font</span> [, string <span class="parameter">$divletterfont</span> [, boolean <span class="parameter">$uselinking</span> ]]]]]]]]])</div>
<p>Inserts an Index for the document based on index entries made using &lt;<a href="/reference/html-control-tags/tocentry.html">indexentry</a>&gt; or <a href="/reference/mpdf-functions/tocpagebreak.html">CreateIndex()</a>.</p>

<div class="alert alert-info" role="alert"><b>Note:</b> Prior to mPDF 2.2 the function CreateReference() was used. CreateIndex() is now the preferred form.</div>

<div class="alert alert-info" role="alert"><b>Note:</b> <span class="parameter">uselinking</span> was added in mPDF 3.0</div>
<h2>Parameters</h2>
<p class="manual_param_dt"><span class="parameter">numberofcolumns</span></p>
<p class="manual_param_dd">Set the number of (vertical) columns to use for the Index

<span class="smallblock">BLANK</span>&nbsp;or omitted or 0 or 1 uses the whole page is used as one column.

<span class="smallblock">DEFAULT</span>: 1</p>
<p class="manual_param_dt"><span class="parameter">fontsize</span></p>
<p class="manual_param_dd">Sets the font size for the Index in <b><i>points</i></b> (pt)

<span class="smallblock">BLANK</span>&nbsp;or omitted or 0 uses the default font-size for the document.</p>
<p class="manual_param_dt"><span class="parameter">linespacing</span></p>
<p class="manual_param_dd">Sets the line-height used for index entries. Usual values between 1.0 and 1.4.

<span class="smallblock">BLANK</span>&nbsp;or omitted or 0 uses the default value.

<span class="smallblock">DEFAULT</span>: 1.2&nbsp; (changed from 1.0 in mPDF &lt; 3.0)</p>
<p class="manual_param_dt"><span class="parameter">offset</span></p>
<p class="manual_param_dd">Sets the text indent&nbsp;(in mm) for subsequent&nbsp;lines, if an index entry flows onto&nbsp;two or more lines.

<span class="smallblock">BLANK</span>&nbsp;or omitted uses a default value of 3mm.</p>
<p class="manual_param_dt"><span class="parameter">usedivletters</span></p>
<p class="manual_param_dd">Defines whether to divide index entries starting with the same letter, using a (large) letter as a heading.

<span class="smallblock">DEFAULT</span>: 1</p>
<p class="manual_param_dd"><b>Values</b>

1: show dividing letters in the Index

0: do not show dividing letters in the Index

<span class="smallblock">BLANK</span>&nbsp;or omitted uses a default value of 1</p>
<p class="manual_param_dt"><span class="parameter">divlettersfontsize</span></p>
<p class="manual_param_dd">Sets the font size for the dividing letters in <b><i>points</i></b> (pt)

<span class="smallblock">BLANK</span>&nbsp;or omitted or 0 uses the 1.8 times the default font-size for the document.</p>
<p class="manual_param_dt"><span class="parameter">columngap</span></p>
<p class="manual_param_dd">Sets the gap between columns (if set) in millimeters.

<span class="smallblock">BLANK</span>&nbsp;or omitted uses the default value.

<span class="smallblock">DEFAULT</span>: 5 (mm)</p>
<p class="manual_param_dt"><span class="parameter">font </span></p>
<p class="manual_param_dd">Set the font-family for the Index.

<span class="smallblock">BLANK</span>&nbsp;or omitted uses default font-family for the document.</p>
<p class="manual_param_dt"><span class="parameter">divletterfont </span></p>
<p class="manual_param_dd">Set the font-family for the dividing letters in the Index.

<span class="smallblock">BLANK</span>&nbsp;or omitted uses default font-family for the document.</p>
<p class="manual_param_dt"><span class="parameter">uselinking</span></p>
<p class="manual_param_dd">Specify whether to add hyperlinks (internal links) to the entries in the document Index.

<span class="smallblock">TRUE</span> or 1: add links to Index 

<span class="smallblock">BLANK</span>&nbsp;or omitted, 0 or <span class="smallblock">FALSE</span>: do not add links to the Index

<span class="smallblock">DEFAULT</span>: <span class="smallblock">FALSE</span></p>
<p>&nbsp;</p>
<h2>Changelog</h2>
<table class="bpmTopic"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>2.2</td>
<td>
<p>Function was added as a synonym for CreateReference().</p>
</td>
</tr>
<tr>
<td>3.0</td>
<td><span class="parameter">uselinking</span> parameter was added</td>
</tr>
<tr>
<td>3.0</td>
<td>Default value for <span class="parameter">linespacing</span> changed to 1.2</td>
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

$mpdf->WriteHTML('<p>Beginning bit of document...</p>');

$mpdf->IndexEntry("Buffalo");

$mpdf->WriteHTML('<p>Your text which refers to a buffalo, which you would like to see in the Index</p>');

$mpdf->AddPage();    

$mpdf->WriteHTML('<h2>Index</h2>',2);

$mpdf->CreateIndex(2, '', '', 3, 1, '', 5, 'serif','sans-serif');

$mpdf=Output();

?>
{% endhighlight %}

<div class="alert alert-info" role="alert"><b>Note:</b> There is no HTML equivalent of CreateIndex()</div>
<h2>See Also</h2>
<ul>
<li class="manual_boxlist"><a href="/reference/mpdf-functions/indexentry.html">IndexEntry()</a> - Add an Index entry in the document </li>
<li class="manual_boxlist">&lt;<a href="/reference/html-control-tags/tocentry.html">indexentry</a>&gt; - Mark an Index entry in the document </li>
</ul>
</div>
</div>

