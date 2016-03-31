---
layout: page
title: use_kwt
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/use-kwt.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>mPDF &gt;= 2.0</p>
<p>Keep with table</p>
<p>Default false</p>
<p>If true: function AdjustHTML() adds an attribute KEEP-WITH-TABLE to any &lt;table&gt; which is immediately preceded by a &lt;h1-6&gt; element.</p>
<p>This attempts to keep the heading and table together on one page.</p>
<p>Can be used together with &lt;table style="page-break-inside: avoid;"&gt;</p>
<p>Automatically sets the table to fit on one page (i.e. page-break-inside=avoid) if it is a rotated table.</p>
<p>Ignored if: Heading is longer than one line of text on the page, Columns are on, Keep-block-together active (i.e. page-break-inside=avoid for surrounding BLOCK).</p>
</div>
</div>

