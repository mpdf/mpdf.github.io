---
layout: page
title: Layers
parent_title: What Else Can I Do
permalink: /what-else-can-i-do/layers.html
modification_time: 2015-08-05T12:00:14+00:00
---

(mPDF &ge; 5.7)

CSS `z-index` can be used to utilise layers in the PDF document.

CSS can set the z-index for any block element or image (default: `0`). This does not work on block elements
with fixed or absolute position.

## Set the Initial state for each layer

You can set initial `'state' = "hidden"` for a specific `z-index` (`z`), and/or specify a display name for the Layer e.g.

```php
<?php
// Set initial state of layer: "hidden" or nothing
$mpdf->layerDetails[z]['state'] = 'hidden';

```

```php
<?php
$mpdf->layerDetails[z]['name'] = 'Correct Answers';

```

- where `z` is the z-index (set by CSS)

Note:

- Using layers automatically changes the resulting PDF document to PDF 1.5 version (which is incompatible with PDFA and PDFX in mPDF).
- You cannot nest layers - inner values will be ignored

## Display the Layers pane in PDF document viewer

`$mpdf->open_layer_pane` (set by default as `'open_layer_pane' => false` as a
<a href="{{ "/configuration/configuration-v7-x.html" | prepend: site.baseurl }}">configuration variable</a>)
can be set to open the layers pane in the browser when the document is opened.

```php
<?php
$mpdf->open_layer_pane = true;

```

## Set Programmatically

If you are writing the PDF document using functions other than `WriteHTML()`, you can set the layers as follows:

```php
<?php

$mpdf->BeginLayer($z-index);

...

$mpdf->EndLayer();

```

## Reserved Layer Names

mPDF automatically adds layer names for visibility: "Print only", "Screen only" and "Hidden"; these only show when utilised.

