---
layout: page
title: useSubstitutions
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/usesubstitutions.html
modification_time: 2015-08-05T12:02:39+00:00
---

(mPDF &gt;= 4.2)

useSubstitutions – Specify whether to substitute missing characters in UTF-8 (multibyte) documents

# Description

void <b>useSubstitutions</b>

Specify whether to substitute missing characters in UTF-8(multibyte) documents. Characters which cannot be displayed in the current set font, will be substituted by characters in the Adobe core fonts (Symbol, Zapfdingbats etc.), or the backup font(s) specified in the variable in <span class="parameter">$this-&gt;backupSubsFont</span> the <span class="filename">config_fonts.php</span> configuration file.

<div class="alert alert-info" role="alert"><strong>Note:</strong> Prior to mPDF 5.0 useSubstitutions controlled the behaviour of character substitution when using Adobe core fonts, and useSubstitutionsMB was used for character susbstitution in multibyte/utf-8 documents. For mPDF &gt;= 5.0 character substitution for documents using core fonts is always enabled.</div>

# Values

<span class="parameter">useSubstitutions</span> =&nbsp; <span class="smallblock">TRUE </span>| <span class="smallblock">FALSE</span>

<b>Values</b>

<span class="smallblock">TRUE </span>: enable substitution

<span class="smallblock">FALSE</span>: disable substitution

<span class="smallblock">DEFAULT</span>: <span class="smallblock">FALSE</span>

# Changelog

<table class="table"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>4.2</td>
<td>Variable was added. Controlled behaviour when using Adobe core fonts

</td>
</tr>
<tr>
<td>5.0</td>
<td>Changed to control behaviour of multibyte documents</td>
</tr>
</tbody> </table>

# Examples

{% highlight php %}
Example #1

{% endhighlight %}

{% highlight php %}
<?php

include("../mpdf.php");

$mpdf=new mPDF('UTF-8');

$mpdf->useSubstitutions = true;

$mpdf->WriteHTML("Hallo World");

$mpdf->Output();

?>
{% endhighlight %}

<div class="alert alert-info" role="alert"><strong>Note:</strong> This may add significantly to the processing time for large files.</div>

