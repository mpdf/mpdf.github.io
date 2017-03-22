---
layout: page
title: SetAnchor2Bookmark()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setanchor2bookmark.html
modification_time: 2015-08-05T12:00:54+00:00
---

(mPDF >= 1.0)

SetAnchor2Bookmark – Specifies whether PDF Bookmarks are created automatically from HTML anchors

# Description

void **SetAnchor2Bookmark** ( int <span class="parameter">$mode</span> )

Specifies whetherPDF Book marks are created from HTML anchors (e.g. &lt;a name="Introduction" /&gt;) . This function 
simply sets the variable <span class="parameter">$anchor2Bookmark</span>

<div class="alert alert-info" role="alert" markdown="1">
	**Note:** This function/method was altered in mPDF 2.2 by capitalising the first letter of the name. 
    As function/method names in PHP have hitherto been case-insensitive, this should not cause any problems, but it is 
    recommended where possible to use the preferred spelling.
</div>

# Parameters

<span class="parameter">$mode</span>

**Values**

0 - does not generate a bookmark

1 - generate a bookmark using the text value of the <span class="parameter">$name</span> attribute

<span class="smallblock">DEFAULT</span>: 0<span class="smallblock"> </span>

# Changelog

<table class="table"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>3.0</td>
<td><span class="parameter">$mode</span> = 2 removed</td>
</tr>
</tbody> </table>

# Examples

Example #1

{% highlight php %}
<?php

$mpdf = new \Mpdf\Mpdf();

$mpdf->SetAnchor2Bookmark(1);

$mpdf->WriteHTML('<h1><a name="Section 1" />The title</h1>');

$mpdf->Output();

{% endhighlight %}

This will create a Bookmark in the PDF document: "Section 1"

# Notes

<div class="alert alert-info" role="alert" markdown="1">
	**Note:** Prior to mPDF 3.0 you could specify <span class="parameter">$mode</span> = 2 which added 
    the page number to the bookmark e.g. Introduction (p.32). This was removed as it did not accurately handle 
    pagebreaks etc.
</div>
