---
layout: page
title: columnbreak
parent_title: HTML control tags
permalink: /reference/html-control-tags/columnbreak.html
modification_time: 2015-08-05T12:01:20+00:00
---

(mPDF &ge; 1.0)

columnbreak – Start a new Column

# Description

&lt;**columnbreak** /&gt;

Start a new Column in the document. Columns must be set using
<a href="{{ "/reference/mpdf-functions/setcolumns.html" | prepend: site.baseurl }}">SetColumns()</a> or
&lt;<a href="{{ "/reference/html-control-tags/columns.html" | prepend: site.baseurl }}">columns</a>&gt;. Height
justification for the Columns is disabled when column breaks are set explicitly.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** Columns are incompatible with (and automatically
  disable): borders for block-level elements (DIV, P etc), table rotation, and collapsible margins for blocks e.g.
  top and bottom margins for a DIV will not collapse (default) at the top/bottom of a column.
</div>

# Attributes

No attributes

# Examples

```php
<?php

$mpdf = new \Mpdf\Mpdf();

$mpdf->SetColumns(2);

$mpdf->WriteHTML('
Some text...
<columnbreak />
Next column...
');

$mpdf->Output();

```

# See Also

- <a href="{{ "/reference/mpdf-functions/bookmark.html" | prepend: site.baseurl }}">AddColumn()</a> - PHP equivalent to `<columnbreak>`
- <a href="{{ "/reference/mpdf-functions/setcolumns.html" | prepend: site.baseurl }}">SetColumns()</a> - Control the use of multiple columns on the page
- &lt;<a href="{{ "/reference/html-control-tags/columns.html" | prepend: site.baseurl }}">columns</a>&gt; - Control the use of multiple columns on the page
