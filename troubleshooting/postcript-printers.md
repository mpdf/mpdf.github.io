---
layout: page
title: Postcript printers
parent_title: Troubleshooting
permalink: /troubleshooting/postcript-printers.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>If you have problems with PDF files printing on PostScript printers, this may be helped by setting the configurable variable in <span class="filename">config.php</span>:</p>

{% highlight php %}
<?php

$this->repackageTTF = false;
{% endhighlight %}

<p>This forces mPDF to remake the font file using only core tables when Embedding full TTF font files.</p>
</div>
</div>

