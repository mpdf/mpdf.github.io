---
layout: page
title: Line breaking
parent_title: What Else Can I Do
permalink: /what-else-can-i-do/line-breaking.html
modification_time: 2015-08-05T12:00:06+00:00
---

The algorithm for determining automatic line breaks was completely rewritten in mPDF v6.0 - the following notes apply to mPDF &gt;= 6.0

Line breaks will be allowed at:

<ul>
<li>Spaces U+0020</li>
<li>Word break U+200B</li>
<li>Hyphen-minus U+002D when CSS hyphens set to "manual" or "auto", except when in a URL, or when following character is a &gt; or a numeral</li>
<li>Hard hyphen U+2010 when CSS hyphens set to "manual" or "auto"</li>
<li>Soft hyphen U+00AD "­" when CSS hyphens set to "manual" or "auto"</li>
<li><a href="{{ "/what-else-can-i-do/hyphenation.html" | prepend: site.baseurl }}">Automatic hyphenation</a> when CSS hyphens set to "auto"</li>
<li>Between CJK characters, except CJK numerals, before "CJK-following" or after "CJK-leading" characters</li>
</ul>

Lao, Thai and Khmer text does not have space between words. By default, mPDF uses word dictionaries to determine appropriate opportunites for line-breaks. Users may turn this function off using the configurable variable `useDictionaryLBR`.

Alternatively users can insert the character U+200B (zero-width space) in the text to mark line-breaking opportunities manually.

Similarly for Tibetan script, mPDF 6 uses a simple algorithm to identify line-breaking opportunities after the characters U+0F0B (Tsheg) or U+0F0D. This can be overriden using the configurable variable `useTibetanLBR`.

