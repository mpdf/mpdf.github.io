---
layout: page
title: formfeed
parent_title: HTML control tags
permalink: /reference/html-control-tags/formfeed.html
modification_time: 2015-08-05T12:01:22+00:00
---

(mPDF &ge; 2.3)

formfeed — Add a new page keeping current HTML tags/CSS styles active

# Description

&lt;**formfeed**
[ <span class="parameter">$orientation</span> ]
[ <span class="parameter">$type</span> ]
[ <span class="parameter">$resetpagenum</span> ]
[ <span class="parameter">$pagenumstyle</span> ]
[ <span class="parameter">$suppress</span> ]

[ <span class="parameter">$margin-left</span> ]
[ <span class="parameter">$margin-right</span> ]
[ <span class="parameter">$margin-top</span> ]
[ <span class="parameter">$margin-bottom</span> ]
[ <span class="parameter">$margin-header</span> ]
[ <span class="parameter">$margin-footer</span> ]

[ <span class="parameter">$odd-header-name</span> ]
[ <span class="parameter">$odd-header-value</span> ]
[ <span class="parameter">$even-header-name</span> ]
[ <span class="parameter">$even-header-value</span> ]
[ <span class="parameter">$odd-footer-name</span> ]
[ <span class="parameter">$odd-footer-value</span> ]
[ <span class="parameter">$even-footer-name</span> ]
[ <span class="parameter">$even-footer-value</span> ]
[ <span class="parameter">$page-selector</span> ] /&gt;

Add a new page to the document. The attributes are the same as for `<pagebreak>`, but whereas pagebreak by
default closes any open HTML tags, and does not continue CSS styles after the pagebreak, formfeed reinstates the
active properties and styles on the new page.

The attribute <span class="parameter">$type</span> can specify certain conditions which determine how many pages are
added. If writing a <span class="smallblock">DOUBLE-SIDED</span> document, a conditional formfeed
(`$type = "E"` or `"O"`) will add a new page only if required to make the current page match
the type (i.e. <span class="smallblock">ODD</span> or <span class="smallblock">EVEN</span>); a formfeed with
`$type = "NEXT-ODD"` or `"NEXT-EVEN"` will add one or two pages as required to make
the current page match the type (i.e. <span class="smallblock">ODD</span> or <span class="smallblock">EVEN</span>).

Number of pages added:

<table class="table">
<tbody>
<tr>
  <td> </td>
  <td> </td>
  <td colspan="2"><span class="smallblock">DOUBLE-SIDED</span></td>
</tr>
<tr>
  <td><span class="parameter">$type</span></td>
  <td><span class="smallblock">SINGLE-SIDED</span></td>
  <td>Currently <span class="smallblock">ODD</span> page</td>
  <td>Currently <span class="smallblock">EVEN</span> page</td>
</tr>
<tr>
  <td><span class="smallblock">BLANK</span></td>
  <td>1</td>
  <td>1</td>
  <td>1</td>
</tr>
<tr>
  <td markdown="1">
  `'O'` or `'ODD'`
  </td>
  <td>0</td>
  <td>0</td>
  <td>1</td>
</tr>
<tr>
  <td markdown="1">
  `'E'` or `'EVEN'`
  </td>
  <td>0</td>
  <td>1</td>
  <td>0</td>
</tr>
<tr>
  <td markdown="1">
  `'NEXT-ODD'`
  </td>
  <td>1</td>
  <td>2</td>
  <td>1</td>
</tr>
<tr>
  <td markdown="1">
  `'NEXT-EVEN'`
  </td>
  <td>1</td>
  <td>1</td>
  <td>2</td>
</tr>
</tbody>
</table>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** If no new page is added, the other parameters will be ignored e.g. resetting page
  numbers/styles, margins and headers/footers. If 2 pages are added, any changes in page numbers/styles, margins
  and headers/footers will start on the final added page.
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** From mPDF &ge; 3.0 the page numbering can be reset to any positive number. Prior to this,
  it was only possible to reset it to 1.
</div>

# Attributes

<span class="parameter">$orientation</span> = `L|P|landscape|portrait`

