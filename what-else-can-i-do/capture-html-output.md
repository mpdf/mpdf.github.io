---
layout: page
title: Capture HTML output
parent_title: What Else Can I Do
permalink: /what-else-can-i-do/capture-html-output.html
modification_time: 2015-08-05T12:00:21+00:00
---

One way of outputting a webpage to mPDF without re-writing your scripts too much, is to buffer the output:

```php
<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();

// Buffer the following html with PHP so we can store it to a variable later
ob_start();

// This is where your script would normally output the HTML using echo or print
echo '<div>Generate your content</div>';

// Now collect the output buffer into a variable
$html = ob_get_contents();
ob_end_clean();

// send the captured HTML from the output buffer to the mPDF class for processing
$mpdf->WriteHTML($html);
$mpdf->Output();

```


- <a href="{{ "/reference/mpdf-functions/construct.html" | prepend: site.baseurl }}" markdown="1">\Mpdf\Mpdf()</a> - Initialise an instance of mPDF class, and specify configuration
- <a href="{{ "/reference/mpdf-functions/writehtml.html" | prepend: site.baseurl }}">WriteHTML()</a> - Write HTML to the document
- <a href="{{ "/reference/mpdf-functions/output.html" | prepend: site.baseurl }}">Output()</a> - Finalise and output the document