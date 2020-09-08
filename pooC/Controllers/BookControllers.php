<?php
require_once './Models/Book.php';
class BookControllers
{
  public function add()
  {
    require_once './Views/addBook.html';

    $book = new Book();
    if (isset($_POST['submit'])) {
      $title = $book->setTitle($_POST['title']);
      $author = $book->setAuthor($_POST['author']);
      $resume = $book->setResume($_POST['resume']);

      $book->insert($title, $author, $resume);
    }
  }
  public function displayBook()
  {
    $book = new Book();

    $list = $book->display();

    require_once './Views/showBook.php';
  }
}