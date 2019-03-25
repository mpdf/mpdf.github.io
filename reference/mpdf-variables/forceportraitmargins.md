---
layout: page
title: forcePortraitMargins
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/forceportraitmargins.html
modification_time: 2015-08-05T12:01:57+00:00
---

mPDF &ge; 2.3

<div class="alert alert-success" role="alert" markdown="1">
  Special case - rotated margins on Landscape pages
</div>


Default: `false`

If default page orientation is `P`(`Portrait`), then adding new page `L`(`Landscape`) causes the left/right margins to
be used as top/bottom, and vice-versa.

(NB similar to <a href="{{ "/reference/mpdf-variables/forceportraitheaders.html" | prepend: site.baseurl }}">forcePortraitHeaders</a>
which does the same but also rotates the HTML headers/footers.)

NB - if using OddEven (double-sided document), it is the Portrait orientation L/R margins that alternate.

When adding a page, you must only call `$mpdf->AddPage('L')` or `<pagebreak orientation="landscape" />`.
If you try to set new margins/headers etc. for new landscape pages when `forcePortraitMargins = true`, it will go wrong.

# Usage

Set at document initiation

```php
<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf(['forcePortraitMargins' => true]);

```

