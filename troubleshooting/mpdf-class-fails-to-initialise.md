---
layout: page
title: mPDF class fails to Initialise
parent_title: Troubleshooting
permalink: /troubleshooting/mpdf-class-fails-to-initialise.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>mPDF still retains use of a constructor function with the same name as the class i.e.</p>

{% highlight php %}
class mPDF {

...

function mPDF(...)
{% endhighlight %}

<p>This means it is still compatible with PHP4, and is backwards compatible using PHP5 - <b>UNLESS</b> you are using namespaces in PHP &gt;= 5.3</p>
<p>In this case you will need to rename:</p>

{% highlight php %}
function mPDF(...) {
{% endhighlight %}

<p>as</p>

{% highlight php %}
__construct(...) {
{% endhighlight %}

</div>
</div>

