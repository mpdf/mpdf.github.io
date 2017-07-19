---
layout: page
title: E-mail a PDF file
parent_title: Real life examples
permalink: /real-life-examples/e-mail-a-pdf-file.html
modification_time: 2015-08-05T12:00:26+00:00
---

This example shows how to create a PDF file and e-mail it:

```php
<?php
// require composer autoload
require __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf(); // Create new mPDF Document

// Beginning Buffer to save PHP variables and HTML tags
ob_start();

$day = date('d');
$year = date('Y');
$month = date('F');

echo "Hello World

Today is $month $day, $year";

$html = ob_get_contents();
ob_end_clean();

// Here convert the encode for UTF-8, if you prefer 
// the ISO-8859-1 just change for $mpdf->WriteHTML($html);
$mpdf->WriteHTML(utf8_encode($html));
$content = $mpdf->Output('', 'S');

```

E-mailing with attachments by yourself is full of unexpected obstacles. Instead of building the message by hand, we will
use a 3rd party library.

## E-mailing with Swift mailer

First, require Swift mailer with command

```bash
$ composer require swiftmailer/swiftmailer
```

Then, create a Swift Message and send it with a Transport wrapping PHP `mail()` function.

```php
<?php
// Create instance of Swift_Attachment with our PDF file
$attachment = new Swift_Attachment($content, 'filename.pdf', 'application/pdf');

$message = Swift_Message::newInstance()
  ->setSubject('Your subject')
  ->setFrom(array('john@doe.com' => 'John Doe'))
  ->setTo(array('receiver@domain.org', 'other@domain.org' => 'A name'))
  ->setBody('Here is the message itself')
  ->attach($attachment);

$transport = Swift_MailTransport::newInstance();

// Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);

// Send the created message
$mailer->send($message);

// Then, you can send PDF to the browser
$mpdf->Output($filename ,'I');

```

For more information about Swift Mailer, see its [documentation](http://swiftmailer.org/docs).
