---
layout: page
title: Writing non-HTML text
parent_title: What Else Can I Do
permalink: /what-else-can-i-do/writing-non-html-text.html
modification_time: 2015-08-05T12:00:19+00:00
---

mPDF is optimised to output HTML code, i.e. parsing the HTML markup. If you want to create a PDF file from a long text
file (e.g. a PHP script file) preserving `TAB`s and multiple spaces, use the 
function <a href="{{ "/reference/mpdf-utilities/preparepretext.html" | prepend: site.baseurl }}">preparePreText()</a>.
Note this is not part of the mPDF class.

This will surround the text with `<pre>` tags whilst preventing any `<pre>` tags included in the text from
being parsed. It also allows use of a text string marker (`<formfeed>`) to be replaced
by a formfeed in the output file.

# See

- <a href="{{ "/reference/mpdf-utilities/preparepretext.html" | prepend: site.baseurl }}">preparePreText()</a>
- &lt;<a href="{{ "/reference/html-control-tags/formfeed.html" | prepend: site.baseurl }}">formfeed</a>&gt; - 
  Forces a new page, while keeping current HTML tags/CSS active
