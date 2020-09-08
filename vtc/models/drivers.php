<?php

class Drivers
{
  private $id;
  private $firstName;
  private $lastName;

  public function getId()
  {
    return $this->id;
  }

  public function getFirstName()
  {
    return $this->firstName;
  }
  public function setFirstName($firstName)
  {
    return $this->firstName = $firstName;
  }

  public function getLastName()
  {
    return $this->lastName;
  }
  public function setLastName($lastName)
  {
    return $this->lastName = $lastName;
  }

  public function getConnection()
  {
    try {
      $bdd = new PDO(
        'mysql:host=localhost;dbname=vtc',
        "afpaphp",
        "afpaphp"
      );
    } catch (PDOException $e) {
      print "Erreur";
    }
    return $bdd;
  }
  public function create($firstName, $lastName)
  {
    $bdd = $this->getConnection();
    $sql = $bdd->prepare(" INSERT INTO drivers (firstName, lastName) VALUES ('$firstName', '$lastName') ");

    $sql->execute();

    if (!$sql->execute()) {
      die("Not WOrking Bro!");
    }
    header("Location: index.php");
  }

  public function display()
  {
    $bdd = $this->getConnection();
    $sql = $bdd->prepare(" SELECT * FROM drivers ");

    $sql->execute();

    $result = $sql->fetchAll(PDO::FETCH_CLASS, 'Drivers');
    return $result;
  }

  // public function modify($firstName, $lastName)
  // {
  //   $bdd = $this->getConnection();
  //   $sql = $bdd->prepare(" UPDATE drivers SET firstName = '$firstName', lastName = '$lastName' ");

  //   $sql->execute($_GET['id']);

  //   // $result = $sql->fetch(PDO::FETCH_ASSOC);

  //   if (!$sql->execute()) {
  //     die("Not WOrking Bro!");
  //   }
  //   header("Location: index.php");
  // }

  // public function delete($id)
  // {
  //   $bdd = $this->getConnection();
  //   $sql = $bdd->prepare(" DELETE FROM `drivers` WHERE id = '$id' ");

  //   $sql->execute();
  // }
}