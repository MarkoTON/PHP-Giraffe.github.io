<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <form action="site.php" method="get">
    <label for="name">Name</label>
    <input type="text" name="name">
    <br>
    <label for="email">Email</label>
    <input type="text" name="email">
    <br>
    <button type="submit">Submit</button>
  </form>
  
  <?php 

    echo $_GET["name"];
    echo "<br>";
    echo $_GET["email"];

  ?>
</body>
</html>