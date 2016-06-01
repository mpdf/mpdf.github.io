---
layout: page
title: allowCJKorphans
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/allowcjkorphans.html
modification_time: 2015-08-05T12:01:36+00:00
---

(mPDF >= 5.7)

CJK line-breaking is implemented in mPDF roughly according to accepted rules.

Configurable variables allow fine control of behaviour (except in tables):

    $this->allowCJKorphans = true;    // FALSE=always wrap to next line; TRUE=squeeze or overflow

    $this->allowCJKoverflow = false; // FALSE=squeeze; TRUE=overflow (only selected)

See also <a href="{{ "/reference/mpdf-variables/allowcjkoverflow.html" | prepend: site.baseurl }}">allowCJKoverflow</a> and <a href="{{ "/reference/mpdf-variables/cjkforceend.html" | prepend: site.baseurl }}">CJKforceend </a>

