---
layout: page
title: Lists
parent_title: What Else Can I Do
permalink: /what-else-can-i-do/lists.html
modification_time: 2015-08-05T12:00:07+00:00
---

(mPDF &gt;= 6.0)

Lists are handled as for other block level elements, so you can apply any CSS properties usable on blocks (e.g. border, background, padding) to UL/OL and LI tags.

There is full support for CSS properties "<code>list-style</code>", "<code>list-style-image</code>", "<code>list-style-type</code>", and "<code>list-style-position</code>".

## List Modes

There are two modes for lists: "mpdf" mode and "browser" mode. Mode is set using the configurable variable <code>list_auto_mode</code> in <span class="filename">config.php</span>

1) Browser mode gives the same display as most browsers. In this mode, the default list indentation is set by <code>padding "0 auto"</code> in the default CSS in <span class="filename">config.php</span>. "<code>auto</code>" equates to the value of <code>list_indent_default</code> in <span class="filename">config.php</span> - this is a "magic" value for padding, which is applied to either left or right depending on directionality of the list (rtl/ltr).

2) "mPDF" mode gives results compatible with versions of mPDF prior to v6.0. In this mode, the indentation is calculated differently: the outside edge of the list item is considered to be the outside edge of the bullet or number. For numbered lists, mPDF calculates the width of the largest number and this width is used to set the outside edge. The default list indentation of "<code>auto</code>" in mPDF mode is set by <code>list_indent_default_mpdf</code>. This value is added to the automatic calculated indentation. For backwards compatibility, <code>list_indent_first_level = 0;</code> can be used to prevent any indentation of the first list level.

The automatic indentation only works for bullets or numbered lists, and is ignored if "<code>list-style-position: inside</code>" is set, or images are used for markers.

Browser mode is set as the default - for backwards compatibility, change this to "mpdf".

## List top &amp; bottom margins

The default in browsers is to add a top and bottom margin to the outermost list only. This can be defined using CSS as:

{% highlight php %}
ul, ol { margin-top: 0.83em; margin-bottom: 0.83em; }

ul ul, ul ol, ol ul, ol ol { margin-top: 0; margin-bottom: 0; }
{% endhighlight %}

This style is included in file <span class="filename">mpdf.css</span>

Versions of mPDF prior to v6.0 always added a top and bottom margin to the outermost list, (but no variation from this was possible). mPDF 6 is therefore backwards compatible re. the margins.

[NB The CSS styles are included in <span class="filename">mpdf.css</span>, because the <code>defaultCSS</code> values set in <span class="filename">config.php</span> only works on basic elements, and cannot use selectors such as "<code>ol ol</code>".]

## Other configurable variables

Configurable variables are used to define size and offset for list bullets (i.e. disc, circle or square). The values can be any valid CSS size.

To specify a fixed bullet size and offset to give a similar appearance to most browsers, the default is set as:

<ul> </li>
</ul>

{% highlight php %}
<?php

$this->list_marker_offset = '5.5pt';

$this->list_symbol_size = '3.6pt';
{% endhighlight %}

To specify size and offset proportional to the list item's font size (compatible with versions of mPDF prior to v6.0), use:

<ul> </li>
</ul>

{% highlight php %}
<?php

$this->list_marker_offset = '0.45em';

$this->list_symbol_size = '0.31em';
{% endhighlight %}

## Notes on Lists

The attribute <code>type</code> is case sensitive (whereas it is case insensitive in CSS). This allows the use of shorthand versions e.g. <code>type="A"</code> for uppercase alpha-numeric.

"<code>list-style-type</code>" is only inherited to child LI (not to child UL/OL); <code>list-style-image</code> and <code>-position</code> are fully inherited.

Lists in tables are basic, as block-level elements are not supported inside tables.

Properties like <code>text-align:justify</code> are inherited from surrounding elements, which will change the appearance of lists designed with earlier versions of mPDF.

The attribute <code>start="3"</code> (integer) works for "OL"; it is an official (though depracated) HTML attribute.

List bullets (<code>type = disc, circle </code>or<code> square</code>) are drawn rather than using font glyphs (from mPDF &gt;= v6.0), for better consistency.

For maximum backwards comaptibility with older versions of mPDF, change the following configurable variables in the <code>config.php</code> file:

<table class="table"> <thead>
<tr>
<td>

</td>
<td>mPDF 6.0 Default (Browser compatible)

</td>
<td>Backwards Compatible &lt;6.0

</td>
</tr>
</thead> <tbody>
<tr>
<td>Lists</td>
<td>

$this-&gt;list_auto_mode = 'browser';

$this-&gt;list_marker_offset = '5.5pt';

$this-&gt;list_symbol_size = '3.6pt';</td>
<td>

$this-&gt;list_auto_mode = 'mpdf';

$this-&gt;list_marker_offset = '0.45em';

$this-&gt;list_symbol_size = '0.31em';

</td>
</tr>
</tbody> </table>
