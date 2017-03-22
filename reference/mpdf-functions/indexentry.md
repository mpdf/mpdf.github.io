---
layout: page
title: IndexEntry()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/indexentry.html
modification_time: 2015-08-05T12:00:48+00:00
---

(mPDF >= 2.2)

IndexEntry – Insert an Index entry for the document

# Description

void **IndexEntry** ( string <span class="parameter">$content</span> [ string <span class="parameter">$xref</span> ])

Insert an Index entry for the document Index, referencing the current writing position in the document. If <span class="parameter">$xref</span> is set, it will appear as a cross-referencing entry in the index as for <a href="{{ "/reference/mpdf-functions/indexentrysee.html" | prepend: site.baseurl }}">IndexEntrySee()</a>.

<div class="alert alert-info" role="alert" markdown="1">
	**Note:** The Index must be generated explicity at the end of the document using <a href="{{ "/reference/mpdf-functions/tocpagebreak.html" | prepend: site.baseurl }}">CreateIndex()</a> at some point before <a href="{{ "/reference/mpdf-functions/output.html" | prepend: site.baseurl }}">Output()</a> is called.</div>

<div class="alert alert-info" role="alert" markdown="1">
	**Note:** Prior to mPDF 2.2 the function Reference() was used. IndexEntry() is now the preferred form.</div>

# Parameters

<span class="parameter">$content</span>

This parameter sets the text as it will appear in the Index entry.

<span class="parameter">$content</span> cannot contain any of the characters: &lt; &gt; &amp; ' *or* " and must use the appropriate HTML entities e.g. &lt;annotation content="This is &amp;lt; 40" /&gt;

It is recommended that you use htmlspecialchars('Content', ENT_QUOTES) for this.

Text entries passed in the form "Subject:Subcategory" will appear in the Index as "Subject, Subcategory"

<span class="smallblock">REQUIRED</span>

<span class="parameter">$xref</span>

This parameter sets the text used as a cross-reference. Text should be UTF-8 encoded.

<span class="parameter">$xref</span> cannot contain any of the characters: &lt; &gt; &amp; ' *or* " and must use the appropriate HTML entities e.g. &lt;indexentry xref="&amp;lt; 40" /&gt;

It is recommended that you use e.g. htmlspecialchars($xref, ENT_QUOTES) for this.

Text entries passed in the form "Subject:Subcategory" will appear in the Index as "Subject, Subcategory"

<span class="smallblock">OPTIONAL</span>

# Changelog

<table class="table"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>3.0</td>
<td><span class="parameter">$xref</span> parameter added.</td>
</tr>
</tbody> </table>

# Examples

Example #1

{% highlight php %}
<?php

$mpdf = new \Mpdf\Mpdf();

$mpdf->WriteHTML('
Beginning bit of document...
');

$mpdf->IndexEntry("Buffalo");

$mpdf->WriteHTML('
Your text which refers to a buffalo, which you would like to see in the Index
');

$mpdf->AddPage();

$mpdf->WriteHTML('<h2>Index</h2>',2);

$mpdf->CreateIndex(2, '', '', 3, 1, '', 5, 'serif','sans-serif');

$mpdf->Output();

?>
{% endhighlight %}

Example #2

{% highlight php %}
<?php

$mpdf->IndexEntry("Dromedary", "Camel:types");

// This will produce an entry in the Index under 'Dromedary' appearing as:

Dromedary - see Camel, types
{% endhighlight %}

# Notes

<div class="alert alert-info" role="alert" markdown="1">
	**Note:** &lt;<a href="{{ "/reference/html-control-tags/tocentry.html" | prepend: site.baseurl }}">indexentry</a>&gt; may be a preferred form, as it will allow more precise identification of the position and page - the &lt;indexentry&gt; can be placed just next to the appropriate word.</div>

## Recommended placement

Recommended placement of Index Entries is just after the first word following the opening tag of the block element:

{% highlight php %}
<h2>First<indexentry... /> word of a heading or block</h2>
{% endhighlight %}

or alternatively just after the opening tag of the block element:

{% highlight php %}
<h2><indexentry... />Heading or block</h2>
{% endhighlight %}

or just after a word to be marked:

{% highlight php %}
... this is a word<indexentry... /> in the middle of text to be marked ...
{% endhighlight %}

# See Also

<ul>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/indexentrysee.html" | prepend: site.baseurl }}">IndexEntrySee()</a> – Insert a cross-reference entry for the document Index</li>
<li class="manual_boxlist">&lt;<a href="{{ "/reference/html-control-tags/tocentry.html" | prepend: site.baseurl }}">indexentry</a>&gt; - Mark an Index entry in the document </li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/tocpagebreak.html" | prepend: site.baseurl }}">CreateIndex()</a> - Generate a document Index</li>
</ul>
