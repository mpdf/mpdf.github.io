---
layout: page
title: Notice warnings
parent_title: Troubleshooting
permalink: /troubleshooting/notice-warnings.html
modification_time: 2015-08-05T12:00:34+00:00
---

If you get something like:

**Notice: Undefined index: win-1252 in src/Mpdf.php on line 3741**

you might need to suppress NOTICE warnings using e.g.

```php
<?php
$former = error_reporting(E_ALL ^ E_NOTICE);

// or

$former = error_reporting(0);

```

Include this at the start of your script before instantiating and running mPDF.

It is a good practice to return the former `error_reporting` after

```php
<?php
error_reporting($former);

```

Also, you could want to report the notice in the [mPDF Github issue tracker](https://github.com/mpdf/mpdf/issues)
