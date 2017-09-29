---
layout: page
title: lang 6.x
parent_title: Fonts & Languages
permalink: /fonts-languages/lang-6-x.html
modification_time: 2015-08-05T11:59:32+00:00
---

The HTML lang attribute has a number of uses:

- when OTL tables are being used for a font, the language from the lang attribute is used to select which OTL features are applied;
- used in conjunction with CSS :lang selector to allow CSS styles to be applied;
- can be used in conjunction with `autoLangToFont` and `autoScriptToLang` (cf.)

mPDF supports use of the `lang` selector in CSS. All of the following are supported:

- `:lang(fr)`
- `p:lang(fr)`
- `span:lang("syr")`
- `[lang="fr"]`
- `[lang='fr']`
- `p[lang=fr]`
- `p[lang="zh-TW"]`

Note: `[lang=zh]` will match `lang="zh-TW"` and `lang="zh-HK"`

Limitation: class selectors and attribute selectors should be of equal specificity in CSS specification e.g.

```css
:lang(syr) { color: blue; }

.syriac { color: red; }

```

should be of equal specificity, and thus apply whichever comes later in the CSS stylesheet. 
mPDF however gives `:lang` priority over `.class`

**The use of the lang attribute and CSS selector is the recommended method for handling multi-lingual documents**

## Language tags

IETF tags should be used for lang which comply with the following:

- a 2 or 3 letter Language code, followed optionally by
- a hyphen and a 4 letter Script code, and or
- a hyphen and a 2 letter Region code
- i.e. [xx\|xxx]{-Xxxx}{-XX}
- mPDF deals with IETF tags as case insensitive
