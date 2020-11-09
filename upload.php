<?php

$target_dir = "uploads/";
$target_file = $target_dir . $_FILES['FileToUpload']['tmp_name'];
include 'index.php';

$errors = [];
 
// checkkaa onko image

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["FileToUpload"]["tmp_name"]);
    if($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $errors[] ='ei ollut kuva';
    }
  }

//checkkaa formaatti   
$image_file_type = pathinfo($target_file, PATHINFO_EXTENSION);
if ($image_file_type != 'jpg' || $image_file_type != 'jpeg'){
    $errors[] ='ei toiminut vain jpeg-tiedostoja';
}   
if (file_exists($target_file)){
    $errors[] ='tiedosto on jo olemassa';

}
if ($_FILES["FileToUpload"]["size"] > 500000) {
    $errors[] = "Sorry, your file is too large.";
  }
if (count($errors) > 0){
    foreach ($errors as $error){
        echo $error."<br>";
    }
} else {    

    if  (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)){
        echo "the file ". basename($_FILES["fileToupload"]["name"]). "has been uploaded.";
        saveDataToXML($_FILES); 
    }else {
        echo "tiedoston siirtämisessä tapahtui virhe"; 
    }
}

?>  