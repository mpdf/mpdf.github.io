---
layout: page
title: Different page sizes
parent_title: Paging
permalink: /paging/different-page-sizes.html
modification_time: 2015-08-05T11:59:48+00:00
---

(mPDF >= 4.3)

The page (sheet) size can be reset within the document.

<div class="alert alert-info" role="alert" markdown="1">
    **Note:** The @page model used by CSS and supported by mPDF 
    allows the size of a "page-box" to be set, assuming a constant size of the "sheet" on which it is being printed. 
    To avoid confusion, the term "sheet size" is preferred for the physical dimensions of the page of the document.
</div>

There are different ways to change sheet size:

## 1) Using CSS @page

```css
<style>

@page { sheet-size: A3-L; }

@page bigger { sheet-size: 420mm 370mm; }

@page toc { sheet-size: A4; }

h1.bigsection {
        page-break-before: always;
        page: bigger;
}

</style>

```

You can reference the @page selectors using other CSS as above (and see 
<a href="{{ "/paging/using-page.html" | prepend: site.baseurl }}">Using @page</a>) or setting attributes in:

- &lt;<a href="{{ "/reference/html-control-tags/tocpagebreak.html" | prepend: site.baseurl }}">tocpagebreak</a>&gt; 
  e.g. &lt;tocpagebreak ... page-selector="bigger" toc-page-selector="toc" ... /&gt;
- &lt;<a href="{{ "/reference/html-control-tags/pagebreak.html" | prepend: site.baseurl }}">pagebreak</a>&gt;  e.g. 
  &lt;pagebreak ... page-selector="bigger" ... /&gt;

The functions <a href="{{ "/reference/mpdf-functions/addpage.html" | prepend: site.baseurl }}">AddPage()</a> and 
<a href="{{ "/reference/mpdf-functions/tocpagebreak.html" | prepend: site.baseurl }}">TOCpagebreak()</a> both have 
parameters which allow you to select a @page

## 2) Specify the sheet size when forcing a new page (HTML tags)

- &lt;<a href="{{ "/reference/html-control-tags/pagebreak.html" | prepend: site.baseurl }}">pagebreak</a>&gt; e.g.
  &lt;pagebreak ... sheet-size="A3-L" ... /&gt;
- &lt;<a href="{{ "/reference/html-control-tags/tocpagebreak.html" | prepend: site.baseurl }}">tocpagebreak</a>&gt;
  e.g. &lt;tocpagebreak ... sheet-size="420mm 370mm" toc-sheet-size="A4" ... /&gt;

Accepted values are:

- "A4", "A3", "Letter" etc
- "A4-L", "A3-L", "Letter-L" etc. for landscape
- a string of 2 dimensions e.g. "21cm 29.7cm" Can be px, pt, in, mm, cm: but not em, ex, or %

## 3) Specify the sheet size when forcing a new page (functions)

The functions <a href="{{ "/reference/mpdf-functions/addpage.html" | prepend: site.baseurl }}">AddPage()</a> and 
<a href="{{ "/reference/mpdf-functions/tocpagebreak.html" | prepend: site.baseurl }}">TOCpagebreak()</a> both have 
parameters to select sheet size.

Accepted values - same options as the original 
<a href="{{ "/reference/mpdf-functions/construct.html" | prepend: site.baseurl }}">\Mpdf\Mpdf::__construct()</a> - are:

- "A4", "A3", "Letter" etc
- "A4-L", "A3-L", "Letter-L" etc. for landscape
- an array of 2 numbers which are the width then height in mm e.g. array(210,297)

## Limitations

- mPDF will not carry block-style elements across page-breaks.
- Does not work with &lt;<a href="{{ "/reference/html-control-tags/formfeed.html" | prepend: site.baseurl }}">
  formfeed</a>&gt;, and disabled if using $this->restoreBlockPageBreaks
- Cannot use `@page { size: portrait|landscape; }` at the same time as defining the sheet-size

