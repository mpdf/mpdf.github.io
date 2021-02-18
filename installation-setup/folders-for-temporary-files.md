---
layout: page
title: Directories for temporary files
parent_title: Installation & Setup
permalink: /installation-setup/folders-for-temporary-files.html
modification_time: 2019-03-06T09:09:24+01:00
---

mPDF is pre-configured to use `<path to mpdf>/tmp` as a directory to write temporary files
(mainly for images and fonts).

It is advised to set custom temporary directory as the default temporary directory is in composer `vendor` directory.
Permissions must be set for read/write access for the specified path.

If you wish to use a different directory for temporary files, you should define `tempDir` key in constructor
`$config` parameter.

Since 8.0.9, mPDF will create a subdirectory to store cache files to not interfere with other temporary
files (eg. when `sys_get_temp_dir()` is used for `tempDir`)

mPDF autocleans its temp directory from potentialy stale files. By default it removes files older than 1 hour.
Since 8.0.9, this can be changed by `cacheCleanupInterval`
config variable set either to number of seconds of stale files age, or `false` to turn the cleanup off.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** Never use `777` permissions for directories as those can mean a security issue.
</div>

```php
<?php

// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf(['tempDir' => __DIR__ . '/custom/temp/dir/path']);
```

For mPDF `<7.0`, there are constants `_MPDF_TEMP_PATH` and `_MPDF_TTFONTDATAPATH` which can be used to alter
default temporary files directories.

## Images

Up to version 6.x, Images will still be processed without write permissions to the temp directory, but at considerable cost
in processing time and memory usage.

## Fonts

Up to version 6.x, fonts can still be used and embedded without write permissions to this directory, but at some cost in processing time
and memory usage.

