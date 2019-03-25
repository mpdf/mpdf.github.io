---
layout: page
title: Kerning
parent_title: What Else Can I Do
permalink: /what-else-can-i-do/kerning.html
modification_time: 2015-08-05T12:00:05+00:00
---

(mPDF &ge; 6.0)

The control of Kerning is complicated! CSS3 allows for 2 methods of specifying kerning. In mPDF 6,
these two methods have exactly the same effect:

```css
font-kerning: normal;
font-feature-settings: 'kern' on;
```

TrueType fonts allow for 2 possible ways of including kerning data:

- OTL GPOS tables may contain kerning information
- The font may contain a separate kern table

Most fonts contain both or none, but they may exist independently.

If kerning is set to be active (by either of the CSS methods):

- if the useOTL value means that OTL GPOS tables are applied, then this method will be used;
- if not, then the separate kern table will be used - if it exists.

In Latin script, kerning will only be applied if specified by CSS. The configurable variable `useKerning`
determines behaviour if `font-kerning: auto` is used (the default).

When using OTL tables, kerning is set to be on by default for non-LATIN script; this is because a number of fonts
use information in the kern feature to reposition glyphs which are essential for correct display in complex scripts.

**Limitation**: if useOTL is set, but not for Latin script (e.g. = 0x02), and the text string contains more than one
script, then kerning will not be applied to the Latin script text e.g.
`[Cyrillic text][Latin text][Cyrillic text]`. This is because mPDF uses the presence of any repositioning
applied to determine if kerning has been applied, otherwise using the alternative kern tables.

