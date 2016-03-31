---
layout: page
title: Installation v6.x
parent_title: Installation & Setup
permalink: /installation-setup/installation-v6-x.html
modification_time: 2015-08-05T11:59:23+00:00
---

# First-time users

Installation:

<ul>
<li>Download the .zip file and unzip it</li>
<li>Create a folder e.g. <span class="filename">/mpdf</span> on your server </li>
<li>Upload all of the files to the server, maintaining the folders as they are </li>
<li>Ensure that you have write permissions set for the following folders:
<ul>
<li><span class="filename">/ttfontdata/</span> </li>
<li><span class="filename">/tmp/</span> </li>
<li><span class="filename">/graph_cache/</span></li>
</ul>
</li>
</ul>

To test the installation, point your browser to the example files folder e.g. <span class="filename">[path_to_mpdf_folder]/mpdf/examples/</span>

If you wish to install additional fonts please see the notes in <a href="{{ "/fonts-languages/fonts-in-mpdf-5-x.html" | prepend: site.baseurl }}">Fonts &amp; Languages</a> for further instructions.

If you wish to define a different folder for temporary files rather than <span class="filename">/tmp/</span> see the note on '<a href="{{ "/installation-setup/folders-for-temporary-files.html" | prepend: site.baseurl }}">Folder for temporary files</a>'.

If you have problems, please read the section on <a href="{{ "/troubleshooting/known-issues.html" | prepend: site.baseurl }}">troubleshooting</a> in the manual.

# Upgrading from version mPDF 5.x

mPDF 6 has changed significantly from earlier version and it is recommended that a fresh install is used. You may wish to copy your previous config_* files and use them to update the new config files.

<b>config_fonts.php</b> - values of "indic" and "unAglyphs" from previous versions are now redundant.

<b>config_lang2fonts.php</b> - this is similar to the previous config_cp.php file; note however that $unifont (NOT $unifonts) must be only one font (not a comma-separated list as before).

<b>Included fonts</b> - the Indic fonts e.g. ind_bn_001.ttf are no longer required (nor do they work properly with mPDF 6).

<b>useLang</b> - this configurable variable, which used to be true by default, is now redundant. You may need to set: $mpdf-&gt;autoLangToFont = true; for the same results.

<b>SetAutoFont()</b> - is now redundant. You may need to set: $mpdf-&gt;autoScriptToLang = true; for the same results.

<b>Indexes</b> - have been largely redefined. See the section above.

<b>Lists</b> - have been rewritten. See the section above.

<b>Headers and Footers</b> - have been rewritten. See the section above.

A number of old depracated aliases will no longer be supported. Warning errors have been added to prompt you to change to the updated form:

<ul>
<li>$mpdf-&gt;useOddEven - should now use - $mpdf-&gt;mirrorMargins</li>
<li>$mpdf-&gt;useSubstitutionsMB - should now use - $mpdf-&gt;useSubstitutions</li>
<li>$mpdf-&gt;AliasNbPg - should now use - $mpdf-&gt;aliasNbPg</li>
<li>$mpdf-&gt;AliasNbPgGp - should now use - $mpdf-&gt;aliasNbPgGp</li>
<li>$mpdf-&gt;BiDirectional - should now use - $mpdf-&gt;biDirectional</li>
<li>$mpdf-&gt;Anchor2Bookmark - should now use - $mpdf-&gt;anchor2Bookmark</li>
<li>$mpdf-&gt;KeepColumns - should now use - $mpdf-&gt;keepColumns</li>
<li>$mpdf-&gt;UnvalidatedText - should now use - $mpdf-&gt;watermarkText</li>
<li>$mpdf-&gt;TopicIsUnvalidated - should now use - $mpdf-&gt;showWatermarkText</li>
<li>$mpdf-&gt;Reference - should now use - $mpdf-&gt;IndexEntry</li>
</ul>

The following functions have been removed:

