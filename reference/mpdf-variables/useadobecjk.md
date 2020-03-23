---
layout: page
title: useAdobeCJK
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/useadobecjk.html
modification_time: 2015-08-05T12:02:34+00:00
---

(mPDF &ge; 5.0)

# Description

boolean **useAdobeCJK**

When `true`, forces mPDF to use the free Adobe CJK Asian fonts, thus keeping the PDF file
size to a minimum. This affects text defines using the CSS <span class="parameter">$lang</span> property, which includes
the use of AutoFont. Thus a CSS stylesheet defining `lang="ja"` will be substituted by the Adobe Japanes font. (This
will not prevent the use of other CJK fonts if specified by font-family.)

The precise effect it has on different languages/fonts is specified in the `\Mpdf\LangToFont` class.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** This value can only be set as a configuration variable

  To change the value at runtime, you must use `$mpdf = new \Mpdf\Mpdf(['mode' => '-aCJK']);` to set as
  `false` or `$mpdf = new \Mpdf\Mpdf(['mode' => '+aCJK']); `to set as
  `true`
</div>

# Values

<span class="parameter">$useAdobeCJK</span> = `true`\|`false`

**Values**

* `true`: Use the free Adobe CJK Asian fonts
* `false`: Use normal embedded fonts

Default: `true`
