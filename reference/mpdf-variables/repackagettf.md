---
layout: page
title: repackageTTF
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/repackagettf.html
modification_time: 2015-08-05T12:02:23+00:00
---

When Embedding full TTF font files, setting this variable to TRUE forces mPDF to remake the font file using only core tables.

This may improve function with some PostScript printers (GhostScript/GSView)

$this-&gt;repackageTTF = false;(default)

Does not work with TTC font collections

Produces a slightly smaller PDF file; increased processing time.

