---
layout: page
title: indexinsert
parent_title: HTML control tags
permalink: /reference/html-control-tags/indexinsert.html
modification_time: 2015-08-05T12:01:24+00:00
---

(mPDF &ge; 3.0)

indexinsert  — Generate an Index for the document

# Description

Upto mPDF < v6.0:

&lt;**indexinsert**
[ <span class="parameter">$font</span> ]
[ <span class="parameter">$font-size</span> ]
[ <span class="parameter">$line-spacing</span> ]
[ <span class="parameter">$cols</span> ]
[ <span class="parameter">$gap</span> ]
[ <span class="parameter">$offset</span> ]
[ <span class="parameter">$links</span> ]
[ <span class="parameter">$usedivletters</span> ]
[ <span class="parameter">$div-font</span> ]
[ <span class="parameter">$div-font-size</span> ] /&gt;

From mPDF v 6.0 onwards, the attributes have changed. See
<a href="{{ "/what-else-can-i-do/index.html" | prepend: site.baseurl }}">Indexes</a> for more information. The
following is for mPDF &ge; v6.0:

&lt;**indexinsert**
[ <span class="parameter">$links</span> ]
[ <span class="parameter">$usedivletters</span> ]
[ <span class="parameter">$collation</span> ]
[ <span class="parameter">$collation-group</span> ] /&gt;

Inserts an Index for the document based on index entries made using
&lt;<a href="{{ "/reference/html-control-tags/tocentry.html" | prepend: site.baseurl }}">indexentry</a>&gt;
or <a href="{{ "/reference/mpdf-functions/tocpagebreak.html" | prepend: site.baseurl }}">CreateIndex()</a>.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** Since mPDF &ge; 6.0 some attributes are removed:
  <span class="parameter">$font</span>, <span class="parameter">$font-size</span>, <span class="parameter">$line-spacing</span>,
  <span class="parameter">$cols</span>, <span class="parameter">$gap</span> and <span class="parameter">$offset</span>
</div>

# Attributes

<span class="parameter">$font </span>

: (mPDF < 6.0)
  Set the font-family for the Index.

  <span class="smallblock">BLANK</span> or omitted uses default font-family for the document.

<span class="parameter">$font-size</span>

: (mPDF < 6.0)
  Sets the font size for the Index in **points** (pt)

  <span class="smallblock">BLANK</span> or omitted or `'0'` uses the default font-size for the document.

<span class="parameter">$line-spacing</span>

: (mPDF < 6.0)
  Sets the line-height used for index entries. Usual values between `'1.0'` and `'1.4'`.

  <span class="smallblock">BLANK</span> or omitted or 0 uses the default value of the document.

  Default: `'1.2'`

<span class="parameter">$cols</span>

: (mPDF < 6.0)
  Set the number of (vertical) columns to use for the Index

  <span class="smallblock">BLANK</span> or omitted or `'0'` or `'1'` uses the whole page is used as one column.

  Default: `'1'`

<span class="parameter">$gap</span>

: (mPDF < 6.0)
  Sets the gap between columns (if set) in millimeters.

  <span class="smallblock">BLANK</span> or omitted uses the default value.

  Default: `'5'` (mm)

<span class="parameter">$offset</span>

: (mPDF < 6.0)
  Sets the text indent (in mm) for subsequent lines, if an index entry flows onto two or more lines.

  <span class="smallblock">BLANK</span> or omitted uses a default value of 3 mm.

<span class="parameter">$links </span> = `1|on|0|off`

: Specify whether to generate hyperlinks to the pages in the Index.

  <span class="smallblock">BLANK</span> or omitted uses a default value of `'OFF'`.

  Default:  `'OFF'`

  **Values** (case-insensitive)

  `'ON'` or `'1'`: show hyperlinks in the Index

  `'OFF'` or `'0'`: do not show hyperlinks in the Index

<span class="parameter">$usedivletters </span> `1|on|0|off|-1`

: Specify whether to insert a CAPITAL letter to divide each group of entries starting with the same letter in the Index.

  <span class="smallblock">BLANK</span> or omitted uses a default value of `'ON'`.

  Default: `'ON'`

  **Values** (case-insensitive)

  `'ON'` or `'1'` or Omitted: show dividing letters in the Index.

  `'OFF'` or `'0'` or `'-1'`: do not show dividing letters in the Index.

<span class="parameter">$div-font</span>

: Set the font-family for the dividing letters in the Index.

  NB Will always appear in <span class="smallblock">BOLD</span> style.

  <span class="smallblock">BLANK</span> or omitted uses default font-family for the document.

<span class="parameter">$div-font-size</span>

: Sets the font size for the dividing letters  in the Index in **points** (pt)

  <span class="smallblock">BLANK</span> or omitted or `0` uses the default font-size for the document.

<span class="parameter">$indexCollationLocale</span>

: Set a Locale to determine the overall sort order of index entries e.g. `'en_GB.utf8'`. Available options are determined
  by the locales available in your system configuration. Always use a utf-8 locale.

  <span class="smallblock">BLANK</span> or omitted uses current locale set in your system.

<span class="parameter">$indexCollationGroup</span>

: If you have set your index to use Dividing letters, this value will determine how letters are grouped under a dividing
  letter. Values should be selected from the files in directory <span class="filename">/data/collations/</span> e.g.
  `'English_United_Kingdom'`

  NB This will not affect the overall order of entries, which is determined by the value above.

  <span class="smallblock">BLANK</span> or omitted - grouping occurs under the first letter of the index entries.

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
  <td>3.0</td>
  <td>Tag was added.</td>
</tr>
<tr>
  <td>6.0</td>
  <td markdown="1">
Parameters removed:
<span class="parameter">$font</span>, <span class="parameter">$font-size</span>,
<span class="parameter">$line-spacing</span>, <span class="parameter">$cols</span>,
<span class="parameter">$gap</span>, <span class="parameter">$offset</span>,
<span class="parameter">$links</span>, <span class="parameter">$usedivletters</span>, 
<span class="parameter">$div-font</span> and <span class="parameter">$div-font-size</span>

Parameters added:
<span class="parameter">$collation</span> and <span class="parameter">$collation-group</span>
</td>
</tr>
</tbody>
</table>

# Examples

```html
<html>

Text of document...

<indexentry content="Buffalo" />Your text which refers to a buffalo, which
you would like to see in the Index

...rest of document

<pagebreak />

<h2>Index</h2>

<indexinsert usedivletters="on" links="on" collation="en_US.utf8"
    collation-group="English_United_States"/>

</html>

```

# See Also

- <a href="{{ "/what-else-can-i-do/index.html" | prepend: site.baseurl }}">Indexes</a>
