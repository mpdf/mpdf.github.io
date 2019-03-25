---
layout: page
title: debug
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/debug.html
modification_time: 2017-09-25T18:01:50+00:00
---

(mPDF &ge; 3.1)

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** This variable was partially succeeded by usage of `\Psr\Log\LogInterface` in 7.0
</div>

debug – increase severity of error messages - throw a `\Mpdf\MpdfException` where an error is possible

# Description

void **debug**

Specify whether to show debugging messages. If you are having problems with mPDF, set
<span class="parameter">$debug</span> to `true` to throw a `\Mpdf\MpdfException` where an error that may otherwise be suppressed is possible.

# Values

<span class="parameter">$debug</span> =  `true`\|`false`

**Values**

* `true`: enable debugging
* `false`: disable debugging

Default: `false`

# Changelog

<table class="table">
<thead>
<tr>
  <th>Version</th>
  <th>Description</th>
</tr>
</thead>
<tbody>
<tr>
  <td>3.1</td>
  <td>Variable was added.</td>
</tr>
</tbody>
</table>

# Examples

Example #1

```php
<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf(['debug' => true]);

$mpdf->WriteHTML("Hello World");
$mpdf->Output();

```

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** This was introduced in mPDF 3.1 as the method used by mPDF to catch error messages
  inadvertently picked up suppressed errors such as those caused by `@fopen()`  - even though the @ is deliberately
  there to prevent interruption of the script.
</div>

# See Also

- <a href="{{ "/installation-setup/logging.html" | prepend: site.baseurl }}">Logging</a>
- <a href="{{ "/reference/mpdf-variables/showimageerrors.html" | prepend: site.baseurl }}">showImageErrors</a> - show/hide error reporting for problems with Images
- <a href="{{ "/reference/mpdf-variables/allow-output-buffering.html" | prepend: site.baseurl }}">allow_output_buffering</a> - prevent error mesages when using output buffering

