---
layout: page
title: Corrupt PDF file
parent_title: Troubleshooting
permalink: /troubleshooting/corrupt-pdf-file.html
modification_time: 2015-08-05T12:00:33+00:00
---

If you get a message saying "Corrupt PDF file: does not start with %PDF", it may be because your script - either mPDF or an error in your PHP code - has output an error message. The browser is expecting a file in PDF format, which should start with "%PDF" and instead it gets some text like an error message.

To show error message(s):

{% highlight php %}
<?php

<?

$mpdf=new mPDF(); 

$mpdf->debug = true;

...

$mpdf->Output();

?>
{% endhighlight %}

## Adding exit

A number of errors can be caused by not explicitly ending your script with <span class="parameter">exit;</span>

