---
layout: page
title: TOCpagebreak()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/tocpagebreak.html
modification_time: 2015-08-05T12:01:12+00:00
---

(mPDF &ge; 2.0)

TOCpagebreak — Insert a table of contents in the document

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** A new function
	<a href="{{ "/reference/mpdf-functions/tocpagebreakbyarray.html" | prepend: site.baseurl }}">TOCpagebreakByArray()</a>
	was added in mPDF 5.0 which is recommended as much simpler to use.
</div>

# Description

void **TOCpagebreak** (
[ string <span class="parameter">$font</span>
[, float <span class="parameter">$font-size</span>
[, int <span class="parameter">$indent</span>
[, mixed <span class="parameter">$paging</span>
[, mixed <span class="parameter">$links</span>
[, string <span class="parameter">$toc-orientation</span>
[, float <span class="parameter">$toc-margin-left</span>
[, float <span class="parameter">$toc-margin-right</span>
[, float <span class="parameter">$toc-margin-top</span>
[, float <span class="parameter">$toc-margin-bottom</span>
[, float <span class="parameter">$toc-margin-header</span>
[, float <span class="parameter">$toc-margin-footer</span>
[, string <span class="parameter">$toc-odd-header-name</span>
[, string <span class="parameter">$toc-even-header-name</span>
[, string <span class="parameter">$toc-odd-footer-name</span>
[, string <span class="parameter">$toc-even-footer-name</span>
[, int <span class="parameter">$toc-odd-header-value</span>
[, int <span class="parameter">$toc-even-header-value</span>
[, int <span class="parameter">$toc-odd-footer-value</span>
[, int <span class="parameter">$toc-even-footer-value</span>
[, string <span class="parameter">$toc-preHTML</span>
[, string <span class="parameter">$toc-postHTML</span>
[, string <span class="parameter">$toc-bookmarkText</span>
[, string <span class="parameter">$resetpagenum</span>
[, string <span class="parameter">$pagenumstyle</span>
[, string <span class="parameter">$suppress</span>
[, string <span class="parameter">$orientation </span>
[, float <span class="parameter">$margin-left</span>
[, float <span class="parameter">$margin-right</span>
[, float $<span class="parameter">$margin-top</span>
[, float $<span class="parameter">$margin-bottom</span>
[, float $<span class="parameter">$margin-header</span>
[, float <span class="parameter">$margin-footer</span>
[, string <span class="parameter">$odd-header-name</span>
[, string <span class="parameter">$even-header-name</span>
[, string $<span class="parameter">$odd-footer-name</span>
[, string $<span class="parameter">$even-footer-name</span>
[, mixed $<span class="parameter">$odd-header-value</span>
[, mixed <span class="parameter">$even-header-value</span>
[, mixed <span class="parameter">$odd-footer-value</span>
[, mixed $<span class="parameter">$even-footer-value</span>
[, string <span class="parameter">$name</span>
[, string <span class="parameter">$pageselector</span>
[, string <span class="parameter">$toc-pageselector</span>
[, string <span class="parameter">$sheet-size</span>
[, string <span class="parameter">$toc-sheet-size</span>
[, string <span class="parameter">$outdent </span>
[, int <span class="parameter">$toc-resetpagenum</span>
[, string <span class="parameter">$toc-pagenumstyle</span>
[, mixed <span class="parameter">$toc-suppress</span>
]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]])

Add a new page to the document, marking the point at which a Table of Contents
(<acronym title="Table of Contents">ToC</acronym>) will be inserted in the document at the end of writing.
The numerous parameters specify both paging details for the continuing document, and for the
<acronym title="Table of Contents">ToC</acronym> when it is generated.

<div class="alert alert-warning" role="alert" markdown="1">
  **Note:** From mPDF 5.7 the layout of a table of contents can be controlled using CSS.
	<span class="parameter">$font</span>, <span class="parameter">$font-size</span> and
	<span class="parameter">$indent</span> have become redundant.

  Any values set for these are ignored, but they are kept as useless parameters to allow backwards
  compatibility.
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** When writing a <span class="smallblock">DOUBLE-SIDED</span> document,
	the <acronym title="Table of Contents">ToC</acronym> will always start on an <span class="smallblock">ODD</span>
	page. Therefore there is no option to specifiy the pagebreak <span class="parameter">$type </span>as in
	<a href="{{ "/reference/mpdf-functions/addpage.html" | prepend: site.baseurl }}">AddPage()</a> -
	using **TOCpagebreak()** will always continue the document on an <span class="smallblock">ODD</span> page.
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** Page numbering is always suppressed in the <acronym title="Table of Contents">ToC</acronym>.
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** The <acronym title="Table of Contents">ToC</acronym> is generated at the end of the
	document. Unless otherwise specified, the <acronym title="Table of Contents">ToC</acronym> will inherit the
	page margins, headers/footers and orientation of the last page written to the document.
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** From mPDF 2.3 you can include more than one <acronym title="Table of Contents">ToC</acronym>
	in the document using the parameter <span class="parameter">$name</span>.
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** If **TOCpagebreak()** is used at the start of a blank (<span class="smallblock">ODD</span>)
	page, no new page(s) will be added. This was added in mPDF 2.3 to allow a
	<acronym title="Table of Contents">ToC</acronym> to be placed on the first page, or to allow a
	<acronym title="Table of Contents">ToC</acronym> to follow another <acronym title="Table of Contents">ToC</acronym>.
	In this case, any properties for the continuing document are ignored. If you define several
	<acronym title="Table of Contents">ToC</acronym>s following immediately on from one another, set the properties in
	the first <acronym title="Table of Contents">ToC</acronym> you define.
</div>

# Parameters

The initial parameters specify characteristics for the <acronym title="Table of Contents">ToC</acronym>, which is
generated automatically at the end of the document when
<a href="{{ "/reference/mpdf-functions/output.html" | prepend: site.baseurl }}">Output()</a> is called.


<span class="parameter">$font </span>

: <div class="alert alert-warning" role="alert" markdown="1">
    From mPDF &ge; 5.7 CSS styles are used to control layout of <acronym title="Table of Contents">ToC</acronym>s. Any
    value set for this is ignored.
  </div>

  Set the font-family for the <acronym title="Table of Contents">ToC</acronym>.

  <span class="smallblock">BLANK</span> or omitted uses default font-family for the document.



<span class="parameter">$font-size</span>

: <div class="alert alert-warning" role="alert" markdown="1">
    From mPDF &ge; 5.7 CSS styles are used to control layout of <acronym title="Table of Contents">ToC</acronym>s. Any
    value set for this is ignored.
  </div>

  Sets the font size for the <acronym title="Table of Contents">ToC</acronym> in ***points*** (pt)

  <span class="smallblock">BLANK</span> or omitted or `0` uses the default font-size for the document.


<span class="parameter">$indent</span>

: <div class="alert alert-warning" role="alert" markdown="1">
    From mPDF &ge; 5.7 CSS styles are used to control layout of <acronym title="Table of Contents">ToC</acronym>s.
    Any value set for this is ignored.
  </div>

  Sets the value in millimetres to indent each level of the <acronym title="Table of Contents">ToC</acronym>
  from the left margin.

  <span class="smallblock">BLANK</span> or omitted uses a default value of 5mm.


<span class="parameter">$paging</span> = `true` \| `1` \| `false` \| `0`

: Specify whether to show page numbers in the <acronym title="Table of Contents">ToC</acronym>.

  <span class="smallblock">BLANK</span> or omitted uses a default value of `true`.

  Default: `true`

  **Values**

  `true` or `1`
  : show page numbers in the <acronym title="Table of Contents">ToC</acronym>.

  `false` or `0`
  : do not show page numbers in the <acronym title="Table of Contents">ToC</acronym>.


<span class="parameter">$links </span> = `true` \| `1` \| `false` \| `0`

: Specify whether to generate hyperlinks in the <acronym title="Table of Contents">ToC</acronym>.

  <span class="smallblock">BLANK</span> or omitted uses a default value of `false`.

  Default: `false`

  **Values**

  `true` or `1`
  : show hyperlinks in the <acronym title="Table of Contents">ToC</acronym>.

  `false` or `0`
  : do not show hyperlinks in the <acronym title="Table of Contents">ToC</acronym>.


<span class="parameter">$toc-orientation </span>

: This attribute specifies the orientation of the <acronym title="Table of Contents">ToC</acronym> pages.

  <span class="smallblock">BLANK</span> or omitted leaves the orientation unchanged i.e. at the end of the document
  (before the <acronym title="Table of Contents">ToC</acronym> is generated)

  **Values** (case-insensitive)
  `'L'`or`'landscape'`
  : Landscape

  `'P'` or `'portrait'`
  : Portrait


<span class="parameter">$toc-margin-left</span>
<span class="parameter">$toc-margin-right</span>
<span class="parameter">$toc-margin-top</span>
<span class="parameter">$toc-margin-bottom</span>
<span class="parameter">$toc-margin-header</span>
<span class="parameter">$toc-margin-footer</span>

: Set the page margins for the <acronym title="Table of Contents">ToC</acronym>.

  All values should be specified as <span class="smallblock">LENGTH</span> in millimetres.

  If you are writing a <span class="smallblock">DOUBLE-SIDED</span> document, the margin values will be used for
  <span class="smallblock">ODD</span> pages; left and right margins will be mirrored for
  <span class="smallblock">EVEN</span> pages.

  <span class="smallblock">BLANK</span> or omitted leaves the current margin unchanged i.e. the margins current at
  the end of the document.

  `0` (zero) will set the margin to zero.


<span class="parameter">$toc-odd-header-name</span>
<span class="parameter">$toc-even-header-name</span>
<span class="parameter">$toc-odd-footer-name</span>
<span class="parameter">$toc-even-footer-name</span>

: Selects a header or footer by name to use for the <acronym title="Table of Contents">ToC</acronym>. The header/footer
  must already have been defined using
  <a href="{{ "/reference/mpdf-functions/defheaderbyname.html" | prepend: site.baseurl }}">DefHeaderByName()</a>,
  <a href="{{ "/reference/mpdf-functions/deffooterbyname.html" | prepend: site.baseurl }}">DefFooterByName()</a>,
  <a href="{{ "/reference/mpdf-functions/defhtmlheaderbyname.html" | prepend: site.baseurl }}">DefHTMLHeaderByName()</a>,
  or <a href="{{ "/reference/mpdf-functions/defhtmlfooterbyname.html" | prepend: site.baseurl }}">DefHTMLFooterByName()</a>.

  If you are writing a <span class="smallblock">SINGLE-SIDED</span> document, the values for
  <span class="smallblock">ODD</span> will be used for all pages, and values for <span class="smallblock">EVEN</span>
  will be ignored.

  <span class="smallblock">BLANK</span> or omitted leaves the header/footer unchanged. NB
  <span class="smallblock">BLANK</span> will not unset the header. Set <span class="parameter">$toc-</span>
  <span class="parameter">$odd-header-value</span> to `-1` to turn the header off.

  <div class="alert alert-info" role="alert" markdown="1">
    **Note:** You must add the prefix `html_` before the name if it is a HTMLHeader.
  </div>

<span class="parameter">$toc-odd-header-value</span>
<span class="parameter">$toc-even-header-value</span>
<span class="parameter">$toc-odd-footer-value</span>
<span class="parameter">$toc-even-footer-value</span>

: Specify whether to show a header or footer in the <acronym title="Table of Contents">ToC</acronym>. The
  header/footer must already have been defined using
  <a href="{{ "/reference/mpdf-functions/defheaderbyname.html" | prepend: site.baseurl }}">DefHeaderByName()</a>,
  <a href="{{ "/reference/mpdf-functions/deffooterbyname.html" | prepend: site.baseurl }}">DefFooterByName()</a>,
  <a href="{{ "/reference/mpdf-functions/defhtmlheaderbyname.html" | prepend: site.baseurl }}">DefHTMLHeaderByName()</a>,
  or <a href="{{ "/reference/mpdf-functions/defhtmlfooterbyname.html" | prepend: site.baseurl }}">DefHTMLFooterByName()</a>.

  If you are writing a <span class="smallblock">SINGLE-SIDED</span> document, the values for
  <span class="smallblock">ODD</span> will be used for all pages, and values for <span class="smallblock">EVEN</span>
  will be ignored.

  <span class="smallblock">BLANK</span> or omitted or `0` leaves the header/footer state unchanged.

  **Values** (case-insensitive)

  `1` or `'on'`
  : Show the selected header/footer in the <acronym title="Table of Contents">ToC</acronym>.

  `-1`  or `'off'`
  : Hide the selected header/footer in the <acronym title="Table of Contents">ToC</acronym>.


<span class="parameter">$toc-preHTML</span>

: Specify the HTML code to appear before the <acronym title="Table of Contents">ToC</acronym> e.g.
  `'<h1>Contents</h1>'`. Note that in contrast with the HTML equivalent
  &lt;<a href="{{ "/reference/html-control-tags/tocpagebreak.html" | prepend: site.baseurl }}">tocpagebreak</a>&gt;
  the text does not need to use HTML-entities.

  <span class="smallblock">BLANK</span> or omitted will enter no text

<span class="parameter">$toc-postHTML</span>

: Specify the HTML code to appear after the <acronym title="Table of Contents">ToC</acronym> e.g.
  `'<p>Comments to go below the ToC</p>'`. Note that in contrast with the HTML equivalent
  &lt;<a href="{{ "/reference/html-control-tags/tocpagebreak.html" | prepend: site.baseurl }}">tocpagebreak</a>&gt;
  the text does not need to use HTML-entities.

  <span class="smallblock">BLANK</span> or omitted will enter no text.

<span class="parameter">$toc-bookmarkText </span>

: Specify the text as it will appear as a <span class="smallblock">BOOKMARK</span> for the
  <acronym title="Table of Contents">ToC</acronym>  e.g. `'Content list'`.

  <span class="smallblock">BLANK</span> or omitted will not create a <span class="smallblock">BOOKMARK</span>.

<span class="parameter">$name</span>

: Specify which <acronym title="Table of Contents">ToC</acronym> to include at this point, if using more than one
  <acronym title="Table of Contents">ToC</acronym> in the document. <span class="parameter">$name</span> can be any
  alphanumeric characters (except just `0`) and is case-insensitive.

  <span class="smallblock">BLANK</span> or omitted or `0` uses the default <acronym title="Table of Contents">ToC</acronym>.

<span class="parameter">$toc-pageselector</span>

: Select a named CSS @page for the  <acronym title="Table of Contents">ToC</acronym>.

  <span class="smallblock">BLANK</span> or omitted or leaves the CSS page unchanged.

  See <a href="{{ "/paging/using-page.html" | prepend: site.baseurl }}">Using @page</a> for more information

<span class="parameter">$toc-sheet-size</span>
<span class="parameter">$sheet-size</span>

: Can be specified either as:
  * string for a pre-defined page size, see values below, e.g. `'A5'`
  * or as an array of width and height in millimetres e.g. `array(210,297)`.

  Default: <span class="smallblock">BLANK</span> - makes no change to the current sheet-size

  **Values** (case-insensitive)
  * `'A0'` - `'A10'`, `'B0'` - `'B10'`, `'C0'` - `'C10'`
  * `'4A0'`, `'2A0'`, `'RA0'` - `'RA4'`, `'SRA0'` - `'SRA4'`
  * `'Letter'`, `'Legal'`, `'Executive'`, `'Folio'`
  * `'Demy'`, `'Royal'`
  * `'A'` (Type A paperback 111x178mm)
  * `'B'` (Type B paperback 128x198mm)

  All of the above values can be suffixed with `'-L'` to force a Landscape page orientation document e.g. `'A4-L'`

<span class="parameter">$outdent</span>

: Set a negative indent for the last line of each <acronym title="Table of Contents">ToC</acronym> entry.

  Values should be <span class="smallblock">BLANK </span>string or any valid CSS <span class="smallblock">LENGTH</span>.

  This will cause the line to extend beyond the right margin; you can prevent this by setting
  <span class="smallblock">PADDING-RIGHT</span> equal to this value.

  Default: `0`

<span class="parameter">$toc-resetpagenum</span> = `1` - ∞

: Sets/resets the document page number to <span class="parameter">$resetpagenum</span> starting on the
  <acronym title="Table of Contents">ToC</acronym>. (The value must be a positive integer).

  <span class="smallblock">BLANK</span> or omitted or `0` leaves the preceding page number sequence unchanged.

<span class="parameter">$toc-pagenumstyle</span> = `'1'` \| `'A'` \| `'a'` \| `'I'` \| `'i'` \| [+ any value supported for list-style-type]

: Sets/resets the page numbering style to use in the <acronym title="Table of Contents">ToC</acronym> (values as
  for cf. <a href="{{ "/css-stylesheets/supported-css.html" | prepend: site.baseurl }}">lists</a>)

  <span class="smallblock">BLANK</span> or omitted leaves the current page number style unchanged.

  **Values** (case-sensitive)

  `'1'`
  : Decimal - 1,2,3,4...

  `'A'`
  : Alpha uppercase - A,B,C,D...

  `'a'`
  : Alpha lowercase - a,b,c,d...

  `'I'`
  : Roman uppercase - I, II, III, IV...

  `'i'`
  : Roman lowercase - i, ii, iii, iv...


<span class="parameter">$toc-suppress</span> = `true` \| `false` \| `1` \| `0`
<span class="parameter">$suppress</span> = `'on'`

: will suppress document page numbers in the <acronym title="Table of Contents">ToC</acronym>

  <span class="smallblock">BLANK</span> or omitted leaves the current condition unchanged.

  **Values** (case-insensitive)

  `1` or `true`
  : Suppress (hide) page numbers in the <acronym title="Table of Contents">ToC</acronym>

  `0` or `false`
  : Show page numbers in the <acronym title="Table of Contents">ToC</acronym>

  The rest of the parameters are defined exactly as for
  <a href="{{ "/reference/mpdf-functions/addpage.html" | prepend: site.baseurl }}">AddPage()</a>. Note that these
  parameters define page numbering, margins, headers/footers for the document as it continues from this point on;
  in the final document this will be the part of the document immediately after the <acronym title="Table of Contents">ToC</acronym>.

  Please refer to <a href="{{ "/reference/mpdf-functions/addpage.html" | prepend: site.baseurl }}">AddPage()</a> for
  further details. But **note** there are differences in the order of the parameters especially take care with
   <span class="parameter">$orientation</span>

# Changelog

<table class="table"> <thead>
<tr>
  <th>Version</th>
  <th>Description</th> </tr>
</thead> <tbody>
<tr>
  <td>2.0</td>
  <td>Function was added.</td>
</tr>
<tr>
  <td>2.2</td>
  <td>
    Default values for <span class="parameter">$font-size</span>, <span class="parameter">$paging</span> and
    <span class="parameter">$links</span> were redefined.
  </td>
</tr>
<tr>
  <td>2.3</td>
  <td><span class="parameter">$name</span> attribute was added.</td>
</tr>
<tr>
  <td>4.3</td>
  <td markdown="1">
  Parameters <span class="parameter">$pageselector</span>, <span class="parameter">$sheet-size</span>,
  <span class="parameter">$toc-pageselector</span> and <span class="parameter">$toc-sheet-size</span> were added
  </td>
</tr>
<tr>
  <td>5.7</td>
  <td markdown="1">
  <span class="parameter">$outdent</span> parameter added

  and parameters <span class="parameter">$font</span>, <span class="parameter">$font-size</span> and
  <span class="parameter">$indent</span> redundant and ignored
  </td>
</tr>
<tr>
  <td>6.0</td>
  <td>
    Parameters added:  <span class="parameter">$toc-resetpagenum</span>, <span class="parameter">$toc-pagenumstyle</span>
    and <span class="parameter">$toc-suppress</span>
  </td>
</tr>
</tbody>
</table>

# Examples

```php
<?php
$mpdf = new \Mpdf\Mpdf();

$mpdf->WriteHTML('Introduction');
$mpdf->TOCpagebreak();

$mpdf->TOC_Entry("Chapter 1", 0);
$mpdf->WriteHTML('Chapter 1 ...');

$mpdf->Output();

```

# See Also

- <a href="{{ "/reference/mpdf-functions/toc-entry.html" | prepend: site.baseurl }}">TOC_Entry()</a> - Add an entry for Table of Contents
- <a href="{{ "/reference/mpdf-functions/addpage.html" | prepend: site.baseurl }}">AddPage()</a> - Add a new page
- &lt;<a href="{{ "/reference/html-control-tags/tocpagebreak.html" | prepend: site.baseurl }}">tocpagebreak</a>&gt; - Custom HTML tag -
  equivalent to `TOCpagebreak()`
