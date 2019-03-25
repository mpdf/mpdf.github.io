---
layout: page
title: Configuration files v6.x
parent_title: Configuration
permalink: /configuration/configuration-files-v6-x.html
modification_time: 2015-08-05T11:59:39+00:00
---

(mPDF &ge; 6.0 & < 7.0)

Four configuration files are included in the root directory of mPDF:

<table class="table"> <thead>
<tr>
  <th>File name</th>
  <th>Details</th>
</tr>
</thead> <tbody>
<tr>
  <td><span class="filename">config.php</span></td>
  <td markdown="1">
  Configure most <a href="{{ "/configuration/configuration-variables.html" | prepend: site.baseurl }}">variables</a> which affect mPDF. These values can be set at the beginning of individual scripts, but changes here will affect all of your PDF files.

  Also contains basic default CSS stylesheet properties.
  </td>
</tr>
<tr>
  <td><span class="filename">config_fonts.php</span></td>
  <td>Details of fonts installed in mPDF.</td>
</tr>
<tr>
  <td><span class="filename"><span class="filename">config_lang2fonts.php </span></span></td>
  <td markdown="1">
  Sets the options used for which fonts to use, when the text is defined by the `lang` attribute.
  </td>
</tr>
<tr>
  <td><span class="filename">config_script2lang.php</span></td>
  <td>Sets the options of which lang to mark up text with, when using automatic font selection based on the text script.</td>
</tr>
</tbody> </table>

