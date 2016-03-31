---
layout: page
title: allowCJKorphans
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/allowcjkorphans.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 5.7)</p>
<p>CJK line-breaking is implemented in mPDF roughly according to accepted rules.</p>
<p>Configurable variables allow fine control of behaviour (except in tables):</p>
<p>&nbsp;&nbsp;&nbsp; $this-&gt;allowCJKorphans = true;&nbsp;&nbsp;&nbsp; // FALSE=always wrap to next line; TRUE=squeeze or overflow

&nbsp;&nbsp;&nbsp; $this-&gt;allowCJKoverflow = false; // FALSE=squeeze; TRUE=overflow (only selected)</p>
<p>See also <a href="/reference/mpdf-variables/allowcjkoverflow.html">allowCJKoverflow</a> and <a href="/reference/mpdf-variables/cjkforceend.html">CJKforceend </a></p>
</div>
</div>

