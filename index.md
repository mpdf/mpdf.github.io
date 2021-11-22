---
layout: page
title: mPDF
permalink: /
---

mPDF is a PHP library which generates PDF files from UTF-8 encoded HTML.

It is based on <a href="http://www.fpdf.org/">FPDF</a> and <a href="http://html2fpdf.sourceforge.net/">HTML2FPDF</a>
with a number of enhancements.

The original author, Ian Back, wrote mPDF to output PDF files 'on-the-fly' from his website, handling different
languages. It is slower than the original scripts e.g. HTML2FPDF and produces larger files when using Unicode
fonts, but support for CSS styles etc. and has been much enhanced – see the <a href="/about-mpdf/features.html">features</a>.

## Support

Consider supporting development of mPDF with a donation of any value.

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/gold-rect-paypal-34px.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

## About CSS support and development state

mPDF as a whole is a quite dated software. Nowadays, better alternatives are available, albeit not written in PHP.

Use mPDF if you cannot use non-PHP approach to generate PDF files or if you want to leverage some of the benefits of mPDF
over browser approach – color handling, pre-print, barcodes support, headers and footers, page numbering, TOCs, etc.
But beware that a HTML/CSS template tailored for mPDF might be necessary.

If you are looking for state of the art CSS support, mirroring existing HTML pages to PDF, use headless Chrome.

mPDF will still be updated to enhance some internal capabilities and to support newer versions of PHP,
but better and/or newer CSS support will most likely not be implemented.

## Useful manual pages

- <a href="{{ "/about-mpdf/requirements-v7.html" | prepend: site.baseurl }}">Requirements</a>
- <a href="{{ "/installation-setup/installation-v7-x.html" | prepend: site.baseurl }}">Installation</a>
- <a href="{{ "/getting-started/creating-your-first-file.html" | prepend: site.baseurl }}">Creating your first document</a>
- <a href="{{ "/configuration/configuration-v7-x.html" | prepend: site.baseurl }}">Configuration</a>

- <a href="{{ "/about-mpdf/features.html" | prepend: site.baseurl }}">Main features</a>
- <a href="{{ "/about-mpdf/limitations.html" | prepend: site.baseurl }}">Known limitations</a>
- <a href="{{ "/about-mpdf/credits.html" | prepend: site.baseurl }}">Credits</a>
- <a href="{{ "/about-mpdf/license.html" | prepend: site.baseurl }}">Licence</a>


## Development

- <a href="https://github.com/mpdf/mpdf">GitHub repository of mPDF library</a>
- <a href="https://github.com/mpdf/mpdf.github.io">GitHub repository of the documentation of the mPDF library</a>

## Troubleshooting

Please use [https://stackoverflow.com/questions/tagged/mpdf](https://stackoverflow.com/questions/tagged/mpdf) for
*all* your general questions or troubleshooting!

Contributions are welcome :-) For contributing with a bug report, feature request or pull request, please see
the [guideline at GitHub](https://github.com/mpdf/mpdf/blob/development/.github/CONTRIBUTING.md). Please provide a nice
small example case or unit test. That will be really helpful for everybody. Thanks!

## Acronyms

These are the most used acronyms throughout this manual.

- <acronym>CJK</acronym> - Chinese-Japanese-Korean languages
- <acronym>HTML</acronym> - Hypertext Markup Language (code used to display Internet pages)
- <acronym>IE</acronym> - Internet Explorer (Microsoft)
- <acronym>LTR</acronym> - Left-to-Right document, used for most langauges
- <acronym>PDF</acronym> - Portable Document Format
- <acronym>PHP </acronym> - PHP: Hypertext Preprocessor
- <acronym>RTL</acronym> - Right-to-Left document, used for Hebrew and Arabic languages
- <acronym>ToC</acronym> - Table of Contents
