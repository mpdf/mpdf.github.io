---
layout: page
title: tocpagebreak
parent_title: HTML control tags
permalink: /reference/html-control-tags/tocpagebreak.html
modification_time: 2015-08-05T12:01:30+00:00
---

(mPDF &ge; 2.0)

tocpagebreak — Insert a table of contents

# Description

&lt;**tocpagebreak**
[ <span class="parameter">$paging</span> ]
[ <span class="parameter">$links</span> ]
[ <span class="parameter">$toc-orientation</span> ]
[ <span class="parameter">$toc-margin-left</span> ]
[ <span class="parameter">$toc-margin-right</span> ]
[ <span class="parameter">$toc-margin-top</span> ]
[ <span class="parameter">$toc-margin-bottom</span> ]
[ <span class="parameter">$toc-margin-header</span> ]
[ <span class="parameter">$toc-margin-footer</span> ]
[ <span class="parameter">$toc-odd-header-name</span> ]
[ <span class="parameter">$toc-even-header-name</span> ]
[ <span class="parameter">$toc-odd-footer-name</span> ]
[ <span class="parameter">$toc-even-footer-name</span> ]
[ <span class="parameter">$toc-odd-header-value</span> ]
[ <span class="parameter">$toc-even-header-value</span> ]
[ <span class="parameter">$toc-odd-footer-value</span> ]
[ <span class="parameter">$toc-even-footer-value</span> ]
[ <span class="parameter">$toc-preHTML</span> ]
[ <span class="parameter">$toc-postHTML</span> ]
[ <span class="parameter">$toc-bookmarkText</span> ]
[ <span class="parameter">$name</span> ]
[ <span class="parameter">$toc-page-selector</span> ]
[ <span class="parameter">$toc-sheet-size</span> ]
[ <span class="parameter">$toc-resetpagenum</span> ]
[ <span class="parameter">$toc-pagenumstyle</span> ]
[ <span class="parameter">$toc-suppress</span> ]

[ <span class="parameter">$orientation</span> ]
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
[ <span class="parameter">$page-selector</span> ]
[ <span class="parameter">$sheet-size</span> ]
[ <span class="parameter">$outdent</span> ] /&gt;

Add a new page to the document, marking the point at which a Table of Contents (<acronym title="Table of Contents">ToC</acronym>)
will be inserted in the document at the end of writing. The numerous parameters specify both paging details for the continuing
document, and for the <acronym title="Table of Contents">ToC</acronym> when it is generated.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** From mPDF 5.7 the layout of a table of contents can be controlled using CSS.
  <span class="parameter">$font</span> <span class="parameter">$font-size</span>
  and <span class="parameter">$indent</span> have become redundant.
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** When writing a <span class="smallblock">DOUBLE-SIDED</span> document, the
  <acronym title="Table of Contents">ToC</acronym> will always start on an <span class="smallblock">ODD</span> page.
  Therefore there is no option to specifiy the pagebreak <span class="parameter">$type </span>as
  in &lt;<a href="{{ "/reference/html-control-tags/pagebreak.html" | prepend: site.baseurl }}">pagebreak</a>&gt; -
  using **&lt;tocpagebreak&gt;** will always continue the document on an <span class="smallblock">ODD</span> page.
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** Page numbering was suppressed in the <acronym title="Table of Contents">ToC</acronym>
  prior to mPDF v 6.0. From v6.0 onwards, you can specify the page numbering throughout the
  <acronym title="Table of Contents">ToC</acronym> .
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** The <acronym title="Table of Contents">ToC</acronym> is generated at the end of the document.
  Unless otherwise specified, the <acronym title="Table of Contents">ToC</acronym> will inherit the page margins,
  headers/footers and orientation of the last page written to the document.
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** From mPDF 2.3 you can include more than one <acronym title="Table of Contents">ToC</acronym>
  in the document using the attribute <span class="parameter">$name</span>.
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** If `<tocpagebreak>` occurs at the start of a blank
  (<span class="smallblock">ODD</span>) page, no new page(s) will be added. This was added in mPDF 2.3 to
  allow a <acronym title="Table of Contents">ToC</acronym> to be placed on the first page, or to allow
  a <acronym title="Table of Contents">ToC</acronym> to follow another
  <acronym title="Table of Contents">ToC</acronym>.

  In this case, any properties for the continuing document
  are ignored. If you define several <acronym title="Table of Contents">ToC</acronym>s following immediately
  on from one another, set the properties in the first <acronym title="Table of Contents">ToC</acronym>
  you define (including the <span class="parameter">$resetpagenum</span>).
</div>

# Attributes

