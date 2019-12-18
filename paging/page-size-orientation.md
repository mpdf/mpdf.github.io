---
layout: page
title: Page size & Orientation
parent_title: Paging
permalink: /paging/page-size-orientation.html
modification_time: 2015-08-05T11:59:47+00:00
---

# Page sizes supported

When declaring an instance of
<a href="{{ "/reference/mpdf-functions/construct.html" | prepend: site.baseurl }}">\Mpdf\Mpdf</a> 
class, you can specify the (default) page size and orientation for the document. 

The margins and orientation can be redefined throughout the document whenever you add a new page using 
<a href="{{ "/reference/mpdf-functions/addpage.html" | prepend: site.baseurl }}">AddPage()</a> or 
&lt;<a href="{{ "/reference/html-control-tags/pagebreak.html" | prepend: site.baseurl }}">pagebreak</a>&gt;. 

It can also be set by CSS using <a href="{{ "/paging/using-page.html" | prepend: site.baseurl }}">@page</a>.

# Examples

## Example #1

```php
<?php
$mpdf = new \Mpdf\Mpdf(['format' => 'Legal']);

$mpdf->WriteHTML('Hello World');

$mpdf->AddPage('L'); // Adds a new page in Landscape orientation
$mpdf->WriteHTML('Hello World');

$mpdf->Output();

```

## Example #2

```php
<?php

// Define a default Landscape page size/format by name
$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);

// Define a default page size/format by array - page will be 190mm wide x 236mm height
$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [190, 236]]);

// Define a default page using all default values except "L" for Landscape orientation
$mpdf = new \Mpdf\Mpdf(['orientation' => 'L']);

```

# See Also

- <a href="{{ "/reference/mpdf-functions/construct.html" | prepend: site.baseurl }}">\Mpdf\Mpdf::__construct()</a> - mPDF class constructor
- <a href="{{ "/reference/mpdf-functions/addpage.html" | prepend: site.baseurl }}">AddPage()</a> - Add a new page

