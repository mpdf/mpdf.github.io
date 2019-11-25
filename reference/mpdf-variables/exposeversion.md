---
layout: page
title: exposeVersion
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/exposeversion.html
modification_time: 2019-11-25T12:30:00+00:00
---

mPDF &ge; 8.0.4

By default, mPDF saves its version (version tag and short commit number when available) in `/Producer` tag in generated
PDF file and returns it in `X-Generator` HTTP header when returning PDF via HTTP.

Default set as a <a href="{{ "/configuration/configuration-v7-x.html" | prepend: site.baseurl }}">configuration variable</a>

Default value: `true` 

Set to `false` to return only mPDF in places mentioned above.

