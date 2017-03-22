---
layout: page
title: WriteHTML()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/writehtml.html
modification_time: 2015-08-05T12:01:16+00:00
---

(mPDF >= 1.0)

WriteHTML — Write HTML code to the document

# Description

void **WriteHTML** ( string <span class="parameter">$html</span> [, int <span class="parameter">$mode</span>
[, boolean <span class="parameter">$initialise</span> [, boolean <span class="parameter">$close</span> ]]])

Write <span class="parameter">$html</span> code to the document.

<div class="alert alert-info" role="alert" markdown="1">
	**Note:** Prior to mPDF 4.2 a fatal error was caused if
	<span class="parameter">$html</span> was passed as a <span class="smallblock">NULL</span> value,
	<span class="smallblock">FALSE</span> or an undefined variable.
</div>

# Parameters

<span class="parameter">$html</span>

UTF-8 encoded HTML code to write to the document.

<span class="parameter">$mode</span>

Controls what parts of the <span class="parameter">$html</span> code is parsed.

**Values**

0 - Parses a whole <span class="parameter">$html</span> document

1 - Parses the <span class="parameter">$html</span> as styles and stylesheets only

2 - Parses the <span class="parameter">$html</span> as output elements only

3 - (For internal use only - parses the <span class="parameter">$html</span> code without writing to document)

4 - (For internal use only - writes the <span class="parameter">$html</span> code to a buffer)

<span class="smallblock">DEFAULT</span>: 0

**Mode #0** (<span class="smallblock">DEFAULT</span>)

Metadata:

- title is read from &lt;title&gt;...&lt;/title&gt; tags

- subject, keywords and author are read from &lt;meta ...

Charset:

- if <span class="parameter">$allow_charset_conversion</span> = <span class="smallblock">TRUE</span> and a charset=
  statement is present, mPDF will attempt to convert all the following HTML input from the specified charset to UTF-8

CSS styles:

- any CSS found between &lt;style&gt;...&lt;/style&gt; tags

- stylesheets specified by @import url(*.css)

- stylesheets specified by &lt;link rel="stylesheet" href=""

NB Stylesheets with media="all" or media ="screen" will always be parsed.

The variable <span class="parameter">$disablePrintCSS</span> will determine whether stylesheets media="print" are
parsed or not.

Anything between &lt;style&gt; tags is then discarded.

If &lt;body&gt; tags are found, all <span class="parameter">$html</span> outside these tags are discarded, and the
rest is parsed as content for the document.

If no &lt;body&gt; tags are found, all remaining <span class="parameter">$html</span> is parsed as content.

**Mode #1**

The html input is only parsed as CSS style information only.

The code does not have to be surrounded by &lt;style&gt; tags, so you can pass the contents of a stylesheet directly -
see Example #1.

**Mode #2**

If &lt;body&gt; tags are found, all <span class="parameter">$html</span> outside these tags are discarded, and the
rest is parsed as content for the document.

If no &lt;body&gt; tags are found, all <span class="parameter">$html</span> is parsed as content.

Prior to mPDF 4.2 the default CSS was not parsed when using <span class="parameter">$mode</span> #2

<span class="parameter">$initialise</span>

Set <span class="smallblock">TRUE</span> or <span class="smallblock">FALSE</span> to determine whether to initialise
all buffers, starting all HTML elements from new. See example 2 for use. You must start with a WriteHTML() that calls
<span class="parameter">$initialise</span>=<span class="smallblock">TRUE</span>

<span class="smallblock">DEFAULT</span>: <span class="smallblock">TRUE</span>

<span class="parameter">$close</span>

Set <span class="smallblock">TRUE</span> or <span class="smallblock">FALSE</span> to specify whether all HTML
elements are closed, and buffers cleared. See example 2 for use. You must end with a WriteHTML() that calls
<span class="parameter">$close</span>=<span class="smallblock">TRUE</span>

<span class="smallblock">DEFAULT</span>: <span class="smallblock">TRUE</span>

#

# Changelog

<table class="table"> <thead>
<tr> <th>Version</th> <th>Description</th> </tr>
</thead> <tbody>
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
<td>Accepts <span class="smallblock">NULL</span> string as paramter without error.

Parses default CSS when using <span class="parameter">$mode</span> as 2</td>
</tr>
</tbody> </table>

# Examples

## Example #1

{% highlight php %}
<?php

$mpdf = new \Mpdf\Mpdf();

$stylesheet = file_get_contents('style.css');

$mpdf->WriteHTML($stylesheet, 1);

$mpdf->WriteHTML('Hello World', 2);

$mpdf->Output();
{% endhighlight %}

## Example #2

{% highlight php %}
<?php

// You can write parts of HTML elements by using the initialise and close parameters:

$mpdf->WriteHTML('This is the beginning...', 2, true, false);
$mpdf->WriteHTML('...this is the middle...', 2, false, false);
$mpdf->WriteHTML('...and this is the end', 2, false, true);
{% endhighlight %}

# See Also

- <a href="{{ "/reference/mpdf-variables/allow-charset-conversion.html" | prepend: site.baseurl }}">allow_charset_conversion</a> - attempts to read any charset declaration in the HTML code
- <a href="indexb1bd.html?tid=230">disablePrintCSS</a> - prevents stylesheets set for print media being parsed
- <a href="{{ "/reference/mpdf-variables/ignore-invalid-utf8.html" | prepend: site.baseurl }}">ignore_invalid_utf8</a> - prevents mPDF from failing if text contains invalid UTF-8 characters
- <a href="{{ "/reference/mpdf-variables/charset-in.html" | prepend: site.baseurl }}">charset_in</a> - specify the input text character set if not UTF-8
- <a href="{{ "/reference/mpdf-variables/bidirectional.html" | prepend: site.baseurl }}">biDirectional</a> - specify whether mPDF should test for <acronym title="Right-to-Left document, used for Hebrew and Arabic languages">RTL</acronym> text
- <a href="{{ "/reference/mpdf-variables/allow-html-optional-endtags.html" | prepend: site.baseurl }}">allow_html_optional_endtags</a> -specify whether mPDF should try to accommodate optional HTML endtags
- <a href="{{ "/reference/mpdf-variables/restoreblockpagebreaks.html" | prepend: site.baseurl }}">restoreBlockPagebreaks</a> - keep current HTML tags/CSS styles active when forcing a page-break or formfeed
