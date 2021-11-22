---
layout: page
title: Overview
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/overview.html
modification_time: 2015-08-05T12:01:32+00:00
---

# mPDF Variables by Category

Most defaults of the following variables are set in the default configuration classes.

You can redefine the variables in individual scripts as a
<a href="{{ "/configuration/configuration-v7-x.html" | prepend: site.baseurl }}">configuration variable</a>

<table class="table">
    <thead>
        <tr>
            <th>Category</th>
            <th>Variable</th>
            <th>Default value</th>
  <th markdown="1">
  Scope[^1]
  </th>
            <th>Version</th>
            <th>Notes</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                Paging
            </td>
            <td><a href="{{ " /reference/mpdf-variables/mirrormargins.html " | prepend: site.baseurl }}">mirrorMargins</a></td>
            <td><code>0</code></td>
            <td><span class="smallblock">DOCUMENT</span>
            </td>
            <td>4.0</td>
            <td>The alias <span class="parameter">$useOddEven</span> was used before v4.0
            </td>
        </tr>
        <tr>
            <td> </td>
            <td>
                restoreBlockPagebreaks
            </td>
            <td><code>false</code></td>
            <td> </td>
            <td>2.3</td>
            <td> Removed v6.0
            </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/forceportraitmargins.html " | prepend: site.baseurl }}">forcePortraitMargins</a></td>
            <td><code>false</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>2.3</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/displaydefaultorientation.html " | prepend: site.baseurl }}">displayDefaultOrientation</a></td>
            <td><code>false</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>2.3</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/autopagebreak.html " | prepend: site.baseurl }}">autoPageBreak</a></td>
            <td><code>true</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>3.1</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/setautotopmargin.html " | prepend: site.baseurl }}">setAutoTopMargin</a></td>
            <td><code>false</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>4.0</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/setautobottommargin.html " | prepend: site.baseurl }}">setAutoBottomMargin</a></td>
            <td><code>false</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>4.0</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/automarginpadding.html " | prepend: site.baseurl }}">autoMarginPadding</a></td>
            <td><code>2</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>4.0</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/margbuffer.html " | prepend: site.baseurl }}">margBuffer</a></td>
            <td><code>2</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>5.5</td>
            <td>Allows an (empty) end of block to extend beyond the bottom margin by this amount (mm)</td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/printers-info.html " | prepend: site.baseurl }}">printers_info</a></td>
            <td><code>false</code></td>
            <td> </td>
            <td>5.1</td>
            <td>Adds date and page info for printer when using <code>@page</code> and <code>marks:crop;</code></td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/bleedmargin.html " | prepend: site.baseurl }}">bleedMargin</a></td>
            <td><code>5</code></td>
            <td> </td>
            <td>5.1</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/crossmarkmargin.html " | prepend: site.baseurl }}">crossMarkMargin</a></td>
            <td><code>5</code></td>
            <td> </td>
            <td>5.1</td>
            <td>Distance of cross mark from margin in mm</td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/cropmarkmargin.html " | prepend: site.baseurl }}">cropMarkMargin</a></td>
            <td><code>8</code></td>
            <td> </td>
            <td>5.1</td>
            <td>Distance of crop mark from margin in mm</td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/cropmarklength.html " | prepend: site.baseurl }}">cropMarkLength</a></td>
            <td><code>18</code></td>
            <td> </td>
            <td>5.1</td>
            <td>Default length in mm of crop line</td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/nonprintmargin.html " | prepend: site.baseurl }}">nonPrintMargin</a></td>
            <td><code>8</code></td>
            <td> </td>
            <td>5.1</td>
            <td>Non-printable border at edge of paper sheet in mm</td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/defaultpagebreaktype.html " | prepend: site.baseurl }}">defaultPagebreakType</a></td>
            <td><code>'cloneall'</code></td>
            <td> </td>
            <td>6.0</td>
            <td>for forced pagebreaks using <code>&lt;pagebreak /&gt;</code></td>
        </tr>
        <tr>
            <td>
                Page numbering
            </td>
            <td><a href="{{ " /reference/mpdf-variables/aliasnbpg.html " | prepend: site.baseurl }}">aliasNbPg</a></td>
            <td><code>"{nb}"</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td> </td>
            <td>NB The default value will not appear correctly in a PDF version of this page; it is substituted by the number of pages.</td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/aliasnbpggp.html " | prepend: site.baseurl }}">aliasNbPgGp</a></td>
            <td><code>"{nbpg}"</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td> </td>
            <td>NB The default value will not appear correctly in a PDF version of this page; it is substituted by the number of pages.</td>
        </tr>
        <tr>
            <td>
            </td>
            <td><a href="{{ " /reference/mpdf-variables/pagenumprefix.html " | prepend: site.baseurl }}">pagenumPrefix</a></td>
            <td><code>""</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>3.0</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/pagenumsuffix.html " | prepend: site.baseurl }}">pagenumSuffix</a></td>
            <td><code>""</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>3.0</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/nbpgprefix.html " | prepend: site.baseurl }}">nbpgPrefix</a></td>
            <td><code>""</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>3.0</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/nbpgsuffix.html " | prepend: site.baseurl }}">nbpgSuffix</a></td>
            <td><code>""</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>3.0</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/defaultpagenumstyle.html " | prepend: site.baseurl }}">defaultPageNumStyle</a></td>
            <td><code>"1"</code></td>
            <td><span class="smallblock"><span class="smallblock">DOCUMENT</span></span>
            </td>
            <td>6.0</td>
            <td> </td>
        </tr>
        <tr>
            <td>Fonts, Languages and Character sets</td>
            <td><a href="{{ " /reference/mpdf-variables/allow-charset-conversion.html " | prepend: site.baseurl }}">percentSubset</a></td>
            <td><code>30</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>5.0
            </td>
            <td>Control subsetting behaviour for fonts
            </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/usekerning.html " | prepend: site.baseurl }}">useKerning</a></td>
            <td><code>false</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>5.4</td>
            <td>Set to <code>true</code> to enable CSS support for <span class="parameter">font-kerning</span></td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/maxttffilesize.html " | prepend: site.baseurl }}">maxTTFFilesize</a></td>
            <td><code>2000</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>5.0</td>
            <td>Control subsetting behaviour for fonts</td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/allow-charset-conversion.html " | prepend: site.baseurl }}">allow_charset_conversion</a></td>
            <td><code>true</code></td>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/charset-in.html " | prepend: site.baseurl }}">charset_in</a></td>
            <td><code>null</code></td>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/bidirectional.html " | prepend: site.baseurl }}">biDirectional</a></td>
            <td><code>false</code></td>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td>use_CJK_only</td>
            <td><code>false</code></td>
            <td> </td>
            <td> </td>
            <td>Removed mPDF 5.0
            </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/useadobecjk.html " | prepend: site.baseurl }}">useAdobeCJK</a></td>
            <td><code>true</code></td>
            <td><span class="smallblock">DOCUMENT*</span></td>
            <td>5.0</td>
            <td>
                * You must only change this variable as a <a href="{{ " /configuration/configuration-v7-x.html " | prepend: site.baseurl }}">constructor parameter</a>
                Use initial parameter to change at runtime e.g. <code>$mpdf = new \Mpdf\Mpdf(['mode' => '+aCJK']);</code>
            </td>
        </tr>
        <tr>
            <td> </td>
            <td>
                autoFontGroupSize
            </td>
            <td><code>2</code></td>
            <td> </td>
            <td>2.3</td>
            <td>Removed in v6.0
            </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/uselang.html " | prepend: site.baseurl }}">useLang</a></td>
            <td><code>true</code></td>
            <td> </td>
            <td>2.3</td>
            <td>
                Default value <code>false</code> before v4.0 Removed in v6.0
            </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/autoscripttolang.html " | prepend: site.baseurl }}">autoScriptToLang</a></td>
            <td><code>false</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>6.0</td>
            <td>
                Replaces SetAutoFont function
            </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/autolangtofont.html " | prepend: site.baseurl }}">autoLangToFont</a></td>
            <td><code>false</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>6.0</td>
            <td>
                Replaces useLang
            </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/basescript.html " | prepend: site.baseurl }}">baseScript</a></td>
            <td><code>1</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>6.0</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/autoarabic.html " | prepend: site.baseurl }}">autoArabic</a></td>
            <td><code>false</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>6.0</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/autovietnamese.html " | prepend: site.baseurl }}">autoVietnamese</a></td>
            <td><code>false</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>6.0</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td>disableMultilingualJustify
            </td>
            <td><code>false</code></td>
            <td> </td>
            <td>2.3</td>
            <td> Removed in v6.0
            </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/falseboldweight.html " | prepend: site.baseurl }}">falseBoldWeight</a></td>
            <td><code>5</code></td>
            <td> </td>
            <td>4.2</td>
            <td>Weight for bold text when using an artificial (outline) bold</td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/smcapsscale.html " | prepend: site.baseurl }}">smCapsScale</a></td>
            <td><code>0.75</code></td>
            <td> </td>
            <td>5.0</td>
            <td>Factor of <code>1</code> to scale capital letters</td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/smcapsstretch.html " | prepend: site.baseurl }}">smCapsStretch</a></td>
            <td><code>115</code></td>
            <td> </td>
            <td>5.0</td>
            <td>% to stretch small caps horizontally</td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/backupsubsfont.html " | prepend: site.baseurl }}">backupSubsFont</a></td>
            <td><code>array( 'dejavusanscondensed' )</code></td>
            <td> </td>
            <td>5.0</td>
            <td>Set as a font <a href="{{ "/configuration/configuration-v7-x.html" | prepend: site.baseurl }}">configuration variable</a></td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/backupsipfont.html " | prepend: site.baseurl }}">backupSIPFont</a></td>
            <td><code>''</code></td>
            <td> </td>
            <td>5.0</td>
            <td>Set as a font <a href="{{ "/configuration/configuration-v7-x.html" | prepend: site.baseurl }}">configuration variable</a></td>
        </tr>
        <tr>
            <td>Configuration</td>
            <td>useOnlyCoreFonts</td>
            <td><code>false</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>(3.0)
            </td>
            <td>
                Removed mPDF 5.0 - Use <code>$mpdf = new \Mpdf\Mpdf(['mode' => 'c']);</code> The alias <span class="parameter">$use_embeddedfonts_1252</span> was used before v4.0
            </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/repackagettf.html " | prepend: site.baseurl }}">repackageTTF</a></td>
            <td><code>false</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>5.2</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/usesubstitutions.html " | prepend: site.baseurl }}">useSubstitutions</a></td>
            <td><code>false</code></td>
            <td> </td>
            <td>(4.0)</td>
            <td>
                NB Altered behaviour mPDF &ge; 5.0 Default value <code>true</code> before v4.0
            </td>
        </tr>
        <tr>
            <td> </td>
            <td>useSubstitutionsMB</td>
            <td><code>false</code></td>
            <td> </td>
            <td>4.2</td>
            <td>
                Removed in mPDF 5.0 Use useSusbstitutions instead. Substitute missing characters in UTF-8(multibyte) documents - from core fonts
            </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/collapseblockmargins.html " | prepend: site.baseurl }}">collapseBlockMargins</a></td>
            <td><code>true</code></td>
            <td> </td>
            <td>4.2</td>
            <td>Allows top and bottom margins to collapse between block elements</td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/dpi.html " | prepend: site.baseurl }}">dpi</a></td>
            <td><code>96</code></td>
            <td> </td>
            <td>4.5</td>
            <td>Specifies size conversion for objects with size set by "px"</td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/enableimports.html " | prepend: site.baseurl }}">enableImports</a></td>
            <td><code>false</code></td>
            <td><span class="smallblock">DOCUMENT*</span></td>
            <td>4.3</td>
            <td>Enable Imported PDF files (templates) [was mPDFI()] * You must only change this variable as a
                <a href="{{ " /configuration/configuration-v7-x.html " | prepend: site.baseurl }}">constructor parameter</a>
                Use <a href="{{ " /reference/mpdf-functions/setimportuse.html " | prepend: site.baseurl }}">SetImportUse()</a> to
                change at runtime.
            </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/allow-output-buffering.html " | prepend: site.baseurl }}">allow_output_buffering</a></td>
            <td><code>false</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>3.0</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/allow-html-optional-endtags.html " | prepend: site.baseurl }}">allow_html_optional_endtags</a></td>
            <td><code>true</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/ignore-invalid-utf8.html " | prepend: site.baseurl }}">ignore_invalid_utf8</a></td>
            <td><code>false</code></td>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/text-input-as-html.html " | prepend: site.baseurl }}">text_input_as_HTML</a></td>
            <td><code>false</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/progressbar.html " | prepend: site.baseurl }}">progressBar</a></td>
            <td><code>false</code></td>
            <td><span class="smallblock">DOCUMENT*</span></td>
            <td>4.2</td>
            <td>Shows progress-bars whilst generating file * You must only change this variable as a
                <a href="{{ " /configuration/configuration-v7-x.html " | prepend: site.baseurl }}">constructor parameter key</a>
                Use <a href="{{ " /reference/mpdf-functions/startprogressbaroutput.html " | prepend: site.baseurl }}">StartProgressBarOutput()</a>
                to set at runtime.</td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/progbar-heading.html " | prepend: site.baseurl }}">progbar_heading</a></td>
            <td><code>"mPDF file progress"</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>5.0</td>
            <td>Customise the use of progress-bars</td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/progbar-althtml.html " | prepend: site.baseurl }}">progbar_altHTML</a></td>
            <td><code>""</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>5.0</td>
            <td>Customise the use of progress-bars</td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/incrementfpr1-1-4.html " | prepend: site.baseurl }}">incrementFPR1 [1-4]</a></td>
            <td><code>10,20,30,50</code></td>
            <td> </td>
            <td>4.2</td>
            <td> </td>
        </tr>
        <tr>
            <td>Debugging</td>
            <td><a href="{{ " /reference/mpdf-variables/debug.html " | prepend: site.baseurl }}">debug</a></td>
            <td><code>false</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>3.1</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/debugfonts.html " | prepend: site.baseurl }}">debugfonts</a></td>
            <td><code>false</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>5.0</td>
            <td>Show errors and warning notes for fonts</td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/showimageerrors.html " | prepend: site.baseurl }}">showImageErrors</a></td>
            <td><code>false</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>3.0</td>
            <td> </td>
        </tr>
        <tr>
            <td>PDF/A1-b, PDF/X-1a Colorspaces
            </td>
            <td><a href="{{ " /reference/mpdf-variables/pdfa.html " | prepend: site.baseurl }}">PDFA</a></td>
            <td><code>false</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>4.3</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/pdfaauto.html " | prepend: site.baseurl }}">PDFAauto</a></td>
            <td><code>false</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>4.3</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/pdfx.html " | prepend: site.baseurl }}">PDFX</a></td>
            <td><code>false</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>5.1</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/pdfxauto.html " | prepend: site.baseurl }}">PDFXauto</a></td>
            <td><code>false</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>5.1</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/iccprofile.html " | prepend: site.baseurl }}">ICCProfile</a></td>
            <td><code>""</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>4.3</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/restrictcolorspace.html " | prepend: site.baseurl }}">restrictColorSpace</a></td>
            <td><code>0</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>5.1</td>
            <td> </td>
        </tr>
        <tr>
            <td>Annotations</td>
            <td><a href="{{ " /reference/mpdf-variables/title2annots.html " | prepend: site.baseurl }}">title2annots</a></td>
            <td><code>false</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>2.2</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/annotmargin.html " | prepend: site.baseurl }}">annotMargin</a></td>
            <td><code>null</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>2.2
            </td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/annotopacity.html " | prepend: site.baseurl }}">annotOpacity</a></td>
            <td><code>0.5</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>2.2</td>
            <td> </td>
        </tr>
        <tr>
            <td>Bookmarks (Outlines)</td>
            <td><a href="{{ " /reference/mpdf-variables/anchor2bookmark.html " | prepend: site.baseurl }}">anchor2Bookmark</a></td>
            <td><code>0</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/h2bookmarks.html " | prepend: site.baseurl }}">h2bookmarks</a></td>
            <td><code>array()</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>5.7</td>
            <td>Automatically generate bookmarks from Heading elements H1-H6</td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/h2toc.html " | prepend: site.baseurl }}">h2toc</a></td>
            <td><code>array()</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>5.7</td>
            <td>Automatically generate ToC entries from Heading elements H1-H6</td>
        </tr>
        <tr>
            <td>CSS &amp; Styles</td>
            <td><a href="{{ " /reference/mpdf-variables/cssselectmedia.html " | prepend: site.baseurl }}">CSSselectMedia</a></td>
            <td><code>"print"</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>4.4</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td>disablePrintCSS</td>
            <td><code>null</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td> </td>
            <td><span class="smallblock">deprecated</span> from &ge; 4.4</td>
        </tr>
        <tr>
            <td> </td>
            <td>rtlCSS</td>
            <td><code>2</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td> </td>
            <td> Removed from v 5.1</td>
        </tr>
        <tr>
            <td> </td>
            <td>useDefaultCSS2</td>
            <td> </td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td> </td>
            <td><span class="smallblock">deprecated</span> from &ge; 2.2</td>
        </tr>
        <tr>
            <td>Page Headers &amp; Footers</td>
            <td><a href="{{ " /reference/mpdf-variables/defaultfooterfontsize.html " | prepend: site.baseurl }}">defaultfooterfontsize</a></td>
            <td><code>8</code></td>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/defaultfooterfontstyle.html " | prepend: site.baseurl }}">defaultfooterfontstyle</a></td>
            <td><code>"BI"</code></td>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/defaultfooterline.html " | prepend: site.baseurl }}">defaultfooterline</a></td>
            <td><code>1</code></td>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/defaultheaderfontsize.html " | prepend: site.baseurl }}">defaultheaderfontsize</a></td>
            <td><code>8</code></td>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/defaultheaderfontstyle.html " | prepend: site.baseurl }}">defaultheaderfontstyle</a></td>
            <td><code>"BI"</code></td>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/defaultheaderline.html " | prepend: site.baseurl }}">defaultheaderline</a></td>
            <td><code>1</code></td>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/footer-line-spacing.html " | prepend: site.baseurl }}">footer_line_spacing</a></td>
            <td><code>0.25</code></td>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/header-line-spacing.html " | prepend: site.baseurl }}">header_line_spacing</a></td>
            <td><code>0.25</code></td>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/forceportraitheaders.html " | prepend: site.baseurl }}">forcePortraitHeaders</a></td>
            <td><code>false</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td>headerPageNoMarker</td>
            <td><code>"!|"</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td> </td>
            <td><span class="smallblock">deprecated</span> from &ge; 4.0</td>
        </tr>
        <tr>
            <td>Tables</td>
            <td><a href="{{ " /reference/mpdf-variables/simpletables.html " | prepend: site.baseurl }}">simpleTables</a></td>
            <td><code>false</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>4.3</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/packtabledata.html " | prepend: site.baseurl }}">packTableData</a></td>
            <td><code>false</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>4.4</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td>cacheTables</td>
            <td><code>false</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>5.4</td>
            <td>Removed v6.0
            </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/tableminsizepriority.html " | prepend: site.baseurl }}">tableMinSizePriority</a></td>
            <td><code>false</code></td>
            <td> </td>
            <td>4.6</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/ignore-table-percents.html " | prepend: site.baseurl }}">ignore_table_percents</a></td>
            <td><code>false</code></td>
            <td> </td>
            <td>2.2</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/ignore-table-widths.html " | prepend: site.baseurl }}">ignore_table_widths</a></td>
            <td><code>false</code></td>
            <td> </td>
            <td>2.2</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/keep-table-proportions.html " | prepend: site.baseurl }}">keep_table_proportions</a></td>
            <td><code>false</code></td>
            <td> </td>
            <td>2.2</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/shrink-tables-to-fit.html " | prepend: site.baseurl }}">shrink_tables_to_fit</a></td>
            <td><code>1.4</code></td>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/table-error-report.html " | prepend: site.baseurl }}">table_error_report</a></td>
            <td><code>false</code></td>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/table-error-report-param.html " | prepend: site.baseurl }}">table_error_report_param</a></td>
            <td><code>""</code></td>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/use-kwt.html " | prepend: site.baseurl }}">use_kwt</a></td>
            <td><code>false</code></td>
            <td> </td>
            <td>2.0</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/iterationcounter.html " | prepend: site.baseurl }}">iterationCounter</a></td>
            <td><code>false</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>5.0</td>
            <td>Enables the use of a replaceable iteration counter in table headers or footers</td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/decimal-align.html " | prepend: site.baseurl }}">decimal_align</a></td>
            <td><span class="smallblock">cf.</span></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>5.7</td>
            <td>Array of characters enabled to align table columns</td>
        </tr>
        <tr>
            <td>Images</td>
            <td><a href="{{ " /reference/mpdf-variables/img-dpi.html " | prepend: site.baseurl }}">img_dpi</a></td>
            <td><code>96</code></td>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <td>Text Spacing &amp; Justification</td>
            <td><a href="{{ " /reference/mpdf-variables/normallineheight.html " | prepend: site.baseurl }}">normalLineheight</a></td>
            <td><code>1.33</code></td>
            <td> </td>
            <td>4.2</td>
            <td>Value used for <code>line-height</code> when CSS specified as <code>normal</code></td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/usefixednormallineheight.html " | prepend: site.baseurl }}">useFixedNormalLineHeight</a></td>
            <td><code>false</code></td>
            <td> </td>
            <td>6.0</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/usefixedtextbaseline.html " | prepend: site.baseurl }}">useFixedTextBaseline</a></td>
            <td><code>false</code></td>
            <td> </td>
            <td>6.0</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/adjustfontdesclineheight.html " | prepend: site.baseurl }}">adjustFontDescLineheight</a></td>
            <td><code>1.14</code></td>
            <td> </td>
            <td>6.0</td>
            <td> </td>
        </tr>
        <tr>
            <td>
            </td>
            <td><a href="{{ " /reference/mpdf-variables/jsmaxchar.html " | prepend: site.baseurl }}">jSmaxChar</a></td>
            <td><code>2</code></td>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/jsmaxwordlast.html " | prepend: site.baseurl }}">jSmaxWordLast</a></td>
            <td><code>2</code></td>
            <td> </td>
            <td>5.1</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/jsmaxcharlast.html " | prepend: site.baseurl }}">jSmaxCharLast</a></td>
            <td><code>1</code></td>
            <td> </td>
            <td>5.1</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td>jSpacing</td>
            <td><code>null</code></td>
            <td> </td>
            <td> </td>
            <td> <span class="smallblock">deprecated</span> from &ge; 5.1</td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/jsword.html " | prepend: site.baseurl }}">jSWord</a></td>
            <td><code>0.4</code></td>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td>orphansAllowed</td>
            <td><code>5</code></td>
            <td> </td>
            <td> </td>
            <td> Removed mPDF 5.7</td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/allowcjkorphans.html " | prepend: site.baseurl }}">allowCJKorphans</a></td>
            <td><code>true</code></td>
            <td> </td>
            <td>5.2</td>
            <td>Wrapping of CJK text</td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/allowcjkoverflow.html " | prepend: site.baseurl }}">allowCJKoverflow</a></td>
            <td><code>false</code></td>
            <td> </td>
            <td>5.2</td>
            <td>Wrapping of CJK text</td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/cjkforceend.html " | prepend: site.baseurl }}">CJKforceend</a></td>
            <td><code>false</code></td>
            <td> </td>
            <td>5.7</td>
            <td>Wrapping of CJK text</td>
        </tr>
        <tr>
            <td> </td>
            <td>
                <a href="{{ " /reference/mpdf-variables/tabspaces.html " | prepend: site.baseurl }}">tabSpaces</a>
            </td>
            <td><code>8</code></td>
            <td> </td>
            <td>2.3</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/justifyb4br.html " | prepend: site.baseurl }}">justifyB4br</a></td>
            <td><code>false</code></td>
            <td> </td>
            <td>4.4</td>
            <td>Justify the line before a <code>&lt;br&gt;</code> when using <code>text-align: justify</code></td>
        </tr>
        <tr>
            <td>Hyphenation</td>
            <td>hyphenate</td>
            <td><code>false</code></td>
            <td> </td>
            <td>2.5</td>
            <td> Removed mPDF 5.7</td>
        </tr>
        <tr>
            <td> </td>
            <td>hyphenateTables</td>
            <td><code>false</code></td>
            <td> </td>
            <td>2.5</td>
            <td> Removed mPDF 5.7</td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/shylang.html " | prepend: site.baseurl }}">SHYlang</a></td>
            <td><code>"en"</code></td>
            <td> </td>
            <td>2.5</td>
            <td> </td>
        </tr>
        <tr>
            <td>Columns</td>
            <td><a href="{{ " /reference/mpdf-variables/keepcolumns.html " | prepend: site.baseurl }}">keepColumns</a></td>
            <td><code>false</code></td>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/max-colh-correction.html " | prepend: site.baseurl }}">max_colH_correction</a></td>
            <td><code>1.15</code></td>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <td>Lists</td>
            <td><a href="{{ " /reference/mpdf-variables/list-auto-mode.html " | prepend: site.baseurl }}">list_auto_mode</a>
            </td>
            <td><code>"browser"</code></td>
            <td> </td>
            <td>6.0
            </td>
            <td>
            </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/list-indent-default.html " | prepend: site.baseurl }}">list_indent_default</a></td>
            <td><code>"40px"</code></td>
            <td> </td>
            <td>6.0</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/list-indent-default-mpdf.html " | prepend: site.baseurl }}">list_indent_default_mpdf</a></td>
            <td><code>"0em"</code></td>
            <td> </td>
            <td>6.0</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/list-marker-offset.html " | prepend: site.baseurl }}">list_marker_offset</a></td>
            <td><code>"5.5pt"</code></td>
            <td> </td>
            <td>6.0</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/list-symbol-size.html " | prepend: site.baseurl }}">list_symbol_size</a></td>
            <td><code>"3.6pt"</code></td>
            <td> </td>
            <td>6.0</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td>list_align_style</td>
            <td><code>"R"</code></td>
            <td> </td>
            <td>2.1</td>
            <td>Removed mPDF 6.0</td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/list-indent-first-level.html " | prepend: site.baseurl }}">list_indent_first_level</a></td>
            <td><code>0</code></td>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/list-number-suffix.html " | prepend: site.baseurl }}">list_number_suffix</a></td>
            <td><code>"."</code></td>
            <td> </td>
            <td>2.1</td>
            <td> </td>
        </tr>
        <tr>
            <td>Watermarks</td>
            <td><a href="{{ " /reference/mpdf-variables/showwatermarkimage.html " | prepend: site.baseurl }}">showWatermarkImage</a></td>
            <td><code>null</code></td>
            <td> </td>
            <td>2.2</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/showwatermarktext.html " | prepend: site.baseurl }}">showWatermarkText</a></td>
            <td><code>null</code></td>
            <td> </td>
            <td>2.2</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/watermark-font.html " | prepend: site.baseurl }}">watermark_font</a></td>
            <td><code>""</code></td>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/watermarkimagealpha.html " | prepend: site.baseurl }}">watermarkImageAlpha</a></td>
            <td><code>0.2</code></td>
            <td> </td>
            <td>2.2
            </td>
            <td>Can be changed by <a href="{{ " /reference/mpdf-functions/setwatermarkimage.html " | prepend: site.baseurl }}">SetWatermarkImage()</a></td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/watermarkimgalphablend.html " | prepend: site.baseurl }}">watermarkImgAlphaBlend</a></td>
            <td><code>"Normal"</code></td>
            <td> </td>
            <td>4.5</td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/watermarkimgbehind.html " | prepend: site.baseurl }}">watermarkImgBehind</a></td>
            <td><code>false</code></td>
            <td> </td>
            <td>4.4</td>
            <td>Place watermark images behind page contents</td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="{{ " /reference/mpdf-variables/watermarktextalpha.html " | prepend: site.baseurl }}">watermarkTextAlpha</a></td>
            <td><code>0.2</code></td>
            <td> </td>
            <td>2.2</td>
            <td> </td>
        </tr>
        <tr>
            <td>Borders</td>
            <td><a href="{{ " /what-else-can-i-do/backgrounds-borders.html " | prepend: site.baseurl }}">autoPadding</a></td>
            <td><code>false</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>3.0</td>
            <td> </td>
        </tr>
        <tr>
            <td>Bookmarks</td>
            <td><a href="{{ " /reference/mpdf-variables/bookmarkstyles.html " | prepend: site.baseurl }}">bookmarkStyles</a></td>
            <td><code>array()</code></td>
            <td><span class="smallblock">DOCUMENT</span></td>
            <td>5.4</td>
            <td>Specify appearance of Bookmarks in PDF reader</td>
        </tr>
    </tbody>
</table>


Notes:

[^1]: Variables with scope marked as <span class="smallblock">DOCUMENT</span> should only be set once at the beginning of
      the document. All others can be changed during the course of creating the document.
