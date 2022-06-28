---
layout: page
title: Method 2
parent_title: Headers & Footers
permalink: /headers-footers/method-2.html
modification_time: 2015-08-05T11:59:50+00:00
---

This uses <span class="smallblock">RUNTIME</span> <span class="smallblock">HTML</span> headers &amp; footers. This is 
the simplest &amp; quickest way to program a header/footer once for the whole document that includes images or uses 
more complex layout styles.

# Setting Headers/Footers for the whole document

Use <a href="{{ "/reference/mpdf-functions/sethtmlheader.html" | prepend: site.baseurl }}">SetHTMLHeader()</a> and/or 
<a href="{{ "/reference/mpdf-functions/sethtmlfooter.html" | prepend: site.baseurl }}">SetHTMLFooter()</a> to set HTML 
headers/footers before writing to the document.

## Example #1 - Single-sided document

```php
<?php
$mpdf = new \Mpdf\Mpdf();

// Define the Header/Footer before writing anything so they appear on the first page
$mpdf->SetHTMLHeader('
<div style="text-align: right; font-weight: bold;">
    My document
</div>');
$mpdf->SetHTMLFooter('
<table width="100%">
    <tr>
        <td width="33%">{DATE j-m-Y}</td>
        <td width="33%" align="center">{PAGENO}/{nbpg}</td>
        <td width="33%" style="text-align: right;">My document</td>
    </tr>
</table>');

$mpdf->WriteHTML('Hello World');

$mpdf->Output();

```

## Example #2 - Double-sided document

```php
<?php
$mpdf = new \Mpdf\Mpdf();

// Define the Headers before writing anything so they appear on the first page
$mpdf->SetHTMLHeader(
    '<div style="text-align: right; font-weight: bold;">My document</div>',
    'O'
);

$mpdf->SetHTMLHeader(
    '<div style="border-bottom: 1px solid #000000;">My document</div>',
    'E'
);

$mpdf->SetHTMLFooter('
<table width="100%" style="vertical-align: bottom; font-family: serif; 
    font-size: 8pt; color: #000000; font-weight: bold; font-style: italic;">
    <tr>
        <td width="33%">{DATE j-m-Y}</td>
        <td width="33%" align="center">{PAGENO}/{nbpg}</td>
        <td width="33%" style="text-align: right;">My document</td>
    </tr>
</table>');  // Note that the second parameter is optional : default = 'O' for ODD

$mpdf->SetHTMLFooter('
<table width="100%" style="vertical-align: bottom; font-family: serif; 
    font-size: 8pt; color: #000000; font-weight: bold; font-style: italic;">
    <tr>
        <td width="33%"><span style="font-weight: bold; font-style: italic;">My document</span></td>
        <td width="33%" align="center" style="font-weight: bold; font-style: italic;">{PAGENO}/{nbpg}</td>
        <td width="33%" style="text-align: right; ">{DATE j-m-Y}</td>
    </tr>
</table>', 'E');

$mpdf->WriteHTML('Hello World');

$mpdf->Output();

```

# Changing Header/Footer during the document

This is where <span class="smallblock">RUNTIME</span> headers/footers get much more clumsy to use. When a new page 
is added to the document (e.g. using 
<a href="{{ "/reference/mpdf-functions/addpage.html" | prepend: site.baseurl }}">AddPage()</a> 
or &lt;<a href="{{ "/reference/html-control-tags/pagebreak.html" | prepend: site.baseurl }}">pagebreak</a>&gt;) 
mPDF does the following:

- writes the footer for the current page
- starts the new page
- writes the header for the new page

Therefore to use any <span class="smallblock">RUNTIME</span> method you need to:

- change the header before the page-break
- change the footer after the page-break

## Example #1

```php
<?php
// First ensure that you are on an Even page
$mpdf->AddPage('','E');

// Then set the headers for the next page before you add the page
$mpdf->SetHTMLHeader('
<div style="text-align: right; border-bottom: 1px solid #000000; font-weight: bold; font-size: 10pt;">
    Chapter 2
</div>','O');
$mpdf->SetHTMLHeader('
<div style="border-bottom: 1px solid #000000; font-weight: bold; font-size: 10pt;">
    Chapter 2
</div>','E');

$mpdf->AddPage();

$mpdf->SetHTMLFooter('
<div style="text-align: right; font-weight: bold; font-size: 8pt; font-style: italic;">
    Chapter 2
</div>','O');
$mpdf->SetHTMLFooter('
<div style="font-weight: bold; font-size: 8pt; font-style: italic;">
    Chapter 2
</div>','E');

$mpdf->WriteHTML('Rest of the document');

$mpdf->Output();

```

## Example #2 - Turning a Header/Footer off

```php
<?php
// If you want the changes to start on an ODD page
$mpdf->AddPage('','E');
$mpdf->SetHTMLHeader();
$mpdf->AddPage();
$mpdf->SetHTMLFooter();
$mpdf->WriteHTML('No-Header page');

$mpdf->Output();

```

