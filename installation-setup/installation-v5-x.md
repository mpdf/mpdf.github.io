---
layout: page
title: Installation v5.x
parent_title: Installation & Setup
permalink: /installation-setup/installation-v5-x.html
modification_time: 2015-08-05T11:59:23+00:00
---

## First-time users

Installation:

- Download the .zip file and unzip it
- Create a directory e.g. <span class="filename">/mpdf</span> on your server 
- Upload all of the files to the server, maintaining the directories as they are 
- Ensure that you have write permissions set for the following fol
    - <span class="filename">/ttfontdata/</span>
    - <span class="filename">/tmp/</span>
    - <span class="filename">/graph_cache/</span>

To test the installation, point your browser to the example files directory e.g.
<span class="filename">[path_to_mpdf_folder]/mpdf/examples/</span>

If you wish to install additional fonts please see the notes in
<a href="{{ "/fonts-languages/fonts-in-mpdf-5-x.html" | prepend: site.baseurl }}">Fonts &amp; Languages</a> for further
instructions.

If you wish to define a different directory for temporary files rather than <span class="filename">/tmp/</span> see the
note on '<a href="{{ "/installation-setup/folders-for-temporary-files.html" | prepend: site.baseurl }}">directory for
temporary files</a>'.

If you have problems, please read the section on
<a href="{{ "/troubleshooting/known-issues.html" | prepend: site.baseurl }}">troubleshooting</a> in the manual.

## Upgrading from version mPDF 5.0 Beta

There is no upgrade package from v5 beta because so many of the files have had at least minor changes. You can overwrite
most of the files, taking care to keep a note of your 3 configuration files.

**Important:** You must delete all temporary files in the <span class="filename">/ttfontdata</span> folder.

## Changes from 5.0 Beta

- config.php file has been changed (extra CJK characters to recognise CJK blocks)</li>
- `$this->backupSubsFont` (in <span class="filename">config_fonts.php</span>) optionally now takes an array</li>
- no need to define `'cjk'=&gt;true` or `'sip|smp'=&gt;true` in <span class="filename">config_fonts.php</span> 
  (ignored; cf. `$this->BMPonly`)</li>
- Indic language fonts have been altered to add Latin and Latin-1 Supplement characters</li>
- progress bars now has an external progbar.css and configurable main heading</li>
- added initial parameter `new mPDF('+aCJK')` or `'-aCJK'` to override default useAdobeCJK at runtime</li>
- QRCode is not included in main download (but as an extra package)</li>

## Earlier versions

If you have been using earlier versions of mPDF, most scripts should work as before. But note:

- Arial, Helvetica, Times and Courier are now treated like any other font
- the whole CSS font string is parsed e.g. style="font-family:'Lucida Grande';" will look for a font   
  'lucidagrande' and not 'lucida'

Configurable variables:

- `$mpdf->useSubstitutionsMB` is now deprecated, but will work as an alias for `$mpdf->useSubstitutions`
- `$mpdf->useOnlyCoreFonts` is now deprecated and is ignored. Use `new mPDF('c')`
- `$this->use_CJK_only` is now deprecated and is ignored. See `$this->useAdobeCJK` and `new mPDF('+aCJK')` or `'-aCJK'`

The initial parameters e.g. `new mPDF('utf-8')` have all changed. Old ones may be recognised, or will be ignored.