The first set of attributes specify characteristics for the <acronym title="Table of Contents">ToC</acronym>,
which is generated automatically at the end of the document when
<a href="{{ "/reference/mpdf-functions/output.html" | prepend: site.baseurl }}">Output()</a> is called.

<span class="parameter">$paging</span> = `1|on|0|off`

: Specify whether to show page numbers in the <acronym title="Table of Contents">ToC</acronym>.

  <span class="smallblock">BLANK</span> or omitted uses a default value of `true`.

  Default: `'ON'`

  **Values** (case-insensitive)

  * `'ON'` or `'1'`: show page numbers in the <acronym title="Table of Contents">ToC</acronym>.
  * `'OFF'` or `'0'`: do not show page numbers in the <acronym title="Table of Contents">ToC</acronym>.

<span class="parameter">$links </span> = `1|on|0|off`

: Specify whether to generate hyperlinks in the <acronym title="Table of Contents">ToC</acronym>.

  <span class="smallblock">BLANK</span> or omitted uses a default value of `false`.

  Default: `'OFF'`

  **Values** (case-insensitive)

  * `'ON'` or `'1'`: show hyperlinks in the <acronym title="Table of Contents">ToC</acronym>.
  * `'OFF'` or `'0'`: do not show hyperlinks in the <acronym title="Table of Contents">ToC</acronym>.


<span class="parameter">$toc-orientation</span> = `L|P|landscape|portrait`

: This attribute specifies the orientation of the <acronym title="Table of Contents">ToC</acronym> pages.

  <span class="smallblock">BLANK</span> or omitted leaves the orientation unchanged i.e. at the end of the document
  (before the <acronym title="Table of Contents">ToC</acronym> is generated)

  **Values** (case-insensitive)

  * `'L'` or `'landscape'`: Landscape
  * `'P'` or `'portrait'`: Portrait

<span class="parameter">$toc-margin-left</span>
<span class="parameter">$toc-margin-right</span>
<span class="parameter">$toc-margin-top</span>
<span class="parameter">$toc-margin-bottom</span>
<span class="parameter">$toc-margin-header</span>
<span class="parameter">$toc-margin-footer</span>

: Set the page margins for the <acronym title="Table of Contents">ToC</acronym>.

  Values can be specified using any valid CSS <span class="smallblock">LENGTH</span> e.g. `px`, `pt`, `em`, `mm`.

  If you are writing a <span class="smallblock">DOUBLE-SIDED</span> document, the margin values will be used for
  <span class="smallblock">ODD</span> pages; left and right margins will be mirrored for
  <span class="smallblock">EVEN</span> pages.

  <span class="smallblock">BLANK</span> or omitted leaves the current margin unchanged i.e. the margins current at
  the end of the document.

  `"0"` (zero) will set the margin to zero.

<span class="parameter">$toc-odd-header-name</span>
<span class="parameter">$toc-even-header-name</span>
<span class="parameter">$toc-odd-footer-name</span>
<span class="parameter">$toc-even-footer-name</span>

: Selects a header or footer by name to use for the <acronym title="Table of Contents">ToC</acronym>. The header/footer
  must already have been defined using
  <a href="{{ "/reference/mpdf-functions/defheaderbyname.html" | prepend: site.baseurl }}">defHeaderByName()</a>,
  <a href="{{ "/reference/mpdf-functions/deffooterbyname.html" | prepend: site.baseurl }}">defFooterByName()</a>,
  <a href="{{ "/reference/mpdf-functions/defhtmlheaderbyname.html" | prepend: site.baseurl }}">defHTMLHeaderByName()</a>
  or <a href="{{ "/reference/mpdf-functions/defhtmlfooterbyname.html" | prepend: site.baseurl }}">defHTMLFooterByName()</a>.

  If you are writing a <span class="smallblock">SINGLE-SIDED</span> document, the values for
  <span class="smallblock">ODD</span> will be used for all pages, and values for <span class="smallblock">EVEN</span>
  will be ignored.

  <span class="smallblock">BLANK</span> or omitted leaves the header/footer unchanged. NB
  <span class="smallblock">BLANK</span> will not unset the header. Set
  <span class="parameter">$toc-</span><span class="parameter">$odd-header-value</span> to `'-1'` to turn the header off.

  <div class="alert alert-info" role="alert" markdown="1">
    **Note:** You must add the prefix `html_` before the name if it is a HTMLHeader.
  </div>

<span class="parameter">$toc-odd-header-value</span>
<span class="parameter">$toc-even-header-value</span>
<span class="parameter">$toc-odd-footer-value</span>
<span class="parameter">$toc-even-footer-value</span>

