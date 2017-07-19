---
layout: page
title: Image()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/image.html
modification_time: 2015-08-05T12:00:47+00:00
---

See <a href="{{ "/what-else-can-i-do/images.html" | prepend: site.baseurl }}">Images</a>.

void **Image** (
string <span class="parameter">$filename</span>, 
int <span class="parameter">$x</span>, 
int <span class="parameter">$y</span>, 
int <span class="parameter">$width</span> `= 0`, 
int <span class="parameter">$height</span> `= 0`, 
string <span class="parameter">$ext</span> `= ''`, 
string <span class="parameter">$href_link</span> `= ''`, 
bool <span class="parameter">$paint</span> `= true`, 
bool <span class="parameter">$constrain</span> `= true`, 
bool <span class="parameter">$is_watermark</span> `= false`
bool <span class="parameter">$shownoimg</span> `= true`, 
bool <span class="parameter">$allowvector</span> `= true`)




# Parameters

<span class="parameter">$filename</span> 

: path



```php
<?php

$mpdf->Image('files/images/frontcover.jpg', 0, 0, 210, 297, 'jpg', '', true, false);

// the last "false" allows a full page picture

```

See Also

* <a href="{{ "/reference/mpdf-functions/setalpha.html" | prepend: site.baseurl }}">SetAlpha()</a> - Set the opacity and blend mode for Images

