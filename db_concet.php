<?php
    $DB_HOST = 'localhost';
    $DB_USER = 'root';
    $SERVER_PORT = 3305;
    $DB_PASSWORD = '';
    $DB_NAME = 'php_crud_image_7_8';

    function connect_db() {
        global $DB_HOST, $DB_USER, $SERVER_PORT, $DB_PASSWORD, $DB_NAME;
        return new mysqli(hostname: $DB_HOST, username: $DB_USER, password: $DB_PASSWORD, database: $DB_NAME, port: $SERVER_PORT);
    }

    $conn = connect_db();

    