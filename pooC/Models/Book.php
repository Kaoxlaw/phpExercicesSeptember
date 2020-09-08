<?php
class Book
{
  private $id;
  private $title;
  private $author;
  private $resume;

  public function getId()
  {
    return $this->id;
  }

  public function getTitle()
  {
    return $this->title;
  }
  public function setTitle($title)
  {
    return $this->title = $title;
  }

  public function getAuthor()
  {
    return $this->author;
  }
  public function setAuthor($author)
  {
    return $this->author = $author;
  }

  public function getResume()
  {
    return $this->resume;
  }
  public function setResume($resume)
  {
    return $this->resume = $resume;
  }

  public function getConnection()
  {
    try {
      $bdd = new PDO(
        'mysql:host=localhost;dbname=biblio',
        "afpaphp",
        "afpaphp"
      );
    } catch (PDOException $e) {
      print "Erreur";
    }
    return $bdd;
  }

  public function insert($title, $author, $resume)
  {
    $bdd = $this->getConnection();
    $sql = $bdd->prepare(" INSERT INTO book (title, author, resume) VALUES ('$title', '$author', '$resume') ");

    $sql->execute();

    if (!$sql->execute()) {
      die("Not WOrking Bro!");
    }
    header("Location: index.php");
  }

  public function display()
  {
    $bdd = $this->getConnection();
    $sql = $bdd->prepare(" SELECT * FROM book ");

    $sql->execute();

    $result = $sql->fetchAll(PDO::FETCH_CLASS, 'Book');
    return $result;
  }
}