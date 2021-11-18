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
    Color:<input type="text" name="color">
    <br>
    Plural noun:<input type="text" name="plural">
    <br>
    Celebrity<input type="text" name="celebrity">
    <br>
    <input type="submit">
  </form>
  Answer:
  <br>
  <?php 
    $color = $_GET["color"];
    $plural = $_GET["plural"];
    $celebrity = $_GET["celebrity"];

    echo "Roses are $color <br>";
    echo "$plural are blue <br>";
    echo "I love $celebrity <br>";
  ?>
</body>
</html>