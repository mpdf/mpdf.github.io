---
layout: page
title: htmlpageheader
parent_title: HTML control tags
permalink: /reference/html-control-tags/htmlpageheader.html
modification_time: 2015-08-05T12:01:23+00:00
---

(mPDF &ge; 2.0)

htmlpageheader – Define an HTML page header with a given name

# Description

&lt;**htmlpageheader**  <span class="parameter">$name</span>  &gt; <span class="parameter">$html</span> &lt;/**htmlpageheader**&gt;

Define an HTML page header with a given name. Named headers can be referenced and set later in the document e.g.
&lt;<a href="{{ "/reference/html-control-tags/setpageheader.html" | prepend: site.baseurl }}">sethtmlpageheader</a>&gt;

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** Do not name any header or footer starting with `html_` - This prefix is reserved to identify an
  <span class="smallblock">HTML</span> header/footer when passing its name in a reference.
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** Remember that, unlike most mPDF custom tags which are self-closing with `/>`, htmlpageheader
  and htmlpagefooter require end tags.

  If you wish to make the HTML code compatible with browsers, see
  <a href="{{ "/html-support/custom-html-tags.html" | prepend: site.baseurl }}">Custom tags</a>
</div>

# Attributes

<span class="parameter">$name</span>

: This attribute is a text string to use as the name for this header.

  If name is <span class="smallblock">BLANK</span> or omitted, it is set as `_default`.

# Content

<span class="parameter">$html</span>

: Any valid HTML code can be enclosed between the tags, and will be parsed by mPDF as for any other content.

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
- <a href="{{ "/headers-footers/method-4.html" | prepend: site.baseurl }}">Headers &amp; Footers - Method 4</a>

# See Also

- <a href="{{ "/reference/mpdf-functions/defhtmlfooterbyname.html" | prepend: site.baseurl }}">DefHTMLHeaderByName()</a>
- &lt;<a href="{{ "/reference/html-control-tags/htmlpagefooter.html" | prepend: site.baseurl }}">htmlpagefooter</a>&gt;
- <a href="{{ "/reference/mpdf-functions/sethtmlheaderbyname.html" | prepend: site.baseurl }}">SetHTMLHeaderByName()</a>
- &lt;<a href="{{ "/reference/html-control-tags/sethtmlpageheader.html" | prepend: site.baseurl }}">sethtmlpageheader</a>&gt;
- <a href="{{ "/paging/using-page.html" | prepend: site.baseurl }}">@page</a>
