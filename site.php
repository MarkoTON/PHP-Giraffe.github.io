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
    // echo max(3,6);
    function getMax($num1, $num2){
      if($num1 == $num2){
        echo "They are =";
      } else if ($num1 > $num2) {
        echo "$num1 is bigger";
      } else {
        echo "$num2 is bigger";
      }
    }

    getMax(5,5);
  ?>
</body>
</html>