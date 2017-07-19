---
layout: page
title: decimal_align
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/decimal-align.html
modification_time: 2015-08-05T12:01:49+00:00
---

# Decimal Mark alignment in table columns

CSS `text-align` supports decimal mark characters in table cells (TD and TH). HTML attributes `align=` and `char=` can also be used.

Characters to be used for alignment must be defined in the array `decimal_align` as a
<a href="{{ "/configuration/configuration-v7-x.html" | prepend: site.baseurl }}">configuration variable</a>

By default these are `:` period `.`  comma  `,`  middot `\B7` and arabic decimal mark `\66B`

```php
<?php
$mpdf->decimal_align = array(
    'DP' => '.', 
    'DC' => ',', 
    'DM' => "\xc2\xb7", 
    'DA' => "\xd9\xab", 
    'DD' => '-'
);

```

The default character is a period.

To add additional characters, set configuration variable:

- The UTF-8 representation of any non-ASCII characters must be used
- Use any unused 2 character code starting with `D` for the array key

See 
* <a href="{{ "/configuration/configuration-v7-x.html" | prepend: site.baseurl }}">configuration variables</a>