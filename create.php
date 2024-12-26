<?php
    include "image_uploader.php";
    include "db_connect.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $file = $_FILES['thumbnail'];
        
        $filename = uploads($file);

        $con = connect_db();

        $query = "INSERT INTO `products`(`name`, `price`, `thumbnail`) VALUES ('$name', '$price', '$filename')";

        $con->query( query:$query );
        
        header('Location: index.php');

    }