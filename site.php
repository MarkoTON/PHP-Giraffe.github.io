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
    What was your grade? <br>
    <input type="text" name="grade">
    <input type="submit">
  </form>
  <br>
  <?php 
    $grade = $_POST["grade"];
    // echo $grade;
    switch($grade){
      case "A":
        echo "You did amazinf!";
        break;
      case "B":
        echo "You did well.";
        break;
      case "C":
        echo "You can do better.";
        break;
      case "D":
        echo "You suck!";
        break;
      case "F":
        echo "Hahahhaha";
        break;
      default : 
        echo "What?";
    }
  ?>
</body>
</html>