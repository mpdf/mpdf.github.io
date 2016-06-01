---
layout: page
title: use_kwt
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/use-kwt.html
modification_time: 2015-08-05T12:02:34+00:00
---

mPDF >= 2.0

Keep with table

Default false

If true: function AdjustHTML() adds an attribute KEEP-WITH-TABLE to any &lt;table&gt; which is immediately preceded by a &lt;h1-6&gt; element.

This attempts to keep the heading and table together on one page.

Can be used together with &lt;table style="page-break-inside: avoid;"&gt;

Automatically sets the table to fit on one page (i.e. page-break-inside=avoid) if it is a rotated table.

Ignored if: Heading is longer than one line of text on the page, Columns are on, Keep-block-together active (i.e. page-break-inside=avoid for surrounding BLOCK).

