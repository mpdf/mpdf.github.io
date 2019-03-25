---
layout: page
title: biDirectional
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/bidirectional.html
modification_time: 2015-08-05T12:01:44+00:00
---

This variable is set by mPDF when it detects characters from a script written in a right-to-left direction to allow
processing of bidirectional text. It does not normally need to be defined by the user, but can be, in order to force
the bidirectional algorithm to be applied.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** This variable originally started with an uppercase
  letter (&le; mPDF 2.2). Support for the uppercase version was removed in mPDF &ge; 6.0
</div>

bool **$biDirectional**

Default: `false`

# See Also

- <a href="{{ "/fonts-languages/arabic-rtl-text-v5-x.html" | prepend: site.baseurl }}">RTL & Bidirectional text</a>
