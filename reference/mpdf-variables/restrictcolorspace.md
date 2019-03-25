---
layout: page
title: restrictColorSpace
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/restrictcolorspace.html
modification_time: 2015-08-05T12:02:24+00:00
---


(mPDF &ge; 5.1)

restrictColorSpace – Specify whether to automatically limit the colorspaces used

# Description

void **PDFAauto**

Specify whether to automatically limit the colorspaces used when creating PDF/A1-b or PDF/X-1a compliant documents.
PDF files can contain objects using different colorSpaces e.g. Grayscale, RGB and CMYK. By default, mPDF creates PDF
files using the colours as they are specified: font colour may be set (e.g. `#880000`) as an RGB colour, and the file
may contain JPG images in RGB or CMYK format.

In some circumstances, you may wish to create a PDF file with restricted colorSpaces e.g. printers will often want
files which contain only CMYK, spot colours, or grayscale, but not RGB. Using restrictColorSpace will attempt to
convert every colour value used in the document to the permitted colorSpace(s). Almost everything including images
will be converted (except BMP images), and the conversion of images may take significant time.

# Values

<span class="parameter">$restrictColorSpace</span> =  `1`\|`2`\|`3`

**Values**

* `1`: allow GRAYSCALE only [convert CMYK/RGB->gray]
* `2`: allow RGB / SPOT COLOR / Grayscale [convert CMYK->RGB]
* `3`: allow CMYK / SPOT COLOR / Grayscale [convert RGB->CMYK]
* `0` or any other value: no restriction is made on colorspace used

Default: `0`

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
  <td>5.1</td>
  <td>Variable was added.</td>
</tr>
</tbody>
</table>

# See Also

* <a href="{{ "/what-else-can-i-do/pdf-a1-b-compliance.html" | prepend: site.baseurl }}">PDF/A1-b compliance</a>
* <a href="{{ "/what-else-can-i-do/pdf-x-1a-compliance.html" | prepend: site.baseurl }}">PDF/X-1a compliance</a>
* <a href="{{ "/reference/mpdf-variables/pdfa.html" | prepend: site.baseurl }}">PDFA</a> - Create PDF/A1-b compliant document
* <a href="{{ "/reference/mpdf-variables/pdfx.html" | prepend: site.baseurl }}">PDFX</a> - Create PDF/X-1a compliant document
* <a href="{{ "/reference/mpdf-variables/pdfaauto.html" | prepend: site.baseurl }}">PDFAauto</a> - Specify whether to automatically fix issues to create PDF/A1-b compliant document
* <a href="{{ "/reference/mpdf-variables/pdfxauto.html" | prepend: site.baseurl }}">PDFXauto</a> - Specify whether to automatically fix issues to create PDF/X-1a compliant document
* <a href="{{ "/reference/mpdf-variables/iccprofile.html" | prepend: site.baseurl }}">ICCProfile</a> - Specify the ICC profile for the chosen colorspace used in the document



