---
layout: page
title: Images
parent_title: What Else Can I Do
permalink: /what-else-can-i-do/images.html
modification_time: 2015-08-05T12:00:04+00:00
---



<p>Images are supported by mPDF: GIF, PNG, JPG, WMF, SVG, BMP and generated images from <acronym title="PHP: Hypertext Preprocessor">PHP </acronym> scripts.</p>
<p>Transparent GIF images are supported, and so are interlaced and transparent PNG files, including transparency using alpha channel.</p>
<table class="table"> <tbody>
<tr>
<td>JPG image</td>
<td><img src="files/images/tiger.jpg" alt="tiger.jpg" width="100" /></td>
</tr>
<tr>
<td>GIF with transparency</td>
<td><img src="files/images/tiger8trns.gif" alt="tiger8trns.gif" width="100" /></td>
</tr>
<tr>
<td>PNG with transparency</td>
<td><img src="files/images/tiger8trns.png" alt="tiger8trns.png" width="100" /></td>
</tr>
<tr>
<td>PNG with alpha channel</td>
<td><img src="files/images/alpha.png" alt="alpha.png" width="180" /></td>
</tr>
<tr>
<td>WMF image

(will only show in IE or <a href="index76c0.pdf?op=pdf&amp;op_target=print&amp;id=295&amp;media=pdf&amp;pdffmt=1&amp;dg=1">PDF</a>)</td>
<td><img src="files/images/tiger.wmf" alt="tiger.wmf" /></td>
</tr>
<tr>
<td>
<p>SVG image

(will only show in some browsers</p>
<p>e.g. Firefox which support SVG, and <a href="index76c0.pdf?op=pdf&amp;op_target=print&amp;id=295&amp;media=pdf&amp;pdffmt=1&amp;dg=1">PDF</a>)</p>
</td>
<td><img src="files/images/tiger.svg" alt="tiger.svg" width="100" /></td>
</tr>
</tbody> </table>
<p class="manual_block"><b>Debugging Errors:</b> If you are having trouble with images not displaying correctly, set the variable <span class="parameter">$mpdf-&gt;showImageErrors</span> = true.</p>
<p>Images are handled in mPDF as in-line elements.</p>
<p>Unlike the HTML specification, the&nbsp;width and height attributes of IMG will additionally take different dimensions e.g. mm, pt etc.&nbsp;</p>

{% highlight php %}
<img src="image.jpg" width="90" /> // 90 pixels, just like HTML
{% endhighlight %}

{% highlight php %}
<img src="image.jpg" width="90mm" />  // non-standard support for dimensions
{% endhighlight %}

{% highlight php %}
<img src="image.jpg" style="width:90mm;" />  // Can also use CSS
{% endhighlight %}

<p>Images for which the size is not defined&nbsp;are output at a default dpi set in the <span class="filename">config.php</span> file:</p>

{% highlight php %}
$this->img_dpi = 96;
{% endhighlight %}

<p>In addition, many CSS style properties are supported including <span class="parameter">vertical-align</span>, as well as some custom attributes such as <span class="parameter">opacity</span> and <span class="parameter">rotate</span>. (See <a href="{{ "/css-stylesheets/supported-css.html" | prepend: site.baseurl }}">Supported CSS</a> and <a href="{{ "/html-support/html-attributes.html" | prepend: site.baseurl }}">HTML attributes</a>)</p>
<p>Images can be used in:</p>
<ul>
<li>In-line images, including in HTML headers &amp; footers</li>
<li>Watermarks</li>
<li>CSS background-image</li>
</ul>
<h3>Size constraint</h3>
<p>When writing HTML, image size is automatically constrained to current margins and page position. An extra parameter added to end of the Image() function allows you to override this:</p>

{% highlight php %}
<?php

$mpdf->Image('files/images/frontcover.jpg',0,0,210,297,'jpg','',true, false);

// the last "false" allows a full page picture
{% endhighlight %}

<p>This is useful for e.g. a cover page for your document.</p>
<p>This can be achieved using HTML &amp; CSS like this:</p>

{% highlight php %}
<div style="position: absolute; left:0; right: 0; top: 0; bottom: 0;">

<img src="files/images/frontcover.jpg" style="width: 210mm; height: 297mm; margin: 0;" />

</div>
{% endhighlight %}

