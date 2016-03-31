---
layout: page
title: Overview
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/overview.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<h2>mPDF Variables by Category</h2>
<p>Most of the following variables are set as defaults in the configuration file config.php&nbsp; When set there, they are written as e.g.:</p>

{% highlight php %}
<?php

$this->variablename = true;
{% endhighlight %}

<p>Alternatively you can redefine the variable in individual scripts; here it will be written as e.g. (assuming your class object is "mpdf"):</p>

{% highlight php %}
<?php

$mpdf->variablename = true;
{% endhighlight %}

<table class="bpmTopic"> <thead>
<tr>
<td>Category</td>
<td>Variable</td>
<td>Default value</td>
<td>Scope<sup>[1]</sup></td>
<td>Version</td>
<td>Notes</td>
</tr>
</thead> <tbody>
<tr>
<td>Paging</td>
<td><a href="/reference/mpdf-variables/mirrormargins.html">mirrorMargins</a></td>
<td>0</td>
<td><span class="smallblock">DOCUMENT</span> 

</td>
<td>4.0</td>
<td>The alias <span class="parameter">useOddEven</span> was used before v4.0

</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>
<p>restoreBlockPagebreaks</p>
</td>
<td><span class="smallblock">FALSE</span></td>
<td>&nbsp;</td>
<td>2.3</td>
<td>&nbsp;Removed v6.0

</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/forceportraitmargins.html">forcePortraitMargins</a></td>
<td><span class="smallblock">FALSE</span></td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>2.3</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/displaydefaultorientation.html">displayDefaultOrientation</a></td>
<td><span class="smallblock">FALSE</span></td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>2.3</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/autopagebreak.html">autoPageBreak</a></td>
<td><span class="smallblock">TRUE</span></td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>3.1</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/setautotopmargin.html">setAutoTopMargin</a></td>
<td><span class="smallblock">FALSE</span></td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>4.0</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/setautobottommargin.html">setAutoBottomMargin</a></td>
<td><span class="smallblock">FALSE</span></td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>4.0</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/automarginpadding.html">autoMarginPadding</a></td>
<td>2</td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>4.0</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/margbuffer.html">margBuffer</a></td>
<td>2</td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>5.5</td>
<td>Allows an (empty) end of block to extend beyond the bottom margin by this amount (mm)</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/printers-info.html">printers_info</a></td>
<td><span class="smallblock">FALSE</span></td>
<td>&nbsp;</td>
<td>5.1</td>
<td>Adds date and page info for printer when using @page and "marks:crop;"</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/bleedmargin.html">bleedMargin</a></td>
<td>5</td>
<td>&nbsp;</td>
<td>5.1</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/crossmarkmargin.html">crossMarkMargin</a></td>
<td>5</td>
<td>&nbsp;</td>
<td>5.1</td>
<td>Distance of cross mark from margin in mm</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/cropmarkmargin.html">cropMarkMargin</a></td>
<td>8</td>
<td>&nbsp;</td>
<td>5.1</td>
<td>Distance of crop mark from margin in mm</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/cropmarklength.html">cropMarkLength</a></td>
<td>18</td>
<td>&nbsp;</td>
<td>5.1</td>
<td>Default length in mm of crop line</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/nonprintmargin.html">nonPrintMargin</a></td>
<td>8</td>
<td>&nbsp;</td>
<td>5.1</td>
<td>Non-printable border at edge of paper sheet in mm</td>
</tr>
<tr>
<td>
<p>Page numbering</p>
</td>
<td><a href="/reference/mpdf-variables/aliasnbpg.html">aliasNbPg</a></td>
<td>"{nb}"</td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>&nbsp;</td>
<td>NB The default value will not appear correctly in a PDF version of this page; it is substituted by the number of pages.</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/aliasnbpggp.html">aliasNbPgGp</a></td>
<td>"{nbpg}"</td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>&nbsp;</td>
<td>NB The default value will not appear correctly in a PDF version of this page; it is substituted by the number of pages.</td>
</tr>
<tr>
<td>

