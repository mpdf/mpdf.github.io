---
layout: page
title: Using @page
parent_title: Paging
permalink: /paging/using-page.html
modification_time: 2015-08-05T11:59:48+00:00
---

(mPDF &ge; 4.2)

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** If you are referencing an HTML header/footer, you must add the prefix `html_` before the name.
</div>

# About CSS Paged Media

The paged media model of CSS (<a href="http://www.w3.org/TR/1998/REC-CSS2-19980512/page.html">http://www.w3.org/TR/1998/REC-CSS2-19980512/page.html</a>)
is used as a basis

```
	______________________________
	|                         |   |<- sheet
	|                         |<--+-- crop marks
	|   ______________________|___|
	|  |    A                 |   |
	|  |    ______________    |<--+-- page box
	|  |   |   HEADER     |   |   |
	|  | D |              | B |   |
	|  |   |              |   |   |
	|  |   |              |<--+---+-- page box minus margins = printed area
	|  |   |              |   |   |
	|  |   |              |   |   |
	|  |   |              |   |   |
	|  |   |___FOOTER_____|   |   |   A: margin-top
	|  |    C                 |   |   B: margin-right
	|  |______________________|   |   C: margin-bottom
	|                             |   D: margin-left
	|_____________________________|

```

The dimensions set when calling a new `\Mpdf\Mpdf()` set the Sheet size.

The Page-box size is assumed to be the same as the sheet size by default.

The page-box margins are therefore by default the left/right/top and bottom margins.

NB Page-box margins are INSIDE the page-box (unlike block elements in CSS).

# Supported CSS selectors

The CSS `@page` selector is partially supported in mPDF with the following properties:

```css
@page {
	size: 8.5in 11in; /* <length>{1,2} | auto | portrait | landscape */
	      /* 'em' 'ex' and % are not allowed; length values are width height */
	margin: 10%; /* <any of the usual CSS values for margins> */
	             /*(% of page-box width for LR, of height for TB) */
	margin-header: 5mm; /* <any of the usual CSS values for margins> */
	margin-footer: 5mm; /* <any of the usual CSS values for margins> */
	marks: /*crop | cross | none*/
	header: html_myHTMLHeaderOdd;
	footer: html_myHTMLFooterOdd;
	background: ...
	background-image: ...
	background-position ...
	background-repeat ...
	background-color ...
	background-gradient: ...
}
```

## Notes

All properties except size are optional.

Three values for the <span class="parameter">$size</span> property set the page box to the same size as the sheet:

* `auto` - The page box will be set to the size and orientation of the target sheet.
* `landscape` - Overrides the target's orientation. The page box is the same size as the target, and the longer sides
  are horizontal.
* `portrait` - Overrides the target's orientation. The page box is the same size as the target, and the shorter sides
  are horizontal.

The header and footer names refer to named headers/footers set in your document.

NB The prefix `html_` used before the name is used to denote a header/footer defined as HTML code.

If a header/Footer name is set as `_blank` (or any name that hasn't been defined) it will turn off Headers/Footers.

Crop marks indicate where the page should be cut. Cross marks (also known as register marks or registration marks)
are used to align sheets.

If you have defined `@page {}` in the CSS, then the values for the margins will override the ones set calling a
`new \Mpdf\Mpdf()`.

IMPORTANT - if you define a `@page {}` but don't specifiy margins, they will be set to the initial margin values of mPDF.

If you set a page(-box) smaller than the sheet size, the margins are increased by the difference between the page-box
and sheet size - automatically centering the page-box inside the sheet.

If you change page-box orientation, the sheet orientation will follow.

Note that block-style elements - and any styling associated with it - will be terminated at a page-break.

# Pseudo-selectors

CSS pseudo-selectors `:left`, `:right` and `:first` are recognised by mPDF and support the same properties as `@page` except:

- `size`
- `margin-left`
- `margin-right`
- `odd-header-name`
- `even-header-name`
- `odd-footer-name`
- `even-footer-name`

# Example

```css
@page :right {
	margin-top: 3cm;
	margin-bottom: 4cm;
	header: html_myHeader;
}
```

Pseudo-selectors for page can change top, bottom, header and footer margins, but not left and right margins.
mPDF can only cope with one set of (optionally mirrored) left/right margins.

Properties specified in a `:first @page` rule override those specified in `:right` (or `:left`) @page rules for the
first page only

# Named @page selectors

Named pages are also supported e.g.:

```css
@page rotated {
    size: landscape;
}
```

You can then refer to the named page in other CSS style sheets:

```css
div.onitsside {
    page: rotated;
    page-break-before: right;
}
```

`<div class="onitsside">` will thus start a new right/odd page which will be in landscape.

# Setting a named page

You can also set the page using parameters in:

- functions: <a href="{{ "/reference/mpdf-functions/addpage.html" | prepend: site.baseurl }}">AddPage()</a>
  and <a href="{{ "/reference/mpdf-functions/tocpagebreak.html" | prepend: site.baseurl }}">TOCpagebreak()</a>
- html tags: &lt;<a href="{{ "/reference/html-control-tags/tocpagebreak.html" | prepend: site.baseurl }}">tocpagebreak</a>&gt;
  &lt;<a href="{{ "/reference/html-control-tags/pagebreak.html" | prepend: site.baseurl }}">pagebreak</a>&gt;
  and &lt;<a href="{{ "/reference/html-control-tags/formfeed.html" | prepend: site.baseurl }}">formfeed</a>&gt;

## page-break-before

The CSS property `page-break-before` is useful in conjunction with a named page definition.

`page-break-before: always|left|right;`

* `always` - Always force a page break before the generated block element.
* `left` - Force one or two page breaks before the generated block element so that the next page is formatted as a left/even page.
* `right` - Force one or two page breaks before the generated block element so that the next page is formatted as a right/odd page.

So, for example, `page-break-before: right` is equivalent of `AddPage(... 'NEXT-ODD'...)`

## Example using Headers and Footers

```html
<?php

$mpdf = new \Mpdf\Mpdf();

$mpdf->useOddEven = 1;

$html = '
<html>
<head>
<style>
    @page {
        size: auto;
        odd-header-name: html_myHeader1;
        even-header-name: html_myHeader2;
        odd-footer-name: html_myFooter1;
        even-footer-name: html_myFooter2;
    }
    @page chapter2 {
        odd-header-name: html_Chapter2HeaderOdd;
        even-header-name: html_Chapter2HeaderEven;
        odd-footer-name: html_Chapter2FooterOdd;
        even-footer-name: html_Chapter2FooterEven;
    }
    @page noheader {
        odd-header-name: _blank;
        even-header-name: _blank;
        odd-footer-name: _blank;
        even-footer-name: _blank;
    }
    div.chapter2 {
        page-break-before: right;
        page: chapter2;
    }
    div.noheader {
        page-break-before: right;
        page: noheader;
    }
</style>
</head>

<body>

    <htmlpageheader name="myHeader1" style="display:none">
        <div style="text-align: right; border-bottom: 1px solid #000000; font-weight: bold; font-size: 10pt;">
            My document
        </div>
    </htmlpageheader>

    <htmlpageheader name="myHeader2" style="display:none">
        <div style="border-bottom: 1px solid #000000; font-weight: bold;  font-size: 10pt;">
            My document
        </div>
    </htmlpageheader>

    <htmlpagefooter name="myFooter1" style="display:none">
        <table width="100%">
            <tr>
                <td width="33%">
                    <span style="font-weight: bold; font-style: italic;">{DATE j-m-Y}</span>
                </td>
                <td width="33%" align="center" style="font-weight: bold; font-style: italic;">
                    {PAGENO}/{nbpg}
                </td>
                <td width="33%" style="text-align: right;">
                    My document
                </td>
            </tr>
        </table>
    </htmlpagefooter>

    <htmlpagefooter name="myFooter2" style="display:none">
        <table width="100%">
            <tr>
                <td width="33%">My document</td>
                <td width="33%" align="center">{PAGENO}/{nbpg}</td>
                <td width="33%" style="text-align: right;">{DATE j-m-Y}</td>
            </tr>
        </table>
    </htmlpagefooter>

    <htmlpageheader name="Chapter2HeaderOdd" style="display:none">
        <div style="text-align: right;">Chapter 2</div>
    </htmlpageheader>

    <htmlpageheader name="Chapter2HeaderEven" style="display:none">
        <div>Chapter 2</div>
    </htmlpageheader>

    <htmlpagefooter name="Chapter2FooterOdd" style="display:none">
        <div style="text-align: right;">Chapter 2 Footer</div>
    </htmlpagefooter>

    <htmlpagefooter name="Chapter2FooterEven" style="display:none">
        <div>Chapter 2 Footer</div>
    </htmlpagefooter>

    Hello World

    <div class="chapter2">Text of Chapter 2</div>

    <div class="noheader">No-Header page</div>

</body>
</html>';

$mpdf->WriteHTML($html);

$mpdf->Output();

```
