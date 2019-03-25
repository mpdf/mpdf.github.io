---
layout: page
title: TOC_Entry()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/toc-entry.html
modification_time: 2015-08-05T12:01:13+00:00
---

(mPDF &ge; 1.0)

TOC_Entry – Insert an entry for the Table of Contents

# Description

void **TOC_Entry** ( string <span class="parameter">$content</span>
[, int <span class="parameter">$level</span>
[, string <span class="parameter">$name</span>
]])

Insert an entry for the Table of Contents referencing the current writing position in the document.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** The position for the Table of Contents must be specified using
  <a href="{{ "/reference/mpdf-functions/tocpagebreak.html" | prepend: site.baseurl }}">TOCpagebreak()</a>
  or &lt;<a href="{{ "/reference/html-control-tags/tocpagebreak.html" | prepend: site.baseurl }}">tocpagebreak</a>&gt;
  at some point before <a href="{{ "/reference/mpdf-functions/output.html" | prepend: site.baseurl }}">Output()</a> is called.
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** From mPDF 2.3 you can use more than one <acronym title="Table of Contents">ToC</acronym> in
  the document using the parameter <span class="parameter">$name</span>.
</div>

# Parameters

<span class="parameter">$content</span>

: This parameter sets the text as it will appear in the ToC entry.

  <span class="parameter">$content</span> cannot contain any of the characters: `<`, `>`, `&`, `'` or `"` and must use the
  appropriate HTML entities e.g. `<annotation content="This is &lt; 40" />`

  It is recommended that you use `htmlspecialchars('Content', ENT_QUOTES)` for this.

  <span class="smallblock">REQUIRED</span>

<span class="parameter">$level</span>

: Specify the level of this entry i.e. like heading1,2,3

  Starts at level 0

  Default: `0`


<span class="parameter">$name</span>

: Specify which <acronym title="Table of Contents">ToC</acronym> to add this entry, if using more than one
  <acronym title="Table of Contents">ToC</acronym> in the document. <span class="parameter">$name</span> can be any
  alphanumeric characters (except just `0`) and is case-insensitive.

  <span class="smallblock">BLANK</span> or omitted or `0` uses the default <acronym title="Table of Contents">ToC</acronym>.

  **Values** (case-insensitive)

  * `'ALL'` will add this entry to every ToC active in the document
  * name as string with only alphanumeric characters (case-insensitive)

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
  <td>2.3</td>
  <td><span class="parameter">$name</span> attribute was added.</td>
</tr>
</tbody>
</table>

# Examples

```php
<?php
$mpdf = new \Mpdf\Mpdf();

$mpdf->WriteHTML('Introduction');

$mpdf->TOCpagebreak();
$mpdf->TOC_Entry("Chapter 1",0);
$mpdf->WriteHTML('Chapter 1 ...');

$mpdf->Output();

```

# Notes

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** Since mPDF 2.0 `insertTOC()` should **not** be called at the end of the document.
  <a href="{{ "/reference/codepages-glyphs/iso-8859-win-comparison-chart.html" | prepend: site.baseurl }}">Output()</a>
  will automatically generate the ToC if it has been defined with either or
  <a href="{{ "/reference/mpdf-functions/tocpagebreak.html" | prepend: site.baseurl }}">TOCpagebreak()</a> or 
  &lt;<a href="{{ "/reference/html-control-tags/tocpagebreak.html" | prepend: site.baseurl }}">tocpagebreak</a>&gt;.
</div>

# See Also

- <a href="{{ "/reference/mpdf-functions/tocpagebreak.html" | prepend: site.baseurl }}">TOCpagebreak()</a> - Insert a Table of Contents in the document
- &lt;<a href="{{ "/reference/html-control-tags/tocpagebreak.html" | prepend: site.baseurl }}">tocpagebreak</a>&gt; - Insert a Table of Contents in the document
- &lt;<a href="{{ "/reference/html-control-tags/tocentry.html" | prepend: site.baseurl }}">tocentry</a>&gt; - Mark a ToC entry in the document
