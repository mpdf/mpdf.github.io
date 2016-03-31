---
layout: page
title: Reserving x blank pages
parent_title: Real life examples
permalink: /real-life-examples/reserving-x-blank-pages.html
modification_time: 2015-08-05T12:00:27+00:00
---

One user wanted to reserve several blank pages on the left for advertisements, whilst flowing the document on the other pages.

There isn't a 'proper' way to do it, but a few lines of script in <span class="filename">mpdf.php</span> may work:

About 20 lines above <code>function PageNo()</code> - at the end of <code>function AddPage()</code> - find:

{% highlight php %}
<?php

//RESET BLOCK BORDER TOP

if (!$this->ColActive) {

 for($bl=1;$bl<=$this->blklvl;$bl++) {

 $this->blk[$bl]['y0'] = $this->y;
{% endhighlight %}

Just before this, insert

{% highlight php %}
<?php

if ($this->page % 2 == 0 &amp; $this->page < 5) {

$this->AddPage();

$this->MarginCorrection = 0;

}
{% endhighlight %}

You can obviously change:

<code>$this-&gt;page % 2 == 1</code> will leave odd pages blank

<code>$this-&gt;page &lt; 5</code> will leave blank alternate pages up to and including page number 4

