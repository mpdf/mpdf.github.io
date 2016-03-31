---
layout: page
title: allow_output_buffering
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/allow-output-buffering.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 3.0)</p>
<h2>Description</h2>

<div class="alert alert-info" role="alert">boolean <b>allow_output_buffering</b></div>
<p>When <span class="smallblock">TRUE</span>, mPDF will ignore any content in the object buffer - ob_get_contents() - when outputting the PDF file. By default, any buffered output will be treated as an error message and will abort the PDF file output and display any errors to the browser.</p>

<div class="alert alert-info" role="alert"><b>Note:</b> If the variable <span class="parameter">debug</span> is set to <span class="smallblock">FALSE</span> (default) this variable has no effect.</div>
<h2>Values</h2>
<p class="manual_param_dt"><span class="parameter">allow_output_buffering</span> = <i><span class="smallblock">FALSE</span></i>|<span class="smallblock">TRUE</span></p>
<p class="manual_param_dd"><b>Values</b>

<i><span class="smallblock">FALSE</span></i>: <span class="smallblock">DEFAULT</span> Any buffered output from the script will trigger an error message and abort production of the PDF file.

<span class="smallblock">TRUE</span>: Ignores any content in the object buffer when outputting the PDF file.</p>
<h2>See Also</h2>
<ul>
<li class="manual_boxlist"><a href="/troubleshooting/error-messages.html">Error Messages</a> 

</li>
</ul>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>
</div>

