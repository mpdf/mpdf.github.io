---
layout: page
title: SetDisplayMode()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setdisplaymode.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 1.0)</p>
<p>SetDisplayMode – Specify the initial Display Mode when the PDF file is opened in Adobe Reader</p>
<h2>Description</h2>

<div class="alert alert-info" role="alert">void <b>SetDisplayMode</b> ( mixed <span class="parameter">$zoom</span> [, string <span class="parameter">$layout</span> ])</div>
<p>Specify the initial Display Mode when the PDF file is opened in Adobe Reader. When the user opens the finished file in Adobe Reader, these values will determine the initial appearance and layout.</p>
<h2>Parameters</h2>
<p class="manual_param_dt"><span class="parameter">zoom</span></p>
<p class="manual_param_dd">This parameter specifies the magnification (zoom) of the display when the document is opened.</p>
<p class="manual_param_dd"><b>Values</b> (case-sensitive)

fullpage: Fit a whole page in the screen

fullwidth: Fit the width of the page in the screen

real: Display at real size

default: User's default setting in Adobe Reader

<span class="smallblock">INTEGER</span> : Display at a percentage zoom (e.g. 90 will display at 90% zoom)</p>
<p class="manual_param_dt"><span class="parameter">layout</span></p>
<p class="manual_param_dd">Specify the page layout to be used when the document is opened.

<span class="smallblock">DEFAULT</span>: "continuous"</p>
<p class="manual_param_dd"><b>Values</b> (case-sensitive)

single: Display one page at a time

continuous: Display the pages in one column

two: Display the pages in two columns (first page determined by document direction (e.g. RTL))

twoleft: Display the pages in two columns, with the first page displayed on the left side (mPDF &gt;= 5.2)

tworight: Display the pages in two columns, with the first page displayed on the right side (mPDF &gt;= 5.2)

default: User's default setting in Adobe Reader</p>
<h2>Examples</h2>

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<?php

<?php

$mpdf=new mPDF();

$mpdf->SetDisplayMode('fullwidth');

$mpdf->WriteHTML('<p>Hallo World</p>');

$mpdf->Output('filename.pdf');

?>
{% endhighlight %}

{% highlight php %}
Example #2
{% endhighlight %}

{% highlight php %}
<?php

// Display at 90% zoom - note the 90 is a number not a string

$mpdf->SetDisplayMode(90);

// Display two pages side by side (book style)

$mpdf->SetDisplayMode('fullpage','two');
{% endhighlight %}

<h2>Changelog</h2>
<table class="bpmTopic"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>1.0</td>
<td>
<p>Function was added.</p>
</td>
</tr>
<tr>
<td>5.2</td>
<td>2 options for layout parameter added (twoleft and tworight)

</td>
</tr>
</tbody> </table>
<h2>See Also</h2>
<ul>
<li class="manual_boxlist"><a href="/reference/mpdf-functions/setdisplaypreferences.html">SetDisplayPreferences()</a> - Defines the way the document shall be presented on the screen</li>
</ul>
</div>
</div>

