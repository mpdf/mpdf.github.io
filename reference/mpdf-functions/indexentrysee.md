---
layout: page
title: IndexEntrySee()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/indexentrysee.html
modification_time: 2015-08-05T12:00:48+00:00
---

(mPDF &ge; 2.2)

IndexEntrySee – Insert a cross-reference entry for the document Index

# Description

void **IndexEntrySee** (
string <span class="parameter">$content</span> ,
string <span class="parameter">$see_content</span>
)

Insert a cross-reference entry for the document Index i.e. "Dromedary - see Camel".

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** The Index must be generated explicity at the end of the document using
  <a href="{{ "/reference/mpdf-functions/tocpagebreak.html" | prepend: site.baseurl }}">CreateIndex()</a>
  at some point before <a href="{{ "/reference/mpdf-functions/output.html" | prepend: site.baseurl }}">Output()</a>
  is called.
</div>

# Parameters

<span class="parameter">$content</span>

: This parameter sets the text as it will appear in the Index entry. Text should be UTF-8 encoded. Text entries
  passed in the form `Subject:Subcategory` will appear in the Index as "Subject, Subcategory".

  <span class="smallblock">REQUIRED</span>

<span class="parameter">$see_content</span>

: This parameter sets the text used as the cross-reference. Text should be UTF-8 encoded. Text entries passed in the
  form `Subject:Subcategory` will appear in the Index as "Subject, Subcategory"

  <span class="smallblock">REQUIRED</span>

# Examples

```php
<?php
$mpdf->IndexEntry("Dromedary", "Camel:types");

```

This will produce an entry in the Index under 'Dromedary' appearing as:

Dromedary - see Camel, types

# See Also

- <a href="{{ "/reference/mpdf-functions/indexentry.html" | prepend: site.baseurl }}">IndexEntry()</a> - Mark an Index entry in the document
- &lt;<a href="{{ "/reference/html-control-tags/tocentry.html" | prepend: site.baseurl }}">indexentry</a>&gt; - Mark an Index entry in the document
- <a href="{{ "/reference/mpdf-functions/tocpagebreak.html" | prepend: site.baseurl }}">CreateIndex()</a> - Generate a document Index

