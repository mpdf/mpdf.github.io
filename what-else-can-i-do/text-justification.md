---
layout: page
title: Text Justification
parent_title: What Else Can I Do
permalink: /what-else-can-i-do/text-justification.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<h2>Justifying text &amp; Spacing</h2>
<h3>Character and Word spacing</h3>
<p>When text-alignment is set to Justify (i.e. aligning to both right and left margins), word spacing and character spacing are normally used to justify text.</p>
<p>The default is to use a mix of character and word spacing. The ratio is set by variables defined at the top of the mpdf.php file:</p>

{% highlight php %}
<?php

var $jSWord = 0.4;  // Percentage(/100) of spacing to allocate to Word vs. Character

var $jSmaxChar = 2; // Maximum spacing to allocate to character spacing. (0 = no maximum)
{% endhighlight %}

<p>The maximum (<span class="parameter">$jSmaxChar</span>) will prevent excessive, ugly and difficult-to-read character spacing.</p>
<p>CJK characters usually need to be character-spaced (as each character is like a word), and cursive scripts like Arabic or Indic texts need to be word-spaced. You can override some of the default settings also by using CSS letter-spacing:</p>

{% highlight php %}
div.arabic {

   text-align: justify;

   letter-spacing: 0; 

}
{% endhighlight %}

<h3>Kashida in Arabic text</h3>
<p>In Arabic text, justification can be achieved by elongating the line between characters - this is known as "kashida". Kashida can be used by configuring the font in <span class="filename">config_fonts.php</span>&nbsp; cf. <a href="/fonts-languages/opentype-layout-otl.html">OpenType layout features (OTL)</a></p>
<h3>Non-breaking space (NBSP)</h3>
<p>The non-breaking space character is supported when using all codepages other than CJK - unless the font chosen does not have a glyph/character representing the nbsp (? only FreeSerif); in these cases the nbsp is converted to a normal space. When supported, it prevents word wrapping and prevents collapse of white space as expected with HTML.</p>
<h3>The last line</h3>
<p>The last line of justified text is left-aligned, but when the penultimate line has been stretched to fit the page width it appears best if the last line also has increased spacing.</p>
<p>If the penultimate line was stretched considerably, the last line may look odd using the same spacing, so maximum values for the character-spacing (<span class="parameter">$jSmaxCharLast</span>) and word-spacing (<span class="parameter">$jSmaxWordLast</span>) can be set in the configuration file.</p>
<h3>Justification before line-breaks</h3>
<p>In a justified text block, an inline &lt;img&gt;, &lt;textarea&gt;, &lt;input&gt;, or &lt;select&gt; element which causes a new line, force the previous line to be justified. However, a &lt;hr&gt; or &lt;br&gt; do not force justification of the preceeding text.</p>
<p>This behaviour matches most browsers. To allow optional compliance with the bahaviour of MS Word, which also justifies text before a &lt;br&gt; you can set the configurable variable <a href="/reference/mpdf-variables/justifyb4br.html">justifyB4br</a> to true.</p>
</div>
</div>

