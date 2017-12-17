---
layout: page
title: Bidirectional (RTL) text v6.x
parent_title: Fonts & Languages
permalink: /fonts-languages/bidirectional-rtl-text-v6-x.html
modification_time: 2015-08-05T11:59:35+00:00
---

## Document Directionality - RTL versus LTR

The document has a baseline direction which is
<acronym title="Left-to-Right document, used for most langauges">LTR</acronym>
or <acronym title="Right-to-Left document, used for Hebrew and Arabic languages">RTL</acronym>; this determines:

- text alignment in blocks for which text-align has not been specifically set
- layout of mirrored page-margins, columns, ToC and Indexes, headers / footers

This base/document directionality is <acronym title="Left-to-Right document, used for most langauges">LTR</acronym>
by default, and can be set by any of the following:

```php
<?php
$mpdf->SetDirectionality('rtl');

<html dir="rtl"> or <html style="direction: rtl;">

<body dir="rtl"> or <body style="direction: rtl;">

```

Base direction is an inherited CSS property, so will affect all content, unless direction is specified elswhere.

## Block-level Directionality

Direction can be set for any HTML block elements e.g. `<div><p><table><ul>` etc using HTML or CSS:

```html
<div style="direction: rtl;">
```

or

```css
div.right { direction: rtl; }
```

Block-level direction *may* affect text alignment, and will also influence text reversal in
<acronym title="Right-to-Left document, used for Hebrew and Arabic languages">RTL</acronym> text.

Note that margin/padding are NOT reversed by direction i.e. left-margin will still be left-margin in
<acronym title="Right-to-Left document, used for Hebrew and Arabic languages">RTL</acronym> state.

## Text alignment

The default value for text-align is "a nameless value which is dependent on direction". However, once text-align
is specified, it is respected and inherited by all descendants.

## Text Bidirectionality

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** <a href="{{ "/fonts-languages/opentype-layout-otl.html" | prepend: site.baseurl }}">OpenType
  layout (OTL)</a> features must be enabled on a font for it to display right-to-left script.
</div>

Bi-directional text is supported in mPDF.

1. The following Unicode characters are supported, and can be inserted directly in the text as HTML entities:
  
   <table class="table">
      <tbody>
          <tr>
              <td>LRE</td>
              <td>U+202A</td>
              <td>LEFT-TO-RIGHT EMBEDDING</td>
              <td>&amp;#x202A;</td>
          </tr>
          <tr>
              <td>RLE</td>
              <td>U+202B</td>
              <td>RIGHT-TO-LEFT EMBEDDING</td>
              <td>&amp;#x202B;</td>
          </tr>
          <tr>
              <td>LRO</td>
              <td>U+202D</td>
              <td>LEFT-TO-RIGHT OVERRIDE</td>
              <td>&amp;#x202D;</td>
          </tr>
          <tr>
              <td>RLO</td>
              <td>U+202E</td>
              <td>RIGHT-TO-LEFT OVERRIDE</td>
              <td>&amp;#x202E;</td>
          </tr>
          <tr>
              <td>PDF</td>
              <td>U+202C</td>
              <td>POP DIRECTIONAL FORMATTING</td>
              <td>&amp;#x202C;</td>
          </tr>
          <tr>
              <td colspan="4">

              </td>
          </tr>
          <tr>
              <td>LRI</td>
              <td>U+2066</td>
              <td>LEFT-TO-RIGHT ISOLATE</td>
              <td>&amp;#x2066;</td>
          </tr>
          <tr>
              <td>RLI</td>
              <td>U+2067</td>
              <td>RIGHT-TO-LEFT ISOLATE</td>
              <td>&amp;#x2067;</td>
          </tr>
          <tr>
              <td>FSI</td>
              <td>U+2068</td>
              <td>FIRST STRONG ISOLATE</td>
              <td>&amp;#x2068;</td>
          </tr>
          <tr>
              <td>PDI</td>
              <td>U+2069</td>
              <td>POP DIRECTIONAL ISOLATE</td>
              <td>&amp;#x2069;</td>
          </tr>
          <tr>
              <td colspan="4">

              </td>
          </tr>
          <tr>
              <td>LRM</td>
              <td>U+200E</td>
              <td>LEFT-TO-RIGHT MARK</td>
              <td>&amp;#x200E;</td>
          </tr>
          <tr>
              <td>RLM</td>
              <td>U+200F</td>
              <td>RIGHT-TO-LEFT MARK</td>
              <td>&amp;#x200F;</td>
          </tr>
      </tbody>
   </table>

