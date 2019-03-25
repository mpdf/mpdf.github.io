---
layout: page
title: annotation
parent_title: HTML control tags
permalink: /reference/html-control-tags/annotation.html
modification_time: 2015-08-05T12:01:19+00:00
---

(mPDF &ge; 2.2)

annotation – Add an Annotation to the document

# Description

&lt;**annotation** <span class="parameter">$content</span>
[ <span class="parameter">$pos-x</span> ]
[ <span class="parameter">$pos-y</span> ]
[ <span class="parameter">$icon</span> ]
[ <span class="parameter">$author</span> ]
[ <span class="parameter">$subject</span> ]
[ <span class="parameter">$opacity</span> ]
[ <span class="parameter">$color</span> ]
[ <span class="parameter">$popup</span> ]
[ <span class="parameter">$file</span> ] /&gt;

Adds an Annotation to the document. An annotation is like a Tooltip on a webpage. The Annotation marker, like those
of "Sticky Notes" in Adobe Reader. When the reader passes the cursor over, it will display a popup text box.

The exact position on the page can be specified using <span class="parameter">$x</span> and
<span class="parameter">$y</span>, or left to position automatically. If <span class="parameter">$x</span> and
<span class="parameter">$y</span> are not specified, the Annotation will be inserted at the current position of
writing in the document. The <span class="parameter">$x</span> position (horizontal) can be overridden by the variable
<a href="{{ "/reference/mpdf-variables/annotmargin.html" | prepend: site.baseurl }}">annotMargin</a>, which can be used
to force the Annotation marker to display in the right margin.

The attribute <span class="parameter">$file</span> can be used to specify a file (any type) which is to be embedded
inside the PDF document.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** All text to do with an annotation (text, author, subject) is rendered with the system font
  and can therefore contain any Unicode character even if the document font restricts to a specific codepage.
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** To embed files, the `allowAnnotationFiles` config key has to be set to `true`.
</div>

<div class="alert alert-danger" role="alert" markdown="1">
  **Warning:** Embedding files is disabled by default, when enabling it, always ensure the path of the file
  is restricted to harmless files, otherwise the PDF could leak your system files.
</div>

Annotations cannot be moved or deleted by the reader.

# Parameters

<span class="parameter">$content</span>

: This parameter specifies the text to appear in the popup text box.

  <span class="parameter">$content</span> cannot contain any of the characters: `<`, `>`, `&`, `'` or `"` and must use
  the appropriate HTML entities e.g. `<annotation content="This is &lt; 40" />`

  It is recommended that you use `htmlspecialchars('Content', ENT_QUOTES)` for this.

<span class="parameter">$pos-x</span>

: Sets the <span class="parameter">$x</span> position of the (bottom left edge of the) Annotation marker, set in mm from
  the left of the page.

  <span class="smallblock">BLANK</span> or omitted or `0` uses the current writing position on the page, unless overridden
  by <a href="{{ "/reference/mpdf-variables/annotmargin.html" | prepend: site.baseurl }}">$annotMargin</a>.

<span class="parameter">$pos-y</span>

: Sets the <span class="parameter">$y</span> position of the (bottom left edge of the) Annotation marker, set in mm
  from the top of the page. When Annotation markers are used within the text
  (<a href="{{ "/reference/mpdf-variables/annotmargin.html" | prepend: site.baseurl }}">annotMargin</a>
  = `false`), the marker is raised by the current lineheight to appear above the text.

  <span class="smallblock">BLANK</span> or omitted or `0` uses the current writing position on the page.

<span class="parameter">$icon</span>

: Sets the appearance of the Annotation marker.

  <span class="smallblock">BLANK</span> or omitted uses Default: i.e. `'Note'`

  **Values** (case sensitive)

  - `'Note'`
  - `'Comment'`
  - `'Help'`
  - `'Insert'`
  - `'Key'`
  - `'NewParagraph'`
  - `'Paragraph'`

  Default: `'Note'`

  <div class="alert alert-info" role="alert" markdown="1">
    **Note:** The default is `"Comment"` when using Annotations from HTML markup
    `<span title="">` when <a href="{{ "/reference/mpdf-variables/title2annots.html" | prepend: site.baseurl }}">title2annots</a>
    is `true`.
  </div>

<span class="parameter">$author</span>

: This specifies the name of the Author which will appear at the top of the popup text box.

  Default: <span class="smallblock">BLANK</span>

