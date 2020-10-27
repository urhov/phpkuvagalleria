<?php
$target_dir = "uploads/";
$target_file = $target_dir . $_FILES['FileToUpload']['tmp_name'];


$errors = [];

//checkkaa formaatti   
$image_file_type = pathinfo($target_file, PATHINFO_EXTENSION);
if ($image_file_type != 'jpg' || $image_file_type != 'jpeg'){
    $errors['ei toiminut vain jpeg-tiedostoja'];
};


move_uploaded_file($_FILES['FileToUpload']['tmp_name'], $target_file);


?>  