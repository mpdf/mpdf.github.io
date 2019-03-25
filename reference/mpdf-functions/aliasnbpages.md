---
layout: page
title: AliasNbPages()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/aliasnbpages.html
modification_time: 2015-08-05T12:00:40+00:00
---

(mPDF &ge; 1.0)

AliasNbPages – Defines the placeholder used to insert total number of pages into the document

# Description

void **AliasNbPages** ( string <span class="parameter">$text</span> )

Set the value for the variable string <a href="{{ "/reference/mpdf-variables/aliasnbpg.html" | prepend: site.baseurl }}">aliasNbPg</a>
which is used as a placeholder used to insert total number of pages into the document.

# Parameters

<span class="parameter">$text</span>

: Defines the text for the variable <span class="parameter">$aliasNbPg</span>.

  Default: `'{nb}'`

# Examples

Example #1

```php
<?php
$mpdf = new \Mpdf\Mpdf();

$mpdf->AliasNbPages('[pagetotal]');
$mpdf->WriteHTML('
There are [pagetotal] pages in this document
');

$mpdf->Output();


```

Example #2

```php
<?php
$mpdf->AliasNbPages('[pagetotal]');

is the exact equivalent of:

$mpdf->aliasNbPg = '[pagetotal]';

```

# See Also

* <a href="{{ "/what-else-can-i-do/replaceable-aliases.html" | prepend: site.baseurl }}">Replaceable Aliases</a>
* <a href="{{ "/reference/mpdf-functions/aliasnbpagegroups.html" | prepend: site.baseurl }}">AliasNbPageGroups()</a> - Sets the placeholder alias for the total number of pages in a document or page group
