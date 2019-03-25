---
layout: page
title: list_indent_first_level
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/list-indent-first-level.html
modification_time: 2015-08-05T12:02:09+00:00
---

# Description

void **list_indent_first_level**

Specify whether to indent the first level of a list. From mPDF &ge; 6.0, this will only apply if you are using the `"mpdf"` list mode.

For more information, see <a href="{{ "/what-else-can-i-do/lists.html" | prepend: site.baseurl }}">Lists</a>.

# Values

<span class="parameter">$list_indent_first_level </span&ge; `1`\|`0`

**Values**

* `1`: Indent the first level of a list (when using the `"mpdf"` list mode)
* `0`: No indentation.

Default: `1`

# See Also

* <a href="{{ "/what-else-can-i-do/lists.html" | prepend: site.baseurl }}">Lists </a>
* <a href="{{ "/reference/mpdf-variables/list-auto-mode.html" | prepend: site.baseurl }}">list_auto_mode</a>

