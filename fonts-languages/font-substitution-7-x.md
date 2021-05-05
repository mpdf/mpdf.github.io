---
layout: page
title: Font substitution v7+
parent_title: Fonts & Languages
permalink: /fonts-languages/font-substitution-7-x.html
modification_time: 2017-03-13T15:06:17+01:00
---

(mPDF &ge; 7.0)

If a font or default font is declared in HTML or CSS, the font that is actually set is determined by:

Standard use

: If called in HTML/CSS the font-family name is converted to an mPDF font-family name (see
  <a href="{{ "/fonts-languages/font-names.html" | prepend: site.baseurl }}">Font names</a>).

  The font requested (including style) is checked to see if it is available to mPDF: set by the array
  `$available_unifonts`:

  1. If the font[style] exists - selected e.g. `trebuchetms['B']`
  2. If the font[nostyle] exists - selected e.g. `trebuchetms['R']`
  3. Looks up the font-family in the three arrays `sans_fonts, serif_fonts,` and `mono_fonts` defined in
     mPDF $config, in this case looking for '`trebuchetms`'. If found,
     substitutes a font of similar type (sans-serif, serif, or mono) - the first font in the `sans_fonts, serif_fonts,`
     or `mono_fonts` arrays is used.
  4. If no font has yet been selected, the first font in the array `$available_unifonts`\* is selected

  \* The array  `$available_unifonts` is initially derived from `$this->fontdata` in configuration key.
  (`trebuchetms['B']` will be converted to '`trebuchetmsB')`

Core fonts

: If core fonts only are specified by using `$mpdf = new \Mpdf\Mpdf(['mode' => 'c'])`, then all font requests will be
  substituted by Arial/Helvetica, Times or Courier i.e. the core PDF fonts. mPDF determines whether the requested font
  is a sans-serif, serif or monospace font (as above), and substitutes accordingly. 

Character (font) substitution

: If some circumstances, individual characters are replaced by glyphs from another font - see
  <a href="{{ "/fonts-languages/character-substitution.html" | prepend: site.baseurl }}">character (font) substitution</a>.

