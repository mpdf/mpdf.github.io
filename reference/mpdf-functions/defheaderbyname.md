---
layout: page
title: DefHeaderByName()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/defheaderbyname.html
modification_time: 2015-08-05T12:00:45+00:00
---

(mPDF &ge; 2.0)

DefHeaderByName – Define a page header with a given name

# Description

void **DefHeaderByName** (
[ string <span class="parameter">$name</span>
[, array <span class="parameter">$header</span>
]])

Define a page header with a given name. Named headers can be referenced and set later in the document e.g.
<a href="{{ "/reference/mpdf-functions/setheaderbyname.html" | prepend: site.baseurl }}">SetHeaderByName()</a>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** Do not name any header or footer starting with `html_` This prefix is reserved to identify an
  <span class="smallblock">HTML</span> header/footer when passing its name in a reference.
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** This function/method was altered in mPDF 2.2 by
  capitalising the first letter of the name. As function/method names in PHP have hitherto been case-insensitive,
  this should not cause any problems, but it is recommended where possible to use the preferred spelling.
</div>

# Parameters

<span class="parameter">$name</span>

: User-defined name for the header. If <span class="parameter">$name</span>`= ''` (blank)
  the name `_default` is used.

<span class="parameter">$header</span>

: This parameter specifies the content of the page header as an array.

  Default: array()

  **Values** in the array
  * <span class="parameter">L</span>: subarray for left
  * <span class="parameter">C</span>: subarray for center
  * <span class="parameter">R</span>: subarray for right

    Subarray with following entries:
    * <span class="parameter">content</span>: <span class="smallblock">TEXT STRING</span>
    * <span class="parameter">font-size</span>: <span class="smallblock">FLOAT</span> font size in **pts**
    * <span class="parameter">font-style</span>: `'B'` \| `'I'` \| `'BI'` \|<span class="smallblock">BLANK STRING</span>
    * <span class="parameter">font-family</span>: Any available font-family
    * <span class="parameter">color</span>: CSS `#RRGGBB` string
  * <span class="parameter">line</span>: `0` \| `1` - specify whether to draw a line under the Header

  ```php
  <?php
  $header = array (
      'L' => array (
          'content' => '',
          'font-size' => 10,
          'font-style' => 'B',
          'font-family' => 'serif',
          'color'=>'#000000'
      ),
      'C' => array (
          'content' => '',
          'font-size' => 10,
          'font-style' => 'B',
          'font-family' => 'serif',
          'color'=>'#000000'
      ),
      'R' => array (
          'content' => 'My document',
          'font-size' => 10,
          'font-style' => 'B',
          'font-family' => 'serif',
          'color'=>'#000000'
      ),
      'line' => 1,
  );
  ```

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

- <a href="{{ "/headers-footers/headers-footers.html" | prepend: site.baseurl }}">Headers &amp; Footers</a>
- <a href="{{ "/headers-footers/method-1.html" | prepend: site.baseurl }}">Headers &amp; Footers - Method 3</a>

# See Also

- <a href="{{ "/reference/mpdf-functions/deffooterbyname.html" | prepend: site.baseurl }}">DefFooterByName()</a>
- &lt;<a href="{{ "/reference/html-control-tags/pageheader.html" | prepend: site.baseurl }}">pageheader</a>&gt;
- <a href="{{ "/reference/mpdf-functions/setheaderbyname.html" | prepend: site.baseurl }}">SetHeaderByName()</a>
- &lt;<a href="{{ "/reference/html-control-tags/setpageheader.html" | prepend: site.baseurl }}">setpageheader</a>&gt;

