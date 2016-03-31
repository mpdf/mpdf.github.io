---
layout: page
title: Configuration files v6.x
parent_title: Configuration
permalink: /configuration/configuration-files-v6-x.html
modification_time: 2015-08-05T11:59:39+00:00
---

<p>(mPDF &gt;= 6.0)</p>
<p>Four configuration files are included in the root folder of mPDF:</p>
<table class="table"> <thead>
<tr>
<td>File name</td>
<td>Details</td>
</tr>
</thead> <tbody>
<tr>
<td><span class="filename">config.php</span> 

</td>
<td>
<p>Configure most <a href="{{ "/configuration/configuration-variables.html" | prepend: site.baseurl }}">variables</a> which affect mPDF. These values can be set at the beginning of individual scripts, but changes here will affect all of your PDF files.</p>
<p>Also contains basic default CSS stylesheet properties.</p>
</td>
</tr>
<tr>
<td><span class="filename">config_fonts.php</span></td>
<td>Details of fonts installed in mPDF.</td>
</tr>
<tr>
<td><span class="filename"><span class="filename">config_lang2fonts.php </span></span></td>
<td>Sets the options used for which fonts to use, when the text is defined by the <code>lang</code> attribute.</td>
</tr>
<tr>
<td><span class="filename">config_script2lang.php</span>

</td>
<td>Sets the options of which lang to mark up text with, when using automatic font selection based on the text script.

</td>
</tr>
</tbody> </table>

