---
layout: page
title: Letterhead letters
parent_title: Real life examples
permalink: /real-life-examples/letterhead-letters.html
modification_time: 2015-08-05T12:00:28+00:00
---

Using the CSS `@page` selector, these are a couple of similar methods for producing multiple letters into 1 PDF file, where
each letter uses a letterhead for page one then plain paper for the remaining pages.

## Method 1

```php
<?php
$header = '<!--mpdf
    <htmlpageheader name="letterheader">
        <table width="100%" style=" font-family: sans-serif;">
            <tr>
                <td width="50%" style="color:#0000BB; ">
                    <span style="font-weight: bold; font-size: 14pt;">Acme Trading Co.</span><br />
                    123 Anystreet<br />Your City<br />GD12 4LP<br />
                    <span style="font-size: 15pt;">☎</span> 01777 123 567
                 </td>
                <td width="50%" style="text-align: right; vertical-align: top;">
                    Invoice No.<br />
                    <span style="font-weight: bold; font-size: 12pt;">0012345</span>
                </td>
            </tr>
        </table>
        
        <div style="margin-top: 1cm; text-align: right; font-family: sans-serif;">
            {DATE jS F Y}
        </div>
    </htmlpageheader>
    
    <htmlpagefooter name="letterfooter2">
        <div style="border-top: 1px solid #000000; font-size: 9pt; text-align: center; padding-top: 3mm; font-family: sans-serif; ">
            Page {PAGENO} of {nbpg}
        </div>
    </htmlpagefooter>
mpdf-->

<style>
    @page {
        margin-top: 2.5cm;
        margin-bottom: 2.5cm;
        margin-left: 2cm;
        margin-right: 2cm;
        footer: html_letterfooter2;
        background-color: pink;
    }
  
    @page :first {
        margin-top: 8cm;
        margin-bottom: 4cm;
        header: html_letterheader;
        footer: _blank;
        resetpagenum: 1;
        background-color: lightblue;
    }
  
    @page letterhead {
        margin-top: 2.5cm;
        margin-bottom: 2.5cm;
        margin-left: 2cm;
        margin-right: 2cm;
        footer: html_letterfooter2;
        background-color: pink;
    }
  
    @page letterhead :first {
        margin-top: 8cm;
        margin-bottom: 4cm;
        header: html_letterheader;
        footer: _blank;
        resetpagenum: 1;
        background-color: lightblue;
    }
</style>';

$letter = 'Dear Sir or Madam,<br />
Contents of your letter...
... more letter on page 2 ...
<pagebreak />
... more letter on page 3 ...';

require __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();

$mpdf->WriteHTML($header);
$mpdf->WriteHTML($letter);
$mpdf->WriteHTML('<pagebreak page-selector="letterhead" />');
$mpdf->WriteHTML($letter);
$mpdf->WriteHTML('<pagebreak page-selector="letterhead" />');
$mpdf->WriteHTML($letter);

$mpdf->Output();

```

## Method 2

```php
<?php
$header = '<!--mpdf

<htmlpageheader name="letterheader">
    <table width="100%" style=" font-family: sans-serif;">
        <tr>
          <td width="50%" style="color:#0000BB; "><span style="font-weight: bold; font-size: 14pt;">Acme Trading Co.</span><br />123 Anystreet<br />Your City<br />GD12 4LP<br /><span style="font-size: 15pt;">☎</span> 01777 123 567</td>
          <td width="50%" style="text-align: right; vertical-align: top;">Invoice No.<br /><span style="font-weight: bold; font-size: 12pt;">0012345</span></td>
        </tr>
    </table>
    <div style="margin-top: 1cm; text-align: right; font-family: sans-serif;">
        {DATE jS F Y}
    </div>
</htmlpageheader>

<htmlpagefooter name="letterfooter2">
    <div style="border-top: 1px solid #000000; font-size: 9pt; text-align: center; padding-top: 3mm; font-family: sans-serif; ">
        Page {PAGENO} of {nbpg}
    </div>
</htmlpagefooter>
mpdf-->

<style>
    @page {
        margin-top: 2.5cm;
        margin-bottom: 2.5cm;
        margin-left: 2cm;
        margin-right: 2cm;
        footer: html_letterfooter2;
        background-color: pink;
    }
  
    @page :first {
        margin-top: 8cm;
        margin-bottom: 4cm;
        header: html_letterheader;
        footer: _blank;
        resetpagenum: 1;
        background-color: yellow;
    }
  
    @page letterhead :first {
        margin-top: 8cm;
        margin-bottom: 4cm;
        header: html_letterheader;
        footer: _blank;
        resetpagenum: 1;
        background-color: lightblue;
    }
    .letter {
        page-break-before: always;
        page: letterhead;
    }
</style>';

$firstletter = '<div>Dear Sir or Madam,<br />
Contents of your letter...
<pagebreak />
... more letter on page 2 ...
<pagebreak />
... more letter on page 3 ...
</div>';

$letter = '<div class="letter">Dear Sir or Madam,<br />
Contents of your letter...
<pagebreak />
... more letter on page 2 ...
<pagebreak />
... more letter on page 3 ...
</div>';

require __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();

$mpdf->WriteHTML($header);
$mpdf->WriteHTML($firstletter);
$mpdf->WriteHTML($letter);
$mpdf->WriteHTML($letter);

$mpdf->Output();

```
