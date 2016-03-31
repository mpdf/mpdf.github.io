---
layout: page
title: SetAlpha()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setalpha.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 1.0)</p>
<p>SetAlpha – Set the opacity for Images</p>
<h2>Description</h2>

<div class="alert alert-info" role="alert">void <b>SetAlpha</b> ( float <span class="parameter">$alpha</span> [, integer <span class="parameter">$blend</span> ])</div>
<p>Set the opacity and blend mode for Images</p>
<h2>Parameters</h2>
<p class="manual_param_dt"><span class="parameter">alpha</span></p>
<p class="manual_param_dd">This parameter specifies the opacity for any subsequent images written to the current document.</p>
<p class="manual_param_dd"><b>Values</b>

Float: 0 (transparent) to 1 (opaque)</p>
<p class="manual_param_dt"><span class="parameter">blend</span></p>
<p class="manual_param_dd">This parameter specifies the blend mode.</p>
<p class="manual_param_dd"><b>Values</b>

<span class="smallblock">STRING</span> - One of the following:

Normal

Multiply

Screen

Overlay

Darken

Lighten

ColorDodge

ColorBurn

HardLight

SoftLight

Difference

Exclusion

Hue

Saturation

Color

Luminosity

<span class="smallblock">DEFAULT</span>: Normal</p>
<h2>Changelog</h2>
<table class="bpmTopic"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>1.0</td>
<td>Function was added.</td>
</tr>
</tbody> </table>
<h2>Examples</h2>

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<?php

<?php

include("../mpdf.php");

$mpdf=new mPDF();

$mpdf->SetAlpha(0.5); 

$mpdf->WriteHTML('<img src="clematis.jpg" />');

$mpdf->SetAlpha(1); 

// This produces the identical result as the last 3 lines

// $mpdf->WriteHTML('<img src="clematis.jpg" opacity="0.5" />');

$mpdf->Output();

exit;

?>
{% endhighlight %}

<h2>See Also</h2>
<ul>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/image.html" | prepend: site.baseurl }}">Image()</a> - Write an image to the current document</li>
</ul>
<p>&nbsp;</p>
</div>
</div>

