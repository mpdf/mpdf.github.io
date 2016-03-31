---
layout: page
title: Creating your first file
parent_title: Getting Started
permalink: /getting-started/creating-your-first-file.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<h2>Getting started</h2>
<p>The following PHP will produce the most basic example with mPDF.</p>
<p>Include the main file containing the mpdf class:</p>

{% highlight php %}
include('../mpdf.php');
{% endhighlight %}

<p>Create an instance of the class:</p>

{% highlight php %}
<?php

$mpdf=new mPDF();
{% endhighlight %}

<p>Write some HTML code:</p>

{% highlight php %}
<?php

$mpdf->WriteHTML('<p>Hallo World</p>');
{% endhighlight %}

<p>Output a PDF file:</p>

{% highlight php %}
<?php

$mpdf->Output();

exit;
{% endhighlight %}

<h2>Notes</h2>

<div class="alert alert-info" role="alert"><b>Note</b>: <span class="smallblock">_MPDF_PATH</span> was required to be defined explicitly prior to mPDF 4.0 e.g. <code>define('_MPDF_PATH','../')</code>. From mPDF 4.0 the value should be automatically defined by the script itself when including the mpdf.php file.</div>
<p>For details and options for the Output command, see&nbsp;<a href="/reference/mpdf-functions/output.html">Output()</a></p>
</div>
</div>

