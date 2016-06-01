---
layout: page
title: backupSIPFont
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/backupsipfont.html
modification_time: 2015-08-05T12:01:43+00:00
---

<div>
<div>

mPDF &gt;= 5.0

Optional font name to use for CJK characters in Plane 2 Unicode (&gt; U+20000) when using useSubstitutions.

Default set in config_fonts.php

Default value: [blank]

Names used are as defined in $this->fontdata in config_fonts.php

Use a font like hannomb or sun-extb if available

Example:

$this->backupSIPFont = 'sun-extb';

</div>
</div>
