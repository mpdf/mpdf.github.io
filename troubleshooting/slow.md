---
layout: page
title: Slow!
parent_title: Troubleshooting
permalink: /troubleshooting/slow.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>mPDF is quite slow. Large tables seem to be the biggest burden, especially if they have borders. The other thing that is slow is rewriting sections repeatedly to automatically re-size them e.g. a block element with position: fixed and overflow: auto</p>
<p>On the other hand, I have used mPDF to produce a 400 page book, complete with a few images, 40 or so small tables, a table of contents and Index in approx 90 secs.</p>
<p>Consider the following:</p>
<ul>
<li>make sure you have upgraded to the latest version of mPDF</li>
<li>turn off error_reporting() in PHP, including error_logging</li>
<li>set <span class="parameter">$mpdf-&gt;useSubstitutions=false;</span>&nbsp;</li>
<li>avoid using .gif image files if you do not have the GD library installed as part of PHP</li>
<li>set <span class="parameter">$mpdf-&gt;simpleTables = true;</span> if you do not need complex table borders (mPDF &gt;= 4.3)</li>
<li>consider if you can use core PDF fonts rather than embedded fonts</li>
<li>avoid using CSS "page-break-inside:avoid"</li>
</ul>
<h3>Images</h3>
<p>JPG images are quickest, as the data requires no processing beyond extracting the metadata (width, height, colour-space etc.).</p>
<p>PNG images with no alpha channel and not interlaced are next best.</p>
<p>GIF files are extremely slow if you do not have the appropriate GD library (above 2.0.8). With GD they are quite fast.</p>
<p>Note that any images that require the GD library are processed quite fast - but use a large amount of memory - to create a GD image in memory can use up to 10 x the file size (e.g. a 690K GIF file read into imagecreatefromstring() used about 5MB of PHP memory). PNG images with alpha channel transparency or interlaced, require the GD library to process them.</p>
<p>Depending on your setup, you may find that performance can be improved a lot by using relative paths for images rather than absolute paths e.g. &lt;img src="imagefolder/myimage.jpg" /&gt;</p>
<h3>Other things which are slow</h3>
<p>Tables - the more rows and columns the worse it gets; if the size of the table requires it to be resized to fit on the page, this takes longer.</p>
<p>Using "overflow: auto" on fixed-position divs, as it tries to rewrite the data repeatedly until it finds a best fit.</p>
</div>
</div>

