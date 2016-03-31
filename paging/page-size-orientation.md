---
layout: page
title: Page size & Orientation
parent_title: Paging
permalink: /paging/page-size-orientation.html
modification_time: 2015-08-05T11:59:47+00:00
---

# Page sizes supported

<p>When declaring an instance of <a href="{{ "/reference/mpdf-functions/mpdf.html" | prepend: site.baseurl }}">mPDF</a> class, you can specify the (default) page size and orientation for the document. The margins and orientation can be redefined throughout the document whenever you add a new page using <a href="{{ "/reference/mpdf-functions/addpage.html" | prepend: site.baseurl }}">AddPage()</a> or &lt;<a href="{{ "/reference/html-control-tags/pagebreak.html" | prepend: site.baseurl }}">pagebreak</a>&gt;. It can also be set by CSS using <a href="{{ "/paging/using-page.html" | prepend: site.baseurl }}">@page</a>.</p>

# Examples

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<?php

<?php

$mpdf=new mPDF('', 'Legal');

$mpdf->WriteHTML('<p>Hallo World</p>');

$mpdf->AddPage('L'); // Adds a new page in Landscape orientation

$mpdf->WriteHTML('<p>Hallo World</p>');

$mpdf->Output();

?>
{% endhighlight %}

{% highlight php %}
Example #2
{% endhighlight %}

{% highlight php %}
<?php

// Define a default Landscape page size/format by name

$mpdf=new mPDF('utf-8', 'A4-L');

// Define a default page size/format by array - page will be 190mm wide x 236mm height

$mpdf=new mPDF('utf-8', array(190,236));

// Define a default page using all default values except "L" for Landscape orientation

$mpdf=new mPDF('','', 0, '', 15, 15, 16, 16, 9, 9, 'L');
{% endhighlight %}

# See Also

<ul>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/mpdf.html" | prepend: site.baseurl }}">mPDF()</a> - mPDF class constructor&nbsp;</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/addpage.html" | prepend: site.baseurl }}">AddPage()</a> - Add a new page</li>
</ul>

