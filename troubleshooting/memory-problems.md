---
layout: page
title: Memory problems
parent_title: Troubleshooting
permalink: /troubleshooting/memory-problems.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>mPDF uses a lot of memory on the server. If you get an error message that you have exceeded your memory limits, try the following:</p>
<ul>
<li>it is more efficient in very long documents to process the HTML code in small chunks rather than as one large HTML string</li>
<li>use <span class="filename">ini_set("memory_limit","128M")</span> or similar at the top of your script to allocate more memory</li>
<li>generate a smaller <span class="filename">mpdf.php</span> file - see <a href="{{ "/installation-setup/reducing-memory-usage.html" | prepend: site.baseurl }}">Reducing Memory Usage</a></li>
<li>avoid using GIF image files, or PNG images with the alpha channel (transparency) or interlaced PNG images</li>
<li>set <a href="{{ "/reference/mpdf-variables/simpletables.html" | prepend: site.baseurl }}">simpleTables</a> if you are using large tables and do not require complex borders or padding</li>
<li>setting <a href="{{ "/reference/mpdf-variables/packtabledata.html" | prepend: site.baseurl }}">packTabledata</a> can save considerably on memory usage, BUT at a significant cost in processing time</li>
<li>setting <a href="index8ff2.html?tid=473">cacheTables</a> = <span class="smallblock">TRUE</span> makes the most efficient use of memory, but requires temporary data written to files (which may be resource intensive) and will add significantly to processing time</li>
<li>use a limited number of fonts, avoiding large font file sizes</li>
</ul>
<h2>PHP 5.3.x on Windows</h2>
<p>Memory can become exhausted rapidly when running PHP 5.3.x on Windows. I believe this may be a bug in the Windows version of PHP. A script that exhausts 256Mb memory on Windows may only use 18Mb when run on Linux. It appears to happen most often (or exclusively) when using tables.</p>
<p>So if you are only using Windows in a test environment and use Linux for production, you should consider setting the memory limit to maximum on Windows e.g. <span class="filename">ini_set("memory_limit","-1")</span>.</p>
<p>Small changes to your code e.g. the CSS applied to table elements can have dramatic, but unpredictable effects on the memory usage. For example changing an attribute on a table cell to a css style.</p>
<p>Otherwise you will need to refer to the tips above, especially <a href="{{ "/reference/mpdf-variables/simpletables.html" | prepend: site.baseurl }}">simpleTables</a>, <a href="{{ "/reference/mpdf-variables/packtabledata.html" | prepend: site.baseurl }}">packTabledata</a>, or <a href="index8ff2.html?tid=473">cacheTables</a></p>

<div class="alert alert-info" role="alert">One user has reported this problem disappearing when updating from 5.3.8 to PHP 5.3.10, so this may be a bug that is fixed?</div>
<ul> </li>
</ul>
</div>
</div>

