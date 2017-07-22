---
layout: page
title: Memory problems
parent_title: Troubleshooting
permalink: /troubleshooting/memory-problems.html
modification_time: 2015-08-05T12:00:35+00:00
---

mPDF uses a lot of memory on the server. If you get an error message that you have 
exceeded your memory limits, try the following:

It is more efficient in very long documents to process the HTML code in small chunks rather than as one large HTML string
use `ini_set("memory_limit","128M")` or similar at the top of your script to allocate more memory
generate a smaller <span class="filename">mpdf.php</span> file. 

* see <a href="{{ "/installation-setup/reducing-memory-usage.html" | prepend: site.baseurl }}">Reducing Memory Usage</a>
  avoid using GIF image files, or PNG images with the alpha channel (transparency) or interlaced PNG images
* set <a href="{{ "/reference/mpdf-variables/simpletables.html" | prepend: site.baseurl }}">simpleTables</a> if you are 
  using large tables and do not require complex borders or padding setting 
* <a href="{{ "/reference/mpdf-variables/packtabledata.html" | prepend: site.baseurl }}">packTabledata</a> can save 
  considerably on memory usage, BUT at a significant cost in processing time 


# PHP 5.3.x on Windows

Memory can become exhausted rapidly when running PHP 5.3.x on Windows. I believe this may be a bug in the Windows 
version of PHP. A script that exhausts 256 MB memory on Windows may only use 18 MB when run on Linux. It appears 
to happen most often (or exclusively) when using tables.

So if you are only using Windows in a test environment and use Linux for production, you should consider setting 
the memory limit to maximum on Windows e.g. `ini_set("memory_limit","-1")`.

Small changes to your code e.g. the CSS applied to table elements can have dramatic, but unpredictable effects on
the memory usage. For example changing an attribute on a table cell to a css style.

Otherwise you will need to refer to the tips above, especially 
<a href="{{ "/reference/mpdf-variables/simpletables.html" | prepend: site.baseurl }}">simpleTables</a> or 
<a href="{{ "/reference/mpdf-variables/packtabledata.html" | prepend: site.baseurl }}">packTabledata</a>

One user has reported this problem disappearing when updating from 5.3.8 to PHP 5.3.10, so this may be a bug that is fixed?
