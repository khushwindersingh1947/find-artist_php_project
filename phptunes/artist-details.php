<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
  <title>Artist details</title>
</head>
<body>
  <main class="container">
    <h1 class="">Artist Details</h1>
    <form action="save-artist.php" method="POST">
    <fieldset class="form-group ">
      <label for="name" class="control-label col-2">Name</label> 
      <input type="text" name="name" id="name" >
    </fieldset>
    <fieldset class="form-group ">
      <label for="generId" class="control-label col-2">Genre:</label> 
      <select name="genreId" id="genreId">
          <?php

              //connect to database    
              $db = new PDO('mysql:host=localhost:3308;dbname=phptunes','root','');

              //query the genres table
              $sql = "SELECT * FROM genres";
              $cmd = $db->prepare($sql);
              $cmd->execute();

              //get data through fetchAll()
              $generes = $cmd->fetchAll(); 
              
              //loop through data
              foreach($generes as $genre){
                echo '<option value="'.$genre['genreId'].'"class="list-group-item">' .$genre['name']. '</option>';
              }
              
              //disconnect
              $db = null;
          ?>
      </select>
    </fieldset>
    <button class="btn btn-primary offset-2 my-2">Save</button>
    </form>
  </main>
  
</body>
</html>