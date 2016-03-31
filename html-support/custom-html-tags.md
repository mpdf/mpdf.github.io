---
layout: page
title: Custom HTML Tags
parent_title: HTML support
permalink: /html-support/custom-html-tags.html
---

<div id="bpmbook" class="bpmbook" style="direction:ltr;">
<div class="topic_user_field">
<div id="U0">
<p>mPDF uses a number of custom HTML tags (see <a href="{{ "/reference/html-control-tags/overview.html" | prepend: site.baseurl }}">HTML Control Tags - Overview</a>).</p>
<p>In addition to those, the custom tags &lt;ttz&gt; &lt;tts&gt; and &lt;tta&gt; are reserved for use internally within the mPDF program to denote the core symbol, dingbat and arial characters.</p>
<h2>Invalid HTML?

</h2>
<p>(mPDF &gt;= 2.2)</p>
<p>If you want to hide mPDF custom tags from a browser, enclose any mPDF code within:</p>

{% highlight php %}
<!--mpdf  ..  anything you want to write ...  mpdf-->
{% endhighlight %}

<p>As these are the standard comment tags recognised by every browser, this will create valid HTML which should output correctly in any circumstances. mPDF will strip away the <span class="parameter">&lt;!--mpdf</span> tag and any following spaces, and the <span class="parameter">mpdf--&gt;</span> tag and any preceeding spaces, and process all enclosed code.</p>

<div class="alert alert-info" role="alert"><b>Note:</b> Almost all mPDF custom tags are self closing e.g. &lt;pagebreak /&gt;. If you do not use self-closing tags, the HTML may not show correctly in a browser unless you hide the tags in special comments as above.</div>
<p>Most browsers will ignore (self-closing) tags that are not recognised, but &lt;htmlpageheader&gt; and &lt;htmlpagefooter&gt; are different, as they contain innerHTML e.g.</p>

{% highlight php %}
<htmlpageheader name="phname">HTML code in here</htmlpageheader>
{% endhighlight %}

<p>The enclosed innerHTML will be output by a browser, so you need to hide it; either use the special comment tags as above, or an alternative is to use CSS, e.g. add to your stylesheet</p>

{% highlight php %}
htmlpageheader { display : none; }

htmlpagefooter { display : none; }
{% endhighlight %}

<p>Yet another way is to use in-line CSS:</p>

{% highlight php %}
<htmlpageheader name="phname" style="display: none;">HTML code in here</htmlpageheader>
{% endhighlight %}

</div>
</div>

