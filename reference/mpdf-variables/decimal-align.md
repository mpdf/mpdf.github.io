---
layout: page
title: decimal_align
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/decimal-align.html
modification_time: 2015-08-05T12:01:49+00:00
---

# Decimal Mark alignment in table columns

CSS text-align supports decimal mark characters in table cells (TD and TH). HTML attributes "align" and "char" can also be used.

Characters to be used for alignment must be defined in the array `$this->decimal_align` in <span class="filename">config.php</span>

By default these are : period "."  comma  ","  middot "\B7" and arabic decimal mark "\66B"

{% highlight php %}
<?php

$this->decimal_align = array('DP'=>'.', 'DC'=>',', 'DM'=>"\xc2\xb7", 'DA'=>"\xd9\xab", 'DD'=>'-');
{% endhighlight %}

The default character is a period.

To add additional characters, edit <span class="filename">config.php</span>

<ul>
<li>The UTF-8 representation of any non-ASCII characters must be used</li>
<li>Use any unused 2 character code starting with D for the array key</li>
</ul>
