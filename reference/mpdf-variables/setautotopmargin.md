---
layout: page
title: setAutoTopMargin
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/setautotopmargin.html
modification_time: 2015-08-05T12:02:25+00:00
---

(mPDF &ge; 4.0)

# Description

mixed **setAutoTopMargin**

Specify the behaviour defining the top-margin of the document. When <span class="parameter">setAutoTopMargin</span> is
set to `'stretch'` then <span class="parameter">autoMarginPadding</span> defines the minimum distance in mm that will
be forced between the bottom of the header and the top of the main text.

# Values

<span class="parameter">setAutoTopMargin</span>

**Values**

`'pad'`
: The value for margin-top is used to set a fixed distance in mm (padding) between the bottom of the header and top of the main text

`'stretch'`
: margin-top sets a **minimum** distance in mm between the top of the page and the top of the main text, which expands if header is too large to fit.

`false`
: the defined value for margin-top is respected even if the header overlaps the main body of the document.

Default: `false`

# Examples

```php
<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf(['setAutoTopMargin' => 'pad']);

```

# See Also

* <a href="{{ "/headers-footers/headers-top-margins.html" | prepend: site.baseurl }}">Headers & Top margins </a>
* <a href="{{ "/reference/mpdf-variables/setautobottommargin.html" | prepend: site.baseurl }}">setAutoBottomMargin</a> - Specify mode of determining bottom-margin position
* <a href="{{ "/reference/mpdf-variables/automarginpadding.html" | prepend: site.baseurl }}">autoMarginPadding</a> - Specify padding between top-margin and header in automatic mode

