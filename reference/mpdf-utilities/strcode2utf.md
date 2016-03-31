---
layout: page
title: strcode2utf()
parent_title: mPDF Utilities
permalink: /reference/mpdf-utilities/strcode2utf.html
modification_time: 2015-08-05T12:02:42+00:00
---



<p>(htmltoolkit &gt;=1.0)</p>
<p>strcode2utf – Convert HTML numerical entities to UTF-8 encoded string</p>
<h2>Description</h2>
<p class="manual_block">string <b>strcode2utf</b> ( string <span class="parameter">$text</span> [, boolean <span class="parameter">$low</span> ])</p>
<p>Returns a UTF-8 encoded string.</p>
<p class="manual_block"><b>Note: </b>This function is not part of the mPDF class, and is located in the htmltoolkit.php file. It is called without the class prefix e.g. $mpd-&gt;</p>

<div class="alert alert-info" role="alert"><strong>Note:</strong> <b>strcode2utf</b> is useful for preparing text to be used as a Watermark, or for the metadata properties of Title, Author, Creator and Keywords - which require UTF-8 encoded strings with no entities.</div>
<h2>Parameters</h2>
<p class="manual_param_dt"><span class="parameter">text</span></p>
<p class="manual_param_dd">The input string, containing HTML numerical entities e.g. &amp;#8123; or &amp;#x2022;</p>
<p class="manual_param_dt"><span class="parameter">low</span></p>
<p class="manual_param_dd">Specifies whether to convert HTML numerical entities of ASCII characters (&lt;128).

<span class="smallblock">DEFAULT</span>: <span class="smallblock">TRUE</span></p>
<p class="manual_param_dd"><b>Values</b>

<span class="smallblock">TRUE</span>: Convert all HTML numerical entities to UTF-8 characters

<span class="smallblock">FALSE</span>: Only convert characters above codepoint 127</p>

<div class="alert alert-info" role="alert"><strong>Note:</strong> This function does not convert named character entities like &amp;amp; &amp;quot; or &amp;raquo;</div>
<h2>Return value</h2>
<p>Returns a UTF-8 encoded string.</p>
<h2>Examples</h2>

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<?php

<?php

$mpdf=new mPDF();

$wm = strcode2utf("&amp;#1575;&amp;#1610;&amp;#1604;&amp;#1575;&amp;#1578; &amp;#1601;&amp;#1610;&amp;#1605;&amp;#1575; &amp;#1575;&amp;#1610;&amp;#1604;&amp;#1575;&amp;#1578; &amp;#1601;&amp;#1610;&amp;#1605;&amp;#1575;");

$mpdf->SetWatermarkText($wm);

$mpdf->showWatermark = true;

$mpdf->WriteHTML('<p>Hallo World</p>');

?>
{% endhighlight %}

<h2>See Also</h2>
<ul>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/setwatermarktext.html" | prepend: site.baseurl }}">SetWatermarkText()</a> - Sets the text to use for a Watermark</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/settitle.html" | prepend: site.baseurl }}">SetTitle()</a> - Set document Title in metadata</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/setauthor.html" | prepend: site.baseurl }}">SetAuthor()</a> - Set document Author in metadata</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/setcreator.html" | prepend: site.baseurl }}">SetCreator()</a> - Set document Creator in metadata</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/setsubject.html" | prepend: site.baseurl }}">SetSubject()</a> - Set document Subject in metadata</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/setkeywords.html" | prepend: site.baseurl }}">SetKeywords()</a> - Set document Keywords in metadata</li>
</ul>