<h3>Float and Text wrapping</h3>
<p>mPDF partially supports the CSS style <code>float</code> with IMG elements. Text will wrap around these images, with certain limitations:</p>
<ul>
<li>only 1 float:right and 1 float:left image are allowed at a time i.e. you cannot overlap 2 right or 2 left</li>
<li>the containing HTML element is extended at the bottom if necessary to enclose the last image (unlike your browser)</li>
<li>the float is ignored if the image is too wide, inside a table, columns are on, or div page-break-inside: avoid is set</li>
<li>disabled when columns are being used</li>
</ul>
<p>If ignored, the image is output as a normal in-line element.</p>
<h3>Performance</h3>
<p>JPG images are quickest and most efficient.</p>
<p>PNG images with no alpha channel and not interlaced are next best.</p>
<p>GIF images are extremely slow if you do not have the appropriate GD library installed (above 2.0.8).</p>
<p>GIF images with GD library installed are quite fast.</p>
<p>PNG images which are interlaced or have alpha channel transparency, and GIF images use the GD library if it is installed.</p>
<p>Any process that requires the GD library uses a large amount of memory - to create a GD image in memory can use up to 10 x the file size (e.g. a 690K GIF file read into imagecreatefromstring() used about 5MB of PHP memory).</p>
<h3>Dynamically generated Images</h3>
<p>You can define a script which generates an image just as you can in HTML:</p>

{% highlight php %}
<img src="files/my_file_generating_script.php?color=red" />
{% endhighlight %}

<h3>Embedded Image data</h3>
<p>Embedded image data can be used either in &lt;img&gt; elements or in CSS:background. gif, png and jpeg are supported.</p>

{% highlight php %}
[HTML]

<img src="data:image/gif;base64,...." />

[CSS stylesheet]

div { background: url(data:image/gif;base64,....) no-repeat 4px center; }
{% endhighlight %}

<h3>Image data as a Variable</h3>
<p>A PHP variable containing image data can be passed directly to mPDF. You need to allocate the data to a class variable

(you can make any name up) e.g.</p>

{% highlight php %}
<?php

$mpdf->myvariable = file_get_contents('alpha.png');
{% endhighlight %}

<p>The image can then be referred to by use of "var:varname" instead of a file name, either in src="" or direct to Image() function e.g.</p>

{% highlight php %}
<?php

$html = '<img src="var:myvariable" />';

$mpdf->WriteHTML($html);
{% endhighlight %}

{% highlight php %}
<?php

$mpdf->Image('var: myvariable',0,0);
{% endhighlight %}

<h2>SVG images</h2>
<p>mPDF partially supports SVG images, including as embedded HTML e.g.:</p>

{% highlight php %}
<p>This is an embedded SVG image:</p>

<svg>.....</svg>
{% endhighlight %}

<p>All units with no dimension are taken as pixels.</p>
<h3>Size of SVG image</h3>
<p>The viewBox attribute of the &lt;svg&gt; element is used (if present) to determine the intrinsic size of the image.</p>
<p>If viewBox is not present, a width and/or height be specified e.g. width="400" height="200"</p>
<p>NB preserveAspectRatio is not supported.</p>
<p>If none of these are present, the intrinsic size will be set as the width of containing block (height = width).</p>
<h3>Partially supported</h3>
<ul>
<li>embedded images (but not embedded SVG/WMF [vector] images)</li>
<li>tspan, tref</li>
<li>&lt;use ../&gt;</li>
<li>gradient on text (fill)</li>
<li>&lt;clipPath&gt;</li>
<li>embedded &lt;style&gt; elements*</li>
<li>automatic font selection for text*</li>
</ul>
<p>* As from mPDF 6.0 there is limited support for CSS classes and for automatic font selection (see the defined constants at the top of classes/svg.php file).</p>
<h3>Not supported</h3>
<ul>
<li>filters</li>
<li>&lt;marker&gt;</li>
<li>DOM</li>
<li>&lt;pattern&gt;</li>
<li>textlength, lengthadjust, toap or textPath</li>
<li>gradient on stroke</li>
</ul>
<p>Note: SVG images can be embedded within the HTML code. They may be a useful way to deal with some presentation issues not supported by HTML/CSS e.g. Text used with a transformation, or text used as a clipPath e.g.</p>

{% highlight php %}
<body>

<div>

...

<svg width="100%" height="100%" viewBox="0 0 480 360">

   <text x="100" y="-100" transform="rotate(60)" font-size="35">ROTATE</text>

   <rect id="test-frame" x="1" y="1" width="478" height="358" fill="none" stroke="#000000"/>

</svg>

...

<svg width="100%" height="100%" viewBox="0 0 480 360">

   <defs>

         <clipPath id="sample" clipPathUnits="userSpaceOnUse">

            <text x="45" y="270" font-size="100" font-family="Impact">Clip Test</text>

         </clipPath>

   </defs>

   <image xlink:href="bluesquidj.png" preserveAspectRatio="none" x="20" y="170" width="410" height="160" clip-path="url(#sample)"/>

   <rect id="test-frame" x="1" y="1" width="478" height="358" fill="none" stroke="#000000"/>

</svg>

...

</div>

</body>
{% endhighlight %}

<p>&nbsp;</p>
<ul> </li>
</ul>
