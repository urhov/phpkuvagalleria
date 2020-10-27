<?php  
session_start();


//}
//$kuva = imagecreatetruecolor(120, 20);

//$text_color = imagecolorallocate($kuva , 233, 14, 91); 

//imagestring($kuva, 1, 5, 5, 'string', $text_color);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="functions.php" method="post" enctype="multipart/from-data">
    <label for="author">author</label>
    <input type="text" name="author">
    <br>
    <input type="file" name="fileToUpload">
    <input type="submit" value="upload" name="submit">
</form>
</body>
</html>