<?php

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
  return $this->autor;
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
  try{
    $db = new PDO('mysql:host=localhost;dbname=biblio', 
    "afpaphp", "afpaphp");

  } catch (PDOException $e){
    print "Erreur";
  }
}

public function insert($title, $author, $resume)
{
  $bdd = $this->getConnection();
  $sql = $bdd->prepare("INSERT INTO book (title, author, resume) VALUES ('$title', '$author', '$resume')");

  if (!$sql->execute()) {
    die("Not WOrking Bro!");
  }
  header("Location: index.php");
}