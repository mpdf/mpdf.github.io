---
layout: page
title: Automatic resizing
parent_title: Troubleshooting
permalink: /troubleshooting/resizing.html
modification_time: 2016-06-02T10:06:35+00:00
---

mPDF automatically resizes content in some circumstances. Using the default settings and CSS properties, 
the following are resized:

- tables will resize so that the tallest row (cell) will fit on a page - this is the only one that cannot be overridden
- tables will resize to fit the minimum width into the available width (minimum width of a table is when no 
  words are broken) - override using CSS `<table style="overflow: hidden|visible|wrap>`
- tables will resize to fit the table into the remaining available space left on a page, as long as it is 
  within the limit set by configurable variable `$this->shrink_tables_to_fit` - this can be prevented by setting this 
  <a href="{{ "/configuration/configuration-v7-x.html" | prepend: site.baseurl }}">configuration variable</a> to `1` 
  or by `<table autosize="1">`
- block elements (e.g. `<div>`) with `position:fixed` or `position:absolute` and `overflow:auto` (the default) will
  resize the contents if required to fit on the page - override by changing the value of `overflow`
- images will resize if necessary to fit onto a page

Tables may also resize if you set the CSS property `page-break-inside: avoid`

