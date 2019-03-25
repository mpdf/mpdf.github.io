---
layout: page
title: Method 3
parent_title: Headers & Footers
permalink: /headers-footers/method-3.html
modification_time: 2015-08-05T11:59:51+00:00
---

<div class="alert alert-danger" role="alert" markdown="1">
  **Deprecated** since mPDF &ge; 6

  non-HTML is now handled as HTML as well
</div>

This uses <span class="smallblock">NAMED</span> <span class="smallblock">NON-HTML</span> headers & footers.
This method is useful if you do not need the flexibility of an HTML header/footer, but are changing headers/footers
throughout the document.

These use the same array values as <a href="{{ "/headers-footers/method-1.html" | prepend: site.baseurl }}">Method 1</a>
Variant #5.

Note that named headers are not specified as <span class="smallblock">ODD</span> or <span class="smallblock">EVEN</span>
when they are defined, but only when they are selected.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** Do not name a header or footer starting with `html_` - This prefix is reserved to identify
  an <span class="smallblock">HTML</span> header/footer.
</div>

# Defining NAMED Headers/Footers

## Example #1 - Using PHP

```php
<?php
$arr1 = array (
    'L' => array (
        'content' => 'Chapter 1',
        'font-size' => 10,
        'font-style' => 'B',
        'font-family' => 'serif',
        'color'=>'#000000'
    ),
    'C' => array (
        'content' => '',
        'font-size' => 10,
        'font-style' => 'B',
        'font-family' => 'serif',
        'color'=>'#000000'
    ),
    'R' => array (
        'content' => 'My document',
        'font-size' => 10,
        'font-style' => 'B',
        'font-family' => 'serif',
        'color'=>'#000000'
    ),
    'line' => 1,
);

$mpdf->DefHeaderByName('MyHeader1', $arr1);

```

## Example #2 - Using Custom HTML tags

```php
<?php
$mpdf = new \Mpdf\Mpdf();

// Define the Headers and Footers with names
$html = '
<pagefooter name="MyFooter1"
  content-left="{DATE j-m-Y}" content-center="{PAGENO}/{nbpg}"
  content-right="My document" footer-style="font-family: serif; font-size: 8pt;
  font-weight: bold; font-style: italic; color: #000000;" />

<div>Now starts the document text... </div>';

$mpdf->WriteHTML($html);

```

# Referencing a Header/Footer by NAME

Once you have defined <span class="smallblock">NAMED</span> headers/footers for your document, you can reference them using:

Methods for <span class="smallblock">NON-HTML</span> headers/footers only - **Recommended** when setting the
first page header/footer at the start of a document (although they can also be used to change headers/footers
during the document).

- <a href="{{ "/reference/mpdf-functions/setheaderbyname.html" | prepend: site.baseurl }}">SetHeaderByName()</a> - see Example #3
- <a href="{{ "/reference/mpdf-functions/setfooterbyname.html" | prepend: site.baseurl }}">SetFooterByName()</a> - see Example #3
- <a href="{{ "/paging/using-page.html" | prepend: site.baseurl }}">@page</a> - see Example #5
- &lt;<a href="{{ "/reference/html-control-tags/setpageheader.html" | prepend: site.baseurl }}">setpageheader</a>&gt; - see Example #4
- &lt;<a href="{{ "/reference/html-control-tags/setpagefooter.html" | prepend: site.baseurl }}">setpagefooter</a>&gt; - see Example #4

Methods to access any headers/footers (<span class="smallblock">HTML</span> or <span class="smallblock">NON-HTML
</span>) - **Recommended** when changing header/footer during the document.

- <a href="{{ "/reference/mpdf-functions/addpage.html" | prepend: site.baseurl }}">AddPage()</a> - see Example #6
- &lt;<a href="{{ "/reference/html-control-tags/pagebreak.html" | prepend: site.baseurl }}">pagebrea</a>k&gt; - see Example #7
- <a href="{{ "/paging/using-page.html" | prepend: site.baseurl }}">@page</a> - see Example #5
- <a href="{{ "/reference/mpdf-functions/tocpagebreak.html" | prepend: site.baseurl }}">TOCpagebreak()</a> - see Example #8
- &lt;<a href="{{ "/reference/html-control-tags/tocpagebreak.html" | prepend: site.baseurl }}">tocpagebreak</a>&gt; - see Example #9

