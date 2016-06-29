---
layout: page
title: Rotated pages
parent_title: Headers & Footers
permalink: /headers-footers/rotated-pages.html
modification_time: 2015-08-05T11:59:55+00:00
---

Special case - rotated Portrait headers on Landscape pages

{% highlight php %}
<?php

$mpdf->forcePortraitHeaders = true;
{% endhighlight %}

This is a quick fix which rotates HTML headers and Footers (only - not normal ones)
on landscape pages in the following conditions:

- document orientation is portrait
- when adding a page, you must only call $mpdf-&gt;AddPage('L') or &lt;pagebreak orientaion="landscape" /&gt;

If you try to set new margins/headers etc. for new landscape pages when forcePortrait=true, it will go wrong

