<?php
$db_passwd = ""; 

$errors = [];

// Create connection
$conn = new mysqli($db_servername, $db_username, $db_passwd, $db_name);

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
?>
