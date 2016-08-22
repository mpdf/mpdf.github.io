---
layout: page
title: Configuration v7.x
parent_title: Configuration
permalink: /configuration/configuration-v7-x.html
modification_time: 2015-08-05T11:59:39+00:00
---

(mPDF >= 7.0)

<div class="alert alert-info" role="alert">
    <strong>Note:</strong> This describes configuration of mPDF >7.0. Please refer to 
    <a href="{{ "/configuration/configuration-files-v6-x.html" | prepend: site.baseurl }}">6.x</a> or
    <a href="{{ "/configuration/configuration-files-v5-x.html" | prepend: site.baseurl }}">5.x</a> for
    configuration methods if you are using lesser version.
</div>

# Constructor configuration

Configuration of mPDF is handled via `$config` array parameter of <code>
<a href="{{ "/reference/mpdf-functions/__construct.html" | prepend: site.baseurl }}">\Mpdf\Mpdf::__construct()</a></code> method.

All <a href="{{ "reference/mpdf-variables/overview.html" | prepend: site.baseurl }}">configuration variables</a>
can be passed to the parameter.

Default values an other configurable keys are specified in `ConfigVariables` and `FontConfigVariables` classes.

Also see variables ported from mPDF <7.0 constructor (linked above).

# Runtime configuration

All variables can be changed at runtime using Mpdf public properties as defined in `ConfigVariables` and 
`FontConfigVariables` classes:

## Example

```
$mpdf->pdf_version = '1.5';
```

# Example PDFs

Mpdf includes a [large number of working example PHP files](https://github.com/mpdf/mpdf-examples) to show off Mpdf's features.
When you install Mpdf with `composer install` these files are included by default (the package is included in the `require-dev` section of `composer.json`).
 
To view the PDFs, point your browser to the `/vendor/mpdf/examples/` directory. For example:

`http://host.com/vendor/mpdf/examples/example01_basic.php`
