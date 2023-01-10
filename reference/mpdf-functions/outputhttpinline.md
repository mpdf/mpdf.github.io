---
layout: page
title: OutputHttpInline()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/outputhttpinline.html
modification_time: 2022-01-08T12:00:50+00:00
---

mPDF &ge; 8.1.2

OutputHttpInline – Finalise the document and send the PDF inline to the browser.

This methods sets HTTP headers using standard `header` PHP function.

# Description

void **OutputHttpInline**()

# Examples

```php
<?php

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('Hello World');

$mpdf->OutputHttpInline();
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