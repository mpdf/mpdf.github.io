---
layout: page
title: tabSpaces
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/tabspaces.html
modification_time: 2015-08-05T12:02:32+00:00
---

(mPDF &ge; 2.3)

# Description

int **tabSpaces**

Specifies the number of spaces to substitue for a <span class="smallblock">TAB</span> character when parsing HTML input
between `<pre>...</pre>` tags. The default value (`8`) is consistent with the HTML specification, but many programs
including Windows NotePad uses a value of `6`.

# Values

<span class="parameter">$tabSpaces</span>

**Values**

Integer value greater than `0`

Default: `8`

# Examples

Example #1

```php
<?php
$mpdf = new \Mpdf\Mpdf();

$mpdf->tabSpaces = 6;

$html = file_get_content('NotePad.txt');
$mpdf->WriteHTML('
'.$html.'</pre>');

$mpdf->Output();

```



