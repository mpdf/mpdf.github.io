---
layout: page
title: Directories for temporary files
parent_title: Installation & Setup
permalink: /installation-setup/folders-for-temporary-files.html
modification_time: 2017-03-14T11:59:24+00:00
---

mPDF is pre-configured to use `<path to mpdf>/tmp/` as a directory to write temporary files
(mainly for images). Write permissions must be set for read/write access for the tmp directory.

As the default temp directory will be in vendor folder, is is advised to set custom temporary directory.

If you wish to use a different directory for temporary files, you should define `tempDir` key in constructor
`$config` parameter.

for mPDF < 7.0, there are constants `_MPDF_TEMP_PATH` and `_MPDF_TTFONTDATAPATH` which can be used to alter
default temporary files directories.

```php
<?php

// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf(['tempDir' => __DIR__ . '/custom/temp/dir/path']);

```

## Images

Up to version 6.x, Images will still be processed without write permissions to the temp folder, but at considerable cost
in processing time and memory usage.

## Fonts

Up to version 6.x, fonts can still be used and embedded without write permissions to this folder, but at some cost in processing time
and memory usage.