: This attribute specifies the orientation of the new page.

  <span class="smallblock">BLANK</span> or omitted leaves the current orientation unchanged

  **Values** (case-insensitive)

  * `'L'` or `'landscape'`: Landscape
  * `'P'` or `'portrait'`: Portrait

<span class="parameter">$type</span> = `E|O|even|odd|next-odd|next-even`

: If <span class="parameter">$type</span> is specified when writing a <span class="smallblock">DOUBLE-SIDED</span>
  document, the formfeed is conditional; a new page will only be added if necessary to meet the specified condition. 

  If not writing a <span class="smallblock">DOUBLE-SIDED</span> document, a formfeed
  `$type = "E"` will be ignored, whilst a formfeed
  `$type = "O'` will always force a new page.

  <span class="smallblock">BLANK</span> or omitted will force a new page unconditionally.

  **Values** (case-insensitive)

  * `'O'` or `'odd'`: Add a new page if required to make current page an <span class="smallblock">ODD</span> one.
  * `'E'` or `'even'`: Add a new page if required to make current page an <span class="smallblock">EVEN</span> one.
  * `'NEXT-ODD'`: Add one or two pages as required to make the current page <span class="smallblock">ODD</span>.
  * `'NEXT-EVEN'`: Add one or two pages as required to make the current page <span class="smallblock">EVEN</span>.

<span class="parameter">$resetpagenum</span> = `1 - ∞`

: Sets/resets the document page number to <span class="parameter">$resetpagenum</span> starting on the new page.
  (The value must be a positive integer).

  <span class="smallblock">BLANK</span> or omitted or `0` leaves the current page number sequence unchanged.

<span class="parameter">$pagenumstyle</span> = `1|A|a|I|i|[+ any value supported for list-style-type]`

: Sets/resets the page numbering style (values as for cf.
  <a href="{{ "/css-stylesheets/supported-css.html" | prepend: site.baseurl }}">lists</a>)

  <span class="smallblock">BLANK</span> or omitted leaves the current page number style unchanged.

  **Values** (case-sensitive)

  * `'1'`: Decimal - 1,2,3,4...
  * `'A'`: Alpha uppercase - A,B,C,D...
  * `'a'`: Alpha lowercase - a,b,c,d...
  * `'I'`: Roman uppercase - I, II, III, IV...
  * `'i'`: Roman lowercase - i, ii, iii, iv...

<span class="parameter">$suppress</span> = `on|off|1|0`

: `$suppress = 'on'` will suppress document page numbers from the new page onwards
  (until `$suppress = 'off'` is used)

  <span class="smallblock">BLANK</span> or omitted leaves the current condition unchanged.

  **Values** (case-insensitive)

  * `1` or `'on'`: Suppress (hide) page numbers from the new page forwards.
  * `0` or `'off'`: Show page numbers from the new page forwards.

<span class="parameter">$margin-left</span>
<span class="parameter">$margin-right</span>
<span class="parameter">$margin-top</span>
<span class="parameter">$margin-bottom</span>
<span class="parameter">$margin-header</span>
<span class="parameter">$margin-footer</span>

: Sets the page margins from the new page forwards.

  All values should be specified as <span class="smallblock">LENGTH</span> in any valid CSS form.

  If you are writing a <span class="smallblock">DOUBLE-SIDED</span> document, the margin values will be used for
  <span class="smallblock">ODD</span> pages; left and right margins will be mirrored for
  <span class="smallblock">EVEN</span> pages.

  <span class="smallblock">BLANK</span> or omitted leaves the current margin unchanged. NB `0` (zero) will set the margin to zero.

<span class="parameter">$odd-header-name</span>
<span class="parameter">$even-header-name</span>
<span class="parameter">$odd-footer-name</span>
<span class="parameter">$even-footer-name</span>

