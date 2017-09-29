---
layout: page
title: Output()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/output.html
modification_time: 2015-08-05T12:00:50+00:00
---

Output – Finalise the document and send it to specified destination

# Description

string **Output** (
[ string <span class="parameter">$filename</span> 
[, string <span class="parameter">$dest</span> ])

Send the document to a given destination: browser, file or string. In the case of browser, the plug-in may be used 
(if present) or a download ("Save as" dialog box) may be forced.

# Parameters

<span class="parameter">$filename</span>

: The name of the file. If not specified, the document will be sent to the browser (destination `\Mpdf\Output\Destination::INLINE`).

  <span class="smallblock">BLANK</span> or omitted: `'doc.pdf'`

<span class="parameter">$dest</span>

: Destination where to send the document. Use class constants from `\Mpdf\Output\Destination` for better readability
  and understandability

  Default: `\Mpdf\Output\Destination::INLINE`

  **Values**:
  `\Mpdf\Output\Destination::INLINE`
  : send the file inline to the browser. The plug-in is used if available. 
    The name given by <span class="parameter">$filename</span> is used when one selects the "Save as" option on 
    the link generating the PDF.

  `\Mpdf\Output\Destination::DOWNLOAD`
  : send to the browser and force a file download with the name given by 
    <span class="parameter">$filename</span>.

  `\Mpdf\Output\Destination::FILE`
  : save to a local file with the name given by <span class="parameter">$filename</span> 
    (may include a path).

  `\Mpdf\Output\Destination::STRING_RETURN`
  : return the document as a string. <span class="parameter">$filename</span> 
    is ignored.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** You can use the `\Mpdf\Output\Destination::STRING_RETURN` option to e-mail a PDF file - see example under 
  <a href="{{ "/real-life-examples/e-mail-a-pdf-file.html" | prepend: site.baseurl }}">E-mail a PDF file</a>.
</div>

# Examples

## Example #1

```php
<?php
// Sends output inline to browser
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('Hello World');

$mpdf->Output();

```

## Example #2

```php
<?php
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('Hello World');

// Saves file on the server as 'filename.pdf'
$mpdf->Output('filename.pdf', \Mpdf\Output\Destination::FILE);

```
