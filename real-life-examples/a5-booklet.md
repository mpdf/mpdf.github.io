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

## For mpdf 8.0

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

$pw = $mpdf->w / 2;
$ph = $mpdf->h;

$mpdf->SetDisplayMode('fullpage');

$pagecount = $mpdf->SetSourceFile('A4sourcefile.pdf');

for ($i = 1; $i <= $pagecount; $i++) {
    $mpdf->AddPage();

    // add odd pages on the left side
    $tplId = $mpdf->importPage($i);
    $mpdf->useTemplate($tplId, 0, 0, $pw, $ph);

    // add even pages on the right side
    ++$i;
    if ($i <= $pagecount) {
        $tplId = $mpdf2->importPage($i);
        $mpdf2->useTemplate($tplId, $pw, 0, $pw, $ph);
     }
}

$mpdf->Output();
exit;
```


## For mpdf <8.0

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

$mpdf->SetImportUse(); 

$ow = $mpdf->h;
$oh = $mpdf->w;
$pw = $mpdf->w / 2;
$ph = $mpdf->h;

$mpdf->SetDisplayMode('fullpage');

$pagecount = $mpdf->SetSourceFile('A4sourcefile.pdf');

for ($i = 1; $i <= $pagecount; $i++) {
    $mpdf->AddPage();

    // add odd pages on the left side
    $tplIdx = $mpdf->ImportPage($i, 0, 0, $ow, $oh);
    $mpdf->UseTemplate($tplIdx, 0, 0, $pw, $ph);

    // add even pages on the right side
    ++$i;
    if ($i <= $pagecount) {
        $tplIdx = $mpdf->ImportPage($i, 0, 0, $ow, $oh);
        $mpdf->UseTemplate($tplIdx, $pw, 0, $pw, $ph);
     }
}
```
