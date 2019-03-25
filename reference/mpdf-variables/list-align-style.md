---
layout: page
title: list_align_style
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/list-align-style.html
modification_time: 2015-08-05T12:02:07+00:00
---

(mPDF &ge; 2.1 && < 6.0)

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** This was removed in mPDF 6.0
</div>

Specifies text alignment of numbers in numbered lists (default: Right)

```php
<?php
$mpdf->list_align_style = 'L';

```

Default: `'R'`

(This can be altered at run time, but is not changeable through stylesheets or in-line style)

