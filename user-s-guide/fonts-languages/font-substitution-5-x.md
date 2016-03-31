---
layout: page
title: Font substitution 5.x
parent_title: Fonts & Languages
permalink: /user-s-guide/fonts-languages/font-substitution-5-x.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 5.0)</p>
<p>If a font or default font is declared in mPDF (including the default stylesheet, and any CSS stylesheets etc.) the font that is actually set is determined by:</p>
<h3>Standard use</h3>
<p>If called in HTML/CSS the font-family name is converted to an mPDF font-family name (see <a href="/user-s-guide/fonts-languages/font-names.html">Font names in 5.x</a>) e.g.</p>

{% highlight php %}
<?php

&lt;p style="font-family: 'Trebuchet MS'; font-weight: bold;"&gt;
{% endhighlight %}

<p>The font requested (including style) is checked to see if it is available to mPDF: set by the array <code>$</code><code>available_unifonts</code>* :</p>
<ol>
<li>If the font[style] exists - selected e.g. <code>trebuchetms['B']</code></li>
<li>If the font[nostyle] exists - selected e.g. <code>trebuchetms['R']</code></li>
<li>Looks up the font-family in the three arrays <code>sans_fonts, serif_fonts,</code> and <code>mono_fonts</code> defined in <span class="filename">mpdf_config.php</span> , in this case looking for '<code>trebuchetms</code>'. If found, substitutes a font of similar type (sans-serif, serif, or mono) - the first font in the <code>sans_fonts, serif_fonts,</code> or <code>mono_fonts</code> arrays is used.</li>
<li>If no font has yet been selected, the first font in the array <code>$</code><code>available_unifonts</code>* is selected</li>
</ol>
<p>* The array&nbsp; <code>$available_unifonts</code> is initially derived from <code>$this-&gt;fontdata</code> in the <span class="filename">config_fonts.php</span> file. (<code>trebuchetms['B']</code> will be converted to '<code>trebuchetmsB'</code> The array can be altered when certain languages are defined e.g. when using lang markup in the HTML code:</p>

{% highlight php %}
<?php

&lt;p lang="ar"&gt;
{% endhighlight %}

<p>If 'ar' (arabic) is set as the language, the default settings in <span class="filename">config_cp.php</span> define a restricted set of fonts which can be selected. In the example case, mPDF will look for <code>trebuchetmsB</code> and if not available, <code>trebuchetms</code></p>
<h3>Core fonts</h3>
<p>If core fonts only are specified by using <code>$mpdf = new mPDF('c')</code>, then all font requests will be substituted by Arial/Helvetica, Times or Courier i.e. the core PDF fonts. mPDF determines whether the requested font is a sans-serif, serif or monospace font (as above), and substitutes accordingly.&nbsp;</p>
<h3>Character (font) substitution</h3>
<p>If some circumstances, individual characters are replaced by glyphs from another font - see <a href="/user-s-guide/fonts-languages/character-substitution.html">character (font) substitution</a>.</p>
</div>
</div>

