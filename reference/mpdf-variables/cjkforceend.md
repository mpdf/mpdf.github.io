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

&nbsp;&nbsp;&nbsp; $this-&gt;CJKforceend = false; // Forces overflowng punctuation to hang outside right margin (used with CJK script)

&nbsp;&nbsp;&nbsp; $this-&gt;allowCJKorphans = true;&nbsp;&nbsp;&nbsp; // FALSE=always wrap to next line; TRUE=squeeze or overflow

&nbsp;&nbsp;&nbsp; $this-&gt;allowCJKoverflow = false; // FALSE=squeeze; TRUE=overflow (only selected)

IF $this-&gt;allowCJKorphans == true AND $this-&gt;allowCJKoverflow == true AND $this-&gt;CJKforceend == true AND text-align:justify

will force hanging punctuation to hang outside right margin.

See also <a href="{{ "/reference/mpdf-variables/allowcjkoverflow.html" | prepend: site.baseurl }}">allowCJKoverflow</a> and <a href="{{ "/reference/mpdf-variables/allowcjkorphans.html" | prepend: site.baseurl }}">allowCJKorphans</a>

