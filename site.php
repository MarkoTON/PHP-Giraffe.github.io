<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <!-- <form action="site.php" method="post">
    Name: <input type="text" name="student">
    <input type="submit" sayHi>
  </form> -->
  <br>
  <?php 
    function sayHi($name){
      echo "Hello $name";
      echo "<br>";
    };
    // $name = $_POST["student"];
    $ime = "Marko";
    $ime2 = "Tom";
    sayHi($ime);
    sayHi($ime2);
  ?>
</body>
</html>