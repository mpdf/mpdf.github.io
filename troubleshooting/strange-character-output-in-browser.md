---
layout: page
title: PDF is being output to browser as strange character string
parent_title: Troubleshooting
permalink: /troubleshooting/strange-character-output-in-browser.html
modification_time: 2017-09-26T11:00:34+00:00
---

On occasions, mPDF can output the PDF to the browser as a string of weird characters, starting with `%PDF-`

```
%PDF-1.4 %���� 3 0 obj <> /Contents 4 0 R>> endobj 4 0 obj <> stream x��[�o�����j#���d���ٙ��)dYvlĎ�]��ئ-��^�(EpE�,Ăd!J
```

This is a binary PDF representation and it means `Content-type: application/pdf` header is not sent correctly or it is
overriden by your code or setup. Most likely by `text/plain` or `text/html`.

Try to figure out these:

- Are you resetting `Content-type` header in PHP code somewhere after calling the mPDF `Output` method?
- Is your server forcing a different `Content-type` somewhere in your setup?
- Does your browser support displaying `application/pdf` Content-type directly?
