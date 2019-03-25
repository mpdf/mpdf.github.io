---
layout: page
title: Floating blocks
parent_title: What Else Can I Do
permalink: /what-else-can-i-do/floating-blocks.html
modification_time: 2015-08-05T12:00:01+00:00
---

mPDF &ge; 3.0

The CSS property `float` is **partially** supported in mPDF, allowing block elements (p, div etc.) to be placed
alongside one another. They can also be used to create "columns" that span more than one page.

```css
float: right|left
```

## Limitations:

- Float only works properly if a width is set for the float
- If no width is set, the width is set to the maximum available (full width, or less if floats already set)
- A block element next to a float has the padding adjusted so that content fits in the remaining width.
- Text next to float should wrap correctly, but backgrounds and borders will overlap and/or lie under the floats in a mess
- Does not work if Columns are being used.
- You cannot change the page margins/orientation etc. in middle of using floats
- Float is only supported on block elements (i.e. not SPAN etc.)

`margin-right` can still be set for a `float:right` and vice-versa.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** The width that is set defines the width of the
  content-box. So if you have two floats with width=50% and either of them has padding, margin or border, they
  will not fit together on the page.
</div>

## Clear

The CSS property `clear` can be set on any block element (p, div etc.), and also `<hr>` or `<br>` elements.

```css
clear: right|left|both
```

## Examples

```html
<h4>CSS Float</h4>

<div>
    Some text to start with

    <div style="float: right; width: 28%;">
        This is text that is set to float:right.
    </div>

    <div style="float: left; width: 54%;">
        This is text that is set to float:left.
    </div>

    <div style="clear: both; margin: 0pt; padding: 0pt; "></div>

    This is text that follows the clear:both.
</div>

```

