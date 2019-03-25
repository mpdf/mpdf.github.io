---
layout: page
title: h2bookmarks
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/h2bookmarks.html
modification_time: 2015-08-05T12:01:58+00:00
---

(mPDF &ge; 5.7)

# Description

boolean **h2bookmarks**

When a valid array is set, mPDF will automatically generate PDF Bookmarks from all heading elements (H1 - H6) written to
the document using `WriteHTML()`.

Any number of levels may be specified, but the first level should be `0` and other levels should be consecutive.

# Values

<span class="parameter">$h2bookmarks</span>

**Values**

* An array should be specified mapping the headings to the required level of Bookmarks

  e.g. `array('H1' => 0, 'H2' => 1, 'H3' => 2)`

Default: `array()`

