---
layout: page
title: Folders for temporary files
parent_title: Installation & Setup
permalink: /installation-setup/folders-for-temporary-files.html
modification_time: 2015-08-05T11:59:24+00:00
---

mPDF is configured to use <span class="filename">[your_path_to_mpdf]/tmp/</span> as a folder to write temporary files (mainly for images), and <span class="filename">[your_path_to_mpdf]/ttfontdata/</span> as a folder to cache font metrics data. Write permissions should ideally be set on both these folders to allow read/write access for the script.

## Images

If you wish to use a different folder for temporary files, you should define the constant `_MPDF_TEMP_PATH` before including the <span class="filename">mpdf.php</span> file e.g.

{% highlight php %}
<?php

define("_MPDF_TEMP_PATH", '../../common/tempfiles/');

// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new mPDF();
{% endhighlight %}

Images will still be processed without write permissions to this folder, but at considerable cost in processing time and memory usage.

## Fonts

If you wish to use a different folder for temporary files, you should define the constant `_MPDF_TTFONTDATAPATH` before including the <span class="filename">mpdf.php</span> file

Fonts can still be used and embedded without write permissions to this folder, but at some cost in processing time and memory usage.

