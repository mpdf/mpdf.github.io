---
layout: page
title: SetKeywords()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setkeywords.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 1.0)</p>
<p>SetKeywords – Set the document metadata Keywords</p>
<h2>Description</h2>

<div class="alert alert-info" role="alert">void <b>SetKeywords</b> ( string <span class="parameter">$text</span> )</div>
<p>Set Keywords for the document metadata. This metadata can be seen when inspecting the document properties in Adobe Reader.</p>

<div class="alert alert-info" role="alert"><b>Note:</b> Adobe Reader uses system fonts to display the document metadata, therefore any Unicode text can be used, even if a unibyte codepage is being used for the document.</div>
<h2>Parameters</h2>
<p class="manual_param_dt"><span class="parameter">text</span></p>
<p class="manual_param_dd">Defines the text to appear as Keywords. The text should be UTF-8 encoded, but should not contain HTML mark-up tags. <a href="/reference/mpdf-utilities/strcode2utf.html">strcode2utf()</a> is a useful function provided with mPDF which converts HTML numerical entities to UTF-8 encoded string.</p>
<h2>Examples</h2>

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<?php

<?php

$mpdf=new mPDF();

$mpdf->SetKeywords('My Keywords, More Keywords');

$mpdf->WriteHTML('<p>Hallo World</p>');

$mpdf->Output('filename.pdf');

?>
{% endhighlight %}

{% highlight php %}
Example #2
{% endhighlight %}

{% highlight php %}
<?php

// htmltoolkit contains a function strcode2utf() to convert htmlentities to UTF-8 encoded text 

<?php

$mpdf=new mPDF();

$md = strcode2utf("&amp;#1575;&amp;#1610;&amp;#1604;&amp;#1575;&amp;#1578; &amp;#1601;&amp;#1610;&amp;#1605;&amp;#1575; &amp;#1575;&amp;#1610;&amp;#1604;&amp;#1575;&amp;#1578; &amp;#1601;&amp;#1610;&amp;#1605;&amp;#1575;");

$mpdf->SetKeywords($md);

$mpdf->WriteHTML('<p>Hallo World</p>');

$mpdf->Output('filename.pdf');

?>
{% endhighlight %}

<h2>See Also</h2>
<ul>
<li class="manual_boxlist"><a href="/reference/mpdf-functions/settitle.html">SetTitle()</a> - Set document Title in metadata</li>
<li class="manual_boxlist"><a href="/reference/mpdf-functions/setauthor.html">SetAuthor()</a> - Set document Author in metadata</li>
<li class="manual_boxlist"><a href="/reference/mpdf-functions/setcreator.html">SetCreator()</a> - Set document Creator in metadata</li>
<li class="manual_boxlist"><a href="/reference/mpdf-functions/setsubject.html">SetSubject()</a> - Set document Subject in metadata</li>
<li class="manual_boxlist"><a href="/reference/mpdf-functions/setkeywords.html"></a><a href="/reference/mpdf-utilities/strcode2utf.html">strcode2utf()</a> - Convert HTML numerical entities to UTF-8 encoded string</li>
</ul>
</div>
</div>

