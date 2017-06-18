---
layout: page
title: forcePortraitHeaders
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/forceportraitheaders.html
modification_time: 2015-08-05T12:01:57+00:00
---

<div class="alert alert-success" role="alert" markdown="1">
  Special case - rotated Portrait headers on Landscape pages
</div>



```php
<?php
$mpdf->forcePortraitHeaders = true;

```

In v2.3 this was updated to work for non-HTML headers/footers as well.

This is a quick fix which rotates HTML headers and Footers on landscape pages in the following conditions:

- document orientation is portrait
- when adding a page, you must only call  
  `$mpdf->AddPage('L')` or `<pagebreak orientation="landscape" />` if you try to set new margins/headers etc. for new landscape pages when `forcePortraitHeaders = true`, it will go wrong.


# See also
- <a href="{{ "/reference/mpdf-variables/forceportraitmargins.html" | prepend: site.baseurl }}">forcePortraitMargins</a> - rotate only margins
- <a href="{{ "/headers-footers/headers-footers.html" | prepend: site.baseurl }}">Headers & Footers</a>
