---
layout: page
title: pagefooter
parent_title: HTML control tags
permalink: /reference/html-control-tags/pagefooter.html
modification_time: 2015-08-05T12:01:27+00:00
---

(mPDF &ge; 2.0)

pagefooter – Define a page footer with a given name

# Description

&lt;**pagefooter**
[ <span class="parameter">$name</span> ]
[ <span class="parameter">$content-left</span> ]
[ <span class="parameter">$content-center</span> ]
[ <span class="parameter">$content-right</span> ]
[ <span class="parameter">$footer-style</span> ]
[ <span class="parameter">$footer-style-left</span> ]
[ <span class="parameter">$footer-style-center</span> ]
[ <span class="parameter">$footer-style-right</span> ]
[ <span class="parameter">$line</span> ] /&gt;

Define a page footer with a given name. Named footers can be referenced and set later in the document e.g.
&lt;<a href="{{ "/reference/html-control-tags/setpageheader.html" | prepend: site.baseurl }}">setpagefooter</a>&gt;

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** Do not name any header or footer starting with `html_`. This prefix is reserved to identify
  a <span class="smallblock">HTML</span> header/footer when passing its name in a reference.
</div>

# Attributes

<span class="parameter">$name</span>

: This attribute is a text string to use as the name for this footer.

  If name is <span class="smallblock">BLANK</span> or omitted, it is set as `_default`.

<span class="parameter">$content-left</span>
<span class="parameter">$content-center</span>
<span class="parameter">$content_right</span>

: Defines the text to appear in the page footer.

  At least one `content-` must be defined.

  **Values**

  * <span class="parameter">$content-left</span>: Text to appear at left margin
  * <span class="parameter">$content-center</span>: Text to appear in centre of page
  * <span class="parameter">$content-right</span>: Text to appear at right margin


<span class="parameter">$footer-style</span>
<span class="parameter">$footer-style-left</span>
<span class="parameter">$footer-style-center</span>
<span class="parameter">$footer-style-right</span>

: This attribute can optionally set CSS style properties for the page footer.

  <span class="parameter">$footer-style</span> will set the same style for left, right and center content, whereas
  <span class="parameter">$footer-style-left</span>, <span class="parameter">$footer-style-center</span> and 
  <span class="parameter">$footer-style-right</span> set the style for one part of the content only.

  **Values**

  Valid CSS inline style declaration but only 5 properties can be set:

  * `font-family`
  * `font-size`
  * `font-weight`
  * `font-style`
  * `color`

  If style is not set, the default values for the document are used.

<span class="parameter">$line</span>

: If set to `"1"` or any positive value, a line will be drawn above the footer.

# Changelog

<table class="table">
<thead>
<tr>
  <th>Version</th>
  <th>Description</th>
</tr>
</thead>
<tbody>
<tr>
  <td>2.0</td>
  <td>The tag was added.</td>
</tr>
</tbody>
</table>

# Examples

For examples and further information please see:

- <a href="{{ "/headers-footers/headers-footers.html" | prepend: site.baseurl }}">Headers &amp; Footers</a>
- <a href="{{ "/headers-footers/method-1.html" | prepend: site.baseurl }}">Headers &amp; Footers - Method 3</a>

# See Also

* <a href="{{ "/reference/mpdf-functions/defheaderbyname.html" | prepend: site.baseurl }}">DefFooterByName()</a>
* &lt;<a href="{{ "/reference/html-control-tags/pagefooter.html" | prepend: site.baseurl }}">pageheader</a>&gt;
* <a href="{{ "/reference/mpdf-functions/setheaderbyname.html" | prepend: site.baseurl }}">SetFooterByName()</a>
* &lt;<a href="{{ "/reference/html-control-tags/setpageheader.html" | prepend: site.baseurl }}">setpagefooter</a>&gt;

