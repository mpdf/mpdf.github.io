---
layout: page
title: Slow!
parent_title: Troubleshooting
permalink: /troubleshooting/slow.html
modification_time: 2015-08-05T12:00:30+00:00
---

mPDF is quite slow. Large tables seem to be the biggest burden, especially if they have borders.
The other thing that is slow is rewriting sections repeatedly to automatically re-size them e.g. a
block element with `position: fixed` and `overflow: auto`

On the other hand, I have used mPDF to produce a 400 page book, complete with a few images, 40 or so small
tables, a table of contents and Index in approx 90 secs.

Consider the following:

- make sure you have upgraded to the latest version of mPDF
- turn off `error_reporting()` in PHP, including error logging
- set `$mpdf->useSubstitutions = false;` 
- avoid using .gif image files if you do not have the GD library installed as part of PHP
- set `$mpdf->simpleTables = true;` if you do not need complex table borders (mPDF &ge; 4.3)
- consider if you can use core PDF fonts rather than embedded fonts
- avoid using CSS `page-break-inside:avoid`

## Images

JPG images are quickest, as the data requires no processing beyond extracting the metadata
(width, height, colour-space etc.).

PNG images with no alpha channel and not interlaced are next best.

GIF files are extremely slow if you do not have the appropriate GD library (above 2.0.8).
With GD they are quite fast.

Note that any images that require the GD library are processed quite fast - but use a large amount of memory -
to create a GD image in memory can use up to 10 x the file size (e.g. a 690K GIF file read into `imagecreatefromstring()`
used about 5MB of PHP memory). PNG images with alpha channel transparency or interlaced, require the
GD library to process them.

Depending on your setup, you may find that performance can be improved a lot by using relative paths for
images rather than absolute paths e.g. `<img src="imagefolder/myimage.jpg" />`

## Other things which are slow

Tables - the more rows and columns the worse it gets; if the size of the table requires it to be resized to
fit on the page, this takes longer.

Using `overflow: auto` on fixed-position divs, as it tries to rewrite the data repeatedly until it finds a best fit.

