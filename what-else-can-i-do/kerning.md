---
layout: page
title: Kerning
parent_title: What Else Can I Do
permalink: /what-else-can-i-do/kerning.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 6.0)</p>
<p>The control of Kerning is complicated! CSS3 allows for 2 methods of specifying kerning. In mPDF 6, these 2 methods have exactly the same effect:</p>
<ul>
<li>font-kerning: normal;</li>
<li>font-feature-settings: 'kern' on;</li>
</ul>
<p>TrueType fonts allow for 2 possible ways of including kerning data:</p>
<ul>
<li>OTL GPOS tables may contain kerning information</li>
<li>The font may contain a separate kern table</li>
</ul>
<p>Most fonts contain both or none, but they may exist independently.</p>
<p>If kerning is set to be active (by either of the CSS methods):</p>
<ul>
<li>if the useOTL value means that OTL GPOS tables are applied, then this method will be used;</li>
<li>if not, then the separate kern table will be used - if it exists.</li>
</ul>
<p>In Latin script, kerning will only be applied if specified by CSS. The configurable variable <code>useKerning</code> determines behaviour if <code>font-kerning: auto</code> is used (the default).</p>
<p>When using OTL tables, kerning is set to be on by default for non-LATIN script; this is because a number of fonts use information in the kern feature to reposition glyphs which are essential for correct display in complex scripts.</p>
<p><i>Limitation: if useOTL is set, but not for Latin script (e.g. = 0x02), and the text string contains more than one script, then kerning will not be applied to the Latin script text e.g. <span>[Cyrillic text][Latin text][Cyrillic text]</span>. This is because mPDF uses the presence of any repositioning applied to determine if kerning has been applied, otherwise using the alternative kern tables.</i></p>
</div>
</div>

