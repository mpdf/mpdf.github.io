---
layout: page
title: SetFooterByName()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setfooterbyname.html
modification_time: 2015-08-05T12:01:02+00:00
---

(mPDF &ge; 2.0)

SetFooterByName – Sets a page footer by a given name

# Description

void **SetFooterByName** ( string <span class="parameter">$name</span> [, string <span class="parameter">$side</span> ])

Sets a page footer that has previously been defined by name.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** This function/method was altered in mPDF 2.2 by
  capitalising the first letter of the name. As function/method names in PHP have hitherto been case-insensitive,
  this should not cause any problems, but it is recommended where possible to use the preferred spelling.
</div>

# Parameters

<span class="parameter">$name</span>

: This parameter specifies the name of a previously defined page footer.

  If a <span class="smallblock">BLANK</span> string
  or `null` is passed, mPDF will use the value `_default` if such a page footer exists.

<span class="parameter">$side</span>

: Specify whether to set the footer for <span class="smallblock">ODD</span> or <span class="smallblock">EVEN</span> pages
  in a <span class="smallblock">DOUBLE-SIDED</span> document.

  **Values** (case-sensitive)

  * `'O'`
    : set the footer for <span class="smallblock">ODD</span> pages in a <span class="smallblock">DOUBLE-SIDED</span>
      document, or for both <span class="smallblock">ODD</span> and <span class="smallblock">EVEN</span> in a
      <span class="smallblock">SINGLE-SIDED</span> document.

  * `'E'`
    : set the footer for <span class="smallblock">EVEN</span> pages

      Default sets the footer for <span class="smallblock">ODD</span> in a
      <span class="smallblock">DOUBLE-SIDED</span> document, or for both <span class="smallblock">ODD</span>
      and <span class="smallblock">EVEN</span> in a <span class="smallblock">SINGLE-SIDED</span> document.

  Default: `'O'`


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
  <td>The function was added.</td>
</tr>
</tbody>
</table>

# Examples

For examples and further information please see:

* <a href="{{ "/headers-footers/headers-footers.html" | prepend: site.baseurl }}">Headers &amp; Footers</a>
* <a href="{{ "/headers-footers/method-1.html" | prepend: site.baseurl }}">Headers &amp; Footers - Method 3</a>

# See Also

- <a href="{{ "/reference/mpdf-functions/deffooterbyname.html" | prepend: site.baseurl }}">DefFooterByName()</a>
- &lt;<a href="{{ "/reference/html-control-tags/pagefooter.html" | prepend: site.baseurl }}">pagefooter</a>&gt;
- <a href="{{ "/reference/mpdf-functions/setheaderbyname.html" | prepend: site.baseurl }}">SetHeaderByName()</a>
- &lt;<a href="{{ "/reference/html-control-tags/setpagefooter.html" | prepend: site.baseurl }}">setpagefooter</a>&gt;

