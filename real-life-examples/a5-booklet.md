---
layout: page
title: A5 Booklet
parent_title: Real life examples
permalink: /real-life-examples/a5-booklet.html
modification_time: 2016-05-24T09:53:00+02:00
---

This script was written to create a new PDF file based on a pre-existing PDF document, converting an A4 document
into an A5 booklet ready for duplex printing. Page order is adjusted, and page orientation is rotated so that
it prints a landscape booklet.

```php
<?php
// require composer autoload
require __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([
    'format' => 'A4-L',
    'margin_left' => 0,
    'margin_right' => 0,
    'margin_top' => 0,
    'margin_bottom' => 0,
    'margin_header' => 0,
    'margin_footer' => 0,
]);

$mpdf->SetImportUse(); // only with mPDF <8.0

$ow = $mpdf->h;
$oh = $mpdf->w;
$pw = $mpdf->w / 2;
$ph = $mpdf->h;

$mpdf->SetDisplayMode('fullpage');

$pagecount = $mpdf->SetSourceFile('A4sourcefile.pdf');
$pp = GetBookletPages($pagecount);

foreach ($pp as $v) {

    $mpdf->AddPage();

    if ($v[0] > 0 && $v[0] <= $pagecount) {
        $tplIdx = $mpdf->ImportPage($v[0], 0, 0, $ow, $oh);
        $mpdf->UseTemplate($tplIdx, 0, 0, $pw, $ph);
    }

    if ($v[1] > 0 && $v[1] <= $pagecount) {
        $tplIdx = $mpdf->ImportPage($v[1], 0, 0, $ow, $oh);
        $mpdf->UseTemplate($tplIdx, $pw, 0, $pw, $ph);
    }
}

$mpdf->Output();
exit;

function GetBookletPages($np, $backcover = true) {
    $lastpage = $np;
    $np = 4 * ceil($np / 4);
    $pp = [];

    for ($i = 1; $i <= $np / 2; $i++) {

        $p1 = $np - $i + 1;

        if ($backcover) {
            if ($i == 1) {
                $p1 = $lastpage;
            } elseif ($p1 >= $lastpage) {
                $p1 = 0;
            }
        }

        $pp[] = ($i % 2 == 1)
            ? [ $p1,  $i ]
            : [ $i, $p1 ];
    }

    return $pp;
}

```

