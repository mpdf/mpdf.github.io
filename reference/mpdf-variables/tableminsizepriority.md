---
layout: page
title: tableMinSizePriority
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/tableminsizepriority.html
modification_time: 2015-08-05T12:02:31+00:00
---

(mPDF &gt;= 4.6)

# Description

mixed <b>tableMinSizePriority</b>

Forces mPDF to respect the value set as autosize when displaying a table. If a table has <code>page-break-inside:avoid</code> set but cannot be made to fit onto a page without exceeding the resizing factor set by <code>autosize</code>: the value of <span class="parameter">tableMinSizePriority</span> will determins which factor wins out .

# Values

<span class="parameter">tableMinSizePriority</span>

<b>Values</b>

<span class="smallblock">TRUE | FALSE</span>

<span class="smallblock">DEFAULT = FALSE</span>

