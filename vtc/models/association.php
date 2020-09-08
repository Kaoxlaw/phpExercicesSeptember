<?php

class Association
{
  private $id_association;
  private $drivers;
  private $vehicles;

  public function getId_association()
  {
    return $this->id_association;
  }

  public function getDrivers()
  {
    return $this->drivers;
  }
  public function setDrivers($drivers)
  {
    return $this->drivers = $drivers;
  }

  public function getVehicles()
  {
    return $this->vehicles;
  }
  public function setVehicles($vehicles)
  {
    return $this->vehicles = $vehicles;
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

  public function create($drivers, $vehicles)
  {
    $bdd = $this->getConnection();
    $sql = $bdd->prepare(" INSERT INTO association (drivers, vehicules) VALUES ('$drivers', '$vehicles') ");

    if (!$sql->execute()) {
      die("Not WOrking Bro!");
    }
    header("Location: vehicles.php");
  }

  public function displayDrivers()
  {
    $bdd = $this->getConnection();
    $sql = $bdd->prepare(" SELECT * FROM drivers ");

    $sql->execute();

    while ($result = $sql->fetch()) {
      echo "<option>" . $result['firstName'] . " " . $result['lastName'] . "</option>";
    };
  }

  public function display()
  {
    $bdd = $this->getConnection();
    $sql = $bdd->prepare(" SELECT * FROM association ");

    $sql->execute();

    $result = $sql->fetchAll(PDO::FETCH_CLASS, 'Association');
    return $result;
  }
}