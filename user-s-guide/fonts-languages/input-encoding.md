---
layout: page
title: Input encoding
parent_title: Fonts & Languages
permalink: /user-s-guide/fonts-languages/input-encoding.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>mPDF accepts UTF-8 encoded text by default for all functions.</p>
<p>You can use the following to allow you to write html code encoded in other than utf-8 (in functions like <a href="/reference/mpdf-functions/writehtml.html">WriteHTML()</a>):</p>

{% highlight php %}
<?php

$mpdf-&gt;allow_charset_conversion=true;&nbsp; // Set by default to <span class="smallblock">TRUE</span>

$mpdf-&gt;charset_in='windows-1252';
{% endhighlight %}

<p class="manual_block"><b>Note:</b> <span class="parameter">charset_in</span> requires codes recognised by the PHP function <a href="/reference/codepages-glyphs/iconv.html">iconv</a> i.e. windows-1252 not win-1252</p>
<p>If <span class="parameter">allow_charset_conversion</span> is <span class="smallblock">TRUE</span> mPDF will also read the charset from the HTML header if present e.g.</p>

{% highlight php %}
<?php

&lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt;
{% endhighlight %}

<p>Alternatively, you could convert the html to utf-8 encoding before passing it to mPDF, using any one of the PHP functions:</p>
<ul>
<li><code>utf8_encode($ansi_encoded_html)</code> // only converts <span class="dc-title">ISO-8859-1 to UTF-8</span></li>
<li><code>iconv('windows-1252', 'UTF-8', $ansi_encoded_html)</code></li>
<li><code>mb_convert_encoding($ansi_encoded_html, 'UTF-8', 'windows-1252') </code></li>
</ul>
<p>Note the different order of the parameters, and the different codepage names used by the different functions. The codepage names recongnised vary from platform to platform, and your PHP configuration.</p>
<p>A list of codepages recognised by iconv() can be found at http://www.gnu.org/software/libiconv/</p>
<p>In PHP5 you can list the codepages recognised by mb_ functions using mb_list_encodings().</p>
<p>Also note that each function has different ways of failing if illegal characters are encountered.</p>
<p>&nbsp;</p>
</div>
</div>

