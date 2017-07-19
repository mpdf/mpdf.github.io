---
layout: page
title: title2annots
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/title2annots.html
modification_time: 2015-08-05T12:02:33+00:00
---

<span class="parameter">title2annots</span> = `true`\|`false`

Default: `false`

Convert the title attribute from all in-line elements to annotations. In-line elements include `span`, `acronym`, `is`, 
`delete`, `cite`, `abbr`, `q`, `samp`, `code`, `var`; also picks up from `img` element, but not block elements such 
as `div`, `p`, `h1`-`6`, or `form` elements, nor any `table` elements.

# See Also

* <a href="{{ "/reference/mpdf-functions/annotation.html" | prepend: site.baseurl }}">Annotation()</a> - Add an Annotation to the document
* &lt;<a href="{{ "/reference/html-control-tags/annotation.html" | prepend: site.baseurl }}">annotation</a>&gt; - Custom HTML tag - equivalent to **Annotation**

