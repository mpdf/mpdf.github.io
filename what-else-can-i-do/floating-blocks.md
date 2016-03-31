---
layout: page
title: Floating blocks
parent_title: What Else Can I Do
permalink: /what-else-can-i-do/floating-blocks.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>mPDF &gt;= 3.0</p>
<h2>Float</h2>
<p>The CSS property "float" is <b>partially</b> supported in mPDF, allowing block elements (p, div etc.) to be placed alongside one another. They can also be used to create "columns" that span more than one page.</p>

{% highlight php %}
float: right|left
{% endhighlight %}

<p>Limitations:</p>
<ul>
<li>Float only works properly if a width is set for the float</li>
<li>If no width is set, the width is set to the maximum available (full width, or less if floats already set)</li>
<li>A block element next to a float has the padding adjusted so that content fits in the remaining width.</li>
<li>Text next to float should wrap correctly, but backgrounds and borders will overlap and/or lie under the floats in a mess</li>
<li>Does not work if Columns are being used.</li>
<li>You cannot change the page margins/orientation etc. in middle of using floats</li>
<li>Float is only supported on block elements (i.e. not SPAN etc.)</li>
</ul>
<p>Margin-right can still be set for a float:right and vice-versa.</p>

<div class="alert alert-info" role="alert"><b>Note:</b> The width that is set defines the width of the content-box. So if you have two floats with width=50% and either of them has padding, margin or border, they will not fit together on the page.</div>
<h2>Clear</h2>
<p>The CSS property "clear" can be set on any block element (p, div etc.), and also &lt;hr&gt; or &lt;br&gt; elements.</p>

{% highlight php %}
clear: right|left|both
{% endhighlight %}

<h2>Example</h2>

{% highlight php %}
<h4>CSS Float</h4>

<div>

Some text to start with

<div style="float: right; width: 28%;">

This is text that is set to float:right.

</div>

<div style="float: left; width: 54%;">

This is text that is set to float:left.

</div>

<div style="clear: both; margin: 0pt; padding: 0pt; "></div>

This is text that follows the clear:both.

</div>
{% endhighlight %}

</div>
</div>

