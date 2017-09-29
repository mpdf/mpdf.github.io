---
layout: page
title: Rotated pages
parent_title: Headers & Footers
permalink: /headers-footers/rotated-pages.html
modification_time: 2015-08-05T11:59:55+00:00
---

Special case - rotated Portrait headers on Landscape pages

```php
<?php
$mpdf->forcePortraitHeaders = true;

```

This is a quick fix which rotates HTML headers and Footers (only - not normal ones)
on landscape pages in the following conditions:

- document orientation is portrait
- when adding a page, you must only call `$mpdf->AddPage('L')`  
  or `<pagebreak orientation="landscape" />`

If you try to set new margins/headers etc. for new landscape pages when variable `$forcePortraitHeaders = true`, it will go wrong.


# See also
* <a href="{{ "/reference/mpdf-variables/forceportraitheaders.html" | prepend: site.baseurl }}">$forcePortraitHeaders</a> - rotate headers and margins
* <a href="{{ "/reference/mpdf-variables/forceportraitmargins.html" | prepend: site.baseurl }}">$forcePortraitMargins</a> - rotate only margins

