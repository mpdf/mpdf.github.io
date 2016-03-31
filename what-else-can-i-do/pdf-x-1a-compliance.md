---
layout: page
title: PDF/X-1a compliance
parent_title: What Else Can I Do
permalink: /what-else-can-i-do/pdf-x-1a-compliance.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 5.1)</p>
<p>PDF/X-1a is a file format to facilitate printing of electronic documents.</p>
<p>Two key elements to this function are the requirement for PDF/X documents to be 100% self-contained, and all images need to be CMYK or spot colors.</p>
<p>A PDF/X document can be identified as such through PDF/X-specific metadata located in the document. However, claiming to be PDF/X compliant and being so are not necessarily the same.</p>

<div class="alert alert-info" role="alert"><b>Important</b>: mPDF is <b><i>not guaranteed </i></b>to produce fully PDF/X-1a compliant files in all circumstances. It is the users responsibility to check compliance if this is essential.</div>
<h2>mPDF and PDF/X-1a compliance</h2>
<p>You can make mPDF produce mPDF/X-1a:2003 compliant files by setting:</p>

{% highlight php %}
<?php

$this->PDFX = true; // Edit in config.php or set at runtime
{% endhighlight %}

<h3>Colorspaces and ICC Profiles</h3>
<p>PDF files handle colours internally in a number of different colorspaces. PDFX files can only use CMYK and spot colurs, and a colorspace profile must be embedded in the document.</p>
<p>It is likely that most content in a PDF file will be RGB unless you have specifically defined otherwise e.g. a CMYK JPG image file, or colours defined as CMYK() etc.</p>
<p>Colorspaces can be altered using <a href="{{ "/reference/mpdf-variables/restrictcolorspace.html" | prepend: site.baseurl }}">restrictColorSpace</a>.</p>
<p>An ICC Color profile must be embedded in the file.</p>
<p>A default CMYK ICC profile is included with mPDF: SWOP2006_Coated5v2.icc</p>
<p>Sources of free ICC profiles are:</p>
<ul>
<li><a href="http://www.color.org/">http://www.color.org</a></li>
<li><a href="http://www.eci.org/">http://www.eci.org</a> </li>
<li><a href="http://www.color.org/profiles2.xalter">http://www.color.org/profiles2.xalter </a></li>
<li><a href="http://www.adobe.com/support/downloads/iccprofiles/iccprofiles_win.html">http://www.adobe.com/support/downloads/iccprofiles/iccprofiles_win.html </a></li>
</ul>
<p>You can change the color profile used by mPDF by adding a&nbsp; <span class="filename">*.icc</span> file to the <span class="filename">[mpdf]/iccprofiles/</span> folder. It must be a 4-colour CMYK profile. Then edit <span class="filename">config.php</span> e.g.</p>

{% highlight php %}
<?php

$this->ICCProfile = 'SWOP2006_Coated5v2';
{% endhighlight %}

<h3>Fonts</h3>
<p>All fonts must be embedded in a PDF/X file. mPDF normally uses the core Adobe fonts (Helvetica, Times, Courier, Symbol and Zapfdingbats) in a number of situations, and these font files are not available to embed. This affects:</p>
<ul>
<li><span class="parameter">$useCoreFontsOnly</span> is not permitted</li>
<li>lists <code>&lt;ul&gt;</code> cannot use Zapfdingbats font for bullets</li>
<li>form element <code>&lt;select&gt;</code> cannot use Zapfdingbats character as the drop-down symbol</li>
<li>ISBN/ISSN barcode cannot use Helvetica for the ISBN number (above the bar)</li>
</ul>
<p>Also, the fonts GB, BIG5, UHC and SJIS which reference the free CJK font pack from Adobe cannot be used</p>
<h3>Transparency and Annotations</h3>
<p>Because PDF/X-1a has the objective of ensuring reliable reproduction of the document, no objects may be transparent or semi-transparent. This affects:</p>
<ul>
<li>watermarks text or images</li>
<li>images with the CSS property <span class="parameter">opacity</span> set</li>
<li>annotation markers</li>
</ul>
<h2>Making it happen!</h2>
<p>When <code>$this-&gt;PDFX</code> is set to true, the following changes will automatically and silently happen:</p>
<ul>
<li>list bullets will use the characters from the current font (if available) e.g. • ⚬ ▪ </li>
<li>the default font (which in some circumstances is set to a core Adobe font) is set to an alternative embedded font</li>
<li>annotations (including hyperlinks) have their 'flag' changed to /F 28 which should force printing (this seems to make no difference but is required for PDFX compliance)</li>
<li>a /Charset entry is included for each font when using embedded subsets</li>
<li>a Metadata object is added to the file </li>
<li>an ICC Color Profile is added as /OuputIntent</li>
</ul>
<p>Only the first change may make a discernible change to the displayed document. All other changes are to the file structure.</p>
<h3>Warnings</h3>
<p>Some problems can be fixed by mPDF, but will cause a change to the appearance of your document. By default they will generate warning messages. Once you have assessed the warnings, you can direct mPDF to make these changes automatically by setting in your script:</p>

