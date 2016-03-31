---
layout: page
title: allowCJKorphans
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/allowcjkorphans.html
modification_time: 2015-08-05T12:01:36+00:00
---

<p>(mPDF &gt;= 5.7)</p>
<p>CJK line-breaking is implemented in mPDF roughly according to accepted rules.</p>
<p>Configurable variables allow fine control of behaviour (except in tables):</p>
<p>&nbsp;&nbsp;&nbsp; $this-&gt;allowCJKorphans = true;&nbsp;&nbsp;&nbsp; // FALSE=always wrap to next line; TRUE=squeeze or overflow

&nbsp;&nbsp;&nbsp; $this-&gt;allowCJKoverflow = false; // FALSE=squeeze; TRUE=overflow (only selected)</p>
<p>See also <a href="{{ "/reference/mpdf-variables/allowcjkoverflow.html" | prepend: site.baseurl }}">allowCJKoverflow</a> and <a href="{{ "/reference/mpdf-variables/cjkforceend.html" | prepend: site.baseurl }}">CJKforceend </a></p>
