<?php
require_once 'models.php';
class Drivers extends Models
{
  private $id_drivers;
  private $firstName;
  private $lastName;

  public function getIdDrivers()
  {
    return $this->id_drivers;
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

  public function create($firstName, $lastName)
  {
    $bdd = Models::getConnection();
    $sql = $bdd->prepare(" INSERT INTO drivers (firstName, lastName) VALUES ('$firstName', '$lastName') ");


    if (!$sql->execute()) {
      die("Not WOrking Bro!");
    }
    header("Location: index.php");
  }

  public function display($table)
  {
    $bdd = Models::getConnection();
    $sql = $bdd->prepare(" SELECT * FROM $table ");

    $sql->execute();

    $result = $sql->fetchAll(PDO::FETCH_CLASS, $table);
    return $result;
  }

  public function update($id, $firstName, $lastName)
  {
    $bdd = Models::getConnection();
    $sql = $bdd->prepare(" UPDATE drivers SET firstName = '" . $firstName . "', lastName = '" . $lastName . "' WHERE id_drivers = " . $id);

    if (!$sql->execute()) {
      die("Not WOrking Bro!");
    }
    header("Location: index.php");
  }
}