---
layout: page
title: Error messages
parent_title: Troubleshooting
permalink: /troubleshooting/error-messages.html
modification_time: 2017-09-25T18:00:32+00:00
---

**"Output has already been sent from the script - PDF file generation aborted."**

If you see this message it means that the script has sent output to the browser before starting to generate the PDF file.

Most likely causes are:

- a PHP error message - this should be displayed in your browser giving details of the problem
- inadvertent whitespace in you PHP script files e.g. leaving space before or after the PHP tags `<?php` or `?>`.
  Note: It is recommended to leave out `?>` on the end of php-files.
- you are using object_buffering to generate content for your PDF file - see below

If no error message appears, try setting:

```php
<?php

$mpdf = new \Mpdf\Mpdf(['debug' => true]);

```
or use a <a href="{{ "/installation-setup/logging.html" | prepend: site.baseurl }}">PSR-3 Logger</a> for more detailed logging.

## Object buffering

In order to catch error messages and prevent them being included in a PDF file (which will be corrupted), mPDF 2.5
introduced a method to detect whether there had been any output from the script prior to generating the PDF file in
`Output()`. This includes checking for `ob_get_contents()` - a PHP function to check if there is any output in the
object-buffer.

If you use object_buffering in the process of preparing the text for mPDF, this will falsely trigger the error message.
If this is the case, add the following to your script to prevent it:

```php
<?php

$mpdf = new \Mpdf\Mpdf([
    'debug' => true,
    'allow_output_buffering' => true
]);

```

## See Also

- <a href="{{ "/installation-setup/logging.html" | prepend: site.baseurl }}">Logging</a>
