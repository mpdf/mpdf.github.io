---
layout: page
title: Index
parent_title: What Else Can I Do
permalink: /what-else-can-i-do/index.html
modification_time: 2018-10-30T17:34:14+00:00
---

mPDF can generate an index at the end of document using:

- `<indexentry content="Buffalo" />`
  to make index entries at the appropriate place in the HTML text
- `<indexinsert ... />`
  generates and inserts the Index at the end of document

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** Indexes have been completely rewritten in mPDF 6. The notes below refer to mPDF &ge; 6.0
</div>

- `<indexentry>` or `IndexEntry()` should be used to create Index entries during document writing.
- `<indexinsert>` or `InsertIndex()` should be used to generate the Index at the end of the document.

When an Index is inserted in the PDF document using `<indexinsert>` or `InsertIndex()`, the Index is generated
(internally) as HTML code in the following format (with the markup as shown):

```html
<div class="mpdf_index_main">
    <div class="mpdf_index_letter">A</div>
    <div class="mpdf_index_entry">
        Aardvark<a class="mpdf_index_link" href="#page37">37</a>
    </div>
    ...
</div>
```

CSS stylesheets can thus be used to control the layout of the Index e.g.:

```css
/* For Index */

div.mpdf_index_main {
    line-height: normal;
    font-family: sans-serif;
}

div.mpdf_index_letter {
    line-height: normal;
    font-family: sans-serif;
    font-size: 1.8em;
    font-weight: bold;
    text-transform: uppercase;
    page-break-after: avoid;
    margin-top: 0.3em;
    margin-collapse: collapse;
}

div.mpdf_index_entry {
    line-height: normal;
    font-family: sans-serif;
    text-indent: -1.5em;
}

a.mpdf_index_link {
    color: #000000;
    text-decoration: none;
}
```

A default stylesheet for Indexes is included in `[mpdf root]/data/mpdf.css`. (Custom defaults file could be set by
the <a href="{{ "/reference/mpdf-variables/defaultcssfile.html" | prepend: site.baseurl }}">defaultCssFile</a> configuration setting)

## Index Collation

In order to generate an Index with non-ASCII characters, entries need to be sorted accordingly (collation), and
non-ASCII characters should map to the appropriate Dividing letter e.g.:

<div class="well" markdown="1">
**A**

Alonso, Fernando
Ãlvarez, Isaac
Arroyo Molino, David

**B**

Benitez, Carlos
</div>

Entries in an Index can now be sorted using any of the Locale values available on your system. Set it using
the "collation" property/parameter e.g.:

```html
<indexinsert usedivletters="on" links="off" collation="es_ES.utf8"
    collation-group="Spanish_Spain" />
```

or

```php
<?php
$mpdf->InsertIndex(true, false, "es_ES.utf8", "Spanish_Spain");

```

NB You should always choose a UTF-8 collation, even when you are using Core fonts or e.g. `charset-in="win-1252"`, because
mPDF handles all text internally as UTF-8 encoded.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** Used locale has to be installed on your system.
  You can see which locales are available on your (Unix) system with `locale -a` console command
  or with `<?php system('locale -a') ?>` from PHP
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** Index collation will probably not work on Windows servers because of the problems setting Locales under Windows.
</div>


If you have set your index to use Dividing letters, you can also determine how letters are grouped under a dividing
letter. In the example index above, we want `Ã` to be grouped under the letter `a`/`A`. Set the "collation-group" using:

```html
<indexinsert usedivletters="on" links="off" collation="es_ES.utf8"
    collation-group="Spanish_Spain" />
```

or

```php
<?php
$mpdf->InsertIndex(true, false, "es_ES.utf8", "Spanish_Spain");

```

Values should be selected from the available file names in directory `[mpdf root]/data/collations/`.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** This will not affect the overall order of entries, which is determined by the value of "collation".
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** The groupings do not always match the order set by locale. This is because the data for collations has come from
  different sources. The files in `[mpdf root]/data/collations/` can be edited.
</div>

The array consists of [index]: unicode decimal value of character => unicode decimal value of character to group
under: e.g. `Ã` [A tilde] (U+00C3) (decimal 195) => `a` (U+0061) (decimal 97). The target character should always be
the lowercase form.

## Non-ASCII chcracters in Index entries

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** `htmlspecials_encode()` should be used to encode the text of content in `<indexentry>` - although not when using
`IndexEntry()`.
</div>

## Columns

From mPDF 6.0, columns are not specified as part of the `<indexinsert>`, so a typical 2-column index might be
produced by:

```html

<h2>Index</h2>

<columns column-count="2" column-gap="5" />

<indexinsert usedivletters="on" links="on" collation="en_US.utf8"
    collationgroup="English_United_States" />

<columns column-count="1" />

```

## Index Sub-entries

Index entries can contain sub-entries, separated by colons e.g.

```html
<indexentry content="Mammals:elephants" />
```

A shorthand way of displaying subentries is set by default, which suppresses the main entry if > 1 subEntry.
It can be disabled/enabled using the configurable variable `indexUseSubentries` in config constructor parameter.

This is the default appearance, with
```php
<?php
$this->indexUseSubentries = false;

```

```
Mammals 73

- elephants 142
- humans 173

Marsupials

- kangaroos 75
- wombats 86
```

Index entries can also include simple mark-up tags and/or more than one colon e.g:

```php
<indexentry content="Mammals:&lt;b&gt;elephants&lt;/b&gt;: breeding" />
```

which appears as:

```
Mammals

- <b>elephants</b>: breeding 15
```

This is the appearance with
```php
<?php
$this->indexUseSubentries = false;

```

```
Mammals 73
Mammals, elephants 142
Mammals, <b>elephants</b>: breeding 15
Mammals, humans 173
Marsupials, kangaroos 75
Marsupials, wombats 86
```

## Customised appearance (advanced)

Several variables set at beginning of function `InsertIndex()` in `mpdf.php` which could be changed to alter appearance of
Index. e.g. spacer, and joiner characters.

