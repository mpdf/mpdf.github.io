---
layout: page
title: Indic fonts v5.x
parent_title: Fonts & Languages
permalink: /user-s-guide/fonts-languages/indic-fonts-v5-x.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p class="manual_block">**Note:** From mPDF >= 6.0 this has been superseded by the use of <a href="/user-s-guide/fonts-languages/opentype-layout-otl.html">OpenType layout (OTL)</a>.</p>
<p>Special fonts are provided for several Indic languages.</p>
<table class="bpmTopnTailC"> <thead>
<tr> <th> </th>
<td>Unicode range</td>
<td>Font name

</td>
<td>Languages</td>
</tr>
</thead> <tbody>
<tr class="oddrow"> <th>Bengali</th>
<td>0980-09FF</td>
<td>ind_bn_1_001</td>
<td> </td>
</tr>
<tr class="evenrow"> <th>Devanagari</th>
<td>0900-097F</td>
<td>ind_hi_1_001</td>
<td>
<p>Hindi, Sindhi, Nepali</p>
</td>
</tr>
<tr class="oddrow"> <th>Malayalam</th>
<td>0D00-0D7F</td>
<td>ind_ml_1_001</td>
<td> </td>
</tr>
<tr class="evenrow"> <th>Gujarati</th>
<td>0A80-0AFF</td>
<td>ind_gu_1_001</td>
<td> </td>
</tr>
<tr class="oddrow"> <th>Kannada</th>
<td>0C80-0CFF</td>
<td>ind_kn_1_001</td>
<td> </td>
</tr>
<tr class="evenrow"> <th>Oriya</th>
<td>0B00-0B7F</td>
<td>ind_or_1_001</td>
<td> </td>
</tr>
<tr class="oddrow"> <th>Punjabi</th>
<td>0A00-0A7F</td>
<td>ind_pa_1_001</td>
<td>(Gurmuhki)</td>
</tr>
<tr class="evenrow"> <th>Tamil</th>
<td>0B80-0BFF</td>
<td>ind_ta_1_001</td>
<td> </td>
</tr>
<tr class="oddrow"> <th>Telugu</th>
<td>0C00-0C7F</td>
<td>ind_te_1_001</td>
<td> </td>
</tr>
</tbody> </table>
<p>These fonts can be access using their font name e.g.</p>

{% highlight php %}
<?php

&lt;p style-"font-family: ind_ml_1_001;"&gt;ജൌ&lt;/p&gt;
{% endhighlight %}

<p>NB Indic font support is font-specific; adding other Indic fonts to mPDF won't work.</p>
</div>
</div>

