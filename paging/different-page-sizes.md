---
layout: page
title: Different page sizes
parent_title: Paging
permalink: /paging/different-page-sizes.html
modification_time: 2015-08-05T11:59:48+00:00
---



<p>(mPDF &gt;= 4.3)</p>
<p>The page (sheet) size can be reset within the document.</p>

<div class="alert alert-info" role="alert"><strong>Note:</strong> The @page model used by CSS and supported by mPDF allows the size of a "page-box" to be set,&nbsp;assuming a constant size of the "sheet" on which it is being printed. To avoid confusion, the term "sheet size" is preferred for the physical dimensions of the page of the document.</div>
<p>There are different ways to change sheet size:</p>
<h3>1) Using CSS @page</h3>

{% highlight php %}
<style>

@page { sheet-size: A3-L; }

@page bigger { sheet-size: 420mm 370mm; }

@page toc { sheet-size: A4; }

h1.bigsection {

        page-break-before: always;

        page: bigger;

}

</style>
{% endhighlight %}

<p>You can reference the @page selectors using other CSS as above (and see <a href="{{ "/paging/using-page.html" | prepend: site.baseurl }}">Using @page</a>) or setting attributes in:</p>
<ul>
<li>&lt;<a href="{{ "/reference/html-control-tags/tocpagebreak.html" | prepend: site.baseurl }}">tocpagebreak</a>&gt;&nbsp; e.g. &lt;tocpagebreak ... page-selector="bigger" toc-page-selector="toc" ... /&gt;</li>
<li>&lt;<a href="{{ "/reference/html-control-tags/pagebreak.html" | prepend: site.baseurl }}">pagebreak</a>&gt;&nbsp; e.g. &lt;pagebreak ... page-selector="bigger" ... /&gt;</li>
</ul>
<p>The functions <a href="{{ "/reference/mpdf-functions/addpage.html" | prepend: site.baseurl }}">AddPage()</a> and <a href="{{ "/reference/mpdf-functions/tocpagebreak.html" | prepend: site.baseurl }}">TOCpagebreak()</a> both have parameters which allow you to select a @page</p>
<h3>2) Specify the sheet size when forcing a new page (HTML tags)

</h3>
<ul>
<li>&lt;<a href="{{ "/reference/html-control-tags/pagebreak.html" | prepend: site.baseurl }}">pagebreak</a>&gt; e.g. &lt;pagebreak ... sheet-size="A3-L" ... /&gt;</li>
<li>&lt;<a href="{{ "/reference/html-control-tags/tocpagebreak.html" | prepend: site.baseurl }}">tocpagebreak</a>&gt; e.g. &lt;tocpagebreak ... sheet-size="420mm 370mm" toc-sheet-size="A4" ... /&gt;</li>
</ul>
<p>Accepted values are:</p>
<ul>
<li>"A4", "A3", "Letter" etc</li>
<li>"A4-L", "A3-L", "Letter-L" etc. for landscape</li>
<li>a string of 2 dimensions e.g. "21cm 29.7cm" Can be px, pt, in, mm, cm: but not em, ex, or %</li>
</ul>
<h3>3) Specify the sheet size when forcing a new page (functions)</h3>
<p>The functions <a href="{{ "/reference/mpdf-functions/addpage.html" | prepend: site.baseurl }}">AddPage()</a> and <a href="{{ "/reference/mpdf-functions/tocpagebreak.html" | prepend: site.baseurl }}">TOCpagebreak()</a> both have parameters to select sheet size.</p>
<p>Accepted values - same options as the original <a href="{{ "/reference/mpdf-functions/mpdf.html" | prepend: site.baseurl }}">mPDF()</a> - are:</p>
<ul>
<li>"A4", "A3", "Letter" etc</li>
<li>"A4-L", "A3-L", "Letter-L" etc. for landscape</li>
<li>an array of 2 numbers which are the width then height in mm e.g. array(210,297)</li>
</ul>
<h3>Limitations</h3>
<ul>
<li>mPDF will not carry over block-style elements across page-breaks.</li>
<li>Does not work with &lt;<a href="{{ "/reference/html-control-tags/formfeed.html" | prepend: site.baseurl }}">formfeed</a>&gt;, and disabled if using $this-&gt;restoreBlockPageBreaks</li>
<li>Cannot use @page { size: portrait | landscape; } at the same time as defining the sheet-size</li>
</ul>
<p>&nbsp;</p>
