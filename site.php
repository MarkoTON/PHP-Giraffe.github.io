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
    Student name: <input type="text" name="student">
    <input type="submit">
  </form>
  <br>
  <?php 
    $grades = array("Jim" => "A+", "Pam" => "B-", "Marko" => "A", "Oscar" => "C+");
    // echo $grades["Jim"]; 
    // echo "<br>";
    // $grades["Jim"] = "F"; 
    // echo "<br>";
    // echo $grades["Jim"]; 
    // echo "<br>";
    // echo $grades["Marko"]; 
    echo $grades[$_POST["student"]];
  ?>
</body>
</html>