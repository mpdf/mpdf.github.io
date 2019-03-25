---
layout: page
title: annotOpacity
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/annotopacity.html
modification_time: 2015-08-05T12:01:38+00:00
---

float **$annotOpacity** = `0.5`   

Default Opacity for Annotations;

**Value**

* >`0` to &le; `1`

Suggest `0.5` if using in-line with text, or `1` if using in the margins (with annotMargin &lt; &gt; `0`)

Default: `0.5`

# Usage

Set at document initiation
```php
<?php
$mpdf = new \Mpdf\Mpdf([
    'annotMargin' => 5,
    'annotOpacity' => 1
]);

```

# See Also

* <a href="{{ "/reference/mpdf-functions/annotation.html" | prepend: site.baseurl }}">Annotation()</a> - Add an Annotation to the document
* <a href="{{ "/reference/mpdf-variables/annotopacity.html" | prepend: site.baseurl }}">annotMargin</a> - Default position for Annotations


