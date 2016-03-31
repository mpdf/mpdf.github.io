---
layout: page
title: Saving to a database
parent_title: What Else Can I Do
permalink: /what-else-can-i-do/saving-to-a-database.html
modification_time: 2015-08-05T12:00:21+00:00
---

<p>If you want to save the created file to a database (not necessarily recommended), one user has suggested the following:</p>

{% highlight php %}
<?php

$s = $mpdf->Output('','S');

$data = bin2hex($s);

$query = "INSERT INTO aaa SET content=0x".$data." ";
{% endhighlight %}

<p>When you want to output the PDf file:</p>

{% highlight php %}
<?php

// Get the database content into the variable $data

$pdf = pack("H*" , $data ); 

header('Content-Type: application/pdf');

header('Content-Length: '.strlen($pdf));

header('Content-disposition: inline; filename="'.$name.'"');

header('Cache-Control: public, must-revalidate, max-age=0'); 

header('Pragma: public');

header('Expires: Sat, 26 Jul 1997 05:00:00 GMT'); 

header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');

echo $pdf;

exit;
{% endhighlight %}

