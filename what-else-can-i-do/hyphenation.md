---
layout: page
title: Hyphenation
parent_title: What Else Can I Do
permalink: /what-else-can-i-do/hyphenation.html
modification_time: 2015-08-05T12:00:01+00:00
---

<p>(mPDF &gt;= 2.5)</p>
<p class="manual_block">Hyphenation was changed in mPDF 5.7 to support the CSS property hyphens (cf.)</p>
<p>The CSS property <span class="parameter">hyphens</span> is supported on block elements (e.g. &lt;div&gt;), inline elements (e.g. &lt;span&gt;) and &lt;td/th&gt;.

hyphens: none | manual | auto 

Default = manual</p>
<p>The default can be changed by altering <code><span class="parameter">$defaultCSS</code></span> in <span class="filename">config.php</span></p>

{% highlight php %}
hyphens: manual
{% endhighlight %}

<p class="manual_param_dt">none</p>
<p class="manual_param_dd">Words are not broken at line breaks, even if characters inside the word suggest line break points.</p>
<p class="manual_param_dt">manual</p>
<p class="manual_param_dd">Words are only broken at line breaks where there are characters inside the word that suggest line break opportunities. Characters can be explicit or conditional.</p>
<p class="manual_param_dt">auto</p>
<p class="manual_param_dd">Words can be broken at appropriate hyphenation points, as determined by characters inside the word, resources.

SHY inside the word take priority over hyphenation points determined by other resources.</p>

## Soft hyphens

<p>The soft-hyphen character (U+00AD or &amp;shy;) and the &lt;wbr&gt; tag (from mPDF 5.7) are supported in <a href="{{ "/reference/mpdf-functions/writehtml.html" | prepend: site.baseurl }}">WriteHTML()</a>.</p>

## Automatic hyphenation

<p>Automatic hyphenation is set using CSS:</p>

{% highlight php %}
hyphens: auto;
{% endhighlight %}

<p>Automatic hyphenation is based on the commonly used TeX algorithm and requires pattern files for each language. The following languages are supplied with mPDF 2.5:</p>
<table class="table"> <tbody>
<tr>
<td><b>Language</b></td>
<td><span class="parameter">$SHYlang</span></td>
</tr>
<tr>
<td>English</td>
<td>en (<span class="smallblock">DEFAULT</span>)</td>
</tr>
<tr>
<td>German</td>
<td>de</td>
</tr>
<tr>
<td>Spanish</td>
<td>es</td>
</tr>
<tr>
<td>Finnish</td>
<td>fi</td>
</tr>
<tr>
<td>French</td>
<td>fr</td>
</tr>
<tr>
<td>Italian</td>
<td>it</td>
</tr>
<tr>
<td>Dutch</td>
<td>nl</td>
</tr>
<tr>
<td>Portuguese</td>
<td>pl</td>
</tr>
<tr>
<td>Russian</td>
<td>ru</td>
</tr>
<tr>
<td>Swedish</td>
<td>sv</td>
</tr>
</tbody> </table>
<p>A pattern file for each language is found in the folder /patterns/ and the variable <span class="parameter">$SHYlanguages</span> needs to be updated in <span class="filename">config.php</span> if any additions are made.</p>
<p>Pattern checking can be fine-tuned by 4 variables if required:</p>
<table class="table"> <tbody>
<tr>
<td>&nbsp;</td>
<td>Default value</td>
<td>&nbsp;</td>
</tr>
<tr>
<td><span class="parameter">$SHYleftmin</span></td>
<td>2</td>
<td>Minimum number of characters allowed to the left of a hyphen.

</td>
</tr>
<tr>
<td><span class="parameter">$SHYrightmin</span></td>
<td>2</td>
<td>Minimum number of characters allowed to the right of a hyphen.</td>
</tr>
<tr>
<td><span class="parameter">$SHYcharmin</span></td>
<td>2</td>
<td>Minimum number of characters of words to be checked.

</td>
</tr>
<tr>
<td><span class="parameter">$SHYcharmax</span></td>
<td>10</td>
<td>Maximum number of characters in a pattern used for pattern checking (10 usually is more than enough). this is NOT the maximum length of words to be checked.</td>
</tr>
</tbody> </table>

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<?php

<?php

$mpdf=new mPDF();

$mpdf->SHYlang = 'fr';

$mpdf->SHYleftmin = 3;

$mpdf->WriteHTML('<p style="hyphens: auto">La grande texte....</p>');

$mpdf->Output();

?>
{% endhighlight %}

## Hyphenation Dictionary

<p>If automatic hyphenation does not recognise a particular word, you can add words to a dictionary file with your own hyphenation. Edit the file "pathtoyourmpdf/patterns/dictionary.txt" and add a new line for each word, marking the possible hyphenations with a forward slash. You can mark more than one place for each word e.g. "dis/es/tab/lish/men/tar/i/an/ism"</p>

# See Also

<ul>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/shylang.html" | prepend: site.baseurl }}">SHYlang</a> - Specify the language to use for automatic hyphenation</li>
</ul>