</td>
<td><a href="/reference/mpdf-variables/pagenumprefix.html">pagenumPrefix</a></td>
<td>""</td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>3.0</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/pagenumsuffix.html">pagenumSuffix</a></td>
<td>""</td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>3.0</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/nbpgprefix.html">nbpgPrefix</a></td>
<td>""</td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>3.0</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/nbpgsuffix.html">nbpgSuffix</a></td>
<td>""</td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>3.0</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/defaultpagenumstyle.html">defaultPageNumStyle</a></td>
<td>"1"</td>
<td><span class="smallblock"><span class="smallblock">DOCUMENT</span></span></td>
<td>6.0</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Fonts, Languages and Character sets</td>
<td><a href="/reference/mpdf-variables/allow-charset-conversion.html">percentSubset

</a></td>
<td>30</td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>5.0 

</td>
<td>Control subsetting behaviour for fonts

</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/usekerning.html">useKerning</a></td>
<td><span class="smallblock">FALSE</span></td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>5.4</td>
<td>Set to <span class="smallblock">TRUE</span> to enable CSS support for <span class="parameter">font-kerning</span></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/maxttffilesize.html">maxTTFFilesize</a></td>
<td>2000</td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>5.0</td>
<td>Control subsetting behaviour for fonts</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/allow-charset-conversion.html">allow_charset_conversion</a></td>
<td><span class="smallblock">TRUE</span></td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/charset-in.html">charset_in</a></td>
<td><i><span class="smallblock">NULL</span></i></td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/bidirectional.html">biDirectional</a></td>
<td><span class="smallblock">FALSE</span></td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>use_CJK_only</td>
<td><span class="smallblock">FALSE</span></td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>Removed mPDF 5.0

</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/useadobecjk.html">useAdobeCJK</a></td>
<td><span class="smallblock">TRUE</span></td>
<td><span class="smallblock">DOCUMENT*</span></td>
<td>5.0</td>
<td>* You must only change this variable in the <span class="filename">config.php</span> file.

Use initial parameter to change at runtime e.g. <code>$mpdf=new mPDF('+aCJK');</code>

</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>
<p>autoFontGroupSize</p>
</td>
<td>2</td>
<td>&nbsp;</td>
<td>2.3</td>
<td>Removed in v6.0

</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/uselang.html">useLang</a></td>
<td><span class="smallblock">TRUE</span></td>
<td>&nbsp;</td>
<td>2.3</td>
<td>
<p>Default value <span class="smallblock">FALSE</span> before v4.0</p>
<p>Removed in v6.0</p>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/autoscripttolang.html">autoScriptToLang</a></td>
<td><span class="smallblock">FALSE</span></td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>6.0</td>
<td>
<p>Replaces SetAutoFont function</p>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/autolangtofont.html">autoLangToFont</a></td>
<td><span class="smallblock">FALSE</span></td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>6.0</td>
<td>
<p>Replaces useLang</p>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/basescript.html">baseScript</a></td>
<td><span class="smallblock">1</span></td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>6.0</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/autoarabic.html">autoArabic</a></td>
<td><span class="smallblock">FALSE</span></td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>6.0</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/autovietnamese.html">autoVietnamese</a></td>
<td><span class="smallblock">FALSE</span></td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>6.0</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>disableMultilingualJustify 

</td>
<td><span class="smallblock">TRUE</span></td>
<td>&nbsp;</td>
<td>2.3</td>
<td>&nbsp;Removed in v6.0

</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/falseboldweight.html">falseBoldWeight</a></td>
<td>5</td>
<td>&nbsp;</td>
<td>4.2</td>
<td>Weight for bold text when using an artificial (outline) bold</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/smcapsscale.html">smCapsScale</a></td>
<td>0.75</td>
<td>&nbsp;</td>
<td>5.0</td>
<td>Factor of 1 to scale capital letters</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/smcapsstretch.html">smCapsStretch</a></td>
<td>115</td>
<td>&nbsp;</td>
<td>5.0</td>
<td>% to stretch small caps horizontally</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/backupsubsfont.html">backupSubsFont</a></td>
<td>array('dejavusanscondensed')</td>
<td>&nbsp;</td>
<td>5.0</td>
<td><b>Set in config_fonts.php</b></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/backupsipfont.html">backupSIPFont</a></td>
<td><span class="smallblock">NOT DEFINED</span></td>
<td>&nbsp;</td>
<td>5.0</td>
<td><b>Set in config_fonts.php</b></td>
</tr>
<tr>
<td>Configuration</td>
<td>useOnlyCoreFonts</td>
<td><span class="smallblock">FALSE</span> 

