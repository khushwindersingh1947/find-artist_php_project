<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
    $name = $_POST['name'];
    $genreId = $_POST['genreId'];
    // echo $name;

    //connect to db using PDO library(current standard php library) db type:server:port;dbname,username,password 
    $db = new PDO('mysql:host=localhost:3308;dbname=phptunes','root','');

    //insert sql command, colon reprents variable, don't use $ (it works) but dangerous idea due to sql injection 
    $sql = "INSERT INTO artists (name, genreId) VALUES (:name, :genreId)";

    //populate our sql command
    //-> php operator
    $cmd = $db->prepare($sql);
    $cmd->bindParam(':name',$name,PDO::PARAM_STR,100);//to get saved from hackers convert variable into string
    $cmd->bindParam(':genreId',$genreId,PDO::PARAM_STR,100);//to get saved from hackers convert variable into string

    //execute the save command
    $cmd->execute();

    //disconnect from db
    $db = null;

    //show the user a message
  echo "Artist Saved";
  ?>
</body>
</html>