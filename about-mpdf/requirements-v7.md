---
layout: page
title: Requirements v7+
parent_title: About mPDF
permalink: /about-mpdf/requirements-v7.html
modification_time: 2023-03-02T14:03:20+01:00
---

Since mPDF 7.0 is compatible with these PHP versions:

  * `PHP >=5.6 <7.3.0` is supported for `mPDF >= 7.0`
  * `PHP 7.3` is supported since `mPDF v7.1.7`
  * `PHP 7.4` is supported since `mPDF v8.0.4`
  * `PHP 8.0` is supported since `mPDF v8.0.10`
  * `PHP 8.1` is supported as of `mPDF v8.0.13`
  * `PHP 8.2` is supported as of `mPDF v8.1.3`
  * `PHP 8.3` is supported as of `mPDF v8.2.1`

PHP extensions required, partially required or recommended:

  * PHP `mbstring` (including `mbregex`, which needs to be explicitly enabled in some environments) and `gd` extensions have to be loaded.
  * Additional extensions may be required for some advanced features such as 
    * `zlib` for compression of embedded resources such as fonts or for importing existing PDF files with FPDI
    * `bcmath` for generating barcodes
    * `xml` for character set conversion and SVG handling.
    * `curl` extension is used for remote HTTP calls if available.

mPDF is **not** compatible with PHP function overloading (`mbstring.func_overload`)

mPDF has issues fetching external HTTP resources with single threaded servers such as `php -S`. A proper server such as nginx (php-fpm) or Apache is recommended.

For requirements of versions <7.x see the [dedicated page](https://mpdf.github.io/about-mpdf/requirements-v5.html)
