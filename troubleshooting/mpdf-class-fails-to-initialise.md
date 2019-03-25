---
layout: page
title: mPDF class fails to Initialise
parent_title: Troubleshooting
permalink: /troubleshooting/mpdf-class-fails-to-initialise.html
modification_time: 2015-08-05T12:00:36+00:00
---

(mPDF < 6.1)

Older versions of mPDF still retains use of a constructor function with the same name as the class i.e.

```php
<?php
class mPDF {

function mPDF(...)

```

This means it is still compatible with PHP4, and is backwards compatible using PHP5 -
**UNLESS** you are using namespaces in PHP &ge; 5.3

In this case you will need to upgrade at least to mPDF 6.1
