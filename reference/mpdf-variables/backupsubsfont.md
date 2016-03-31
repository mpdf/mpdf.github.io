---
layout: page
title: backupSubsFont
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/backupsubsfont.html
modification_time: 2015-08-05T12:01:42+00:00
---

<p>mPDF &gt;= 5.0

Optional array containing font(s) to use for missing characters when using useSubstitutions.

Default set in config_fonts.php

Default value: array('dejavusanscondensed')</p>
<p>Only relevant when using subsets (otherwise would add very large file), and doesn't do Indic or arabic text</p>
<p>More than 1 font can be specified but each will add to the processing time of the script</p>
<p>Names used are as defined in $this-&gt;fontdata in config_fonts.php

Examples:

$this-&gt;backupSubsFont = array('dejavusanscondensed','arialunicodems','sun-exta');&nbsp;&nbsp;&nbsp; // this will recognise most scripts

$this-&gt;backupSubsFont = array('dejavusanscondensed','arialunicodems');&nbsp;&nbsp;&nbsp; // good default - REQUIRES Arial Unicode MS</p>
