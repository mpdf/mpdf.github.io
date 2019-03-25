---
layout: page
title: backupSIPFont
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/backupsipfont.html
modification_time: 2017-03-13T15:06:17+01:00
---

mPDF &ge; 5.0

Optional font name to use for CJK characters in Plane 2 Unicode (`> U+20000`) when using useSubstitutions.

Default set in `Mpdf\Config\FontVariables`

Default value: `''`

Names used are as defined in `fontdata` configuration key.

Use a font like `hannomb` or `sun-extb` if available

Example:

```php
<?php

$this->backupSIPFont = 'sun-extb';

```
