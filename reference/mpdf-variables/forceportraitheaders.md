---
layout: page
title: forcePortraitHeaders
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/forceportraitheaders.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>==========================================================

Special case - rotated Portrait headers on Landscape pages

==========================================================

$mpdf-&gt;forcePortraitHeaders = true;</p>

<div class="alert alert-info" role="alert">In v2.3 this was updated to work for non-HTML headers/footers as well.</div>
<p>This is a quick fix which rotates HTML headers and Footers on landscape pages in the following conditions:

- document orientation is portrait

- when adding a page, you must only call $mpdf-&gt;AddPage('L') or &lt;pagebreak orientaion="landscape" /&gt; - if you try to set new margins/headers etc. for new landscape pages when forcePortrait=true, it will go wrong</p>
</div>
</div>

