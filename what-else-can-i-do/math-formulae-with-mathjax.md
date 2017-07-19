---
layout: page
title: Math Formulae with MathJax
parent_title: What Else Can I Do
permalink: /what-else-can-i-do/math-formulae-with-mathjax.html
modification_time: 2015-08-05T12:00:22+00:00
---

mPDF does not support MathML or LaTeX math formulae directly. However you can include math in a PDF document making use
of <a href="http://www.mathjax.org/">MathJax</a> following the steps below.

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** See alternative method to this in
  <a href="{{ "/what-else-can-i-do/math-with-mathjax-2.html" | prepend: site.baseurl }}">Math with MathJax 2</a>
</div>

<div class="alert alert-info" role="alert" markdown="1">
  **Note:** This version has an updated script.
</div>

MathJax is a Javascript program which renders math equations in a browser from either MathML or LaTeX sources. You need
to use MathJax first to render the equation, and MathJax needs to be configured to offer SVG as an output option. To
demonstrate, start with a sample page such as
<a href="http://www.mathjax.org/demos/tex-samples/">http://www.mathjax.org/demos/tex-samples/ </a>

1. Open the HTML page in your browser (allowing MathJax to render the equations).

2. Right click over one of the equations and select: Math Settings >> Math Renderer >> SVG (This re-renders
   all the equations in the page in SVG format),

3. Save the page including the javascript-processed code. In Firefox, select File >> Save Page As... (This doesn't
   work in IE which only saves the original HTML code prior to processing).

4. Edit the file to make any necessary changes e.g. CSS stylesheets.

5. Run the following script to produce your PDF document (assumes you saved the file as `TeXSample.htm`). This adjusts the
   SVG code produced to allow mPDF to display it:

   ```php
   <?php
   $mpdf = new \Mpdf\Mpdf('');
  
   $html = file_get_contents('TeXSample.htm');
   preg_match('/<svg[^>]*>\s*(<defs.*?>.*?<\/defs>)\s*<\/svg>/', $html, $m);
   $defs = $m[1];
   $html = preg_replace('/<svg[^>]*>\s*<defs.*?<\/defs>\s*<\/svg>/', '', $html);
   $html = preg_replace('/(<svg[^>]*>)/', "\\1".$defs, $html);
   preg_match_all('/<svg([^>]*)style="(.*?)"/', $html, $m);
  
   for ($i = 0; $i < count($m[0]); $i++) {
       $style=$m[2][$i];

       preg_match('/width: (.*?);/', $style, $wr);
       $w = $mpdf->ConvertSize($wr[1], 0, $mpdf->FontSize) * $mpdf->dpi/25.4;

       preg_match('/height: (.*?);/', $style, $hr);
       $h = $mpdf->ConvertSize($hr[1], 0, $mpdf->FontSize) * $mpdf->dpi/25.4;
  
       $replace = '<svg'.$m[1][$i].' width="'.$w.'" height="'.$h.'" style="'.$m[2][$i].'"';
       $html = str_replace($m[0][$i], $replace, $html);
   }
  
   $mpdf->WriteHTML($html);
   $mpdf->Output();
   exit;

   ```
  
  See an example of output: <a href="https://github.com/mpdf/mpdf-examples/blob/master/MathJaxSample.htm">https://github.com/mpdf/mpdf-examples/blob/master/MathJaxSample.htm</a>

