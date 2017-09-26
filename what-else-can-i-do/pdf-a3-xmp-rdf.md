---
layout: page
title: PDF/A-3 associated files + Additional XMP RDF
parent_title: What Else Can I Do
permalink: /what-else-can-i-do/pdf-a3-xmp-rdf.html
modification_time: 2017-09-25T19:00:07+00:00
---

It is possible to attach files "PDF/A-3" way (via "Associated Files" /AF key)
and inject additional XMP RDF to the document metadata.

This allows to generate ZUGFeRD Invoices as defined by [ZUGFeRD standard][1].

```php
<?php

$mpdf = new \Mpdf\Mpdf([
	'PDFA' => true,
	'PDFAauto' => true,
]);

$mpdf->SetAssociatedFiles([[
	'name' => 'public_filename.xml',
	'mime' => 'text/xml',
	'description' => 'some description',
	'AFRelationship' => 'Alternative',
	'path' => __DIR__ . '/../data/xml/test.xml'
]]);

$rdf  = '<rdf:Description rdf:about="" xmlns:zf="urn:ferd:pdfa:CrossIndustryDocument:invoice:1p0#">'."\n";
$rdf .= '  <zf:DocumentType>INVOICE</zf:DocumentType>'."\n";
$rdf .= '  <zf:DocumentFileName>ZUGFeRD-invoice.xml</zf:DocumentFileName>'."\n";
$rdf .= '  <zf:Version>1.0</zf:Version>'."\n";
$rdf .= '  <zf:ConformanceLevel>BASIC</zf:ConformanceLevel>'."\n";
$rdf .= '</rdf:Description>'."\n";

$mpdf->SetAdditionalXmpRdf($rdf);
```

[1]: http://www.ferd-net.de/zugferd/specification/index.html
