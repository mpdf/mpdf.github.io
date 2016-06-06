---
layout: page
title: SetSubject()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setsubject.html
modification_time: 2015-08-05T12:01:08+00:00
---

(mPDF >= 1.0)

SetSubject – Set the document metadata Subject

# Description

void **SetSubject** ( string <span class="parameter">$text</span> )

Set the Subject for the document. This metadata can be seen when inspecting the document properties in Adobe Reader.

<div class="alert alert-info" role="alert">**Note:** Adobe Reader uses system fonts to display the document metadata, therefore any Unicode text can be used, even if a unibyte codepage is being used for the document.</div>

# Parameters

<span class="parameter">$text</span>

Defines the text to appear as the document Subject. The text should be UTF-8 encoded, but should not contain HTML mark-up tags. <a href="{{ "/reference/mpdf-utilities/strcode2utf.html" | prepend: site.baseurl }}">strcode2utf()</a> is a useful function provided with mPDF which converts HTML numerical entities to UTF-8 encoded string.

# Examples

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<?php

$mpdf = new mPDF();

$mpdf->SetSubject('My Subject');

$mpdf->WriteHTML('
Hallo World
');

$mpdf->Output('filename.pdf');

?>
{% endhighlight %}

{% highlight php %}
Example #2
{% endhighlight %}

{% highlight php %}
<?php

// htmltoolkit contains a function strcode2utf() to convert htmlentities to UTF-8 encoded text$mpdf = new mPDF();

$md = strcode2utf("&amp;#1575;&amp;#1610;&amp;#1604;&amp;#1575;&amp;#1578; &amp;#1601;&amp;#1610;&amp;#1605;&amp;#1575; &amp;#1575;&amp;#1610;&amp;#1604;&amp;#1575;&amp;#1578; &amp;#1601;&amp;#1610;&amp;#1605;&amp;#1575;");

$mpdf->SetSubject($md);

$mpdf->WriteHTML('
Hallo World
');

$mpdf->Output('filename.pdf');

?>
{% endhighlight %}

# See Also

<ul>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/settitle.html" | prepend: site.baseurl }}">SetTitle()</a> - Set document Title in metadata</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/setauthor.html" | prepend: site.baseurl }}">SetAuthor()</a> - Set document Author in metadata</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/setcreator.html" | prepend: site.baseurl }}">SetCreator()</a> - Set document Creator in metadata</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/setkeywords.html" | prepend: site.baseurl }}">SetKeywords()</a> - Set document Keywords in metadata</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-utilities/strcode2utf.html" | prepend: site.baseurl }}">strcode2utf()</a> - Convert HTML numerical entities to UTF-8 encoded string</li>
</ul>
