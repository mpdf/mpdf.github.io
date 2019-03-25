---
layout: page
title: Default stylesheet
parent_title: CSS & Stylesheets
permalink: /css-stylesheets/default-stylesheet.html
modification_time: 2017-03-04T08:57:57+00:00
---

mPDF uses a default "stylesheet" for default settings of style and layout; this is in
`defaultCSS` <a href="{{ "/configuration/configuration-v7-x.html" | prepend: site.baseurl }}">configuration variable</a>,
which is based on the recommended default values for HTML4 -
<http://www.w3.org/TR/CSS21/sample.html>

The appearance of a default mPDF document based on HTML should approximate to its appearance in a browser.


**mPDF &ge; 7.0**

: It is possible to define custom default CSS file by
  <a href="{{ "/reference/mpdf-variables/defaultcssfile.html" | prepend: site.baseurl }}">defaultCssFile</a> configuration key.

**mPDF &ge; 6.0**

: A new mpdf.css file includes defaults for Lists top/bottom margins, and also examples for
  Indexes and ToCs. This now acts like a normal CSS file, including cascading selectors i.e. not just main tags.
  This is always read (if present), so acts as a secondary default CSS, but one which allows selectors. Styles added
  to this act like a user stylesheet when considering precedence e.g. cellSpacing and border-spacing. (The following
  text describes behaviour prior to mPDF v6.0)

**mPDF &ge; 2.2**

: will load an optional file `[mpdf root]/data/mpdf.css` (located in the data directory of
  mPDF installation root).

  The file should be a valid CSS stylesheet, but will only support changing properties at element level i.e. P, DIV,
  TABLE, TD and not P.classname.

  The `mpdf.css` file supplied is inactive as it has all the entries commented out by `/* ... */`

  The following values will restore behaviour of pre-4.2 versions to 4.2:

  ```css
  img { margin: 0.83em 0; vertical-align: bottom; }
  table { margin: 0.5em; }
  textarea { vertical-align: top; }
  ```

  The following values will restore behaviour of 2.2 versions:

  ```css
  body {
      font-family: sans-serif;
  }
  a {
      color: #000066;
      text-decoration: none;
  }
  table {
      border-collapse: collapse;
  }
  thead {
      vertical-align: bottom;
      text-align: center;
      font-weight: bold;
  }
  tfoot {
      text-align: center;
      font-weight: bold;
  }
  th {
      text-align: left;
      padding-left: 0.35em;
      padding-right: 0.35em;
      padding-top: 0.35em;
      padding-bottom: 0.35em;
      vertical-align: top;
  }
  td {
      padding-left: 0.35em;
      padding-right: 0.35em;
      padding-top: 0.35em;
      padding-bottom: 0.35em;
      vertical-align: top;
  }
  img {
      margin: 0.2em;
      vertical-align: middle;
  }
  ```

## Prior to mPDF 2.2

The original default styles (mPDF &le; 2.0) were extensively changed with improvements in CSS handling in mPDF 2.0
(this particularly changed table borders, and table cell alignment, as well as a serif default font-family).

In order to allow backwards compatibility, a secondary "stylesheet" - a configuration variable `$defaultCSS2` was introduced in
mPDF 2.0 - and the option to load this on initiating mPDF:

```php
<?php

$mpdf->useDefaultCSS2 = true;

```

## Secondary default CSS values used mPDF 2.0 - 2.1

```php
<?php

var $defaultCSS2 = array(
    'BODY' => array(
        'FONT-FAMILY' => 'sans-serif',
    ),
    'A' => array(
        'COLOR' => '#000066',
        'TEXT-DECORATION' => '',
    ),
    'TABLE' => array(
        'BORDER-COLLAPSE' => 'collapse',
    ),
    'THEAD' => array(
        'VERTICAL-ALIGN' => 'bottom',
        'TEXT-ALIGN' => 'center',
        'FONT-WEIGHT' => 'bold',
    ),
    'TFOOT' => array(
        'TEXT-ALIGN' => 'center',
        'FONT-WEIGHT' => 'bold',
    ),
    'TH' => array(
        'TEXT-ALIGN' => '',
        'PADDING-LEFT' => '0.35em',
        'PADDING-RIGHT' => '0.35em',
        'PADDING-TOP' => '0.35em',
        'PADDING-BOTTOM' => '0.35em',
        'VERTICAL-ALIGN' => 'top',
    ),
    'TD' => array(
        'PADDING-LEFT' => '0.35em',
        'PADDING-RIGHT' => '0.35em',
        'PADDING-TOP' => '0.35em',
        'PADDING-BOTTOM' => '0.35em',
        'VERTICAL-ALIGN' => 'top',
    ),
    'IMG' => array(
        'MARGIN' => '0.2em',
        'VERTICAL-ALIGN' => 'middle',
    ),
);

```