# Setting a named header at the start of a document

When using a <span class="smallblock">NAMED</span> header on the first page, remember that mPDF writes the header as
the first page is started. This is usually when you first use `WriteHTML()` which automatically triggers an AddPage().

## Example #3 - SetHeaderByName()

```php
<?php
$mpdf = new \Mpdf\Mpdf();

// Define a header named 'MyHeader1' here (as Example #1)
$mpdf->SetHeaderByName('MyHeader1');
$mpdf->WriteHTML('Document text');

$mpdf->Output();

```

In this example using custom HTML tags to set the <span class="smallblock">NON-HTML</span> header, notice that
`<setpageheader>` has `show-this-page = "1"`. This is because as soon as you call
`WriteHTML()`, mPDF has added the first page, so this fixes the problem by forcing the header to show on the first page:

## Example #4 - &lt;setpageheader&gt;

```php
<?php
$mpdf = new \Mpdf\Mpdf();

$html = '
<pagefooter name="MyFooter1"
  content-left="{DATE j-m-Y}" content-center="{PAGENO}/{nbpg}"
  content-right="My document" footer-style="font-family: serif; font-size: 8pt;
  font-weight: bold; font-style: italic; color: #000000;" />

<setpageheader name="MyHeader1" value="on" show-this-page="1" />
<setpagefooter name="MyFooter1" value="on" />

<div>Start of the document ... and all the rest</div>';

$mpdf->WriteHTML($html);

$mpdf->Output();

```

## Example #5 - @page

```php
<?php
$mpdf = new \Mpdf\Mpdf();

$html = '

<html>
<head>
<style>
    @page {
        size: auto;
        odd-header-name: MyHeader1;
        odd-footer-name: MyFooter1;
    }
    @page chapter2 {
        odd-header-name: MyHeader2;
        odd-footer-name: MyFooter2;
    }
    @page noheader {
        odd-header-name: _blank;
        odd-footer-name: _blank;
    }
    div.chapter2 {
        page-break-before: always;
        page: chapter2;
    }
    div.noheader {
        page-break-before: always;
        page: noheader;
    }
</style>
</head>
<body>
    <pageheader name="MyHeader1" content-right="My document"
        header-style="font-weight: bold; color: #000000;" line="on" />
    <pagefooter name="MyFooter1" content-left="{DATE j-m-Y}"
        content-center="{PAGENO}/{nbpg}" footer-style="font-size: 8pt;" />
    <pageheader name="MyHeader2" content-right="Chapter 2"
        header-style="font-weight: bold; color: #000000;" line="on" />
    <pagefooter name="MyFooter2" content-left="{DATE j-m-Y}"
        content-center="2: {PAGENO}" footer-style="font-size: 8pt;" />

    <div>Here is the text of the first chapter</div>
    <div class="chapter2">Text of Chapter 2</div>
    <div class="noheader">No-Header page</div>
</body>
</html>';

$mpdf->WriteHTML($html);

$mpdf->Output();

```

# Selecting a named header during the document

## Example #6 - AddPage()

```php
<?php
$mpdf->WriteHTML('Document text');

// In a SINGLE-SIDED document, the 'ODD' values set the default for all pages.
$mpdf->AddPage(
    '','','','','','','','','','','',
    'MyHeader2', '', 'MyFooter2', '', 1, 0, 1, 0
);

$mpdf->WriteHTML('Document text');

// Turn Headers and Footers off
$mpdf->AddPage('','','','','','','','','','','', '', '', '', '', -1, 0, -1, 0);

$mpdf->WriteHTML('Document text with No Headers/Footers');

```

## Example #7 - &lt;pagebreak&gt;

```php
<?php
$html = '
<p>Document text</p>
<p>Text of Chapter 2</p>

<!-- TO TURN HEADER/FOOTER OFF FOR A NEW PAGE -->
<pagebreak odd-header-value="off" odd-footer-value="off" />

<p>No-Header page</p>';

$mpdf->WriteHTML($html);

```

