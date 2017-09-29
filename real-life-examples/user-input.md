---
layout: page
title: User Input
parent_title: Real life examples
permalink: /real-life-examples/user-input.html
modification_time: 2015-08-05T12:00:28+00:00
---

These scripts allow you to present a form to the user, who can enter text and upload an image; these are displayed first
in the browser, with the option to create a PDF file from the output. These scripts should only be considered the basis
of a full script and will need adapting considerably. In particular, note that the uploaded image files may need to be
deleted at some point.

`example_userinput.php`

```html
<html>
<body>
    <form action="example_userinput2.php" method="post" enctype="multipart/form-data">
        Enter text:
        <br />
        
        <textarea name="text" id="text"></textarea>
        <br />
        
        <label for="file">Choose Image to upload:</label> 
        <input type="file" name="file" id="file" />
        <br />
        
        <input type="submit" name="submit" value="Submit" />
    </form>
</body>
</html>

```

`example_userinput2.php`

```php
<?php

if (($_FILES["file"]["type"] == "image/gif" || $_FILES["file"]["type"] == "image/jpeg") 
    && $_FILES["file"]["size"] < 20000) {
    // If the destination file already exists, it will be overwritten
    move_uploaded_file($_FILES["file"]["tmp_name"], "../tmp/" . $_FILES["file"]["name"]);
} else {
    echo "Invalid file";
}

$html = '<html>
    <body>
        <div>' . $_POST['text'] . '</div>
        <img src="' ."../tmp/" . $_FILES["file"]["name"] . '" />
    
        <form action="example_userinput3.php" method="post" enctype="multipart/form-data">
            <textarea style="display:none" name="text" id="text">' 
            . $_POST['text'] 
            . '</textarea>
            <input type="hidden" name="filename" id="filename" 
                value="'. $_FILES["file"]["name"].'" />
            <input type="submit" name="submit" value="Create PDF file" />
        </form>
    </body>
</html>';

echo $html;


```

`example_userinput3.php`

```php
<?php
require __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();

$html ='<html>
<body>
    <div>'.$_POST['text'].'</div>
    <img src="' . "../tmp/" . $_POST['filename'] . '" />
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output();

```
