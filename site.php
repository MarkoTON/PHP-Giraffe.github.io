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

      function __construct($aTitle, $aAuthor, $aPages)
      {
        // echo "New Book Created <br>";
        // echo "New $name <br>";
        $this ->title = $aTitle;
        $this ->author = $aAuthor;
        $this ->pages = $aPages;
      }
    };

    // $book1 = new Book("Marko");
    // $book1->title = "Harry Potter";
    // $book1->author = "JK Rowling";
    // $book1->pages = 400;

    // $book2 = new Book("John");
    // $book2->title = "Title";
    // $book2->author = "Author";
    // $book2->pages = 456;

    $book1 = new Book("Title for book 1", "Author for book 1", "Pages for book 1");
    $book2 = new Book("Title for book 2", "Author for book 2", "Pages for book 3");

    echo $book1->title;
    echo "<br>";
    echo $book2->title;
  ?>
</body>
</html>