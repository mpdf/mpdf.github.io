---
layout: page
title: Character substitution
parent_title: Fonts & Languages
permalink: /fonts-languages/character-substitution.html
modification_time: 2015-08-05T11:59:38+00:00
---

(mPDF &ge; 5.0)

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** Prior to mPDF 5.0 there were 2 configurable variables, `$this->useSubstitutions` and
  `$this->useSubstitutionsMB`. controlling behaviour of core fonts and unicode fonts respectively. From mPDF 5.0,
  character substitution using core fonts is always ON and cannot be disabled by configurable variables.

  `$this->useSubstitutionsMB` is deprecated but it is recognised as an alias for `$this->useSubstitutions`.
  `$this->useSubstitutions` controls behaviour in Unicode font documents.
</div>

## Core fonts

In documents using core fonts only, only characters included in the
<a href="{{ "/reference/codepages-glyphs/win-1252.html" | prepend: site.baseurl }}">win-1252</a> codepage are available
in the Arial/Helvetica, Times or Courier fonts. If the document includes characters which are included in the other core
Adobe fonts - <a href="{{ "/reference/codepages-glyphs/symbols-adobe.html" | prepend: site.baseurl }}">Symbols</a>, or 
<a href="{{ "/reference/codepages-glyphs/zapfdingbats-adobe.html" | prepend: site.baseurl }}">Dingbats</a> - these
will be substituted. Because they are displayed using a different font they may appear 'odd'.

## Unicode fonts

In Unicode Truetype files, the limitation is whether the font file contains a "glyph" for each character in the document.
Character substitution (i.e. substituting a different font solely to display that character) can be enabled by setting
the `useSubstitution`
<a href="{{ "/configuration/configuration-v7-x.html" | prepend: site.baseurl }}">configuration variable</a>.

```php
<?php

$this->useSubstitutions = true;

```

mPDF will try to find substitutions for any missing characters:

1. if the character is in Unicode Plane 2 (SIP) i.e. Unicode value > U+20000:
    1. looks in the sip-ext font file
       (see <a href="{{ "/fonts-languages/fonts-in-mpdf-5-x.html" | prepend: site.baseurl }}">Fonts in mPDF 5.x</a>)
    2. looks in the font defined by `backupSIPFont`
       <a href="{{ "/configuration/configuration-v7-x.html" | prepend: site.baseurl }}">configuration variable</a>
2. looks to see if the character is available in the core fonts: Arial/Helvetica, Times, Courier, Symbols or ZapfDingbats
3. looks in each of the the font(s) set by `backupSubsFont`
   <a href="{{ "/configuration/configuration-v7-x.html" | prepend: site.baseurl }}">configuration variables</a>

It is not recommended to enable this for regular use, as it will add to the processing time.

