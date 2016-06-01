---
layout: page
title: Configuration files v5.x
parent_title: Configuration
permalink: /user-s-guide/configuration/configuration-files-v5-x.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF >= 4.0)</p>
<p>Three configuration files are included in the root folder of mPDF:</p>
<table class="bpmTopnTailClear"> <thead>
<tr>
<td>File name</td>
<td>Details</td>
<td>mPDF &lt; 4.0</td>
</tr>
</thead> <tbody>
<tr>
<td><span class="filename">config.php</span>

</td>
<td>Configure most <a href="/user-s-guide/configuration/configuration-variables.html">variables</a> which affect mPDF. These values can be set at the beginning of individual scripts, but changes here will affect all of your PDF files.</td>
<td>These values were defined at the start of the <span class="filename">mpdf.php</span> file.</td>
</tr>
<tr>
<td><span class="filename">config_cp.php </span>

</td>
<td>Sets the options used for specified languages e.g. restricted fonts when appropriate.</td>
<td>This was contained in the function <span class="function">GetCodepage()</span> in the <span class="filename">htmltoolkit.php</span> file.</td>
</tr>
<tr>
<td><span class="filename">config_fonts.php</span>

</td>
<td>Details of fonts installed in mPDF.</td>
<td>Previously in <span class="filename">mpdf_config.php</span> file.</td>
</tr>
</tbody> </table>
<p> </p>
<p> </p>
</div>
</div>

