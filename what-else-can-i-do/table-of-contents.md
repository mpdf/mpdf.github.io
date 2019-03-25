---
layout: page
title: Table of Contents
parent_title: What Else Can I Do
permalink: /what-else-can-i-do/table-of-contents.html
modification_time: 2015-08-05T12:00:15+00:00
---

You can insert one or more tables of contents in the document using HTML or PHP code - see:

<a href="{{ "/reference/mpdf-functions/tocpagebreak.html" | prepend: site.baseurl }}">TOCpagebreak()</a> or
&lt;<a href="{{ "/reference/html-control-tags/tocpagebreak.html" | prepend: site.baseurl }}">tocpagebreak</a>&gt;
will insert a Table of Contents (ToC) at the current position.

<a href="{{ "/reference/mpdf-functions/toc-entry.html" | prepend: site.baseurl }}">TOC_Entry()</a> or
&lt;<a href="{{ "/reference/html-control-tags/tocentry.html" | prepend: site.baseurl }}">tocentry</a>&gt; can be used
to mark entries for the <acronym title="Table of Contents">ToC</acronym> .

From mPDF &ge; 5.7, CSS styles can be used to control layout of the ToC.

At the end of the document, the ToC is generated, creating HTML code (internally) which looks like this:

```html
<div class="mpdf_toc" id="mpdf_toc_0">
    <div class="mpdf_toc_level_0">
        <a class="mpdf_toc_a" href="#__mpdfinternallink_1">
            <span class="mpdf_toc_t_level_0">Section 1</span>
        </a>
        <dottab outdent="2em" />
        <a class="mpdf_toc_a" href="#__mpdfinternallink_1">
            <span class="mpdf_toc_p_level_0">5</span>
        </a>
    </div>
    <div class="mpdf_toc_level_1">
        <a class="mpdf_toc_a" href="#__mpdfinternallink_2">
            <span class="mpdf_toc_t_level_1">Chapter 1</span>
        </a>
        <dottab outdent="2em" />
        <a class="mpdf_toc_a" href="#__mpdfinternallink_2">
            <span class="mpdf_toc_p_level_1">5</span>
        </a>
    </div>
    <div class="mpdf_toc_level_2">
        <a class="mpdf_toc_a" href="#__mpdfinternallink_3">
            <span class="mpdf_toc_t_level_2">Topic 1</span>
        </a>
        <dottab outdent="2em" />
        <a class="mpdf_toc_a" href="#__mpdfinternallink_3">
            <span class="mpdf_toc_p_level_2">5</span>
        </a>
    </div>
</div>

```

The id is `0` for root/un-named ToC; otherwise it is lowercase of the `name=""` used for the ToC

An example CSS stylesheet for this:

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** From mPDF v 6.0 this example stylesheet for ToCs
  was added to the file `[mpdf root]/data/mpdf.css` which is read by default as a secondary default
  CSS stylesheet
</div>

```css
div.mpdf_toc {
    font-family: sans-serif;
    font-size: 11pt;
}
a.mpdf_toc_a  {
    text-decoration: none;
    color: black;
}

/* Whole line level 0 */
div.mpdf_toc_level_0 {
    line-height: 1.5;
    margin-left: 0;
    padding-right: 2em;
}

/* padding-right should match e.g <dottab outdent="2em" /> 0 is default */
/* Title level 0 - may be inside <a> */
span.mpdf_toc_t_level_0 {
    font-weight: bold;
}

/* Page no. level 0 - may be inside <a> */
span.mpdf_toc_p_level_0 {}

/* Whole line level 1 */
div.mpdf_toc_level_1 {
    margin-left: 2em;
    text-indent: -2em;
    padding-right: 2em;
}

/* padding-right should match <dottab outdent="2em" /> 2em is default */
/* Title level 1 */
span.mpdf_toc_t_level_1 {
    font-style: italic;
    font-weight: bold;
}

/* Page no. level 1 - may be inside <a> */
span.mpdf_toc_p_level_1  {}

/* Whole line level 2 */
div.mpdf_toc_level_2 {
    margin-left: 4em;
    text-indent: -2em;
    padding-right: 2em;
}

/* padding-right should match <dottab outdent="2em" /> 2em is default */
/* Title level 2 */
span.mpdf_toc_t_level_2 {}

/* Page no. level 2 - may be inside <a> */
span.mpdf_toc_p_level_2 {}
```

For additional ToCs, these will have `<toc name="">` attribute. Use the lowercase e.g. for `name="Figures"`

```css
#mpdf_toc_figures {
    font-family:Calibri;
    font-size: 10pt;
}
#mpdf_toc_figures span.mpdf_toc_t_level_0 {
    color: red;
}
```

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** If you have 2 ToCs immediately following each other,
  and wish to use pagenumstyle or suppress to control the following text, then you need to set those values on both
  of the `<tocpagebreak>` elements.
</div>

## Automatically Generated ToC entries

You can automatically generate ToC entries from h1 - h6 tags, by setting the variable
<a href="{{ "/reference/mpdf-variables/h2toc.html" | prepend: site.baseurl }}">h2toc</a>.

Only the default ToC will be used if more than 1 ToCs are defined for the document.

`H1` - `H6` must be written with **uppercase** when defining the array.

Example:

```php
<?php

$mpdf->h2toc = array(
    'H1' => 0,
    'H2' => 1,
    'H3' => 2
);

```

NB This will ignores calls from inside ToC e.g. if `<tocpagebreak toc-prehtml="<h3>Table of Contents</h3>"`
and H3 is set to auto-generate a ToC entry - these will be ignored.

