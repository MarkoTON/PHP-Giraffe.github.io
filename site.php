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
    class Book {
      var $title;
      var $author;
      var $pages;      
    };

    $book1 = new Book;
    $book1->title = "Harry Potter";
    $book1->author = "JK Rowling";
    $book1->pages = 400;

    $book2 = new Book;
    $book2->title = "Title";
    $book2->author = "Author";
    $book2->pages = 456;

    echo $book1->title;
    echo "<br>";
    echo $book2->title;
  ?>
</body>
</html>