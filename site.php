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

  $phrase = "Marko Academy";
  echo $phrase;
  echo "<br>";
  echo strtolower($phrase);
  echo "<br>";
  echo strtoupper($phrase);
  echo "<br>";
  echo strlen($phrase);
  echo "<br>";
  echo $phrase[0] = "B";
  echo "<br>";
  echo $phrase;
  echo "<br>";
  echo $phrase[1];
  echo "<br>";
  echo str_replace("Barko", "Panda", $phrase);
  echo "<br>";
  echo $phrase;
  echo "<br>";
  echo substr($phrase, 8, 3);

  ?>
</body>
</html>