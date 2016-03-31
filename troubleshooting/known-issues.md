---
layout: page
title: Known Issues
parent_title: Troubleshooting
permalink: /troubleshooting/known-issues.html
modification_time: 2015-08-05T12:00:29+00:00
---



<h3>Crashing with no error message</h3>
<p>Ensure mbregex is enabled as part of mb_string. <span>Apparently this is enabled by default when you enable mbstring in most cases, however with cPanel and some other non-standard environments this might not be the case, so people have to explicitly look for and enable mbregex (i.e. compile PHP with <span>`--enable-mbregex`</span>.</span></p>
<h3>Blank pages or some sections missing</h3>
<p>If you pass a large chunk of code to WriteHTML() whether as CSS styles or the main HTML code, you may get a blank page output, or that section of code missing.</p>
<p>The PHP function preg_replace() has a maximum string length it will parse (by default this is often about 100000 characters). Over this, PHP silently returns a null value. So long strings of code will be replaced by nothing!</p>
<p>You may be able to increase the value of <a href="http://www.php.net/manual/en/pcre.configuration.php#ini.pcre.backtrack-limit">pcre.backtrack_limit</a> at runtime if your system allows; alternatively, break your HTML into chunks and pass them one at a time to WriteHTML()</p>
<p>pcre.backtrack_limit is configurable from PHP &gt;= 5.2.0</p>
<p>The default value was increased from 100,000 to 1,000,000 from PHP &gt;= 5.3.7</p>

{% highlight php %}
ini_set("pcre.backtrack_limit","1000000");
{% endhighlight %}

<h3>Keep-with-table</h3>
<p>If <a href="{{ "/reference/mpdf-variables/use-kwt.html" | prepend: site.baseurl }}">use_kwt</a> ("keep-with-table") is set, and a heading element precedes a table inside a div with border/background set: it doesn't work e.g.</p>

{% highlight php %}
<div style="border: 1px solid #000000; background-color: #EEEEFF;"><h2>Title</h2><table...
{% endhighlight %}

<h3>Program dies with no error message when generating a large PDF file</h3>
<p>A timeout due to Apache configuration 'TimeOut' will cause the script to terminate with no error message, despite increasing the PHP time limit etc.</p>
<p>See also <a href="{{ "/troubleshooting/blank-screen.html" | prepend: site.baseurl }}">Blank screen</a> for a bug when using localhost</p>
<h2>Problems fixed from mPDF &gt;= 5.0</h2>
<h3>Indic Fonts - ASCII characters</h3>
<p>The Indic fonts (added mPDF 4.0) do not contain the basic ASCII characters: a-z, A-Z, and in some: ` and $</p>
<p>The font files have been edited to add these characters if you are using embedded font subsets (so all ASCII chars show), but they will not be available if you are not using subsets. In this case you need to mark up HTML text with <span class="parameter">lang</span> or <span class="parameter">font-family</span>.</p>
<h3>Adobe Reader 7 error reading file with embedded SVG image</h3>
<p>With some SVG images, Adobe Reader 7 throws an error - "Problem with Type 3 font, form or pattern".</p>
<h2>See Also</h2>
<ul>
<li><a href="{{ "/about-mpdf/limitations.html" | prepend: site.baseurl }}">Limitations</a></li>
</ul>
