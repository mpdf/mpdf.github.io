---
layout: page
title: PDF from every page of website
parent_title: Real life examples
permalink: /real-life-examples/pdf-from-every-page-of-website.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>If you want to add a link to pages on your website to create a PDF version of the page, here is one way to do it.</p>
<p>(If you have already set up a CSS stylesheet for media="print" which works for mPDF, you can omit the first 2 steps.)</p>
<p>Write a stylesheet suitable for presenting your webpage in mPDF. Most webpages have a header and menu on the left or right which you will not want to appear in the PDF document. You can use display: none to omit these elements. From mPDF &gt;= 5.0 this will also work for inline elements. You may have something like this:</p>

{% highlight php %}
#myheader, #mysearchbar, #myleftcol, #myfooter { display: none; }

span.abstract_link { display: none; }

#maincontents {

    float:none;

    margin:0px;

    overflow:auto;

    padding:0;

    width:100%;

}
{% endhighlight %}

<p>Save this file as e.g. <span class="filename">mypdf.css</span></p>
<p>Then add this line to your webpages. This should be at the end of the document &lt;head&gt; section, to override any preceding style definitions:</p>

{% highlight php %}
<link href="mypdf.css" type="text/css" rel="stylesheet" media="mpdf" />
{% endhighlight %}

<p>NB The media="mpdf" means that the stylesheet will be ignored by browsers, but can be selected for use by mPDF - see below.</p>
<p>Now create a file e.g. <span class="filename">makepdf.php</span> and add the following script. Note you will need to edit the lines in italics.</p>

{% highlight php %}
<?php

<?php

// Define relative path from this script to mPDF

define('_MPDF_PATH','../../common/mpdf/');

include(_MPDF_PATH . "mpdf.php");

$url = urldecode($_REQUEST['url']);

// To prevent anyone else using your script to create their PDF files

if (!preg_match('/^http:\/\/www\.mydomain\.com/', $url)) { die("Access denied"); }

// For $_POST i.e. forms with fields

if (count($_POST)>0) {

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_HEADER, 0);

      curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1 );

    foreach($_POST AS $name=>$post) {

        $formvars = array($name=>$post." \n");

    }

    curl_setopt($ch, CURLOPT_POSTFIELDS, $formvars);

    $html = curl_exec($ch);

    curl_close($ch);

}

else if (ini_get('allow_url_fopen')) {

    $html = file_get_contents($url);

}

else {

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_HEADER, 0);

      curl_setopt ( $ch , CURLOPT_RETURNTRANSFER , 1 );

    $html = curl_exec($ch);

    curl_close($ch);

}

$mpdf=new mPDF(''); 

$mpdf->useSubstitutions = true; // optional - just as an example

$mpdf->SetHeader($url.'

Page {PAGENO}');  // optional - just as an example

$mpdf->CSSselectMedia='mpdf'; // assuming you used this in the document header

$mpdf->setBasePath($url);

$mpdf->WriteHTML($html);

$mpdf->Output();

exit;

?>
{% endhighlight %}

<p>Now, the link from your webpages. This code can be inserted anywhere on the page. (The &lt;![CDATA[ bit is to make the page compatible with XHTML.) This code will work if your webpages are simple files e.g. <span class="filename">myfile.html</span> or if they are selected using variables in the URI (i.e. HTTP GET method) e.g. <span class="filename">myfile.php?cc=1&amp;var=35</span></p>

{% highlight php %}
<script language="javascript" type="text/javascript">

/* <![CDATA[ */

      document.write('<a href="makepdf.php?url=' + encodeURIComponent(location.href) +'">');

      document.write('Create PDF file of this page');

      document.write('</a>');

/* ]]> */

</script>
{% endhighlight %}

<p>Use this to generate the code, if the webpages are selected using variables hidden from the URI e.g. HTTP POST method using a form:</p>

{% highlight php %}
<?php

$mpdf_link = '

<script language="javascript" type="text/javascript">

/* <![CDATA[ */

      document.write(\'<form method="POST" action="makepdf.php?url=\' + encodeURIComponent(location.href) +\'">\');

';

foreach($_POST AS $name=>$post) {

    $mpdf_link .= 'document.write(\'<input type="hidden" name="'.$name.'" value="'.$post.'" />\'); '."\n";

}

$mpdf_link .= '

      document.write(\'<input type="submit" name="submit" value="Create PDF file of this page" />\');

      document.write(\'</form>\');

/* ]]> */

</script>

';

echo $mpdf_link;
{% endhighlight %}

</div>
</div>