# Table of Contents

## Example #8 - TOCpagebreak()

```php
<?php
$mpdf = new \Mpdf\Mpdf();

// Define headers here named 'MyHeader1', 'MyTOCHeader', 'MyTOCFooter',
// 'MyHeader2', 'MyFooter2' (as Example #1)
$mpdf->SetHeaderByName('MyHeader1');
$mpdf->WriteHTML('Introduction of document...');
$mpdf->TOCpagebreak (
    '', '', '', '', '', '', '', '', '', '', '', '',
    'MyTOCHeader', '', 'MyTOCFooter', '', 1, 0 , 1, 0,
    '', '', '', '', '', '', '', '', '', '', '', '', '',
    'MyHeader2', '', 'MyFooter2', '', 1, 0,  1,0
);

$mpdf->WriteHTML('Main part of document...');

$mpdf->Output();

```

## Example #9 - &lt;tocpagebreak&gt;

```php
<?php
$html = "
<!-- Define headers etc. here named 'MyHeader1', 'MyTOCHeader', 'MyTOCFooter',
'MyHeader2', 'MyFooter2' (as Example #2) -->

<p>Introduction: Here starts the document</p>

<tocpagebreak toc-odd-header-name='MyTOCHeader' toc-odd-header-value=\"1\"
    toc-odd-footer-name='MyTOCFooter' toc-odd-footer-value=\"1\"
    odd-header-name='MyHeader2' odd-header-value=\"1\"
    odd-footer-name='MyFooter2' odd-footer-value=\"1\" />

<p>Text of Chapter 2...</p>";

$mpdf->WriteHTML($html);

```

# See Also
- <a href="{{ "/headers-footers/headers-footers.html" | prepend: site.baseurl }}">Headers &amp; Footers</a>
  - <a href="{{ " /headers-footers/method-1.html " | prepend: site.baseurl }}">Method 1</a> RUNTIME non-HTML headers & footers (deprecated)
  - <a href="{{ " /headers-footers/method-2.html " | prepend: site.baseurl }}">Method 2</a> RUNTIME HTML headers & footers
  - <a href="{{ " /headers-footers/method-4.html " | prepend: site.baseurl }}">Method 4</a> NAMED HTML headers & footers

Related to NAMED non-HTML headers & footers:
- <a href="{{ "/reference/mpdf-functions/defheaderbyname.html" | prepend: site.baseurl }}">DefHeaderByName()</a>
- <a href="{{ "/reference/mpdf-functions/deffooterbyname.html" | prepend: site.baseurl }}">DefFooterByName()</a>
- &lt;<a href="{{ "/reference/html-control-tags/pageheader.html" | prepend: site.baseurl }}">pageheader</a>&gt;
- &lt;<a href="{{ "/reference/html-control-tags/pagefooter.html" | prepend: site.baseurl }}">pagefooter</a>&gt;
- <a href="{{ "/reference/mpdf-functions/setheaderbyname.html" | prepend: site.baseurl }}">SetHeaderByName()</a>
- <a href="{{ "/reference/mpdf-functions/setfooterbyname.html" | prepend: site.baseurl }}">SetFooterByName()</a>
- &lt;<a href="{{ "/reference/html-control-tags/setpageheader.html" | prepend: site.baseurl }}">setpageheader</a>&gt;
- &lt;<a href="{{ "/reference/html-control-tags/setpagefooter.html" | prepend: site.baseurl }}">setpagefooter</a>&gt;
- <a href="{{ "/reference/mpdf-functions/addpage.html" | prepend: site.baseurl }}">AddPage()</a>
- <a href="{{ "/reference/mpdf-functions/tocpagebreak.html" | prepend: site.baseurl }}">TOCpagebreak()</a>
- &lt;<a href="{{ "/reference/html-control-tags/pagebreak.html" | prepend: site.baseurl }}">pagebrea</a>k&gt;
- &lt;<a href="{{ "/reference/html-control-tags/tocpagebreak.html" | prepend: site.baseurl }}">tocpagebreak</a>&gt;
- <a href="{{ "/paging/using-page.html" | prepend: site.baseurl }}">@page</a>
