---
layout: page
title: Requirements v7
parent_title: About mPDF
permalink: /about-mpdf/requirements-v5.html
modification_time: 2015-08-05T11:59:20+00:00
---

mPDF requires a minimum of PHP 5.6 or PHP 7.0

PHP requires the mbstring extension to be enabled (including mbregex, which needs to be explicitly enabled in some environments)

mPDF is **not** compatible with PHP function overloading (mbstring.func_overload)

As for importing existing PDF files with FPDI, PHP requires zlib for compression.

