---
layout: page
title: list_number_suffix
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/list-number-suffix.html
modification_time: 2015-08-05T12:02:10+00:00
---

mPDF &ge; 2.1

Specifies content to follow a numbered list marker e.g. `'.'` gives `1.` or `IV.` whereas `')'` gives `1)` or `a)`

```php
<?php
$mpdf->list_number_suffix = '.';

```

Default: `"."`

(This can be altered at run time, but is not changeable through stylesheets or in-line style)

