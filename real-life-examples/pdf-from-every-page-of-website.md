---
layout: page
title: PDF from every page of website
parent_title: Real life examples
permalink: /real-life-examples/pdf-from-every-page-of-website.html
modification_time: 2015-08-05T12:00:24+00:00
---

If you want to add a link to pages on your website to create a PDF version of the page, here is one way to do it.

(If you have already set up a CSS stylesheet for `media="print"` which works for mPDF, you can omit the first 2 steps.)

Write a stylesheet suitable for presenting your webpage in mPDF. Most webpages have a header and menu on the left or right
which you will not want to appear in the PDF document. You can use `display: none` to omit these elements. From mPDF &ge; 5.0
this will also work for inline elements. You may have something like this:

```css
#myheader, #mysearchbar, #myleftcol, #myfooter {
  display: none;
}
span.abstract_link {
  display: none;
}
#maincontents {
    float:none;
    margin:0px;
    overflow:auto;
    padding:0;
    width:100%;
}

```

Save this file as e.g. <span class="filename">mypdf.css</span>

Then add this line to your webpages. This should be at the end of the document `<head>` section, to override any preceding style definitions:

```html
<link href="mypdf.css" type="text/css" rel="stylesheet" media="mpdf" />
```

NB The `media="mpdf"` means that the stylesheet will be ignored by browsers, but can be selected for use by mPDF - see below.

Now create a file e.g. <span class="filename">makepdf.php</span> and add the following script. Note you will need to edit the lines in italics.

```php
<?php
// require composer autoload
require __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();

$url = urldecode($_REQUEST['url']);

// To prevent anyone else using your script to create their PDF files
if (!preg_match('@^https?://www\.mydomain\.com/@', $url)) {
    die("Access denied");
}

// For $_POST i.e. forms with fields
if (count($_POST) > 0) {

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1 );

    foreach($_POST as $name => $post) {
      $formvars = array($name => $post . " \n");
    }

    curl_setopt($ch, CURLOPT_POSTFIELDS, $formvars);
    $html = curl_exec($ch);
    curl_close($ch);

} elseif (ini_get('allow_url_fopen')) {
    $html = file_get_contents($url);

} else {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt ( $ch , CURLOPT_RETURNTRANSFER , 1 );
    $html = curl_exec($ch);
    curl_close($ch);
}

$mpdf = new \Mpdf\Mpdf();

$mpdf->useSubstitutions = true; // optional - just as an example
$mpdf->SetHeader($url . "\n\n" . 'Page {PAGENO}');  // optional - just as an example
$mpdf->CSSselectMedia='mpdf'; // assuming you used this in the document header
$mpdf->setBasePath($url);
$mpdf->WriteHTML($html);

$mpdf->Output();

```

Now, the link from your webpages. This code can be inserted anywhere on the page. (The `<![CDATA[` bit is to make the
page compatible with XHTML.) This code will work if your webpages are simple files e.g. <span class="filename">myfile.html</span>
or if they are selected using variables in the URI (i.e. HTTP GET method) e.g. `myfile.php?cc=1&var=35`

```html
<script language="javascript" type="text/javascript">
  /* <![CDATA[ */
    document.write('<a href="makepdf.php?url=' + encodeURIComponent(location.href) +'">');
    document.write('Create PDF file of this page');
    document.write('</a>');
  /* ]]> */
</script>
```

Use this to generate the code, if the webpages are selected using variables hidden from the URI e.g. HTTP POST method using a form:

```php
<?php

$mpdf_link = '
<script language="javascript" type="text/javascript">
    /* <![CDATA[ */
    document.write(\'<form method="POST" action="makepdf.php?url=\' + encodeURIComponent(location.href) +\'">\');';

foreach ($_POST as $name => $post) {
    $mpdf_link .= 'document.write(\'<input type="hidden" name="' . $name . '" value="' . $post . '" />\'); '."\n";
}

$mpdf_link .= '
    document.write(\'<input type="submit" name="submit" value="Create PDF file of this page" />\');
    document.write(\'</form>\');
/* ]]> */
</script>';

echo $mpdf_link;

```

