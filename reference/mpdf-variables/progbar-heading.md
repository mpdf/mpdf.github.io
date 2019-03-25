---
layout: page
title: progbar_heading
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/progbar-heading.html
modification_time: 2015-08-05T12:02:22+00:00
---

(mPDF &ge; 5.0 && < 7.0)

<div class="alert alert-danger" role="alert" markdown="1">
  **Note:** This feature was removed in mPDF 7.0
</div>

Customisable Progress bar

Default set as a <a href="{{ "/configuration/configuration-v7-x.html" | prepend: site.baseurl }}">configuration variable</a>

Default value: 'mPDF file progress'

# Changelog

<table class="table">
<thead>
<tr>
  <th>Version</th>
  <th>Description</th>
</tr>
</thead>
<tbody>
<tr>
  <td>5.0</td>
  <td>Variable was added.</td>
</tr>
<tr>
  <td>7.0</td>
  <td>Variable was removed along with progressbar capabilities.</td>
</tr>
</tbody>
</table>

# See Also

* <a href="{{ "/reference/mpdf-functions/startprogressbaroutput.html" | prepend: site.baseurl }}">StartProgressBarOutput()</a> - show progress bars during file generation
* <a href="{{ "/reference/mpdf-variables/progressbar.html" | prepend: site.baseurl }}">progressBar</a> –Specify whether to show progress bars during file generation
* <a href="{{ "/reference/mpdf-variables/progbar-althtml.html" | prepend: site.baseurl }}">progbar_altHTML</a> - define customised HTML for progress bars
