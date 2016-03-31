---
layout: page
title: Bidirectional (RTL) text v6.x
parent_title: Fonts & Languages
permalink: /user-s-guide/fonts-languages/bidirectional-rtl-text-v6-x.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<h3>Document Directionality - RTL versus LTR</h3>
<p>The document has a baseline direction which is <acronym title="Left-to-Right document, used for most langauges">LTR</acronym> or <acronym title="Right-to-Left document, used for Hebrew and Arabic languages">RTL</acronym>; this determines:</p>
<ul>
<li>text alignment in blocks for which text-align has not been specifically set</li>
<li>layout of mirrored page-margins, columns, ToC and Indexes, headers / footers</li>
</ul>
<p>This base/document directionality is <acronym title="Left-to-Right document, used for most langauges">LTR</acronym> by default, and can be set by any of the following:</p>

{% highlight php %}
<?php

$mpdf-&gt;SetDirectionality('rtl');

&lt;html dir="rtl"&gt; or &lt;html style="direction: rtl;"&gt;

&lt;body dir="rtl"&gt; or &lt;body style="direction: rtl;"&gt;
{% endhighlight %}

<p>Base direction is an inherited CSS property, so will affect all content, unless direction is specified elswhere.</p>
<h3>Block-level Directionality</h3>
<p>Direction can be set for any HTML block elements e.g. &lt;div&gt;&lt;p&gt;&lt;table&gt;&lt;ul&gt; etc using:</p>

{% highlight php %}
<?php

[HTML]

&lt;div style="direction: rtl;"&gt;

or

[CSS stylesheet]

div.right { direction: rtl; }
{% endhighlight %}

<p>Block-level direction <i>may</i> affect text alignment, and will also influence text reversal in <acronym title="Right-to-Left document, used for Hebrew and Arabic languages">RTL</acronym> text.</p>
<p>Note that margin/padding are NOT reversed by direction i.e. left-margin will still be left-margin in <acronym title="Right-to-Left document, used for Hebrew and Arabic languages">RTL</acronym> state.</p>
<h3>Text alignment</h3>
<p>The default value for text-align is "a nameless value which is dependent on direction". However, once text-align is specified, it is respected and inherited by all descendants.</p>
<h3>Text Bidirectionality</h3>
<p class="manual_block"><b>Note:</b> <a href="/user-s-guide/fonts-languages/opentype-layout-otl.html">OpenType layout (OTL)</a> features must be enabled on a font for it to display right-to-left script.</p>
<p>Bi-directional text is supported in mPDF.</p>
<p>1) The following Unicode characters are supported, and can be inserted directly in the text as HTML entities:</p>
<table class="bpmTopic"> <tbody>
<tr>
<td>LRE</td>
<td>U+202A</td>
<td>LEFT-TO-RIGHT EMBEDDING</td>
<td>&amp;#x202A;</td>
</tr>
<tr>
<td>RLE</td>
<td>U+202B</td>
<td>RIGHT-TO-LEFT EMBEDDING</td>
<td>&amp;#x202B;</td>
</tr>
<tr>
<td>LRO</td>
<td>U+202D</td>
<td>LEFT-TO-RIGHT OVERRIDE</td>
<td>&amp;#x202D;</td>
</tr>
<tr>
<td>RLO</td>
<td>U+202E</td>
<td>RIGHT-TO-LEFT OVERRIDE</td>
<td>&amp;#x202E;</td>
</tr>
<tr>
<td>PDF</td>
<td>U+202C</td>
<td>POP DIRECTIONAL FORMATTING</td>
<td>&amp;#x202C;</td>
</tr>
<tr>
<td>

</td>
<td>

</td>
<td>

</td>
<td>

</td>
</tr>
<tr>
<td>LRI</td>
<td>U+2066</td>
<td>LEFT-TO-RIGHT ISOLATE</td>
<td>&amp;#x2066;</td>
</tr>
<tr>
<td>RLI</td>
<td>U+2067</td>
<td>RIGHT-TO-LEFT ISOLATE</td>
<td>&amp;#x2067;</td>
</tr>
<tr>
<td>FSI</td>
<td>U+2068</td>
<td>FIRST STRONG ISOLATE</td>
<td>&amp;#x2068;</td>
</tr>
<tr>
<td>PDI</td>
<td>U+2069</td>
<td>POP DIRECTIONAL ISOLATE</td>
<td>&amp;#x2069;</td>
</tr>
<tr>
<td>

</td>
<td>

</td>
<td>

</td>
<td>

