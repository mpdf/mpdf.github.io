---
layout: page
title: Introduction
parent_title: CLI
permalink: /cli/introduction.html
modification_time: 2016-08-03T12:00:00+00:00
---

Mpdf makes use of [Symfony's Console component](http://symfony.com/doc/current/components/console.html) for its CLI commands.

The console application can be run by executing `php bin/mpdf` from the root directory of Mpdf and 
will show you a list of available commands, and their descriptions.

If you want additional information about a specific command you should pass the `-h` option: `php bin/mpdf group:task -h`. 
The `group:task` portion of the code refers to one of Mpdf's registered CLI commands.

# Developers

If you want to create your own CLI commands you should create the appropriate class in `src/Console/Command/`, required 
unit tests in `tests/Mpdf/Console/Command/` and register your new command in `bin/mpdf`.