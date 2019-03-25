---
layout: page
title: curlAllowUnsafeSslRequests
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/curlallowunsafesslrequests.html
modification_time: 2017-09-30T11:03:32+00:00
---

(mPDF &ge; 7.0)

# Description

boolean **curlAllowUnsafeSslRequests** (default `false`)

If set to `true`, disable certificate validation for cURL requests

<div class="alert alert-warning" role="alert" markdown="1">
  **Unsafe!:** Do not use this flag in production.

  Correct way to handle this is to import trusted certificates to your application.
</div>
