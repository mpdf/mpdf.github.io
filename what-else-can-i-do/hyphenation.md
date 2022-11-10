---
layout: page
title: Hyphenation
parent_title: What Else Can I Do
permalink: /what-else-can-i-do/hyphenation.html
modification_time: 2015-08-05T12:00:01+00:00
---

(mPDF &ge; 2.5)

Hyphenation was changed in mPDF 5.7 to support the CSS property hyphens (cf.)

The CSS property `hyphens` is supported on block elements (e.g. `<div>`),
inline elements (e.g. `<span>`) and `<td>`/`<th>`.

```css
hyphens: none|manual|auto
```

Default: `manual`

The default can be changed by altering `defaultCSS`
<a href="{{ "/configuration/configuration-v7-x.html" | prepend: site.baseurl }}">configuration variable</a>;

Values:

* `none` - Words are not broken at line breaks, even if characters inside the word suggest line break points.
* `manual` - Words are only broken at line breaks where there are characters inside the word that suggest line break opportunities.
  Characters can be explicit or conditional.
* `auto` - Words can be broken at appropriate hyphenation points, as determined by characters inside the word, resources.
  SHY (i.e. soft-hyphen) inside the word take priority over hyphenation points determined by other resources.

## Soft hyphens

The soft-hyphen character (U+00AD or `&shy;`) and the `<wbr>` tag (from mPDF 5.7) are supported in
<a href="{{ "/reference/mpdf-functions/writehtml.html" | prepend: site.baseurl }}">WriteHTML()</a>.

## Automatic hyphenation

Automatic hyphenation is set using CSS:

```css
hyphens: auto;
```

Automatic hyphenation is based on the commonly used TeX algorithm and requires pattern files for each language.
The following languages are supplied with mPDF 2.5:

<table class="table">
<thead>
<tr>
  <th>Language</th>
  <th><span class="parameter">$SHYlang</span> variable</th>
</tr>
</thead>
<tbody>
<tr>
  <td>English</td>
  <td><code>'en'</code> (Default)</td>
</tr>
<tr>
  <td>German</td>
  <td><code>'de'</code></td>
</tr>
<tr>
  <td>Spanish</td>
  <td><code>'es'</code></td>
</tr>
<tr>
  <td>Finnish</td>
  <td><code>'fi'</code></td>
</tr>
<tr>
  <td>French</td>
  <td><code>'fr'</code></td>
</tr>
<tr>
  <td>Italian</td>
  <td><code>'it'</code></td>
</tr>
<tr>
  <td>Dutch</td>
  <td><code>'nl'</code></td>
</tr>
<tr>
  <td>Portuguese</td>
  <td><code>'pl'</code></td>
</tr>
<tr>
  <td>Russian</td>
  <td><code>'ru'</code></td>
</tr>
<tr>
  <td>Swedish</td>
  <td><code>'sv'</code></td>
</tr>
</tbody>
</table>


A pattern file for each language is found in the directory `[mpdf root]/data/patterns/` and the
<a href="{{ "/configuration/configuration-v7-x.html" | prepend: site.baseurl }}">configuration variable</a>
<span class="parameter">$SHYlanguages</span> needs to be updated if any additions are made.
The <span class="parameter">$SHYlang</span> variable specifies which language to use for the automatic hyphenation from
the <span class="parameter">$SHYlanguages</span> array.

Pattern checking can be fine-tuned by four variables if required:

<table class="table">
    <tbody>
        <tr>
            <th>mPDF variable</th>
            <th>Default value</th>
            <th>Description</th>
        </tr>
        <tr>
            <td><span class="parameter">$SHYleftmin</span></td>
            <td><code>2</code></td>
            <td>Minimum number of characters allowed to the left of a hyphen.</td>
        </tr>
        <tr>
            <td><span class="parameter">$SHYrightmin</span></td>
            <td><code>2</code></td>
            <td>Minimum number of characters allowed to the right of a hyphen.</td>
        </tr>
        <tr>
            <td><span class="parameter">$SHYcharmin</span></td>
            <td><code>2</code></td>
            <td>Minimum number of characters of words to be checked.</td>
        </tr>
        <tr>
            <td><span class="parameter">$SHYcharmax</span></td>
            <td><code>10</code></td>
            <td>
                Maximum number of characters in a pattern used for pattern checking (10 usually is more than enough).
                This is NOT the maximum length of words to be checked.
            </td>
        </tr>
    </tbody>
</table>

# Examples

```php
<?php
$mpdf = new \Mpdf\Mpdf();

$mpdf->SHYlang = 'fr';
$mpdf->SHYleftmin = 3;

$mpdf->WriteHTML('Le long texte....');

$mpdf->Output();

```

# Hyphenation Dictionary

If automatic hyphenation does not recognise a particular word, you can add words to a dictionary file with your own
hyphenation. Edit the file `[path to mpdf]/patterns/dictionary.txt` and add a new line for each word, marking the
possible hyphenations with a forward slash. You can mark more than one place for each word e.g.
`dis/es/tab/lish/men/tar/i/an/ism`

# See Also

- <a href="{{ "/reference/mpdf-variables/shylang.html" | prepend: site.baseurl }}">SHYlang</a> - Specify the language to use for automatic hyphenation
