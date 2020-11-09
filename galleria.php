<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>galleria</title>
</head>
<body>
    <?php
        $xml = simplexml_load_file('data/galleria.xml');
        ?>
      <?php  foreach ($xml->picture as $pic): ?>
          <div>
            <h2><?php echo $pic->author;?></h2>
            <img src="uploads/<?php echo $pic->file;?>" alt="kuva" />
            <p><?php echo $pic->date;?></p>
          </div>        
    <?php endforeach; ?>
</body>
</html> 