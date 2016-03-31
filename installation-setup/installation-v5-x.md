---
layout: page
title: Installation v5.x
parent_title: Installation & Setup
permalink: /installation-setup/installation-v5-x.html
modification_time: 2015-08-05T11:59:23+00:00
---

## First-time users

<p>Installation:</p>
<ul>
<li>Download the .zip file and unzip it</li>
<li>Create a folder e.g. <span class="filename">/mpdf</span> on your server </li>
<li>Upload all of the files to the server, maintaining the folders as they are </li>
<li>Ensure that you have write permissions set for the following folders:
<ul>
<li><span class="filename">/ttfontdata/</span> 

</li>
<li><span class="filename">/tmp/</span> 

</li>
<li><span class="filename">/graph_cache/</span></li>
</ul>
</li>
</ul>
<p>To test the installation, point your browser to the example files folder e.g. <span class="filename">[path_to_mpdf_folder]/mpdf/examples/</span></p>
<p>If you wish to install additional fonts please see the notes in <a href="{{ "/fonts-languages/fonts-in-mpdf-5-x.html" | prepend: site.baseurl }}">Fonts &amp; Languages</a> for further instructions.</p>
<p>If you wish to define a different folder for temporary files rather than <span class="filename">/tmp/</span> see the note on '<a href="{{ "/installation-setup/folders-for-temporary-files.html" | prepend: site.baseurl }}">Folder for temporary files</a>'.</p>
<p>If you have problems, please read the section on <a href="{{ "/troubleshooting/known-issues.html" | prepend: site.baseurl }}">troubleshooting</a> in the manual.</p>

## Upgrading from version mPDF 5.0 Beta

<p>There is no upgrade package from v5 beta because so many of the files have had at least minor changes. You can overwrite most of the files, taking care to keep a note of your 3 configuration files.</p>
<p class="manual_block"><b>Important:</b> You must delete all temporary files in the <span class="filename">/ttfontdata/</span> folder.</p>

## Changes from 5.0 Beta

<ul>
<li>config.php file has been changed (extra CJK characters to recognise CJK blocks)</li>
<li><code>$this-&gt;backupSubsFont</code> (in <span class="filename">config_fonts.php</span>) optionally now takes an array</li>
<li>no need to define <code>'cjk'=&gt;true</code> or <code>'sip|smp'=&gt;true</code> in <span class="filename">config_fonts.php</span> (ignored; cf. <code>$this-&gt;BMPonly</code>)</li>
<li>Indic language fonts have been altered to add Latin and Latin-1 Supplement characters</li>
<li>progress bars now has an external progbar.css and configurable main heading</li>
<li>added initial parameter <code>new mPDF('+aCJK')</code> or <code>'-aCJK'</code> to override default useAdobeCJK at runtime</li>
<li>QRCode is not included in main download (but as an extra package)</li>
</ul>

## Earlier versions

<p>If you have been using earlier versions of mPDF, most scripts should work as before. But note:

- Arial, Helvetica, Times and Courier are now treated like any other font

- the whole CSS font string is parsed e.g. style="font-family:'Lucida Grande';" will look for a font 'lucidagrande'

and not 'lucida'</p>
<p>Configurable variables:</p>
<ul>
<li><code>$mpdf-&gt;useSubstitutionsMB</code> is now depracated, but will work as an alias for <code>$mpdf-&gt;useSubstitutions</code></li>
<li><code>$mpdf-&gt;useOnlyCoreFonts</code> is now depracated and is ignored. Use <code>new mPDF('c')</code></li>
<li><code>$this-&gt;use_CJK_only</code> is now depracated and is ignored. See <code>$this-&gt;useAdobeCJK</code> and <code>new mPDF('+aCJK')</code> or <code>'-aCJK'</code></li>
</ul>
<p>The initial parameters e.g. <code>new mPDF('utf-8')</code> have all changed. Old ones may be recognised, or will be ignored.</p>

