---
layout: page
title: CJKforceend
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/cjkforceend.html
modification_time: 2015-08-05T12:01:46+00:00
---

(mPDF &gt;= 5.7)

CJK line-breaking is implemented in mPDF roughly according to accepted rules.

Configurable variables allow fine control of behaviour:

    $this->CJKforceend = false; // Forces overflowng punctuation to hang outside right margin (used with CJK script)

    $this->allowCJKorphans = true;    // FALSE=always wrap to next line; TRUE=squeeze or overflow

    $this->allowCJKoverflow = false; // FALSE=squeeze; TRUE=overflow (only selected)

IF $this->allowCJKorphans == true AND $this->allowCJKoverflow == true AND $this->CJKforceend == true AND text-align:justify

will force hanging punctuation to hang outside right margin.

See also <a href="{{ "/reference/mpdf-variables/allowcjkoverflow.html" | prepend: site.baseurl }}">allowCJKoverflow</a> and <a href="{{ "/reference/mpdf-variables/allowcjkorphans.html" | prepend: site.baseurl }}">allowCJKorphans</a>

