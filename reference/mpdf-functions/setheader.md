---
layout: page
title: SetHeader()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setheader.html
modification_time: 2015-08-05T12:01:02+00:00
---

(mPDF &ge; 1.0)

SetHeader – Sets a page header

# Description

void **SetHeader** ([ mixed <span class="parameter">$header</span> [, string <span class="parameter">$side</span>
[, boolean <span class="parameter">$write</span> ]]])

Set a page header.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** This function/method was altered in mPDF 2.2 by
  capitalising the first letter of the name. As function/method names in PHP have hitherto been case-insensitive,
  this should not cause any problems, but it is recommended where possible to use the preferred spelling.
</div>

# Parameters
<span class="parameter">$header</span>

: This parameter specifies the content of the page header. It can accept a string or array.

  Default: `array()`

  **Values**
  `''` (<span class="smallblock">BLANK</span> string) or `null` or `array()`
  : This will clear the page header.

  `TEXT STRING`
  : A simple text string is set as content for the <span class="smallblock">RIGHT</span> margin. If
    <span class="smallblock">DOUBLE-SIDED</span> document, this is mirrored on <span class="smallblock">EVEN</span>
    pages i.e. <span class="smallblock">LEFT</span> margin.

    If a text string containing 2 characters `|`, it will be split into three strings and set as content for, respectively, the
    `left | centre | right` parts of the header

    e.g. `$header = 'Chapter 1|{PAGENO}|Book Title'`.

    If <span class="smallblock">DOUBLE-SIDED</span> document, this is mirrored on <span class="smallblock">EVEN</span>
    pages i.e. `right|centre|left`.

  `ARRAY`
  : An array can be in two forms:
    * (Deprecated) The first form includes information for both <span class="smallblock">ODD</span> and <span class="smallblock">EVEN</span>
      headers, and is the expected form
      if <span class="parameter">$side</span> = <span class="smallblock">BLANK</span>.

      **Values**
      * `'odd'`: subarray for <span class="smallblock">ODD</span>
      * `'even'`: subarray for <span class="smallblock">EVEN</span>

        Subarray with following entries:
        * `'L'`: subarray for left
        * `'C'`: subarray for center
        * `'R'`: subarray for right

          Subarray with following entries:
          * `'content'`: <span class="smallblock">TEXT STRING</span>
          * `'font-size'`: <span class="smallblock">FLOAT</span> font size in **pts**
          * `'font-style'`: `B` \| `I` \| `BI` \| <span class="smallblock">BLANK STRING</span>
          * `'font-family'`: Any available font-family
          * `'color'`: CSS `#RRGGBB` string
        * `'line'`: `0` \| `1` - specify whether to draw a line above the Header

      Example:
      ```php
      <?php
      $header = array (
          'odd' => array (
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
          ),
          'even' => array ()
      );

      ```


    * The second form includes information for either <span class="smallblock">ODD</span> or
      <span class="smallblock">EVEN</span> headers, and must be accompanied by a valid value for
      <span class="parameter">$side</span> = `'O'` \| `'E'`

      Example:
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
          'line' => 1
      );
      ```

<span class="parameter">$side</span>

: Specify whether to set the header for <span class="smallblock">ODD</span> or <span class="smallblock">EVEN</span>
  pages in a <span class="smallblock">DOUBLE-SIDED</span> document.

  Default: <span class="smallblock">BLANK</span>

  **Values** (case-sensitive)

  * `O` - set the header for <span class="smallblock">ODD</span> pages
  * `E` - set the header for <span class="smallblock">EVEN</span> pages
  * <span class="smallblock">BLANK</span> - sets both <span class="smallblock">ODD</span> or
    <span class="smallblock">EVEN</span> page headers


<span class="parameter">$write</span>

: If `true`, it forces the Header to be written immediately to the current page. Use if
  the header is being set after the new page has been added.

  Default: `false`

  <div class="alert alert-info" role="alert" markdown="1">
    **Note:** <span class="parameter">$write</span> forces the
    appropriate header to be written. If you have just defined an <span class="smallblock">ODD</span>-sided header and
    the document is currently writing to an <span class="smallblock">EVEN</span>-sided page, the
    <span class="smallblock">EVEN</span> header will be output.
  </div>

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
  <td>The <span class="parameter">$side</span> and <span class="parameter">$write</span> parameters were added.</td>
</tr>
</tbody>
</table>

# Examples

For examples and further information please see:

- <a href="{{ "/headers-footers/headers-footers.html" | prepend: site.baseurl }}">Headers &amp; Footers</a>
- <a href="{{ "/headers-footers/method-1.html" | prepend: site.baseurl }}">Headers &amp; Footers - Method 1</a>

# See Also

- <a href="{{ "/reference/mpdf-functions/setfooter.html" | prepend: site.baseurl }}">SetFooter()</a>
- <a href="{{ "/reference/mpdf-variables/defaultheaderfontsize.html" | prepend: site.baseurl }}">$defaultheaderfontsize</a>
- <a href="{{ "/reference/mpdf-variables/defaultheaderfontstyle.html" | prepend: site.baseurl }}">$defaultheaderfontstyle</a>
- <a href="{{ "/reference/mpdf-variables/defaultheaderline.html" | prepend: site.baseurl }}">$defaultheaderline</a>
