---
layout: page
title: progressBar
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/progressbar.html
modification_time: 2015-08-05T12:02:22+00:00
---

(mPDF >= 4.2 && < 7.0)

<div class="alert alert-danger" role="alert" markdown="1">
  **Note:** This feature was removed in mPDF 7.0
</div>

progressBar – Specify whether to show progress bars during file generation

# Description

bool `progressBar`

Specify whether to show progress bars during file generation. Not recommended for general use, but may be helpful for development purposes, or for slow document generation.

<div class="alert alert-info" role="alert" markdown="1">
	**Note:** You should only change this variable in the configuration file <span class="filename">config.php</span> 
	If you want to set this at runtime, use 
	<a href="{{ "/reference/mpdf-functions/startprogressbaroutput.html" | prepend: site.baseurl }}">StartProgressBarOutput()</a>
</div>

<div class="alert alert-info" role="alert" markdown="1">
	**Note:** You may need to define _MPDF_URI if you are using progress bars -
	see <a href="{{ "/reference/mpdf-functions/startprogressbaroutput.html" | prepend: site.baseurl }}">StartProgressBarOutput()</a>
</div>

# Values

<span class="parameter">$progressBar</span> =  <span class="smallblock"> </span>2 | 1 | <span class="smallblock">FALSE</span>

**Values**

2: display multiple progress bars for detailed examination of progress

1: display 1 progress bar (simple form)

<span class="smallblock">FALSE</span>: disable progress bars

<span class="smallblock">DEFAULT</span>: <span class="smallblock">FALSE</span>

# Changelog

<table class="table">
<thead>
	<tr><th>Version</th><th>Description</th></tr>
</thead>
<tbody>
	<tr><td>4.2</td><td>Variable was added.</td></tr>
	<tr><td>7.0</td><td>Variable was removed along with progressbar capabilities.</td></tr>
</tbody>
</table>

# See Also

<ul>
	<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/startprogressbaroutput.html" | prepend: site.baseurl }}">StartProgressBarOutput()</a> - show progress bars during file generation</li>
	<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/progbar-heading.html" | prepend: site.baseurl }}">progbar_heading</a> - define customised heading for progress bars</li>
	<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/progbar-althtml.html" | prepend: site.baseurl }}">progbar_altHTML</a> - define customised HTML for progress bars</li>
</ul>

