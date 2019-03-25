---
layout: page
title: Reducing memory usage
parent_title: Installation & Setup
permalink: /installation-setup/reducing-memory-usage.html
modification_time: 2015-08-05T11:59:24+00:00
---

mPDF < 7.0

# mPDF "Lite"

The mPDF main file <span class="filename">mpdf.php</span> is over 1 MB in size. Simply to parse the mPDF class requires
over 10 MB of memory in PHP. This may not be a problem, but if your PHP configuration does not allow you to increase
memory, or you envisage multiple calls on your server at the same time, you can consider producing a 'Lite' form of
the `mpdf.php` script.

A utility script <span class="filename">compress.php</span> is included in mPDF in the root folder. This generates a
new <span class="filename">mpdf.php</span> script omitting functions which you do not require. (It does not actually
compress the file)

As from mPDF 6.0.1 this file will be distributed as `compress.php.distr` to avoid other users running the file unwantedly.
To use compress, just rename the file `compress.php` (and remember to delete or rename it after you have finished using it).

As a guideline:

<table class="table">
<thead>
<tr>
  <th>Version 5.1</th>
  <td>Size of mpdf.php file</td>
  <td>Memory usage in PHP</td>
</tr>
</thead>
<tbody>
<tr>
  <th>Full script</th>
  <td>1170 kB</td>
  <td>12.75 MB</td>
</tr>
<tr>
  <th>Omitting functions, but including: Tables, lists and images</th>
  <td>697 kB</td>
  <td>7.0 MB</td>
</tr>
<tr>
  <th>Omitting all optional functions</th>
  <td>496 kB</td>
  <td>5.25 MB</td>
</tr>
</tbody>
</table>

Firstly, rename the <span class="filename">mpdf.php</span> file as <span class="filename">mpdf_source.php</span>

Then point your browser to <span class="filename">[path_to_mpdf]/compress.php</span>

Follow the instructions on screen. This will produce (overwriting if necessary) a new <span class="filename">mpdf.php</span> file.

Do not delete the <span class="filename">mpdf_source</span> file, which will remain as your original.

<div class="alert alert-success" role="alert" markdown="1">
  **Tip:** Consider setting `$mpdf->simpleTables = true;` if you do not
  need complex table borders, or `$mpdf->packTableData = true;` if you do not mind
  the extra processing time.
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** mPDF &ge; 5.0 Ensure that you have set write permissions to
  <a href="{{ "/installation-setup/folders-for-temporary-files.html" | prepend: site.baseurl }}">temporary folders</a>
</div>
