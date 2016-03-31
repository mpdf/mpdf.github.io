---
layout: page
title: E-mail a PDF file
parent_title: Real life examples
permalink: /real-life-examples/e-mail-a-pdf-file.html
modification_time: 2015-08-05T12:00:26+00:00
---



<p>This example shows how to create a PDF file and e-mail it:</p>

{% highlight php %}
<?php

<?php

include("../mpdf.php"); //Include mPDF Class 

$mpdf=new mPDF(); // Create new mPDF Document

//Beginning Buffer to save PHP variables and HTML tags

ob_start(); 

// Function Date

$day = date('d');

$month = date('m');

$year = date('Y');

switch ($month)

{ 

case 1: $month = "January"; break;

case 2: $month = "February"; break;

case 3: $month = "March"; break;

case 4: $month = "April"; break;

case 5: $month = "May"; break;

case 6: $month = "June"; break;

case 7: $month = "July"; break;

case 8: $month = "August"; break;

case 9: $month = "September"; break;

case 10: $month = "October"; break;

case 11: $month = "November"; break;

case 12: $month = "December"; break;

}

echo "Hello World

Today is $month $day, $year";

$html = ob_get_contents();

ob_end_clean();

//Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);

$mpdf->WriteHTML(utf8_encode($html)); 

$content = $mpdf->Output('', 'S');

$content = chunk_split(base64_encode($content));

$mailto = 'mailto@mailto.com'; //Mailto here

$from_name = 'ACME Corps Ltd'; //Name of sender mail

$from_mail = 'mailfrom@mailfrom.com'; //Mailfrom here

$subject = 'subjecthere'; 

$message = 'mailmessage';

$filename = "yourfilename-".date("d-m-Y_H-i",time()); //Your Filename with local date and time

//Headers of PDF and e-mail

$boundary = "XYZ-" . date("dmYis") . "-ZYX"; 

$header = "--$boundary\r\n"; 

$header .= "Content-Transfer-Encoding: 8bits\r\n"; 

$header .= "Content-Type: text/html; charset=ISO-8859-1\r\n\r\n"; // or utf-8

$header .= "$message\r\n";

$header .= "--$boundary\r\n";

$header .= "Content-Type: application/pdf; name=\"".$filename."\"\r\n";

$header .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n";

$header .= "Content-Transfer-Encoding: base64\r\n\r\n";

$header .= "$content\r\n"; 

$header .= "--$boundary--\r\n";

$header2 = "MIME-Version: 1.0\r\n";

$header2 .= "From: ".$from_name." \r\n"; 

$header2 .= "Return-Path: $from_mail\r\n";

$header2 .= "Content-type: multipart/mixed; boundary=\"$boundary\"\r\n";

$header2 .= "$boundary\r\n";

mail($mailto,$subject,$header,$header2, "-r".$from_mail);

$mpdf->Output($filename ,'I');

exit;

?>
{% endhighlight %}

<div class="alert alert-info" role="alert"><strong>Note:</strong> Submitted by a user. See <a href="http://www.mpdf1.com/mpdf/forum/comments.php?DiscussionID=663&amp;page=1#Item_5">message</a> in the Forum.</div>
