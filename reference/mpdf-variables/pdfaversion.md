---
layout: page
title: PDFAversion
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/pdfaversion.html
modification_time: 2025-05-14T20:58:18+02:00
---

(mPDF &ge; 7.1)

PDFAversion – Specify PDFA compliance version

# Description

string **PDFAversion**

Specify which specific PDFA compliance version to use

# Values

<span class="parameter">$PDFAversion</span> =  `1-B`\|`3-B`

**Values**

Default: `1-B`

# Changelog

<table class="table">
<thead>
<tr>
  <th>Version</th>
  <th>Description</th>
</tr>
</thead>
<tbody>
<tr>
  <td>7.1</td>
  <td>Variable was added.</td>
</tr>
</tbody>
</table>

# See Also

* <a href="{{ "/what-else-can-i-do/pdf-a3-xmp-rdf.html" | prepend: site.baseurl }}">PDF/A-3 associated files + Additional XMP RDF</a>
* <a href="{{ "/what-else-can-i-do/pdf-a1-b-compliance.html" | prepend: site.baseurl }}">PDF/A1-b compliance</a>
* <a href="{{ "/reference/mpdf-variables/pdfa.html" | prepend: site.baseurl }}">PDFA</a> - Create PDF/A1-b compliant document
* <a href="{{ "/reference/mpdf-variables/iccprofile.html" | prepend: site.baseurl }}">ICCProfile</a> - Specify the ICC profile for the chosen colorspace used in the document
* <a href="{{ "/reference/mpdf-variables/restrictcolorspace.html" | prepend: site.baseurl }}">restrictColorSpace</a> - Specify whether to automatically limit the colorspaces used

