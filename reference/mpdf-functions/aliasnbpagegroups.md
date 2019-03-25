---
layout: page
title: AliasNbPageGroups()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/aliasnbpagegroups.html
modification_time: 2015-08-05T12:00:41+00:00
---

(mPDF &ge; 2.0)

AliasNbPageGroups – Defines the placeholder used to insert total page number of the page group or document into the document

# Description

void **AliasNbPageGroups** ( string <span class="parameter">$text</span> )

Set the value for the variable string <a href="{{ "/reference/mpdf-variables/aliasnbpggp.html" | prepend: site.baseurl }}">aliasNbPgGp</a>
which is used as a placeholder used to insert total page number into the document. If you have reset the
page numbering with <a href="{{ "/reference/mpdf-functions/addpage.html" | prepend: site.baseurl }}">AddPage()</a>
or &lt;<a href="{{ "/reference/html-control-tags/pagebreak.html" | prepend: site.baseurl }}">pagebreak</a>&gt; the
total number of pages in the current page group will be used (up to where the numbering is reset) rather the total
number of pages in the whole document.

# Parameters

<span class="parameter">$text</span>

: Defines the text for the variable <span class="parameter">$aliasNbPgGp</span>.

  Default: `'{nbpg}'`

# Examples

Example #1

```php
<?php
$mpdf = new \Mpdf\Mpdf();

$mpdf->AliasNbPageGroups('[pagetotal]');
$mpdf->WriteHTML('
There are [pagetotal] pages in this page group
');

$mpdf->Output();


```

Example #2

```php
<?php
$mpdf->AliasNbPageGroups('[pagetotal]');

is the exact equivalent of:

$mpdf->aliasNbPgGp = '[pagetotal]';

```

# See Also

* <a href="{{ "/what-else-can-i-do/replaceable-aliases.html" | prepend: site.baseurl }}">Replaceable Aliases</a>
* <a href="{{ "/reference/mpdf-functions/aliasnbpages.html" | prepend: site.baseurl }}">AliasNbPages()</a> - Sets the placeholder alias for the total number of pages in the document