</td>
</tr>
<tr>
<td>LRM</td>
<td>U+200E</td>
<td>LEFT-TO-RIGHT MARK</td>
<td>&amp;#x200E;</td>
</tr>
<tr>
<td>RLM</td>
<td>U+200F</td>
<td>RIGHT-TO-LEFT MARK</td>
<td>&amp;#x200F;</td>
</tr>
</tbody> </table>
<p>2) The following HTML tags are supported:</p>
<ul>
<li>&lt;bdo&gt; (NB the "dir" attribute is mandatory on &lt;bdo&gt;)</li>
<li>&lt;bdi&gt; (HTML5)</li>
</ul>
<p>3) The CSS property "unicode-bidi" is supported with the following (CSS3) values: normal | embed | isolate | bidi-override | isolate-override | plaintext. 

See <a href="http://www.w3.org/TR/css3-writing-modes/#unicode-bidi">http://www.w3.org/TR/css3-writing-modes/#unicode-bidi</a> for more details. 

"unicode-bidi" is supported on block level elements as well as in-line elements, but note that:</p>
<ul>
<li>the value is not inherited to child blocks</li>
<li>using "embed" or "isolate" has no effect on block level boxes</li>
<li>"isolate-override" is equivalent to "bidi-override" on block level boxes</li>
</ul>
<p>NB dir="auto" is not supported generally, but it is supported for &lt;bdi&gt; (has the same effect as if omitted) to use First Strong Isolate (FSI).</p>
<p>Directionality can now be set on individual table cells &lt;td style="direction:rtl;unicode-bidi:embed;"&gt; or &lt;td dir="rtl"&gt;</p>
<h3>Equivalent methods</h3>
<p>The following are equivalent methods:</p>
<p>EMBED</p>

{% highlight php %}
<?php

&lt;span dir="rtl"&gt;...&lt;/span&gt;

&amp;#x202B;...&amp;#x202C;

&lt;span style="direction: rtl; unicode-bidi: embed"&gt;...&lt;/span&gt;
{% endhighlight %}

<p>OVERRIDE</p>

{% highlight php %}
<?php

&lt;bdo dir="rtl"&gt;...&lt;/bdo&gt;

&amp;#x202E;...&amp;#x202C;

&lt;span dir="rtl" style="unicode-bidi: bidi-override"&gt;...&lt;/span&gt;

&lt;span style="direction: rtl; unicode-bidi: bidi-override"&gt;...&lt;/span&gt;
{% endhighlight %}

<p>ISOLATE</p>

{% highlight php %}
<?php

&lt;bdi dir="ltr"&gt;...&lt;/bdi&gt;

&amp;#x2067;...&amp;#x2069;

&lt;span dir="rtl" style="unicode-bidi: isolate"&gt;...&lt;/span&gt;

&lt;span style="direction: rtl; unicode-bidi: isolate"&gt;...&lt;/span&gt;
{% endhighlight %}

<p>First Strong Isolate (FSI)</p>

{% highlight php %}
<?php

&lt;bdi&gt;...&lt;/bdi&gt;

&lt;bdi dir="auto"&gt;...&lt;/bdi&gt;

&amp;#x2068;...&amp;#x2069;

&lt;span dir="rtl" style="unicode-bidi: plaintext"&gt;...&lt;/span&gt;

&lt;span style="direction: rtl; unicode-bidi: plaintext"&gt;...&lt;/span&gt;
{% endhighlight %}

<h3>First strong isolate (FSI)</h3>
<p>FSI is useful when including text within a paragraph where the directionality of the text is unknown. For example, if you are printing out a catalogue from a database of book titles and the number of readers, when some book titles are in right-to-left script, you may use this template:</p>

{% highlight php %}
<?php

&lt;li&gt;Title: {TITLE} - {READERS} readers&lt;/li&gt;
{% endhighlight %}

<p>This would result in the following:</p>
<ul>
<li>Title: Alice in Wonderland - 12390 readers</li>
<li>Title: עליסה בארץ הפלאות, סיפור-ילדים מאת לואיס קרול - 17890 readers</li>
</ul>

{% highlight php %}
<?php

&lt;li&gt;Title: &lt;bdi&gt;{TITLE}&lt;/bdi&gt; - {READERS} readers&lt;/li&gt;
{% endhighlight %}

<p>Using BDI will result in the following:</p>
<ul>
<li>Title: Alice in Wonderland - 12390 readers</li>
<li>Title: עליסה בארץ הפלאות, סיפור-ילדים מאת לואיס קרול ‭- 1790 readers‬</li>
</ul>
<h3>See Also</h3>
<ul>
<li class="manual_boxlist">
<p><a href="/user-s-guide/fonts-languages/lang-v5-x.html">lang</a> - Information on mPDF support for the HTML attribute lang</p>
</li>
</ul>
</div>
</div>

