<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <form action="site.php" method="post">
    Apples:<input type="checkbox" name="fruits[]" value="apples"><br>
    Bananas:<input type="checkbox" name="fruits[]" value="bananas"><br>
    Pears:<input type="checkbox" name="fruits[]" value="pears"><br>
    <input type="submit">
  </form>
  <br>
  <?php 
    $fruits = $_POST["fruits"];
    echo var_dump($fruits);
  ?>
</body>
</html>