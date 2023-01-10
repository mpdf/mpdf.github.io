---
layout: page
title: OutputFile()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/outputfile.html
modification_time: 2022-01-08T12:00:50+00:00
---

mPDF &ge; 8.1.2

OutputFile – Finalise the document and save resulting PDF to file

# Description

void **OutputFile**(string <span class="parameter">$filename</span>)

# Parameters

<span class="parameter">$filename</span>

: The path to file to save.

# Examples

```php
<?php

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('Hello World');

$mpdf->OutputFile(__DIR__ . '/file.pdf');
```

# Changelog

<table class="table">
<thead>
<tr>
    <th>Version</th>
    <th>Description</th>
</tr>
</thead>
<tbody>
<tr>
    <td>8.1.2</td>
    <td>Method was added.</td>
</tr>
</tbody>
</table>