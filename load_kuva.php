<?php
session_start();
if (isset($_POST['username']){
    
}
else {
    echo "et ole kirjautunut";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <form action="load_kuva.php" method="post" enctype="multipart/form-data">
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="upload">
</head>
<body>
<?php 
if (move_uploaded_file($_FILES['filetoupload']['tmp_name'], $target_file))
echo "the file". basename($_FILES["FileToUpload"]["name"]). "has been uploaded."
function saveDataToXML($data){
$author = $data['author'];
$xml = simplexm_load_file('data/galleria.xml');

//$new_pic = 
//$new_pic =
//$new_pic = 
//$new_pic =
}
?>    
</body>
</html>