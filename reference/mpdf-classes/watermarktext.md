---
layout: page
title: \Mpdf\WatermarkText
parent_title: mPDF classes
permalink: /reference/mpdf-classes/watermarktext.html
modification_time: 2023-05-29T22:35:00+00:00
---

(mPDF &ge; 8.2.0)

\Mpdf\WatermarkText()

# Description

**\Mpdf\WatermarkText** (
string <span class="parameter">$text</span> [,
int <span class="parameter">$size</span> [,
int <span class="parameter">$angle</span> [,
mixed <span class="parameter">$color</span> [,
float <span class="parameter">$alpha</span> [,
string <span class="parameter">$font</span> ]]]]])

# Parameters

<span class="parameter">$text</span>

: Text of the watermark.

<span class="parameter">$size</span>

: Size of text.

<span class="parameter">$angle</span>

: Angle of the watermark.

<span class="parameter">$color</span>

: Color definition of the watermark. Can be any color definition mPDF recognizes.

<span class="parameter">$alpha</span>

: Alpha of the watermark, values 0-1. 0 = fully visible, 1 = transparent.

<span class="parameter">$font</span>

: Font name.

# Examples

Example #1

```php
<?php
$mpdf->SetWatermarkText(new \Mpdf\WatermarkText('Watermark text', 100, 90, '#996633', 0.4));

```