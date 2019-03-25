---
layout: page
title: dottab
parent_title: HTML control tags
permalink: /reference/html-control-tags/dottab.html
modification_time: 2015-08-05T12:01:21+00:00
---

(mPDF &ge; 4.3)

dottab – Insert dots to following (right-aligned) text

# Description

&lt;**dottab** [ <span class="parameter">$outdent</span> ] /&gt;

Insert a string of dots to fill the space to the text which follows `<dottab />`, which is right-aligned. This
gives the appearance seen in e.g. a table of contents, or a menu with prices. A minimum of 3 dots (with spaces either
side) is inserted. If the text which follows the `<dottab />` will not fit on a single line, the default tab of
`' ... '` is added, and text is not right-aligned.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** If a space is required after the `<dottab>` use a non-breaking space `&nbsp;`
</div>

From mPDF 5.7+ CSS styles can be applied to `<dottab>` as for an inline element.

# Attributes

<span class="parameter">$outdent</span>

: Takes any valid CSS <span class="smallblock">LENGTH</span>  e.g. `"2em"`

  Default: `'0'`

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
  <td>4.3</td>
  <td>This tag was added.</td>
</tr>
<tr>
  <td>5.7</td>
  <td><span class="parameter">$outdent</span> was added</td>
</tr>
</tbody> </table>

# Examples

Example #1

```php
<?php

$menuitem = 'Chilli con carne <dottab />&amp;nbsp;£7.95';

$mpdf->WriteHTML($menuitem);

```

Example #2

```php
<?php
// To right-align the text which follows the <dottab> whilst indenting any preceding lines:

$menuitem = 'Chilli con carne etc. etc. <dottab outdent="3em" />&amp;nbsp;£7.95';

```

