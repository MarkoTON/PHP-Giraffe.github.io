<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <!-- I wake up 
  If I'm hungry
    I eat breakast

  I look at my phone
  If it's about to die
    I charge it

  I leave mu house
  If it's cloudy
    I bring an umbrella
  Otherwise
    I bring sunglasses -->
  <br>
  <?php 
    $isMale = false;
    $isTall = true;
    // else if or elseif - moze i jedno i drugo da se kuca
    if($isMale && $isTall){
      echo "It is male and it is tall";
    } elseif ($isMale = false && $isTall = true) {
      echo "It is not male but it is tall";
    }
  ?>
</body>
</html>