---
layout: page
title: CircularText()
parent_title: mPDF functions
permalink: /reference/mpdf-functions/circulartext.html
modification_time: 2015-08-05T12:00:43+00:00
---

mPDF >= 5.4

# Description

function **CircularText**(
<span class="parameter">$x</span>, <span class="parameter">$y</span>, <span class="parameter">$r</span>, 
<span class="parameter">$text</span>, 
<span class="parameter">$align</span>='top|bottom', 
<span class="parameter">$fontfamily</span>='', 
<span class="parameter">$fontsize</span>=0, 
<span class="parameter">$fontstyle</span>='', 
<span class="parameter">$kerning</span>=120, 
<span class="parameter">$fontwidth</span>=100, 
<span class="parameter">$divider</span>=''
)


## Parameters

<span class="parameter">$x</span>
: Abscissa of center

<span class="parameter">$y</span>
: Ordinate of center

<span class="parameter">$r</span>
: Radius of circle

<span class="parameter">$text</span>
: Text to be printed

<span class="parameter">$align</span>
: Text alignment: top or bottom. 
   
  Default value: top
   
<span class="parameter">$fontfamily</span>
: 

<span class="parameter">$fontsize</span>
: 

<span class="parameter">$fontstyle</span>
: 

<span class="parameter">$kerning</span>
: (Fixed) spacing between letters in percentage. 

  Default value: 120. Zero is not allowed.
  
  Uses automatic Kerning between letters if <a href="{{ "/reference/mpdf-variables/usekerning.html" | prepend: site.baseurl }}">useKerning</a> == true.

<span class="parameter">$fontwidth</span>
: Width of letters in percentage. 

  Default value: 100. Zero is not allowed
   
<span class="parameter">$divider</span>
: Optional character string to divide top and bottom text




# See Also
* For more details see &lt;<a href="{{ "/reference/html-control-tags/textcircle.html" | prepend: site.baseurl }}">textcircle</a>&gt; 

