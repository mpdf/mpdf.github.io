---
layout: page
title: SetDisplayPreferences()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setdisplaypreferences.html
modification_time: 2015-08-05T12:01:00+00:00
---

(mPDF &ge; 3.0)

SetDisplayPreferences – Defines the way the document shall be presented on the screen

# Description

void **SetDisplayPreferences** ( string <span class="parameter">$prefs</span> )

Specify the way the document shall be presented on the screen when the PDF file is opened in Adobe Reader.
When the user opens the finished file in Adobe Reader, these values will determine the initial appearance and layout.

# Parameters

<span class="parameter">$prefs</span>

: This parameter takes a string containing any one or more of the possible values separated by any characters
  (e.g. comma, forward slash or space).

  All the options start as `false`, and can only be set `true` by this command. Each setting is added to those
  previously set.

  **Values** (case-sensitive)

  * `FullScreen`
    : Full-screen mode, with no menu bar, window controls, or any other window visible
  * `HideMenubar`
    : whether to hide the conforming reader’s menu bar when the document is active
  * `HideToolbar`
    : whether to hide the conforming reader’s tool bars when the document is active
  * `HideWindowUI`
    : whether to hide user interface elements in the document’s window (such as scroll bars
    and navigation controls), leaving only the document’s contents displayed
  * `DisplayDocTitle`
    : whether the window’s title bar should display the document title taken from the Title entry
    of the document information dictionary. If false, the title bar will instead display the name of the PDF file containing the document
  * `CenterWindow`
    : whether to position the document’s window in the center of the screen
  * `FitWindow`
    : whether to resize the document’s window to fit the size of the first displayed page
  * `NoPrintScaling`
    : overrides the user's default setting to scale the printing size (mPDF &ge; 5.1)

# Examples

Example #1

```php
<?php
$mpdf = new \Mpdf\Mpdf();

$mpdf->SetDisplayPreferences('/HideMenubar/HideToolbar/DisplayDocTitle');

$mpdf->WriteHTML('
Hello World
');
$mpdf->Output('filename.pdf');

```

# See Also

 * <a href="{{ "/reference/mpdf-functions/setdisplaymode.html" | prepend: site.baseurl }}">SetDisplayMode()</a> - Specify the initial Display Mode when the PDF file is opened in Adobe Reader

