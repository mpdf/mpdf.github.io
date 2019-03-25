---
layout: page
title: percentSubset
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/percentsubset.html
modification_time: 2015-08-05T12:02:20+00:00
---

mPDF &ge; 5.0

Control fonts/subsetting

If not `-s` (i.e. forced subset) this value determines whether to subset or not

`0` - `100` = percent characters

i.e. if `40`, mPDF will embed whole font if > 40% characters in that font or embed subset if > 40% characters.

* `0` will force whole file to be embedded
* `100` will force always to subset

Default set as a <a href="{{ "/configuration/configuration-v7-x.html" | prepend: site.baseurl }}">configuration variable</a>

Default value: `30`

