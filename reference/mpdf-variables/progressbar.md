---
layout: page
title: progressBar
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/progressbar.html
modification_time: 2015-08-05T12:02:22+00:00
---



<p>(mPDF &gt;= 4.2)</p>
<p>progressBar –Specify whether to show progress bars during file generation</p>
<h2>Description</h2>
<p class="manual_block">void <b>progressBar</b></p>
<p>Specify whether to show progress bars during file generation. Not recommended for general use, but may be helpful for development purposes, or for slow document generation.</p>

<div class="alert alert-info" role="alert"><strong>Note:</strong> You should only change this variable in the configuration file <span class="filename">config.php</span>&nbsp; If you want to set this at runtime, use <a href="{{ "/reference/mpdf-functions/startprogressbaroutput.html" | prepend: site.baseurl }}">StartProgressBarOutput()</a></div>

<div class="alert alert-info" role="alert"><strong>Note:</strong> You may need to define _MPDF_URI if you are using progress bars - see <a href="{{ "/reference/mpdf-functions/startprogressbaroutput.html" | prepend: site.baseurl }}">StartProgressBarOutput()</a></div>
<h2>Values</h2>
<p class="manual_param_dt"><span class="parameter">progressBar</span> =&nbsp;&nbsp;<span class="smallblock"> </span>2 | 1 | <span class="smallblock">FALSE</span></p>
<p class="manual_param_dd"><b>Values</b>

2: display multiple progress bars for detailed examination of progress

1 : display 1 progress bar (simple form)

<span class="smallblock">FALSE</span>: disable progress bars

<span class="smallblock">DEFAULT</span>: <span class="smallblock">FALSE</span></p>
<h2>Changelog</h2>
<table class="table"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>4.2</td>
<td>Variable was added.</td>
</tr>
</tbody> </table>
<h2>See Also</h2>
<ul>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/startprogressbaroutput.html" | prepend: site.baseurl }}">StartProgressBarOutput()</a> - show progress bars during file generation</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/progbar-heading.html" | prepend: site.baseurl }}">progbar_heading</a> - define customised heading for progress bars</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/progbar-althtml.html" | prepend: site.baseurl }}">progbar_altHTML</a> - define customised HTML for progress bars</li>
</ul>
<p>&nbsp;</p>