</td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>(3.0) 

</td>
<td>
<p>Removed mPDF 5.0 - Use</p>
<p><code>$mpdf=new mPDF('c');</code></p>
<p>The alias <span class="parameter">use_embeddedfonts_1252</span> was used before v4.0</p>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/repackagettf.html">repackageTTF</a></td>
<td><span class="smallblock">FALSE</span></td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>5.2</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/usesubstitutions.html">useSubstitutions</a></td>
<td><span class="smallblock">FALSE</span></td>
<td>&nbsp;</td>
<td>(4.0)</td>
<td>
<p>NB Altered behaviour mPDF &gt;= 5.0</p>
<p>Default value <span class="smallblock">TRUE</span> before v4.0</p>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>useSubstitutionsMB</td>
<td><span class="smallblock">FALSE</span></td>
<td>&nbsp;</td>
<td>4.2</td>
<td>
<p>Removed in mPDF 5.0</p>
<p>Use useSusbstitutions instead.</p>
<p>Substitute missing characters in UTF-8(multibyte) documents - from core fonts</p>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/collapseblockmargins.html">collapseBlockMargins</a></td>
<td><span class="smallblock">TRUE</span></td>
<td>&nbsp;</td>
<td>4.2</td>
<td>Allows top and bottom margins to collapse between block elements</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/dpi.html">dpi</a></td>
<td>96</td>
<td>&nbsp;</td>
<td>4.5</td>
<td>Specifies size conversion for objects with size set by "px"</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/enableimports.html">enableImports</a></td>
<td><span class="smallblock">FALSE</span></td>
<td><span class="smallblock">DOCUMENT*</span></td>
<td>4.3</td>
<td>Enable Imported PDF files (templates) [was mPDFI]

* You must only change this variable in the <span class="filename">config.php</span> file.

Use <a href="/reference/mpdf-functions/setimportuse.html">SetImportUse()</a> to change at runtime.</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/allow-output-buffering.html">allow_output_buffering</a></td>
<td><span class="smallblock">FALSE</span></td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>3.0</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/allow-html-optional-endtags.html">allow_html_optional_endtags</a></td>
<td><span class="smallblock">TRUE</span></td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/ignore-invalid-utf8.html">ignore_invalid_utf8</a></td>
<td><span class="smallblock">FALSE</span></td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/text-input-as-html.html">text_input_as_HTML</a></td>
<td><span class="smallblock">FALSE</span> 

</td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/showstats.html">showStats</a></td>
<td><span class="smallblock">FALSE</span></td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>4.0</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/progressbar.html">progressBar</a></td>
<td><span class="smallblock">FALSE</span></td>
<td><span class="smallblock">DOCUMENT*</span></td>
<td>4.2</td>
<td>Shows progress-bars whilst generating file

* You must only change this variable in the <span class="filename">config.php</span> file.

Use <a href="/reference/mpdf-functions/startprogressbaroutput.html">StartProgressBarOutput()</a> to set at runtime.</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/progbar-heading.html">progbar_heading</a></td>
<td>"mPDF file progress"</td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>5.0</td>
<td>Customise the use of progress-bars</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/progbar-althtml.html">progbar_altHTML</a></td>
<td>""</td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>5.0</td>
<td>Customise the use of progress-bars</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/incrementfpr1-1-4.html">incrementFPR1 [1-4]</a></td>
<td>10,20,30,50</td>
<td>&nbsp;</td>
<td>4.2</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Debugging</td>
<td><a href="/reference/mpdf-variables/debug.html">debug</a></td>
<td><span class="smallblock">FALSE</span></td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>3.1</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/debugfonts.html">debugfonts</a></td>
<td><span class="smallblock">FALSE</span></td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>5.0</td>
<td>Show errors and warning notes for fonts</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/showimageerrors.html">showImageErrors</a></td>
<td><span class="smallblock">FALSE</span></td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>3.0</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>PDF/A1-b, PDF/X-1a

