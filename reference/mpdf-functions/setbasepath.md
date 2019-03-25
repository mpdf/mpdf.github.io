---
layout: page
title: SetBasePath()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setbasepath.html
modification_time: 2015-08-05T12:00:55+00:00
---

(mPDF &ge; 1.0)

SetBasePath – Specifies a base URL for mPDF to interpret relative URLs

# Description

void **SetBasePath** ( string <span class="parameter">$url</span> )

Specifies that mPDF should interpret any URLs in the HTML code relative to this <span class="parameter">$url</span>.
Otherwise relative paths will be based on the current script. This is important for hyperlinks, external stylesheets,
and images.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** From mPDF 5.7 the HTML tag `<base href="">` is parsed in the HTML and used to set the base path.
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** This function/method was altered in mPDF 2.2 by capitalising the first letter of the name.
  As function/method names in PHP have hitherto been case-insensitive, this should not cause any problems, but it is
  recommended where possible to use the preferred spelling.
</div>

# Parameters

<span class="parameter">$url</span>

: A full URL should be provided, but the following will all work:

  * http://www.mydomain.com
  * http://www.mydomain.com/index.php
  * http://www.mydomain.com/path/

# Examples

```php
<?php
$mpdf = new \Mpdf\Mpdf();

$url = "http://www.php.net/manual/en/function.iconv.php";
$html = file_get_contents($url);

$mpdf->setBasePath($url);

// Now any relative paths e.g. <img src="../picture.jpg" /> will be parsed relative to
// a base path of "http://www.php.net/manual/en/"
$mpdf->WriteHTML($html);
$mpdf->Output();

```
