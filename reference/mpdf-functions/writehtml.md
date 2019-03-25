---
layout: page
title: WriteHTML()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/writehtml.html
modification_time: 2015-08-05T12:01:16+00:00
---

(mPDF &ge; 1.0)

WriteHTML — Write HTML code to the document

# Description

void **WriteHTML** (
string <span class="parameter">$html</span>
[, int <span class="parameter">$mode</span>
[, boolean <span class="parameter">$initialise</span>
[, boolean <span class="parameter">$close</span> ]]])

Write <span class="parameter">$html</span> code to the document.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** Prior to mPDF 4.2 a fatal error was caused if
  <span class="parameter">$html</span> was passed as a `null` value,
  `false` or an undefined variable.
</div>

# Parameters

<span class="parameter">$html</span>

: UTF-8 encoded HTML code to write to the document.

<span class="parameter">$mode</span>

: Controls what parts of the <span class="parameter">$html</span> code is parsed. Use class constants from
`\Mpdf\HTMLParserMode` for better readability and understanding.

  **Values**

  * `\Mpdf\HTMLParserMode::DEFAULT_MODE` - Parses a whole <span class="parameter">$html</span> document
  * `\Mpdf\HTMLParserMode::HEADER_CSS` - Parses the <span class="parameter">$html</span> as styles and stylesheets only
  * `\Mpdf\HTMLParserMode::HTML_BODY` - Parses the <span class="parameter">$html</span> as output elements only
  * `\Mpdf\HTMLParserMode::HTML_PARSE_NO_WRITE` - (For internal use only - parses the <span class="parameter">$html</span> code without writing to document)
  * `\Mpdf\HTMLParserMode::HTML_HEADER_BUFFER` - (For internal use only - writes the <span class="parameter">$html</span> code to a buffer)

  Default: `\Mpdf\HTMLParserMode::DEFAULT_MODE`

  **Values**:

  `\Mpdf\HTMLParserMode::DEFAULT_MODE`:

  Metadata:
  - title is read from `<title>...</title>` tags
  - subject, keywords and author are read from `<meta ...`

  Charset:
  - if `$allow_charset_conversion = true` and a `charset = ...`
    statement is present, mPDF will attempt to convert all the following HTML input from the specified charset to UTF-8

  CSS styles:
  - any CSS found between `<style>...</style>` tags
  - stylesheets specified by `@import url(*.css)`
  - stylesheets specified by `<link rel="stylesheet" href="" `

  NB Stylesheets with `media="all"` or `media ="screen"` will always be parsed.

  Anything between `<style>` tags is then discarded.

  If `<body>` tags are found, all <span class="parameter">$html</span> outside these tags are discarded, and the
  rest is parsed as content for the document.

  If no `<body>` tags are found, all remaining <span class="parameter">$html</span> is parsed as content.

  `\Mpdf\HTMLParserMode::HEADER_CSS`:

  The html input is only parsed as CSS style information only.

  The code does not have to be surrounded by `<style>` tags, so you can pass the contents of a stylesheet directly -
  see Example #1.

  `\Mpdf\HTMLParserMode::HTML_BODY`:

  If `<body>` tags are found, all <span class="parameter">$html</span> outside these tags are discarded, and the
  rest is parsed as content for the document.

  If no `<body>` tags are found, all <span class="parameter">$html</span> is parsed as content.

  Prior to mPDF 4.2 the default CSS was not parsed when using `$mode = \Mpdf\HTMLParserMode::HEADER_BODY`.

<span class="parameter">$initialise</span>

: Set `true` or `false` to determine whether to initialise
  all buffers, starting all HTML elements from new. See example #2 for use. You must start with a `WriteHTML()` that calls
  `$initialise = true`.

  Default: `true`


<span class="parameter">$close</span>

: Set `true` or `false` to specify whether all HTML
  elements are closed, and buffers cleared. See example #2 for use. You must end with a `WriteHTML()` that calls
  `$close = true`.

  Default: `true`



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
  <td>2.0</td>
  <td>Using WriteHTML without the <span class="parameter">$mode</span> parameter no longer clears any CSS styles already imported.</td>
</tr>
<tr>
  <td>2.1</td>
  <td>Parameters <span class="parameter">$initialise</span> and <span class="parameter">$close</span> introduced.</td>
</tr>
<tr>
  <td>4.2</td>
  <td markdown="1">
  Accepts `null` string as parameter without error.

  Parses default CSS when using <span class="parameter">$mode</span> as 2
  </td>
</tr>
</tbody>
</table>

# Examples

Example #1

```php
<?php
$mpdf = new \Mpdf\Mpdf();

$stylesheet = file_get_contents('style.css');
$mpdf->WriteHTML($stylesheet, \Mpdf\HTMLParserMode::HEADER_CSS);

$mpdf->WriteHTML('Hello World', \Mpdf\HTMLParserMode::HTML_BODY);

$mpdf->Output();

```

Example #2

```php
<?php
// You can write parts of HTML elements by using the initialise and close parameters:

$mpdf->WriteHTML('This is the beginning...', \Mpdf\HTMLParserMode::HTML_BODY, true, false);
$mpdf->WriteHTML('...this is the middle...', \Mpdf\HTMLParserMode::HTML_BODY, false, false);
$mpdf->WriteHTML('...and this is the end', \Mpdf\HTMLParserMode::HTML_BODY, false, true);

```
# See Also

- <a href="{{ "/reference/mpdf-variables/allow-charset-conversion.html" | prepend: site.baseurl }}">$allow_charset_conversion</a> - attempts to read any charset declaration in the HTML code
- <a href="{{ "/reference/mpdf-variables/ignore-invalid-utf8.html" | prepend: site.baseurl }}">$ignore_invalid_utf8</a> - prevents mPDF from failing if text contains invalid UTF-8 characters
- <a href="{{ "/reference/mpdf-variables/charset-in.html" | prepend: site.baseurl }}">$charset_in</a> - specify the input text character set if not UTF-8
- <a href="{{ "/reference/mpdf-variables/bidirectional.html" | prepend: site.baseurl }}">$biDirectional</a> - specify whether mPDF should test for <acronym title="Right-to-Left document, used for Hebrew and Arabic languages">RTL</acronym> text
- <a href="{{ "/reference/mpdf-variables/allow-html-optional-endtags.html" | prepend: site.baseurl }}">$allow_html_optional_endtags</a> - specify whether mPDF should try to accommodate optional HTML endtags
- <a href="{{ "/reference/mpdf-variables/restoreblockpagebreaks.html" | prepend: site.baseurl }}">$restoreBlockPagebreaks</a> - keep current HTML tags/CSS styles active when forcing a page-break or formfeed
