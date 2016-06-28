---
layout: page
title: Creating your first file
parent_title: Getting Started
permalink: /getting-started/creating-your-first-file.html
modification_time: 2016-06-25T08:00:00+02:00
---

The following PHP will produce the most basic example with mPDF.

{% highlight php %}
<?php

// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';

// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();

// Write some HTML code:
$mpdf->WriteHTML('Hello World');

// Output a PDF file directly to the browser
$mpdf->Output();

{% endhighlight %}

# Notes

<div class="alert alert-info" role="alert">
	<strong>Note:</strong> <span class="smallblock">_MPDF_PATH</span> was required to be defined explicitly prior
	to mPDF 4.0 e.g. `define('_MPDF_PATH','../')`.

	From mPDF 4.0 the value should be automatically defined by the script itself when
	including the mpdf.php file.

	From mPDF 7.0 this constant is deprecated and removed.
</div>

For details and options for the `Output` method, see 
<a href="{{ "/reference/mpdf-functions/output.html" | prepend: site.baseurl }}">Output()</a>

