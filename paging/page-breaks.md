---
layout: page
title: Page breaks
parent_title: Paging
permalink: /paging/page-breaks.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>You can force a page break anywhere in the document either by using HTML code or PHP:</p>

{% highlight php %}
<?php

$mpdf->AddPage();

<pagebreak />
{% endhighlight %}

<p>You can define or change all page characteristics when you add the new page:</p>
<ul>
<li>orientation</li>
<li>margins</li>
<li>numbering (on/off, style or suprress)</li>
<li>header/footer</li>
</ul>
<p>Note the special <a href="/reference/mpdf-functions/tocpagebreak.html">TOCpagebreak()</a> or &lt;<a href="/reference/html-control-tags/tocpagebreak.html">tocpagebreak</a>&gt; which are like <a href="/reference/mpdf-functions/addpage.html">AddPage()</a> and &lt;<a href="/reference/html-control-tags/pagebreak.html">pagebreak</a>&gt; whilst at the same time marking the position for a Table of Contents to be later inserted. CSS <a href="/paging/using-page.html">@page</a> can also be used to define page breaks.</p>
<h2>Forcing Page Breaks</h2>
<p>You can set the CSS value for <span class="parameter">page-break-before</span> to "always | left | right" for any block element (p, div etc). This will force a page-break, but take care that any enclosing (outer) block elements will be 'closed down' and their characteristics lost.</p>
<h2>Avoiding Page Breaks</h2>
<p>mPDF has limited scope to control when automatic page-breaks occur, and does not have 'widows' or 'orphans' protection.</p>
<h3>page-break-inside</h3>
<p>You can set the CSS value for <span class="parameter">page-break-inside</span> to "avoid" for any block element. mPDF will try to avoid a page-break within the block, but this only works across a maximum of 2 pages, and is not compatible with table autosize or table rotate</p>
<h3>"Keep-with-table"</h3>

{% highlight php %}
<?php

$mpdf->use_kwt = true;    // DEFAULT=false
{% endhighlight %}

<p>If set to true, mPDF will automatically set <span class="parameter">page-break-inside</span>=avoid for any H1-H6 header that <i>immediately</i> precedes a table, thus keeping the heading together with the table. 

- automatically sets the table to fit on one page (i.e. table:<span class="parameter">page-break-inside</span>=avoid) if it is a rotated table

- ignored when: columns on, <span class="parameter">page-break-inside</span>=avoid for surrounding element, active Forms</p>
<h3>Tables</h3>
<p>If a table has the property page-break-inside:avoid and will not fit on the page, mPDF tries to shrink it to fit - up to a maximum "shrink-factor" set by the variable $mpdf-&gt;shrink_tables_to_fit - default is 1.4 (i.e. about 70% original size). If this still won't fit, it moves it to the next page.</p>
<p>A shrunk table may not be what you want. You can prevent this resizing either by setting the maximum shrink-factor for a particular table e.g. &lt;table autosize="1"&gt; or by setting the variable for the whole document i.e. $mpdf-&gt;shrink_tables_to_fit=1;

(Note that mPDF will always resize tables if it is the only way to fit a row or whole table onto a full page.)</p>
<h2>Headers and Footers</h2>
<p>See the documentation for <a href="/headers-footers/headers-footers.html">Headers and Footers</a></p>
<h2>Types of page break</h2>
<p>The handling of borders and padding at page breaks was updated in mPDF 6.0. mPDF has three types of page breaks:</p>
<p>1) "slice" - no border and no padding are inserted at a break. The effect is as though the element were rendered with no breaks present, and then sliced by the breaks afterward</p>
<p>2) "cloneall" - each page fragment is independently wrapped with the borders and padding of all open elements.</p>
<p>3) "clonebycss" - open elements which have the (custom) CSS property "box-decoration-break" set to "clone" are independently wrapped with their border and padding.</p>
<p>The difference between 2) and 3) is illustrated by this example:</p>

{% highlight php %}
<style>

div { border: 1px solid black; padding: 1em; }

.level1 { box-decoration-break: slice; }

.level2 { box-decoration-break: clone; }

.level3 { box-decoration-break: clone; }

</style>

<div class="level1">

<div class="level2">

<div class="level3">

<p style="page-break-after:always">...</p>

<p>....</p>

</div>

</div>

</div>
{% endhighlight %}

<p>At the forced pagebreak which occurs after the P element:</p>
<p>If the page break type is "cloneall" - the three DIV elements will all be closed, by drawing the border and padding for each at the end of the page; the three DIV elements will be re-opened, drawing the borders and padding, at the top of the next page.</p>
<p>If the page break type is "clonebycss" - starting from the innermost element (div.level3) the DIV elements will have a border and padding at the end of the page if "box-decoration-break" is clone. In this case level2 and level 3 will be closed/cloned and level 1 will be sliced; the opposite will occur at the top of the next page.</p>
<h3>Control of page breaks</h3>
<table class="bpmTopic"> <tbody>
<tr>
<td>Automatic page breaks (in flow of text)</td>
<td>Always "slice"</td>
</tr>
<tr>
<td>&lt;tocpagebreak&gt;</td>
<td>Always "cloneall"</td>
</tr>
<tr>
<td>&lt;formfeed&gt;</td>
<td>Always "slice"</td>
</tr>
<tr>
<td>If using columns</td>
<td>Always "cloneall"</td>
</tr>
<tr>
<td>Page break forced by change of @page selector</td>
<td>Always "cloneall"</td>
</tr>
<tr>
<td>&lt;pagebreak&gt;</td>
<td>Always "cloneall" if a change in page size or margins is specified.

Otherwise page break type is determined by value of configurable variable: $this-&gt;defaultPagebreakType. Default is "cloneall".

Default can be overridden by attribute "page-break-type" e.g. &lt;pagebreak page-break-type="clonebycss" /&gt;</td>
</tr>
<tr>
<td>Page breaks forced by:

page-break-before or page-break-after</td>
<td>Page break type determined by value of configurable variable: $this-&gt;defaultPagebreakType. Default is "cloneall".</td>
</tr>
</tbody> </table>
<h3>Notes on page breaking</h3>
<p>"box-decoration-break: slice | clone" was proposed for CSS3 in <a href="http://www.w3.org/TR/2012/CR-css3-background-20120417/#the-box-decoration-break">http://www.w3.org/TR/2012/CR-css3-background-20120417/#the-box-decoration-break</a> but it appears that it may be withdrawn. Default is "slice"; it is not inherited.</p>
<p>"page-break-before" is not supported on &lt;table&gt;.</p>
<p>"page-break-before|after" is ignored if set on block elements inside a table.</p>
<p>Background images and gradients are not sliced (always cloned).</p>
<p>$this-&gt;restoreBlockPagebreaks in config.php is now redundant.</p>
</div>
</div>

