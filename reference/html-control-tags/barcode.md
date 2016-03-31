---
layout: page
title: barcode
parent_title: HTML control tags
permalink: /reference/html-control-tags/barcode.html
modification_time: 2015-08-05T12:01:19+00:00
---



<p>(mPDF &gt;= 4.0)</p>
<p>barcode – Add a Barcode to the document</p>
<h2>Description</h2>
<p class="manual_block">&lt;<b>barcode</b>&nbsp; <span class="parameter">code</span> [ <span class="parameter">type</span> ] [ <span class="parameter">text</span> ] [ <span class="parameter">size</span> ] [ <span class="parameter">height</span> ] [ <span class="parameter">pr</span> ] /&gt;</p>
<p>Add a Barcode to the document.</p>

<div class="alert alert-info" role="alert"><strong>Note:</strong> See <a href="{{ "/what-else-can-i-do/barcodes.html" | prepend: site.baseurl }}">barcodes</a> and the example file for further information.</div>
<h2>Attributes</h2>
<p class="manual_param_dt"><span class="parameter">code</span></p>
<p class="manual_param_dd">Specifies the code to translate to a barcode.

<span class="parameter">code</span> for EAN13 / ISBN / ISSN / UPCA / UPCE can contain hyphens '-' but no other characters are allowed.

Check-digits can be optionally included for EAN13 / ISBN / ISSN / UPCA / UPCE

<span class="smallblock">REQUIRED</span></p>
<p class="manual_param_dt"><span class="parameter">type</span></p>
<p class="manual_param_dd"><span class="parameter">type</span> specifies the type of barcode required.

<span class="smallblock">DEFAULT</span>: EAN13</p>
<p class="manual_param_dd"><b>Values</b>

EAN13, ISBN, ISSN, UPCA, UPCE, EAN8

EAN13P2, ISBNP2, ISSNP2, UPCAP2, UPCEP2, EAN8P2 (with EAN-2 supplement code i.e. 01-99 )

EAN13P5, ISBNP5, ISSNP5, UPCAP5, UPCEP5, EAN8P5&nbsp; (with EAN-5 supplement code e.g. 90000 )

(UPCE needs the UPCA <span class="parameter">code</span> entered)

IMB, RM4SCC, KIX, POSTNET, PLANET

C128A, C128B, C128C

EAN128A, EAN128B, EAN128C

C39, C39+, C39E, C39E+

S25, S25+, I25, I25+, I25B, I25B+

C93

MSI, MSI+

CODABAR

CODE11</p>
<p class="manual_param_dd">Note: Type with a + at the end includes check-digits.</p>
<p class="manual_param_dt"><span class="parameter">text</span></p>
<p class="manual_param_dd"><b>EAN13 only</b>

Specifies whether to show the the code at the top of an EAN13 barcode.

Note that ISBN and ISSN always show the text, prefixed with ISBN or ISSN.

Values: 1 or 0

<span class="smallblock">DEFAULT</span>: 0</p>
<p class="manual_param_dt"><span class="parameter">size</span></p>
<p class="manual_param_dd">Specifies the size of the barcode.

<span class="parameter">size (float)</span> will scale the nominal size of the barcode as a factor of 1

<span class="parameter">size="1.5"</span> will generate a barcode one and half times the height and width of the nominal size set in mPDF

NB Sizes between 0.8 and 2.0 are recommended for EAN13 and similar barcodes.

<span class="smallblock">DEFAULT</span>: 1</p>
<p class="manual_param_dt"><span class="parameter">height</span></p>
<p class="manual_param_dd">Specifies the height of the barcode.

<span class="parameter">height (float)</span> will determine the relative height of the barcode as a factor of 1

The height factor is applied after the <span class="parameter">size </span> 

<span class="parameter">size="2" height="0.5"</span> will generate a barcode of twice the nominal width, but with the nominal height.

NB Ignored for Postcode barcodes

<span class="smallblock">DEFAULT</span>: 1<span class="smallblock"></span></p>
<p class="manual_param_dt"><span class="parameter">pr</span></p>
<p class="manual_param_dd">Specifies the print ratio i.e. narrow:wide bar width for some types of barcode.

Valid for: C39 (Code 39), Standard and Interleaved 2 of 5 (S25, I25 etc.), CODABAR and CODE11

<span class="smallblock">DEFAULT</span>: Varies between 2.5 and 3.0 dependent on barcode specification (see <a href="{{ "/what-else-can-i-do/barcodes.html" | prepend: site.baseurl }}">barcodes</a>)</p>
<h2>Changelog</h2>
<table class="table"> <thead>
<tr> <th>Version</th><th>Description</th> </tr>
</thead> <tbody>
<tr>
<td>4.0</td>
<td>The function was added.</td>
</tr>
</tbody> </table>
<h2>Examples</h2>

{% highlight php %}
Examples
{% endhighlight %}

{% highlight php %}
<barcode code="978-0-9542246-0" type="ISBN" height="0.66" text="1" />
{% endhighlight %}

{% highlight php %}
<barcode code="04210000526" type="UPCE" />

// Note the UPC-A code is required which is converted to UPCE
{% endhighlight %}

{% highlight php %}
<barcode code="978-0-9542246-0-8 07" type="ISSNP2" text="1" />
{% endhighlight %}

{% highlight php %}
<barcode code="01234567094987654321-01234567891" type="IMB" />
{% endhighlight %}

{% highlight php %}
<barcode code="SN34RD1A" type="RM4SCC" />
{% endhighlight %}

{% highlight php %}
<barcode code="54321068" type="I25" />
{% endhighlight %}

{% highlight php %}
<barcode code="A34698735B" type="CODABAR" />
{% endhighlight %}

<h2>Notes</h2>

<div class="alert alert-info" role="alert"><strong>Note:</strong> The following CSS properties can be set on the &lt;barcode /&gt; element as though it were standard HTML:

vertical-align&nbsp; (default: middle)

border*

margin*

padding* (default 2mm for EAN13)

color (default black)

background-color (default white)

NB padding has defaults as 0(mm) if not specified

Padding is in addition to any specified quiet zones/light margins.</div>

{% highlight php %}
Example with CSS

{% endhighlight %}

{% highlight php %}
<style>

.barcode {

    padding: 1.5mm;

    margin: 0;

    vertical-align: top;

    color: #000044;

}

.barcodecell {

    text-align: center;

    vertical-align: middle;

}

</style>

<div class="barcodecell"><barcode code="54321068" type="I25" class="barcode" /></div>
{% endhighlight %}

<div class="alert alert-info" role="alert"><strong>Note:</strong> mPDF will generate a Checkdigit for most barcodes if required, which is added to the barcode. If you need to know what the checkdigit is for a particular barcode, you could do the following:</div>

{% highlight php %}
Example - Generating a checkdigit

{% endhighlight %}

{% highlight php %}
<?php

// Must not contain any - or spaces

include('../classes/barcode.php');

$bc = new PDFBarcode();

echo $bc->getChecksum('9344543204454', 'C93'); 

exit;
{% endhighlight %}

<h2>See Also</h2>
<ul>
<li class="manual_boxlist"><a href="{{ "/what-else-can-i-do/barcodes.html" | prepend: site.baseurl }}">Barcodes</a> - More information on types of barcode

</li>
</ul>
<p><span class="jslink">

</span></p>