: Specify whether to show a header or footer in the <acronym title="Table of Contents">ToC</acronym>. The header/footer
  must already have been defined using
  <a href="{{ "/reference/mpdf-functions/defheaderbyname.html" | prepend: site.baseurl }}">defHeaderByName()</a>,
  <a href="{{ "/reference/mpdf-functions/deffooterbyname.html" | prepend: site.baseurl }}">defFooterByName()</a>,
  <a href="{{ "/reference/mpdf-functions/defhtmlheaderbyname.html" | prepend: site.baseurl }}">defHTMLHeaderByName()</a>
  or <a href="{{ "/reference/mpdf-functions/defhtmlfooterbyname.html" | prepend: site.baseurl }}">defHTMLFooterByName()</a>.

  If you are writing a <span class="smallblock">SINGLE-SIDED</span> document, the values for
  <span class="smallblock">ODD</span> will be used for all pages, and values for <span class="smallblock">EVEN</span>
  will be ignored.

  <span class="smallblock">BLANK</span> or omitted or `'0'` leaves the header/footer state unchanged.

  **Values** (case-insensitive)

    * `1` or `'on'`: Show the selected header/footer in the <acronym title="Table of Contents">ToC</acronym>.
    * `-1` or `'off'`: Hide the selected header/footer in the <acronym title="Table of Contents">ToC</acronym>.

<span class="parameter">$toc-preHTML</span>

: Specify the HTML code to appear before the <acronym title="Table of Contents">ToC</acronym>.

  The HTML code cannot contain any of the characters: `<`, `>`, `&`, `'` or `"` and must use the appropriate HTML
  entities e.g. `<tocpagebreak toc-prehtml="&lt;h1&gt;Contents&lt;/h1&gt;">`

  It is recommended that you use htmlspecialchars('Your html code', ENT_QUOTES) for this.

  <span class="smallblock">BLANK</span> or omitted will enter no text

<span class="parameter">$toc-postHTML</span>

: Specify the HTML code to appear after the <acronym title="Table of Contents">ToC</acronym>.

  The HTML code cannot contain any of the characters: `<`, `>`, `&`, `'` or `"` and must use the appropriate HTML
  entities e.g. `<tocpagebreak toc-posthtml="&lt;p&gt;Comments after the Contents table&lt;/p&gt;">`

  It is recommended that you use htmlspecialchars('Your html code', ENT_QUOTES) for this.

  <span class="smallblock">BLANK</span> or omitted will enter no text.

<span class="parameter">$toc-bookmarkText </span>

: Specify the text as it will appear as a <span class="smallblock">BOOKMARK</span> for the
  <acronym title="Table of Contents">ToC</acronym>  e.g. 'Content list'.

  The text cannot contain any of the characters: `<`, `>`, `&`, `'` or `"` and must use the appropriate HTML
  entities e.g. `<tocpagebreak toc-bookmarkText="Contents table &gt;&gt;">`

  It is recommended that you use htmlspecialchars('Your bookmark text', ENT_QUOTES) for this.

  <span class="smallblock">BLANK</span> or omitted will not create a <span class="smallblock">BOOKMARK</span>.

<span class="parameter">$name</span>

: Specify which <acronym title="Table of Contents">ToC</acronym> to include at this point, if using more than one
  <acronym title="Table of Contents">ToC</acronym> in the document. <span class="parameter">$name</span> can be any
  alphanumeric characters (except just "0") and is case-insensitive.

  <span class="smallblock">BLANK</span> or omitted or 0 uses the default <acronym title="Table of Contents">ToC</acronym>.

<span class="parameter">$toc-page-selector</span>

: Select a named CSS @page for the <acronym title="Table of Contents">ToC</acronym>.

  <span class="smallblock">BLANK</span> or omitted or leaves the CSS page unchanged.

  See <a href="{{ "/paging/using-page.html" | prepend: site.baseurl }}">Using @page</a> for more information

<span class="parameter">$toc-sheet-size</span>

: <span class="parameter">$toc-sheet-size</span> can be specified either as:
  * a pre-defined page size,
  * or as two <span class="smallblock">LENGTH</span> values separated by a space, representing width and height e.g. `'210mm 297mm'`.
  `em`, `ex` and `%` are not accepted. Note that this is different from the 'size' property of the page-box used with the CSS
  @page selector.

  Default: <span class="smallblock">BLANK</span> - makes no change to the current sheet-size

  **Values** (case-insensitive)

  * `'A0'`-`'A10'`, `'B0'`-`'B10'`, `'C0'`-`'C10'`
  * `'4A0'`, `'2A0'`, `'RA0'`-`'RA4'`, `'SRA0'`-`'SRA4'`
  * `'Letter'`, `'Legal'`, `'Executive'`, `'Folio'`
  * `'Demy'`, `'Royal'`
  * `'A'` (Type A paperback 111x178mm)
  * `'B'` (Type B paperback 128x198mm)
  * &lt;<span class="smallblock">LENGTH</span>&gt;{2} e.g. `'210mm 297mm'`

  All of the pre-defined values can be suffixed with `"-L"` to force a Landscape page orientation document e.g. `"A4-L"`

