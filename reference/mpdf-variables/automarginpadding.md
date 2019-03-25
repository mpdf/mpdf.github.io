---
layout: page
title: autoMarginPadding
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/automarginpadding.html
modification_time: 2015-08-05T12:01:40+00:00
---

(mPDF &ge; 4.0)

# Description

mixed **autoMarginPadding**

Specify padding between top-margin and header in 'stretch' mode. When <span class="parameter">setAutoTopMargin</span>
or <span class="parameter">setAutoBottomMargin</span> are set to `'stretch'` <span class="parameter">autoMarginPadding</span>
defines the minimum distance in mm that will be forced between the bottom of the header and the top of the main
text (or bottom of text and footer).

# Values

<span class="parameter">autoMarginPadding</span> 

**Values**

* <span class="smallblock">FLOAT</span> Value in millimeters

Default: `2`

# Examples

```php
<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([
    'setAutoTopMargin' => 'stretch',
    'autoMarginPadding' => 5
]);

```

# See Also

* <a href="{{ "/headers-footers/headers-top-margins.html" | prepend: site.baseurl }}">Headers & Top margins </a>
* <a href="{{ "/reference/mpdf-variables/setautotopmargin.html" | prepend: site.baseurl }}">setAutoTopMargin</a> -Specify mode of determining top-margin position
* <a href="{{ "/reference/mpdf-variables/setautobottommargin.html" | prepend: site.baseurl }}">setAutoBottomMargin</a> -Specify mode of determining bottom-margin position

