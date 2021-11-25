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
    $title = "This is title from site.php";
    $author = "Author is from site.php";
    $wordCount = "Word Count is 400 and it comes form site.php";
    include "article-header.php";
    include "useful-tools.php";
    echo "<hr>";
    sayHi("Marko");
    echo "<br>";
    echo $feetInMile;
  ?>
</body>
</html>