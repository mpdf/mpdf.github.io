---
layout: page
title: Image()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/image.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>See <a href="/what-else-can-i-do/images.html">Images</a>.</p>
<p>Image($filename, $x, $y, $width, $height, $ext, $href_link, $paint=true, $constrain=true, $is_watermark=false)</p>

{% highlight php %}
<?php

$mpdf->Image('files/images/frontcover.jpg',0,0,210,297,'jpg','',true, false);

// the last "false" allows a full page picture
{% endhighlight %}

<p>&nbsp;</p>
<p>See Also</p>
<ul>
<li class="manual_boxlist"><a href="/reference/mpdf-functions/setalpha.html">SetAlpha()</a> - Set the opacity and blend mode for Images</li>
</ul>
<p>&nbsp;</p>
</div>
</div>

