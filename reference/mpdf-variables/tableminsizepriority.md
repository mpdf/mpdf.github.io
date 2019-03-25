---
layout: page
title: tableMinSizePriority
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/tableminsizepriority.html
modification_time: 2015-08-05T12:02:31+00:00
---

(mPDF &ge; 4.6)

# Description

mixed **tableMinSizePriority**

Forces mPDF to respect the value set as autosize when displaying a table. If a table has `page-break-inside:avoid` set
but cannot be made to fit onto a page without exceeding the resizing factor set by `autosize`: the value
of <span class="parameter">$tableMinSizePriority</span> will determines which factor wins out .

# Values

<span class="parameter">$tableMinSizePriority</span>

**Values**

* `true`
* `false`

Default: `false`

