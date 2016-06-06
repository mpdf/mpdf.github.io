---
layout: page
title: PDFAauto
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/pdfaauto.html
modification_time: 2015-08-05T12:02:18+00:00
---

(mPDF >= 4.3)

PDFAauto – Specify whether to automatically fix issues to create PDF/A1-b compliant document

# Description

void **PDFAauto**

Specify whether to automatically fix issues to create PDF/A1-b compliant document

# Values

<span class="parameter">$PDFAauto</span> =  <span class="smallblock">TRUE </span>| <span class="smallblock">FALSE</span>

**Values**

<span class="smallblock">TRUE </span>:  automatically fix issues to create PDF/A1-b compliant document 

<span class="smallblock">FALSE</span>: show warning messages if changes are required for compliance

<span class="smallblock">DEFAULT</span>: <span class="smallblock">FALSE</span>

# Changelog

<table class="table"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>4.3</td>
<td>Variable was added.</td>
</tr>
</tbody> </table>

# See Also

<ul>
<li class="manual_boxlist"><a href="{{ "/what-else-can-i-do/pdf-a1-b-compliance.html" | prepend: site.baseurl }}">PDF/A1-b compliance</a></li>
<li class="manual_boxlist"><a href="{{ "/what-else-can-i-do/pdf-x-1a-compliance.html" | prepend: site.baseurl }}">PDF/X-1a compliance</a></li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/pdfa.html" | prepend: site.baseurl }}">PDFA</a> - Create PDF/A1-b compliant document</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/pdfx.html" | prepend: site.baseurl }}">PDFX</a> - Create PDF/X-1a compliant document</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/pdfxauto.html" | prepend: site.baseurl }}">PDFXauto</a> - Specify whether to automatically fix issues to create PDF/X-1a compliant document</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/iccprofile.html" | prepend: site.baseurl }}">ICCProfile</a> - Specify the ICC profile for the chosen colorspace used in the document</li>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-variables/restrictcolorspace.html" | prepend: site.baseurl }}">restrictColorSpace</a> - Specify whether to automatically limit the colorspaces used</li>
</ul>

