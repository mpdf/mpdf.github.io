---
layout: page
title: mPDF class fails to Initialise
parent_title: Troubleshooting
permalink: /troubleshooting/mpdf-class-fails-to-initialise.html
modification_time: 2015-08-05T12:00:36+00:00
---

mPDF still retains use of a constructor function with the same name as the class i.e.

{% highlight php %}
class mPDF {

...

function mPDF(...)
{% endhighlight %}

This means it is still compatible with PHP4, and is backwards compatible using PHP5 - <b>UNLESS</b> you are using namespaces in PHP &gt;= 5.3

In this case you will need to rename:

{% highlight php %}
function mPDF(...) {
{% endhighlight %}

as

{% highlight php %}
__construct(...) {
{% endhighlight %}

