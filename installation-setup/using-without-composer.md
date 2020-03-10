---
layout: page
title: Using mPDF without Composer
parent_title: Installation & Setup
permalink: /installation-setup/using-without-composer.html
modification_time: 2020-03-10T12:33:00+01:00
---

Using mPDF without Composer is discouraged and not officially supported.

# Just use Composer

Generally, there is no real reason why you couldn't use Composer. Install Composer locally, use it to install
mPDF with its dependencies and use the result further along with generated Composer autoloading.

# I do not want to use Composer anyway

Prepare to do a significant amount of work that Composer would have done for you.

## 1) Download the library and all dependencies

You can find library dependencies in the root [composer.json file](https://github.com/mpdf/mpdf/blob/master/composer.json)

## 2) Ensure all needed classes are loaded

This means both mPDF classes and dependencies classes.

You can do this manually (reload, find the file with missing class, add require call, repeat) or you can use
[an autoloading library](https://packagist.org/search/?q=autoload) of your choice.

Further usage is then the <a href="{{ "/getting-started/creating-your-first-file.html" | prepend: site.baseurl }}">same as when using Composer</a>,
just require your autoloading script instead of Composer `autoload.php`.
