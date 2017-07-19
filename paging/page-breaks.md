---
layout: page
title: Page breaks
parent_title: Paging
permalink: /paging/page-breaks.html
modification_time: 2015-08-05T11:59:45+00:00
---

You can force a page break anywhere in the document either by using HTML code or PHP:

```php
<?php
$mpdf->AddPage();

```

You can define or change all page characteristics when you add the new page:

* orientation
* margins
* numbering (on/off, style or suprress)
* header/footer

Note the special <a href="{{ "/reference/mpdf-functions/tocpagebreak.html" | prepend: site.baseurl }}">TOCpagebreak()</a>
or &lt;<a href="{{ "/reference/html-control-tags/tocpagebreak.html" | prepend: site.baseurl }}">tocpagebreak</a>&gt; which
are like <a href="{{ "/reference/mpdf-functions/addpage.html" | prepend: site.baseurl }}">AddPage()</a>/
<a href="{{ "/reference/mpdf-functions/addpagebyarray.html" | prepend: site.baseurl }}">AddPageByArray()</a> and
&lt;<a href="{{ "/reference/html-control-tags/pagebreak.html" | prepend: site.baseurl }}">pagebreak</a>&gt; whilst at
the same time marking the position for a Table of Contents to be later inserted. CSS
<a href="{{ "/paging/using-page.html" | prepend: site.baseurl }}">@page</a> can also be used to define page breaks.

# Forcing Page Breaks

You can set the CSS value for `page-break-before` to `always | left | right` for any block
element (p, div, etc). This will force a page-break, but take care that any enclosing (outer) block elements will be
'closed down' and their characteristics lost.

# Avoiding Page Breaks

mPDF has limited scope to control when automatic page-breaks occur, and does not have 'widows' or 'orphans' protection.

## page-break-inside

You can set the CSS value for `page-break-inside` to `avoid` for any block element. mPDF
will try to avoid a page-break within the block, but this only works across a maximum of 2 pages, and is not compatible
with table autosize or table rotate

## "Keep-with-table"

```php
<?php
$mpdf->use_kwt = true;    // Default: false

```

If set to `true`, mPDF will automatically set `page-break-inside: avoid;` for any H1-H6 header
that *immediately* precedes a table, thus keeping the heading together with the table.

- automatically sets the table to fit on one page (i.e. table:`page-break-inside: avoid`) if
  it is a rotated table
- ignored when: 
  * columns on, 
  * `page-break-inside: avoid` for surrounding element, 
  * active Forms

## Tables

If a table has the property `page-break-inside: avoid` and will not fit on the page, mPDF tries to shrink it to fit - up to
a maximum "shrink-factor" set by the variable `$mpdf->shrink_tables_to_fit` - default is `1.4` (i.e. about 70% original size).
If this still does not fit, it moves it to the next page.

A shrunk table may not be what you want. You can prevent this resizing either by setting the maximum shrink-factor for
a particular table e.g. `<table autosize="1">` or by setting the variable for the whole document i.e. `$mpdf->shrink_tables_to_fit = 1;`

(Note that mPDF will always resize tables if it is the only way to fit a row or whole table onto a full page.)

# Headers and Footers

See the documentation for <a href="{{ "/headers-footers/headers-footers.html" | prepend: site.baseurl }}">Headers and Footers</a>.

# Types of page break

The handling of borders and padding at page breaks was updated in mPDF 6.0. mPDF has three types of page breaks:

1.  "slice" - no border and no padding are inserted at a break. The effect is as though the element were rendered with no
    breaks present, and then sliced by the breaks afterward

2.  "cloneall" - each page fragment is independently wrapped with the borders and padding of all open elements.

3.  "clonebycss" - open elements which have the (custom) CSS property `box-decoration-break` set to `clone` are independently
    wrapped with their border and padding.

The difference between 2) and 3) is illustrated by this example:

