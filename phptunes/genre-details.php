<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
  <title>Genre details</title>
</head>
<body>
  <main class="container">
    <h1 class="">Genre Details</h1>
    <form action="save-genre.php" method="POST">
    <fieldset class="form-group ">
      <label for="name" class="control-label col-2">Name</label> 
      <input type="text" name="name" id="name" >
    </fieldset>
    <button class="btn btn-primary offset-2 my-2">Save</button>
    </form>
  </main>
  
</body>
</html>