: Selects a header or footer by name to use from the new page forwards. The header/footer must already have been defined
  using &lt;<a href="{{ "/reference/html-control-tags/pageheader.html" | prepend: site.baseurl }}">pageheader</a>&gt;,
  &lt;<a href="{{ "/reference/html-control-tags/pagefooter.html" | prepend: site.baseurl }}">pagefooter</a>&gt;,
  &lt;<a href="{{ "/reference/html-control-tags/htmlpageheader.html" | prepend: site.baseurl }}">htmlpageheader</a>&gt;,
  or &lt;<a href="{{ "/reference/html-control-tags/htmlpagefooter.html" | prepend: site.baseurl }}">htmlpagefooter</a>&gt;.

  If you are writing a <span class="smallblock">SINGLE-SIDED</span> document, the values for
  <span class="smallblock">ODD</span> will be used for all pages, and values for <span class="smallblock">EVEN</span>
  will be ignored.

  <span class="smallblock">BLANK</span> or omitted leaves the header/footer unchanged. NB `""` will not unset the header.
  Use <span class="parameter">$odd-header-value</span> to turn the header off.

  <div class="alert alert-info" role="alert" markdown="1">
    **Note:** You must add the prefix `html_` before the name if it is a HTMLHeader.
  </div>

<span class="parameter">$odd-header-value</span>
<span class="parameter">$even-header-value</span>
<span class="parameter">$odd-footer-value</span>
<span class="parameter">$even-footer-value</span>

: Specify whether to show or hide the named header or footer from the new page forwards. The header/footer must already
  have been defined using
  &lt;<a href="{{ "/reference/html-control-tags/pageheader.html" | prepend: site.baseurl }}">pageheader</a>&gt;,
  &lt;<a href="{{ "/reference/html-control-tags/pagefooter.html" | prepend: site.baseurl }}">pagefooter</a>&gt;,
  &lt;<a href="{{ "/reference/html-control-tags/htmlpageheader.html" | prepend: site.baseurl }}">htmlpageheader</a>&gt;
  or &lt;<a href="{{ "/reference/html-control-tags/htmlpagefooter.html" | prepend: site.baseurl }}">htmlpagefooter</a>&gt;.

  If you are writing a <span class="smallblock">SINGLE-SIDED</span> document, the values for
  <span class="smallblock">ODD</span> will be used for all pages, and values for
  <span class="smallblock">EVEN</span> will be ignored.

  <span class="smallblock">BLANK</span> or omitted or `0` leaves the header/footer state unchanged.

  **Values** (case-insensitive)

  * `1` or `'on'`: Start using the selected header/footer from the new page onwards.
  * `-1` or `'off'`: Stop using the selected header from the new page onwards.

<span class="parameter">$page-selector</span>

: Select a named CSS @page.

  <span class="smallblock">BLANK</span> or omitted or leaves the CSS page unchanged.

  See <a href="{{ "/paging/using-page.html" | prepend: site.baseurl }}">Using @page</a> for more information

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
  <td>Function was added.</td>
</tr>
<tr>
  <td>3.0</td>
  <td><span class="parameter">$resetpagenum</span> changed to allow positive integers above 1</td>
</tr>
<tr>
  <td>4.2</td>
  <td>Parameter <span class="parameter">$page-selector</span> was added</td>
</tr>
</tbody>
</table>

# Examples

```php
<html>

<div>
    Text of introduction...
    <formfeed />
    This text will start on a new page, and will also have a blue border etc...
</div>

</html>

```

# Notes

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** See
  &lt;<a href="{{ "/reference/html-control-tags/pagebreak.html" | prepend: site.baseurl }}">pagebreak</a>&gt;
  for further examples using the attributes. There is no PHP equivalent of `<formfeed>` but you can use
  <a href="{{ "/reference/mpdf-variables/restoreblockpagebreaks.html" | prepend: site.baseurl }}">
  <span class="parameter">$restoreBlockPagebreaks</span>
  </a>
</div>

# See Also

- <a href="{{ "/reference/mpdf-functions/addpage.html" | prepend: site.baseurl }}">AddPage()</a> - Add one or more (conditional) pages to the document
- &lt;<a href="{{ "/reference/html-control-tags/formfeed.html" | prepend: site.baseurl }}">pagebreak</a>&gt; - Forces a new page
- <a href="{{ "/reference/mpdf-variables/restoreblockpagebreaks.html" | prepend: site.baseurl }}">restoreBlockPagebreaks</a> - forces `<pagebreak>` to act in the same way as `<formfeed>`
