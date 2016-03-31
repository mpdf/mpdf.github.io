---
layout: page
title: SetBasePath()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setbasepath.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 1.0)</p>
<p>SetBasePath – Specifies a base URL for mPDF to interpret relative URLs</p>
<h2>Description</h2>

<div class="alert alert-info" role="alert">void <b>SetBasePath</b> ( string <span class="parameter">$url</span> )</div>
<p>Specifies that mPDF should interpret any URLs in the HTML code relative to this <span class="parameter">url</span>. Otherwise relative paths will be based on the current script. This is important for hyperlinks, external stylesheets, and images.</p>

<div class="alert alert-info" role="alert"><b>Note:</b> From mPDF 5.7 &lt;base href=""&gt; is parsed in the HTML and used to set the base path.</div>

<div class="alert alert-info" role="alert"><b>Note: </b>This function/method was altered in mPDF 2.2 by capitalising the first letter of the name. As function/method names in PHP have hitherto been case-insensitive, this should not cause any problems, but it is recommended where possible to use the preferred spelling.</div>
<h2>Parameters</h2>
<p class="manual_param_dt"><span class="parameter">url</span></p>
<p class="manual_param_dd">A full URL should be provided, but the following will all work:

http://www.mydomain.com

http://www.mydomain.com/index.php

http://www.mydomain.com/path/<span class="smallblock">

</span></p>
<h2>Examples</h2>

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<?php

<?php

$mpdf=new mPDF();

$url = "http://www.php.net/manual/en/function.iconv.php";

$html = file_get_contents($url);

$mpdf->setBasePath($url);

// Now any relative paths e.g. <img src="../picture.jpg" /> will be parsed relative to a

   base path of "http://www.php.net/manual/en/"

$mpdf->WriteHTML($html);

$mpdf->Output();

?>
{% endhighlight %}

</div>
</div>

