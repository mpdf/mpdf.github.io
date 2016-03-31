---
layout: page
title: WriteFixedPosHTML()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/writefixedposhtml.html
modification_time: 2015-08-05T12:01:16+00:00
---

<p>(mPDF &gt;= 4.0)</p>
<p>WriteFixedPosHTML — Write HTML to a fixed position on the current page</p>

# Description

<p class="manual_block">void <b>WriteFixedPosHTML</b> ( string <span class="parameter">$html</span> , float <span class="parameter">$x</span> , float <span class="parameter">$y</span> , float <span class="parameter">$w</span> , float <span class="parameter">$h</span> [, string <span class="parameter">$overflow</span> ])</p>
<p>Write HTML to a fixed position on the current page.</p>

# Parameters

<p class="manual_param_dt"><span class="parameter">html</span></p>
<p class="manual_param_dd">This parameter specifies the text to write to the document - parsed as HTML code</p>
<p class="manual_param_dt"><span class="parameter">x</span></p>
<p class="manual_param_dd">Sets the <span class="parameter">x</span> position of the (left edge) of the block element, set in mm from the left of the page.<span class="smallblock">

</span></p>
<p class="manual_param_dt"><span class="parameter">y</span></p>
<p class="manual_param_dd">Sets the <span class="parameter">y</span> position of the (top edge) of the block element, set in mm from the top of the page.<span class="smallblock">

</span></p>
<p class="manual_param_dt"><span class="parameter">w</span></p>
<p class="manual_param_dd">Sets the width of the block element, in mm.<span class="smallblock">

</span></p>
<p class="manual_param_dt"><span class="parameter">h</span></p>
<p class="manual_param_dd">Sets the height of the block element, in mm.<span class="smallblock">

</span></p>
<p><span class="parameter">overflow</span></p>
<p class="manual_param_dd">Specifies how to handle text which would not fit inside the block element, with its dimensions as specified.

<span class="smallblock"></span></p>
<p class="manual_param_dd"><b>Values</b>

visible: show all text, even if it spills over outside the dimensions of the block element

hidden: hide any text (clip) which spills over outside the dimensions of the block element

auto: force text to be reduced in size if required to fit inside the dimensions of the block element

<span class="smallblock">BLANK</span> uses the default value of 'visible'</p>

# Changelog

<table class="table"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>4.0</td>
<td>
<p>Function was added.</p>
</td>
</tr>
</tbody> </table>

# Examples

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<?php

$mpdf=new mPDF();

$mpdf->WriteHTML('<p>Beginning bit of document...</p>');

$mpdf->WriteFixedPosHTML('<p>This text will appear just where I want it!</p>', 30, 120, 50, 90, 'auto');

$mpdf=Output();

?>
{% endhighlight %}

# See Also

<ul>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/writehtml.html" | prepend: site.baseurl }}">WriteHTML</a> - Add an Index entry in the document </li>
<li class="manual_boxlist"><a href="{{ "/what-else-can-i-do/fixed-position-blocks.html" | prepend: site.baseurl }}">Fixed position elements</a> - About fixed-position elements (using CSS)

</li>
</ul>
