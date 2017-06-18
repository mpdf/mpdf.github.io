---
layout: page
title: progbar_altHTML
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/progbar-althtml.html
modification_time: 2015-08-05T12:02:21+00:00
---

(mPDF >= 5.0 && < 7.0)

<div class="alert alert-danger" role="alert" markdown="1">
  **Note:** This feature was removed in mPDF 7.0
</div>

Customisable Progress bar

Default set in config.php

Default value: ''

// e.g. '&lt;html&gt;&lt;body&gt;Creating PDF file. Please wait...';
// Should include &lt;html&gt; and &lt;body&gt; but NOT end tags
// Can incude &lt;head&gt; and link to stylesheet etc.

# Changelog

<table class="table">
<thead>
	<tr><th>Version</th><th>Description</th></tr>
</thead>
<tbody>
	<tr><td>5.0</td><td>Variable was added.</td></tr>
	<tr><td>7.0</td><td>Variable was removed along with progressbar capabilities.</td></tr>
</tbody>
</table>

# See Also

- <a href="{{ "/reference/mpdf-functions/startprogressbaroutput.html" | prepend: site.baseurl }}">StartProgressBarOutput()</a> - show progress bars during file generation
- <a href="{{ "/reference/mpdf-variables/progressbar.html" | prepend: site.baseurl }}">progressBar</a> –Specify whether to show progress bars during file generation
- <a href="{{ "/reference/mpdf-variables/progbar-heading.html" | prepend: site.baseurl }}">progbar_heading</a> - define customised heading for progress bars
