---
layout: page
title: Input encoding
parent_title: Fonts & Languages
permalink: /fonts-languages/input-encoding.html
modification_time: 2015-08-05T11:59:33+00:00
---

mPDF accepts UTF-8 encoded text by default for all functions.

You can use the following to allow you to write html code encoded in other than utf-8 (in functions like
<a href="{{ "/reference/mpdf-functions/writehtml.html" | prepend: site.baseurl }}">WriteHTML()</a>):

```php
<?php

$mpdf->allow_charset_conversion=true;  // Set by default to TRUE

$mpdf->charset_in='windows-1252';

```

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** <span class="parameter">$charset_in</span> requires codes recognised by the PHP
  function <a href="{{ "/reference/codepages-glyphs/iconv.html" | prepend: site.baseurl }}">iconv()</a> i.e.
  windows-1252 not win-1252
</div>

If `$allow_charset_conversion = true` mPDF will
also read the charset from the HTML header if present e.g.

```php
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

```

Alternatively, you could convert the html to utf-8 encoding before passing it to mPDF,
using any one of the PHP functions:

- `utf8_encode($ansi_encoded_html)` only converts <span class="dc-title">ISO-8859-1 to UTF-8</span>;
- `iconv('windows-1252', 'UTF-8', $ansi_encoded_html)`;
- `mb_convert_encoding($ansi_encoded_html, 'UTF-8', 'windows-1252')`;

Note the different order of the parameters, and the different codepage names used by the different functions.
The codepage names recognised vary from platform to platform, and your PHP configuration.

A list of codepages recognised by `iconv()` can be found at [http://www.gnu.org/software/libiconv/](http://www.gnu.org/software/libiconv/).

In PHP5 you can list the codepages recognised by `mb_` functions using `mb_list_encodings()`.

Also note that each function has different ways of failing if illegal characters are encountered.

