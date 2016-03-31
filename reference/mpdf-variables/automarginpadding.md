---
layout: page
title: autoMarginPadding
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/automarginpadding.html
modification_time: 2015-08-05T12:01:40+00:00
---



<p>(mPDF &gt;= 4.0)</p>
<h2>Description</h2>
<p class="manual_block">mixed <b>autoMarginPadding</b></p>
<p>Specify padding between top-margin and header in 'stretch' mode. When <span class="parameter">setAutoTopMargin</span> or <span class="parameter">setAutoBottomMargin</span> are set to 'stretch' <span class="parameter">autoMarginPadding</span> defines the minimum distance in mm that will be forced between the bottom of the header and the top of the main text (or bottom of text and footer).</p>
<h2>Values</h2>
<p class="manual_param_dt"><span class="parameter">autoMarginPadding</span>&nbsp;</p>
<p class="manual_param_dd"><b>Values</b>

<span class="smallblock">FLOAT</span> Value in millimeters

<span class="smallblock">DEFAULT</span> 2</p>
<h2>See Also</h2>
<ul>
<li class="manual_boxlist"><a href="{{ "/headers-footers/headers-top-margins.html" | prepend: site.baseurl }}">Headers &amp; Top margins </a></li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/setautotopmargin.html" | prepend: site.baseurl }}">setAutoTopMargin</a> -Specify mode of determining top-margin position

</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/setautobottommargin.html" | prepend: site.baseurl }}">setAutoBottomMargin</a> -Specify mode of determining bottom-margin position</li>
</ul>
<p>&nbsp;</p>
