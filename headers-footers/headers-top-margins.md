---
layout: page
title: Headers & Top margins
parent_title: Headers & Footers
permalink: /headers-footers/headers-top-margins.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 4.0)</p>
<p>In standard usage, mPDF sets the following:</p>
<ul>
<li>top-margin = distance in mm from top of page to start of text (ignoring any headers)</li>
<li>header-margin = distance in mm from top of page to start of header</li>
<li>bottom-margin = distance in mm from bottom of page to bottom of text (ignoring any footers)</li>
<li>footer-margin = distance in mm from bottom of page to bottom of footer</li>
</ul>
<p>If you specify a header that extends further down the page than the top-margin, then the header and main text will overlap.</p>
<h2>Alternative margin usage</h2>
<p>The variables <span class="parameter">$this-&gt;setAutoTopMargin</span> and <span class="parameter">$this-&gt;setAutoBottomMargin</span> can be set in the config.php file. Both default to <span class="smallblock">FALSE</span>.</p>
<h3>pad</h3>
<p>If <span class="parameter">$this-&gt;setAutoTopMargin</span> is set to '<b>pad</b>' then the value for margin-top is used to set a fixed distance in mm (padding) between the bottom of the header and top of the main text. The converse is true with <span class="parameter">$this-&gt;setAutoBottomMargin</span>.</p>
<h3>stretch</h3>
<p>If <span class="parameter">$this-&gt;setAutoTopMargin</span> is set to '<b>stretch</b>' then the margin-top sets a <b>minimum</b> distance in mm between the top of the page and the top of the main text, which expands if header is too large to fit. The value <span class="parameter">$this-&gt;autoMarginPadding</span> (default = 2, configurable in <span class="filename">config.php</span>) defines an additional distance in mm used as padding between the header and main text. This is the behaviour seen in Microsoft Word. 

The converse is true with <span class="parameter">$this-&gt;setAutoBottomMargin</span>.</p>
<h2>Experimental!</h2>
<p>Use of this function is probably best considered experimental. It is incompatible with some of the other functionality in mPDF, and has some limitations:</p>
<p>- Using either pad or stretch, the values are set for the whole document - changes during the document will produce unpredictable results</p>
<p>- Incompatible with orientation changes, <span class="parameter">forceportraitheaders</span> or <span class="parameter">forceportraitmargins</span></p>
<p>- Does not work with "write to current page" options for Headers</p>
<p>- Incompatible with CSS @paged media</p>
<p>- Cannot set a new Footer when already further down the page than there is room needed for footer</p>
<p>- Potential error if using {nbpg} to define page total in an HTML header or footer. The top/bottom margin is calculated by writing the HTML header using the current page no. If when the header is finally written, a page number total of e.g. 500 causes an extra line in the header/footer, this will not be allowed for.</p>
</div>
</div>

