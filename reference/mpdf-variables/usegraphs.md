---
layout: page
title: useGraphs
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/usegraphs.html
modification_time: 2015-08-05T12:02:37+00:00
---

(mPDF &ge; 2.4 && <7.0)

<div class="alert alert-danger" role="alert" markdown="1">
  **Note:** This feature was removed in mPDF 7.0
</div>

# Description

boolean **useGraphs**

When `true`, mPDF will parse table data and allow the use of
&lt;<a href="{{ "/reference/html-control-tags/jpgraph.html" | prepend: site.baseurl }}">jpgraph</a>&gt; to generate
graphs from the data. This should only be set to `true` when required to conserve memory
and processing time.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** Graphs require
  <a href="http://www.aditus.nu/jpgraph/" target="_blank">JPGraph</a> to be installed on the server.
  See <a href="{{ "/what-else-can-i-do/graphs.html" | prepend: site.baseurl }}">Graphs</a> for further information.
</div>

# Values

<span class="parameter">$useGraphs</span> = `true`\|`false`

**Values**

* `true`: Parse table data from the HTML, and allow the use
  of &lt;<a href="{{ "/reference/html-control-tags/jpgraph.html" | prepend: site.baseurl }}">jpgraph</a>&gt;
* `false`: Default

Default: `false`

# Examples

See `<jpgraph>` for example

# See Also

<a href="{{ "/reference/mpdf-functions/writehtml.html" | prepend: site.baseurl }}"></a>&lt;<a href="{{ "/reference/html-control-tags/jpgraph.html" | prepend: site.baseurl }}">jpgraph</a>&gt; - Write HTML code to document
<a href="{{ "/reference/mpdf-variables/charset-in.html" | prepend: site.baseurl }}">Graphs</a> - More about JPGraph and graphs