# Table of Contents

Using <span class="smallblock">RUNTIME</span> headers/footers with a Table of Contents is very clumsy, 
it is strongly recommended that you use one of the <span class="smallblock">NAMED</span> methods. 
Here for the record is how you would do it:

```php
<?php
$mpdf = new \Mpdf\Mpdf();

// Set the headers/footers for the Introduction
$mpdf->SetHTMLHeader('
<div style="text-align: right; font-weight: bold;">
    Introduction
</div>','O');
$mpdf->SetHTMLHeader('
<div style="border-bottom: 1px solid #000000;">
    Introduction
</div>','E');

$mpdf->SetHTMLFooter('<div style="font-weight: bold;">{PAGENO}</div>','O');
$mpdf->SetHTMLFooter('<div style="text-align: right;">{PAGENO}</div>','E');

$mpdf->AddPage('', '', 1, '', 'on');    // suppress page numbering for the introduction

$mpdf->WriteHTML('Introduction of document...');

$mpdf->AddPage('','E');

$mpdf->SetHTMLHeader('<div style="text-align: right; font-weight: bold;">Main</div>','O');
$mpdf->SetHTMLHeader('<div style="border-bottom: 1px solid #000000;">Main</div>','E');

$mpdf->TOCpagebreak(
    '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '',
    $toc-preHTML, $toc-postHTML, $toc-bookmarkText, 
    1, 'A', 'off');    // sets numbering to start at A

$mpdf->SetHTMLFooter('<div style="font-weight: bold;">Main - {PAGENO}</div>','O');
$mpdf->SetHTMLFooter('<div style="text-align: right;">Main - {PAGENO}</div>','E');

$mpdf->WriteHTML('Main part of document...');

$mpdf->Output();

```

...and for historical reference, using deprecated TOC function:

```php
<?php
$mpdf = new \Mpdf\Mpdf();

// Set the headers/footers for the Introduction
$mpdf->SetHTMLHeader(
    '<div style="text-align: right; font-weight: bold;">
        Introduction
    </div>',
    'O'
);

$mpdf->SetHTMLHeader(
    '<div style="border-bottom: 1px solid #000000;">
        Introduction
    </div>',
    'E'
);

$mpdf->SetHTMLFooter('<div style="font-weight: bold;">{PAGENO}</div>','O');
$mpdf->SetHTMLFooter('<div style="text-align: right;">{PAGENO}</div>','E');

$mpdf->AddPage('', '', 1, '', 'on');    // suppress page numbering for the introduction

$mpdf->WriteHTML('Introduction of document...');

$mpdf->AddPage('','E');

$mpdf->SetHTMLHeader('<div style="text-align: right; font-weight: bold;">Main</div>','O');
$mpdf->SetHTMLHeader('<div style="border-bottom: 1px solid #000000;">Main</div>','E');

$mpdf->AddPage('', '', 1, 'i', 'off');    // sets page numbering to start here at 1

$mpdf->SetHTMLFooter('<div style="font-weight: bold;">Main - {PAGENO}</div>','O');
$mpdf->SetHTMLFooter('<div style="text-align: right;">Main - {PAGENO}</div>','E');

// Set some variables for the ToC - these are all now deprecated
$mpdf->TOCheader = array();
$mpdf->TOCfooter = array();

$mpdf->TOCpreHTML = '<h2>Table of Contents</h2>');
$mpdf->TOCpostHTML = 'Text to come after the contenst list';

$mpdf->TOCbookmarkText = 'Contents';

// Mark this current page as where the ToC is to be inserted
$mpdf->TOC(
    $tocfont, $tocfontsize, $tocindent, $resetpagenum, $pagenumstyle, $suppress, 
    $toc_orientation, $TOCusePaging, $TOCuseLinking
);

$mpdf->WriteHTML('Main part of document...');

$mpdf->Output();

```

# See Also
- <a href="{{ "/headers-footers/headers-footers.html" | prepend: site.baseurl }}">Headers &amp; Footers</a>
  - <a href="{{ " /headers-footers/method-1.html " | prepend: site.baseurl }}">Method 1</a> RUNTIME non-HTML headers & footers (deprecated)
  - <a href="{{ " /headers-footers/method-3.html " | prepend: site.baseurl }}">Method 3</a> NAMED non-HTML headers & footers (deprecated)
  - <a href="{{ " /headers-footers/method-4.html " | prepend: site.baseurl }}">Method 4</a> NAMED HTML headers & footers

Related to RUNTIME HTML headers & footers:
- <a href="{{ "/reference/mpdf-functions/sethtmlfooter.html" | prepend: site.baseurl }}">SetHTMLHeader()</a>
- <a href="{{ "/reference/mpdf-functions/sethtmlfooter.html" | prepend: site.baseurl }}">SetHTMLFooter()</a>
