---
layout: page
title: ICCProfile
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/iccprofile.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 4.3)</p>
<p>ICCProfile – Specify ICC colour profile to use when creating PDF/A1-b or PDF/X-1a (mPDF &gt;= 5.1) compliant documents</p>
<h2>Description</h2>

<div class="alert alert-info" role="alert">void <b>ICCProfile</b></div>
<p>Specify ICC colour profile to use when creating PDF/A1-b or PDF/X-1a compliant documents. The file must exist in <span class="filename">/iccprofiles/</span> folder</p>
<p>Either a 3-colour RGB profile or a 4-colour CMYK profile should be used depending on other settings.</p>
<p>The default colorspace for a PDF/A1-b document is RGB. The default for a PDF/X-1a document is CMYK.</p>
<p>Specify the name without the <span class="filename">.icc</span> extension. sRGB_IEC61966-2-1 is used as the default file for PDF/A1-b documents if none is specified (a profile must be specified for PDF/X-1a)</p>
<h2>Values</h2>
<p class="manual_param_dt"><span class="parameter">ICCProfile</span> =&nbsp; <span class="smallblock">STRING</span></p>
<p class="manual_param_dd">Name of a valid ICC colour profile in the <span class="filename">/iccprofiles/</span> folder - without the <span class="filename">.icc</span> extension.

<span class="smallblock">DEFAULT</span>: <span class="smallblock">BLANK</span>&nbsp;<span class="smallblock">&nbsp;</span></p>
<h2>Changelog</h2>
<table class="bpmTopic"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>4.3</td>
<td>Variable was added.</td>
</tr>
</tbody> </table>
<h2>See Also</h2>
<ul>
<li class="manual_boxlist"><a href="/what-else-can-i-do/pdf-a1-b-compliance.html">PDF/A1-b compliance</a></li>
<li class="manual_boxlist"><a href="/what-else-can-i-do/pdf-x-1a-compliance.html">PDF/X-1a compliance</a></li>
<li class="manual_boxlist"><a href="/reference/mpdf-variables/pdfa.html">PDFA</a> - Create PDF/A1-b compliant document</li>
<li class="manual_boxlist"><a href="/reference/mpdf-variables/pdfx.html">PDFX</a> - Create PDF/X-1a compliant document</li>
<li class="manual_boxlist"><a href="/reference/mpdf-variables/pdfaauto.html">PDFAauto</a> - Specify whether to automatically fix issues to create PDF/A1-b compliant document</li>
<li class="manual_boxlist"><a href="/reference/mpdf-variables/pdfxauto.html">PDFXauto</a> - Specify whether to automatically fix issues to create PDF/X-1a compliant document</li>
<li class="manual_boxlist"><a href="/reference/mpdf-variables/restrictcolorspace.html">restrictColorSpace</a> - Specify whether to automatically limit the colorspaces used</li>
</ul>
</div>
</div>

