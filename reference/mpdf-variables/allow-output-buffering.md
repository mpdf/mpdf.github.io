---
layout: page
title: allow_output_buffering
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/allow-output-buffering.html
modification_time: 2015-08-05T12:01:35+00:00
---

(mPDF &ge; 3.0)

# Description

boolean **allow_output_buffering**

When `true`, mPDF will ignore any content in the object buffer - `ob_get_contents()` -
when outputting the PDF file. By default, any buffered output will be treated as an error message and will abort the PDF
file output and display any errors to the browser.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** If the variable <span class="parameter">$debug</span>
  is set to `false` (default) this variable has no effect.
</div>

# Values

<span class="parameter">$allow_output_buffering</span> = `false`\|`true`

**Values**

* `false`: Any buffered output from the script
  will trigger an error message and abort production of the PDF file.
* `true`: Ignores any content in the object buffer when outputting the PDF file.

Default: `false`

# Usage

Set at beginning of document
```php
<?php
$mpdf = new \Mpdf\Mpdf([
    'debug' => true,
    'allow_output_buffering' => true
]);

```


# See Also

- <a href="{{ "/troubleshooting/error-messages.html" | prepend: site.baseurl }}">Error Messages</a>

