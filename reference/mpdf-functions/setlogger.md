---
layout: page
title: setLogger
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setlogger.html
modification_time: 2017-09-25T18:36:37+02:00
---

setLogger – inject mPDF and its service classes with [logging implementing PSR-3][1]

# Description

`\Mpdf\Mpdf::setLogger(\Psr\Log\LoggerInterface $logger)`

# Parameters

<span class="parameter">$logger</span>

: An object instance implementing `\Psr\Log\LoggerInterface`.

# See Also

- <a href="{{ "/installation-setup/logging.html" | prepend: site.baseurl }}">Logging</a>

[1]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md
