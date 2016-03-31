---
layout: page
title: bookmarkStyles
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/bookmarkstyles.html
modification_time: 2015-08-05T12:01:45+00:00
---



<p>mPDF &gt;= 5.4</p>
<p>Bookmarks can be styled by adding code as below to your script. You can define a colour (array of RGB) and/or a font-style (B, I, or BI) for each level (starting at 0). Results may depend on the PDF Reader you are using.</p>
<h2>Example</h2>

{% highlight php %}
Example #1 - In config.php file

{% endhighlight %}

{% highlight php %}
<?php

<?php

$this->bookmarkStyles = array(

0 => array('color'=> array(0,64,128), 'style'=>'B'),

1 => array('color'=> array(128,0,0), 'style'=>''),

2 => array('color'=> array(0,128,0), 'style'=>'I'),

);

?>
{% endhighlight %}

