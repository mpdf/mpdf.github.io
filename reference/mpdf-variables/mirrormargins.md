---
layout: page
title: mirrorMargins
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/mirrormargins.html
modification_time: 2015-08-05T12:02:13+00:00
---

(mPDF &ge; 4.0)

# Description

Set to `1`, the document will mirror the left and right margin values on odd and even pages i.e. they become inner and
outer margins. (this is automatically reversed for RTL languages).

NB Headers and footers use the 'Odd' pages as default if this is not used.

Default: `0`

# Usage

Set at document initiation
```php
<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf(['mirrorMargins' => 1]);

```

# See Also

* <a href="{{ "/paging/double-sided-documents.html" | prepend: site.baseurl }}">Double-sided documents</a>, includes an example

