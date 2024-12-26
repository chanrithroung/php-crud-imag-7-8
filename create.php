<?php
    // echo rand(0, 999999999);
    // ;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $file = $_FILES['thumbnail'];
        pathinfo( "image.png", PATHINFO_EXTENSION );
        $filename = rand(0, 9999999999).date("Y-m-d-H-i-s").'.'.pathinfo( $file['name'], PATHINFO_EXTENSION);
    
        move_uploaded_file($file['tmp_name'], 'uploads/'.$filename);
    }