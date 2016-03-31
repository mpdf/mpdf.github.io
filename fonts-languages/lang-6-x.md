---
layout: page
title: lang 6.x
parent_title: Fonts & Languages
permalink: /fonts-languages/lang-6-x.html
modification_time: 2015-08-05T11:59:32+00:00
---

The HTML lang attribute has a number of uses:

<ul>
<li>when OTL tables are being used for a font, the language from the lang attribute is used to select which OTL features are applied;</li>
<li>used in conjunction with CSS :lang selector to allow CSS styles to be applied;</li>
<li>can be used in conjunction with <code>autoLangToFont</code> and <code>autoScriptToLang</code> (cf.)</li>
</ul>

mPDF supports use of the <code>lang</code> selector in CSS. All of the following are supported:

<ul>
<li><code>:lang(fr)</code></li>
<li><code>p:lang(fr)</code></li>
<li><code>span:lang("syr")</code></li>
<li><code>[lang="fr"]</code></li>
<li><code>[lang='fr']</code></li>
<li><code>p[lang=fr]</code></li>
<li><code>p[lang="zh-TW"]</code></li>
</ul>

Note: <code>[lang=zh]</code> will match <code>lang="zh-TW"</code> and <code>lang="zh-HK"</code>

Limitation: class selectors and attribute selectors should be of equal specificity in CSS specification e.g.

{% highlight php %}
:lang(syr) { color: blue; }

.syriac { color: red; }
{% endhighlight %}

should be of equal specificity, and thus apply whichever comes later in the CSS stylesheet. mPDF however gives <code>:lang</code> priority over <code>.class</code>

<b>The use of the lang attribute and CSS selector is the recommended method for handling multi-lingual documents</b>

## Language tags

IETF tags should be used for lang which comply with the following:

<ul>
<li>a 2 or 3 letter Language code, followed optionally by</li>
<li>a hyphen and a 4 letter Script code, and or</li>
<li>a hyphen and a 2 letter Region code</li>
<li>i.e. [xx|xxx]{-Xxxx}{-XX}</li>
<li>mPDF deals with IETF tags as case insensitive</li>
</ul>
