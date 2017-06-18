---
layout: page
title: forcePortraitMargins
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/forceportraitmargins.html
modification_time: 2015-08-05T12:01:57+00:00
---

mPDF >= 2.3

<div class="alert alert-success" role="alert" markdown="1">
  Special case - rotated margins on Landscape pages

</div>


```php
<?php
$mpdf->forcePortraitMargins = true; //(default = false)

```
If default page orientation is `P`(ortrait), then adding new page `L`(andscape) causes the left/right margins to be used as top/bottom, and vice-versa.

(NB similar to <a href="{{ "/reference/mpdf-variables/forceportraitheaders.html" | prepend: site.baseurl }}">`forcePortraitHeaders`</a> which does the same but also rotates the HTML headers/footers.)

NB - if using OddEven (double-sided document), it is the Portrait orientation L/R margins that alternate.

When adding a page, you must only call `$mpdf->AddPage('L')` or `<pagebreak orientaion="landscape" />`  
if you try to set new margins/headers etc. for new landscape pages when `forcePortraitMargins=true`, it will go wrong


