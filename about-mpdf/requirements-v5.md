---
layout: page
title: Requirements < v7.0
parent_title: About mPDF
permalink: /about-mpdf/requirements-v5.html
modification_time: 2015-08-05T11:59:20+00:00
---

mPDF requires a minimum of PHP 4.3.10 or PHP 5.0.3

mPDF v5.7.1 minimum is required for PHP &ge; 5.5

(Since version 1, mPDF has been developed on PHP5 only, but should still be compatible with PHP &ge; 4.3.10)

PHP requires the `mb_string` module to be enabled (including `mbregex`, which needs to be explicitly enabled in some environments)

mPDF is **not** compatible with PHP function overloading (`mbstring.func_overload`)

As for FPDF, PHP requires `zlib` for compression.

Improved performance requires write permissions to the temporary cache folders.

