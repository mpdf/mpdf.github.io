---
layout: page
title: Automatic font selection
parent_title: Fonts & Languages
permalink: /fonts-languages/automatic-font-selection.html
modification_time: 2015-08-05T11:59:31+00:00
---

<div class="alert alert-info" role="alert"><strong>Note:</strong> This describes automatic font selection in mPDF &gt;= v6.</div>
<p>mPDF has two functions which can be used together or separately:</p>
<p><code>autoScriptToLang</code> - marks up HTML text using the lang attribute, based on the Unicode script block in question, and configurable values in <code>config_script2lang.php</code>.</p>
<p><code>autoLangToFont</code> - selects the font to use, based on the HTML lang attribute, using configurable values in <code>config_lang2font.php</code>.</p>
<p>For automatic font selection, ideally we would choose the font based on the language in use. However it is actually impossible to determine the language used from a string of HTML text. The Unicode script block can be ascertained, and sometimes this tells us the language e.g. Telugu. However, Cyrillic script is used for example in many different languages. So the best we can do is base it on the script used. However, mPDF does this in two stages via the <code>lang</code> attribute, because this allows the options of using either of the stages alone or together:</p>

{% highlight php %}
<p>English ру́сский язы́к پښتو</p>
{% endhighlight %}

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ↓ <b>autoScriptToLang</b> (config_script2lang.php) ↓</p>

{% highlight php %}
<p>English <span lang="und-Cyrl">ру́сский язы́к</span> <span lang="ps">پښتو</span></p>
{% endhighlight %}

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ↓ <b>autoLangToFont</b> (config_lang2fonts.php) ↓</p>

{% highlight php %}
Uses "lang" to select font, and to determine OTL features applied
{% endhighlight %}

# autoScriptToLang

{% highlight php %}
<?php

$mpdf->autoScriptToLang = true;

$mpdf->baseScript = 1;

$mpdf->autoVietnamese = true;

$mpdf->autoArabic = true;
{% endhighlight %}

<p><code>$mpdf-&gt;baseScript = 1;</code> tells mPDF which Script to ignore. It is set by default to "1" which is for Latin script. In this mode, all scripts <i>except</i> Latin script are marked up with <code>lang</code> attribute. To select other scripts as the base, see the file <code>/classes/ucdn.php</code></p>
<p>Using <code>autoScriptToLang</code>, mPDF detects text runs based on Unicode script block; using the values in <code>config_script2lang.php</code> it then encloses the text run within a span tag with the appropriate language attribute. For many scripts, the language cannot be determined: see the example above which recognises Cyrillic script and marks it up using <code>und-Cyrl</code>, which is a valid IETF tag, coding for language="undetermined", script="Cyrillic".</p>
<p>Two optional refinements are added: Vietnamese text can often be recognised by the presence of certain characters which do not appear in other Latin script langauges, and similarly analysis of the text can attempt to distinguish Arabic, Farsi, Pashto, Urdu and Sindhi. If active, the text will then be marked with a specific language tag e.g. "vi", "pa", "ur", "fa" etc.</p>
<p>These features can be disabled or enabled (default) using the variables <code>$mpdf-&gt;autoVietnamese</code> <code>$mpdf-&gt;autoArabic</code>, either in <span class="filename">config.php</span> or at runtime.</p>

# autoLangToFont

{% highlight php %}
<?php

$mpdf->autoLangToFont = true;
{% endhighlight %}

<p>You can edit the values in <code>config_lang2font.php</code> to specify which fonts are used for which <code>lang</code>.</p>
<p>Using text with multiple languages</p>
<p>Recommended ways to use multiple languages in mPDF:</p>
<ol>
<li>If you have full control over the HTML, mark-up the text with the <code>lang </code>atribute and use CSS (<code>:lang</code> selector preferably); this method means that the language information can also be used by OTL for language dependent substitutions.</li>
<li>If you have no control over (user) HTML input and want to output faithfully, use both <code>autoScriptToLang</code> and <code>autoLangToFont</code></li>
</ol>
<p>It is preferable not to use <code>autoScriptToLang</code> and <code>autoLangToFont</code> unless they are necessary: they will result in increased processing time, and OTL tables will not be able to use language dependent substitutions when undefined languages are set e.g "<code>und-Cyrl</code>".</p>

<div class="alert alert-info" role="alert"><strong>Note:</strong> As from mPDF 6.0 automatic font selection can be used within an SVG image. Control is separate from that of the rest of the document. For details, see the defined constants at the top of classes/svg.php file.</div>
