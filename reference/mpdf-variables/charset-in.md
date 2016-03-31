---
layout: page
title: charset_in
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/charset-in.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 1.0)</p>
<h2>Description</h2>

<div class="alert alert-info" role="alert">string <b>charset_in</b></div>
<p>Defines the character encoding of any input HTML. Use it together with <span class="parameter">allow_charset_conversion</span> to manually set an input encoding.</p>
<h2>Values</h2>
<p class="manual_param_dt"><span class="parameter">charset_in</span></p>
<p class="manual_param_dd"><b>Values</b> (case-insensitive)

Any string value allowed which is valid for the PHP function <a href="{{ "/reference/codepages-glyphs/iconv.html" | prepend: site.baseurl }}">iconv()</a>. This appears to vary depending on the local configuration. See the manual entry for <a href="{{ "/reference/codepages-glyphs/iconv.html" | prepend: site.baseurl }}">iconv</a> for usual values. You may need to use cp1252 or windows-1252 instead of win-1252, or iso-88591 instead of iso-8859-1.

<span class="smallblock">BLANK</span> or omitted: Expect all text input as UTF-8 encoding.</p>
<h2>Examples</h2>

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<?php

<?php

$html = '... the body of the document encoded in ISO-8859-4 ...';

$mpdf=new mPDF();

$mpdf->allow_charset_conversion = true;

$mpdf->charset_in = 'iso-8859-4';

$mpdf->WriteHTML($html);

$mpdf->Output();

?>
{% endhighlight %}

<h2>See Also</h2>
<ul>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/writehtml.html" | prepend: site.baseurl }}">WriteHTML()</a> - Write HTML code to document</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/allow-charset-conversion.html" | prepend: site.baseurl }}">allow_charset_conversion</a> - Activates character encoding conversion of input text</li>
<li class="manual_boxlist"> <a href="{{ "/reference/codepages-glyphs/iconv.html" | prepend: site.baseurl }}">iconv</a> - list of values accepted for this variable

</li>
</ul>
<p>&nbsp;</p>
</div>
</div>

