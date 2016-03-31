---
layout: page
title: lang v5.x
parent_title: Fonts & Languages
permalink: /fonts-languages/lang-v5-x.html
modification_time: 2015-08-05T11:59:32+00:00
---

<p>When creating a multilingual document containing Arabic, Indic, <acronym title="Chinese-Japanese-Korean languages">CJK</acronym>, Vietnamese or Thai languages, the text in these languages needs to be identified in order to correctly display them using appropriate fonts.</p>
<p>Marking up your HTML text using the lang attribute is one way to do this. The attribute can be used on any block or in-line tag e.g. &lt;div lang="zh-CN"&gt;....&lt;/div&gt; or &lt;span lang="ru"&gt;...&lt;/span&gt;. It is also recognised in &lt;body&gt; or &lt;html&gt; tags.</p>
<p class="manual_block"><b>Important:</b> Support for the attribute <span class="parameter">lang</span> is only active when the variable <a href="{{ "/reference/mpdf-variables/uselang.html" | prepend: site.baseurl }}">$useLang</a> is set to <span class="smallblock">TRUE</span> (<span class="smallblock">DEFAULT</span>).</p>
<p>The language codes supported are determined by <span class="filename">config_cp.php</span> :</p>
<ul>
<li>en, ca, cy, da, de, es, eu, fr, ga, fi, is, it, nl, no, pt, sv</li>
<li>cs, hr, hu, pl, ro, sk, sl</li>
<li>bg, mk, ru, sr, uk</li>
<li>et, kl, lt, lv</li>
<li>el, tr</li>
<li>vi, th</li>
<li>CJK: ja, zh, zh-CN, zh-HK, zh-TW, ko</li>
<li>RTL: he, ar, fa, ps, ur, sd</li>
<li>INDIC: as, bn, gu, hi, kn, ks, ml, ne, or, pa, sd-IN, ta, te</li>
</ul>
<p>See <a href="{{ "/reference/codepages-glyphs/iso-639-1-language-codes.html" | prepend: site.baseurl }}">ISO 639-1 language codes</a>.</p>
<p>Codes such as "en-US" are supported, and interpreted as "en"</p>
<p>When a language is set, the following happens (determined by function <span class="function">GetCodepage()</span>):</p>
<ul>
<li>available fonts are restricted to those which contain the necessary glyphs to display this language</li>
<li>justification type (<a href="index9a03.html?tid=203">$jSpacing</a>) is set when a block tag has the property <span class="parameter">text-align:justify</span>; for span/inline elements the justification is disabled for the enclosing block element.</li>
</ul>

<div class="alert alert-info" role="alert"><strong>Note:</strong> Automatic language detection using <span class="function">SetAutoFont()</span> will detect language use in the text passed to mPDF, and add <span class="filename">&lt;span lang="xx" class="lang_xx"&gt;..&lt;/span&gt;</span> tags to mark up. Using automatic language detection may add to the processing time when creating a large document.</div>

# See Also

<ul>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/uselang.html" | prepend: site.baseurl }}">useLang</a> - Specify whether to recognise and support the HTML attribute lang</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/setautofont.html" | prepend: site.baseurl }}">SetAutoFont()</a> - Use AutoFont to auto-detect text language in HTML input</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/autofontgroupsize.html" | prepend: site.baseurl }}">autoFontGroupSize</a> - Specify the text chunk size to group when autodetecting text language</li>
</ul>