{% highlight php %}
<?php

$mpdf->PDFXauto = true; // Overrides warnings making changes when possible to force PDFX-1a compliance
{% endhighlight %}

<p>&nbsp;</p>
<p>The following issues will cause a warning message when you try to generate a PDFX file:</p>
<table class="bpmTopic"> <thead>
<tr>
<td>Problem detected</td>
<td>Action taken by mPDF</td>
</tr>
</thead> <tbody>
<tr>
<td>List bullets cannot be substituted from current font</td>
<td>Bullets substituted by a hypen "-"</td>
</tr>
<tr>
<td>
<p>Character substitution (<span class="parameter">$useSubstitutions</span> or <span class="parameter">$useSubstitutionsMB</span>) is enabled.</p>
<p>This would attempt to substitute missing characters using core Adobe fonts which are disallowed.</p>
</td>
<td>Character substitution is disabled

</td>
</tr>
<tr>
<td>Annotation markers are present; these cannot be semi-transparent and may hide underlying text.</td>
<td>Annotation markers are placed in the right margin</td>
</tr>
<tr>
<td>
<p>Images which have CSS property opacity set less than 1 - PDFX does not allow transparency.</p>
<p>NB GIF or PNG images with a simple transparency set (not alpha-channel mask) are valid.</p>
</td>
<td>Opacity is changed to 1 (no transparency)</td>
</tr>
<tr>
<td>Core fonts (Times, Helvetica, Courier) are specified directly e.g. in CSS stylesheet</td>
<td>Font will be substituted with an available sans, serif, or mono font.</td>
</tr>
<tr>
<td>Barcode of ISBN, ISSN or EAN-13 type which specifies the code to appear above the barcode (normally uses Helvetica font).</td>
<td>Substitutes available sans-serif font</td>
</tr>
<tr>
<td>Form element <code>&lt;select&gt;</code> which normally uses a Zapfdingbats character for the drop-down symbol.</td>
<td>An equal sign "=" will be substituted if ▼ is not available in the default sans-serif font.</td>
</tr>
</tbody> </table>
<h3>Fatal Errors</h3>
<p>Some issues cannot be fixed automatically by mPDF and will generate fatal errors:</p>
<ul>
<li><span class="parameter">$useCoreFontsOnly</span> is set as <span class="smallblock">TRUE</span> (cannot embed core fonts)</li>
<li>BIG5, SJIS, UHC or GB fonts cannot be used (cannot be embedded)</li>
<li>Watermarks - text or image - are not permitted (transparency is disallowed so will make text unreadable)</li>
<li>PNG images with alpha channel transparency ('masks' not allowed)</li>
<li>encryption is enabled</li>
</ul>
<h2>See Also</h2>
<ul>
<li class="manual_boxlist"><a href="{{ "/what-else-can-i-do/pdf-a1-b-compliance.html" | prepend: site.baseurl }}">PDF/A1-b compliance</a></li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/pdfa.html" | prepend: site.baseurl }}">PDFA</a> - Create PDF/A1-b compliant document</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/pdfx.html" | prepend: site.baseurl }}">PDFX</a> - Create PDF/X-1a compliant document</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/pdfaauto.html" | prepend: site.baseurl }}">PDFAauto</a> - Specify whether to automatically fix issues to create PDF/A1-b compliant document</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/pdfxauto.html" | prepend: site.baseurl }}">PDFXauto</a> - Specify whether to automatically fix issues to create PDF/X-1a compliant document</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/iccprofile.html" | prepend: site.baseurl }}">ICCProfile</a> - Specify the ICC profile for the chosen colorspace used in the document</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/restrictcolorspace.html" | prepend: site.baseurl }}">restrictColorSpace</a> - Specify whether to automatically limit the colorspaces used</li>
</ul>
</div>
</div>