<ul>
<li>setUnvalidatedText - should now use - SetWatermarkText() </li>
<li>AddPages - should now use - AddPage() or HTML code methods </li>
<li>startPageNums</li>
<li>CreateReference and CreateIndex - cf. Index section above</li>
</ul>

## Default style sheet

A new mpdf.css file includes defaults for LISTS top/bottom margins, and also examples for Indexes and ToCs. This now acts like a normal CSS file, including cascading selectors i.e. not just main tags. This is always read (if present), so acts as a secondary default CSS, but one which allows selectors. Styles added to this act like a user stylesheet when considering precedence e.g. cellSpacing and border-spacing.

## Direct writing methods and OTL

WriteText() WriteCell() Watermark() AutoSizeText() and ShadedBox() DO support complex scripts and right-to-left text (RTL).

Write() does NOT support complex scripts or RTL (NB this is a change - Write() used to support RTL).

CircularText() does NOT support complex scripts or RTL.

MultiCell() DOES support complex scripts and RTL, but complex-script line-breaking MAY NOT be accurate.

MultiCell() does not support kerning and justification. NB This includes &lt;textarea&gt; in forms which uses MultiCell() internally.

&lt;select&gt; form objects also do NOT support kerning.

## Page numbering

Page numbering i.e. by including {PAGENO} or {‌nbpg} in a header/footer, can use any of the number types as used for list-style e.g.

&lt;pagebreak pagenumstyle="arabic-indic"&gt;

Short codes are recognised for the 5 most common:

<ul>
<li>"1" - decimal</li>
<li>"A" = upper-latin or upper-alpha</li>
<li>"a" = lower-latin or lower-alpha</li>
<li>"I" = upper-roman</li>
<li>"i" = lower-roman</li>
</ul>

or any of the following: arabic-indic, hebrew, bengali, devanagari, gujarati, gurmukhi, kannada, malayalam, oriya, persian, tamil, telugu, thai, urdu, cambodian, khmer, lao, cjk-decimal

Note: A suitable font must be used in the header/footer in order to display the numbers in the selected script.

You can now set the pagenumberstyle from the beginning of the document by changing the configurable variable:

$this-&gt;defaultPageNumStyle = "arabic-indic"; // in config.php

$mpdf-&gt;defaultPageNumStyle = "arabic-indic"; // at runtime

## Other Minor changes in mPDF 6

'hebrew', 'khmer', 'cambodian', 'lao', and 'cjk-decimal' are recognised as values for "list-style-type" in numbered lists.

CSS "text-outline" is now supported on TD/TH tags

Text wrapping in tables has been improved when using CJK scripts (chinese-japanese-korean).

Text underline and strikethrough can be used together: <span>Hallo world</span>. Either &lt;u&gt;&lt;s&gt;...&lt;/s&gt;&lt;/u&gt; or &lt;span style="text-decoration:underline line-through;"&gt;...&lt;/span&gt; can be used

Added support for style="opacity:0.6;" in SVG - equivalent to: style="fill-opacity:0.6; stroke-opacity: 0.6;"

Added support for opacity="0.6" (as attribute) in SVG - previously only supported fill-opacity="0.6" stroke-opacity="0.6"

CSS position:absolute or fixed - rotate extended now to include rotate: 180; (previously just 90 or -90)

The default value of $this-&gt;keep_table_proportions = true; in config.php has been changed (see effect on Example 6 - nested table in top right cell).

Limited support has been added for SVG fonts embedded in SVG images (but not using @font-face rules) - see the separate Images demo file.

When using columns, the top margin is now collapsed at top of every column (not just first column of page).

The way mPDF handles optional end tags has been updated to be consistent with the <a href="http://www.w3.org/TR/html5/syntax.html#optional-tags">HTML5 specification</a> - previously not well defined for HTML4.

Changes to the way lists are handled means that text-align:justify may be inherited by lists from surrounding block elements (which did not happen previously). See LISTS above for more information.

