---
layout: page
title: Headers & Top margins
parent_title: Headers & Footers
permalink: /headers-footers/headers-top-margins.html
modification_time: 2015-08-05T11:59:53+00:00
---

(mPDF &ge; 4.0)

In standard usage, mPDF sets the following:

- `margin-top` = distance in mm from top of page to start of text (ignoring any headers)
- `margin-header` = distance in mm from top of page to start of header
- `margin-bottom` = distance in mm from bottom of page to bottom of text (ignoring any footers)
- `margin-footer` = distance in mm from bottom of page to bottom of footer

If you specify a header that extends further down the page than the margin-top, then the header and main text will overlap.

# Alternative margin usage

The configuration variables <a href="{{ "/reference/mpdf-variables/setautotopmargin.html" | prepend: site.baseurl }}">`$setAutoTopMargin`</a>
and <a href="{{ "/reference/mpdf-variables/setautotopmargin.html" | prepend: site.baseurl }}">`$setAutoBottomMargin`</a>
can be set. Both default to `false`.

## pad

If `$setAutoTopMargin` is set to **`'pad'`** then the value for margin-top is used to set a fixed distance in mm
(padding) between the bottom of the header and top of the main text. The converse is true with `$setAutoBottomMargin`.

## stretch

If `$setAutoTopMargin` is set to **`'stretch'`** then the margin-top sets a **minimum**
distance in mm between the top of the page and the top of the main text, which expands if header is too large to fit.

The configuration variable <a href="{{ "/reference/mpdf-variables/automarginpadding.html" | prepend: site.baseurl }}">`$autoMarginPadding`</a>
(default: `2`, configurable) defines an additional distance in mm used as padding between the header and main text. This is the behaviour seen
in Microsoft Word.

The converse is true with `$setAutoBottomMargin`.

# Experimental!

Use of this function is probably best considered experimental. It is incompatible with some of the other
functionality in mPDF, and has some limitations:

- Using either pad or stretch, the values are set for the whole document - changes during the document will
  produce unpredictable results
- Incompatible with orientation changes,
  <a href="{{ "/reference/mpdf-variables/forceportraitheaders.html" | prepend: site.baseurl }}">`$forceportraitheaders`</a>
  or <a href="{{ "/reference/mpdf-variables/forceportraitmargins.html" | prepend: site.baseurl }}">`$forceportraitmargins`</a>
- Does not work with "write to current page" options for Headers
- Incompatible with CSS <a href="{{ "/paging/using-page.html" | prepend: site.baseurl }}">@page</a>d media
- Cannot set a new Footer when already further down the page than there is room needed for footer
- Potential error if using `{nbpg}` to define page total in an HTML header or footer. The top/bottom margin is
  calculated by writing the HTML header using the current page no. If when the header is finally written,
  a page number total of e.g. 500 causes an extra line in the header/footer, this will not be allowed for.

