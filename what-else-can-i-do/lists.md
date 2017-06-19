---
layout: page
title: Lists
parent_title: What Else Can I Do
permalink: /what-else-can-i-do/lists.html
modification_time: 2015-08-05T12:00:07+00:00
---

(mPDF >= 6.0)

Lists are handled as for other block level elements, so you can apply any CSS properties usable on blocks (e.g. border, 
background, padding) to UL/OL and LI tags.

There is full support for CSS properties "`list-style`", "`list-style-image`", "`list-style-type`", and "`list-style-position`".

## List Modes

There are two modes for lists: "mpdf" mode and "browser" mode. Mode is set using the 
<a href="{{ "/configuration/configuration-v7-x.html" | prepend: site.baseurl }}">configuration variable</a>
`list_auto_mode`

1) Browser mode gives the same display as most browsers. In this mode, the default list indentation is set by 
`padding "0 auto"` in the default CSS. "`auto`" equates to the value of 
`list_indent_default` <a href="{{ "/configuration/configuration-v7-x.html" | prepend: site.baseurl }}">configuration variable</a>
this is a "magic" value for padding, which is applied to either left or right depending on directionality of the list (rtl/ltr).

2) "mPDF" mode gives results compatible with versions of mPDF prior to v6.0. In this mode, the indentation is 
calculated differently: the outside edge of the list item is considered to be the outside edge of the bullet or 
number. For numbered lists, mPDF calculates the width of the largest number and this width is used to set the outside 
edge. The default list indentation of "`auto`" in mPDF mode is set by `list_indent_default_mpdf`. This value is added 
to the automatic calculated indentation. For backwards compatibility, `list_indent_first_level = 0;` can be used to 
prevent any indentation of the first list level.

The automatic indentation only works for bullets or numbered lists, and is ignored if "`list-style-position: inside`" 
is set, or images are used for markers.

Browser mode is set as the default - for backwards compatibility, change this to "mpdf".

## List top &amp; bottom margins

The default in browsers is to add a top and bottom margin to the outermost list only. This can be defined using CSS as:

```css
ul, ol { margin-top: 0.83em; margin-bottom: 0.83em; }

ul ul, ul ol, ol ul, ol ol { margin-top: 0; margin-bottom: 0; }

```

This style is included in file <span class="filename">mpdf.css</span>

Versions of mPDF prior to v6.0 always added a top and bottom margin to the outermost list, (but no variation from this 
was possible). mPDF 6 is therefore backwards compatible re. the margins.

NB The CSS styles are included in <span class="filename">mpdf.css</span>, because the `defaultCSS` values set in 
<a href="{{ "/configuration/configuration-v7-x.html" | prepend: site.baseurl }}">configuration</a>
only works on basic elements, and cannot use selectors such as "`ol ol`".

## Other configurable variables

Configurable variables are used to define size and offset for list bullets (i.e. disc, circle or square). The values 
can be any valid CSS size.

To specify a fixed bullet size and offset to give a similar appearance to most browsers, the default is set as:

<ul> </li>
</ul>

```php
<?php

$this->list_marker_offset = '5.5pt';

$this->list_symbol_size = '3.6pt';

```

To specify size and offset proportional to the list item's font size (compatible with versions of mPDF prior to v6.0), use:

```php
<?php

$this->list_marker_offset = '0.45em';

$this->list_symbol_size = '0.31em';

```

## Notes on Lists

The attribute `type` is case sensitive (whereas it is case insensitive in CSS). This allows the use of shorthand 
versions e.g. `type="A"` for uppercase alpha-numeric.

"`list-style-type`" is only inherited to child LI (not to child UL/OL); `list-style-image` and `-position` are fully 
inherited.

Lists in tables are basic, as block-level elements are not supported inside tables.

Properties like `text-align:justify` are inherited from surrounding elements, which will change the appearance of
lists designed with earlier versions of mPDF.

The attribute `start="3"` (integer) works for "OL"; it is an official (though deprecated) HTML attribute.

List bullets (`type = disc, circle `or` square`) are drawn rather than using font glyphs (from mPDF >= v6.0), 
for better consistency.

For maximum backwards comaptibility with older versions of mPDF, change the following 
<a href="{{ "/configuration/configuration-v7-x.html" | prepend: site.baseurl }}">configuration variables</a>

<table class="table">
	<thead>
		<tr>
			<td> </td>
			<td>mPDF 6.0 Default (Browser compatible) </td>
			<td>Backwards Compatible &lt;6.0 </td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Lists</td>
			<td>
				$this->list_auto_mode = 'browser'; $this->list_marker_offset = '5.5pt'; $this->list_symbol_size = '3.6pt';</td>
			<td>
				$this->list_auto_mode = 'mpdf'; $this->list_marker_offset = '0.45em'; $this->list_symbol_size = '0.31em';
			</td>
		</tr>
	</tbody>
</table>

