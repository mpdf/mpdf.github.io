---
layout: page
title: Requirements v7
parent_title: About mPDF
permalink: /about-mpdf/requirements-v7.html
modification_time: 2017-03-09T10:03:20+02:00
---

mPDF 7.0 requires PHP `^5.6 || ~7.0.0 || ~7.1.0`. PHP `mbstring` (including `mbregex`, which needs to
be explicitly enabled in some environments) and `gd` extensions have to be loaded.

Additional extensions may be required for some advanced features such as `zlib` for compression of embedded
resources such as fonts or `bcmath` for generating barcodes.

mPDF is **not** compatible with PHP function overloading (`mbstring.func_overload`)

As for importing existing PDF files with FPDI, PHP requires `zlib` for compression.

For requirements of versions < 7.x see [dedicated page](https://mpdf.github.io/about-mpdf/requirements-v5.html)
