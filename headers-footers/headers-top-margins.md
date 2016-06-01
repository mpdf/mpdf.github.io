---
layout: page
title: Headers & Top margins
parent_title: Headers & Footers
permalink: /headers-footers/headers-top-margins.html
modification_time: 2015-08-05T11:59:53+00:00
---

(mPDF >= 4.0)

In standard usage, mPDF sets the following:

<ul>
<li>top-margin = distance in mm from top of page to start of text (ignoring any headers)</li>
<li>header-margin = distance in mm from top of page to start of header</li>
<li>bottom-margin = distance in mm from bottom of page to bottom of text (ignoring any footers)</li>
<li>footer-margin = distance in mm from bottom of page to bottom of footer</li>
</ul>

If you specify a header that extends further down the page than the top-margin, then the header and main text will overlap.

# Alternative margin usage

The variables <span class="parameter">$this->setAutoTopMargin</span> and <span class="parameter">$this->setAutoBottomMargin</span> can be set in the config.php file. Both default to <span class="smallblock">FALSE</span>.

## pad

If <span class="parameter">$this->setAutoTopMargin</span> is set to '**pad**' then the value for margin-top is used to set a fixed distance in mm (padding) between the bottom of the header and top of the main text. The converse is true with <span class="parameter">$this->setAutoBottomMargin</span>.

## stretch

If <span class="parameter">$this->setAutoTopMargin</span> is set to '**stretch**' then the margin-top sets a **minimum** distance in mm between the top of the page and the top of the main text, which expands if header is too large to fit. The value <span class="parameter">$this->autoMarginPadding</span> (default = 2, configurable in <span class="filename">config.php</span>) defines an additional distance in mm used as padding between the header and main text. This is the behaviour seen in Microsoft Word.

The converse is true with <span class="parameter">$this->setAutoBottomMargin</span>.

# Experimental!

Use of this function is probably best considered experimental. It is incompatible with some of the other functionality in mPDF, and has some limitations:

- Using either pad or stretch, the values are set for the whole document - changes during the document will produce unpredictable results

- Incompatible with orientation changes, <span class="parameter">forceportraitheaders</span> or <span class="parameter">forceportraitmargins</span>

- Does not work with "write to current page" options for Headers

- Incompatible with CSS @paged media

- Cannot set a new Footer when already further down the page than there is room needed for footer

- Potential error if using {nbpg} to define page total in an HTML header or footer. The top/bottom margin is calculated by writing the HTML header using the current page no. If when the header is finally written, a page number total of e.g. 500 causes an extra line in the header/footer, this will not be allowed for.

