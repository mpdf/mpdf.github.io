---
layout: page
title: Index
parent_title: What Else Can I Do
permalink: /what-else-can-i-do/index.html
modification_time: 2015-08-05T12:00:14+00:00
---



<p>mPDF can generate an index at the end of document using:</p>
<ul>
<li>&lt;indexentry content="Buffalo" /&gt; to make index entries at the appropriate place in the HTML text</li>
<li>&lt;indexinsert ... /&gt; generates and inserts the Index at the end of document</li>
</ul>

<div class="alert alert-info" role="alert"><strong>Note:</strong> Indexes have been completely rewritten in mPDF 6. The notes below refer to mPDF v6.0+</div>
<ul>
<li>&lt;indexentry&gt; or IndexEntry() should be used to create Index entries during document writing.</li>
<li>&lt;indexinsert&gt; or InsertIndex() should be used to generate the Index at the end of the document.</li>
</ul>
<p>When an Index is inserted in the PDF document using &lt;indexinsert&gt; or InsertIndex(), the Index is generated (internally) as HTML code in the following format (with the markup as shown):</p>

{% highlight php %}
<div class="mpdf_index_main">

<div class="mpdf_index_letter">A</div>

<div class="mpdf_index_entry">Aardvark<a class="mpdf_index_link" href="#page37">37</a>

</div>

...

</div>
{% endhighlight %}

<p>CSS stylesheets can thus be used to control the layout of the Index e.g.:</p>

{% highlight php %}
/* For Index */

div.mpdf_index_main {

    line-height: normal;

    font-family: sans-serif;

}

div.mpdf_index_letter {

    line-height: normal;

    font-family: sans-serif;

    font-size: 1.8em;

    font-weight: bold;

    text-transform: uppercase;

    page-break-after: avoid; 

    margin-top: 0.3em; 

    margin-collapse: collapse;

}

div.mpdf_index_entry {

    line-height: normal;

    font-family: sans-serif;

    text-indent: -1.5em;

}

a.mpdf_index_link { 

    color: #000000; 

    text-decoration: none;

}
{% endhighlight %}

<p>A default stylesheet for Indexes is included in <span class="filename">mpdf.css</span></p>
<h3>Index Collation</h3>
<p>In order to generate an Index with non-ASCII characters, entries need to be sorted accordingly (collation), and non-ASCII characters should map to the appropriate Dividing letter e.g.:</p>
<p class="manual_block"><b>A</b>

Alonso, Fernando

Ãlvarez, Isaac

Arroyo Molino, David 

<b>B</b>

BenÃtez, Carlos</p>
<p>Entries in an Index can now be sorted using any of the Locale values available on your system. Set it using the "collation" property/parameter e.g.:</p>

{% highlight php %}
<indexinsert usedivletters="on" links="off" collation="es_ES.utf8" collation-group="Spanish_Spain" />
{% endhighlight %}

<p>- or -</p>

{% highlight php %}
<?php

$mpdf->InsertIndex(true, false, "es_ES.utf8", "Spanish_Spain");
{% endhighlight %}

<p>NB You should always choose a UTF-8 collation, even when you are using Core fonts or e.g. charset-in=win-1252, because mPDF handles all text internally as UTF-8 encoded.</p>
<p>You can see which Locales are available on your (Unix) system: <code>&lt;?php system('locale -a') ?&gt;</code></p>
<p>Note: Index collation will probably not work on Windows servers because of the problems setting Locales under Windows.</p>
<p>If you have set your index to use Dividing letters, you can also determine how letters are grouped under a dividing letter. In the example index above, we want Ã to be grouped under the letter a/A. Set the "collation-group" using:</p>

{% highlight php %}
<indexinsert usedivletters="on" links="off" collation="es_ES.utf8" collation-group="Spanish_Spain" />
{% endhighlight %}

<p>- or -</p>

{% highlight php %}
<?php

$mpdf->InsertIndex(true, false, "es_ES.utf8", "Spanish_Spain");
{% endhighlight %}

<p>Values should be selected from the available file names in folder /collations/.</p>
<p>Note: This will not affect the overall order of entries, which is determined by the value of "collation".</p>
<p>Note: The groupings do not always match the order set by locale. This is because the data for collations has come from different sources. The files in /collations/ can be edited.</p>
<p>The array consists of [index]: unicode decimal value of character =&gt; unicode decimal value of character to group under: e.g. Ã [A tilde] (U+00C3) (decimal 195) =&gt; a (U+0061) (decimal 97). The target character should always be the lowercase form.</p>
<h3>Non-ASCII chcracters in Index entries</h3>
<p>Note: htmlspecials_encode should be used to encode the text of content in &lt;indexentry&gt; - although not when using IndexEntry().</p>
<h3>Columns</h3>
<p>From mPDF 6.0, columns are not specified as part of the &lt;indexinsert&gt;, so a typical 2-column index might be produced by:</p>

{% highlight php %}
<pagebreak type="next-odd" />

<h2>Index</h2>

<columns column-count="2" column-gap="5" />

<indexinsert usedivletters="on" links="on" collation="en_US.utf8" collationgroup="English_United_States" />

<columns column-count="1" />
{% endhighlight %}

<h3>Index Sub-entries</h3>
<p>Index entries can contain sub-entries, separated by colons e.g.</p>

{% highlight php %}
<indexentry content="Mammals:elephants" />
{% endhighlight %}

<p>A shorthand way of displaying subentries is set by default, which suppresses the main entry if &gt; 1 subEntry. It can be disabled/enabled using the configurable variable $this-&gt;indexUseSubentries in config.php.</p>
<p>This is the default appearance, with $this-&gt;indexUseSubentries = false; -</p>
<p class="manual_block">Mammals 73

- elephants 142

- humans 173

Marsupials

- kangaroos 75

- wombats 86</p>
<p>Index entries can also include simple mark-up tags and/or more than one colon e.g:</p>

{% highlight php %}
<indexentry content="Mammals:&amp;lt;b&amp;gt;elephants&amp;lt;/b&amp;gt;: breeding" />
{% endhighlight %}

<p>which appears as:</p>
<p class="manual_block">Mammals

- <b>elephants</b>: breeding 15</p>
<p>This is the appearance with $this-&gt;indexUseSubentries = false;</p>
<p class="manual_block">Mammals 73

Mammals, elephants 142

Mammals, <b>elephants</b>: breeding 15

Mammals, humans 173

Marsupials, kangaroos 75

Marsupials, wombats 86</p>
<h3>Customised appearance (advanced)</h3>
<p>Several variables set at beginning of function InsertIndex() in mpdf.php which could be changed to alter appearance of Index. e.g. spacer, and joiner characters.</p>
