---
layout: page
title: CJKforceend
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/cjkforceend.html
modification_time: 2015-08-05T12:01:46+00:00
---

(mPDF &ge; 5.7)

bool **$CJKforceend**

CJK line-breaking is implemented in mPDF roughly according to accepted rules.

Configurable variables allow fine control of behaviour:

```php
<?php
$this->CJKforceend = false;
```

 * `false`: Forces overflowing punctuation to hang outside right margin (used with CJK script)

Default: `false`

```php
<?php
$this->allowCJKorphans = true;
```

**Values**
 * `false`: always wrap to next line
 * `true`: squeeze or overflow

Default: `true`

```php
<?php
$this->allowCJKoverflow = false;
```

**Values**

 * `false`: squeeze
 * `true`: overflow (only selected)

Default: `false`

IF `$this->allowCJKorphans == true`
AND `$this->allowCJKoverflow == true`
AND `$this->CJKforceend == true`
AND `text-align:justify`

will force hanging punctuation to hang outside right margin.


See also:
 * <a href="{{ "/reference/mpdf-variables/allowcjkoverflow.html" | prepend: site.baseurl }}">allowCJKoverflow</a>
 * <a href="{{ "/reference/mpdf-variables/allowcjkorphans.html" | prepend: site.baseurl }}">allowCJKorphans</a>

