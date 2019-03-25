---
layout: page
title: restoreBlockPagebreaks
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/restoreblockpagebreaks.html
modification_time: 2015-08-05T12:02:23+00:00
---

(mPDF &ge; 2.3 && &le; 6.0)

# Description

boolean **restoreBlockPageBreaks**

Specifies whether or not to restore open HTML block elements after a forced pagebreak. When a pagebreak is forced by
<a href="{{ "/reference/mpdf-functions/addpage.html" | prepend: site.baseurl }}">AddPage()</a> or
&lt;<a href="{{ "/reference/html-control-tags/pagebreak.html" | prepend: site.baseurl }}">pagebreak</a>&gt;, mPDF by default
will close any HTML block elements, expecting the HTML code to start afresh after the pagebreak. If this value is set to
`true` mPDF will attempt to carry over any CSS style values for the current block elements
and continue after the pagebreak.

<div class="alert alert-danger" role="alert" markdown="1">
  **Note:** This variable was removed in mPDF 6.0  See
  <a href="{{ "/paging/page-breaks.html" | prepend: site.baseurl }}">Page Breaks</a> for more information
</div>

# Values

<span class="parameter">$restoreBlockPageBreaks</span> = `true`\|`false`

**Values**

* `true`: Restore block element properties after a pagebreak
* `false`: Do not restore block elements after a pagebreak

Default: `false`

Values of `1` or `0` can also be used

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
  <td>2.3</td>
  <td>The variable was added.</td>
</tr>
<tr>
  <td>6.0</td>
  <td>The variable was removed.</td>
</tr>
</tbody>
</table>

# Examples

```php
<?php
$mpdf = new \Mpdf\Mpdf();

$mpdf->restoreBlockPageBreaks = true;

$mpdf->WriteHTML('<div class="firstlevel"><div class="secondlevel">Hello World');
$mpdf->AddPage();
$mpdf->WriteHTML('Hello World</div></div>');

```

# See Also

- <a href="{{ "/reference/mpdf-functions/setwatermarktext.html" | prepend: site.baseurl }}">WriteHTML()</a> - Write HTML code to the document
- &lt;<a href="{{ "/reference/html-control-tags/formfeed.html" | prepend: site.baseurl }}">formfeed</a>&gt; - Equivalent to pagebreak with <span class="parameter">$restoreBlockPageBreaks</span> set to `true`
