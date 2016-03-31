---
layout: page
title: Double-sided documents
parent_title: Paging
permalink: /paging/double-sided-documents.html
modification_time: 2015-08-05T11:59:46+00:00
---

## Odd/Even pages and margins

<p>mPDF can use alternating margins for <span class="smallblock">ODD</span> and <span class="smallblock">EVEN</span> pages (e.g. for <span class="smallblock">DOUBLE-SIDED</span> printing). If <a href="{{ "/reference/mpdf-variables/mirrormargins.html" | prepend: site.baseurl }}">$mirrorMargins</a> ($useOddEven in mPDF &lt; 4.0) is set to <span class="smallblock">TRUE</span> or 1 before adding the first page, the document will mirror the left and right margin values on <span class="smallblock">ODD</span> and <span class="smallblock">EVEN</span> pages i.e. they become inner and outer margins. (this is automatically reversed for <acronym title="Right-to-Left document, used for Hebrew and Arabic languages">RTL</acronym> languages).</p>
<p>NB Headers and footers use the <span class="smallblock">ODD</span> pages as default if this is not used.</p>
<p>The first page in a document will be <span class="smallblock">ODD</span> i.e. page number 1, and will appear as a <span class="smallblock">RIGHT</span> page in a <acronym title="Left-to-Right document, used for most langauges">LTR</acronym> document (or <span class="smallblock">LEFT</span> page in a <acronym title="Right-to-Left document, used for Hebrew and Arabic languages">RTL</acronym> document)</p>

# Examples

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<?php

// Define a document with default left-margin=30 and right-margin=10

$mpdf=new mPDF('','', 0, '', 30, 10);

$mpdf->mirroMargins = true;

$mpdf->WriteHTML('<p>Hallo World</p>');

$mpdf->AddPage();

// Now the right-margin (inner margin on page 2) = 30

$mpdf->WriteHTML('<p>Hallo World</p>');

$mpdf->Output();

?>
{% endhighlight %}

