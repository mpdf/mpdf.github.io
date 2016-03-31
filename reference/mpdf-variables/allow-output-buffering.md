---
layout: page
title: allow_output_buffering
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/allow-output-buffering.html
modification_time: 2015-08-05T12:01:35+00:00
---

<p>(mPDF &gt;= 3.0)</p>

# Description

<p class="manual_block">boolean <b>allow_output_buffering</b></p>
<p>When <span class="smallblock">TRUE</span>, mPDF will ignore any content in the object buffer - ob_get_contents() - when outputting the PDF file. By default, any buffered output will be treated as an error message and will abort the PDF file output and display any errors to the browser.</p>

<div class="alert alert-info" role="alert"><strong>Note:</strong> If the variable <span class="parameter">debug</span> is set to <span class="smallblock">FALSE</span> (default) this variable has no effect.</div>

# Values

<p class="manual_param_dt"><span class="parameter">allow_output_buffering</span> = <i><span class="smallblock">FALSE</span></i>|<span class="smallblock">TRUE</span></p>
<p class="manual_param_dd"><b>Values</b>

<i><span class="smallblock">FALSE</span></i>: <span class="smallblock">DEFAULT</span> Any buffered output from the script will trigger an error message and abort production of the PDF file.

<span class="smallblock">TRUE</span>: Ignores any content in the object buffer when outputting the PDF file.</p>

# See Also

<ul>
<li class="manual_boxlist"><a href="{{ "/troubleshooting/error-messages.html" | prepend: site.baseurl }}">Error Messages</a> 

</li>
</ul>

