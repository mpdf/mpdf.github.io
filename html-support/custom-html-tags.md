---
layout: page
title: Custom HTML Tags
parent_title: HTML support
permalink: /html-support/custom-html-tags.html
modification_time: 2015-08-05T11:59:42+00:00
---

mPDF uses a number of custom HTML tags (see
<a href="{{ "/reference/html-control-tags/overview.html" | prepend: site.baseurl }}">HTML Control Tags - Overview</a>).

In addition to those, the custom tags `<ttz>` `<tts>` and `<tta>` are reserved for use internally within
the mPDF program to denote the core symbol, dingbat and arial characters.

# Invalid HTML?

(mPDF &ge; 2.2)

If you want to hide mPDF custom tags from a browser, enclose any mPDF code within:

```php
<!--mpdf  ..  anything you want to write ...  mpdf-->

```

As these are the standard comment tags recognised by every browser, this will create valid HTML which should output
correctly in any circumstances. mPDF will strip away the `<!--mpdf` tag and any
following spaces, and the `$mpdf-->` tag and any preceeding spaces, and process all
enclosed code.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** Almost all mPDF custom tags are self closing e.g. `<pagebreak />`. If you do not use
  self-closing tags, the HTML may not show correctly in a browser unless you hide the tags in special comments as above.
</div>

Most browsers will ignore (self-closing) tags that are not recognised, but `<htmlpageheader>` and
`<htmlpagefooter>` are different, as they contain innerHTML e.g.

```php

<htmlpageheader name="phname">HTML code in here</htmlpageheader>

```

The enclosed innerHTML will be output by a browser, so you need to hide it; either use the special comment
tags as above, or an alternative is to use CSS, e.g. add to your stylesheet

```css

htmlpageheader { display : none; }
htmlpagefooter { display : none; }

```

Yet another way is to use in-line CSS:

```html

<htmlpageheader name="phname" style="display: none;">HTML code in here</htmlpageheader>

```

