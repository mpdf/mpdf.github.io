---
layout: page
title: InsertIndex()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/insertindex.html
modification_time: 2015-08-05T12:00:49+00:00
---

(mPDF &ge; 6.0)

InsertIndex — Generate an Index for the document

# Description

void **InsertIndex** (
[ int <span class="parameter">$usedivletters</span>
[, boolean <span class="parameter">$uselinking</span>
[, string <span class="parameter">$indexCollationLocale</span>
[, string <span class="parameter">$indexCollationGroup</span>
]]]])

Inserts an Index for the document based on index entries made using
&lt;<a href="{{ "/reference/html-control-tags/tocentry.html" | prepend: site.baseurl }}">indexentry</a>&gt;
or <a href="{{ "/reference/mpdf-functions/indexentry.html" | prepend: site.baseurl }}">IndexEntry()</a>.

# Parameters

<span class="parameter">$usedivletters</span>

: Defines whether to divide index entries starting with the same letter, using a (large) letter as a heading.

  Default: `1`

  **Values**
  * `1` : show dividing letters in the Index
  * `0` : do not show dividing letters in the Index

  <span class="smallblock">BLANK</span> or omitted uses a default value of `1`

<span class="parameter">$uselinking</span>

: Specify whether to add hyperlinks (internal links) to the entries in the document Index.

  Default: `false`

  **Values**
  * `true` or `1`: add links to Index
  * <span class="smallblock">BLANK</span> or omitted, `0` or `false`: do not add links to the Index


<span class="parameter">$indexCollationLocale</span>

: Set a Locale to determine the overall sort order of index entries e.g. `en_GB.utf8`. Available options are determined
  by the locales available in your system configuration. Always use a utf-8 locale.

  <span class="smallblock">BLANK</span> or omitted uses current locale set in your system.

<span class="parameter">$indexCollationGroup</span>

: If you have set your index to use Dividing letters, this value will determine how letters are grouped under a dividing
  letter. Values should be selected from the files in directory <span class="filename">/data/collations/</span> e.g.
  `English_United_Kingdom`.

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
    <td>6.0</td>
    <td>Function was added</td>
</tr>
</tbody>
</table>

# See Also

- <a href="{{ "/what-else-can-i-do/index.html" | prepend: site.baseurl }}">Indexes</a>
