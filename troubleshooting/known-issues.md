---
layout: page
title: Known Issues
parent_title: Troubleshooting
permalink: /troubleshooting/known-issues.html
modification_time: 2016-06-25T07:30:29+00:00
---

## Script ends with no output

1.  Use a try/catch block for a `\Mpdf\MpdfException` to find out more:

    ```php
    <?php
    try {
        $mpdf = \Mpdf\Mpdf();
        $mpdf->WriteHTML('Hello World');
        // Other code
        $mpdf->Output();
    } catch (\Mpdf\MpdfException $e) { // Note: safer fully qualified exception name used for catch
        // Process the exception, log, print etc.
        echo $e->getMessage();
    }

    ```

2.  Enable error_reporting in your development environment or look into PHP error logs.
3.  Enable <a href="{{ "/reference/mpdf-variables/debug.html" | prepend: site.baseurl }}">debug mode</a> and/or
    <a href="{{ "/installation-setup/logging.html" | prepend: site.baseurl }}">Inject a Psr\Log\LoggerInterface</a>
    and see logs

## Crashing with no error message whatsoever

Ensure `mbregex` is enabled as part of mbstring. Apparently this is enabled by default when you enable mbstring in most
cases, however with cPanel and some other non-standard environments this might not be the case, so people have to
explicitly look for and enable `mbregex` (i.e. compile PHP with `--enable-mbregex`.

## Blank pages or some sections missing

If you pass a large chunk of code to `WriteHTML()` whether as CSS styles or the main HTML code, you may get a blank
page output, or that section of code missing.

The PHP function `preg_replace()` has a maximum string length it will parse (by default this is often about 100000
characters). Over this, PHP silently returns a null value. So long strings of code will be replaced by nothing!

You may be able to increase the value of
<a href="http://www.php.net/manual/en/pcre.configuration.php#ini.pcre.backtrack-limit">pcre.backtrack_limit</a>
at runtime if your system allows; alternatively, break your HTML into chunks and pass them one at a time to `WriteHTML()`

`pcre.backtrack_limit` is configurable from PHP &ge; 5.2.0

The default value was increased from 100,000 to 1,000,000 from PHP &ge; 5.3.7

```
ini_set("pcre.backtrack_limit", "1000000");
```

## Keep-with-table

If <a href="{{ "/reference/mpdf-variables/use-kwt.html" | prepend: site.baseurl }}">use_kwt</a> ("keep-with-table")
is set, and a heading element precedes a table inside a div with border/background set: it does not work e.g.

```html
<div style="border: 1px solid #000000; background-color: #EEEEFF;"><h2>Title</h2><table...

```

## Program dies with no error message when generating a large PDF file

A timeout due to Apache configuration `TimeOut` will cause the script to terminate with no error message, despite
increasing the PHP time limit etc.

See also <a href="{{ "/troubleshooting/blank-screen.html" | prepend: site.baseurl }}">Blank screen</a> for a bug when
using localhost.

# Problems fixed from mPDF &ge; 5.0

## Indic Fonts - ASCII characters

The Indic fonts (added mPDF 4.0) do not contain the basic ASCII characters: `a-z`,`A-Z`, and in some: `'` and `$`.

The font files have been edited to add these characters if you are using embedded font subsets (so all ASCII chars show),
but they will not be available if you are not using subsets. In this case you need to mark up HTML text with
`lang` or `font-family`.

## Adobe Reader 7 error reading file with embedded SVG image

With some SVG images, Adobe Reader 7 throws an error - "Problem with Type 3 font, form or pattern".

# See Also

- <a href="{{ "/about-mpdf/limitations.html" | prepend: site.baseurl }}">Limitations</a>