Colorspaces

</td>
<td><a href="/reference/mpdf-variables/pdfa.html">PDFA</a></td>
<td><span class="smallblock">FALSE</span></td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>4.3</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/pdfaauto.html">PDFAauto</a></td>
<td><span class="smallblock">FALSE</span></td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>4.3</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/pdfx.html">PDFX</a></td>
<td><span class="smallblock">FALSE</span></td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>5.1</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/pdfxauto.html">PDFXauto</a></td>
<td><span class="smallblock">FALSE</span></td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>5.1</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/iccprofile.html">ICCProfile</a></td>
<td>""</td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>4.3</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/restrictcolorspace.html">restrictColorSpace</a></td>
<td>0</td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>5.1</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Annotations</td>
<td><a href="/reference/mpdf-variables/title2annots.html">title2annots</a></td>
<td><span class="smallblock">FALSE</span></td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>2.2</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/annotmargin.html">annotMargin</a></td>
<td><i><span class="smallblock">NULL</span></i></td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>2.2 

</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/annotopacity.html">annotOpacity</a></td>
<td>0.5</td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>2.2</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Bookmarks (Outlines)</td>
<td><a href="/reference/mpdf-variables/anchor2bookmark.html">anchor2Bookmark</a></td>
<td>0</td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/h2bookmarks.html">h2bookmarks</a></td>
<td>array()</td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>5.7</td>
<td>Automatically generate bookmarks from Heading elements H1-H6</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/h2toc.html">h2toc</a></td>
<td>array()</td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>5.7</td>
<td>Automatically generate ToC entries from Heading elements H1-H6</td>
</tr>
<tr>
<td>CSS &amp; Styles</td>
<td><a href="/reference/mpdf-variables/cssselectmedia.html">CSSselectMedia</a></td>
<td>"print"

</td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>4.4</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>disablePrintCSS</td>
<td><i><span class="smallblock">NULL</span></i></td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>&nbsp;</td>
<td><span class="smallblock">DEPRACATED</span> from &gt;= 4.4</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>rtlCSS</td>
<td>2</td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>&nbsp;</td>
<td>&nbsp;REMOVED from v 5.1

</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>
<p>useDefaultCSS2</p>
</td>
<td>&nbsp;</td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>&nbsp;</td>
<td><span class="smallblock">DEPRACATED</span> from &gt;= 2.2</td>
</tr>
<tr>
<td>Page Headers &amp; Footers</td>
<td><a href="/reference/mpdf-variables/defaultfooterfontsize.html">defaultfooterfontsize</a></td>
<td>8</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/defaultfooterfontstyle.html">defaultfooterfontstyle</a></td>
<td>"BI"</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/defaultfooterline.html">defaultfooterline</a></td>
<td>1 

</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/defaultheaderfontsize.html">defaultheaderfontsize</a></td>
<td>8</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/defaultheaderfontstyle.html">defaultheaderfontstyle</a></td>
<td>"BI"</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/defaultheaderline.html">defaultheaderline</a></td>
<td>1</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/footer-line-spacing.html">footer_line_spacing</a></td>
<td>0.25</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/header-line-spacing.html">header_line_spacing</a></td>
<td>0.25</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/forceportraitheaders.html">forcePortraitHeaders</a></td>
<td><span class="smallblock">FALSE</span></td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>headerPageNoMarker</td>
<td>"!|" 

</td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>&nbsp;</td>
<td><span class="smallblock">DEPRACATED</span> from &gt;= 4.0</td>
</tr>
<tr>
<td>Tables</td>
<td><a href="/reference/mpdf-variables/simpletables.html">simpleTables</a></td>
<td><span class="smallblock">FALSE</span> 

</td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>4.3</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/packtabledata.html">packTableData</a></td>
<td><span class="smallblock">FALSE</span></td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>4.4</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>cacheTables</td>
<td><span class="smallblock">FALSE</span></td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>5.4</td>
<td>Removed v6.0

