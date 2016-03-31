---
layout: page
title: Graphs
parent_title: What Else Can I Do
permalink: /what-else-can-i-do/graphs.html
modification_time: 2015-08-05T12:00:16+00:00
---



<p>mPDF can generate graphs from table data. This requires the <b>JPGraph</b> program, which is an open-source PHP library available from <a href="http://www.aditus.nu/jpgraph/" target="_blank">http://www.aditus.nu/jpgraph/</a></p>
<p>Graphs have only been tested with the PHP5 version of JPGraph.</p>
<h3>Installation</h3>
<p>JPGraph needs to be installed on your server. Follow the instructions for installing JPGraph, including configuring the script to access the TTF fonts necessary to produce JPGraphs.</p>

<div class="alert alert-info" role="alert"><strong>Note:</strong> Check that you have a subfolder in your /mpdf/ folder named /graph_cache/ and make sure it is writeable.</div>
<h3>Using Graphs in mPDF</h3>
<p>See the example below. The table containing data must precede the graph. Nested tables will be ignored.</p>

{% highlight php %}
Example #1
{% endhighlight %}

{% highlight php %}
<?php

<?php

include("../mpdf.php");

// This must be defined before including mpdf.php file

define("_JPGRAPH_PATH", '../../jpgraph_5/src/'); 

// Change these if necessary to the name of font files you can access from JPGraph

define("_TTF_FONT_NORMAL", 'arial.ttf');

define("_TTF_FONT_BOLD", 'arialbd.ttf');

$mpdf=new mPDF(); 

// This must be set to allow mPDF to parse table data

$mpdf->useGraphs = true;

$html = '

<table id="tbl_1"><tbody>

<tr><td></td><td><b>Female</b></td><td><b>Male</b></td></tr>

<tr><td>35 - 44</td><td><b>4</b></td><td><b>2</b></td></tr>

<tr><td>45 - 54</td><td><b>5</b></td><td><b>7</b></td></tr>

<tr><td>55 - 64</td><td><b>21</b></td><td><b>18</b></td></tr>

<tr><td>65 - 74</td><td><b>11</b></td><td><b>14</b></td></tr>

<tr><td>75 - 84</td><td><b>10</b></td><td><b>10</b></td></tr>

<tr><td>85 - 94</td><td><b>2</b></td><td><b>1</b></td></tr>

<tr><td>95 - 104</td><td><b>1</b></td><td><b></b></td></tr>

<tr><td>TOTAL</td><td>54</td><td>52</td></tr>

</tbody></table>

<jpgraph table="tbl_1" type="bar" title="New subscriptions" label-y="% patients" label-x="Age group" series="cols" data-row-end="-1" show-values="1" width="600" legend-overlap="1" hide-grid="1" hide-y-axis="1" />

';

$mpdf->WriteHTML($html);

$mpdf->Output();

exit;

?>
{% endhighlight %}

<p>&nbsp;</p>
<h3>Result

</h3>
<p>This should produce a PDF file like this:</p>
<p>&nbsp;</p>
<table class="table"> <tbody>
<tr>
<td>&nbsp;</td>
<td><b>Female</b></td>
<td><b>Male</b></td>
</tr>
<tr>
<td>35 - 44</td>
<td><b>4</b></td>
<td><b>2</b></td>
</tr>
<tr>
<td>45 - 54</td>
<td><b>5</b></td>
<td><b>7</b></td>
</tr>
<tr>
<td>55 - 64</td>
<td><b>21</b></td>
<td><b>18</b></td>
</tr>
<tr>
<td>65 - 74</td>
<td><b>11</b></td>
<td><b>14</b></td>
</tr>
<tr>
<td>75 - 84</td>
<td><b>10</b></td>
<td><b>10</b></td>
</tr>
<tr>
<td>85 - 94</td>
<td><b>2</b></td>
<td><b>1</b></td>
</tr>
<tr>
<td>95 - 104</td>
<td><b>1</b></td>
<td>&nbsp;</td>
</tr>
<tr>
<td>TOTAL</td>
<td>54</td>
<td>52</td>
</tr>
</tbody> </table>
<p><img src="files/images/example_graph.png" alt="example_graph.png" /></p>
<p>&nbsp;</p>
<p>Note that graphs can be rotated as with images using&lt;jpgraph rotate="90" ... (see <a href="{{ "/html-support/html-attributes.html" | prepend: site.baseurl }}">HTML attributes</a>)</p>
