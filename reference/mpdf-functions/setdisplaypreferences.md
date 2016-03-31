---
layout: page
title: SetDisplayPreferences()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/setdisplaypreferences.html
modification_time: 2015-08-05T12:01:00+00:00
---

(mPDF &gt;= 3.0)

SetDisplayPreferences – Defines the way the document shall be presented on the screen

# Description

void <b>SetDisplayPreferences</b> ( string <span class="parameter">$prefs</span> )

Specify the way the document shall be presented on the screen when the PDF file is opened in Adobe Reader. When the user opens the finished file in Adobe Reader, these values will determine the initial appearance and layout.

# Parameters

<span class="parameter">prefs</span>

This parameter takes a string containing any one or more of the possible values separated by any characters (e.g. comma, forward slash or space). All the options start as <span class="smallblock">FALSE</span>, and can only be set <span class="smallblock">TRUE</span> by this command. Each setting is added to those previously set.

<b>Values</b> (case-sensitive)

FullScreen: Full-screen mode, with no menu bar, window controls, or any other window visible

HideMenubar: whether to hide the conforming reader’s menu bar when the document is active

HideToolbar: whether to hide the conforming reader’s tool bars when the document is active

HideWindowUI: whether to hide user interface elements in the document’s window (such as scroll bars and navigation controls), leaving only the document’s contents displayed

DisplayDocTitle: whether the window’s title bar should display the document title taken from the Title entry of the document information dictionary. If false, the title bar will instead display the name of the PDF file containing the document

CenterWindow: whether to position the document’s window in the center of the screen

FitWindow: whether to resize the document’s window to fit the size of the first displayed page

NoPrintScaling: overrides the user's default setting to scale the printing size (mPDF &gt;= 5.1)

# Examples

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<?php

$mpdf=new mPDF();

$mpdf->SetDisplayPreferences('/HideMenubar/HideToolbar/DisplayDocTitle');

$mpdf->WriteHTML('
Hallo World
');

$mpdf->Output('filename.pdf');

?>
{% endhighlight %}

# See Also

<ul>
<li class="manual_boxlist"><a href="{{ "/reference/mpdf-functions/setdisplaymode.html" | prepend: site.baseurl }}">SetDisplayMode()</a> - Specify the initial Display Mode when the PDF file is opened in Adobe Reader</li>
</ul>

