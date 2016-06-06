---
layout: page
title: incrementFPR1 [1-4]
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/incrementfpr1-1-4.html
modification_time: 2015-08-05T12:02:02+00:00
---

(mPDF >= 4.2)

incrementFPR1 – Adjust auto-fit for fixed position block elements

incrementFPR2

incrementFPR3

incrementFPR4

# Description

void **incrementFPR1**

When writing a block element with `position:fixed` and `overflow:auto`, mPDF scales it down to fit in the space by repeatedly rewriting it and making adjustments. These values give the adjustments used, depending how far out the previous guess was. The lower the number, the quicker it will finish, but the less accurate the fit may be.

FPR1 is for coarse adjustments, and FPR4 for fine adjustments when it is getting closer.

# Values

<span class="parameter">$incrementFPR1 [1-4]</span> <span class="smallblock"></span>

**Values**

<span class="smallblock">INTEGER </span>: recommended between 10-100

<span class="smallblock"></span><span class="smallblock">DEFAULT</span>: 10, 20, 30, 50

# Changelog

<table class="table"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>4.2</td>
<td>Variables were added.</td>
</tr>
</tbody> </table>

