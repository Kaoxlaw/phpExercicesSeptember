<?php

class Vehicles
{
  private $id_vehicles;
  private $brand;
  private $models;
  private $color;
  private $registration;

  public function getId_vehicles()
  {
    return $this->id_vehicles;
  }

  public function getBrand()
  {
    return $this->brand;
  }
  public function setBrand($brand)
  {
    return $this->brand = $brand;
  }

  public function getModels()
  {
    return $this->models;
  }
  public function setModels($models)
  {
    return $this->models = $models;
  }

  public function getColor()
  {
    return $this->color;
  }
  public function setColor($color)
  {
    return $this->color = $color;
  }

  public function getRegistration()
  {
    return $this->registration;
  }
  public function setRegistration($registration)
  {
    return $this->registration = $registration;
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

  public function create($brand, $models, $color, $registration)
  {
    $bdd = $this->getConnection();
    $sql = $bdd->prepare(" INSERT INTO vehicles (brand, models, color, registration) VALUES ('$brand', '$models', '$color', '$registration') ");

    if (!$sql->execute()) {
      die("Not WOrking Bro!");
    }
    header("Location: vehicles.php");
  }

  public function display()
  {
    $bdd = $this->getConnection();
    $sql = $bdd->prepare(" SELECT * FROM vehicles ");

    $sql->execute();

    $result = $sql->fetchAll(PDO::FETCH_CLASS, 'Vehicles');
    return $result;
  }
}