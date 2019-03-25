---
layout: page
title: allowCJKoverflow
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/allowcjkoverflow.html
modification_time: 2015-08-05T12:01:36+00:00
---

(mPDF &ge; 5.7)

bool **$allowCJKoverflow**

CJK line-breaking is implemented in mPDF roughly according to accepted rules.

Configurable variables allow fine control of behaviour (except in tables):

```php
<?php
$this->allowCJKorphans = true;
```

**Values**
 * `false`: always wrap to next line
 * `true`: squeeze or overflow

Default: `true`

Combined with

```php
<?php
$this->allowCJKoverflow = false;
```

**Values**

 * `false`: squeeze
 * `true`: overflow (only selected)

Default: `false`

See also
* <a href="{{ "/reference/mpdf-variables/allowcjkorphans.html" | prepend: site.baseurl }}">allowCJKorphans</a>
* and <a href="{{ "/reference/mpdf-variables/cjkforceend.html" | prepend: site.baseurl }}">CJKforceend </a>

