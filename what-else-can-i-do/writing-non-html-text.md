---
layout: page
title: Writing non-HTML text
parent_title: What Else Can I Do
permalink: /what-else-can-i-do/writing-non-html-text.html
modification_time: 2015-08-05T12:00:19+00:00
---

mPDF is optimised to output HTML code, i.e. parsing the HTML markup. If you want to create a PDF file from a long text file (e.g. a PHP script file) preserving <span class="smallblock">TAB</span>s and multiple spaces, use the function preparePreText(). Note this is not part of the mPDF class.

This will surround the text with &lt;pre&gt; tags whilst preventing any &lt;pre&gt; tags included in the text from being parsed. It also allows use of a text string marker (<span class="parameter">formfeed</span>) to be replaced by a formfeed in the output file.

# See

<ul>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-utilities/preparepretext.html" | prepend: site.baseurl }}">preparePreText()</a> 

</li>
</ul>