</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/tableminsizepriority.html">tableMinSizePriority</a></td>
<td><span class="smallblock">FALSE</span></td>
<td>&nbsp;</td>
<td>4.6</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/ignore-table-percents.html">ignore_table_percents</a></td>
<td><span class="smallblock">FALSE</span></td>
<td>&nbsp;</td>
<td>2.2</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/ignore-table-widths.html">ignore_table_widths</a></td>
<td><span class="smallblock">FALSE</span> 

</td>
<td>&nbsp;</td>
<td>2.2</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/keep-table-proportions.html">keep_table_proportions</a></td>
<td><span class="smallblock">FALSE</span> 

</td>
<td>&nbsp;</td>
<td>2.2</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/shrink-tables-to-fit.html">shrink_tables_to_fit</a></td>
<td>1.4 

</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/table-error-report.html">table_error_report</a></td>
<td><span class="smallblock">FALSE</span> 

</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/table-error-report-param.html">table_error_report_param</a></td>
<td>"" 

</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/use-kwt.html">use_kwt</a></td>
<td><span class="smallblock">FALSE</span> 

</td>
<td>&nbsp;</td>
<td>2.0</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/iterationcounter.html">iterationCounter</a></td>
<td><span class="smallblock">FALSE</span></td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>5.0</td>
<td>Enables the use of a replaceable iteration counter in table headers or footers</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/decimal-align.html">decimal_align</a></td>
<td><span class="smallblock">cf.</span></td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>5.7</td>
<td>Array of characters enabled to align table columns</td>
</tr>
<tr>
<td>Images</td>
<td><a href="/reference/mpdf-variables/img-dpi.html">img_dpi</a></td>
<td>96</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Text Spacing &amp; Justification</td>
<td><a href="/reference/mpdf-variables/normallineheight.html">normalLineheight</a></td>
<td>1.33</td>
<td>&nbsp;</td>
<td>4.2</td>
<td>Value used for line-height when CSS specified as 'normal'</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/usefixednormallineheight.html">useFixedNormalLineHeight</a></td>
<td><span class="smallblock">FALSE</span></td>
<td>&nbsp;</td>
<td>6.0</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/usefixedtextbaseline.html">useFixedTextBaseline</a></td>
<td><span class="smallblock">FALSE</span></td>
<td>&nbsp;</td>
<td>6.0</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/adjustfontdesclineheight.html">adjustFontDescLineheight</a></td>
<td>1.14</td>
<td>&nbsp;</td>
<td>6.0</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>

</td>
<td><a href="/reference/mpdf-variables/jsmaxchar.html">jSmaxChar</a></td>
<td>2</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/jsmaxwordlast.html">jSmaxWordLast</a></td>
<td>2</td>
<td>&nbsp;</td>
<td>5.1</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/jsmaxcharlast.html">jSmaxCharLast</a></td>
<td>1</td>
<td>&nbsp;</td>
<td>5.1</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>jSpacing</td>
<td><i><span class="smallblock">NULL</span></i></td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;<span class="smallblock">DEPRACATED</span> from &gt;= 5.1

</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/jsword.html">jSWord</a></td>
<td>0.4</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>orphansAllowed</td>
<td>5</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;Removed mPDF 5.7</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/allowcjkorphans.html">allowCJKorphans</a></td>
<td><span class="smallblock">TRUE</span></td>
<td>&nbsp;</td>
<td>5.2</td>
<td>Wrapping of CJK text</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/allowcjkoverflow.html">allowCJKoverflow</a></td>
<td><span class="smallblock">FALSE</span></td>
<td>&nbsp;</td>
<td>5.2</td>
<td>Wrapping of CJK text</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/cjkforceend.html">CJKforceend</a></td>
<td><span class="smallblock">FALSE</span></td>
<td>&nbsp;</td>
<td>5.7</td>
<td>Wrapping of CJK text</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>
<p><a href="/reference/mpdf-variables/tabspaces.html">tabSpaces</a></p>
</td>
<td>8</td>
<td>&nbsp;</td>
<td>2.3</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/justifyb4br.html">justifyB4br</a></td>
<td><span class="smallblock">FALSE</span></td>
<td>&nbsp;</td>
<td>4.4</td>
<td>Justify the line before a &lt;br&gt; when using text-align: justify</td>
</tr>
<tr>
<td>Hyphenation</td>
<td>hyphenate</td>
<td><span class="smallblock">FALSE</span></td>
<td>&nbsp;</td>
<td>2.5</td>
<td>&nbsp;Removed mPDF 5.7</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>hyphenateTables</td>
<td><span class="smallblock">FALSE</span></td>
<td>&nbsp;</td>
<td>2.5</td>
<td>&nbsp;Removed mPDF 5.7</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/shylang.html">SHYlang</a></td>
<td>"en"</td>
<td>&nbsp;</td>
<td>2.5</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Columns</td>
<td><a href="/reference/mpdf-variables/keepcolumns.html">keepColumns</a></td>
<td><span class="smallblock">FALSE</span> 

