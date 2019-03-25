---
layout: page
title: backupSubsFont
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/backupsubsfont.html
modification_time: 2015-08-05T12:01:42+00:00
---

mPDF &ge; 5.0

Optional array containing font(s) to use for missing characters when using useSubstitutions.

Default set in font
<a href="{{ "/configuration/configuration-v7-x.html" | prepend: site.baseurl }}">configuration variables</a>
or at runtime.

Default value: array('dejavusanscondensed')

Only relevant when using subsets (otherwise would add very large file), and doesn't do Indic or arabic text

More than 1 font can be specified but each will add to the processing time of the script

Names used are as defined in `fontdata` configuration variable.

Examples:

```
$mpdf->backupSubsFont = ['dejavusanscondensed', 'sun-exta']; // this will recognise most scripts

$mpdf->backupSubsFont = ['dejavusanscondensed']; // good default
```
