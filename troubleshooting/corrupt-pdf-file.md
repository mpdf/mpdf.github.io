---
layout: page
title: Corrupt PDF file
parent_title: Troubleshooting
permalink: /troubleshooting/corrupt-pdf-file.html
modification_time: 2015-08-05T12:00:33+00:00
---

If you get a message saying "*Corrupt PDF file: does not start with %PDF*", it may be because your script - either
mPDF or an error in your PHP code - has output an error message. The browser is expecting a file in PDF format,
which should start with `%PDF` and instead it gets some text like an error message.

To show error message(s):

```php
<?php

$mpdf = new \Mpdf\Mpdf();
$mpdf->debug = true;
$mpdf->Output();
```

Also, you should always use try/catch block for a `\Mpdf\MpdfException` to find out more:

```php
<?php
try {
    $mpdf = new \Mpdf\Mpdf();
    $mpdf->WriteHTML('Hello World');
    // Other code
    $mpdf->Output();
} catch (\Mpdf\MpdfException $e) { // Note: safer fully qualified exception name used for catch
    // Process the exception, log, print etc.
    echo $e->getMessage();
}
```
