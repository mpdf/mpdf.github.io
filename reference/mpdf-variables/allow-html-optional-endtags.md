---
layout: page
title: allow_html_optional_endtags
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/allow-html-optional-endtags.html
modification_time: 2015-08-05T12:01:35+00:00
---

(mPDF >= 1.0)

# Description

boolean **allow_html_optional_endtags**

When <span class="smallblock">TRUE</span>, mPDF will attempt to parse the input HTML allowing for omitted end-tags.
Some end tags are optional in HTML 4 (see
<a href="http://www.w3.org/TR/1998/REC-html40-19980424/index/elements.html">
    http://www.w3.org/TR/1998/REC-html40-19980424/index/elements.html
</a>).
These include (not exclusively): P, LI, DD, DT, TR, TD

<div class="alert alert-info" role="alert" markdown="1">
	**Note:** If the HTML is incorrectly "formed" i.e. with
	illegal nesting of elements, this may do better or worse than the default.
</div>

# Values

<span class="parameter">$allow_html_optional_endtags</span> = *<span class="smallblock">TRUE</span>*|<span class="smallblock">FALSE</span>

**Values**

*<span class="smallblock">TRUE</span>*: <span class="smallblock">DEFAULT</span> Parse the input HTML allowing for
omitted end-tags

<span class="smallblock">FALSE</span>: Expect well formed (X)HTML with closing tags on all elements.

# Examples

{% highlight php %}
<?php

$mpdf = new \Mpdf\Mpdf();

$mpdf->allow_html_optional_endtags = true;

$mpdf->WriteHTML('<p>Hello World');
$mpdf->WriteHTML('<p>Hello World');
$mpdf->WriteHTML('<p>Hello World');

$mpdf->Output();
{% endhighlight %}

