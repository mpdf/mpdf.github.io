---
layout: page
title: mbstring
parent_title: Codepages & Glyphs
permalink: /reference/codepages-glyphs/mbstring.html
modification_time: 2015-08-05T12:03:01+00:00
---

Currently the following character encodings are supported by the `mbstring` module. Any of those Character encodings can 
be specified in the encoding parameter of `mbstring` functions.

* UCS-4, UCS-4BE, UCS-4LE
* UCS-2, UCS-2BE, UCS-2LE
* UTF-32, UTF-32BE, UTF-32LE
* UTF-16, UTF-16BE, UTF-16LE
* UTF-7, UTF7-IMAP, 
* UTF-8
* ASCII
* EUC-JP
* SJIS
* eucJP-win, SJIS-win
* ISO-2022-JP
* JIS
* ISO-8859-1, ISO-8859-2, ISO-8859-3, ISO-8859-4, ISO-8859-5, ISO-8859-6, ISO-8859-7, ISO-8859-8, ISO-8859-9, ISO-8859-10, ISO-8859-13, ISO-8859-14, ISO-8859-15
* byte2be, byte2le
* byte4be, byte4le
* BASE64
* HTML-ENTITIES
* 7bit
* 8bit
* EUC-CN
* CP936
* HZ
* EUC-TW
* CP950
* BIG-5
* EUC-KR
* UHC (CP949)
* ISO-2022-KR
* Windows-1251 (CP1251)
* Windows-1252 (CP1252)
* CP866 (IBM866)
* KOI8-R

For the PHP module to be enabled, PHP must have been compiled with `--enable-mbstring`. You can check your system setup 
with PHP's <a href="http://php.net/manual/en/function.phpinfo.php">phpinfo()</a>.

See
 
* <a href="http://uk.php.net/manual/en/ref.mbstring.php">http://uk.php.net/manual/en/ref.mbstring.php</a>