<span class="parameter">$subject</span>

: This specifies the text to appear in the Annotation properties.

  Default: <span class="smallblock">BLANK</span>

<span class="parameter">$opacity</span>

: Sets the opacity of the Annotation marker. Values must be greater than `0` and &le; `1`.

  <span class="smallblock">BLANK</span> or omitted or `0`: sets the opacity to the value of
  <a href="{{ "/reference/mpdf-variables/annotopacity.html" | prepend: site.baseurl }}">annotOpacity</a>
  (Default: `0.5`), unless
  <a href="{{ "/reference/mpdf-variables/annotmargin.html" | prepend: site.baseurl }}">annotMargin</a> forces the
  Annotations to appear in the margin, when the default is `1`.

<span class="parameter">$color</span>

: Specify the colour of the Annotation marker background.

  **Values**

  Any valid CSS color recognised by mPDF:

  - `"#RRGGBB"`
  - `"#RGB"`
  - `"rgb(255,255,255)"`
  - named colours such as `"white"`, `"yellow"`, `"blue"` etc.

  Default: `"Yellow"`

<span class="parameter">$popup</span>

: Specify whether to show the popup box for the annotation when the PDF document is opened, and optional
  specify its dimensions and/or position.

  <span class="smallblock">BLANK</span> or omitted or `0`  - the popup box is not shown.

  Any other value forces the popup box to appear when the document is opened.

  **Values**

  `<nn nn>` - A string of 2 numbers (separated by spaces) will set the X and Y position in mm e.g. `'30 30'`
  will show a popup box with the top left corner 30mm from the top of the page and 30mm from the left of the page.

  `<nn nn nn nn>` - A string of 4 numbers (separated by spaces) will set the X and Y position and also the
  width and height in mm e.g. `'30 30 80 50'` will show a popup box with the top left corner 30mm from the top of the page
  and 30mm from the left of the page, a width of 80mm and a height of 50mm.

  Note that the PDF Reader (e.g. Adobe Reader) may reposition the popup box as it pleases.

<span class="parameter">$file</span>

: Path to the file to embed in the PDF document.

  Default: <span class="smallblock">BLANK</span>

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
  <td>2.2</td>
  <td>The function was added.</td>
</tr>
<tr>
  <td>2.4</td>
  <td markdown="1">
  Annotations cannot be moved or deleted.

  (function `SetUserRights()` removed)
  </td>
</tr>
<tr>
  <td>4.3</td>
  <td>Attribute <span class="parameter">$popup</span> was added</td>
</tr>
<tr>
  <td>5.1</td>
  <td>Attribute <span class="parameter">$file</span> was added</td>
</tr>
<tr>
  <td>7.0</td>
  <td markdown="1">
Attribute <span class="parameter">$file</span> is ignored unless mPDF `allowAnnotationFiles` config key is set to `true`
  </td>
</tr>
</tbody>
</table>

# Examples

## Example #1

```php
<?php
$mpdf = new \Mpdf\Mpdf();

$html =
'This is a paragraph about violas<annotation content="Violas are like big violins" /> about
which I know very little.';

$mpdf->WriteHTML($html);
$mpdf->Output();

```

## Example #2

```php
<?php
$mpdf = new \Mpdf\Mpdf();

// The Annotation markers will appear 10mm in from the right margin of the page
$mpdf->annotMargin = 10;

// The Annotation markers need no transparency as they appear in the margins
$mpdf->annotOpacity = 1;

$html =
'This is a paragraph about violas<annotation content="Violas are like big violins" /> about
which I know very little.';

$mpdf->Output();

```

# See Also

- <a href="{{ "/reference/mpdf-variables/annotmargin.html" | prepend: site.baseurl }}">annotMargin</a> - Specify the x (horizontal) placement of Annotation markers
- <a href="{{ "/reference/mpdf-variables/annotopacity.html" | prepend: site.baseurl }}">annotOpacity</a> - Specifiy the default opacity used for Annotation markers
- <a href="{{ "/reference/mpdf-functions/annotation.html" | prepend: site.baseurl }}">Annotation()</a> - PHP equivalent to &lt;annotation&gt;

- <a href="{{ "/reference/mpdf-variables/title2annots.html" | prepend: site.baseurl }}">title2annots</a> - Convert all HTML element <span class="parameter">$title</span> attributes to Annotations
