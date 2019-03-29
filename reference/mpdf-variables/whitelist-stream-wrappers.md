---
layout: page
title: whitelistStreamWrappers
parent_title: mPDF Variables
permalink: /reference/mpdf-variables/whitelist-stream-wrappers.html
modification_time: 2019-03-29T01:30:00+00:00
---

(mPDF >= 8.1)

whitelistStreamWrappers – Specify whitelisted PHP streams to be used for images

# Description

void **whitelistStreamWrappers**

Due to security, the default streams processed for images include `http`, `https`, and `file`. This property allows you to add additional custom streams (like `s3`) if required.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** the stream `phar` is disabled for security reasons. See https://github.com/mpdf/mpdf/issues/949 for further information.
</div>

# Values

<span class="parameter">$whitelistStreamWrappers</span>

**Values**

* <span class="smallblock">ARRAY </span>: a list of supported streams

Default: `['http', 'https', 'file']`

# Changelog

<table class="table">
<thead>
<tr>
  <th>Version</th>
  <th>Description</th>
</tr>
</thead>
<tbody>
<tr>
  <td>8.1</td>
  <td>Variable was added.</td>
</tr>
</tbody>
</table>

