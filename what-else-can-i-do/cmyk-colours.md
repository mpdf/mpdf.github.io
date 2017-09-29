---
layout: page
title: CMYK colours
parent_title: What Else Can I Do
permalink: /what-else-can-i-do/cmyk-colours.html
modification_time: 2015-08-05T12:00:17+00:00
---

# CMYK Colors

Functions - `SetDrawColor()`, `SetTextColor()` and `SetFillColor()` all take an optional 4th parameter.

If defined this will interpret the input as CMYK color i.e.

```php
<?php
$mpdf->SetDrawColor(15, 82, 0, 10)

```

NB all values are out of `100` - not `255` as for RGB

