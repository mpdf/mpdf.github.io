---
layout: page
title: maxTTFFilesize
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/maxttffilesize.html
modification_time: 2015-08-05T12:02:13+00:00
---

mPDF >= 5.0

Control fonts/subsetting

// Set maximum size of TTF font file to allow non-subsets - in kB

// Used to avoid e.g. Arial Unicode MS (perhaps used for substituteCharsMB) to ever be fully embedded

// NB Free serif is 1.5MB, most files are <= 600kB (most 200-400KB)

Default set in config.php

Default value: 2000

