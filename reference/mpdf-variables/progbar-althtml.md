---
layout: page
title: progbar_altHTML
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/progbar-althtml.html
modification_time: 2015-08-05T12:02:21+00:00
---

<p>mPDF &gt;= 5.0

Customisable Progress bar

Default set in config.php

Default value: ''</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp; // e.g. '&lt;html&gt;&lt;body&gt;Creating PDF file. Please wait...';

&nbsp;&nbsp;&nbsp; // Should include &lt;html&gt; and &lt;body&gt; but NOT end tags

&nbsp;&nbsp;&nbsp; // Can incude &lt;head&gt; and link to stylesheet etc.</p>

# See Also

<ul>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/startprogressbaroutput.html" | prepend: site.baseurl }}">StartProgressBarOutput()</a> - show progress bars during file generation</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/progressbar.html" | prepend: site.baseurl }}">progressBar</a> –Specify whether to show progress bars during file generation</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/progbar-heading.html" | prepend: site.baseurl }}">progbar_heading</a> - define customised heading for progress bars</li>
</ul>
