<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <br>
  <?php 
    class Chef {
      function makeChicken(){
        echo "The chef makes chicken <br>";
      }
      function makeSalad(){
        echo "The chef makes salad <br>";
      }
      function makeSpecialDish(){
        echo "The chef makes bbq ribs <br>";
      }
    };

    class ItalianChef extends Chef {
      function makePasta(){
        echo "The chef make pasta.";
      }
      function makeSpecialDish(){
        echo "The chef make makaronas. <br>";
      }
    }

    $chef = new Chef();
    $chef->makeSpecialDish();

    $chef1 = new ItalianChef();
    $chef1->makeSpecialDish();
    $chef1->makePasta();
    
  ?>
</body>
</html>