```html
<style>
    div { border: 1px solid black; padding: 1em; }
    .level1 { box-decoration-break: slice; }
    .level2 { box-decoration-break: clone; }
    .level3 { box-decoration-break: clone; }
</style>

<div class="level1">
    <div class="level2">
        <div class="level3">
            ...
            ....
        </div>
    </div>
</div>

```

At the forced pagebreak which occurs after the P element:

If the page break type is "cloneall" - the three DIV elements will all be closed, by drawing the border and padding for
each at the end of the page; the three DIV elements will be re-opened, drawing the borders and padding, at the top of the
next page.

If the page break type is "clonebycss" - starting from the innermost element (`div.level3`) the DIV elements will have a
border and padding at the end of the page if `box-decoration-break` is `clone`. In this case level 2 and level 3 will be
closed/cloned and level 1 will be sliced; the opposite will occur at the top of the next page.

## Control of page breaks

<table class="table">
<tbody>
<tr>
  <td>Automatic page breaks (in flow of text)</td>
  <td>Always "slice"</td>
</tr>
<tr>
  <td markdown="1">
  `<tocpagebreak>`
  </td>
  <td>Always "cloneall"</td>
</tr>
<tr>
  <td markdown="1">
  `<formfeed>`
  </td>
  <td>Always "slice"</td>
</tr>
<tr>
  <td>If using columns</td>
  <td>Always "cloneall"</td>
</tr>
<tr>
  <td markdown="1">
  Page break forced by change of `@page` selector
  </td>
  <td>Always "cloneall"</td>
</tr>
<tr>
  <td markdown="1">
  `<pagebreak>`
  </td>
  <td markdown="1">
  Always "cloneall" if a change in page size or margins is specified.
  
  Otherwise page break type is determined by value of configurable variable: `$this->defaultPagebreakType`. Default is "cloneall".
  
  Default can be overridden by attribute `page-break-type` e.g. `<pagebreak page-break-type="clonebycss" />`
   </td>
</tr>
<tr>
  <td markdown="1">
  Page breaks forced by:      
  `page-break-before` or `page-break-after`
  </td>
  <td markdown="1">
  Page break type determined by value of configurable variable:    
  `$this->defaultPagebreakType`.     
  Default is "cloneall".
  </td>
</tr>
</tbody> </table>

## Notes on page breaking

* `box-decoration-break: slice|clone` was proposed for CSS3 in http://www.w3.org/TR/2012/CR-css3-background-20120417/#the-box-decoration-break
but it appears that it may be withdrawn. Default is `slice`; it is not inherited.
* `page-break-before` is not supported on `<table>`.
* `page-break-before|after` is ignored if set on block elements inside a table.
* Background images and gradients are not sliced (always cloned).

# See also

* <a href="{{ "/reference/mpdf-variables/defaultpagebreaktype.html" | prepend: site.baseurl }}">defaultPagebreakType</a>
* <a href="{{ "/reference/mpdf-variables/shrink-tables-to-fit.html" | prepend: site.baseurl }}">shrink_tables_to_fit</a>



* <a href="{{ "/reference/mpdf-functions/addpagebyarray.html" | prepend: site.baseurl }}">AddPageByArray()</a> and <a href="{{ "/reference/mpdf-functions/addpage.html" | prepend: site.baseurl }}">AddPage()</a>
* &lt;<a href="{{ "/reference/html-control-tags/pagebreak.html" | prepend: site.baseurl }}">pagebreak</a>&gt;
* <a href="{{ "/reference/mpdf-functions/tocpagebreak.html" | prepend: site.baseurl }}">TOCpagebreak()</a>
* &lt;<a href="{{ "/reference/html-control-tags/tocpagebreak.html" | prepend: site.baseurl }}">tocpagebreak</a>&gt;
* Using CSS <a href="{{ "/paging/using-page.html" | prepend: site.baseurl }}">@page</a> selector