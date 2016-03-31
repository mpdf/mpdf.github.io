---
layout: page
title: SetVisibility()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setvisibility.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<div>
<div>
<p>(mPDF &gt;= 5.4)</p>
<p>SetVisibility – Set the visibility of subsequent objects</p>
<h2>Description</h2>

<div class="alert alert-info" role="alert">void <b>SetVisibility</b> ( string <span class="parameter">$visibility</span> )</div>
<p>Set the visibility of subsequent objects</p>
<h2>Parameters</h2>
<span class="parameter">visibility</span>
<p class="manual_param_dd">This parameter specifies the visibility.</p>
<p class="manual_param_dd"><b>Values</b>

<span class="smallblock">STRING</span> - One of the following:

visible

hidden

printonly

screenonly

<span class="smallblock">DEFAULT</span>: visible</p>
<h2>Changelog</h2>
<table class="bpmTopic"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>5.4</td>
<td>Function was added.</td>
</tr>
</tbody> </table>
<h2>Examples</h2>

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<?php

<?php

...

$mpdf->SetVisibility('printonly'); 

$mpdf->WriteHTML('<p>This text will only be visible when the document is printed</p>');

$mpdf->SetVisibility('screenonly'); 

$mpdf->WriteHTML('<p>This text will only be visible on screen, and will not be included when the document is printed</p>');

...

?>
{% endhighlight %}

<h2>See Also</h2>
<ul>
<li class="manual_boxlist"><a href="/css-stylesheets/supported-css.html">Supported CSS</a> - 'visibility'</li>
</ul>
<p>&nbsp;</p>
</div>
</div>
</div>
</div>

