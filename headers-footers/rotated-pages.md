---
layout: page
title: Rotated pages
parent_title: Headers & Footers
permalink: /headers-footers/rotated-pages.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>Special case - rotated Portrait headers on Landscape pages

==========================================================</p>

{% highlight php %}
<?php

$mpdf->forcePortraitHeaders = true;
{% endhighlight %}

<p>This is a quick fix which rotates HTML headers and Footers (only - not normal ones) on landscape pages in the following conditions:</p>
<ul>
<li>document orientation is portrait

</li>
<li>when adding a page, you must only call $mpdf-&gt;AddPage('L') or &lt;pagebreak orientaion="landscape" /&gt;</li>
</ul>
<p>If you try to set new margins/headers etc. for new landscape pages when forcePortrait=true, it will go wrong</p>
</div>
</div>

