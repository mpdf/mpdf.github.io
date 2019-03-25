---
layout: page
title: setAutoBottomMargin
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/setautobottommargin.html
modification_time: 2015-08-05T12:02:24+00:00
---

(mPDF &ge; 4.0)

# Description

mixed **setAutoBottomMargin**

Specify the behaviour defining the bottom-margin of the document. When <span class="parameter">setAutoBottomMargin</span>
is set to `'stretch'` then <span class="parameter">autoMarginPadding</span> defines the minimum distance in mm that will
be forced between the top of the footer and the bottom of the main text.

# Values

<span class="parameter">setAutoBottomMargin</span>

**Values**

`'pad'`
: the value for margin-bottom is used to set a fixed distance in mm (padding) between the top of the footer and the
  bottom of the main text

`'stretch'`
: margin-bottom sets a **minimum** distance in mm between the bottom of the page and the bottom of the main
  text, which expands if the footer is too large to fit.

`false`
: the defined value for margin-bottom is respected even if the footer overlaps
  the main body of the document.

Default: `false`

# Examples

```php
<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf(['setAutoBottomMargin' => 'pad']);

```

# See Also

* <a href="{{ "/headers-footers/headers-top-margins.html" | prepend: site.baseurl }}">Headers & Top margins </a>
* <a href="{{ "/reference/mpdf-variables/setautotopmargin.html" | prepend: site.baseurl }}">setAutoTopMargin</a> - Specify mode of determining top-margin position
* <a href="{{ "/reference/mpdf-variables/automarginpadding.html" | prepend: site.baseurl }}">autoMarginPadding</a> - Specify padding between top-margin and header in automatic mode

