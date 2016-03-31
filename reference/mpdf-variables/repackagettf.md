---
layout: page
title: repackageTTF
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/repackagettf.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>When Embedding full TTF font files, setting this variable to TRUE forces mPDF to remake the font file using only core tables.</p>
<p>This may improve function with some PostScript printers (GhostScript/GSView)</p>
<p>$this-&gt;repackageTTF = false;(default)</p>
<p>Does not work with TTC font collections</p>
<p>Produces a slightly smaller PDF file; increased processing time.</p>
</div>
</div>

