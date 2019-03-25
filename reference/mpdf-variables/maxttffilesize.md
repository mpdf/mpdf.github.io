---
layout: page
title: maxTTFFilesize
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/maxttffilesize.html
modification_time: 2015-08-05T12:02:13+00:00
---

mPDF &ge; 5.0

Control fonts/subsetting

Set maximum size of TTF font file to allow non-subsets - in kB

Used to avoid e.g. Arial Unicode MS (perhaps used for `$mpdf->substituteCharsMB()`) to ever be fully embedded

NB: Free serif is 1.5 MB, most files are &le; 600 kB (most 200-400 KB)

Default set as a <a href="{{ "/configuration/configuration-v7-x.html" | prepend: site.baseurl }}">configuration variable</a>

Default value: `2000`