2. The following HTML tags are supported:
   - `<bdo>` (NB the "dir" attribute is mandatory on <bdo>)
   - `<bdi>` (HTML5)


3. The CSS property `unicode-bidi` is supported with the following (CSS3) values:   
   `normal | embed | isolate | bidi-override | isolate-override | plaintext`.
   
   See <a href="http://www.w3.org/TR/css3-writing-modes/#unicode-bidi">http://www.w3.org/TR/css3-writing-modes/#unicode-bidi</a> for more details.
   
   `unicode-bidi` is supported on block level elements as well as in-line elements, but note that:
   - the value is not inherited to child blocks
   - using `embed` or `isolate` has no effect on block level boxes
   - `isolate-override` is equivalent to `bidi-override` on block level boxes
   
   NB `dir="auto"` is not supported generally, but it is supported for `<bdi>` (has the same effect as if omitted) to use First Strong Isolate (FSI).
   
   Directionality can now be set on individual table cells  
   `<td style="direction:rtl;unicode-bidi:embed;">` or `<td dir="rtl">`


## Equivalent methods

The following are equivalent methods:

EMBED

: Example
  ```php
  <span dir="rtl">...</span>
  
  &amp;#x202B;...&amp;#x202C;
  
  <span style="direction: rtl; unicode-bidi: embed">...</span>
  
  ```

OVERRIDE

: Example
  ```php
  <bdo dir="rtl">...</bdo>
  
  &amp;#x202E;...&amp;#x202C;
  
  <span dir="rtl" style="unicode-bidi: bidi-override">...</span>
  
  <span style="direction: rtl; unicode-bidi: bidi-override">...</span>
  
  ```

ISOLATE

: Example
  ```php
  <bdi dir="ltr">...</bdi>
  
  &amp;#x2067;...&amp;#x2069;
  
  <span dir="rtl" style="unicode-bidi: isolate">...</span>
  
  <span style="direction: rtl; unicode-bidi: isolate">...</span>
  
  ```

First Strong Isolate (FSI)

: Example
  ```php
  <bdi>...</bdi>
  
  <bdi dir="auto">...</bdi>
  
  &amp;#x2068;...&amp;#x2069;
  
  <span dir="rtl" style="unicode-bidi: plaintext">...</span>
  
  <span style="direction: rtl; unicode-bidi: plaintext">...</span>
  
  ```

## First strong isolate (FSI)

FSI is useful when including text within a paragraph where the directionality of the text is unknown. For example,
if you are printing out a catalogue from a database of book titles and the number of readers, when some book titles
are in right-to-left script, you may use this template:

```html
<li>Title: {TITLE} - {READERS} readers</li>

```

This would result in the following:
- Title: Alice in Wonderland - 12390 readers
- Title: עליסה בארץ הפלאות, סיפור-ילדים מאת לואיס קרול - 17890 readers

```html
<li>Title: <bdi>{TITLE}</bdi> - {READERS} readers</li>

```

Using BDI will result in the following:
- Title: Alice in Wonderland - 12390 readers
- Title: עליסה בארץ הפלאות, סיפור-ילדים מאת לואיס קרול ‭- 1790 readers‬

## See Also

- <a href="{{ "/fonts-languages/lang-v5-x.html" | prepend: site.baseurl }}">lang</a> - Information on mPDF support for the HTML attribute lang
