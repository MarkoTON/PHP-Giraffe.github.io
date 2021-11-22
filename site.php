<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  Array:
  <br>
  <?php 
    
    // $frends = array("Kevin", 1, false, "Karen", "Oscar", "Jim");
    // $frends = ["Kevin", 1, false, "Karen", "Oscar", "Jim"];
    $frends = array("Kevin", "Karen", "Oscar", "Jim");
    $frends[1] = "Dwoght";
    $frends[2] = 5555;
    $frends[4] = "marko";
    $frends[6] = "Metallica";
    echo var_dump($frends);
    echo $frends[5];

  ?>
</body>
</html>