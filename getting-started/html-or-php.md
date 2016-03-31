---
layout: page
title: HTML or PHP?
parent_title: Getting Started
permalink: /getting-started/html-or-php.html
modification_time: 2015-08-05T11:59:25+00:00
---



<p>Most of the functions of mPDF can be achieved two ways: using PHP commands, or using custom HTML tags. Use whichever suits your purpose better, and you can always combine a mxture of the two.</p>
<p class="manual_block">If you are new to mPDF, I would recommend using HTML/CSS for everything - you can test most things out in a browser this way as you are writing it.</p>
<p>Example:</p>

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<?php

<?php

$mpdf=new mPDF();

$mpdf->Bookmark('Start of the document');

$mpdf->WriteHTML('<div>Section 1 text</div>');

$mpdf->Output();

?>
{% endhighlight %}

{% highlight php %}
Example #2
{% endhighlight %}

{% highlight php %}
<?php

<?php

$html = '<bookmark content="Start of the Document" /><div>Section 1 text</div>';

$mpdf=new mPDF();

$mpdf->WriteHTML($html);

$mpdf->Output();

?>
{% endhighlight %}

<h2>Invalid HTML?</h2>
<p>If you want to hide mPDF custom tags from a browser, enclose any mPDF code within:</p>

{% highlight php %}
<!--mpdf  ..  anything you want to write ...  mpdf-->
{% endhighlight %}

<p>mPDF will strip away the <span class="parameter">&lt;!--mpdf</span> tag and any following spaces, and the <span class="parameter">mpdf--&gt;</span> tag and any preceeding spaces, and process all enclosed code e.g.</p>

{% highlight php %}
<!--mpdf  <htmlheader id="header1"><h2>Section 2</h2></htmlheader>  mpdf-->
{% endhighlight %}

<h2>See Also</h2>
<p><a href="{{ "/what-else-can-i-do/capture-html-output.html" | prepend: site.baseurl }}">Capturing HTML</a></p>
