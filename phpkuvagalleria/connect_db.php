<?php
$db_servername = "localhost";
$db_username = "root";
$db_name = "työpaikka";
$db_password = ""; 

$errors = [];

// Create connection
$conn = new mysqli($db_servername, $db_username, $db_passwd, $db_kuva);

// Check connection
if ($conn->connect_error) {
    $errors[] = $conn->connect_error;
    die("Connection failed: " . $conn->connect_error);
}

if (!$conn->set_charset("utf8")) {
    $errors[] = "Error loading character set utf8:" . $conn->error;
    exit();
} else {
    $errors[] = "Current character set: " . $conn->character_set_name();
}

