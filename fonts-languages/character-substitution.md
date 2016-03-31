---
layout: page
title: Character substitution
parent_title: Fonts & Languages
permalink: /fonts-languages/character-substitution.html
modification_time: 2015-08-05T11:59:38+00:00
---

<p>(mPDF &gt;= 5.0)</p>

<div class="alert alert-info" role="alert"><strong>Note:</strong> Prior to mPDF 5.0 there were 2 configurable variables, <code>$this-&gt;useSubstitutions</code> and <code>$this-&gt;useSubstitutionsMB</code>. controlling behaviour of core fonts and unicode fonts respectively. From mPDF 5.0, character substitution using core fonts is always ON and cannot be disabled by configurable variables. <code>$this-&gt;useSubstitutionsMB</code> is depracated but it is recognised as an alias for <code>$this-&gt;useSubstitutions</code>. <code>$this-&gt;useSubstitutions</code> controls behaviour in Unicode font documents.</div>

## Core fonts

<p>In documents using core fonts only, only characters included in the <a href="{{ "/reference/codepages-glyphs/win-1252.html" | prepend: site.baseurl }}">win-1252</a> codepage are available in the Arial/Helvetica, Times or Courier fonts. If the document includes characters which are included in the other core Adobe fonts - <a href="{{ "/reference/codepages-glyphs/symbols-adobe.html" | prepend: site.baseurl }}">Symbols</a>, or&nbsp; <a href="{{ "/reference/codepages-glyphs/zapfdingbats-adobe.html" | prepend: site.baseurl }}">Dingbats</a> - these will be substituted. Because they are displayed using a different font they may appear 'odd'.</p>

## Unicode fonts

<p>In Unicode Truetype files, the limitation is whether the font file contains a "glyph" for each character in the document. Character substitution (i.e. substituting a different font solely to display that character) can be enabled by setting the configuration variable in <span class="filename">config.php</span>:</p>

{% highlight php %}
<?php

$this->useSubstitutions = true;
{% endhighlight %}

<p>mPDF will try to find substitutions for any missing characters:</p>
<ol>
<li>if the character is in Unicode Plane 2 (SIP) i.e. Unicode value &gt; U+20000: 

<ol>
<li>looks in the sip-ext font file (see <a href="{{ "/fonts-languages/fonts-in-mpdf-5-x.html" | prepend: site.baseurl }}">Fonts in mPDF 5.x</a>);</li>
<li>looks in the font defined by <code>$this-&gt;backupSIPFont</code> in the <span class="filename">config_fonts.php</span> file</li>
</ol>
</li>
<li>looks to see if the character is available in the core fonts: Arial/Helvetica, Times, Courier, Symbols or ZapfDingbats </li>
<li>looks in each of the the font(s) set by <code>$this-&gt;backupSubsFont</code> array in the <span class="filename">config_fonts.php</span> file</li>
</ol>
<p>It is not recommended to enable this for regular use, as it will add to the processing time.</p>
