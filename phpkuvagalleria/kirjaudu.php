<?php
session_start();

$username = $_GET = ['username'];


if (isset($_POST['username']) && isset($_POST('passwd'))) {

    $username = $_POST['username'];
    $passwd = $_POST['passwd'];

 //hae tietokannasta käyttäjä jonka käyttäjänimi on sama kuin lomakkeelta annettu
    $stmt = $conn->prepare("SELECT id, user_name, email, pwd FROM users WHERE user_name = ?;");
    $stmt->bind_param("s", $username);
    $stmt->execute();



        // bindaus
        $stmt->bind_result($id, $username, $email , $passwd_hash);

       // Jos käyttäjänimi löytyy, tarkistetaan salasana
       $stmt->fetch();
       if ($username){
           if (password_verify($passwd, $passwd_hash)){
               $_SESSION["username"]  = $username;
               $_SESSION["user_id"] = $id;
               header("Location: index.php");
               die();
            } else {
               $_SESSION["error"] = "Salasana oli väärä!";
           }
       }   

   
    // Jos salasana natsaa, käyttäjä päästetään sisään
    // Tallennetaan sessioon käyttäjän id
}



include "connect_db.php";
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>kirjaudu</h1> 
    <div class="container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="#"></a>
            </div>
            <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">kommenttisivusto</li>
            <li><a href="kirjaudu.php">kirjaudu</a></li>
            <li><a href="rekisteroidy.php">rekisteröidy</a></li>
            </ul>
        </div>
    </nav>        
</div>
<div class="container">
    <div class="signin">
        <div class="row">

            <?php if (isset($_SESSION["error"])): ?>

                <div class="alert danger">
                    <?php 
                    echo $_SESSION["error"]; 
                    unset($_SESSION["error"]);
                    ?>
                </div>

            <?php endif; ?>
            <form method="post" action="kirjaudu.php">
                
                <label type="text" for="user">Käyttäjänimi:</label>
                <br>
                <input type="text" name="username">    
                <br>
                <label type="password" for="pwd">salasana:</label>
                <br>
                <input type="password" name="passwd">    
        
                </br><button type="submit" class="login-btn">kirjaudu</button><br>
            </form> 
        </div>
    </div>
</div>




</body>
</html>