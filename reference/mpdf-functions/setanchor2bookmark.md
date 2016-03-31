---
layout: page
title: SetAnchor2Bookmark()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setanchor2bookmark.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 1.0)</p>
<p>SetAnchor2Bookmark – Specifies whether PDF Bookmarks are created automatically from HTML anchors</p>
<h2>Description</h2>

<div class="alert alert-info" role="alert">void <b>SetAnchor2Bookmark</b> ( int <span class="parameter">$mode</span> )</div>
<p>Specifies whetherPDF Book marks are created from HTML anchors (e.g. &lt;a name="Introduction" /&gt;) . This function simply sets the variable <span class="parameter">$anchor2Bookmark</span></p>

<div class="alert alert-info" role="alert"><b>Note: </b>This function/method was altered in mPDF 2.2 by capitalising the first letter of the name. As function/method names in PHP have hitherto been case-insensitive, this should not cause any problems, but it is recommended where possible to use the preferred spelling.</div>
<h2>Parameters</h2>
<p class="manual_param_dt"><span class="parameter">mode</span></p>
<p class="manual_param_dd"><b>Values</b>

0 - does not generate a bookmark

1 - generate a bookmark using the text value of the <span class="parameter">name</span> attribute

<span class="smallblock">DEFAULT</span>: 0<span class="smallblock"> </span></p>
<h2>Changelog</h2>
<table class="bpmTopic"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>3.0</td>
<td><span class="parameter">mode</span> = 2 removed</td>
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

$mpdf->SetAnchor2Bookmark(1);

$mpdf->WriteHTML('<h1><a name="Section 1" />The title</h1>);

$mpdf->Output();

?>

This will create a Bookmark in the PDF document: "Section 1"
{% endhighlight %}

<h2>Notes</h2>

<div class="alert alert-info" role="alert"><b>Note</b>: Prior to mPDF 3.0 you could specify <span class="parameter">mode</span> = 2 which added the page number to the bookmark e.g. Introduction (p.32). This was removed as it did not accurately handle pagebreaks etc.</div>
</div>
</div>

