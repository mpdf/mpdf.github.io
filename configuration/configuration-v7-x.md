---
layout: page
title: Configuration v7.x
parent_title: Configuration
permalink: /configuration/configuration-v7-x.html
modification_time: 2015-08-05T11:59:39+00:00
---

(mPDF >= 7.0)

Configuration of mPDF is handled via `$config` array parameter of <code>
<a href="{{ "/reference/mpdf-functions/__construct.html" | prepend: site.baseurl }}">\Mpdf\Mpdf::__construct()</a></code> method.

All <a href="{{ "/configuration/configuration-variables.html" | prepend: site.baseurl }}">configuration variables</a>
can be passed to the parameter.

Default values of configuration keys are specified in `ConfigVariables` and `FontConfigVariables` classes.
