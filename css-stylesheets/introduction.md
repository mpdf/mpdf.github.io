---
layout: page
title: Introduction
parent_title: CSS & Stylesheets
permalink: /css-stylesheets/introduction.html
modification_time: 2015-08-05T11:59:56+00:00
---

Default CSS styles are defined in `defaultCSS` 
<a href="{{ "/configuration/configuration-v7-x.html" | prepend: site.baseurl }}">configuration variable</a> 
which is based on the recommended default values for HTML4 - 
<a href="http://www.w3.org/TR/CSS21/sample.html">http://www.w3.org/TR/CSS21/sample.html</a> 

The appearance of a default mPDF document based on HTML should approximate to its appearance in a browser.

The following are supported (in order of ascending priority - lower ones in list overwrite higher):

- HTML attributes e.g. `<div align="center">` 
  (see <a href="{{ "/html-support/html-attributes.html" | prepend: site.baseurl }}">supported HTML attributes</a>)
- CSS Stylesheets - included in header of HTML document or as `<link />` or as `@import()`
    - html tags e.g. `p { font-size:12pt; color:#880000; }`
    - class e.g. `.stylename { font-size:9pt; }`
    - id e.g. `#style { font-size:9pt; }`
- In-line CSS style e.g. `<p style="font-family:monospace;">`

Note: Prior to mPDF 5.x HTML attributes overrode CSS styles.

CSS attributes, used in stylesheets or in-line, can define:

- most tags/elements e.g. `div`, `p`, `body`, `table`, `span`
- class-names e.g. `p.mystylename { font-size:9pt; }`
- id e.g. `div#style { font-size:9pt; }`

Tag, class and id can share a similar name e.g. `p {...}` `.p {...}` and `#p {...}` are handled uniquely

There is some support for 'cascaded' CSS e.g. `div.topic table.type1 td {...}`

- `table`, `tr`, `th` and `td` will only be recognised as the last items (as above)
- only 'block' elements (not 'in-line') can be included i.e. `div.style1 a {...}` will not work, nor will `a#class1 {...}`

For a full list of CSS attributes supported see 
<a href="{{ "/css-stylesheets/supported-css.html" | prepend: site.baseurl }}">Supported CSS</a>

Note the OUTLINE style (which is not supported in most browsers) does work in mPDF e.g.

`<span style="outline-width:thin|medium|thick; outline-color:#rrggbb|invert">`

# Using a stylesheet

The `WriteHTML()` method takes second parameter i.e. <span class="parameter">$mode</span>. 
See <a href="{{ "/reference/mpdf-functions/writehtml.html" | prepend: site.baseurl }}">WriteHTML()</a> 
for details of this and other parameters.

<span class="parameter">$mode</span>

**Values**

`0`
: Use this (default) if the text you pass is a complete HTML page including head and body and style definitions.

`1`
: Use this when you want to set a CSS stylesheet - see example below

`2`
: Write HTML code without the <head> information. Does not need to be contained in <body>

## Example using a stylesheet

```php
<?php

$stylesheet = file_get_contents('style.css');

$mpdf->WriteHTML($stylesheet,\Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->WriteHTML($html,\Mpdf\HTMLParserMode::HTML_BODY);

```

# Media selectors

mPDF supports media-dependent CSS styles as:

```php
@media print {
    p { 
        color: red; 
    }
}

<style media="print">
    p { 
        color: red; 
    }
</style>

<link rel="stylesheet" media="print" href="..." />

```

By default mPDF will match stylesheets set for "print" or "all" media. This can be changed by the configurable 
variable <a href="{{ "/reference/mpdf-variables/cssselectmedia.html" | prepend: site.baseurl }}">CSSselectMedia</a>.

