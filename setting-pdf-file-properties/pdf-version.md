---
layout: page
title: PDF Version
parent_title: Setting PDF file properties
permalink: /setting-pdf-file-properties/pdf-version.html
modification_time: 2015-08-05T11:59:59+00:00
---

mPDF &ge; 4.3 produces PDF files which are specified as version `%PDF-1.4`.

1.4 is the lowest specification which contains all the features used in mPDF - with a few minor exceptions:

- <a href="{{ "/reference/mpdf-functions/setdisplaypreferences.html" | prepend: site.baseurl }}">SetDisplayPreferences($preferences)</a> allows the option to include `"NoPrintScaling"` (PDF-1.6)
- Using <a href="{{ "/reference/mpdf-variables/mirrormargins.html" | prepend: site.baseurl }}">$mirrorMargins</a>, mPDF will set by default `/Duplex /DuplexFlipLongEdge` (PDF-1.7)
- The `Subject` field of Annotations (PDF-1.5)

## Previous versions

mPDF < 2.0 produced PDF files which were specified as version 1.3 (the file starts with `%PDF-1.3`).

mPDF &ge; 2.0 was changed to specify `%PDF-1.5`, to allow for changes needed using Annotations.

