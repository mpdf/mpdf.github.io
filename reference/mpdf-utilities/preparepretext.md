---
layout: page
title: preparePreText()
parent_title: mPDF Utilities
permalink: /reference/mpdf-utilities/preparepretext.html
modification_time: 2015-08-05T12:02:43+00:00
---

(htmltoolkit &ge; 2.4, mPDF < 7.0)

PreparePreText – Prepares text to be output ignoring the HTML markup

# Description

string **preparePreText** ( string <span class="parameter">$text</span> [, string <span class="parameter">$formfeed</span> ])

Prepares text to be output ignoring the HTML markup. This is useful to output a large text file (e.g. a PHP script file)
using <a href="{{ "/reference/mpdf-functions/writehtml.html" | prepend: site.baseurl }}">WriteHTML()</a>. This will
surround the text with `<pre>` tags whilst preventing `<pre>` tags included in the text from being parsed. It
also allows use of a text string marker (<span class="parameter">$formfeed</span>) to be replaced by a formfeed in the
output file.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** Prior to mPDF 5.1 you should use the
  <span class="parameter">$mode </span>parameter of
  <a href="{{ "/reference/mpdf-functions/writehtml.html" | prepend: site.baseurl }}">WriteHTML()</a> as `\Mpdf\HTMLParserMode::HTML_BODY`
  to avoid parsing the text for style tags. See example below.
</div>

# Parameters

<span class="parameter">$text</span>

: This parameter specifies the text string to prepare.

<span class="parameter">$formfeed</span>

: <span class="parameter">$formfeed</span> specifies the string to be replaced by a formfeed in the output file.

  Default: `"//FF//"`

# Return value

Returns a text string.

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
  <td>2.4</td>
  <td>Function was added.</td>
</tr>
<tr>
  <td>7.0</td>
  <td>Function was removed.</td>
</tr>
</tbody>
</table>

# Examples

```php
<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';

$text = file_get_contents('scriptfile.php');
$text = preparePreText($text);

// Default spaces/tab in mPDF is 8 as specified by HTML spec.
// Notepad and other text editors use a value of 6
$mpdf->tabSpaces = 6;

// If 'scriptfile.php' is iso-8859-1 or win-1252 encoded, use
$mpdf->allow_charset_conversion = true;
$mpdf->charset_in = 'windows-1252';

$mpdf->WriteHTML($text, \Mpdf\HTMLParserMode::HTML_BODY);

$mpdf->Output();

```

# See Also

- <a href="{{ "/reference/mpdf-functions/setdoctemplate.html" | prepend: site.baseurl }}">WriteHTML()</a> - Write HTML code to a PDF file
- <a href="{{ "/reference/mpdf-variables/tabspaces.html" | prepend: site.baseurl }}">tabSpaces</a> - Specifies the number of spaces to substitue for a <span class="smallblock">TAB</span> character
- <a href="{{ "/reference/mpdf-variables/allow-charset-conversion.html" | prepend: site.baseurl }}">allow_charset_conversion</a> - Parse the character set of any input text from the HTML, or allow setting of the value <span class="parameter">$charset_in</span>
- <a href="{{ "/reference/mpdf-variables/charset-in.html" | prepend: site.baseurl }}">charset_in</a> - Define the character encoding of any input HTML
