---
layout: page
title: annotMargin
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/annotmargin.html
modification_time: 2015-08-05T12:01:37+00:00
---

float **$annotMargin** = `0` 

Default position for Annotations;

**Value**

* `0` = where it was defined;
* (+ve value float) Distance from right margin of page to show annotations (in mm);

# Usage

Set at document initiation
```php
<?php
$mpdf = new \Mpdf\Mpdf(['annotMargin' => 5]);

```

# See Also

* <a href="{{ "/reference/mpdf-functions/annotation.html" | prepend: site.baseurl }}">Annotation()</a> - Add an Annotation to the document

