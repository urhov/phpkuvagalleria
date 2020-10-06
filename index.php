<?php
session_start() 

?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="galleria.xml">
<link rel="stylesheet" href="add_kuva.php">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<h1>kuvat</h1>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kuvat</title>
</head>
<body>
<div class="container">
  <li><a href="register.php">kirjaudu</a></li>
  <li><a href="add_kuva.php">lisää kuva</a></li>
</div>
<div>
<img src="img/paraiso.jpg" alt="paratiisi">
</div>

<form action="<?php echo $_SERVER['PHP_SELF'];?> "method="post"></form>
  <label for="username">käyttäjä</label>
  <input type="pwd" name="pwd">

 <input type="submit" value="login">



<script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  //<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  //<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  //<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</script>
</body>
</html>