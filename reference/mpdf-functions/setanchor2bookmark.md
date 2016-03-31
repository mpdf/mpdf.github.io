---
layout: page
title: SetAnchor2Bookmark()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setanchor2bookmark.html
modification_time: 2015-08-05T12:00:54+00:00
---

<p>(mPDF &gt;= 1.0)</p>
<p>SetAnchor2Bookmark – Specifies whether PDF Bookmarks are created automatically from HTML anchors</p>

# Description

<p class="manual_block">void <b>SetAnchor2Bookmark</b> ( int <span class="parameter">$mode</span> )</p>
<p>Specifies whetherPDF Book marks are created from HTML anchors (e.g. &lt;a name="Introduction" /&gt;) . This function simply sets the variable <span class="parameter">$anchor2Bookmark</span></p>

<div class="alert alert-info" role="alert"><strong>Note:</strong> This function/method was altered in mPDF 2.2 by capitalising the first letter of the name. As function/method names in PHP have hitherto been case-insensitive, this should not cause any problems, but it is recommended where possible to use the preferred spelling.</div>

# Parameters

<p class="manual_param_dt"><span class="parameter">mode</span></p>
<p class="manual_param_dd"><b>Values</b>

0 - does not generate a bookmark

1 - generate a bookmark using the text value of the <span class="parameter">name</span> attribute

<span class="smallblock">DEFAULT</span>: 0<span class="smallblock"> </span></p>

# Changelog

<table class="table"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>3.0</td>
<td><span class="parameter">mode</span> = 2 removed</td>
</tr>
</tbody> </table>

# Examples

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

# Notes

<div class="alert alert-info" role="alert"><strong>Note:</strong> Prior to mPDF 3.0 you could specify <span class="parameter">mode</span> = 2 which added the page number to the bookmark e.g. Introduction (p.32). This was removed as it did not accurately handle pagebreaks etc.</div>
