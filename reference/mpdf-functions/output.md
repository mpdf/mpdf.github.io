---
layout: page
title: Output()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/output.html
modification_time: 2015-08-05T12:00:50+00:00
---

(FPDF)

Output – Finalise the document and send it to specified destination

# Description

string **Output** ([ string <span class="parameter">$filename</span> , string <span class="parameter">$dest</span> ])

Send the document to a given destination: browser, file or string. In the case of browser, the plug-in may be used (if present) or a download ("Save as" dialog box) may be forced.

# Parameters

<span class="parameter">$filename</span>

The name of the file. If not specified, the document will be sent to the browser (destination I).

<span class="smallblock">BLANK</span> or omitted: "doc.pdf"

<span class="parameter">$dest</span>

Destination where to send the document.

<span class="smallblock">DEFAULT</span>: "I" i.e. Browser

I: send the file inline to the browser. The plug-in is used if available. The name given by <span class="parameter">$filename</span> is used when one selects the "Save as" option on the link generating the PDF.

D: send to the browser and force a file download with the name given by <span class="parameter">$filename</span>.

F: save to a local file with the name given by <span class="parameter">$filename</span> (may include a path).

S: return the document as a string. <span class="parameter">$filename</span> is ignored.

<div class="alert alert-info" role="alert">**Note:** You can use the 'S' option to e-mail a PDF file - see example under <a href="{{ "/real-life-examples/e-mail-a-pdf-file.html" | prepend: site.baseurl }}">E-mail a PDF file</a>.</div>

# Examples

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<?php

// Sends output inline to browser

$mpdf = new mPDF();

$mpdf->WriteHTML('
Hallo World
');

$mpdf->Output();

?>
{% endhighlight %}

{% highlight php %}
Example #2
{% endhighlight %}

{% highlight php %}
<?php

// Saves file on the server as 'filename.pdf'

$mpdf = new mPDF();

$mpdf->WriteHTML('
Hallo World
');

$mpdf->Output('filename.pdf','F');

?>
{% endhighlight %}

{% highlight php %}
Example #3 - Sending file as e-mail (and also to browser)
{% endhighlight %}

{% highlight php %}
<?php

$mpdf = new mPDF();

$mpdf->WriteHTML($html);

$content = $mpdf->Output('', 'S');

$content = chunk_split(base64_encode($content));

$mailto = 'recipient@domain.com';

$from_name = 'Your name';

$from_mail = 'sender@domain.com';

$replyto = 'sender@domain.com';

$uid = md5(uniqid(time()));

$subject = 'Your e-mail subject here';

$message = 'Your e-mail message here';

$filename = 'filename.pdf';

$header = "From: ".$from_name." <".$from_mail.">\r\n";

$header .= "Reply-To: ".$replyto."\r\n";

$header .= "MIME-Version: 1.0\r\n";

$header .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";

$header .= "This is a multi-part message in MIME format.\r\n";

$header .= "--".$uid."\r\n";

$header .= "Content-type:text/plain; charset=iso-8859-1\r\n";

$header .= "Content-Transfer-Encoding: 7bit\r\n\r\n";

$header .= $message."\r\n\r\n";

$header .= "--".$uid."\r\n";

$header .= "Content-Type: application/pdf; name=\"".$filename."\"\r\n";

$header .= "Content-Transfer-Encoding: base64\r\n";

$header .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n\r\n";

$header .= $content."\r\n\r\n";

$header .= "--".$uid."--";

$is_sent = @mail($mailto, $subject, "", $header);

$mpdf->Output();

exit;
{% endhighlight %}

