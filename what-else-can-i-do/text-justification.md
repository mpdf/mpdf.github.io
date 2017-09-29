---
layout: page
title: Text Justification
parent_title: What Else Can I Do
permalink: /what-else-can-i-do/text-justification.html
modification_time: 2015-08-05T12:00:08+00:00
---

# Justifying text & Spacing

## Character and Word spacing

When `text-alignment` is set to `justify` (i.e. aligning to both right and left margins), 
word spacing and character spacing are normally used to justify text.

The default is to use a mix of character and word spacing. The ratio is set by `\Mpdf\Mpdf` properties

```php
<?php

$this->jSWord = 0.4;  // Percentage(/100) of spacing to allocate to Word vs. Character
$this->jSmaxChar = 2; // Maximum spacing to allocate to character spacing. (0 = no maximum)

```

The maximum (<span class="parameter">$jSmaxChar</span>) will prevent excessive, ugly 
and difficult-to-read character spacing.

CJK characters usually need to be character-spaced (as each character is like a word), 
and cursive scripts like Arabic or Indic texts need to be word-spaced. You can override some 
of the default settings also by using CSS letter-spacing:

```css
div.arabic {
   text-align: justify;
   letter-spacing: 0;
}
```

## Kashida in Arabic text

In Arabic text, justification can be achieved by elongating the line between characters - this is known as 
"kashida". Kashida can be used by configuring the font in `fontdata` 
<a href="{{ "/configuration/configuration-v7-x.html" | prepend: site.baseurl }}">configuration variable</a> 

cf. <a href="{{ "/fonts-languages/opentype-layout-otl.html" | prepend: site.baseurl }}">OpenType layout features (OTL)</a>

## Non-breaking space (NBSP)

The non-breaking space character is supported when using all codepages other than CJK - unless the font 
chosen does not have a glyph/character representing the non-breaking space `&nbsp;` (only FreeSerif?); in these cases the nbsp 
is converted to a normal space. When supported, it prevents word wrapping and prevents collapse of white 
space as expected with HTML.

## The last line

The last line of justified text is left-aligned, but when the penultimate line has been stretched to fit 
the page width it appears best if the last line also has increased spacing.

If the penultimate line was stretched considerably, the last line may look odd using the same spacing, so 
maximum values for the character-spacing (<span class="parameter">$jSmaxCharLast</span>) and word-spacing 
(<span class="parameter">$jSmaxWordLast</span>) can be set in the configuration file.

## Justification before line-breaks

In a justified text block, an inline `<img>`, `<textarea>`, `<input>` or `<select>` element 
which causes a new line, force the previous line to be justified. However, a `<hr>` or `<br>` do not 
force justification of the preceding text.

This behaviour matches most browsers. To allow optional compliance with the behaviour of MS Word, which also 
justifies text before a `<br>` you can set the 
<a href="{{ "/configuration/configuration-v7-x.html" | prepend: site.baseurl }}">configuration variable</a>
<a href="{{ "/reference/mpdf-variables/justifyb4br.html" | prepend: site.baseurl }}">justifyB4br</a> to `true`.

