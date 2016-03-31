---
layout: page
title: A5 Booklet
parent_title: Real life examples
permalink: /real-life-examples/a5-booklet.html
modification_time: 2015-08-05T12:00:26+00:00
---

This script was written to create a new PDF file based on a pre-existing PDF document, converting an A4 document into an A5 booklet ready for duplex printing. Page order is adjusted, and page orientation is rotated so that it prints a landscape booklet.

{% highlight php %}
<?php

include("../mpdf.php");

$mpdf=new mPDF('','A4-L','','',0,0,0,0,0,0); 

$mpdf->SetImportUse();    

$ow = $mpdf->h;

$oh = $mpdf->w;

$pw = $mpdf->w / 2;

$ph = $mpdf->h;

$mpdf->SetDisplayMode('fullpage');

$pagecount = $mpdf->SetSourceFile('A4sourcefile.pdf');

$pp = GetBookletPages($pagecount);

foreach($pp AS $v) {

    $mpdf->AddPage(); 

    if ($v[0]>0 &amp; $v[0]<=$pagecount) {

        $tplIdx = $mpdf->ImportPage($v[0], 0,0,$ow,$oh);

        $mpdf->UseTemplate($tplIdx, 0, 0, $pw, $ph);

    }

    if ($v[1]>0 &amp; $v[1]<=$pagecount) {

        $tplIdx = $mpdf->ImportPage($v[1], 0,0,$ow,$oh);

        $mpdf->UseTemplate($tplIdx, $pw, 0, $pw, $ph);

    }

}

$mpdf->Output();

exit;

function GetBookletPages($np, $backcover=true) {

    $lastpage = $np;

    $np = 4*ceil($np/4);

    $pp = array();

    for ($i=1; $i<=$np/2; $i++) {

        $p1 = $np - $i + 1;

        if ($backcover) {    

            if ($i == 1) { $p1 = $lastpage; }

            else if ($p1 >= $lastpage) { $p1 = 0; }

        }

        if ($i % 2 == 1) { 

            $pp[] = array( $p1,  $i ); 

        }

        else { 

            $pp[] = array( $i, $p1 ); 

        }

    }

    return $pp;

}

?>
{% endhighlight %}