<span class="parameter">$toc-resetpagenum</span> = `1 - ∞`

: Sets/resets the document page number to <span class="parameter">$resetpagenum</span> starting on the
  <acronym title="Table of Contents">ToC</acronym>. (The value must be a positive integer).

  <span class="smallblock">BLANK</span> or omitted or 0 leaves the preceding page number sequence unchanged.

<span class="parameter">$toc-pagenumstyle</span> = `1|A|a|I|i|[+ any value supported for list-style-type]`

: Sets/resets the page numbering style to use in the <acronym title="Table of Contents">ToC</acronym> (values as for cf.
  <a href="{{ "/css-stylesheets/supported-css.html" | prepend: site.baseurl }}">lists</a>)

  <span class="smallblock">BLANK</span> or omitted leaves the current page number style unchanged.

  **Values** (case-sensitive)

  * `'1'`: Decimal - 1,2,3,4...
  * `'A'`: Alpha uppercase - A,B,C,D...
  * `'a'`: Alpha lowercase - a,b,c,d...
  * `'I'`: Roman uppercase - I, II, III, IV...
  * `'i'`: Roman lowercase - i, ii, iii, iv...

<span class="parameter">$toc-suppress</span> = `on|off|1|0`

: `$suppress = 'on'` will suppress document page numbers in the
   <acronym title="Table of Contents">ToC</acronym>

  <span class="smallblock">BLANK</span> or omitted leaves the current condition unchanged.

  **Values** (case-insensitive)

  * `1` or `'on'`: Suppress (hide) page numbers in the <acronym title="Table of Contents">ToC</acronym>
  * `0` or `'off'`: Show page numbers in the <acronym title="Table of Contents">ToC</acronym>


**Other attributes**

The rest of the attributes are defined exactly as for
&lt;<a href="{{ "/reference/html-control-tags/pagebreak.html" | prepend: site.baseurl }}">pagebreak</a>&gt;.
Note that these attributes define page numbering, margins, headers/footers for the document as it continues from this
point on; in the final document this will be the part of the document immediately after the
<acronym title="Table of Contents">ToC</acronym>.

Please refer to
&lt;<a href="{{ "/reference/html-control-tags/pagebreak.html" | prepend: site.baseurl }}">pagebreak</a>&gt;
for further details.

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
  <td>Tag was added.</td>
</tr>
<tr>
  <td>2.2</td>
  <td>Default values for <span class="parameter">$font-size</span>, <span class="parameter">$paging</span> and <span class="parameter">$links</span> were redefined.</td>
</tr>
<tr>
  <td>2.3</td>
  <td><span class="parameter">$name</span> attribute was added.</td>
</tr>
<tr>
  <td>3.0</td>
  <td><span class="parameter">$toc-bookmarkText</span> changed to decode htmlspecialchars</td>
</tr>
<tr>
  <td>4.3</td>
  <td>
    Parameters <span class="parameter">$page-selector</span>, <span class="parameter">$sheet-size</span>,
    <span class="parameter">$toc-page-selector</span> and <span class="parameter">$toc-sheet-size</span> were added
  </td>
</tr>
<tr>
  <td>5.7</td>
  <td markdown="1">
  <span class="parameter">$outdent</span> parameter added
  <span class="parameter">$font</span>, <span class="parameter">$font-size</span> and <span class="parameter">$indent</span> redundant
   </td>
</tr>
<tr>
  <td>6.0</td>
  <td>Parameters added: <span class="parameter">$toc-resetpagenum</span>, <span class="parameter">$toc-pagenumstyle</span>, <span class="parameter">$toc-suppress</span></td>
</tr>
</tbody>
</table>

# Examples

```html
<html>
    Text of introduction...

    <tocpagebreak />

    <tocentry content="Chapter 1" />Text of main book...
</html>

```

# See Also

- <a href="{{ "/reference/mpdf-functions/addpage.html" | prepend: site.baseurl }}">&lt;tocentry</a>&gt;- Add an entry for Table of Contents
- &lt;<a href="{{ "/reference/html-control-tags/pagebreak.html" | prepend: site.baseurl }}">pagebreak</a>&gt; - Add a new page
- <a href="{{ "/reference/mpdf-functions/tocpagebreak.html" | prepend: site.baseurl }}">TOCpagebreak()</a> - PHP equivalent of `<tocpagebreak>`
