---
layout: page
title: Reducing memory usage
parent_title: Installation & Setup
permalink: /installation-setup/reducing-memory-usage.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<h2>mPDF "Lite"</h2>
<p>The mPDF main file <span class="filename">mpdf.php</span> is over 1MB in size. Simply to parse the mPDF class requires over 10MB of memory in PHP. This may not be a problem, but if your PHP configuration does not allow you to increase memory, or you envisage multiple calls on your server at the same time, you can consider producing a 'Lite' form of the mpdf.php script.</p>
<p>A utility script <span class="filename">compress.php</span> is included in mPDF in the root folder. This generates a new <span class="filename">mpdf.php</span> script omitting functions which you do not require. (It does not actually compress the file)</p>
<p>As from mPDF 6.0.1 this file will be distribtued as compress.php.distr to avoid other users running the file unwantedly. To use compress, just rename the file compress.php (and remember to delete or rename it after you have finished using it).</p>
<p>As a guideline:</p>
<table class="bpmTopnTailC"> <thead>
<tr> <th>&nbsp;Version 5.1

</th>
<td>Size of mpdf.php file</td>
<td>Memory usage in PHP</td>
</tr>
</thead> <tbody>
<tr> <th>Full script</th>
<td>1170kB</td>
<td>12.75MB</td>
</tr>
<tr> <th>Omitting functions, but including:

Tables, lists and images</th>
<td>697kB</td>
<td>7.0MB</td>
</tr>
<tr> <th>Omitting all optional functions</th>
<td>496kB</td>
<td>5.25MB</td>
</tr>
</tbody> </table>
<p>Firstly, rename the <span class="filename">mpdf.php</span> file as <span class="filename">mpdf_source.php</span></p>
<p>Then point your broswer to <span class="filename">[path_to_mpdf]/compress.php</span></p>
<p>Follow the instructions on screen. This will produce (overwriting if necessary) a new <span class="filename">mpdf.php</span> file.</p>
<p>Do not delete the <span class="filename">mpdf_source</span> file, which will remain as your original.</p>

<div class="alert alert-info" role="alert"><b>Tip:</b> Consider setting <span class="parameter">$mpdf-&gt;simpleTables = true;</span> if you do not need complex table borders, or <span class="parameter">$mpdf-&gt;packTableData = true;</span> if you do not mind the extra processing time.</div>

<div class="alert alert-info" role="alert"><b>Note:</b> mPDF&gt;=5.0 Ensure that you have set write permissions to <a href="{{ "/installation-setup/folders-for-temporary-files.html" | prepend: site.baseurl }}">temporary folders</a></div>
</div>
</div>

