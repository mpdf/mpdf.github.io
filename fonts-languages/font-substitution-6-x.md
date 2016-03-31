---
layout: page
title: Font substitution 6.x
parent_title: Fonts & Languages
permalink: /fonts-languages/font-substitution-6-x.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>If a font or default font is declared in HTML or CSS, the font that is actually set is determined by:</p>
<h3>Standard use</h3>
<p>If called in HTML/CSS the font-family name is converted to an mPDF font-family name (see <a href="{{ "/fonts-languages/font-names.html" | prepend: site.baseurl }}">Font names</a>) e.g.</p>

{% highlight php %}
<p style="font-family: 'Trebuchet MS'; font-weight: bold;">
{% endhighlight %}

<p>The font requested (including style) is checked to see if it is available to mPDF: set by the array <code>$</code><code>available_unifonts</code>* :</p>
<ol>
<li>If the font[style] exists - selected e.g. <code>trebuchetms['B']</code></li>
<li>If the font[nostyle] exists - selected e.g. <code>trebuchetms['R']</code></li>
<li>Looks up the font-family in the three arrays <code>sans_fonts, serif_fonts,</code> and <code>mono_fonts</code> defined in <span class="filename">mpdf_config.php</span> , in this case looking for '<code>trebuchetms</code>'. If found, substitutes a font of similar type (sans-serif, serif, or mono) - the first font in the <code>sans_fonts, serif_fonts,</code> or <code>mono_fonts</code> arrays is used.</li>
<li>If no font has yet been selected, the first font in the array <code>$</code><code>available_unifonts</code>* is selected</li>
</ol>
<p>* The array&nbsp; <code>$available_unifonts</code> is initially derived from <code>$this-&gt;fontdata</code> in the <span class="filename">config_fonts.php</span> file. (<code>trebuchetms['B']</code> will be converted to '<code>trebuchetmsB')</code></p>
<h3>Core fonts</h3>
<p>If core fonts only are specified by using <code>$mpdf = new mPDF('c')</code>, then all font requests will be substituted by Arial/Helvetica, Times or Courier i.e. the core PDF fonts. mPDF determines whether the requested font is a sans-serif, serif or monospace font (as above), and substitutes accordingly.&nbsp;</p>
<h3>Character (font) substitution</h3>
<p>If some circumstances, individual characters are replaced by glyphs from another font - see <a href="{{ "/fonts-languages/character-substitution.html" | prepend: site.baseurl }}">character (font) substitution</a>.</p>
</div>
</div>

