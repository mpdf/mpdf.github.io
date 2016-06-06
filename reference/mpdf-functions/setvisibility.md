---
layout: page
title: SetVisibility()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setvisibility.html
modification_time: 2015-08-05T12:01:09+00:00
---

<div>
<div>

(mPDF >= 5.4)

SetVisibility – Set the visibility of subsequent objects

# Description

void **SetVisibility** ( string <span class="parameter">$visibility</span> )

Set the visibility of subsequent objects

# Parameters

<span class="parameter">$visibility</span>

This parameter specifies the visibility.

**Values**

<span class="smallblock">STRING</span> - One of the following:

visible

hidden

printonly

screenonly

<span class="smallblock">DEFAULT</span>: visible

# Changelog

<table class="table"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>5.4</td>
<td>Function was added.</td>
</tr>
</tbody> </table>

# Examples

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<?php

...

$mpdf->SetVisibility('printonly');

$mpdf->WriteHTML('
This text will only be visible when the document is printed
');

$mpdf->SetVisibility('screenonly');

$mpdf->WriteHTML('
This text will only be visible on screen, and will not be included when the document is printed
');

...

?>
{% endhighlight %}

# See Also

<ul>
<li class="manual_boxlist"><a href="{{ "/css-stylesheets/supported-css.html" | prepend: site.baseurl }}">Supported CSS</a> - 'visibility'</li>
</ul>

</div>
</div>
