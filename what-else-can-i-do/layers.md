---
layout: page
title: Layers
parent_title: What Else Can I Do
permalink: /what-else-can-i-do/layers.html
modification_time: 2015-08-05T12:00:14+00:00
---

<p>(mPDF &gt;= 5.7)</p>
<p>CSS "z-index" can be used to utilise layers in the PDF document.</p>
<p>CSS can set the z-index for any block element or image (default = 0). This does not work on block elements with fixed or absolute position.</p>

## Set the Initial state for each layer

<p>You can set initial state="hidden" for a specific z-index (z), and/or specify a display name for the Layer e.g.</p>

{% highlight php %}
<?php

$mpdf->layerDetails[z]['state']='hidden';    // Set initial state of layer - "hidden" or nothing
{% endhighlight %}

{% highlight php %}
<?php

$mpdf->layerDetails[z]['name']='Correct Answers';
{% endhighlight %}

<p>- where z= the z-index (set by CSS)</p>
<p>Note:</p>
<ul>
<li>Using layers automatically changes the resulting PDF document to PDF 1.5 version (which is incompatible with PDFA and PDFX in mPDF).</li>
<li>You cannot nest layers - inner values will be ignored</li>
</ul>

## Display the Layers pane in PDF document viewer

<p><code>$mpdf-&gt;open_layer_pane</code> (set by default as <code>$this-&gt;open_layer_pane=false</code> in <span class="filename">config.php</span>) can be set to open the layers pane in the browser when the document is opened.</p>

{% highlight php %}
<?php

$mpdf->open_layer_pane = true;
{% endhighlight %}

## Set Programatically

<p>If you are writing the PDF document using functions other than WriteHTML(), you can set the layers as follows:</p>

{% highlight php %}
<?php

$mpdf->BeginLayer($z-index);

...

$mpdf->EndLayer();
{% endhighlight %}

## Reserved Layer Names

<p>mPDF automatically adds layer names for visibility: "Print only", "Screen only", and "Hidden"; these only show when utilised.</p>
