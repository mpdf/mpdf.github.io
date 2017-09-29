---
layout: page
title: Page numbers & Date
parent_title: Headers & Footers
permalink: /headers-footers/page-numbers-date.html
modification_time: 2015-08-05T11:59:52+00:00
---

In any page header or footer, `'{PAGENO}'` or `'{DATE j-m-Y}'` can be used - which will be replaced by the page number or 
current date. `j-m-Y` can be replaced by any of the valid formats used in the php 
<a href="http://www.php.net/manual/en/function.date.php" target="_blank">date()</a> function.

The page number is the calculated number, taking regard of any resetting of numbering during the document.

You can also use the GLOBAL replacement aliases `'{nb}'` and `'{nbpg}'` (see 
<a href="{{ "/what-else-can-i-do/replaceable-aliases.html" | prepend: site.baseurl }}">Replaceable Aliases</a>).
