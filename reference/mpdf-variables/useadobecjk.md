---
layout: page
title: useAdobeCJK
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/useadobecjk.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 5.0)</p>
<h2>Description</h2>

<div class="alert alert-info" role="alert">boolean <b>useAdobeCJK</b></div>
<p>When <span class="smallblock">TRUE</span>, forces mPDF to use the free Adobe CJK Asian fonts, thus keeping the PDF file size to a minimum. This affects text defines using the CSS <span class="parameter">lang</span> property, which includes the use of AutoFont. Thus a CSS stylesheet defining <code>lang="ja"</code> will be substituted by the Adobe Japanes font. (This will not prevent the use of other CJK fonts if specified by font-family.)</p>
<p>The precise effect it has on different languages/fonts will be specified in the <span class="filename">config_cp.php</span> configuration file.</p>

<div class="alert alert-info" role="alert"><b>Note:</b> This value can only be set inside the <span class="filename">config.php</span> configuration file. To change the value at runtime, you must use <code>$mpdf = new mPDF('-aCJK');</code> to set as <span class="smallblock">FALSE</span> or <code>$mpdf = new mPDF('+aCJK'); </code>to set as <span class="smallblock">TRUE</span></div>
<h2>Values</h2>
<p class="manual_param_dt"><span class="parameter">useAdobeCJK</span> = <i><span class="smallblock">TRUE</span></i>|<span class="smallblock">FALSE</span></p>
<p class="manual_param_dd"><b>Values</b>

<i><span class="smallblock">TRUE</span></i>: <span class="smallblock">DEFAULT</span> Use the free Adobe CJK Asian fonts

<span class="smallblock">FALSE</span>: Use normal embedded fonts</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>
</div>

