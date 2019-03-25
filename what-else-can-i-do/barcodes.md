---
layout: page
title: Barcodes
parent_title: What Else Can I Do
permalink: /what-else-can-i-do/barcodes.html
modification_time: 2015-08-05T12:00:12+00:00
---

(mPDF &ge; 4.0)

A variety of barcodes can be produced with mPDF. Please see
the <a href="https://github.com/mpdf/mpdf-examples/blob/master/example37_barcodes.php">example file</a> for
more information.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** As of mPDF 8.0, composer package mpdf/qrcode is needed for generating QR codes automatically.
</div>

## Specifications in mPDF

All values in millimeters, unless specified as a factor of X-dim e.g. `10X`.
`X` = width of narrowest bar (also known as module width)
Pr ratio is ratio of narrow bar to wide bar

<table class="table">
<tbody>
<tr>
  <th rowspan="2">Barcode type</th>
  <th rowspan="2"><span class="parameter">$code</span></th>
  <th rowspan="2">X-dim</th>
  <th rowspan="2">H-dim</th>
  <th colspan="3">Light margin / Quiet zone</th>
  <th rowspan="2" markdown="1">
  D:A:F:T[^5]
  </th>
  <th rowspan="2">Pr ratio</th>
</tr>
<tr>
  <th>Left</th>
  <th>Right</th>
  <th>Top/bottom</th>
</tr>
<tr>
  <th>EAN-13</th>
  <td>EAN13, ISBN, ISSN</td>
  <td>0.33</td>
  <td>25.93</td>
  <td>11X</td>
  <td>7X</td>
  <td>0</td>
  <td> </td>
  <td> </td>
</tr>
<tr>
  <th>UPC-A</th>
  <td>UPCA</td>
  <td>0.33</td>
  <td>25.91</td>
  <td>9X</td>
  <td>9X</td>
  <td>0</td>
  <td> </td>
  <td> </td>
</tr>
<tr>
  <th>UPC-E</th>
  <td>UPCE</td>
  <td>0.33</td>
  <td>25.93</td>
  <td>9X</td>
  <td>7X</td>
  <td>0</td>
  <td> </td>
  <td> </td>
</tr>
<tr>
  <th>EAN-8</th>
  <td>EAN8</td>
  <td>0.33</td>
  <td>21.64</td>
  <td>7X</td>
  <td>7X</td>
  <td>0</td>
  <td> </td>
  <td> </td>
</tr>
<tr>
  <th>Intelligent Mail barcode</th>
  <td>IMB</td>
  <td>0.508</td>
  <td>3.68</td>
  <td>3.175</td>
  <td>3.175</td>
  <td>0.711</td>
  <td>2:2:3:1</td>
  <td markdown="1">
  [^4]
  </td>
</tr>
<tr>
  <th>Royal Mail 4-state Customer barcode</th>
  <td>RM4SCC</td>
  <td>0.508</td>
  <td>5.0</td>
  <td>2</td>
  <td>2</td>
  <td>2</td>
  <td>5:5:8:2</td>
  <td markdown="1">
  [^4]
  </td>
</tr>
<tr>
  <th>Royal Mail 4-state Customer barcode (Dutch)</th>
  <td>KIX</td>
  <td>0.508</td>
  <td>5.0</td>
  <td>2</td>
  <td>2</td>
  <td>2</td>
  <td>5:5:8:2</td>
  <td markdown="1">
  [^4]
  </td>
</tr>
<tr>
  <th>POSTNET</th>
  <td>POSTNET</td>
  <td>0.508</td>
  <td>3.175</td>
  <td>3.175</td>
  <td>3.175</td>
  <td>1.016</td>
  <td>5:2</td>
  <td> </td>
</tr>
<tr>
  <th>PLANET</th>
  <td>PLANET</td>
  <td>0.508</td>
  <td>3.175</td>
  <td>3.175</td>
  <td>3.175</td>
  <td>1.016</td>
  <td>5:2</td>
  <td> </td>
</tr>
<tr>
  <th>Code 128</th>
  <td>C128A, C128B, C128C</td>
  <td>0.381</td>
  <td>10</td>
  <td>10X</td>
  <td>10X</td>
  <td>0</td>
  <td> </td>
  <td>-</td>
</tr>
<tr>
  <th>UCC/EAN-128 (GS1-128)</th>
  <td>EAN128A, EAN128B, EAN128C</td>
  <td>0.381</td>
  <td>10</td>
  <td>10X</td>
  <td>10X</td>
  <td>0</td>
  <td> </td>
  <td>-</td>
</tr>
<tr>
  <th>Code 39 (Code 3 of 9)</th>
  <td>C39, C39+, C39E, C39E+</td>
  <td>0.381</td>
  <td>10</td>
  <td>10X</td>
  <td>10X</td>
  <td>0</td>
  <td> </td>
  <td markdown="1">
  2.5[^1]
  </td>
</tr>
<tr>
  <th>Standard 2 of 5</th>
  <td>S25, S25+</td>
  <td>0.381</td>
  <td>10</td>
  <td>10X</td>
  <td>10X</td>
  <td>0</td>
  <td> </td>
  <td markdown="1">
  3[^2]
  </td>
</tr>
<tr>
  <th>Interleaved 2 of 5</th>
  <td>I25, I25+, I25B, I25B+</td>
  <td>0.381</td>
  <td>10</td>
  <td>10X</td>
  <td>10X</td>
  <td>0</td>
  <td> </td>
  <td markdown="1">
  2.5[^1]
  </td>
</tr>
<tr>
  <th>Code 93</th>
  <td>C93</td>
  <td>0.381</td>
  <td>10</td>
  <td>10X</td>
  <td>10X</td>
  <td>0</td>
  <td> </td>
  <td>-</td>
</tr>
<tr>
  <th>MSI (Modified Plessey)</th>
  <td>MSI, MSI+</td>
  <td>0.381</td>
  <td>10</td>
  <td>12X</td>
  <td>12X</td>
  <td>0</td>
  <td> </td>
  <td>-</td>
</tr>
<tr>
  <th>CODABAR</th>
  <td>CODABAR</td>
  <td>0.381</td>
  <td>10</td>
  <td>10X</td>
  <td>10X</td>
  <td>0</td>
  <td> </td>
  <td markdown="1">
  2.5[^1]
  </td>
</tr>
<tr>
  <th>Code 11</th>
  <td>CODE11</td>
  <td>0.381</td>
  <td>10</td>
  <td>10X</td>
  <td>10X</td>
  <td>0</td>
  <td> </td>
  <td markdown="1">
  3[^3]
  </td>
</tr>
</tbody>
</table>

All values in millimeters, unless specified as a factor of X-dim e.g. `10X`.
`X` = width of narrowest bar (also known as module width)
Pr ratio is ratio of narrow bar to wide bar

Notes:

[^1]: Code specification: 1:2 - 1:3 (> 2.2 if X < 0.5mm)
[^2]: Code specification: 1:3 - 1:4.5
[^3]: Code specification: 2.24 - 3.5
[^4]: Bars per inch (determines bar/gap ratio, gap width) = 22
[^5]: Ratio of bar heights: Descender, Ascender, Full, Tracker (or Full:Half bar)
