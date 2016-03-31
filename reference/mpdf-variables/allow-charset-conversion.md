---
layout: page
title: allow_charset_conversion
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/allow-charset-conversion.html
modification_time: 2015-08-05T12:01:34+00:00
---

(mPDF &gt;= 1.0)

# Description

boolean <b>allow_charset_conversion</b>

When <span class="smallblock">TRUE</span>, mPDF will attempt to parse the character set of any input HTML. You can also use it together with <span class="parameter">charset_in</span> to manually set an input encoding.

# Values

<span class="parameter">allow_charset_conversion</span> = <i><span class="smallblock">TRUE</span></i>|<span class="smallblock">FALSE</span>

<b>Values</b>

<i><span class="smallblock">TRUE</span></i>: <span class="smallblock">DEFAULT</span> Parse the character set of any input text from the HTML, or allow setting of the value <span class="parameter">charset_in</span> 

<span class="smallblock">FALSE</span>: Expect all text input as UTF-8 encoding.

# Examples

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<?php

$html = '

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-4" />

<title>Document in Lithuanian</title>

</head>

<body>

... the body of the document encoded in ISO-8859-4 ...

</body>

</html>';

$mpdf=new mPDF();

$mpdf->allow_charset_conversion = true;

$mpdf->WriteHTML($html);

$mpdf->Output();

?>
{% endhighlight %}

{% highlight php %}
Example #2
{% endhighlight %}

{% highlight php %}
<?php

$html = '... the body of the document encoded in ISO-8859-4 ...';

$mpdf=new mPDF();

$mpdf->allow_charset_conversion = true;

$mpdf->charset_in = 'iso-8859-4';

$mpdf->WriteHTML($html);

$mpdf->Output();

?>
{% endhighlight %}

<div class="alert alert-info" role="alert"><strong>Note:</strong> mPDF will convert pages with character sets which work with the PHP function <a href="{{ "/reference/codepages-glyphs/iconv.html" | prepend: site.baseurl }}">iconv()</a></div>

# See Also

<ul>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/writehtml.html" | prepend: site.baseurl }}">WriteHTML()</a> - Write HTML code to document</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/charset-in.html" | prepend: site.baseurl }}">charset_in</a> - character encoding of input text</li>
</ul>

