---
layout: page
title: bookmarkStyles
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/bookmarkstyles.html
modification_time: 2015-08-05T12:01:45+00:00
---

(mPDF &ge; 5.4)

Bookmarks can be styled by adding code as below to your script. You can define a colour (array of RGB) and/or a
font-style (`'B'`, `'I'`, or `'BI'`) for each level (starting at `0`). Results may depend on the PDF Reader you are using.

# Example

Set as a <a href="{{ "/configuration/configuration-v7-x.html" | prepend: site.baseurl }}">configuration variable</a>

```php
<?php
$config = [
    'bookmarkStyles' = [
        0 => array('color'=> array(0, 64, 128), 'style'=>'B'),
        1 => array('color'=> array(128, 0, 0), 'style'=>''),
        2 => array('color'=> array(0, 128, 0), 'style'=>'I'),
    ]
];

$mpdf = new \Mpdf\Mpdf($config);

```

