---
layout: page
title: h2toc
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/h2toc.html
modification_time: 2015-08-05T12:01:59+00:00
---

(mPDF &ge; 5.7)

# Description

boolean **h2toc**

When a valid array is set, mPDF will automatically generate entries for a Table of Contents using all heading
elements (H1 - H6) written to the document using `WriteHTML()`.

Any number of levels may be specified, but the first level should be `0` and other levels should be consecutive.

# Values

<span class="parameter">$h2toc</span>

**Values**

* An array should be specified mapping the headings to the required level of Table of Contents

  e.g. `array('H1' => 0, 'H2' => 1, 'H3' => 2)`

Default: `array()`

