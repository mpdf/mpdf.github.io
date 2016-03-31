---
layout: page
title: Notice warnings
parent_title: Troubleshooting
permalink: /troubleshooting/notice-warnings.html
modification_time: 2015-08-05T12:00:34+00:00
---



<p>If you get something like:</p>
<p><b>Notice: Undefined index: win-1252 in D:\Program Files\Zend\Apache2\htdocs\mpdf\mpdf.php on line 3741</b></p>
<p>you need to suppress NOTICE warnings using e.g.</p>

{% highlight php %}
error_reporting(E_ALL ^ E_NOTICE);  

// or

error_reporting(0);
{% endhighlight %}

<p>Include this at the start of your script before including the mpdf.php file.</p>
