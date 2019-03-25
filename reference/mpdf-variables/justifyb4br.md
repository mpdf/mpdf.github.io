---
layout: page
title: justifyB4br
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/justifyb4br.html
modification_time: 2015-08-05T12:02:05+00:00
---

(mPDF &ge; 4.4)

justifyB4br – Specify whether to justify line of text before a linebreak

# Description

void **justifyB4br**

Specify whether to justify line of text before a linebreak. This only makes a difference when the text-alignment of the
current block is set as `text-align: justify`.

In a justified text block, a `<br>` linebreak will not cause the preceding line to be justified. This behaviour matches
most browsers. However, to allow optional compliance with the behaviour of MS Word, which also justifies text before
a `<br>` you can set this variable to `true`.

# Values

<span class="parameter">$justifyB4br</span> =  `true`\|`false`

**Values**

* `true`: justify line of text beofre a linebreak
* `false`: do not justify line of text before a linebreak

Default: `false`

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
  <td>4.4</td>
  <td>Variable was added.</td>
</tr>
</tbody>
</table>
