---
layout: page
title: collapseBlockMargins
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/collapseblockmargins.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 4.2)</p>
<p>collapseBlockMargins – Specify whether to collapse (vertical) margins between block elements</p>
<h2>Description</h2>

<div class="alert alert-info" role="alert">void <b>collapseBlockMargins</b></div>
<p>Specify whether to collapse (vertical) margins between block elements. In line with CSS specification, the top/bottom margins of adjoining block-style elements are collapsed to the larger of the two. This works between all block elements such as DIV, P, H1-6 etc. and also lists and tables.</p>
<p>NB Firefox does not collapse margins above and below tables, but IE8 does.</p>
<h2>Values</h2>
<p class="manual_param_dt"><span class="parameter">collapseBlockMargins</span> =&nbsp; <span class="smallblock">TRUE </span>| <span class="smallblock">FALSE</span></p>
<p class="manual_param_dd"><b>Values</b>

<span class="smallblock">TRUE </span>: enable collapse

<span class="smallblock">FALSE</span>: disable collapse

<span class="smallblock">DEFAULT</span>: <span class="smallblock">TRUE</span></p>
<h2>Changelog</h2>
<table class="bpmTopic"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>4.2</td>
<td>Variable was added.</td>
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

$html = '

<div style="margin-bottom: 3em;">This DIV has a bottom margin defined as 3em</div>

<div style="margin-top: 2em;">This DIV has a top margin defined as 2em. The space between these DIVs will collapse to 3em</div>';

$mpdf->WriteHTML($html);

$mpdf->Output();

?>
{% endhighlight %}

<div class="alert alert-info" role="alert"><b>Note:</b> The collapse of margins at the top and bottom of the page is unaffected by this variable. This is set by the custom CSS property <code>margin-collapse: collapse|none</code> which can be defined in the <code>defaultCSS</code> variable in <span class="filename">config.php</span> or elsewhere.</div>
<p>&nbsp;</p>
</div>
</div>

