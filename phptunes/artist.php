<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
  <title>Artists</title>
</head>
<body>
    <h1>Artists</h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Name</th>
          <th>Genre</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          //connect
          $db = new PDO('mysql:host=localhost:3308;dbname=phptunes','root','');

          //set up and run query
          $sql = "SELECT * FROM artists";
          $cmd = $db->prepare($sql);
          $cmd->execute();
          $artists = $cmd->fetchAll();

          //loop through results and display inside table cells
          foreach ($artists as $artist){
            echo '<tr>
                  <td>' .$artist['name']. '</td>
                  <td>' .$artist['genreId']. '</td>
            </tr>';
          }

          // discount
          $db = null;
        ?>
      </tbody>
    </table>
</body>
</html>