</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/max-colh-correction.html">max_colH_correction</a></td>
<td>1.15</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Lists</td>
<td><a href="/reference/mpdf-variables/list-auto-mode.html">list_auto_mode</a>

</td>
<td>"browser"

</td>
<td>&nbsp;</td>
<td>6.0

</td>
<td>&nbsp;

</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/list-indent-default.html">list_indent_default</a></td>
<td>"40px"</td>
<td>&nbsp;</td>
<td>6.0</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/list-indent-default-mpdf.html">list_indent_default_mpdf</a></td>
<td>"0em"</td>
<td>&nbsp;</td>
<td>6.0</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/list-marker-offset.html">list_marker_offset</a></td>
<td>"5.5pt"</td>
<td>&nbsp;</td>
<td>6.0</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/list-symbol-size.html">list_symbol_size</a></td>
<td>"3.6pt"</td>
<td>&nbsp;</td>
<td>6.0</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>list_align_style</td>
<td>"R"</td>
<td>&nbsp;</td>
<td>2.1</td>
<td>Removed mPDF 6.0</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/list-indent-first-level.html">list_indent_first_level</a></td>
<td>0</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/list-number-suffix.html">list_number_suffix</a></td>
<td>&nbsp;"."</td>
<td>&nbsp;</td>
<td>2.1</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Watermarks</td>
<td><a href="/reference/mpdf-variables/showwatermarkimage.html">showWatermarkImage</a></td>
<td>&nbsp;<i><span class="smallblock">NULL</span></i></td>
<td>&nbsp;</td>
<td>2.2</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/showwatermarktext.html">showWatermarkText</a></td>
<td>&nbsp;<i><span class="smallblock">NULL</span></i></td>
<td>&nbsp;</td>
<td>2.2</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/watermark-font.html">watermark_font</a></td>
<td>&nbsp;""

</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/watermarkimagealpha.html">watermarkImageAlpha</a></td>
<td>&nbsp;0.2</td>
<td>&nbsp;</td>
<td>2.2

</td>
<td>Can be changed by <a href="/reference/mpdf-functions/setwatermarktext.html">SetWatermarkImage()</a></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/watermarkimgalphablend.html">watermarkImgAlphaBlend</a></td>
<td>"Normal"</td>
<td>&nbsp;</td>
<td>4.5</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/watermarkimgbehind.html">watermarkImgBehind</a></td>
<td><span class="smallblock">FALSE</span></td>
<td>&nbsp;</td>
<td>4.4</td>
<td>Place watermark images behind page contents</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><a href="/reference/mpdf-variables/watermarktextalpha.html">watermarkTextAlpha</a></td>
<td>&nbsp;0.2</td>
<td>&nbsp;</td>
<td>2.2</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Borders</td>
<td><a href="/what-else-can-i-do/backgrounds-borders.html">autoPadding</a></td>
<td><span class="smallblock">FALSE</span></td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>3.0</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Bookmarks</td>
<td><a href="/reference/mpdf-variables/bookmarkstyles.html">bookmarkStyles</a></td>
<td><span class="smallblock">array()</span></td>
<td><span class="smallblock">DOCUMENT</span></td>
<td>5.4</td>
<td>Specify appearance of Bookmarks in PDF reader</td>
</tr>
</tbody> </table>
<p>[1] Variables with scope marked as <span class="smallblock">DOCUMENT</span> should only be set once at the beginning of the document. All others can be changed during the course of creating the document.</p>
</div>
</div>

