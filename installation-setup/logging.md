---
layout: page
title: Logging
parent_title: Installation & setup
permalink: /installation-setup/logging.html
modification_time: 2017-09-25T17:34:39+01:00
---

class `Mpdf\Mpdf` implements `\Psr\Log\LoggerAwareInterface` and utilizes [PSR-3 standard for logging][1].

Different message types are separated by context, for different context types see `\Mpdf\Log\Context` class constants.

Currently, `Psr\Log\LogLevel::DEBUG` is used for informational messages such as memory and time consumption, and
`Psr\Log\LogLevel::WARNING` and `Psr\Log\LogLevel::ERROR` are used for more severe cases. In most cases, after logging
a warning or error leveled message, the script is ended with throwing a `\Mpdf\MpdfException`.

Any library implementing the interface can be used to leverage logging posibilities.
[`monolog/monolog`][2] is a commonly used example.

Following code will output all debugging messages into a file on disk.

```php
<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Mpdf\Mpdf;

// create a log channel
$logger = new Logger('name');
$logger->pushHandler(new StreamHandler('path/to/your.log', Logger::DEBUG));

$mpdf = new Mpdf\Mpdf();
$mpdf->setLogger($logger);

```

See [Monolog documentation][2] for more information on its usage.

For simple one-time logging an anonymous class can be used with PHP &ge;7.0

```php
<?php

$mpdf = new Mpdf\Mpdf();
$mpdf->setLogger(new class extends \Psr\Log\AbstractLogger {
    public function log($level, $message, array $context = [])
    {
        echo $level . ': ' . $message . "\n";
    }
});
```

[1]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md
[2]: https://github.com/Seldaek/monolog
