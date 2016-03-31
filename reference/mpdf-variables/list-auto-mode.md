---
layout: page
title: list_auto_mode
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/list-auto-mode.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>(mPDF &gt;= 6.0)</p>
<h2>Description</h2>

<div class="alert alert-info" role="alert">void <b>list_auto_mode</b></div>
<p>Specify whether to use mPDF custom method of automatic indentation of lists, or standard browser-compatible. The custom mPDF method is ignored if <code>list-style-position: inside</code>, or image used for marker (or custom U+).</p>
<p>For more information, see <a href="{{ "/what-else-can-i-do/lists.html" | prepend: site.baseurl }}">Lists</a>.</p>
<h2>Values</h2>
<p class="manual_param_dt"><span class="parameter">list_auto_mode</span></p>
<p class="manual_param_dd"><b>Values</b>

browser - list display will conform to standard browser behaviour for automatic indentation of lists

mpdf - list display will be consistent with mPDF behaviour prior to v6.0

<span class="smallblock">DEFAULT</span>: browser</p>
<h2>Changelog</h2>
<table class="bpmTopic"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>6.0</td>
<td>Variable was added.</td>
</tr>
</tbody> </table>
<h2>See Also</h2>
<ul>
<li class="manual_boxlist"><a href="{{ "/what-else-can-i-do/lists.html" | prepend: site.baseurl }}">Lists </a></li>
</ul>
</div>
</div>

