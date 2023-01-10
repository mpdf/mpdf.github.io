---
layout: page
title: Output()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/output.html
modification_time: 2015-08-05T12:00:50+00:00
---

Output – Finalise the document and send it to specified destination

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** As of mPDF v8.1.2 it is preferred to use verbose aliases 
  <a href="{{ "/reference/mpdf-functions/outputbinarydata.html" | prepend: site.baseurl }}">`OutputBinaryData`,</a>
  <a href="{{ "/reference/mpdf-functions/outputhttpinline.html" | prepend: site.baseurl }}">`OutputHttpInline`,</a>
  <a href="{{ "/reference/mpdf-functions/outputhttpdownload.html" | prepend: site.baseurl }}">`OutputHttpDownload`,</a>
  and <a href="{{ "/reference/mpdf-functions/outputfile.html" | prepend: site.baseurl }}">`OutputFile`</a>
</div>

# Description

string|void **Output** (
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
  `\Mpdf\Output\Destination::INLINE`, or `"I"`
  : send the file inline to the browser. The plug-in is used if available.
    The name given by <span class="parameter">$filename</span> is used when one selects the "Save as" option on
    the link generating the PDF. This parameter sets HTTP headers using standard `header` PHP function.

  `\Mpdf\Output\Destination::DOWNLOAD`, or `"D"`
  : send to the browser and force a file download with the name given by
    <span class="parameter">$filename</span>. This parameter sets HTTP headers using standard `header` PHP function.

  `\Mpdf\Output\Destination::FILE`, or `"F"`
  : save to a local file with the name given by <span class="parameter">$filename</span>
    (may include a path).

  `\Mpdf\Output\Destination::STRING_RETURN`, or `"S"`
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
