---
layout: page
title: Introduction
parent_title: CSS & Stylesheets
permalink: /user-s-guide/css-stylesheets/introduction.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>Default CSS styles are defined in <span class="filename">config.php</span> file (as `var $default_CSS`) which is based on the recommended default values for HTML4 - <a href="http://www.w3.org/TR/CSS21/sample.html">http://www.w3.org/TR/CSS21/sample.html</a> The appearance of a default mPDF document based on HTML should approximate to its appearance in a browser.</p>
<p>The following are supported (in order of ascending priority - lower ones in list overwrite higher):</p>
<ul>
<li>HTML attributes e.g. &lt;div align="center"&gt; (see <a href="/user-s-guide/html-support/html-attributes.html">supported HTML attributes</a>)</li>
<li>CSS Stylesheets - included in header of HTML document or as &lt;link  /&gt; or as @import()
<ul>
<li>- html tags e.g. p { font-size:12pt; color:#880000; }</li>
<li>- class e.g. .stylename { font-size:9pt; }</li>
<li>- id e.g. #style { font-size:9pt; }</li>
</ul>
</li>
<li>In-line CSS style e.g. &lt;p style="font-family:monospace;"&gt;</li>
</ul>
<p class="manual_block">Note: Prior to mPDF 5.x HTML attributes overrode CSS styles.</p>
<p>CSS attributes, used in stylesheets or in-line, can define:</p>
<ul>
<li>most tags/elements e.g. div, p, body, table, span</li>
<li>class-names e.g. p.mystylename { font-size:9pt; }</li>
<li>id e.g. div#style { font-size:9pt; }</li>
</ul>
<p>Tag, class and id can share a similar name e.g. p {...} .p {...} and #p {...} are handled uniquely</p>
<p>There is some support for 'cascaded' CSS e.g. div.topic table.type1 td {...}

- table, tr, th and td will only be recognised as the last items (as above)

- only 'block' elements (not 'in-line') can be included i.e. div.style1 a {...} will not work, nor will a#class1 {...}</p>
<p>For a full list of CSS attributes supported see <a href="/user-s-guide/css-stylesheets/supported-css.html">Supported CSS</a></p>
<p>Note the OUTLINE style (which is not supported in most browsers) does work in mPDF e.g.

&lt;span style="outline-width:thin|medium|thick; outline-color:#rrggbb|invert"&gt;</p>
<h2>Using a stylesheet</h2>
<p>The WriteHTML() method takes second parameter i.e. <span class="parameter">$mode</span>. See <a href="/reference/mpdf-functions/writehtml.html">WriteHTML()</a> for details of this and other parameters.</p>
<p><span class="parameter">$mode</span>

0 - Use this (default) if the text you pass is a complete HTML page including head and body and style definitions.

1 - Use this when you want to set a CSS stylesheet - see example below

2 - Write HTML code without the &lt;head&gt; information. Does not need to be contained in &lt;body&gt;</p>

{% highlight php %}
<?php

Example using a stylesheet
{% endhighlight %}

{% highlight php %}
<?php

$stylesheet = file_get_contents('style.css');

$mpdf-&gt;WriteHTML($stylesheet,1);

$mpdf-&gt;WriteHTML($html,2);
{% endhighlight %}

<h2>Media selectors</h2>
<p>mPDF supports media-dependent CSS styles as:</p>

{% highlight php %}
<?php

@media print {

 p { color: red; }

}

&lt;style media="print"&gt;

 p { color: red; }

&lt;/style&gt;

&lt;link rel="stylesheet" media="print" href="..." /&gt;
{% endhighlight %}

<p>By default mPDF will match stylesheets set for "print" or "all" media. This can be changed by the configurable variable <a href="/reference/mpdf-variables/cssselectmedia.html">CSSselectMedia</a>.</p>
</div>
</div>

