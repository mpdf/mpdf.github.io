---
layout: page
title: Colour Charts CMYK
parent_title: Real life examples
permalink: /real-life-examples/colour-charts-cmyk.html
modification_time: 2015-08-05T12:00:25+00:00
---

This example produces colour charts for all the CMYK colours (incrementing each value by 10).

The example from the result:
<a href="{{ "/images/cmyk-colour-charts.png" | prepend: site.baseurl }}">
    <img src="{{ "/images/cmyk-colour-charts.png" | prepend: site.baseurl }}" alt="Colour Charts CMYK" style="max-width: 80%; margin: 0 auto;">
</a>

```php
<?php
// require composer autoload
require __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([
	'mode' => 'win-1252',
	'format' => 'A4-L',
]);

$mpdf->useOnlyCoreFonts = true;
$mpdf->SetDisplayMode('fullpage');
$mpdf->SetFontSize(6);

$pm = 8;   // page margin
$w = 20;
$h = 10;
$m = 5;

for ($k = 0; $k &le; 8; $k++) {    // Black - page group
    for ($y = 0; $y &le; 10; $y++) {    // Yellow - page group
        $mpdf->AddPage();
        for ($i = 0; $i &le; 10; $i++) {    // Rows (Magenta)
            for ($j = 0; $j &le; 10; $j++) {    // Cols (Cyan)
                $mpdf->SetXY($pm + ($j * ($w + $m)), $pm + ($i * ($h + $m)));
                $mpdf->SetFillColor($j * 10, $i * 10, $y * 10, $k * 10);
                $mpdf->Cell($w, $h, '', 0, 0, 'L', 1);

                $mpdf->SetXY($pm + ($j * ($w + $m)), $h + $pm + ($i * ($h + $m)));
                $txt = 'C:' . ($j * 10) . ' M:' . ($i * 10)
                    . ' Y:' . ($y * 10) . ' K:' . ($k * 10);
                $mpdf->Cell($w, 4, $txt, 0, 0, 'L');
            }
        }
    }
}

$mpdf->Output('mpdf.pdf', 'I');

```

