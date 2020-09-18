<?php  
session_start();


if (!isset(($_SESSION['username'])){
    echo "ei lupaa tälle sivulle";
    die();
}
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
<div class="container">
<img src="paraiso.jpg" alt="">
</div>
<div>
<button id="btn"></button>
</div>

<?php 
 $kuva = $_GET["kuva"];
 
 
    
?>

</body>
</html>