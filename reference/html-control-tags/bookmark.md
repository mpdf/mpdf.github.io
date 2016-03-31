---
layout: page
title: bookmark
parent_title: HTML control tags
permalink: /reference/html-control-tags/bookmark.html
modification_time: 2015-08-05T12:01:20+00:00
---

<p>(mPDF &gt;= 1.0)</p>
<p>bookmark – Add a Bookmark to the document</p>

# Description

<p class="manual_block">&lt;<b>bookmark</b>&nbsp; <span class="parameter">content</span> [ <span class="parameter">level</span> ] /&gt;</p>
<p>Add a Bookmark to the document. Bookmarks appear in Adobe Reader and link to specific points in the text. The target is set as the current writing position in the document when the Bookmark is defined.</p>

<div class="alert alert-info" role="alert"><strong>Note:</strong> Bookmarks use Adobe Reader system fonts, therefore any Unicode text can be used, even if a unibyte codepage is being used for the document.</div>

# Attributes

<p class="manual_param_dt"><span class="parameter">content</span></p>
<p class="manual_param_dd">Specifies the text to appear as a Bookmark.

<span class="parameter">content</span> cannot contain any of the characters: &lt; &gt; &amp; ' <i>or</i> " and must use the appropriate HTML entities e.g. &lt;bookmark content="&amp;lt; 40" /&gt;

It is recommended that you use htmlspecialchars('Content', ENT_QUOTES) for this.</p>
<p class="manual_param_dt"><span class="parameter">level</span></p>
<p class="manual_param_dd"><span class="parameter">level</span> specifies the "tree" level for the Bookmark. The top level is 0. See Example 2 below. Accepts an integer from 0 to the maximum depth you wish.

<span class="smallblock">DEFAULT</span>: 0</p>

# Examples

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<html>

<bookmark content="Start of the Document" />

<div>Section 1 text</div>

</html>
{% endhighlight %}

{% highlight php %}
Example #2
{% endhighlight %}

{% highlight php %}

<html>

<bookmark content="Section 1" />

<div>Section 1 text</div>

<bookmark content="Chapter 1" />

<div>Chapter 1 text</div>

<bookmark content="Chapter 2" />

<div>Chapter 2 text</div>

<bookmark content="Section 2" />

<div>Section 2 text</div>

<bookmark content="Chapter 3" />

<div>Chapter 3 text</div>

</html>

This will produce a Bookmark tree in Adobe Reader:

+ Section 1

  + Chapter 1

  + Chapter 2

+ Section 2

  + Chapter 3
{% endhighlight %}

# Notes

<div class="alert alert-info" role="alert"><strong>Note:</strong> To set the Bookmark for a Table of Contents, see <span class="parameter">toc-bookmarkText</span> in &lt;<a href="{{ "/reference/html-control-tags/tocpagebreak.html" | prepend: site.baseurl }}">tocpagebreak</a>&gt;.</div>

## Recommended placement

<p>Recommended placement of Bookmarks is just after the first word following the opening tag of the block element:</p>

{% highlight php %}
<h2>First<bookmark... /> word of a heading or block</h2>
{% endhighlight %}

<p>or alternatively just after the opening tag of the block element:</p>

{% highlight php %}
<h2><bookmark... />Heading or block</h2>
{% endhighlight %}

<p>or just after a word to be marked:</p>

{% highlight php %}
... this is a word<bookmark... /> in the middle of text to be marked ...
{% endhighlight %}

## Automatically Generated Bookmarks

<p>You can automatically generate bookmarks from h1 - h6 tags, by setting the variable <code><span class="parameter">$h2bookmarks</code></span>.</p>
<p>Define arrays with e.g. the tag =&gt; Bookmark level</p>
<p>Remember bookmark levels start at 0.</p>
<p>H1 - H6 must be written with uppercase when defining the array.</p>
<p>Example:</p>

{% highlight php %}
<?php

$mpdf->h2bookmarks = array('H1'=>0, 'H2'=>1, 'H3'=>2);
{% endhighlight %}

# See Also

<ul>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/bookmark.html" | prepend: site.baseurl }}">Bookmark()</a> - PHP equivalent to &lt;bookmark&gt;</li>
</ul>
