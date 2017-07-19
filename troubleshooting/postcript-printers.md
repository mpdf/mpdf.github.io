---
layout: page
title: Postcript printers
parent_title: Troubleshooting
permalink: /troubleshooting/postcript-printers.html
modification_time: 2015-08-05T12:00:36+00:00
---

If you have problems with PDF files printing on PostScript printers, this may be helped by setting the 
<a href="{{ "/configuration/configuration-v7-x.html" | prepend: site.baseurl }}">configuration variable</a>

```php
<?php
$mpdf->repackageTTF = false;

```

This forces mPDF to remake the font file using only core tables when Embedding full TTF font files.

