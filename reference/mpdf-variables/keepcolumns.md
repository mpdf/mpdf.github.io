---
layout: page
title: keepColumns
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/keepcolumns.html
modification_time: 2015-08-05T12:02:06+00:00
---

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** This variable originally started with an uppercase
  letter (&le; mPDF 2.2). Support for the uppercase version was removed in mPDF &ge; 6.0
</div>

Set this variable to `true` and columns will be written successively i.e. there will
be no balancing of the length of columns.

```php
<?php
$mpdf->keepColumns = true;

```

