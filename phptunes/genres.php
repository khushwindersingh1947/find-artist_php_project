<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
  <title>Genres</title>
</head>
<body>
  <?php 
  //connect to database
  
  $db = new PDO('mysql:host=localhost:3308;dbname=phptunes','root','');

  //query the genres table
  $sql = "SELECT * FROM genres";
  $cmd = $db->prepare($sql);
  $cmd->execute();

  //get data through fetchAll()
  $generes = $cmd->fetchAll(); 
  
  echo '<ul class="list-group">';
  //loop through data
  foreach($generes as $genre){
    echo '<li class="list-group-item">' .$genre['name']. '</li>';
  }

  echo '</ul>';
  //disconnect
  $db = null;
  ?>
</body>
</html>