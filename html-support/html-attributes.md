---
layout: page
title: HTML Attributes
parent_title: HTML support
permalink: /html-support/html-attributes.html
modification_time: 2017-03-12T11:59:42+00:00
---

# HTML tag Attributes (in-line) supported

Example of an HTML attribute: `<div align="center">`

mPDF supports attribute values in single or double quotes e.g. `<div align="center">` or `<div align='center'>`

Minimised attributes are not supported e.g. `<input type="checkbox" disabled />`

XHTML specification is recommended for best compliance with mPDF.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** The attributes `$class`, `$id` and `$style` are supported on most HTML tags: see
  <a href="{{ "/css-stylesheets/supported-css.html" | prepend: site.baseurl }}">Supported CSS</a> for details.
</div>

<table class="table">
    <tbody>
        <tr>
            <td rowspan="2">HTML, BODY and ALL recognised tags
            </td>
            <td>lang* </td>
            <td><span class="smallblock">LANGUAGE-COUNTRY CODE</span> *</td>
        </tr>
        <tr>
            <td>dir</td>
            <td>rtl | ltr (mPDF &ge; 6.0)</td>
        </tr>
        <tr>
            <td>HTML, BODY</td>
            <td>dir</td>
            <td>rtl | ltr (mPDF &ge; 5.0)</td>
        </tr>
        <tr>
            <td>P, DIV</td>
            <td>align</td>
            <td>left | center | right | justify</td>
        </tr>
        <tr>
            <td rowspan="10">TABLE</td>
            <td>border</td>
            <td>1 | 0</td>
        </tr>
        <tr>
            <td>width</td>
            <td><span class="smallblock">LENGTH</span></td>
        </tr>
        <tr>
            <td>align</td>
  <td markdown="1">
  left \| center \| right \| char

  char was added in mPDF 5.7
  </td>
        </tr>
        <tr>
            <td>char</td>
  <td markdown="1">
  Used in conjunction with `align="char"`. Default if omitted is period `"."` Non-ASCII characters can be
  defined with HTML entities e.g. `&middot;` or `&#183;` As per HTML 4 spec. Added mPDF 5.7
  </td>
        </tr>
        <tr>
            <td>bgcolor</td>
            <td>#rrggbb</td>
        </tr>
        <tr>
            <td>cellSpacing</td>
            <td><span class="smallblock">LENGTH</span></td>
        </tr>
        <tr>
            <td>cellPadding</td>
            <td><span class="smallblock">LENGTH</span></td>
        </tr>
        <tr>
            <td><i>(repeat_header)</i></td>
  <td markdown="1">
  1   (removed from mPDF &ge; 5.4; use `<thead>`)
  </td>
        </tr>
        <tr>
            <td><i>autosize</i></td>
  <td markdown="1">
  <span class="smallblock">FLOAT</span> 

  * The value &ge; 0 shrinks a table to fit if width is too small to allow
  complete words to fit.
  * The value (must be &ge;1) determines the maximum allowable factor to shrink i.e.
  `autosize="2"` will allow the font-size to be reduced to a minimum of 1/2 the original size.
  * A value of 1 prevents automatic resizing of the table. (custom attribute)
  </td>
        </tr>
        <tr>
            <td><i>rotate</i></td>
            <td>90 | -90</td>
        </tr>
        <tr>
            <td>TR</td>
            <td>bgcolor</td>
            <td>#rrggbb</td>
        </tr>
        <tr>
            <td rowspan="8">TD, TH</td>
            <td>width</td>
            <td><span class="smallblock">LENGTH</span></td>
        </tr>
        <tr>
            <td>height</td>
            <td><span class="smallblock">LENGTH</span> (but not %)</td>
        </tr>
        <tr>
            <td>align</td>
            <td>left | center | right</td>
        </tr>
        <tr>
            <td>valign</td>
            <td>top | middle | bottom</td>
        </tr>
        <tr>
            <td>bgcolor</td>
            <td>#rrggbb</td>
        </tr>
        <tr>
            <td>colspan</td>
            <td><span class="smallblock">INTEGER</span></td>
        </tr>
        <tr>
            <td>rowspan</td>
            <td><span class="smallblock">INTEGER</span></td>
        </tr>
        <tr>
            <td>nowrap</td>
            <td>nowrap</td>
        </tr>
        <tr>
            <td>OL, UL</td>
            <td>font-size</td>
            <td><span class="smallblock">FONT-SIZE</span></td>
        </tr>
        <tr>
            <td rowspan="2">OL</td>
            <td>type</td>
            <td>1 | A | a | I | i | disc | circle | square</td>
        </tr>
        <tr>
            <td>start</td>
            <td><span class="smallblock">INTEGER</span> (mPDF &ge; 5.7)</td>
        </tr>
        <tr>
            <td>UL</td>
            <td>type</td>
            <td>disc | circle | square</td>
        </tr>
        <tr>
            <td rowspan="3">IMG</td>
            <td>width, height</td>
            <td><span class="smallblock">LENGTH</span></td>
        </tr>
        <tr>
            <td>max-height, max-width, min-height, min-width</td>
            <td><span class="smallblock">LENGTH</span></td>
        </tr>
        <tr>
            <td><i>rotate</i></td>
  <td markdown="1">
  90 \| -90 \| 180, where  90 = clockwise

  When width is specified e.g. `width="3cm"` this is applied to the rotated
  image i.e. will be width 3 cm after rotating
  </td>
        </tr>
        <tr>
            <td rowspan="3">HR</td>
            <td>width</td>
            <td>nn%</td>
        </tr>
        <tr>
            <td>align</td>
            <td>left | center | right</td>
        </tr>
        <tr>
            <td>color</td>
            <td>#rrggbb</td>
        </tr>
        <tr>
            <td rowspan="3">FONT</td>
            <td>face</td>
            <td><span class="smallblock">FONT-FAMILY</span></td>
        </tr>
        <tr>
            <td>size</td>
            <td>1 | 2 | 3 | 4 | 5 | 6 | 7 | -1 | +1</td>
        </tr>
        <tr>
            <td>color</td>
            <td>#rrggbb</td>
        </tr>
        <tr>
            <td rowspan="2">FORM</td>
            <td>method</td>
  <td markdown="1">
  get \| post 

  Default: post (mPDF &ge; 5.3)
  </td>
        </tr>
        <tr>
            <td>action</td>
            <td><span class="smallblock">URI</span>  (mPDF &ge; 5.3</td>
        </tr>
        <tr>
            <td rowspan="6">TEXTAREA</td>
            <td>cols</td>
            <td><span class="smallblock">INTEGER</span></td>
        </tr>
        <tr>
            <td>rows</td>
            <td><span class="smallblock">INTEGER</span></td>
        </tr>
        <tr>
            <td>readonly</td>
            <td>readonly</td>
        </tr>
        <tr>
            <td>required</td>
            <td>required  [HTML5] (mPDF &ge; 5.3)</td>
        </tr>
        <tr>
            <td>spellcheck</td>
  <td markdown="1">
  true \| false [HTML5]

  Default: false (mPDF &ge; 5.3)
  </td>
        </tr>
        <tr>
            <td>onChange</td>
  <td markdown="1">
  <span class="smallblock">JAVASCRIPT</span>

  In Active Forms; uses "Acrobat" Javascript (mPDF &ge; 5.3)
  </td>
        </tr>
        <tr>
            <td rowspan="3">TEXTAREA, SELECT, INPUT</td>
            <td>disabled</td>
            <td>disabled</td>
        </tr>
        <tr>
            <td>title</td>
            <td><span class="smallblock">TEXT</span></td>
        </tr>
        <tr>
            <td>name</td>
  <td markdown="1">
  <span class="smallblock">TEXT</span>  

  Field names in Active Forms must only contain letters, numbers,
  colon(`:`), undersore(`_`) or hyphen(`-`). (This is largely as per HTML spec, but cannot contain period(`.`) as
  this is part of PDF spec for name hierarchies)
  </td>
        </tr>
        <tr>
            <td rowspan="6">SELECT</td>
            <td>size</td>
  <td markdown="1">
  <span class="smallblock">INTEGER</span>

  size = n, n rows visible.

  Default: 1
  </td>
        </tr>
        <tr>
            <td>multiple</td>
            <td>multiple</td>
        </tr>
        <tr>
            <td>required</td>
            <td>required [HTML5] (mPDF &ge; 5.3)</td>
        </tr>
        <tr>
            <td>spellcheck</td>
  <td markdown="1">
  true \| false [HTML5]

  Default: false (mPDF &ge; 5.3)
  Only if also editable and size=1
  </td>
        </tr>
        <tr>
            <td>editable</td>
  <td markdown="1">
  editable  [HTML5]

  Default: false (mPDF &ge; 5.3)
  Only if size=1
  </td>
        </tr>
        <tr>
            <td>onChange</td>
  <td markdown="1">
  <span class="smallblock">JAVASCRIPT</span>

  In Active Forms; uses "Acrobat" Javascript (mPDF &ge; 5.3)
  </td>
        </tr>
        <tr>
            <td rowspan="2">OPTION</td>
            <td>selected</td>
            <td>selected</td>
        </tr>
        <tr>
            <td>value</td>
            <td><span class="smallblock">TEXT</span></td>
        </tr>
        <tr>
            <td>INPUT</td>
            <td>type</td>
            <td>text | password | hidden | image | button | submit | reset | radio | checkbox</td>
        </tr>
        <tr>
            <td rowspan="2">INPUT (text, password, hidden, image, button, submit, reset)</td>
            <td>size</td>
  <td markdown="1">
  <span class="smallblock">INTEGER</span>

  size=n, width as number of characters
  </td>
        </tr>
        <tr>
            <td>value</td>
            <td><span class="smallblock">TEXT</span></td>
        </tr>
        <tr>
            <td rowspan="5">INPUT (text, password)</td>
            <td>maxlength</td>
            <td><span class="smallblock">INTEGER</span></td>
        </tr>
        <tr>
            <td>readonly</td>
            <td>readonly</td>
        </tr>
        <tr>
            <td>required</td>
            <td>required [HTML5] (mPDF &ge; 5.3)</td>
        </tr>
        <tr>
            <td>spellcheck</td>
  <td>
  true \| false [HTML5]

  Default: false (mPDF &ge; 5.3)
  </td>
        </tr>
        <tr>
            <td>onChange</td>
  <td markdown="1">
  <span class="smallblock">JAVASCRIPT</span>

  In Active Forms; uses "Acrobat" Javascript (mPDF &ge; 5.3)
  </td>
        </tr>
        <tr>
            <td rowspan="3">INPUT (image, button, submit, reset)</td>
            <td>alt</td>
            <td><span class="smallblock">TEXT</span></td>
        </tr>
        <tr>
            <td>src</td>
            <td><span class="smallblock">TEXT</span></td>
        </tr>
        <tr>
            <td>onClick</td>
  <td markdown="1">
  <span class="smallblock">JAVASCRIPT</span>

  In Active Forms; uses "Acrobat" Javascript (mPDF &ge; 5.3)
  </td>
        </tr>
        <tr>
            <td>INPUT (button, submit, reset)</td>
            <td><i>noprint</i></td>
            <td>noprint (mPDF &ge; 5.3)</td>
        </tr>
        <tr>
            <td>INPUT (radio, checkbox)</td>
            <td>value</td>
  <td markdown="1">
  <span class="smallblock">TEXT</span>

  In Active Forms value(s) for radio buttons and checkboxes are
  required, and can only contain letters, numbers, colon(`:`), undersore(`_`), hyphen(`-`) or period(.)
  </td>
        </tr>
        <tr>
            <td>DOTTAB</td>
            <td><i>outdent</i></td>
            <td><span class="smallblock">LENGTH</span> (mPDF &ge; 5.7)</td>
        </tr>
        <tr>
            <td>METER</td>
            <td>value, max, min, low, high, optimum</td>
            <td><span class="smallblock">FLOAT</span> [HTML5 spec]</td>
        </tr>
        <tr>
            <td>PROGRESS</td>
            <td>value, max</td>
            <td><span class="smallblock">FLOAT</span> [HTML5 spec]</td>
        </tr>
        <tr>
            <td rowspan="2">METER, PROGRESS</td>
            <td>width, height</td>
            <td><span class="smallblock">LENGTH</span></td>
        </tr>
        <tr>
            <td><i>type</i></td>
  <td markdown="1">
  Any alphanumeric string.

  If present, will select custom progress/meter formats - IF they have been
  defined in `\Mpdf\Meter` class
  </td>
        </tr>
    </tbody>
</table>

\* <span class="parameter">$lang</span> is only recognised when the variable
<a href="{{ " /reference/mpdf-variables/uselang.html " | prepend: site.baseurl }}">$useLang</a> is set to
`true` (Default is `true`)

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** Table page-break-inside, autosize values and rotate are only respected for that set on first
  level table of nested tables
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** Attributes like `nowrap`, `disabled`, `multiple`, `readonly`, `selected` and `checked` are only supported in
  their formal/long form i.e. `selected="selected"`
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** <span class="smallblock">LANGUAGE-COUNTRY CODE</span> accepts codes for
  <span class="parameter">$lang</span> according to the
  <a href="http://www.w3.org/TR/1998/REC-html40-19980424/struct/dirlang.html#adef-lang">HTML specification</a>. e.g.
  `"en"`, `"en-US"`, `"fr"`, `"zh-HK"`. The settings for these languages are defined in the
  `\Mpdf\LangToFont` class. Other codes for character sets (or codepages) are recognised - see
  <a href="{{ " /reference/mpdf-functions/construct.html " | prepend: site.baseurl }}">\Mpdf\Mpdf::__construct()</a>.
</div>

# Changelog

<table class="table">
<thead>
<tr>
  <th>Version</th>
  <th>Description</th>
</tr>
</thead>
<tbody>
<tr>
  <td>2.0</td>
  <td markdown="1">
  TD `border="1"` was supported mPDF &le; 1.3, but is not valid HTML and is now ignored
  </td>
</tr>
<tr>
  <td> </td>
  <td markdown="1">
  TABLE `align="..."` with a rotated table - changed to set the alignment ignoring the rotation
  i.e. `align="right"` sets the table to the right side of the page (looking as though it is bottom-aligned)
  </td>
</tr>
<tr>
  <td>2.3</td>
  <td><span class="parameter">$lang</span> was added.</td>
</tr>
<tr>
  <td>4.0</td>
  <td markdown="1">
  Default value of <span class="parameter">$lang</span> changed to `true`
  </td>
</tr>
<tr>
  <td>5.0</td>
  <td><span class="parameter">$dir</span> was added to HTML and BODY
</td>
</tr>
</tbody>
</table>

