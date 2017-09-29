---
layout: page
title: Image errors
parent_title: Troubleshooting
permalink: /troubleshooting/image-errors.html
modification_time: 2015-08-05T12:00:34+00:00
---

If images cannot be displayed correctly, you should see a <img alt="" src="/files/images/no_img2.gif" /> on the page. 
Please see <a href="{{ "/what-else-can-i-do/images.html" | prepend: site.baseurl }}">Images</a> 
for further information, and a method to debug the problem.

Background-images will degrade silently ie. they do not show the <img alt="" src="/files/images/no_img2.gif" /> icon.

Image files containing spaces may cause problems. Change the spaces to `%20` using e.g. `urlencode()`.

