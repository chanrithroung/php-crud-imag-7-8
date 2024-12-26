<?php
    function uploads($file): string {
        $filename = rand(0, 9999999999).date("Y-m-d-H-i-s").'.'.pathinfo( $file['name'], PATHINFO_EXTENSION);
        move_uploaded_file($file['tmp_name'], 'uploads/'.$filename);
        return $filename;
    }