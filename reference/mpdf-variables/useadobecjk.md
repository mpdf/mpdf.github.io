---
layout: page
title: useAdobeCJK
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/useadobecjk.html
modification_time: 2015-08-05T12:02:34+00:00
---

(mPDF >= 5.0)

# Description

boolean **useAdobeCJK**

When <span class="smallblock">TRUE</span>, forces mPDF to use the free Adobe CJK Asian fonts, thus keeping the PDF file
size to a minimum. This affects text defines using the CSS <span class="parameter">$lang</span> property, which includes
the use of AutoFont. Thus a CSS stylesheet defining `lang="ja"` will be substituted by the Adobe Japanes font. (This
will not prevent the use of other CJK fonts if specified by font-family.)

The precise effect it has on different languages/fonts is specified in the `\Mpdf\LangToFont` class.

<div class="alert alert-info" role="alert" markdown="1">
	**Note:** This value can only be set as a configuration variable
    To change the value at runtime, you must use `$mpdf = new \Mpdf\Mpdf(['mode' => '-aCJK']);` to set as
	<span class="smallblock">FALSE</span> or `$mpdf = new \Mpdf\Mpdf(['mode' => '-aCJK']); `to set as
	<span class="smallblock">TRUE</span>
</div>

# Values

<span class="parameter">$useAdobeCJK</span> = *<span class="smallblock">TRUE</span>*|<span class="smallblock">FALSE</span>

**Values**

*<span class="smallblock">TRUE</span>*: <span class="smallblock">DEFAULT</span> Use the free Adobe CJK Asian fonts

<span class="smallblock">FALSE</span>: Use normal embedded fonts

