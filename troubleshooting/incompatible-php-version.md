---
layout: page
title: Incompatible PHP version
parent_title: Troubleshooting
permalink: /troubleshooting/incompatible-php-version.html
modification_time: 2019-04-17T11:20:00+02:00
---

If your installation shows signs of PHP version incompatibility, such as

- "CSPRNG fucntinons not available" exception
- various fatal Parse errors in Mpdf codebase

make sure both your PHP version in console and in the server environment is supported. Checking `phpinfo();` often
does not suffice, try inserting `var_dump(PHP_VERSION); die;` right before your mPDF code to find _actual_ PHP version
used with mPDF.

## PHP version mismatches in cli

It is possible your server PHP version differs from your default cli version. Verify your cli PHP version with `php -v` and/or
use an absolute path to the PHP executable when calling composer.

## See also

- [https://github.com/mpdf/mpdf/issues/881](https://github.com/mpdf/mpdf/issues/881)
- [https://github.com/mpdf/mpdf/issues/625](https://github.com/mpdf/mpdf/issues/625)
